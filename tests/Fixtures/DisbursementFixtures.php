<?php
/**
 * Disbursement fixtures for testing
 *
 * PHP version 7.4
 *
 * @category Test
 * @package  DanaPhp\Tests\Fixtures
 * @author   DANA Indonesia
 * @link     https://dashboard.dana.id/
 */

namespace Dana\Tests\Fixtures;

use Dana\Disbursement\v1\Model\DanaAccountInquiryRequest;
use Dana\Disbursement\v1\Model\DanaAccountInquiryRequestAdditionalInfo;
use Dana\Disbursement\v1\Model\BankAccountInquiryRequest;
use Dana\Disbursement\v1\Model\BankAccountInquiryRequestAdditionalInfo;
use Dana\Disbursement\v1\Model\TransferToBankRequest;
use Dana\Disbursement\v1\Model\TransferToBankRequestAdditionalInfo;
use Dana\Disbursement\v1\Model\TransferToBankInquiryStatusRequest;
use Dana\Disbursement\v1\Model\TransferToDanaRequest;
use Dana\Disbursement\v1\Model\TransferToDanaRequestAdditionalInfo;
use Dana\Disbursement\v1\Model\TransferToDanaInquiryStatusRequest;
use Dana\Disbursement\v1\Model\Money;

/**
 * DisbursementFixtures Class
 * 
 * Provides test fixtures for disbursement API requests
 */
class DisbursementFixtures
{
    /**
     * Generate a unique partner reference number using UUID
     * 
     * @param string $prefix Optional prefix for the reference number
     * @return string
     */
    public static function generatePartnerReferenceNo(string $prefix = 'PHP-TEST-'): string
    {
        return $prefix . date('YmdHisu');
    }

    /**
     * Get current transaction date in ISO format
     * 
     * @return string
     */
    public static function getCurrentTransactionDate(): string
    {
        return date('Y-m-d\TH:i:s') . '+07:00';
    }

    /**
     * Create a Money object
     * 
     * @param string $value
     * @param string $currency
     * @return Money
     */
    public static function createMoney(string $value, string $currency = 'IDR'): Money
    {
        return new Money([
            'value' => $value,
            'currency' => $currency
        ]);
    }

    /**
     * Get basic DANA account inquiry request fixture
     * 
     * @return DanaAccountInquiryRequest
     */
    public static function getDanaAccountInquiryRequest(): DanaAccountInquiryRequest
    {
        $additionalInfo = new DanaAccountInquiryRequestAdditionalInfo([
            'fundType' => 'AGENT_TOPUP_FOR_USER_SETTLE'
        ]);

        return new DanaAccountInquiryRequest([
            'partnerReferenceNo' => self::generatePartnerReferenceNo('ACCINQ-'),
            'customerNumber' => '6287875849373',
            'amount' => self::createMoney('1.00'),
            'transactionDate' => self::getCurrentTransactionDate(),
            'additionalInfo' => $additionalInfo
        ]);
    }


    /**
     * Get basic bank account inquiry request fixture
     * 
     * @return BankAccountInquiryRequest
     */
    public static function getBankAccountInquiryRequest(): BankAccountInquiryRequest
    {
        $additionalInfo = new BankAccountInquiryRequestAdditionalInfo([
            'fundType' => 'MERCHANT_WITHDRAW_FOR_CORPORATE',
            'beneficiaryBankCode' => '014'
        ]);

        return new BankAccountInquiryRequest([
            'partnerReferenceNo' => self::generatePartnerReferenceNo('BANKINQ-'),
            'customerNumber' => '6287875849373',
            'beneficiaryAccountNumber' => '2460888509',
            'amount' => self::createMoney('1.00'),
            'additionalInfo' => $additionalInfo
        ]);
    }

    
    /**
     * Get basic transfer to bank request fixture
     * 
     * @return TransferToBankRequest
     */
    public static function getTransferToBankRequest(): TransferToBankRequest
    {
        $additionalInfo = new TransferToBankRequestAdditionalInfo([
            'fundType' => 'MERCHANT_WITHDRAW_FOR_CORPORATE'
        ]);

        return new TransferToBankRequest([
            'partnerReferenceNo' => self::generatePartnerReferenceNo('TRANSFER-'),
            'customerNumber' => '6287875849373',
            'beneficiaryAccountNumber' => '2460888509',
            'beneficiaryBankCode' => '014',
            'amount' => self::createMoney('1.00'),
            'additionalInfo' => $additionalInfo
        ]);
    }

    /**
     * Get basic transfer to bank inquiry status request fixture
     * 
     * @param string|null $originalPartnerReferenceNo
     * @return TransferToBankInquiryStatusRequest
     */
    public static function getTransferToBankInquiryStatusRequest(?string $originalPartnerReferenceNo = null): TransferToBankInquiryStatusRequest
    {
        return new TransferToBankInquiryStatusRequest([
            'originalPartnerReferenceNo' => $originalPartnerReferenceNo ?: self::generatePartnerReferenceNo('TRANSFER-'),
            'serviceCode' => '00'  // Service code for transfer to bank inquiry status
        ]);
    }

    /**
     * Get basic transfer to DANA request fixture
     * 
     * @return TransferToDanaRequest
     */
    public static function getTransferToDanaRequest(): TransferToDanaRequest
    {
        $additionalInfo = new TransferToDanaRequestAdditionalInfo([
            'fundType' => 'AGENT_TOPUP_FOR_USER_SETTLE'
        ]);

        return new TransferToDanaRequest([
            'partnerReferenceNo' => self::generatePartnerReferenceNo('TOPUP-'),
            'customerNumber' => '62811742234',
            'amount' => self::createMoney('1.00'),
            'feeAmount' => self::createMoney('1.00'),
            'transactionDate' => self::getCurrentTransactionDate(),
            'additionalInfo' => $additionalInfo
        ]);
    }

    /**
     * Get basic transfer to DANA inquiry status request fixture
     * 
     * @param string|null $originalPartnerReferenceNo
     * @return TransferToDanaInquiryStatusRequest
     */
    public static function getTransferToDanaInquiryStatusRequest(?string $originalPartnerReferenceNo = null): TransferToDanaInquiryStatusRequest
    {
        return new TransferToDanaInquiryStatusRequest([
            'originalPartnerReferenceNo' => $originalPartnerReferenceNo ?: self::generatePartnerReferenceNo('TOPUP-'),
            'serviceCode' => '38'  // Service code for transfer to DANA
        ]);
    }

   
    /**
     * Generate dynamic DANA account inquiry request for unique test execution
     * 
     * @return DanaAccountInquiryRequest
     */
    public static function getDynamicDanaAccountInquiryRequest(): DanaAccountInquiryRequest
    {
        $additionalInfo = new DanaAccountInquiryRequestAdditionalInfo([
            'fundType' => 'AGENT_TOPUP_FOR_USER_SETTLE'
        ]);

        return new DanaAccountInquiryRequest([
            'partnerReferenceNo' => self::generatePartnerReferenceNo('ACCINQ-'),
            'customerNumber' => '6287875849373',
            'amount' => self::createMoney('1.00'),
            'transactionDate' => self::getCurrentTransactionDate(),
            'additionalInfo' => $additionalInfo
        ]);
    }

    /**
     * Generate dynamic transfer to DANA request for unique test execution
     * 
     * @return TransferToDanaRequest
     */
    public static function getDynamicTransferToDanaRequest(): TransferToDanaRequest
    {
        $additionalInfo = new TransferToDanaRequestAdditionalInfo([
            'fundType' => 'AGENT_TOPUP_FOR_USER_SETTLE',
            'accountType' => 'DANA_WALLET'
        ]);

        return new TransferToDanaRequest([
            'partnerReferenceNo' => self::generatePartnerReferenceNo('TOPUP-'),
            'customerNumber' => '62811742234',
            'amount' => self::createMoney('1.00'),
            'feeAmount' => self::createMoney('1.00'),
            'transactionDate' => self::getCurrentTransactionDate(),
            'notes' => 'Test transfer to DANA',
            'additionalInfo' => $additionalInfo
        ]);
    }

    /**
     * Generate dynamic bank account inquiry request for unique test execution
     * 
     * @return BankAccountInquiryRequest
     */
    public static function getDynamicBankAccountInquiryRequest(): BankAccountInquiryRequest
    {
        $additionalInfo = new BankAccountInquiryRequestAdditionalInfo([
            'fundType' => 'MERCHANT_WITHDRAW_FOR_CORPORATE',
            'beneficiaryBankCode' => '014'
        ]);

        return new BankAccountInquiryRequest([
            'partnerReferenceNo' => self::generatePartnerReferenceNo('BANKINQNAME-'),
            'customerNumber' => '62811742234',
            'beneficiaryAccountNumber' => '2460888509',
            'amount' => self::createMoney('50000.00'),
            'additionalInfo' => $additionalInfo
        ]);
    }

    /**
     * Generate dynamic transfer to bank request for unique test execution
     * 
     * @return TransferToBankRequest
     */
    public static function getDynamicTransferToBankRequest(): TransferToBankRequest
    {
        $additionalInfo = new TransferToBankRequestAdditionalInfo([
            'fundType' => 'MERCHANT_WITHDRAW_FOR_CORPORATE'
        ]);

        return new TransferToBankRequest([
            'partnerReferenceNo' => self::generatePartnerReferenceNo('TRANSFER-'),
            'customerNumber' => '6287875849373',
            'beneficiaryAccountNumber' => '2460888509',
            'beneficiaryBankCode' => '014',
            'amount' => self::createMoney('50000.00'),
            'additionalInfo' => $additionalInfo
        ]);
    }
} 