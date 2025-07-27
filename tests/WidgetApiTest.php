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
     * Test Binding Flow - OAuth, ApplyToken, ApplyOTT
     * 
     * This test runs the complete binding flow from OAuth to ApplyToken to ApplyOTT
     *
     * @return void
     */
    public function testCompleteBindingProcess(): void
    {
        $merchantId = getenv('MERCHANT_ID');
        $privateKey = getenv('PRIVATE_KEY');
        $privateKeyPath = getenv('PRIVATE_KEY_PATH');
        
        $oauth2UrlData = new Oauth2UrlData();
        $oauth2UrlData->setRedirectUrl('https://google.com');
        $oauth2UrlData->setMerchantId($merchantId);
        $oauth2UrlData->setSeamlessData([
            'mobileNumber' => '0811742234'
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
        $this->assertEquals('0811742234', $parsedSeamlessData['mobile'], 'Mobile number should match');
        
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
                '0811742234',  // Optional: override the phone number if needed
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
            $this->fail('API call failed: ' . $e->getMessage());
        }
    }    
}
