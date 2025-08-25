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
        $jsonData = '{"amount":{"currency":"IDR","value":"4003.00"},"originalReferenceNo":"20250825111230999500166147200605144","merchantId":"216620000000376951592","latestTransactionStatus":"05","additionalInfo":{},"originalPartnerReferenceNo":"fd1cd10a97f717e91f82555509d1cacfc95b5d9236f01bf0fb9620387b8f068a","createdTime":"2025-08-25T10:43:02+07:00","transactionStatusDesc":"CLOSED"}';
        
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
        
        // Assertions
        $this->assertInstanceOf(FinishNotifyRequest::class, $parsedData);
        $this->assertEquals('fd1cd10a97f717e91f82555509d1cacfc95b5d9236f01bf0fb9620387b8f068a', $parsedData->getOriginalPartnerReferenceNo());
        $this->assertEquals('20250825111230999500166147200605144', $parsedData->getOriginalReferenceNo());
        $this->assertEquals('05', $parsedData->getLatestTransactionStatus());
        $this->assertEquals('CLOSED', $parsedData->getTransactionStatusDesc());
        $this->assertEquals('216620000000376951592', $parsedData->getMerchantId());
        $this->assertEquals('2025-08-25T10:43:02+07:00', $parsedData->getCreatedTime());
        
        // Check amount object
        $amount = $parsedData->getAmount();
        $this->assertInstanceOf(Money::class, $amount);
        $this->assertEquals('4003.00', $amount->getValue());
        $this->assertEquals('IDR', $amount->getCurrency());
        
        $this->assertIsObject($parsedData->getAdditionalInfo());
        $this->assertEquals('{}', json_encode($parsedData->getAdditionalInfo()));
        
        // Output JSON representation
        echo "\nDirect JSON Test - Parsed Data Output:\n";
        echo json_encode($parsedData, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
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
}