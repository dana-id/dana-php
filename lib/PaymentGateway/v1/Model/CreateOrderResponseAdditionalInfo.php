<?php

namespace Dana\PaymentGateway\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\PaymentGateway\v1\Enum;

class CreateOrderResponseAdditionalInfo extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'CreateOrderResponseAdditionalInfo';

    protected static $openAPITypes = [
        'paymentCode' => 'string'
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

        if (!is_null($this->container['paymentCode']) && (mb_strlen($this->container['paymentCode']) > 64)) {
            $invalidProperties[] = "invalid value for 'paymentCode', the character length must be smaller than or equal to 64.";
        }

        return $invalidProperties;
    }



    public function getPaymentCode()
    {
        return $this->container['paymentCode'];
    }

    public function setPaymentCode($paymentCode)
    {
        if (is_null($paymentCode)) {
            throw new \InvalidArgumentException('non-nullable paymentCode cannot be null');
        }
        if ((mb_strlen($paymentCode) > 64)) {
            throw new \InvalidArgumentException('invalid length for $paymentCode when calling CreateOrderResponseAdditionalInfo., must be smaller than or equal to 64.');
        }

        $this->container['paymentCode'] = $paymentCode;

        return $this;
    }


}


