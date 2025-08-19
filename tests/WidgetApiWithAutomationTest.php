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
class WidgetApiWithAutomationTest extends TestCase
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
     * Test Binding Flow - OAuth, ApplyToken, ApplyOTT, Payment, Query, Refund, Unbind
     * 
     * This test runs the complete binding flow from OAuth to ApplyToken to ApplyOTT
     *
     * @return void
     */
    public function testCompleteProcess(): void
    {
        $merchantId = getenv('MERCHANT_ID');
        $privateKey = getenv('PRIVATE_KEY');
        $privateKeyPath = getenv('PRIVATE_KEY_PATH');
        
        $oauth2UrlData = new Oauth2UrlData();
        $oauth2UrlData->setRedirectUrl('https://google.com');
        $oauth2UrlData->setMerchantId($merchantId);
        $oauth2UrlData->setSeamlessData([
            'mobileNumber' => '087875849373'
        ]);
        
        $oauthUrl = Util::generateOauthUrl($oauth2UrlData, $privateKey, $privateKeyPath);
        echo 'Generated OAuth URL for binding flow: ' . $oauthUrl . PHP_EOL;
        $this->assertNotEmpty($oauthUrl, 'OAuth URL should not be empty');
        
        // Required parameters validation
        $urlParts = parse_url($oauthUrl);
        parse_str($urlParts['query'], $urlParams);
        
        $this->assertEquals(getenv('X_PARTNER_ID'), $urlParams['partnerId'], 'Partner ID should match');
        $this->assertEquals($merchantId, $urlParams['merchantId'], 'Merchant ID should match');
        $this->assertArrayHasKey('channelId', $urlParams, 'Should have channelId');
        $this->assertArrayHasKey('timestamp', $urlParams, 'Should have timestamp');
        $this->assertArrayHasKey('state', $urlParams, 'Should have state');
        $this->assertEquals('true', $urlParams['isSnapBI'], 'isSnapBI should be true');
        
        // Seamless data validation
        $this->assertArrayHasKey('seamlessData', $urlParams, 'Should have seamlessData');
        $parsedSeamlessData = json_decode(urldecode($urlParams['seamlessData']), true);
        $this->assertEquals('087875849373', $parsedSeamlessData['mobile'], 'Mobile number should match');
        
        $this->assertArrayHasKey('seamlessSign', $urlParams, 'Should have seamlessSign');
        $this->assertGreaterThan(20, strlen($urlParams['seamlessSign']), 'Signature should be substantial in length');
        
        // Step 2: Execute automate_oauth script to get auth code
        echo 'Executing automation script to get auth code...' . PHP_EOL;
        
        $tempOutputFile = __DIR__ . '/auth_code_output.txt';
        $generatedAuthCode = null;
        
        try {
            // Use WebAutomation::automateOauth to get the auth code
            echo 'Starting OAuth automation process...' . PHP_EOL;
            
            $generatedAuthCode = WebAutomation::automateOauth(
                $oauthUrl,
                '087875849373',  // Optional: override the phone number if needed
                null,          // Use default PIN code
                $tempOutputFile
            );
            
            // Check if auth code was successfully obtained
            if ($generatedAuthCode) {
                echo 'OAuth automation completed successfully!' . PHP_EOL;
            } else {
                echo 'OAuth automation did not return an auth code' . PHP_EOL;
                
                // Try to read from output file if it exists
                if (file_exists($tempOutputFile)) {
                    $generatedAuthCode = trim(file_get_contents($tempOutputFile));
                    unlink($tempOutputFile); // Clean up the temporary file
                    
                    if ($generatedAuthCode) {
                        echo 'Auth code retrieved from output file' . PHP_EOL;
                    }
                }
            }
        } catch (\Exception $e) {
            $this->fail('Error running automated OAuth process: ' . $e->getMessage());
        }
        
        // Verify we got an auth code
        $this->assertNotNull($generatedAuthCode, 'Auth code should not be null');
        $this->assertNotEmpty($generatedAuthCode, 'Auth code should not be empty');
        echo 'Auth code obtained: ' . $generatedAuthCode . PHP_EOL;
        
        // Step 3: Apply Token using auth code
        $applyTokenRequest = new ApplyTokenRequest();
        $applyTokenRequest->setGrantType('AUTHORIZATION_CODE');
        $applyTokenRequest->setAuthCode($generatedAuthCode);
        
        echo 'Applying token with auth code...' . PHP_EOL;
        try {
            $tokenResponse = $this->apiInstance->applyToken($applyTokenRequest);
            
            // Extract access token from response and store it for the accountUnbinding test
            $this->bindingAccessToken = $tokenResponse->getAccessToken();
            echo 'Successfully applied token, got access token: ' . $this->bindingAccessToken . PHP_EOL;
            
            // Token validation
            $this->assertNotNull($tokenResponse, 'Token response should not be null');
            $this->assertNotNull($tokenResponse->getResponseCode(), 'Response code should not be null');
            $this->assertEquals('2007400', $tokenResponse->getResponseCode(), 'Response code should be 2007400');
            $this->assertNotNull($tokenResponse->getResponseMessage(), 'Response message should not be null');
            $this->assertEquals('Successful', $tokenResponse->getResponseMessage(), 'Response message should be Successful');
            $this->assertNotNull($tokenResponse->getTokenType(), 'Token type should not be null');
            $this->assertNotNull($tokenResponse->getAccessToken(), 'Access token should not be null');
            $this->assertNotNull($tokenResponse->getAccessTokenExpiryTime(), 'Access token expiry time should not be null');
            $this->assertNotNull($tokenResponse->getRefreshToken(), 'Refresh token should not be null');
            $this->assertNotNull($tokenResponse->getRefreshTokenExpiryTime(), 'Refresh token expiry time should not be null');
            
            // Step 4: Apply OTT using access token
            $additionalInfo = new ApplyOTTRequestAdditionalInfo();
            $additionalInfo->setAccessToken($this->bindingAccessToken);
            $additionalInfo->setDeviceId('BINDING_DEVICE_ID');
            
            $applyOTTRequest = new ApplyOTTRequest();
            $applyOTTRequest->setAdditionalInfo($additionalInfo);
            $applyOTTRequest->setUserResources(['OTT']);
            
            echo 'Applying for OTT using access token...' . PHP_EOL;
            $ottResponse = $this->apiInstance->applyOTT($applyOTTRequest);
            
            echo 'OTT response: ' . print_r($ottResponse->__toString(), true) . PHP_EOL;
            
            // OTT validation
            $this->assertNotNull($ottResponse, 'OTT response should not be null');
            $this->assertNotNull($ottResponse->getResponseCode(), 'Response code should not be null');
            $this->assertEquals('2004900', $ottResponse->getResponseCode(), 'Response code should be 2004900');
            $this->assertNotNull($ottResponse->getResponseMessage(), 'Response message should not be null');
            $this->assertEquals('Successful', $ottResponse->getResponseMessage(), 'Response message should be Successful');
            $this->assertNotNull($ottResponse->getUserResources(), 'User resources should not be null');
            $this->assertGreaterThan(0, count($ottResponse->getUserResources()), 'User resources should have at least one item');
            $this->assertNotNull($ottResponse->getUserResources()[0]->getValue(), 'OTT value should not be null');
            
            $this->ott = $ottResponse->getUserResources()[0]->getValue();
            
            echo 'Binding flow completed successfully!' . PHP_EOL;
        } catch (\Exception $e) {
            $this->fail('API call for apply OTT failed: ' . $e->getMessage());
        }

        // Doing balance inquiry
        try {
            $balanceInquiryRequest = WidgetFixtures::getBalanceInquiryRequest($this->bindingAccessToken, $this->ott);
            $balanceInquiryResponse = $this->apiInstance->balanceInquiry($balanceInquiryRequest);
            $this->assertNotNull($balanceInquiryResponse);
            
            $this->assertEquals('2001100', $balanceInquiryResponse->getResponseCode());
        } catch (\Exception $e) {
            $this->fail('API call for balance inquiry failed: ' . $e->getMessage());
        }

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

        // Construct full payment URL with OTT from binding process
        $paymentUrl = $widgetPaymentResponse->getWebRedirectUrl() . '&ott=' . $this->ott;
        echo "Payment URL: {$paymentUrl}" . PHP_EOL;

        try {
            // Run the payment automation script
            echo "Running payment automation script..." . PHP_EOL;
            $success = WebAutomation::automatePaymentWidget($paymentUrl);
            $this->assertTrue($success, "Payment automation failed");
        } catch (\Exception $e) {
            $this->fail('Error during payment automation: ' . $e->getMessage());
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
            $this->assertEquals('SUCCESS', $queryPaymentResponse->getTransactionStatusDesc());
        } catch (\Exception $e) {
            $this->fail('Error during QueryPayment execution: ' . $e->getMessage());
        }

        try {
            // Step 3: Refund Order
            echo "Step 3: Refunding the order..." . PHP_EOL;
            $refundOrderRequest = WidgetFixtures::getRefundOrderRequest($widgetPaymentRequest);
            
            $refundOrderResponse = $this->apiInstance->refundOrder($refundOrderRequest);
            
            $this->assertNotNull($refundOrderResponse);
            $this->assertEquals('2005800', $refundOrderResponse->getResponseCode());
            $this->assertEquals('Successful', $refundOrderResponse->getResponseMessage());
            $this->assertEquals($widgetPaymentRequest->getPartnerReferenceNo(), $refundOrderResponse->getOriginalPartnerReferenceNo());
        } catch (\Exception $e) {
            $this->fail('Error during RefundOrder execution: ' . $e->getMessage());
        }

        try {
            // Step 4: Account Unbinding
            echo "Step 4: Unbinding the account..." . PHP_EOL;
            $accountUnbindingRequest = WidgetFixtures::getAccountUnbindingRequest($this->bindingAccessToken);
            
            $accountUnbindingResponse = $this->apiInstance->accountUnbinding($accountUnbindingRequest);
            
            $this->assertNotNull($accountUnbindingResponse);
            $this->assertEquals('2000900', $accountUnbindingResponse->getResponseCode());
            $this->assertEquals('Successful', $accountUnbindingResponse->getResponseMessage());
            
            echo "Complete widget payment flow executed successfully!" . PHP_EOL;
        } catch (\Exception $e) {
            $this->fail('Error during AccountUnbinding execution: ' . $e->getMessage());
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