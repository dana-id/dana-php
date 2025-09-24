<?php
/**
 * OpenApiHeader
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DANA\Utils
 */

namespace Dana\Utils;

use Dana\Configuration as Config;
use Dana\Exceptions\ApiException;
use DateTime;
use DateTimeZone;
use Exception;
use Ramsey\Uuid\Uuid;

/**
 * OpenApiHeader Class
 *
 * @category Class
 * @package  DANA\Utils
 */
class OpenApiHeader
{
    /**
     * OpenAPI Header constants
     */
    public const VERSION = 'version';
    public const FUNCTION = 'function';
    public const CLIENT_ID = 'clientId';
    public const REQ_TIME = 'reqTime';
    public const REQ_MSG_ID = 'reqMsgId';
    public const CLIENT_SECRET = 'clientSecret';
    public const ACCESS_TOKEN = 'accessToken';
    public const RESERVE = 'reserve';

    /**
     * Basic OpenAPI runtime headers
     *
     * @var array
     */
    public static $openApiRuntimeHeaders = [
        self::VERSION,
        self::FUNCTION,
        self::CLIENT_ID,
        self::REQ_TIME,
        self::REQ_MSG_ID,
        self::CLIENT_SECRET,
        self::RESERVE,
    ];

    /**
     * OpenAPI runtime headers with access token
     *
     * @var array
     */
    public static $openApiWithAccessTokenRuntimeHeaders = [
        self::VERSION,
        self::FUNCTION,
        self::CLIENT_ID,
        self::REQ_TIME,
        self::REQ_MSG_ID,
        self::CLIENT_SECRET,
        self::ACCESS_TOKEN,
        self::RESERVE,
    ];

    /**
     * Set OpenAPI headers with signature
     *
     * @param array  $headerParams  The header parameters
     * @param Config $config        The API configuration
     * @param string $body          The request body
     * @param string $functionName  The API function name
     *
     * @return array The updated header parameters with signature
     * @throws ApiException
     */
    public static function setOpenApiHeaders(
        array $headerParams,
        Config $config,
        string $body,
        string $functionName
    ): array {
        if (empty($config)) {
            throw new ApiException('Configuration is required for OpenAPI authentication');
        }

        // Get runtime headers with signature
        $runtimeHeaders = self::getOpenApiGeneratedAuthWithSignature($config, $body, $functionName);
        $headerParams = array_merge($headerParams, $runtimeHeaders);

        // Remove sensitive data from headerParams
        foreach ($headerParams as $key => $value) {
            if (self::hasOpenApiPrefix($key, 'PRIVATE') || 
                self::hasOpenApiPrefix($key, 'private') ||
                self::hasOpenApiPrefix($key, 'DANA_ENV') || 
                self::hasOpenApiPrefix($key, 'dana_env') ||
                self::hasOpenApiPrefix($key, 'ENV') || 
                self::hasOpenApiPrefix($key, 'env')) {
                unset($headerParams[$key]);
            }
        }

        return $headerParams;
    }

    /**
     * Check if a string starts with a given prefix (case-insensitive)
     *
     * @param string $string The string to check
     * @param string $prefix The prefix to check for
     *
     * @return bool
     */
    private static function hasOpenApiPrefix(string $string, string $prefix): bool
    {
        return stripos($string, $prefix) === 0;
    }

    /**
     * Generate OpenAPI signature
     *
     * @param string $body   The request body
     * @param Config $config The API configuration
     *
     * @return string The generated signature
     * @throws ApiException
     */
    public static function generateOpenApiSignature(string $body, Config $config): string
    {
        $privateKey = self::getPrivateKey($config->getApiKey('PRIVATE_KEY'), $config->getApiKey('PRIVATE_KEY_PATH'));
        if (empty($privateKey)) {
            throw new ApiException('Private key is required for OpenAPI signature');
        }

        // Sign the data
        $signature = '';
        if (!openssl_sign($body, $signature, $privateKey, OPENSSL_ALGO_SHA256)) {
            throw new ApiException('Failed to sign data: ' . openssl_error_string());
        }

        // Encode to base64
        return base64_encode($signature);
    }

    /**
     * Get generated OpenAPI headers
     *
     * @param Config $config       The API configuration
     * @param string $body         The request body
     * @param string $functionName The API function name
     *
     * @return array The generated headers
     * @throws Exception
     */
    public static function getOpenApiGeneratedHeaders(
        Config $config,
        string $body,
        string $functionName
    ): array {
        $env = $config->getApiKey('DANA_ENV') ?: $config->getApiKey('ENV');
        if (empty($env)) {
            throw new ApiException('Environment is required for OpenAPI authentication');
        }

        // Get client ID from configuration
        $clientId = $config->getApiKey('CLIENT_ID') ?: $config->getApiKey('X_PARTNER_ID') ?: '2014000014442';

        // Generate timestamp in Jakarta time (GMT+7)
        $timezone = new DateTimeZone('Asia/Jakarta');
        $now = new DateTime('now', $timezone);
        $timestamp = $now->format('Y-m-d\TH:i:sP');

        // Generate unique request message ID
        $reqMsgId = 'sdk' . substr(Uuid::uuid4()->toString(), 3);

        // Get client secret
        $clientSecret = self::getClientSecret($config);

        // Basic OpenAPI headers
        return [
            self::VERSION => '2.0',
            self::FUNCTION => $functionName,
            self::CLIENT_ID => $clientId,
            self::REQ_TIME => $timestamp,
            self::REQ_MSG_ID => $reqMsgId,
            self::CLIENT_SECRET => $clientSecret,
            self::RESERVE => '{}',
        ];
    }

    /**
     * Get generated OpenAPI headers with signature
     *
     * @param Config $config       The API configuration
     * @param string $body         The request body
     * @param string $functionName The API function name
     *
     * @return array The generated headers with signature
     * @throws ApiException
     */
    public static function getOpenApiGeneratedAuthWithSignature(
        Config $config,
        string $body,
        string $functionName
    ): array {
        // Generate headers
        $headers = self::getOpenApiGeneratedHeaders($config, $body, $functionName);
        
        // Generate signature
        try {
            $signature = self::generateOpenApiSignature($body, $config);
            $headers['X-SIGNATURE'] = $signature;
        } catch (Exception $e) {
            throw new ApiException('Failed to generate OpenAPI signature: ' . $e->getMessage());
        }

        return $headers;
    }

    /**
     * Get client secret from configuration
     *
     * @param Config $config The API configuration
     *
     * @return string The client secret
     */
    private static function getClientSecret(Config $config): string
    {
        // Try to get client secret from configuration
        $clientSecret = $config->getApiKey('CLIENT_SECRET');
        
        return $clientSecret ?: '';
    }

    /**
     * Merge with OpenAPI runtime headers
     *
     * @param array $authFromUsers       Authentication headers from users
     * @param bool  $requiresAccessToken Whether access token is required
     *
     * @return array The merged headers
     */
    public static function mergeWithOpenApiRuntimeHeaders(
        array $authFromUsers = [],
        bool $requiresAccessToken = false
    ): array {
        $runtimeHeaders = $requiresAccessToken 
            ? self::$openApiWithAccessTokenRuntimeHeaders 
            : self::$openApiRuntimeHeaders;

        // Filter out any sensitive headers from user input
        $filteredAuth = array_filter($authFromUsers, function ($key) {
            return !self::hasOpenApiPrefix($key, 'PRIVATE') &&
                   !self::hasOpenApiPrefix($key, 'private') &&
                   !self::hasOpenApiPrefix($key, 'DANA_ENV') &&
                   !self::hasOpenApiPrefix($key, 'dana_env') &&
                   !self::hasOpenApiPrefix($key, 'ENV') &&
                   !self::hasOpenApiPrefix($key, 'env');
        }, ARRAY_FILTER_USE_KEY);

        // Merge with runtime headers
        return array_merge($runtimeHeaders, $filteredAuth);
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
    private static function convertToPEM(string $key, string $keyType): string 
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
            openssl_free_key($resource);
            return $formattedKey;
        }
        
        // If standard format fails, try RSA format
        $rsaHeader = "-----BEGIN RSA {$keyType} KEY-----";
        $rsaFooter = "-----END RSA {$keyType} KEY-----";
        $rsaFormattedKey = $rsaHeader . $delimiter . $formattedBody . $rsaFooter;
        
        return $rsaFormattedKey;
    }
}
