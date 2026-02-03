<?php
/**
 * Payment Gateway API Tests
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
use Dana\Tests\Fixtures\PaymentGatewayFixtures;
use Dana\PaymentGateway\v1\Api\PaymentGatewayApi;
use Dana\PaymentGateway\v1\Model\ConsultPayRequest;
use Dana\PaymentGateway\v1\Model\ConsultPayResponse;
use Dana\PaymentGateway\v1\Model\CreateOrderByApiRequest;
use Dana\PaymentGateway\v1\Model\CreateOrderResponse;
use Dana\PaymentGateway\v1\Model\QueryPaymentRequest;
use Dana\PaymentGateway\v1\Model\QueryPaymentResponse;
use Dana\PaymentGateway\v1\Model\CancelOrderRequest;
use Dana\PaymentGateway\v1\Model\CancelOrderResponse;
use Dana\PaymentGateway\v1\Model\RefundOrderRequest;
use Dana\PaymentGateway\v1\Model\RefundOrderResponse;
use Dana\Tests\Scripts\WebAutomation;

/**
 * PaymentGatewayApiTest Class
 * 
 * Tests for PaymentGatewayApi operations
 */
class PaymentGatewayApiTest extends TestCase
{
    /**
     * @var PaymentGatewayApi
     */
    private $apiInstance;
    
    /**
     * @var PaymentGatewayApi
     */
    private $apiInstanceWithPrivateKeyPath;
    
    /**
     * Set up test environment
     *
     * @return void
     */
    protected function setUp(): void
    {
        $this->apiInstance = ApiClientFixtures::getPaymentGatewayApiInstance();
        $this->apiInstanceWithPrivateKeyPath = ApiClientFixtures::getPaymentGatewayApiInstanceWithPrivateKeyPath();
    }
    
    /**
     * Test ConsultPay operation
     *
     * @return void
     */
    public function testConsultPay()
    {
        // $this->markTestSkipped('ConsultPay test temporarily disabled');
        $consultPayRequest = PaymentGatewayFixtures::getConsultPayRequest();
        
        try {
            $response = $this->apiInstance->consultPay($consultPayRequest);
            
            // Assert response properties
            $this->assertInstanceOf(ConsultPayResponse::class, $response);
            $this->assertNotEmpty($response->getResponseCode());
            $this->assertNotEmpty($response->getResponseMessage());
            
            // When successful, the response code should be 2005700
            if ($response->getResponseCode() === '2005700') {
                $this->assertEquals('Successful', $response->getResponseMessage());
                $this->assertNotNull($response->getPaymentInfos());
            }
            
            // Output response for debugging
            echo "ConsultPay Response: " . print_r($response->__toString(), true) . PHP_EOL;
        } catch (\Exception $e) {
            $this->fail("ConsultPay request failed: " . $e->getMessage());
        }
    }
    
    /**
     * Test ConsultPay operation without buyer
     *
     * @return void
     */
    public function testConsultPayWithoutBuyer()
    {
        $consultPayRequest = PaymentGatewayFixtures::getConsultPayRequestWithoutBuyer();
        
        try {
            $response = $this->apiInstance->consultPay($consultPayRequest);
            
            // Assert response properties
            $this->assertInstanceOf(ConsultPayResponse::class, $response);
            $this->assertNotEmpty($response->getResponseCode());
            $this->assertNotEmpty($response->getResponseMessage());
            
            // When successful, the response code should be 2005700
            if ($response->getResponseCode() === '2005700') {
                $this->assertEquals('Successful', $response->getResponseMessage());
                $this->assertNotNull($response->getPaymentInfos());
                // Verify all payment infos have payMethod
                foreach ($response->getPaymentInfos() as $paymentInfo) {
                    $this->assertNotNull($paymentInfo->getPayMethod());
                }
            }
            
            // Output response for debugging
            echo "ConsultPay Without Buyer Response: " . print_r($response->__toString(), true) . PHP_EOL;
        } catch (\Exception $e) {
            $this->fail("ConsultPay without buyer request failed: " . $e->getMessage());
        }
    }

    public function testConsultPayWithExternalStoreId()
    {
        
        try {
            $consultPayRequest = PaymentGatewayFixtures::getConsultPayRequestWithExternalStoreId();
            $response = $this->apiInstance->consultPay($consultPayRequest);
            $this->assertNotNull($response);
            $this->assertNotNull($response->getResponseCode());
            $this->assertEquals('2005700', $response->getResponseCode());
            $this->assertNotNull($response->getResponseMessage());

            foreach ($response->getPaymentInfos() as $paymentInfo) {
                $this->assertNotNull($paymentInfo->getPayMethod());
            }

            echo "ConsultPay With External Store Id Response: " . print_r($response->__toString(), true) . PHP_EOL;
        } catch (\Exception $e) {
            $this->fail("ConsultPay with external store id request failed: " . $e->getMessage());
        }
    }

    /**
     * Test CreateOrder operation
     *
     * @return string The partner reference number for subsequent tests
     */
    public function testCreateOrder(): string
    {
        $createOrderRequest = PaymentGatewayFixtures::getCreateOrderByApiRequest();
        $partnerReferenceNo = $createOrderRequest->getPartnerReferenceNo();
        
        try {
            $response = $this->apiInstance->createOrder($createOrderRequest);
            
            // Assert response properties
            $this->assertInstanceOf(CreateOrderResponse::class, $response);
            $this->assertNotEmpty($response->getResponseCode());
            $this->assertNotEmpty($response->getResponseMessage());
            
            // When successful, the response code should be 2005400
            if ($response->getResponseCode() === '2005400') {
                $this->assertEquals('Successful', $response->getResponseMessage());
                $this->assertNotNull($response->getReferenceNo());
            }
            
            // Output response for debugging
            echo "CreateOrder Response: " . print_r($response->__toString(), true) . PHP_EOL;
            
            return $partnerReferenceNo;
        } catch (\Exception $e) {
            $this->fail("CreateOrder request failed: " . $e->getMessage());
            return $partnerReferenceNo;
        }
    }

    /**
     * Test CreateOrder operation
     *
     * @return string The partner reference number for subsequent tests
     */
    public function testCreateOrderWithPrivateKeyPath(): string
    {
        $createOrderRequest = PaymentGatewayFixtures::getCreateOrderByApiRequest();
        $partnerReferenceNo = $createOrderRequest->getPartnerReferenceNo();
        
        try {
            $response = $this->apiInstanceWithPrivateKeyPath->createOrder($createOrderRequest);
            
            // Assert response properties
            $this->assertInstanceOf(CreateOrderResponse::class, $response);
            $this->assertNotEmpty($response->getResponseCode());
            $this->assertNotEmpty($response->getResponseMessage());
            
            // When successful, the response code should be 2005400
            if ($response->getResponseCode() === '2005400') {
                $this->assertEquals('Successful', $response->getResponseMessage());
                $this->assertNotNull($response->getReferenceNo());
            }
            
            // Output response for debugging
            echo "CreateOrder Response: " . print_r($response->__toString(), true) . PHP_EOL;
            
            return $partnerReferenceNo;
        } catch (\Exception $e) {
            $this->fail("CreateOrder request failed: " . $e->getMessage());
            return $partnerReferenceNo;
        }
    }
    
    /**
     * Test QueryPayment operation
     *
     * @depends testCreateOrder
     * 
     * @param string $partnerReferenceNo Partner reference number from createOrder test
     * @return void
     */
    public function testQueryPayment(string $partnerReferenceNo)
    {
        $queryPaymentRequest = PaymentGatewayFixtures::getQueryPaymentRequest($partnerReferenceNo);
        
        try {
            $response = $this->apiInstance->queryPayment($queryPaymentRequest);
            
            // Assert response properties
            $this->assertInstanceOf(QueryPaymentResponse::class, $response);
            $this->assertNotEmpty($response->getResponseCode());
            $this->assertNotEmpty($response->getResponseMessage());
            
            // Any response code should be handled, as it depends on the actual order status
            $this->assertNotNull($response->getOriginalPartnerReferenceNo());
            $this->assertEquals($partnerReferenceNo, $response->getOriginalPartnerReferenceNo());
            
            // Output response for debugging
            echo "QueryPayment Response: " . print_r($response->__toString(), true) . PHP_EOL;
        } catch (\Exception $e) {
            $this->fail("QueryPayment request failed: " . $e->getMessage());
        }
    }
    
    /**
     * Test CancelOrder operation
     *
     * @depends testCreateOrder
     * 
     * @param string $partnerReferenceNo Partner reference number from createOrder test
     * @return void
     */
    public function testCancelOrder(string $partnerReferenceNo)
    {
        $cancelOrderRequest = PaymentGatewayFixtures::getCancelOrderRequest($partnerReferenceNo);
        
        try {
            $response = $this->apiInstance->cancelOrder($cancelOrderRequest);
            
            // Assert response properties
            $this->assertInstanceOf(CancelOrderResponse::class, $response);
            $this->assertNotEmpty($response->getResponseCode());
            $this->assertNotEmpty($response->getResponseMessage());
            
            // When successful, the response code should be 2005700
            if ($response->getResponseCode() === '2005700') {
                $this->assertEquals('Success', $response->getResponseMessage());
                $this->assertEquals($partnerReferenceNo, $response->getOriginalPartnerReferenceNo());
            } else {
                // The order might be in a state that cannot be cancelled
                // This is a valid test scenario, just log the response
                echo "CancelOrder could not complete because: {$response->getResponseMessage()}" . PHP_EOL;
            }
            
            // Output response for debugging
            echo "CancelOrder Response: " . print_r($response->__toString(), true) . PHP_EOL;
        } catch (\Exception $e) {
            $this->fail("CancelOrder request failed: " . $e->getMessage());
        }
    }
    
    /**
     * Test validation in the setValidUpTo method directly
     * 
     * This test verifies that the CreateOrderByApiRequest class properly validates
     * the validUpTo date and throws an exception when it's beyond one week in the future
     * 
     * @return void
     */
    public function testCreateOrderWithValidUpToOutsideRange(): void
    {
        // Create a new CreateOrderByApiRequest instance
        $request = new CreateOrderByApiRequest();
        
        // Set valid_up_to to 8 days in the future (outside of allowed range)
        // Create Jakarta timezone (GMT+7)
        $jakartaTimezone = new \DateTimeZone('Asia/Jakarta');
        
        // Calculate a date 8 days in the future
        $beyondOneWeek = (new \DateTime('now', $jakartaTimezone))
            ->add(new \DateInterval('P8D'))
            ->format('Y-m-d\TH:i:s+07:00');
        
        // The setValidUpTo method should throw an exception
        try {
            $request->setValidUpTo($beyondOneWeek);
            
            // If we get here, the test has failed because the method should have thrown an exception
            $this->fail('Expected setValidUpTo to throw an exception when validUpTo is beyond one week');
        } catch (\InvalidArgumentException $e) {
            // Check that the error message contains the word 'week'
            $errorMsg = strtolower($e->getMessage());
            $this->assertStringContainsString('week', $errorMsg, "Error message must specifically mention 'week'");
            
            // Output the error message for debugging
            echo "Validation error from setValidUpTo as expected: {$e->getMessage()}" . PHP_EOL;
        } catch (\Exception $e) {
            // If we got a different type of exception, make sure it still contains 'week'
            $errorMsg = strtolower($e->getMessage());
            $this->assertStringContainsString('week', $errorMsg, "Error message must specifically mention 'week' even for other exceptions");
            
            echo "Got exception of type " . get_class($e) . ": {$e->getMessage()}" . PHP_EOL;
        }
    }

    /**
     * Test debug mode
     * 
     * This test verifies that the debug mode is properly working
     * 
     * @return void
     */
    public function testDebugMode(): void
    {        
        $createOrderRequest = PaymentGatewayFixtures::getCreateOrderByApiRequest();
        $createOrderRequest->setExternalStoreId('test_debug_mode');
        
        try {
            $response = $this->apiInstance->createOrder($createOrderRequest);

            $this->fail("Supposed to fail");
            
        } catch (\Exception $e) {
            $this->assertStringContainsString('debugMessage', $e->getMessage());
        }
       
    }
}
