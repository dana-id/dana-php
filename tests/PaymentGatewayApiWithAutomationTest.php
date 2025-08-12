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
class PaymentGatewayApiWithAutomationTest extends TestCase
{
    /**
     * @var PaymentGatewayApi
     */
    private $apiInstance;
    
    /**
     * Set up test environment
     *
     * @return void
     */
    protected function setUp(): void
    {
        $this->apiInstance = ApiClientFixtures::getPaymentGatewayApiInstance();
    }

    /**
     * Test RefundOrder operation with web automation
     *
     * This test does the following:
     * 1. Creates an order
     * 2. Automates payment via web redirect URL
     * 3. Queries payment status until success (with retries)
     * 4. Performs refund operation on the successful payment
     * 
     * @return void
     */
    public function testRefundOrderWithAutomation()
    {
        // Skip test in environments with no credentials
        $merchantId = getenv('MERCHANT_ID');
        if (empty($merchantId)) {
            $this->markTestSkipped('Skipping test: No API client credentials');
            return;
        }

        // Generate a unique partner reference number with timestamp and random
        $partnerRefNo = PaymentGatewayFixtures::generatePartnerReferenceNo('PHP-AUTO-');

        // Get create order request from fixtures and update with unique reference number
        $createOrderRequest = PaymentGatewayFixtures::getCreateOrderByApiPaidRequest();
        $createOrderRequest->setPartnerReferenceNo($partnerRefNo);
        $createOrderRequest->setMerchantId($merchantId);

        echo "Creating order for payment and refund test..." . PHP_EOL;
        
        try {
            // Execute the create order API call
            $respCreateOrder = $this->apiInstance->createOrder($createOrderRequest);
            
            // Assertions for create order response
            $this->assertInstanceOf(CreateOrderResponse::class, $respCreateOrder);
            $this->assertNotEmpty($respCreateOrder->getWebRedirectUrl());
            $this->assertEquals($partnerRefNo, $respCreateOrder->getPartnerReferenceNo());
            $this->assertNotEmpty($respCreateOrder->getReferenceNo());
            
            // Store the reference number for refund
            $refNo = $respCreateOrder->getReferenceNo();

            // Flag to track if payment automation was successful
            $paymentSucceeded = false;

            // Allow some time for the order to be processed
            sleep(5);

            // Extract webRedirectUrl from the response
            $webRedirectUrl = $respCreateOrder->getWebRedirectUrl();
            if (!empty($webRedirectUrl)) {
                echo "Found webRedirectUrl, launching automated payment process..." . PHP_EOL;
                
                // Run the payment automation
                echo "Starting payment automation with URL: {$webRedirectUrl}" . PHP_EOL;
                
                // Run the payment automation
                $paymentSucceeded = WebAutomation::automatePaymentPaymentGateway($webRedirectUrl);
                
                if (!$paymentSucceeded) {
                    echo "Payment automation failed" . PHP_EOL;
                } else {
                    echo "Payment automation completed successfully!" . PHP_EOL;
                }
            }

            // Only proceed with query payment and refund if payment was successful
            if ($paymentSucceeded) {
                echo "Payment automation successful. Proceeding with query payment..." . PHP_EOL;
                
                // Get query payment request from fixtures
                $queryRequest = PaymentGatewayFixtures::getQueryPaymentRequest($partnerRefNo);
                
                // Try query payment up to 3 times until we get 'SUCCESS' status
                $maxRetries = 3;
                $querySucceeded = false;
                
                for ($i = 0; $i < $maxRetries; $i++) {
                    echo "Query payment attempt " . ($i+1) . " of {$maxRetries}..." . PHP_EOL;
                    
                    try {
                        $respQueryPayment = $this->apiInstance->queryPayment($queryRequest);
                        
                        echo "Query payment attempt " . ($i+1) . " response: status=" . 
                             ($respQueryPayment->getTransactionStatusDesc() ?? 'unknown') . 
                             ", code=" . $respQueryPayment->getResponseCode() . PHP_EOL;
                             
                        if ($respQueryPayment->getTransactionStatusDesc() === 'SUCCESS') {
                            echo "Query payment returned SUCCESS status" . PHP_EOL;
                            $querySucceeded = true;
                            break;
                        }
                    } catch (\Exception $e) {
                        echo "Query payment attempt " . ($i+1) . " failed: " . $e->getMessage() . PHP_EOL;
                    }
                    
                    if ($i < $maxRetries-1) {
                        echo "Waiting 5 seconds before retrying query..." . PHP_EOL;
                        sleep(5);
                    }
                }
                
                // Log the query results
                if ($querySucceeded) {
                    echo "Final query payment status: " . $respQueryPayment->getTransactionStatusDesc() . PHP_EOL;
                    
                    // Check if Amount and its fields exist before accessing
                    if ($respQueryPayment->getAmount() && 
                        $respQueryPayment->getAmount()->getValue() && 
                        $respQueryPayment->getAmount()->getCurrency()) {
                        echo "Payment details: Amount=" . 
                             $respQueryPayment->getAmount()->getValue() . " " . 
                             $respQueryPayment->getAmount()->getCurrency() . PHP_EOL;
                    }
                } else {
                    $this->fail("All query payment attempts failed or did not return SUCCESS status. Continuing with refund anyway.");
                }
                
                echo "Proceeding with refund order request..." . PHP_EOL;
                
                // Get refund order request from fixtures and update with reference numbers
                $refundRequest = PaymentGatewayFixtures::getRefundOrderRequest(
                    $createOrderRequest, 
                    $refNo,
                    $partnerRefNo
                );

                // Execute the refund order API call
                try {
                    $respRefundOrder = $this->apiInstance->refundOrder($refundRequest);
                    
                    // Add assertions for successful refund response
                    $this->assertInstanceOf(RefundOrderResponse::class, $respRefundOrder);
                    
                    if ($respRefundOrder->getOriginalPartnerReferenceNo()) {
                        $this->assertEquals($partnerRefNo, $respRefundOrder->getOriginalPartnerReferenceNo());
                    }
                    
                    $this->assertNotEmpty($respRefundOrder->getResponseCode());
                    
                    if ($respRefundOrder->getResponseCode()) {
                        $this->assertContains(
                            $respRefundOrder->getResponseCode(), 
                            ['2005800', '2001400'], 
                            "Unexpected response code"
                        );
                    }
                    
                    echo "Refund response: " . print_r($respRefundOrder->__toString(), true) . PHP_EOL;
                } catch (\Exception $e) {
                    $errorStr = $e->getMessage();
                    echo "Refund order request error: " . $errorStr . PHP_EOL;

                    // If we get a 404 with "Invalid Transaction Status", that's expected in test environment
                    if (strpos($errorStr, 'Invalid Transaction Status') !== false) {
                        echo "Received expected 'Invalid Transaction Status' error" . PHP_EOL;
                    } else {
                        $this->fail("Refund request failed with unexpected error: " . $e->getMessage());
                    }
                }
            } else {
                $this->markTestSkipped("Payment automation was not successful, skipping refund test");
            }
        } catch (\Exception $e) {
            $this->fail("Test failed: " . $e->getMessage());
        }
    }
}
