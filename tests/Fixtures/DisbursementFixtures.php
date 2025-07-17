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
        return $prefix . str_replace('-', '', uniqid('', true));
    }

    /**
     * Get current transaction date in ISO format
     * 
     * @return string
     */
    public static function getCurrentTransactionDate(): string
    {
        return date('Y-m-d\TH:i:sP');
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
            'fund_type' => 'AGENT_TOPUP_FOR_USER_SETTLE'
        ]);

        return new DanaAccountInquiryRequest([
            'partner_reference_no' => self::generatePartnerReferenceNo('ACCINQ-'),
            'customer_number' => '62811742234',
            'amount' => self::createMoney('1.00'),
            'transaction_date' => self::getCurrentTransactionDate(),
            'additional_info' => $additionalInfo
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
            'fund_type' => 'MERCHANT_WITHDRAW_FOR_CORPORATE',
            'beneficiary_bank_code' => '014'
        ]);

        return new BankAccountInquiryRequest([
            'partner_reference_no' => self::generatePartnerReferenceNo('BANKINQ-'),
            'customer_number' => '62811742234',
            'beneficiary_account_number' => '2460888509',
            'amount' => self::createMoney('50000.00'),
            'additional_info' => $additionalInfo
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
            'fund_type' => 'MERCHANT_WITHDRAW_FOR_CORPORATE'
        ]);

        return new TransferToBankRequest([
            'partner_reference_no' => self::generatePartnerReferenceNo('TRANSFER-'),
            'customer_number' => '62811742234',
            'beneficiary_account_number' => '2460888509',
            'beneficiary_bank_code' => '014',
            'amount' => self::createMoney('50000.00'),
            'additional_info' => $additionalInfo
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
            'original_partner_reference_no' => $originalPartnerReferenceNo ?: self::generatePartnerReferenceNo('TRANSFER-'),
            'service_code' => '00'  // Service code for transfer to bank inquiry status
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
            'fund_type' => 'AGENT_TOPUP_FOR_USER_SETTLE'
        ]);

        return new TransferToDanaRequest([
            'partner_reference_no' => self::generatePartnerReferenceNo('TOPUP-'),
            'customer_number' => '62811742234',
            'amount' => self::createMoney('1.00'),
            'fee_amount' => self::createMoney('1.00'),
            'transaction_date' => self::getCurrentTransactionDate(),
            'additional_info' => $additionalInfo
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
            'original_partner_reference_no' => $originalPartnerReferenceNo ?: self::generatePartnerReferenceNo('TOPUP-'),
            'service_code' => '38'  // Service code for transfer to DANA
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
            'fund_type' => 'AGENT_TOPUP_FOR_USER_SETTLE'
        ]);

        return new DanaAccountInquiryRequest([
            'partner_reference_no' => self::generatePartnerReferenceNo('ACCINQ-' . time() . '-'),
            'customer_number' => '62811742234',
            'amount' => self::createMoney('1.00'),
            'transaction_date' => self::getCurrentTransactionDate(),
            'additional_info' => $additionalInfo
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
            'fund_type' => 'AGENT_TOPUP_FOR_USER_SETTLE',
            'account_type' => 'DANA_WALLET'
        ]);

        return new TransferToDanaRequest([
            'partner_reference_no' => self::generatePartnerReferenceNo('TOPUP-' . time() . '-'),
            'customer_number' => '62811742234',
            'amount' => self::createMoney('1.00'),
            'fee_amount' => self::createMoney('1.00'),
            'transaction_date' => self::getCurrentTransactionDate(),
            'notes' => 'Test transfer to DANA',
            'additional_info' => $additionalInfo
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
            'fund_type' => 'MERCHANT_WITHDRAW_FOR_CORPORATE',
            'beneficiary_bank_code' => '014'
        ]);

        return new BankAccountInquiryRequest([
            'partner_reference_no' => self::generatePartnerReferenceNo('BANKINQ-' . time() . '-'),
            'customer_number' => '62811742234',
            'beneficiary_account_number' => '2460888509',
            'amount' => self::createMoney('1.00'),
            'additional_info' => $additionalInfo
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
            'fund_type' => 'MERCHANT_WITHDRAW_FOR_CORPORATE'
        ]);

        return new TransferToBankRequest([
            'partner_reference_no' => self::generatePartnerReferenceNo('TRANSFER-' . time() . '-'),
            'customer_number' => '62811742234',
            'beneficiary_account_number' => '2460888509',
            'beneficiary_bank_code' => '014',
            'amount' => self::createMoney('1.00'),
            'additional_info' => $additionalInfo
        ]);
    }
} 