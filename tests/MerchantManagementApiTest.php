<?php
/**
 * Merchant Management API Test
 *
 * PHP version 7.4+
 *
 * @category Test
 * @package  Dana\Tests
 * @author   DANA Indonesia
 * @link     https://dashboard.dana.id/
 */

namespace Dana\Tests;

use Dana\ApiClient\ApiException;
use Dana\Tests\Fixtures\ApiClientFixtures;
use Dana\Tests\Fixtures\MerchantManagementFixtures;
use Dana\MerchantManagement\v1\Api\MerchantManagementApi;
use Dana\MerchantManagement\v1\Model\CreateShopResponse;
use Dana\MerchantManagement\v1\Model\CreateShopResponseResponse;
use Dana\MerchantManagement\v1\Model\CreateShopResponseResponseBody;
use Dana\MerchantManagement\v1\Model\QueryMerchantResourceResponse;
use Dana\MerchantManagement\v1\Model\QueryMerchantResourceResponseResponse;
use Dana\MerchantManagement\v1\Model\QueryMerchantResourceResponseResponseBody;
use Dana\MerchantManagement\v1\Model\QueryShopResponse;
use Dana\MerchantManagement\v1\Model\QueryShopResponseResponse;
use Dana\MerchantManagement\v1\Model\QueryShopResponseResponseBody;
use Dana\MerchantManagement\v1\Model\ResultInfo;
use PHPUnit\Framework\TestCase;

/**
 * Test cases for Merchant Management Api
 *
 */
class MerchantManagementApiTest extends TestCase
{
    /** @var MerchantManagementApi */
    private $apiInstance;

    /** @var string */
    private $externalShopId;

    /**
     * Set up test environment
     *
     * @return void
     */
    protected function setUp(): void
{
    // Skip all Merchant Management API tests
    // $this->markTestSkipped('Merchant Management API tests are temporarily disabled');
    
    // The rest of the setup won't run due to the skip above
    $this->externalShopId = MerchantManagementFixtures::generateExternalShopId();
    $this->apiInstance = ApiClientFixtures::getMerchantManagementApiInstance();
}

    /**
     * Test CreateShop API endpoint
     */
    public function testCreateShop()
    {
        // Get request parameters from fixtures
        $createShopRequest = MerchantManagementFixtures::getCreateShopRequest($this->externalShopId);
        
        try {
            // Call the API
            $response = $this->apiInstance->createShop($createShopRequest);
            
            // Basic assertions
            $this->assertNotNull($response, 'API response should not be null');
            
            // Test response model structure
            $this->assertInstanceOf(
                '\Dana\MerchantManagement\v1\Model\CreateShopResponse',
                $response,
                'Response should be an instance of CreateShopResponse'
            );
            
            // Test response property exists
            $this->assertTrue(method_exists($response, 'getResponse'), 'Response should have getResponse method');
            $responseObj = $response->getResponse();
            $this->assertInstanceOf(
                '\Dana\MerchantManagement\v1\Model\CreateShopResponseResponse',
                $responseObj,
                'Response should be an instance of CreateShopResponseResponse'
            );
            
            // Test body exists
            $this->assertTrue(method_exists($responseObj, 'getBody'), 'Response should have getBody method');
            $body = $responseObj->getBody();
            $this->assertInstanceOf(
                '\Dana\MerchantManagement\v1\Model\CreateShopResponseResponseBody',
                $body,
                'Body should be an instance of CreateShopResponseResponseBody'
            );
            
            // Test result info
            $this->assertTrue(method_exists($body, 'getResultInfo'), 'Body should have getResultInfo method');
            $resultInfo = $body->getResultInfo();
            $this->assertInstanceOf(
                '\Dana\MerchantManagement\v1\Model\ResultInfo',
                $resultInfo,
                'Result info should be an instance of ResultInfo'
            );
            
            // Log response for debugging
            echo "\nCreate shop response: Status=" . $resultInfo->getResultStatus() . 
                 ", Code=" . $resultInfo->getResultCodeId() . 
                 ", Message=" . $resultInfo->getResultMsg() . "\n";
            
            // Check if the shop was created successfully or already exists
            $this->assertContains($resultInfo->getResultStatus(), ['S', 'F'], 'Result status should be S (success) or F (failure)');
            
            // If successful, check if shop information is returned
            if ($resultInfo->getResultStatus() === 'S') {
                $this->assertTrue(method_exists($body, 'getShopResourceInfo'), 'Body should have getShopResourceInfo method');
                $shopInfo = $body->getShopResourceInfo();
                
                if (!empty($shopInfo)) {
                    $this->assertIsArray($shopInfo, 'Shop info should be an array');
                    $this->assertArrayHasKey('externalShopId', $shopInfo, 'Shop info should have externalShopId');
                    $this->assertArrayHasKey('mainName', $shopInfo, 'Shop info should have mainName');
                    
                    // Save the shop ID for use in other tests
                    $this->externalShopId = $shopInfo['externalShopId'];
                    
                    // Log shop information
                    echo "Shop created successfully: ID={$shopInfo['externalShopId']}, Name={$shopInfo['mainName']}\n";
                }
            }
            $this->assertTrue(in_array($resultInfo->getResultMsg(), ['SUCCESS', 'ROLE_HAS_EXIST'], 'Result message should be "SUCCESS" or "ROLE_HAS_EXIST"'));
            
        } catch (\Exception $e) {
            $this->fail("API Exception when calling MerchantManagementApi->createShop: " . $e->getMessage());
        }
    }

    /**
     * Test QueryMerchantResource API endpoint
     */
    public function testQueryMerchantResource()
    {
        // Get request parameters from fixtures
        $queryMerchantRequest = MerchantManagementFixtures::getQueryMerchantResourceRequest(getenv('MERCHANT_ID'));
        
        try {
            // Call the API
            $response = $this->apiInstance->queryMerchantResource($queryMerchantRequest);
            // echo "\n\n=== API Response ===\n";
            // echo json_encode(json_decode($response->__toString(), true), JSON_PRETTY_PRINT) . "\n";
            // Basic assertions
            $this->assertNotNull($response, 'API response should not be null');
            
            // Test response model structure
            $this->assertInstanceOf(
                QueryMerchantResourceResponse::class,
                $response,
                'Response should be an instance of QueryMerchantResourceResponse'
            );
            
            // Test response property exists
            $this->assertTrue(method_exists($response, 'getResponse'), 'Response should have getResponse method');
            $responseObj = $response->getResponse();
            $this->assertInstanceOf(
                QueryMerchantResourceResponseResponse::class,
                $responseObj,
                'Response should be an instance of QueryMerchantResourceResponseResponse'
            );
            
            // Test body exists
            $this->assertTrue(method_exists($responseObj, 'getBody'), 'Response should have getBody method');
            $body = $responseObj->getBody();
            $this->assertInstanceOf(
                QueryMerchantResourceResponseResponseBody::class,
                $body,
                'Body should be an instance of QueryMerchantResourceResponseResponseBody'
            );
            
            // Test result info
            $this->assertTrue(method_exists($body, 'getResultInfo'), 'Body should have getResultInfo method');
            $resultInfo = $body->getResultInfo();
            $this->assertInstanceOf(
                ResultInfo::class,
                $resultInfo,
                'Result info should be an instance of ResultInfo'
            );
            
            // Log response for debugging
            echo "\nQuery merchant resource response: Status=" . $resultInfo->getResultStatus() . 
                 ", Code=" . $resultInfo->getResultCodeId() . 
                 ", Message=" . $resultInfo->getResultMsg() . "\n";
            
            // Check for successful query
            if ($resultInfo->getResultStatus() === 'S' && $resultInfo->getResultCodeId() === '00000000') {
                $this->assertTrue(
                    method_exists($body, 'getMerchantResourceInformations'),
                    'Body should have getMerchantResourceInformations method'
                );
                
                $resources = $body->getMerchantResourceInformations() ?? [];
                $this->assertIsArray($resources, 'Merchant resources should be an array');
                $this->assertNotEmpty($resources, 'Should return at least one resource information');
                
                echo "Found " . count($resources) . " resource information(s)\n";
                
                // Log resource information
                foreach ($resources as $resource) {
                    
                    echo sprintf("Resource: %s = %s\n", 
                        $resource->getResourceType() ?? 'N/A', 
                        $resource->getValue() ?? 'N/A'
                    );
                }
            }
            $this->assertTrue($resultInfo->getResultMsg() === 'SUCCESS', 'Result message should be "SUCCESS"');
        } catch (\Exception $e) {
            $this->fail("API Exception when calling MerchantManagementApi->queryMerchantResource: " . $e->getMessage());
        }
    }
    
    /**
     * Test QueryShop API endpoint
     */
    public function testQueryShop()
    {
        // Skip test if no API client is available
        if ($this->apiInstance === null) {
            $this->markTestSkipped('Skipping test: No API client credentials');
            return;
        }

        // Get request fixture - using empty shop ID to query all shops
        $queryRequest = MerchantManagementFixtures::getQueryShopRequest($this->externalShopId);
        try {
            // Call the API
            $response = $this->apiInstance->queryShop($queryRequest);
            // echo "\n\n=== API Response ===\n";
            // echo json_encode(json_decode($response->__toString(), true), JSON_PRETTY_PRINT) . "\n";
            // Basic assertions
            $this->assertNotNull($response, 'API response should not be null');
            
            // Test response model structure
            $this->assertInstanceOf(
                QueryShopResponse::class,
                $response,
                'Response should be an instance of QueryShopResponse'
            );
            
            // Test response property exists
            $this->assertTrue(method_exists($response, 'getResponse'), 'Response should have getResponse method');
            $responseObj = $response->getResponse();
            $this->assertInstanceOf(
                QueryShopResponseResponse::class,
                $responseObj,
                'Response should be an instance of QueryShopResponseResponse'
            );
            
            // Test body exists
            $this->assertTrue(method_exists($responseObj, 'getBody'), 'Response should have getBody method');
            $body = $responseObj->getBody();
            $this->assertInstanceOf(
                QueryShopResponseResponseBody::class,
                $body,
                'Body should be an instance of QueryShopResponseResponseBody'
            );
            
            // Test result info
            $this->assertTrue(method_exists($body, 'getResultInfo'), 'Body should have getResultInfo method');
            $resultInfo = $body->getResultInfo();
            $this->assertInstanceOf(
                ResultInfo::class,
                $resultInfo,
                'Result info should be an instance of ResultInfo'
            );
            
            // Log response for debugging
            echo "\nQuery shop response: Status=" . $resultInfo->getResultStatus() . 
                 ", Code=" . $resultInfo->getResultCodeId() . 
                 ", Message=" . $resultInfo->getResultMsg() . "\n";
            
            // Check if shop info is returned
            if ($resultInfo->getResultStatus() === 'S') {
                $shopInfo = $body->getShopResourceInfo();
                if (!empty($shopInfo)) {
                    
                    // Log shop information using getter methods
                    echo sprintf("Shop: ID=%s, Name=%s\n", 
                        $shopInfo->getExternalShopId() ?? 'N/A', 
                        $shopInfo->getMainName() ?? 'N/A'
                    );
                    
                    // Test shop info structure if it exists
                } else {
                    echo "No shop found with ID: " . $this->externalShopId . "\n";
                }
            }
            $this->assertTrue($resultInfo->getResultMsg() === 'SUCCESS', 'Result message should be "SUCCESS"');
        } catch (\Exception $e) {
            $this->fail("API Exception when calling MerchantManagementApi->queryShop: " . $e->getMessage());
        }
    }
}
