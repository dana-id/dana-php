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
            return file_get_contents($privateKeyPath);
        }
        
        // Handle direct private key string
        if ($privateKey) {
            // Replace escaped newlines with actual newlines
            return str_replace("\\n", "\n", $privateKey);
        }
        
        // Throw exception if neither key is provided
        throw new \InvalidArgumentException("Provide one of privateKey or privateKeyPath");
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
    public static function generateSignature(string $httpMethod, string $path, string $body, string $timestamp, string $privateKey): string
    {
        // Minify the body by removing all whitespace outside of strings
        $minifiedBody = $body ? self::minifyJson($body) : '';
                
        // Calculate SHA-256 hash of minified body
        $hashedBody = hash('sha256', $minifiedBody);
        
        // Construct data to sign
        $dataToSign = strtoupper($httpMethod) . ':' . $path . ':' . strtolower($hashedBody) . ':' . $timestamp;
        
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
     *
     * @return array Array of headers
     */
    public static function generateHeaders(string $httpMethod, string $path, string $body, 
                                           string $clientId, string $privateKey, ?string $privateKeyPath = null): array
    {
        
        // Format timestamp as YYYY-MM-DDTHH:mm:ss+07:00 in GMT+7 (Jakarta time)
        $jakartaTimezone = new \DateTimeZone('Asia/Jakarta');
        $timestamp = (new \DateTime('now', $jakartaTimezone))->format('Y-m-d\TH:i:sP');
        
        // Get the actual private key to use
        $actualPrivateKey = self::getPrivateKey($privateKey, $privateKeyPath);
        
        $signature = self::generateSignature($httpMethod, $path, $body, $timestamp, $actualPrivateKey);
        
        return [
            'X-TIMESTAMP' => $timestamp,
            'X-EXTERNAL-ID' => self::generateUuidV4(),
            'X-SIGNATURE' => $signature,
            'X-PARTNER-ID' => $clientId,
            'Content-Type' => 'application/json',
            'ORIGIN' => getenv('ORIGIN') ?: '',
            'CHANNEL-ID' => '95221',
        ];
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
