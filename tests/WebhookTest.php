<?php

declare(strict_types=1);

namespace Dana\Test\Webhook;

use Dana\Webhook\v1\WebhookParser;
use Dana\Webhook\v1\Money;
use Dana\Webhook\v1\FinishNotifyRequest;
use PHPUnit\Framework\TestCase;
use Dana\Tests\Fixtures\WebhookFixtures;

class WebhookTest extends TestCase
{
    public function testParseWebhook(): void
    {
        // Load webhook test data from fixture
        $fixtureData = WebhookFixtures::getWebhookData();
        $webhookHttpMethod = $fixtureData['httpMethod'];
        $webhookRelativeURL = $fixtureData['relativeURL'];
        $webhookBody = $fixtureData['body'];
        
        // Convert webhook body to JSON string
        $webhookBodyStr = json_encode($webhookBody, JSON_THROW_ON_ERROR);
        $minifiedWebhookBodyStr = json_encode(json_decode($webhookBodyStr), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        
        // Generate headers using WebhookFixtures
        $generatedHeaders = WebhookFixtures::generateWebhookHeaders(
            $webhookHttpMethod, 
            $webhookRelativeURL, 
            $minifiedWebhookBodyStr,
            false // Set to true if you want to generate a new timestamp each time
        );
        
        $this->assertArrayHasKey('X-SIGNATURE', $generatedHeaders);
        $this->assertNotEmpty($generatedHeaders['X-SIGNATURE']);
        $this->assertArrayHasKey('X-TIMESTAMP', $generatedHeaders);
        $this->assertNotEmpty($generatedHeaders['X-TIMESTAMP']);

        $publicKey = getenv('WEBHOOK_PUBLIC_KEY');
        $parser = WebhookParser::create($publicKey);
        $this->assertInstanceOf(WebhookParser::class, $parser);
        
        $headers = [
            'X-SIGNATURE' => $generatedHeaders['X-SIGNATURE'],
            'X-TIMESTAMP' => $generatedHeaders['X-TIMESTAMP'],
        ];
        
        $parsedData = $parser->parseWebhook(
            $webhookHttpMethod,
            $webhookRelativeURL,
            $headers,
            $webhookBodyStr
        );
        
        $this->assertInstanceOf(FinishNotifyRequest::class, $parsedData);
        $this->assertEquals($webhookBody['originalPartnerReferenceNo'], $parsedData->getOriginalPartnerReferenceNo());
        $this->assertEquals($webhookBody['originalReferenceNo'], $parsedData->getOriginalReferenceNo());
        
        $amount = $parsedData->getAmount();
        $this->assertInstanceOf(Money::class, $amount);
        $this->assertEquals($webhookBody['amount']['value'], $amount->getValue());
        $this->assertEquals($webhookBody['amount']['currency'], $amount->getCurrency());
        
        $this->assertEquals($webhookBody['latestTransactionStatus'], $parsedData->getLatestTransactionStatus());

        // Echo the raw JSON representation of the object
        echo "\nParsed Data JSON output:\n";
        echo json_encode($parsedData, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
        echo "\n\nAdditionalInfo type: " . gettype($parsedData->getAdditionalInfo()) . "\n";
        echo "AdditionalInfo JSON: " . json_encode($parsedData->getAdditionalInfo(), JSON_PRETTY_PRINT) . "\n";
    }

    public function testDirectJsonProcessing(): void
    {
        // Load keys from environment variables
        $publicKey = getenv('WEBHOOK_PUBLIC_KEY');
        
        $webhookHttpMethod = 'POST';
        $webhookRelativeUrl = '/api/v2/test-notif/dana';
        
        $webhookBodyStr = '{"amount":{"currency":"IDR","value":"100000.00"},"originalReferenceNo":"20250916111230999500166191900293793","merchantId":"216620080007039826152","latestTransactionStatus":"00","additionalInfo":{"paidTime":"1757998714761","paymentInfo":{"payOptionInfos":[{"transAmount":{"currency":"IDR","value":"100000.00"},"payAmount":{"currency":"IDR","value":"100000.00"},"payMethod":"NETWORK_PAY","payOption":"NETWORK_PAY_PG_LINKAJA"}],"extendInfo":"{\"externalPromoInfos\":[]}"}},"originalPartnerReferenceNo":"LINKIT25091757998646","createdTime":"1757998647000","finishedTime":"1757998714761","transactionStatusDesc":"SUCCESS"}';
        
        $xTimestamp = '2025-09-16T12:11:30+07:00';
        $signature = 'd/7mle7A+FCl4zvBZ2dMr3s7TVbbaK+toMtZwoev4OmLhn6Ctz/ynMaL3m3vHjAmV3UL3Fq5xp9thZFsO8BY74Vehqr1N9LQblV6i3TfMwT6lMvvhzWr0Fjbasyj23c5nFu1MOxpBiZFMMDNh8GQNLBAehHbjOmNldXSL6OQYRrK/TN9tdDyYFK6ltnKf4BN6bZa2ViAlI/np/U3QBW2LnDL82+8ZK7tYVF5bZyLLUSLXeWXBGQFTSDWqN+JdUHSnxGdQr3hZ7Y9Vqm/7G6rj6NrCxLPiEJYq1DQO3DjokMsORA2lOxzuo53bwqmhmD1mFhJKWF1JmyJuFdo2HB9JA==';
        
        $headers = [
            'Channel-Id' => 'DANA',
            'Charset' => 'UTF-8',
            'Content-Type' => 'application/json',
            'User-Agent' => 'Jakarta Commons-HttpClient/3.1',
            'X-External-Id' => 'cFQ0PK5yS9wkMTMOVem4fIoUuyuA28jg',
            'X-Partner-Id' => '2025090110410957288340',
            'X-Signature' => $signature,
            'X-Timestamp' => $xTimestamp
        ];
        
        // Create the parser with the public key
        $parser = WebhookParser::create($publicKey);
        
        // Verify and parse
        $result = $parser->parseWebhook(
            $webhookHttpMethod,
            $webhookRelativeUrl,
            $headers,
            $webhookBodyStr
        );
        
        // Verify specific fields like in the Go test
        $this->assertNotNull($result);
        $this->assertEquals('LINKIT25091757998646', $result->getOriginalPartnerReferenceNo());
        $this->assertEquals('20250916111230999500166191900293793', $result->getOriginalReferenceNo());
        $this->assertEquals('216620080007039826152', $result->getMerchantId());
        $this->assertEquals('100000.00', $result->getAmount()->getValue());
        $this->assertEquals('IDR', $result->getAmount()->getCurrency());
        $this->assertEquals('00', $result->getLatestTransactionStatus());
    }

    public function testWebhookWithAdditionalInfo(): void
    {
        $jsonData = <<<JSON
{
  "amount": {
    "currency": "IDR",
    "value": "4003.00"
  },
  "originalReferenceNo": "20250825111230999500166147200605144",
  "merchantId": "216620000000376951592",
  "latestTransactionStatus": "05",
  "additionalInfo": {
    "paymentInfo": {
      "cashierRequestId": "CR123456789",
      "paidTime": "2025-08-25T10:40:05+07:00",
      "payOptionInfos": [
        {
          "payMethod": "BALANCE",
          "payAmount": {
            "value": "4003.00",
            "currency": "IDR"
          }
        }
      ],
      "payRequestExtendInfo": "{\"cardType\":\"DEBIT\"}",
      "extendInfo": "{\"processingFee\":\"0.00\"}"
    },
    "shopInfo": {
      "shopId": "S12345",
      "externalShopId": "216620000000376951592",
      "operatorId": "T9876"
    },
    "extendInfo": "{\"customerEmail\":\"user@example.com\"}",
    "extendInfoClosedReason": "Payment completed successfully"
  },
  "originalPartnerReferenceNo": "fd1cd10a97f717e91f82555509d1cacfc95b5d9236f01bf0fb9620387b8f068a",
  "createdTime": "2025-08-25T10:43:02+07:00",
  "transactionStatusDesc": "CLOSED"
}
JSON;
        
        // Create WebhookParser instance
        $publicKey = getenv('WEBHOOK_PUBLIC_KEY');
        $parser = WebhookParser::create($publicKey);
        
        // Generate mock webhook headers for testing
        $webhookHttpMethod = 'POST';
        $webhookRelativeURL = '/webhook/payment-notifications';
        $generatedHeaders = WebhookFixtures::generateWebhookHeaders(
            $webhookHttpMethod,
            $webhookRelativeURL,
            $jsonData,
            false // Use fixed timestamp
        );
        
        $headers = [
            'X-SIGNATURE' => $generatedHeaders['X-SIGNATURE'],
            'X-TIMESTAMP' => $generatedHeaders['X-TIMESTAMP'],
        ];
        
        // Parse webhook data
        $parsedData = $parser->parseWebhook(
            $webhookHttpMethod,
            $webhookRelativeURL,
            $headers,
            $jsonData
        );
        
        $this->assertInstanceOf(FinishNotifyRequest::class, $parsedData);
        $this->assertEquals('fd1cd10a97f717e91f82555509d1cacfc95b5d9236f01bf0fb9620387b8f068a', $parsedData->getOriginalPartnerReferenceNo());
        $this->assertEquals('20250825111230999500166147200605144', $parsedData->getOriginalReferenceNo());
        
        $additionalInfo = $parsedData->getAdditionalInfo();
        $this->assertNotNull($additionalInfo);
        $this->assertInstanceOf('\Dana\Webhook\v1\FinishNotifyRequestAdditionalInfo', $additionalInfo);
        
        $paymentInfo = $additionalInfo->getPaymentInfo();
        $this->assertNotNull($paymentInfo);
        $this->assertInstanceOf('\Dana\Webhook\v1\FinishNotifyPaymentInfo', $paymentInfo);
        $this->assertEquals('CR123456789', $paymentInfo->getCashierRequestId());
        $this->assertEquals('2025-08-25T10:40:05+07:00', $paymentInfo->getPaidTime());
        
        $payOptionInfos = $paymentInfo->getPayOptionInfos();
        $this->assertNotEmpty($payOptionInfos);
        $this->assertCount(1, $payOptionInfos);
        
        // Verify first pay option info
        $firstOption = $payOptionInfos[0];
        $this->assertNotNull($firstOption);
        $this->assertEquals('BALANCE', $firstOption->getPayMethod());
        
        // Verify payAmount in payOptionInfos
        $payAmount = $firstOption->getPayAmount();
        $this->assertNotNull($payAmount);
        $this->assertEquals('4003.00', $payAmount->getValue());
        $this->assertEquals('IDR', $payAmount->getCurrency());
        
        // Verify extendInfo properties in paymentInfo
        $this->assertEquals('{"cardType":"DEBIT"}', $paymentInfo->getPayRequestExtendInfo());
        $this->assertEquals('{"processingFee":"0.00"}', $paymentInfo->getExtendInfo());
        
        // Verify shopInfo properties
        $shopInfo = $additionalInfo->getShopInfo();
        $this->assertNotNull($shopInfo);
        $this->assertEquals('S12345', $shopInfo->getShopId());
        $this->assertEquals('216620000000376951592', $shopInfo->getExternalShopId());
        $this->assertEquals('T9876', $shopInfo->getOperatorId());
        
        // Verify top-level additionalInfo properties
        $this->assertEquals('{"customerEmail":"user@example.com"}', $additionalInfo->getExtendInfo());
        $this->assertEquals('Payment completed successfully', $additionalInfo->getExtendInfoClosedReason());
        
        // JSON serialization test
        $serializedJson = json_encode($additionalInfo);
        $this->assertNotEquals('{}', $serializedJson);
        $this->assertStringContainsString('paymentInfo', $serializedJson);
        $this->assertStringContainsString('shopInfo', $serializedJson);
        
        // Output JSON representation
        echo "\nAdditionalInfo JSON Test - Parsed Data Output:\n";
        echo json_encode($parsedData, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    }

    public function testWebhookWithDoubleEscapedQuotes(): void
    {
        // Load keys from environment variables
        $publicKey = getenv('WEBHOOK_PUBLIC_KEY');
        
        $webhookHttpMethod = 'POST';
        $webhookRelativeUrl = '/d34021fa-7599-413b-8743-ddab605fea49';
        
        // This webhook body contains double-escaped quotes in extendInfo field
        $webhookBodyStr = '{"amount":{"currency":"IDR","value":"50000.00"},"originalReferenceNo":"20251010111230999500166931000229476","merchantId":"216620090016041032029","latestTransactionStatus":"00","additionalInfo":{"paidTime":"2025-10-10T16:16:33+07:00","paymentInfo":{"payOptionInfos":[{"transAmount":{"currency":"IDR","value":"50000.00"},"payAmount":{"currency":"IDR","value":"50000.00"},"payMethod":"VIRTUAL_ACCOUNT","payOption":"VIRTUAL_ACCOUNT_BRI"}],"extendInfo":"{\\"externalPromoInfos\\":[]}"}},"originalPartnerReferenceNo":"ORDER-1760087736146","createdTime":"2025-10-10T16:15:37+07:00","finishedTime":"2025-10-10T16:16:33+07:00","transactionStatusDesc":"SUCCESS"}';
        
        $xTimestamp = '2025-10-13T13:43:30+07:00';
        $signature = 'fqrQPxlzEN4ZGW9vYt3PokmIrbG2HQtlbdj6krjf9HFW1qS3ilZjSR+9Z4XZNYxQIxyHHqXmjEiBU4ui/JrknSXlCpPQe7DztB/Ye+yLxIHYBnwdeCXn2zGGAV51nQki+eD2aL8Z6d6MyWz9hoytwE+jtWKUC0KtU7wQfoB0XjdEXzU3/4Ao/rWQbt97UONaaf7i5l3+M/ICP187PYw9iRHLUFh7WRPs8JKpZyO0kcJqEJbeOUjHMmIsLQImOlYVbQTM/1v89Ou1WcVAo0cXNE5yrvosB4pQROeI8KY2X1FNTuB1pdFtQTIyUcd/t1wuIxqHqqFKjrFdcQxlZOIyRg==';
        
        $headers = [
            'Channel-Id' => 'DANA',
            'Charset' => 'UTF-8',
            'Content-Type' => 'application/json',
            'User-Agent' => 'Jakarta Commons-HttpClient/3.1',
            'X-External-Id' => 'nXPTWcwt7lgCOy01wWGKDerEMlKwV5wc',
            'X-Partner-Id' => '2025091611385324660336',
            'X-Signature' => $signature,
            'X-Timestamp' => $xTimestamp
        ];
        
        // Create the parser with the public key
        $parser = WebhookParser::create($publicKey);
        
        // Verify and parse - this should work with the JSON normalization
        $result = $parser->parseWebhook(
            $webhookHttpMethod,
            $webhookRelativeUrl,
            $headers,
            $webhookBodyStr
        );
        
        // Verify specific fields like in the Go test
        $this->assertNotNull($result);
        $this->assertEquals('ORDER-1760087736146', $result->getOriginalPartnerReferenceNo());
        $this->assertEquals('20251010111230999500166931000229476', $result->getOriginalReferenceNo());
        $this->assertEquals('216620090016041032029', $result->getMerchantId());
        $this->assertEquals('50000.00', $result->getAmount()->getValue());
        $this->assertEquals('IDR', $result->getAmount()->getCurrency());
        $this->assertEquals('00', $result->getLatestTransactionStatus());
    }
}