<?php

namespace Dana\Widget\v1\Util;

use Dana\Widget\v1\Model\Oauth2UrlData;
use Dana\Utils\SnapHeader;

class Util
{
    /**
     * Generate OAuth URL for testing
     *
     * @param Oauth2UrlData|array $data OAuth URL data
     * @param string|null $privateKey Optional private key content
     * @param string|null $privateKeyPath Optional path to private key file
     * @return string The generated OAuth URL
     */
    public static function generateOauthUrl(Oauth2UrlData $data, ?string $privateKey = null, ?string $privateKeyPath = null): string
    {
        // Use environment variable or default to sandbox
        $env = getenv('ENV') ?: 'sandbox';
        
        // Determine base URL based on environment
        if ($env === 'sandbox') {
            $baseUrl = 'https://m.sandbox.dana.id/n/ipg/oauth';
        } else {
            $baseUrl = 'https://m.dana.id/n/ipg/oauth';
        }
        
        // Get partner ID from environment
        $partnerId = getenv('X_PARTNER_ID');
        if (!$partnerId) {
            throw new \RuntimeException('X_PARTNER_ID is not defined');
        }

        // Use provided state or generate a new UUID
        $state = $data->getState();
        if (empty($state)) {
            $state = sprintf('%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
                // 32 bits for "time_low"
                mt_rand(0, 0xffff), mt_rand(0, 0xffff),
                // 16 bits for "time_mid"
                mt_rand(0, 0xffff),
                // 16 bits for "time_hi_and_version",
                // four most significant bits holds version number 4
                mt_rand(0, 0x0fff) | 0x4000,
                // 16 bits, 8 bits for "clk_seq_hi_res",
                // 8 bits for "clk_seq_low",
                // two most significant bits holds zero and one for variant DCE1.1
                mt_rand(0, 0x3fff) | 0x8000,
                // 48 bits for "node"
                mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff)
            );
        }

        // Generate channel ID and scopes
        $channelId = getenv('X_PARTNER_ID');
        $scopes = $data->getScopes() ?: 'CASHIER,AGREEMENT_PAY,QUERY_BALANCE,DEFAULT_BASIC_PROFILE,MINI_DANA';

        // Use provided external ID or generate a UUID
        $externalId = $data->getExternalId();
        if (empty($externalId)) {
            // Generate a UUID v4
            $externalId = sprintf('%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
                mt_rand(0, 0xffff), mt_rand(0, 0xffff),
                mt_rand(0, 0xffff),
                mt_rand(0, 0x0fff) | 0x4000,
                mt_rand(0, 0x3fff) | 0x8000,
                mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff)
            );
        }
        $merchantId = $data->getMerchantId();

        // Generate timestamp in Jakarta time (UTC+7) with RFC3339 format
        try {
            $jakarta = new \DateTimeZone('Asia/Jakarta');
            $now = new \DateTime('now', $jakarta);
            $timestamp = $now->format('Y-m-d\TH:i:sP');
        } catch (\Exception $e) {
            // Fallback if Jakarta timezone is not available
            $now = new \DateTime('now', new \DateTimeZone('UTC'));
            $now->add(new \DateInterval('PT7H')); // Add 7 hours for UTC+7
            $timestamp = str_replace('+00:00', '+07:00', $now->format('Y-m-d\TH:i:sP'));
        }

        // Build URL with required parameters
        $urlParams = [
            'partnerId' => $partnerId,
            'scopes' => $scopes,
            'externalId' => $externalId,
            'channelId' => $channelId,
            'redirectUrl' => $data->getRedirectUrl(),
            'timestamp' => $timestamp,
            'state' => $state,
            'isSnapBI' => 'true'
        ];

        // Add merchant ID if provided
        if ($merchantId) {
            $urlParams['merchantId'] = $merchantId;
        }

        // Add subMerchantId if provided
        if (method_exists($data, 'getSubMerchantId') && $data->getSubMerchantId()) {
            $urlParams['subMerchantId'] = $data->getSubMerchantId();
        }

        // Add lang if provided
        if (method_exists($data, 'getLang') && $data->getLang()) {
            $urlParams['lang'] = $data->getLang();
        }

        // Add allowRegistration if provided
        if (method_exists($data, 'getAllowRegistration') && $data->getAllowRegistration() !== null) {
            $urlParams['allowRegistration'] = $data->getAllowRegistration() ? 'true' : 'false';
        }

        // Handle seamless data if provided
        $seamlessData = $data->getSeamlessData();
        if (!empty($seamlessData)) {
            // Convert object to array if it's an object
            if (is_object($seamlessData)) {
                $seamlessData = json_decode(json_encode($seamlessData), true);
            }
            
            // Ensure seamlessData is an array and convert mobileNumber to mobile if needed
            if (is_array($seamlessData)) {
                if (isset($seamlessData['mobileNumber'])) {
                    $seamlessData['mobile'] = $seamlessData['mobileNumber'];
                    unset($seamlessData['mobileNumber']);
                }
                $seamlessDataJson = json_encode($seamlessData);
                $urlParams['seamlessData'] = $seamlessDataJson;
                
                $urlParams['seamlessSign'] = self::generateSeamlessSign($seamlessData, $privateKey, $privateKeyPath);
            }
        }

        return $baseUrl . '?' . http_build_query($urlParams);
    }
    
    /**
     * Generate seamless sign for OAuth URL
     *
     * @param array $seamlessData The seamless data to sign
     * @param string|null $privateKey Optional private key content
     * @param string|null $privateKeyPath Optional path to private key file
     * @return string The generated signature
     */
    private static function generateSeamlessSign(array $seamlessData, ?string $privateKey = null, ?string $privateKeyPath = null): string
    {
        try {
            $privateKey = SnapHeader::getPrivateKey($privateKey, $privateKeyPath);
            $dataToSign = json_encode($seamlessData);
        } catch (\Exception $e) {
            // For testing purposes, generate a mock signature if private key is not available
            return hash('sha256', json_encode($seamlessData) . time());
        }
        
        // Actual implementation would use the private key to sign the data
        $signature = '';
        openssl_sign($dataToSign, $signature, $privateKey, OPENSSL_ALGO_SHA256);
        return base64_encode($signature);
    }
}