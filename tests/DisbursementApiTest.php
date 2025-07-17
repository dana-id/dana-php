<?php
/**
 * Disbursement API Test
 *
 * PHP version 7.4
 *
 * @category Test
 * @package  DanaPhp\Tests
 * @author   DANA Indonesia
 * @link     https://dashboard.dana.id/
 */

namespace Dana\Tests;

use PHPUnit\Framework\TestCase;
use Dana\Disbursement\v1\Api\DisbursementApi;
use Dana\Disbursement\v1\Model\DanaAccountInquiryRequest;
use Dana\Disbursement\v1\Model\DanaAccountInquiryResponse;
use Dana\Disbursement\v1\Model\BankAccountInquiryRequest;
use Dana\Disbursement\v1\Model\BankAccountInquiryResponse;
use Dana\Disbursement\v1\Model\TransferToBankRequest;
use Dana\Disbursement\v1\Model\TransferToBankResponse;
use Dana\Disbursement\v1\Model\TransferToBankInquiryStatusRequest;
use Dana\Disbursement\v1\Model\TransferToBankInquiryStatusResponse;
use Dana\Disbursement\v1\Model\TransferToDanaRequest;
use Dana\Disbursement\v1\Model\TransferToDanaResponse;
use Dana\Disbursement\v1\Model\TransferToDanaInquiryStatusRequest;
use Dana\Disbursement\v1\Model\TransferToDanaInquiryStatusResponse;
use Dana\Tests\Fixtures\ApiClientFixtures;
use Dana\Tests\Fixtures\DisbursementFixtures;

/**
 * DisbursementApiTest Class
 *
 * Test class for Disbursement API endpoints
 * 
 */ 
// class DisbursementApiTest extends TestCase
// {
//     private DisbursementApi $apiInstance;

//     /**
//      * Setup method to initialize API instance
//      */
//     protected function setUp(): void
//     {
//         parent::setUp();
//         $this->apiInstance = ApiClientFixtures::getDisbursementApiInstance();
//     }

//     /**
//      * Test DANA account inquiry 
//      * 
//      * @throws \Exception
//      */
//     public function testDanaAccountInquirySuccess(): void
//     {
//         // Arrange
//         $request = DisbursementFixtures::getDynamicDanaAccountInquiryRequest();

//         // Act
//         $response = $this->apiInstance->danaAccountInquiry($request);

//         // Assert - Check response structure and required fields
//         $this->assertInstanceOf(DanaAccountInquiryResponse::class, $response);
//         $this->assertNotNull($response->getResponseCode(), 'Response code should not be empty');
//         $this->assertNotNull($response->getResponseMessage(), 'Response message should not be empty');
//         $this->assertNotNull($response->getCustomerName(), 'Customer name should not be empty');
        
//         // Assert - Check Money objects are properly structured
//         $this->assertNotNull($response->getMinAmount(), 'Min amount should not be null');
//         $this->assertNotNull($response->getMaxAmount(), 'Max amount should not be null');
//         $this->assertNotNull($response->getAmount(), 'Amount should not be null');
//         $this->assertNotNull($response->getFeeAmount(), 'Fee amount should not be null');
        
//         $this->assertNotNull($response->getMinAmount()->getValue(), 'Min amount value should not be null');
//         $this->assertNotNull($response->getMinAmount()->getCurrency(), 'Min amount currency should not be null');
//         $this->assertNotNull($response->getMaxAmount()->getValue(), 'Max amount value should not be null');
//         $this->assertNotNull($response->getMaxAmount()->getCurrency(), 'Max amount currency should not be null');
//         $this->assertNotNull($response->getAmount()->getValue(), 'Amount value should not be null');
//         $this->assertNotNull($response->getAmount()->getCurrency(), 'Amount currency should not be null');
//         $this->assertNotNull($response->getFeeAmount()->getValue(), 'Fee amount value should not be null');
//         $this->assertNotNull($response->getFeeAmount()->getCurrency(), 'Fee amount currency should not be null');
        
//         // Assert - Check currency consistency
//         $this->assertEquals($response->getAmount()->getCurrency(), $response->getFeeAmount()->getCurrency(), 'Amount and fee currency should match');
//     }

//     /**
//      * Test bank account inquiry
//      * 
//      * @throws \Exception
//      */
//     public function testBankAccountInquirySuccess(): void
//     {
//         // Arrange
//         $request = DisbursementFixtures::getDynamicBankAccountInquiryRequest();

//         // Act
//         $response = $this->apiInstance->bankAccountInquiry($request);

//         // Assert - Check response structure and required fields
//         $this->assertInstanceOf(BankAccountInquiryResponse::class, $response);
//         $this->assertNotNull($response->getResponseCode(), 'Response code should not be empty');
//         $this->assertNotNull($response->getResponseMessage(), 'Response message should not be empty');
//         $this->assertNotNull($response->getBeneficiaryAccountNumber(), 'Beneficiary account number should not be empty');
//         $this->assertNotNull($response->getBeneficiaryAccountName(), 'Beneficiary account name should not be empty');
//         $this->assertNotNull($response->getAmount(), 'Amount should not be null');
        
//         // Assert - Check account details match request
//         $this->assertEquals($request->getBeneficiaryAccountNumber(), $response->getBeneficiaryAccountNumber(), 'Account number should match request');
        
//         // Assert - Check Money object structure
//         $this->assertNotNull($response->getAmount()->getValue(), 'Amount value should not be null');
//         $this->assertNotNull($response->getAmount()->getCurrency(), 'Amount currency should not be null');
//         $this->assertEquals($request->getAmount()->getValue(), $response->getAmount()->getValue(), 'Amount should match request');
//         $this->assertEquals($request->getAmount()->getCurrency(), $response->getAmount()->getCurrency(), 'Currency should match request');
        
//         // Assert - Check additional info if present
//         if ($response->getAdditionalInfo() !== null) {
//             $this->assertNotNull($response->getAdditionalInfo(), 'Additional info should be present');
//         }
//     }

//     /**
//      * Test transfer to bank
//      * 
//      * @throws \Exception
//      */
//     public function testTransferToBankSuccess(): void
//     {
//         // Arrange
//         $request = DisbursementFixtures::getDynamicTransferToBankRequest();

//         // Act
//         $response = $this->apiInstance->transferToBank($request);

//         // Assert - Check response structure and required fields
//         $this->assertInstanceOf(TransferToBankResponse::class, $response);
//         $this->assertNotNull($response->getResponseCode(), 'Response code should not be empty');
//         $this->assertNotNull($response->getResponseMessage(), 'Response message should not be empty');
//         $this->assertNotNull($response->getReferenceNumber(), 'Reference number should not be empty');
        
//         // Assert - Check partner reference number matches if present
//         if ($response->getPartnerReferenceNo() !== null) {
//             $this->assertEquals($request->getPartnerReferenceNo(), $response->getPartnerReferenceNo(), 'Partner reference number should match request');
//         }
        
//         // Assert - Check transaction date is present
//         $this->assertNotNull($response->getTransactionDate(), 'Transaction date should be present');
//     }

    
//     /**
//      * Test transfer to bank inquiry status
//      * 
//      * @throws \Exception
//      */
//     public function testTransferToBankInquiryStatusSuccess(): void
//     {
//         // Arrange - First perform a transfer to bank to get a valid reference
//         $transferRequest = DisbursementFixtures::getDynamicTransferToBankRequest();
//         $transferResponse = $this->apiInstance->transferToBank($transferRequest);
        
//         // Create inquiry status request using the transfer response
//         $inquiryRequest = DisbursementFixtures::getTransferToBankInquiryStatusRequest(
//             $transferResponse->getPartnerReferenceNo() ?: $transferRequest->getPartnerReferenceNo()
//         );

//         // Act
//         $response = $this->apiInstance->transferToBankInquiryStatus($inquiryRequest);

//         // Assert - Check response structure and required fields
//         $this->assertInstanceOf(TransferToBankInquiryStatusResponse::class, $response);
//         $this->assertNotNull($response->getResponseCode(), 'Response code should not be empty');
//         $this->assertNotNull($response->getResponseMessage(), 'Response message should not be empty');
//         $this->assertNotNull($response->getServiceCode(), 'Service code should not be empty');
//         $this->assertNotNull($response->getLatestTransactionStatus(), 'Latest transaction status should not be empty');
        
//         // Assert - Check service code matches request
//         $this->assertEquals($inquiryRequest->getServiceCode(), $response->getServiceCode(), 'Service code should match request');
        
//         // Assert - Check original reference numbers if present
//         if ($response->getOriginalPartnerReferenceNo() !== null) {
//             $this->assertEquals($inquiryRequest->getOriginalPartnerReferenceNo(), $response->getOriginalPartnerReferenceNo(), 'Original partner reference number should match request');
//         }
        
//         // Assert - Check transaction status is valid
//         $validStatuses = ['00', '01', '02', '03', '04', '05', '06', '07'];
//         $this->assertContains($response->getLatestTransactionStatus(), $validStatuses, 'Latest transaction status should be valid');
//     }

    
//     /**
//      * Test transfer to DANA (customer top up)
//      * 
//      * @throws \Exception
//      */
//     public function testTransferToDanaSuccess(): void
//     {
//         // Arrange
//         $request = DisbursementFixtures::getDynamicTransferToDanaRequest();

//         // Act
//         $response = $this->apiInstance->transferToDana($request);

//         // Assert
//         $this->assertInstanceOf(TransferToDanaResponse::class, $response);
//         $this->assertNotNull($response->getResponseCode(), 'Response code should not be empty');
//         $this->assertNotNull($response->getResponseMessage(), 'Response message should not be empty');
//         $this->assertNotNull($response->getPartnerReferenceNo(), 'Partner reference number should not be empty');
//         $this->assertNotNull($response->getAmount(), 'Amount should not be null');
        
//         // Assert - Check partner reference number matches request
//         $this->assertEquals($request->getPartnerReferenceNo(), $response->getPartnerReferenceNo(), 'Partner reference number should match request');
//     }


//     /**
//      * Test transfer to DANA inquiry status
//      * 
//      * @throws \Exception
//      */
//     public function testTransferToDanaInquiryStatusSuccess(): void
//     {
//         // Arrange - First perform a transfer to DANA to get a valid reference
//         $transferRequest = DisbursementFixtures::getDynamicTransferToDanaRequest();
//         $transferResponse = $this->apiInstance->transferToDana($transferRequest);
        
//         // Create inquiry status request using the transfer response
//         $inquiryRequest = DisbursementFixtures::getTransferToDanaInquiryStatusRequest(
//             $transferResponse->getPartnerReferenceNo()
//         );

//         // Wait a bit before checking status
//         sleep(2);

//         // Act
//         $response = $this->apiInstance->transferToDanaInquiryStatus($inquiryRequest);

//         // Assert
//         $this->assertInstanceOf(TransferToDanaInquiryStatusResponse::class, $response);
//         $this->assertNotNull($response->getResponseCode(), 'Response code should not be empty');
//         $this->assertNotNull($response->getResponseMessage(), 'Response message should not be empty');
//         $this->assertNotNull($response->getOriginalPartnerReferenceNo(), 'Original partner reference number should not be empty');
//         $this->assertNotNull($response->getServiceCode(), 'Service code should not be empty');
//         $this->assertNotNull($response->getAmount(), 'Amount should not be null');
//         $this->assertNotNull($response->getLatestTransactionStatus(), 'Latest transaction status should not be empty');
        
//         // Assert - Check fields match request
//         $this->assertEquals($inquiryRequest->getOriginalPartnerReferenceNo(), $response->getOriginalPartnerReferenceNo(), 'Original partner reference number should match request');
//         $this->assertEquals($inquiryRequest->getServiceCode(), $response->getServiceCode(), 'Service code should match request');
        
//         // Assert - Check transaction status is valid
//         $validStatuses = ['00', '01', '02', '03', '04', '05', '06', '07'];
//         $this->assertContains($response->getLatestTransactionStatus(), $validStatuses, 'Latest transaction status should be valid');
//     }
// }
