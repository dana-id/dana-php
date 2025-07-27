<?php
/**
 * Payment Gateway fixtures for testing
 *
 * PHP version 7.4
 *
 * @category Test
 * @package  DanaPhp\Tests\Fixtures
 * @author   DANA Indonesia
 * @link     https://dashboard.dana.id/
 */

namespace Dana\Tests\Fixtures;

use Dana\PaymentGateway\v1\Model\AmountDetail;
use Dana\PaymentGateway\v1\Model\Buyer;
use Dana\PaymentGateway\v1\Model\CancelOrderRequest;
use Dana\PaymentGateway\v1\Model\ConsultPayRequest;
use Dana\PaymentGateway\v1\Model\RefundOrderRequest;
use Dana\PaymentGateway\v1\Model\ConsultPayRequestAdditionalInfo;
use Dana\PaymentGateway\v1\Model\CreateOrderByApiAdditionalInfo;
use Dana\PaymentGateway\v1\Model\CreateOrderByApiRequest;
use Dana\PaymentGateway\v1\Model\EnvInfo;
use Dana\PaymentGateway\v1\Model\Goods;
use Dana\PaymentGateway\v1\Model\Money;
use Dana\PaymentGateway\v1\Model\OrderApiObject;
use Dana\PaymentGateway\v1\Model\OrderBase;
use Dana\PaymentGateway\v1\Model\PayOptionDetail;
use Dana\PaymentGateway\v1\Model\QueryPaymentRequest;
use Dana\PaymentGateway\v1\Model\Seller;
use Dana\PaymentGateway\v1\Model\UrlParam;
use Dana\PaymentGateway\v1\Enum\PayMethod;
use Dana\PaymentGateway\v1\Enum\SourcePlatform;
use Dana\PaymentGateway\v1\Enum\TerminalType;

/**
 * PaymentGatewayFixtures Class
 * 
 * Provides test fixtures for payment gateway API requests
 */
class PaymentGatewayFixtures
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
     * Generate a unique partner reference number
     * 
     * @param string $prefix Optional prefix for the reference number
     * @return string
     */
    public static function generatePartnerReferenceNo(string $prefix = 'PHP-TEST-'): string
    {
        return $prefix . date('YmdHis') . rand(1000, 9999);
    }

    /**
     * Get a ConsultPayRequest fixture
     * 
     * @return ConsultPayRequest
     */
    public static function getConsultPayRequest(): ConsultPayRequest
    {
        $merchantId = self::getMerchantId();
        
        return new ConsultPayRequest([
            'merchantId' => $merchantId,
            'amount' => new Money([
                'value' => '12345678.00',
                'currency' => 'IDR'
            ]),
        ]);
    }

    /**
     * Get a CreateOrderByApiRequest fixture
     * 
     * @return CreateOrderByApiRequest
     */
    public static function getCreateOrderByApiRequest(): CreateOrderByApiRequest
    {
        $merchantId = self::getMerchantId();
        $partnerReferenceNo = self::generatePartnerReferenceNo();

        // Create a valid timestamp in Jakarta timezone (GMT+7)
        $validUpTo = (new \DateTime('now', new \DateTimeZone('Asia/Jakarta')))
            ->add(new \DateInterval('PT10M'))
            ->format('Y-m-d\TH:i:s+07:00');
            
        return new CreateOrderByApiRequest([
            'partnerReferenceNo' => date('Y-m-d\TH:i:s\Z'),
            'merchantId' => $merchantId,
            'amount' => new Money([
                'value' => '222000.00',
                'currency' => 'IDR'
            ]),
            'urlParams' => [
                new UrlParam([
                    'url' => 'https://tinknet.my.id/v1/test',
                    'type' => UrlParam::TYPE_PAY_RETURN,
                    'isDeeplink' => 'Y'
                ]),
                new UrlParam([
                    'url' => 'https://tinknet.my.id/v1/test',
                    'type' => UrlParam::TYPE_NOTIFICATION,
                    'isDeeplink' => 'Y'
                ])
            ],
            'validUpTo' => $validUpTo,
            'payOptionDetails' => [
                new PayOptionDetail([
                    'payMethod' => PayMethod::BALANCE,
                    'payOption' => '',
                    'transAmount' => new Money([
                        'value' => '222000.00',
                        'currency' => 'IDR'
                    ])
                ])
            ],
            'additionalInfo' => new CreateOrderByApiAdditionalInfo([
                'order' => new OrderApiObject([
                    'orderTitle' => 'Paket Tinknet 10Mb',
                    'scenario' => 'API',
                    'merchantTransType' => 'SPECIAL_MOVIE'
                ]),
                'mcc' => '5732',
                'envInfo' => new EnvInfo([
                    'sourcePlatform' => SourcePlatform::IPG,
                    'terminalType' => TerminalType::SYSTEM
                ])
            ])
        ]);
    }
    
    /**
     * Get a CreateOrderByApiRequest fixture with paid configuration
     * Matches the Node.js implementation of getCreateOrderByApiPaidRequest
     * 
     * @return CreateOrderByApiRequest
     */
    public static function getCreateOrderByApiPaidRequest(): CreateOrderByApiRequest
    {
        $merchantId = self::getMerchantId();
        $partnerReferenceNo = self::generatePartnerReferenceNo();
        
        return new CreateOrderByApiRequest([
            'partnerReferenceNo' => $partnerReferenceNo,
            'merchantId' => $merchantId,
            'amount' => new Money([
                'value' => '50001.00',
                'currency' => 'IDR'
            ]),
            'validUpTo' => '2030-05-01T00:46:43+07:00',
            'urlParams' => [
                new UrlParam([
                    'url' => 'https://example.com/return',
                    'type' => UrlParam::TYPE_PAY_RETURN,
                    'isDeeplink' => 'N'
                ]),
                new UrlParam([
                    'url' => 'https://example.com/notify',
                    'type' => UrlParam::TYPE_NOTIFICATION,
                    'isDeeplink' => 'N'
                ])
            ],
            'additionalInfo' => new CreateOrderByApiAdditionalInfo([
                'order' => new OrderApiObject([
                    'orderTitle' => 'Test Product',
                    'scenario' => 'REDIRECT',
                    'merchantTransType' => 'SPECIAL_MOVIE'
                ]),
                'mcc' => '5732',
                'envInfo' => new EnvInfo([
                    'sourcePlatform' => SourcePlatform::IPG,
                    'terminalType' => TerminalType::SYSTEM,
                    'sessionId' => '8EU6mLl5mUpUBgyRFT4v7DjfQ3fcauthcenter',
                    'tokenId' => 'a8d359d6-ca3d-4048-9295-bbea5f6715a6',
                    'websiteLanguage' => 'en_US',
                    'clientIp' => '10.15.8.189',
                    'osType' => 'Windows.PC',
                    'appVersion' => '1.0',
                    'sdkVersion' => '1.0',
                    'clientKey' => 'e5806b64-598d-414f-b7f7-83f9576eb6fb',
                    'orderTerminalType' => 'WEB',
                    'orderOsType' => 'IOS',
                    'merchantAppVersion' => '1.0'
                ])
            ])
        ]);
    }

    /**
     * Get a QueryPaymentRequest fixture
     * 
     * @param string|null $partnerReferenceNo Optional specific partner reference no
     * @return QueryPaymentRequest
     */
    public static function getQueryPaymentRequest(?string $partnerReferenceNo = null): QueryPaymentRequest
    {
        $merchantId = self::getMerchantId();
        
        return new QueryPaymentRequest([
            'originalPartnerReferenceNo' => $partnerReferenceNo ?: self::generatePartnerReferenceNo(),
            'merchantId' => $merchantId
        ]);
    }

    /**
     * Get a CancelOrderRequest fixture
     * 
     * @param string|null $partnerReferenceNo Optional specific partner reference no
     * @return CancelOrderRequest
     */
    public static function getCancelOrderRequest(?string $partnerReferenceNo = null): CancelOrderRequest
    {
        $merchantId = self::getMerchantId();
        
        return new CancelOrderRequest([
            'originalPartnerReferenceNo' => $partnerReferenceNo ?: self::generatePartnerReferenceNo(),
            'merchantId' => $merchantId,
            'reason' => 'Test cancellation'
        ]);
    }

    /**
     * Get a RefundOrderRequest fixture
     * 
     * @param CreateOrderByApiRequest|null $createOrderRequest Original create order request
     * @param string|null $originalReferenceNo Original reference number from the successful payment
     * @param string|null $originalPartnerReferenceNo Original partner reference number
     * @return RefundOrderRequest
     */
    public static function getRefundOrderRequest(
        ?CreateOrderByApiRequest $createOrderRequest = null, 
        ?string $originalReferenceNo = null,
        ?string $originalPartnerReferenceNo = null
    ): RefundOrderRequest {
        $merchantId = self::getMerchantId();
        $partnerRefundNo = self::generatePartnerReferenceNo('PHP-REFUND-');
        
        // Get the amount from the original request or use a default value
        $refundAmount = null;
        if ($createOrderRequest && $createOrderRequest->getAmount()) {
            $refundAmount = $createOrderRequest->getAmount();
        } else {
            $refundAmount = new Money([
                'value' => '10000.00',
                'currency' => 'IDR'
            ]);
        }
        
        return new RefundOrderRequest([
            'merchantId' => $merchantId,
            'originalReferenceNo' => $originalReferenceNo,
            'originalPartnerReferenceNo' => $originalPartnerReferenceNo,
            'partnerRefundNo' => $partnerRefundNo,
            'refundAmount' => $refundAmount,
            'reason' => 'Test refund'
        ]);
    }
}
