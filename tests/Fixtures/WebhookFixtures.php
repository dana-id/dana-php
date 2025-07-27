<?php

declare(strict_types=1);

namespace Dana\Tests\Fixtures;

use Dana\Utils\SnapHeader;

/**
 * WebhookFixtures class for generating webhook test fixtures
 */
class WebhookFixtures
{
    /**
     * Get webhook test data for testing
     *
     * @return array<string, mixed> Test data
     */
    public static function getWebhookData(): array
    {
        return [
            'httpMethod' => 'POST',
            'relativeURL' => '/v1.0/debit/notify',
            'body' => [
                'originalPartnerReferenceNo' => 'TESTPN20240101001',
                'originalReferenceNo' => 'TESTREF20240101001',
                'merchantId' => 'TESTMERCH001',
                'subMerchantId' => 'TESTSUBMERCH001',
                'amount' => [
                    'value' => '15000.00',
                    'currency' => 'IDR',
                ],
                'latestTransactionStatus' => '00',
                'transactionStatusDesc' => 'Success',
                'createdTime' => '2024-01-01T10:00:00+07:00',
                'finishedTime' => '2024-01-01T10:00:05+07:00',
            ]
        ];
    }
    
    /**
     * Generate headers needed for webhook testing
     *
     * @param string $httpMethod HTTP method (GET, POST, etc.)
     * @param string $relativeUrl Relative URL path
     * @param string $body Request body as JSON string
     * @param bool $generateTimestamp Whether to generate timestamp or use current time
     * @return array<string, string> Headers array
     */
    public static function generateWebhookHeaders(
        string $httpMethod,
        string $relativeUrl,
        string $body,
        bool $generateTimestamp = false
    ): array {
        $privateKeyContent = getenv('WEBHOOK_PRIVATE_KEY');
        $privateKey = SnapHeader::getPrivateKey($privateKeyContent);
        
        if ($generateTimestamp) {
            // Try to set timezone to Jakarta
            try {
                $jakartaTz = new \DateTimeZone('Asia/Jakarta');
                $now = new \DateTime('now', $jakartaTz);
            } catch (\Exception $e) {
                // Fallback if timezone not available
                $now = new \DateTime('now', new \DateTimeZone('UTC'));
                // Add 7 hours for Jakarta time (UTC+7)
                $now->modify('+7 hours');
            }
            
            // Format timestamp similar to Go implementation
            $timestamp = $now->format('Y-m-d\TH:i:sP');
        } else {
            // Use fixed timestamp for tests by default
            $timestamp = '2021-07-01T07:00:00+07:00'; 
        }
        
        $signature = SnapHeader::generateSignature(
            $httpMethod,
            $relativeUrl,
            $body,
            $timestamp,
            $privateKey
        );
        
        return [
            'X-SIGNATURE' => $signature,
            'X-TIMESTAMP' => $timestamp,
        ];
    }
}
