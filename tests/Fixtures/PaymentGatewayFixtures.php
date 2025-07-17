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
            'merchant_id' => $merchantId,
            'amount' => new Money([
                'value' => '12345678.00',
                'currency' => 'IDR'
            ]),
            'additional_info' => new ConsultPayRequestAdditionalInfo([
                'buyer' => new Buyer([
                    'external_user_id' => '8392183912832913821',
                ]),
                'env_info' => new EnvInfo([
                    'session_id' => '8EU6mLl5mUpUBgyRFT4v7DjfQ3fcauthcenter',
                    'token_id' => 'a8d359d6-ca3d-4048-9295-bbea5f6715a6',
                    'website_language' => 'en_US',
                    'client_ip' => '10.15.8.189',
                    'os_type' => 'Windows.PC',
                    'app_version' => '1.0',
                    'sdk_version' => '1.0',
                    'source_platform' => "IPG",
                    'order_os_type' => 'IOS',
                    'merchant_app_version' => '1.0',
                    'terminal_type' => "SYSTEM",
                    'order_terminal_type' => "WEB",
                    'extend_info' => '{"deviceId":"CV19A56370e8a00d54293aab8001e4794"}'
                ]),
                'merchant_trans_type' => 'SPECIAL_MOVIE'
            ])
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
            'partner_reference_no' => date('Y-m-d\TH:i:s\Z'),
            'merchant_id' => $merchantId,
            'amount' => new Money([
                'value' => '222000.00',
                'currency' => 'IDR'
            ]),
            'url_params' => [
                new UrlParam([
                    'url' => 'https://tinknet.my.id/v1/test',
                    'type' => UrlParam::TYPE_PAY_RETURN,
                    'is_deeplink' => 'Y'
                ]),
                new UrlParam([
                    'url' => 'https://tinknet.my.id/v1/test',
                    'type' => UrlParam::TYPE_NOTIFICATION,
                    'is_deeplink' => 'Y'
                ])
            ],
            'valid_up_to' => $validUpTo,
            'pay_option_details' => [
                new PayOptionDetail([
                    'pay_method' => PayMethod::BALANCE,
                    'pay_option' => '',
                    'trans_amount' => new Money([
                        'value' => '222000.00',
                        'currency' => 'IDR'
                    ])
                ])
            ],
            'additional_info' => new CreateOrderByApiAdditionalInfo([
                'order' => new OrderApiObject([
                    'order_title' => 'Paket Tinknet 10Mb',
                    'scenario' => 'API',
                    'merchant_trans_type' => 'SPECIAL_MOVIE'
                ]),
                'mcc' => '5732',
                'env_info' => new EnvInfo([
                    'source_platform' => SourcePlatform::IPG,
                    'terminal_type' => TerminalType::SYSTEM
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
            'original_partner_reference_no' => $partnerReferenceNo ?: self::generatePartnerReferenceNo(),
            'merchant_id' => $merchantId
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
            'original_partner_reference_no' => $partnerReferenceNo ?: self::generatePartnerReferenceNo(),
            'merchant_id' => $merchantId,
            'reason' => 'Test cancellation'
        ]);
    }
}
