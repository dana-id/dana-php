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
use Dana\PaymentGateway\v1\Model\CreateOrderByRedirectRequest;
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
     * the validUpTo date and throws an exception when it's beyond 30 minutes in the future (sandbox only)
     * 
     * @return void
     */
    public function testCreateOrderWithValidUpToOutsideRange(): void
    {
        // Only run this test in sandbox environment
        $env = getenv('DANA_ENV') ?: getenv('ENV') ?: 'sandbox';
        if (strtolower($env) !== 'sandbox') {
            $this->markTestSkipped('Skipping test: validUpTo validation only runs in sandbox environment');
            return;
        }
        
        // Create a new CreateOrderByApiRequest instance
        $request = new CreateOrderByApiRequest();
        
        // Set valid_up_to to 31 minutes in the future (outside of allowed 30-minute range)
        // Create Jakarta timezone (GMT+7)
        $jakartaTimezone = new \DateTimeZone('Asia/Jakarta');
        
        // Calculate a date 31 minutes in the future
        $beyond30Minutes = (new \DateTime('now', $jakartaTimezone))
            ->add(new \DateInterval('PT31M'))
            ->format('Y-m-d\TH:i:s+07:00');
        
        // The setValidUpTo method should throw an exception
        try {
            $request->setValidUpTo($beyond30Minutes);
            
            // If we get here, the test has failed because the method should have thrown an exception
            $this->fail('Expected setValidUpTo to throw an exception when validUpTo is beyond 30 minutes');
        } catch (\InvalidArgumentException $e) {
            // Check that the error message contains 'minutes' or '30'
            $errorMsg = strtolower($e->getMessage());
            $this->assertStringContainsString('minutes', $errorMsg, "Error message must specifically mention 'minutes'");
            
            // Output the error message for debugging
            echo "Validation error from setValidUpTo as expected: {$e->getMessage()}" . PHP_EOL;
        } catch (\Exception $e) {
            // If we got a different type of exception, make sure it still contains 'minutes'
            $errorMsg = strtolower($e->getMessage());
            $this->assertStringContainsString('minutes', $errorMsg, "Error message must specifically mention 'minutes' even for other exceptions");
            
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

    /**
     * Test CreateOrder with ValidUpTo outside range (setter validation)
     *
     * @return void
     */
    public function testCreateOrderWithValidUpToOutsideRangeSetter()
    {
        // Test that setValidUpTo() setter validates the date
        $createOrderByApiRequest = PaymentGatewayFixtures::getCreateOrderByApiRequest();

        // Set valid_up_to to 31 minutes in the future (outside of allowed 30-minute range)
        $jakartaLocation = new \DateTimeZone('Asia/Jakarta');
        $beyond30Minutes = (new \DateTime('now', $jakartaLocation))
            ->add(new \DateInterval('PT31M'))
            ->format('Y-m-d\TH:i:s+07:00');

        try {
            $createOrderByApiRequest->setValidUpTo($beyond30Minutes);
            $this->fail('Expected exception when ValidUpTo is beyond 30 minutes');
        } catch (\Exception $e) {
            // Assert that there was an error
            $this->assertNotEmpty($e->getMessage());
            $this->assertStringContainsStringIgnoringCase('minutes', $e->getMessage());
            echo "Setter validation error as expected: " . $e->getMessage() . PHP_EOL;
        }
    }

    /**
     * Test CreateOrder with ValidUpTo outside range (custom validation)
     *
     * @return void
     */
    public function testCreateOrderWithValidUpToOutsideRangeCustom()
    {
        // Get a fixture that directly sets ValidUpTo to 31 minutes (bypassing setter)
        // This tests that CustomValidation() in Execute() catches invalid dates
        $createOrderByApiRequest = PaymentGatewayFixtures::getCreateOrderByApiWithBeyond30MinutesRequest();

        // Attempt to execute the request - should fail validation in Execute()
        try {
            $this->apiInstance->createOrder($createOrderByApiRequest);
            $this->fail('Expected exception from Execute() when ValidUpTo is beyond 30 minutes (direct struct creation)');
        } catch (\Dana\ApiException $e) {
            // Assert that there was an error from Execute() validation
            $errorMsg = strtolower($e->getMessage());
            $this->assertTrue(
                strpos($errorMsg, 'validupto') !== false || strpos($errorMsg, 'minutes') !== false,
                "Error message must mention 'validUpTo' or 'minutes', got: " . $e->getMessage()
            );
            echo "Execute() validation error as expected: " . $e->getMessage() . PHP_EOL;
        } catch (\InvalidArgumentException $e) {
            // Also catch InvalidArgumentException from custom validation
            $errorMsg = strtolower($e->getMessage());
            $this->assertTrue(
                strpos($errorMsg, 'validupto') !== false || strpos($errorMsg, 'minutes') !== false,
                "Error message must mention 'validUpTo' or 'minutes', got: " . $e->getMessage()
            );
            echo "Execute() validation error as expected: " . $e->getMessage() . PHP_EOL;
        }
    }

    /**
     * Test additionalInfo validation - CreateOrderByApiRequest
     * Request is built without additionalInfo (no setter), then we hit the API; custom validation should throw.
     *
     * @return void
     */
    public function testCreateOrderByApiMissingAdditionalInfoClientValidation()
    {
        $request = PaymentGatewayFixtures::getCreateOrderByApiRequestWithoutAdditionalInfo();

        $this->expectException(\Dana\ApiException::class);
        $this->expectExceptionMessage('additionalInfo');
        $this->apiInstance->createOrder($request);
    }

    /**
     * Test additionalInfo validation - CreateOrderByRedirectRequest
     *
     * @return void
     */
    public function testCreateOrderByRedirectMissingAdditionalInfoClientValidation()
    {
        $request = new CreateOrderByRedirectRequest();
        $request->setPartnerReferenceNo(PaymentGatewayFixtures::generatePartnerReferenceNo('PHP-REDIRECT-'));
        $request->setMerchantId(PaymentGatewayFixtures::getMerchantId());
        $request->setAmount(new \Dana\PaymentGateway\v1\Model\Money([
            'value' => '222000.00',
            'currency' => 'IDR'
        ]));
        $request->setValidUpTo((new \DateTime('now', new \DateTimeZone('Asia/Jakarta')))
            ->add(new \DateInterval('PT10M'))
            ->format('Y-m-d\TH:i:s+07:00'));
        $request->setUrlParams([
            new \Dana\PaymentGateway\v1\Model\UrlParam([
                'url' => 'https://tinknet.my.id/v1/test',
                'type' => \Dana\PaymentGateway\v1\Model\UrlParam::TYPE_PAY_RETURN,
                'isDeeplink' => 'Y'
            ])
        ]);

        $this->expectException(\Dana\ApiException::class);
        $this->expectExceptionMessage('additionalInfo');
        $this->apiInstance->createOrder($request);
    }

    /**
     * Test QRIS externalStoreId validation
     * 
     * This test verifies that externalStoreId is required when payOption is NETWORK_PAY_PG_QRIS
     *
     * @return void
     */
    public function testQrisExternalStoreIdRequired()
    {
        // Create a request with QRIS payOption but without externalStoreId
        $createOrderByApiRequest = PaymentGatewayFixtures::getCreateOrderByApiRequest();
        
        // Set payOption to QRIS
        $payOptionDetail = new \Dana\PaymentGateway\v1\Model\PayOptionDetail([
            'payMethod' => 'NETWORK_PAY',
            'payOption' => \Dana\PaymentGateway\v1\Model\PayOptionDetail::PAY_OPTION_NETWORK_PAY_PG_QRIS,
            'transAmount' => new \Dana\PaymentGateway\v1\Model\Money([
                'value' => '222000.00',
                'currency' => 'IDR'
            ])
        ]);
        $createOrderByApiRequest->setPayOptionDetails([$payOptionDetail]);
        
        // Do NOT set externalStoreId - should fail validation
        
        try {
            $this->apiInstance->createOrder($createOrderByApiRequest);
            $this->fail("Expected validation error but request succeeded");
        } catch (\Dana\ApiException $e) {
            $errorMsg = strtolower($e->getMessage());
            $this->assertTrue(
                strpos($errorMsg, 'externalstoreid') !== false || 
                strpos($errorMsg, 'external_store_id') !== false || 
                strpos($errorMsg, 'qris') !== false,
                "Error message must mention 'externalStoreId' or 'QRIS', got: " . $e->getMessage()
            );
            echo "QRIS externalStoreId validation error as expected: " . $e->getMessage() . PHP_EOL;
        }
    }

    /**
     * Test QRIS externalStoreId validation (with externalStoreId provided)
     * 
     * This test verifies that when externalStoreId is provided with QRIS, validation passes
     *
     * @return void
     */
    public function testQrisExternalStoreIdProvided()
    {
        // Create a request with QRIS payOption and with externalStoreId
        $createOrderByApiRequest = PaymentGatewayFixtures::getCreateOrderByApiRequest();
        
        // Set payOption to QRIS
        $payOptionDetail = new \Dana\PaymentGateway\v1\Model\PayOptionDetail([
            'payMethod' => 'NETWORK_PAY',
            'payOption' => \Dana\PaymentGateway\v1\Model\PayOptionDetail::PAY_OPTION_NETWORK_PAY_PG_QRIS,
            'transAmount' => new \Dana\PaymentGateway\v1\Model\Money([
                'value' => '222000.00',
                'currency' => 'IDR'
            ])
        ]);
        $createOrderByApiRequest->setPayOptionDetails([$payOptionDetail]);
        
        // Set externalStoreId - should pass validation
        $createOrderByApiRequest->setExternalStoreId('test_shop');
        // Attempt to execute the request - should pass custom validation
        // (may still fail at API level, but not due to externalStoreId validation)
        try {
            $this->apiInstance->createOrder($createOrderByApiRequest);
            $this->assertTrue(true, 'Validation passed (or API call failed for other reasons)');
        } catch (\Dana\ApiException $e) {
            // Check that the error is NOT about externalStoreId
            $errorMsg = strtolower($e->getMessage());
            $this->assertFalse(
                strpos($errorMsg, 'externalstoreid') !== false && strpos($errorMsg, 'required') !== false,
                "Error should not be about missing externalStoreId, got: " . $e->getMessage()
            );
        }
    }

    /**
     * Money amount value pattern - negative cases: values that do not match (e.g. .15, no decimals)
     *
     * @return void
     */
    public function testMoneyAmountValuePatternNegativeCases()
    {
        $pattern = '/^\d{1,16}\.\d{2}$/';
        $invalidValues = ['.15', '10000', '10000.0', '10000.123', ''];
        foreach ($invalidValues as $value) {
            $this->assertDoesNotMatchRegularExpression($pattern, $value, "Value should not match amount pattern: " . $value);
        }
    }

    /**
     * CreateOrder with invalid amount value .15 should fail (pattern or API validation)
     *
     * @return void
     */
    public function testCreateOrderWithInvalidAmountValueDot15()
    {
        $createOrderByApiRequest = PaymentGatewayFixtures::getCreateOrderByApiRequest();
        $createOrderByApiRequest->setAmount(new \Dana\PaymentGateway\v1\Model\Money(['value' => '.15', 'currency' => 'IDR']));
        $payOptionDetail = new \Dana\PaymentGateway\v1\Model\PayOptionDetail([
            'payMethod' => 'BALANCE',
            'payOption' => '',
            'transAmount' => new \Dana\PaymentGateway\v1\Model\Money(['value' => '.15', 'currency' => 'IDR'])
        ]);
        $createOrderByApiRequest->setPayOptionDetails([$payOptionDetail]);

        $this->expectException(\Throwable::class);
        $this->apiInstance->createOrder($createOrderByApiRequest);
    }
}
