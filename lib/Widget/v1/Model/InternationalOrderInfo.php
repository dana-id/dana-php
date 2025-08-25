<?php

namespace Dana\Widget\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\Widget\v1\Enum;

class InternationalOrderInfo extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'InternationalOrderInfo';

    protected static $openAPITypes = [
        'originOrderAmount' => '\Dana\Widget\v1\Model\Money',
        'exchangeRate' => '\Dana\Widget\v1\Model\InternationalOrderInfoExchangeRate',
        'totalAmount' => '\Dana\Widget\v1\Model\Money',
        'paymentPromoInfo' => '\Dana\Widget\v1\Model\PaymentPromoInfo',
        'refundPromoInfo' => '\Dana\Widget\v1\Model\RefundPromoInfo'
    ];

    protected static $openAPIFormats = [
        
    ];

    protected static array $openAPINullables = [
        
    ];


    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    public function getModelName()
    {
        return self::$openAPIModelName;
    }





    public function __construct(?array $data = null)
    {
        $localData = [];
        $defaultValues = [
            
        ];
        
        // Initialize all properties with defaults or values from input data
        foreach (array_keys(static::$openAPITypes) as $property) {
            $localData[$property] = isset($data) && array_key_exists($property, $data)
                ? $data[$property]
                : ($defaultValues[$property] ?? null);
        }
        
        parent::__construct($localData);
    }


    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        return $invalidProperties;
    }



    public function getOriginOrderAmount()
    {
        return $this->container['originOrderAmount'];
    }

    public function setOriginOrderAmount($originOrderAmount)
    {
        if (is_null($originOrderAmount)) {
            throw new \InvalidArgumentException('non-nullable originOrderAmount cannot be null');
        }
        $this->container['originOrderAmount'] = $originOrderAmount;

        return $this;
    }

    public function getExchangeRate()
    {
        return $this->container['exchangeRate'];
    }

    public function setExchangeRate($exchangeRate)
    {
        if (is_null($exchangeRate)) {
            throw new \InvalidArgumentException('non-nullable exchangeRate cannot be null');
        }
        $this->container['exchangeRate'] = $exchangeRate;

        return $this;
    }

    public function getTotalAmount()
    {
        return $this->container['totalAmount'];
    }

    public function setTotalAmount($totalAmount)
    {
        if (is_null($totalAmount)) {
            throw new \InvalidArgumentException('non-nullable totalAmount cannot be null');
        }
        $this->container['totalAmount'] = $totalAmount;

        return $this;
    }

    public function getPaymentPromoInfo()
    {
        return $this->container['paymentPromoInfo'];
    }

    public function setPaymentPromoInfo($paymentPromoInfo)
    {
        if (is_null($paymentPromoInfo)) {
            throw new \InvalidArgumentException('non-nullable paymentPromoInfo cannot be null');
        }
        $this->container['paymentPromoInfo'] = $paymentPromoInfo;

        return $this;
    }

    public function getRefundPromoInfo()
    {
        return $this->container['refundPromoInfo'];
    }

    public function setRefundPromoInfo($refundPromoInfo)
    {
        if (is_null($refundPromoInfo)) {
            throw new \InvalidArgumentException('non-nullable refundPromoInfo cannot be null');
        }
        $this->container['refundPromoInfo'] = $refundPromoInfo;

        return $this;
    }


}


