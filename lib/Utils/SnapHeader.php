<?php
/**
 * SnapHeader utility for DANA API Client
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Dana\Utils
 * @author   DANA Indonesia
 * @link     https://dashboard.dana.id/
 */

namespace Dana\Utils;

use Dana\Configuration;


/**
 * SnapHeader Class
 *
 * Provides utilities for generating security headers for DANA API requests
 *
 * @category Class
 * @package  Dana\Utils
 * @author   DANA Indonesia
 */
class SnapHeader
{
    // Signature scenario constants
    const SCENARIO_APPLY_TOKEN = 'apply_token';
    const SCENARIO_APPLY_OTT = 'apply_ott';
    const SCENARIO_UNBINDING_ACCOUNT = 'unbinding_account';
    const SCENARIO_BALANCE_INQUIRY = 'balance_inquiry';
    
    /**
     * Generate a UUID v4
     *
     * @return string UUID v4 string
     */
    private static function generateUuidV4(): string
    {
        // Generate 16 bytes of random data
        $data = random_bytes(16);
        
        // Set version to 0100 (UUID v4) and variant to 10 (RFC 4122)
        $data[6] = chr(ord($data[6]) & 0x0F | 0x40);
        $data[8] = chr(ord($data[8]) & 0x3F | 0x80);
        
        // Format the UUID
        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    }

    /**
     * Extract additional headers from request body if needed
     * 
     * @param array  &$headers Reference to the headers array to be modified
     * @param string $body     The request body JSON string
     * 
     * @return void
     */
    private static function extractAdditionalHeaders(array &$headers, string $body): void
    {
        if (empty($body)) {
            return;
        }
        
        $payload = json_decode($body, true);
        if (json_last_error() !== JSON_ERROR_NONE || !isset($payload['additionalInfo'])) {
            return; // silently ignore parse errors
        }
        
        $additionalInfo = $payload['additionalInfo'];
        if (!is_array($additionalInfo)) {
            return;
        }
        
        // Extract various fields from additionalInfo and add them as headers
        if (isset($additionalInfo['accessToken']) && !empty($additionalInfo['accessToken'])) {
            $headers['Authorization-Customer'] = 'Bearer ' . $additionalInfo['accessToken'];
        }
        
        if (isset($additionalInfo['endUserIpAddress']) && !empty($additionalInfo['endUserIpAddress'])) {
            $headers['X-IP-ADDRESS'] = $additionalInfo['endUserIpAddress'];
        }
        
        if (isset($additionalInfo['deviceId']) && !empty($additionalInfo['deviceId'])) {
            $headers['X-DEVICE-ID'] = $additionalInfo['deviceId'];
        }
        
        if (isset($additionalInfo['latitude']) && !empty($additionalInfo['latitude'])) {
            $headers['X-LATITUDE'] = $additionalInfo['latitude'];
        }
        
        if (isset($additionalInfo['longitude']) && !empty($additionalInfo['longitude'])) {
            $headers['X-LONGITUDE'] = $additionalInfo['longitude'];
        }
    }
    
    /**
     * Get the private key from various sources
     * 
     * @param string $privateKey      The private key string
     * @param string $privateKeyPath  Path to the private key file
     * 
     * @return string The actual private key to use
     */
    public static function getPrivateKey(?string $privateKey = null, ?string $privateKeyPath = null): string
    {
        // If privateKeyPath is provided and exists, it takes precedence over privateKey
        if ($privateKeyPath && file_exists($privateKeyPath)) {
            $key = file_get_contents($privateKeyPath);
            return self::convertToPEM($key, 'PRIVATE');
        }
        
        // Handle direct private key string
        if ($privateKey) {
            // Replace escaped newlines with actual newlines
            $key = str_replace("\\n", "\n", $privateKey);
            return self::convertToPEM($key, 'PRIVATE');
        }
        
        // Throw exception if neither key is provided
        throw new \InvalidArgumentException("Provide one of privateKey or privateKeyPath");
    }
    
    /**
     * Convert a key string to proper PEM format
     * Handles various key formats including:
     * - Keys without headers/footers
     * - Keys with escaped newlines (\\n)
     * - Keys without newlines
     * - Keys that might already be in proper PEM format
     * 
     * @param string $key The key content
     * @param string $keyType The type of key (e.g., 'PRIVATE', 'PUBLIC')
     * @return string The key in proper PEM format
     */
    public static function convertToPEM(string $key, string $keyType): string 
    {
        // Determine if this is an RSA key or generic private key format
        $possibleHeaders = [
            "-----BEGIN {$keyType} KEY-----",
            "-----BEGIN RSA {$keyType} KEY-----" 
        ];
        $possibleFooters = [
            "-----END {$keyType} KEY-----",
            "-----END RSA {$keyType} KEY-----"
        ];
        
        $delimiter = "\n";
        $headerFound = null;
        $footerFound = null;
        
        // Clean up the key first
        $key = trim($key);
        
        // Replace escaped newlines with actual newlines
        $key = str_replace('\\n', "\n", $key);

        // Normalize Windows CRLF/CR to LF so PEM copied from Windows works consistently
        $key = str_replace("\r\n", "\n", $key);
        $key = str_replace("\r", "\n", $key);
        
        // Check if key already has headers/footers
        foreach ($possibleHeaders as $index => $header) {
            if (strpos($key, $header) !== false && strpos($key, $possibleFooters[$index]) !== false) {
                $headerFound = $header;
                $footerFound = $possibleFooters[$index];
                break;
            }
        }
        
        // If headers/footers found, extract and clean the body
        if ($headerFound !== null && $footerFound !== null) {
            // Extract body between header and footer
            $parts = explode($headerFound, $key, 2);
            $parts = explode($footerFound, $parts[1], 2);
            $body = trim($parts[0]);
            
            // Keep the original format but ensure proper line breaks
            $body = preg_replace('/\s+/', '', $body); // Remove all whitespace
            $body = chunk_split($body, 64, $delimiter); // Format with proper line breaks
            
            return $headerFound . $delimiter . $body . $footerFound;
        }
        
        // For keys without headers/footers - try both RSA and standard formats
        // First attempt standard private key format
        $cleanKey = preg_replace('/\s+/', '', $key); // Remove all whitespace
        $formattedBody = chunk_split($cleanKey, 64, $delimiter);
        
        $standardHeader = "-----BEGIN {$keyType} KEY-----";
        $standardFooter = "-----END {$keyType} KEY-----";
        $formattedKey = $standardHeader . $delimiter . $formattedBody . $standardFooter;
        
        // Test if openssl can use this key
        $resource = @openssl_pkey_get_private($formattedKey);
        if ($resource !== false) {
            // Only call openssl_free_key() for PHP versions below 8.0
            if (version_compare(PHP_VERSION, '8.0.0', '<')) {
                openssl_free_key($resource);
            }
            return $formattedKey;
        }
        
        // If standard format fails, try RSA format
        $rsaHeader = "-----BEGIN RSA {$keyType} KEY-----";
        $rsaFooter = "-----END RSA {$keyType} KEY-----";
        $rsaFormattedKey = $rsaHeader . $delimiter . $formattedBody . $rsaFooter;
        
        return $rsaFormattedKey;
    }
    
    /**
     * Generate signature for API request
     *
     * @param string $httpMethod    HTTP method (GET, POST, etc.)
     * @param string $path          Relative path URL
     * @param string $body          HTTP request body
     * @param string $timestamp     Timestamp in ISO 8601 format
     * @param string $privateKey    PKCS#1 or PKCS#8 formatted private key
     *
     * @return string Base64 encoded signature
     */
    public static function generateSignature(string $httpMethod, string $path, string $body, string $timestamp, string $privateKey, string $scenario = '', string $clientId = ''): string
    {
        $dataToSign = '';
        
        // Handle different scenarios
        if ($scenario === self::SCENARIO_APPLY_TOKEN) {
            // Apply token signature: "<clientKey>|<timestamp>"
            $dataToSign = sprintf('%s|%s', $clientId, $timestamp);
        } else {
            // Default signature format for other scenarios
            // Minify the body by removing all whitespace outside of strings
            $minifiedBody = $body ? self::minifyJson($body) : '';
                    
            // Calculate SHA-256 hash of minified body
            $hashedBody = hash('sha256', $minifiedBody);
            
            // Construct data to sign
            $dataToSign = strtoupper($httpMethod) . ':' . $path . ':' . strtolower($hashedBody) . ':' . $timestamp;
        }
        
        // Generate signature
        $signature = '';
        openssl_sign($dataToSign, $signature, $privateKey, OPENSSL_ALGO_SHA256);
        
        return base64_encode($signature);
    }
    
    /**
     * Generate all required headers for API request
     *
     * @param string $httpMethod    HTTP method (GET, POST, etc.)
     * @param string $path          Relative path URL
     * @param string $body          HTTP request body
     * @param string $clientId      Client ID
     * @param string $privateKey    PKCS#1 or PKCS#8 formatted private key
     * @param string $privateKeyPath Optional path to private key file (prioritized over privateKey if provided)
     * @param string $scenario      The signature scenario (apply_token, apply_ott, unbinding_account, or empty for default)
     *
     * @return array Array of headers
     */
    public static function generateHeaders(string $httpMethod, string $path, string $body, 
                                           string $scenario, Configuration $config, bool $supportDebugMode = false): array
    {
        $privateKey = $config->getApiKeyWithPrefix('PRIVATE_KEY');
        $privateKeyPath = $config->getApiKeyWithPrefix('PRIVATE_KEY_PATH');
        $clientId = $config->getApiKeyWithPrefix('X_PARTNER_ID');
        $origin = $config->getApiKeyWithPrefix('ORIGIN');
        $debug = $config->getApiKeyWithPrefix('X_DEBUG');
        
        // Format timestamp as YYYY-MM-DDTHH:mm:ss+07:00 in GMT+7 (Jakarta time)
        $jakartaTimezone = new \DateTimeZone('Asia/Jakarta');
        $timestamp = (new \DateTime('now', $jakartaTimezone))->format('Y-m-d\TH:i:sP');
        
        // Get the actual private key to use
        $actualPrivateKey = self::getPrivateKey($privateKey, $privateKeyPath);
        
        $signature = self::generateSignature($httpMethod, $path, $body, $timestamp, $actualPrivateKey, $scenario, $clientId);
        
        // Base headers that apply to all scenarios
        $baseHeaders = [
            'X-TIMESTAMP' => $timestamp,
            'X-PARTNER-ID' => $clientId,
            'X-SIGNATURE' => $signature,
            'Content-Type' => 'application/json',
            'ORIGIN' => $origin,
            'CHANNEL-ID' => '95221',
        ];

        $env = strtolower(($config->getApiKeyWithPrefix('ENV') ?: $config->getApiKeyWithPrefix('DANA_ENV')) ?: 'sandbox');

        // In sandbox, enable X-Debug-Mode by default unless X_DEBUG is explicitly "false"
        $xDebug = getenv('X_DEBUG');
        $debugEnabled = ($xDebug === false || $xDebug === '') || strtolower($xDebug) !== 'false';
        if ($supportDebugMode && $env !== 'production' && $debugEnabled) {
            $baseHeaders['X-Debug-Mode'] = 1;
        }
        
        // Apply different header configurations based on the scenario
        switch ($scenario) {
            case self::SCENARIO_APPLY_TOKEN:
                // For ApplyToken, we use client key (partner ID) instead of generating a new external ID
                $baseHeaders['X-CLIENT-KEY'] = $clientId;
                break;
                
            case self::SCENARIO_APPLY_OTT:
            case self::SCENARIO_UNBINDING_ACCOUNT:
            case self::SCENARIO_BALANCE_INQUIRY:
                // For ApplyOTT and UnbindingAccount, generate an external ID
                $baseHeaders['X-EXTERNAL-ID'] = 'sdk' . substr(self::generateUuidV4(), 3);
                
                // Extract additional headers from body if needed
                self::extractAdditionalHeaders($baseHeaders, $body);
                break;
                
            default:
                // Default B2B signature scenario
                $baseHeaders['X-EXTERNAL-ID'] = 'sdk' . substr(self::generateUuidV4(), 3);
                break;
        }
        
        return $baseHeaders;
    }
    
    /**
     * Minify JSON string by removing whitespace outside of quoted strings
     *
     * @param string $json JSON string to minify
     * 
     * @return string Minified JSON string
     */
    private static function minifyJson(string $json): string
    {
        // Check if the input is valid JSON
        $decoded = json_decode($json);
        if (json_last_error() !== JSON_ERROR_NONE) {
            // If not valid JSON, return as is
            return $json;
        }
        
        // Re-encode with no whitespace
        return json_encode($decoded, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    }
    
    /**
     * Generate string to sign for debugging purposes
     *
     * @param string $httpMethod    HTTP method (GET, POST, etc.)
     * @param string $path          Relative path URL
     * @param string $body          HTTP request body
     * @param string $timestamp     Timestamp in ISO 8601 format
     *
     * @return string Data string that would be signed
     */
    public static function generateStringToSign(string $httpMethod, string $path, string $body, string $timestamp): string
    {
        $minifiedBody = $body ? self::minifyJson($body) : '';
        $hashedBody = hash('sha256', $minifiedBody);
        
        return strtoupper($httpMethod) . ':' . $path . ':' . strtolower($hashedBody) . ':' . $timestamp;
    }
}
