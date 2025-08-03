<?php
/**
 * Widget API fixtures for testing
 *
 * PHP version 7.4
 *
 * @category Test
 * @package  Dana\Tests\Fixtures
 * @author   DANA Indonesia
 * @link     https://dashboard.dana.id/
 */

namespace Dana\Tests\Fixtures;

use Dana\Widget\v1\Model\WidgetPaymentRequest;
use Dana\Widget\v1\Model\WidgetPaymentRequestAdditionalInfo;
use Dana\Widget\v1\Model\QueryPaymentRequest;
use Dana\Widget\v1\Model\CancelOrderRequest;
use Dana\Widget\v1\Model\RefundOrderRequest;
use Dana\Widget\v1\Model\AccountUnbindingRequest;
use Dana\Widget\v1\Model\AccountUnbindingRequestAdditionalInfo;
use Dana\Widget\v1\Model\Money;
use Dana\Widget\v1\Model\Order;
use Dana\Widget\v1\Model\EnvInfo;

/**
 * WidgetFixtures Class
 * 
 * Provides test fixtures for Widget API requests
 */
class WidgetFixtures
{
    /**
     * Get test merchant ID
     * 
     * @return string
     */
    public static function getMerchantId(): string
    {
        return getenv('MERCHANT_ID') ?: '';
    }

    /**
     * Get a WidgetPaymentRequest fixture
     * 
     * @return WidgetPaymentRequest
     */
    public static function getWidgetPaymentRequest(): WidgetPaymentRequest
    {
        $order = new Order([
            'orderTitle' => 'DANA Widget Test Order',
            'createdTime' => (new \DateTime())->format('Y-m-d\TH:i:sP')
        ]);
        
        $envInfo = new EnvInfo([
            'sourcePlatform' => 'IPG',
            'terminalType' => 'SYSTEM'
        ]);
        
        $additionalInfo = new WidgetPaymentRequestAdditionalInfo([
            'productCode' => '51051000100000000001',
            'order' => $order,
            'mcc' => '5732',
            'envInfo' => $envInfo
        ]);
        
        $amount = new Money([
            'value' => '10000.00',
            'currency' => 'IDR'
        ]);
        
        // Generate a UUID v4-like string without dependencies
        $partnerReferenceNo = sprintf(
            '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
            mt_rand(0, 0xffff), mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),
            mt_rand(0, 0x0fff) | 0x4000,
            mt_rand(0, 0x3fff) | 0x8000,
            mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff)
        );
        
        return new WidgetPaymentRequest([
            'partnerReferenceNo' => $partnerReferenceNo,
            'merchantId' => self::getMerchantId(),
            'amount' => $amount,
            'additionalInfo' => $additionalInfo
        ]);
    }

    /**
     * Get a QueryPaymentRequest fixture for Widget API
     * 
     * @param WidgetPaymentRequest|null $widgetPaymentRequest Original payment request
     * @param object|null $widgetPaymentResponse Original payment response
     * @return QueryPaymentRequest
     */
    public static function getWidgetQueryPaymentRequest(
        ?WidgetPaymentRequest $widgetPaymentRequest = null,
        ?object $widgetPaymentResponse = null
    ): QueryPaymentRequest {
        // Handle nullable parameters safely
        $originalPartnerReferenceNo = $widgetPaymentRequest ? $widgetPaymentRequest->getPartnerReferenceNo() : null;
        
        // Check which getter method is available for referenceNo on the response
        $originalReferenceNo = null;
        if ($widgetPaymentResponse) {
            if (method_exists($widgetPaymentResponse, 'getReferenceNo')) {
                $originalReferenceNo = $widgetPaymentResponse->getReferenceNo();
            } elseif (property_exists($widgetPaymentResponse, 'referenceNo')) {
                $originalReferenceNo = $widgetPaymentResponse->referenceNo;
            }
        }
        
        return new QueryPaymentRequest([
            'serviceCode' => '54',
            'merchantId' => self::getMerchantId(),
            'originalPartnerReferenceNo' => $originalPartnerReferenceNo,
            'originalReferenceNo' => $originalReferenceNo
        ]);
    }

    /**
     * Get a CancelOrderRequest fixture for Widget API
     * 
     * @param WidgetPaymentRequest|null $widgetPaymentRequest Original payment request
     * @return CancelOrderRequest
     */
    public static function getWidgetCancelOrderRequest(
        ?WidgetPaymentRequest $widgetPaymentRequest = null
    ): CancelOrderRequest {
        // Handle nullable parameter safely
        $originalPartnerReferenceNo = null;
        $merchantId = self::getMerchantId();
        
        if ($widgetPaymentRequest) {
            $originalPartnerReferenceNo = $widgetPaymentRequest->getPartnerReferenceNo();
            $merchantId = $widgetPaymentRequest->getMerchantId() ?? self::getMerchantId();
        }
        
        return new CancelOrderRequest([
            'originalPartnerReferenceNo' => $originalPartnerReferenceNo,
            'merchantId' => $merchantId,
            'reason' => 'User cancelled order'
        ]);
    }
    
    /**
     * Get a RefundOrderRequest fixture for Widget API
     * 
     * @param WidgetPaymentRequest|null $widgetPaymentRequest Original payment request
     * @return RefundOrderRequest
     */
    public static function getRefundOrderRequest(
        ?WidgetPaymentRequest $widgetPaymentRequest = null
    ): RefundOrderRequest {
        // Handle nullable parameter safely
        $originalPartnerReferenceNo = null;
        $merchantId = self::getMerchantId();
        
        if ($widgetPaymentRequest) {
            $originalPartnerReferenceNo = $widgetPaymentRequest->getPartnerReferenceNo();
            $merchantId = $widgetPaymentRequest->getMerchantId() ?? self::getMerchantId();
        }
        
        // Generate a UUID v4-like string for refund reference number
        $partnerRefundNo = sprintf(
            '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
            mt_rand(0, 0xffff), mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),
            mt_rand(0, 0x0fff) | 0x4000,
            mt_rand(0, 0x3fff) | 0x8000,
            mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff)
        );
        
        $refundAmount = new Money([
            'value' => '10000.00',
            'currency' => 'IDR'
        ]);
        
        return new RefundOrderRequest([
            'merchantId' => $merchantId,
            'originalPartnerReferenceNo' => $originalPartnerReferenceNo,
            'partnerRefundNo' => $partnerRefundNo,
            'refundAmount' => $refundAmount
        ]);
    }
    
    /**
     * Get an AccountUnbindingRequest fixture
     * 
     * @param string|null $accessToken The binding access token to use
     * @return AccountUnbindingRequest
     */
    public static function getAccountUnbindingRequest(
        ?string $accessToken = null
    ): AccountUnbindingRequest {
        $additionalInfo = new AccountUnbindingRequestAdditionalInfo([
            'accessToken' => $accessToken ?: 'DUMMY_ACCESS_TOKEN',
            'deviceId' => 'DUMMY_DEVICE_ID'
        ]);
        
        return new AccountUnbindingRequest([
            'merchantId' => self::getMerchantId(),
            'additionalInfo' => $additionalInfo
        ]);
    }
}
