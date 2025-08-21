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
}