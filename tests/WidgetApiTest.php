<?php
/**
 * Widget API Tests
 *
 * PHP version 7.4
 *
 * @category Test
 * @package  Dana\Tests
 * @author   DANA Indonesia
 * @link     https://dashboard.dana.id/
 */

namespace Dana\Tests;

use PHPUnit\Framework\TestCase;
use Dana\Tests\Fixtures\ApiClientFixtures;
use Dana\Tests\Fixtures\WidgetFixtures;
use Dana\Widget\v1\Api\WidgetApi;
use Dana\Widget\v1\Model\ApplyTokenRequest;
use Dana\Widget\v1\Model\ApplyTokenResponse;
use Dana\Widget\v1\Model\ApplyOTTRequest;
use Dana\Widget\v1\Model\ApplyOTTResponse;
use Dana\Widget\v1\Model\UserResource;
use Dana\Widget\v1\Model\Oauth2UrlData;
use Dana\Tests\Scripts\WebAutomation;
use Dana\Widget\v1\Model\ApplyOTTRequestAdditionalInfo;
use Dana\Widget\v1\Util\Util;

/**
 * WidgetApiTest Class
 * 
 * Tests for WidgetApi operations
 */
class WidgetApiTest extends TestCase
{
    /**
     * @var WidgetApi
     */
    private $apiInstance;
    
    /**
     * @var string
     */
    private $bindingAccessToken;
    
    /**
     * @var string
     */
    private $ott;
    
    /**
     * Set up test environment
     *
     * @return void
     */
    protected function setUp(): void
    {
        $this->apiInstance = ApiClientFixtures::getWidgetApiInstance();
    }

    /**
     * Test Payment and Query
     *
     * @return void
     */
    public function testCreatePaymentAndQuery(): void
    {
        try {
            $widgetPaymentRequest = WidgetFixtures::getWidgetPaymentRequest();
            $widgetPaymentResponse = $this->apiInstance->widgetPayment($widgetPaymentRequest);
            $this->assertNotNull($widgetPaymentResponse);
            
            $this->assertEquals('2005400', $widgetPaymentResponse->getResponseCode());
            $this->assertEquals('Successful', $widgetPaymentResponse->getResponseMessage());
            $this->assertEquals($widgetPaymentRequest->getPartnerReferenceNo(), $widgetPaymentResponse->getPartnerReferenceNo());
            $this->assertNotEmpty($widgetPaymentResponse->getWebRedirectUrl());
        } catch (\Exception $e) {
            $this->fail('Error during WidgetPayment execution: ' . $e->getMessage());
        }

        try {
            // Step 2: Query Payment
            echo "Step 2: Querying payment status..." . PHP_EOL;
            $queryPaymentRequest = WidgetFixtures::getWidgetQueryPaymentRequest(
                $widgetPaymentRequest,
                $widgetPaymentResponse
            );
            
            $queryPaymentResponse = $this->apiInstance->queryPayment($queryPaymentRequest);
            
            $this->assertNotNull($queryPaymentResponse);
            $this->assertEquals('2005500', $queryPaymentResponse->getResponseCode());
            $this->assertEquals('Successful', $queryPaymentResponse->getResponseMessage());
            $this->assertEquals($widgetPaymentRequest->getPartnerReferenceNo(), $queryPaymentResponse->getOriginalPartnerReferenceNo());
        } catch (\Exception $e) {
            $this->fail('Error during QueryPayment execution: ' . $e->getMessage());
        }
    }    
    
    /**
     * Test Widget Cancel Order API
     *
     * @return void
     */
    public function testWidgetCancelOrder(): void
    {
        // Skip test if no API client credentials are available
        if (empty(getenv('X_PARTNER_ID')) || empty(getenv('PRIVATE_KEY'))) {
            $this->markTestSkipped('Skipping test: No API client credentials');
        }
        
        // Create a payment first
        $widgetPaymentRequest = WidgetFixtures::getWidgetPaymentRequest();
        
        try {
            $widgetPaymentResponse = $this->apiInstance->widgetPayment($widgetPaymentRequest);
            $this->assertNotNull($widgetPaymentResponse);
            
            // Test CancelOrder
            $cancelOrderRequest = WidgetFixtures::getWidgetCancelOrderRequest($widgetPaymentRequest);
            $cancelOrderResponse = $this->apiInstance->cancelOrder($cancelOrderRequest);
            
            $this->assertNotNull($cancelOrderResponse);
            $this->assertEquals($widgetPaymentRequest->getPartnerReferenceNo(), $cancelOrderResponse->getOriginalPartnerReferenceNo());
        } catch (\Exception $e) {
            $this->fail('Error during CancelOrder execution: ' . $e->getMessage());
        }
    }    
}
