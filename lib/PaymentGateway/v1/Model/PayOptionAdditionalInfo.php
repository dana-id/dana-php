<?php

namespace Dana\PaymentGateway\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\PaymentGateway\v1\Enum;

class PayOptionAdditionalInfo extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'PayOptionAdditionalInfo';

    protected static $openAPITypes = [
        'phoneNumber' => 'string',
        'paymentCode' => 'string',
        'promoInfos' => '\Dana\PaymentGateway\v1\Model\PromoInfo[]'
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

        if (!is_null($this->container['phoneNumber']) && (mb_strlen($this->container['phoneNumber']) > 15)) {
            $invalidProperties[] = "invalid value for 'phoneNumber', the character length must be smaller than or equal to 15.";
        }

        if (!is_null($this->container['paymentCode']) && (mb_strlen($this->container['paymentCode']) > 64)) {
            $invalidProperties[] = "invalid value for 'paymentCode', the character length must be smaller than or equal to 64.";
        }

        return $invalidProperties;
    }



    public function getPhoneNumber()
    {
        return $this->container['phoneNumber'];
    }

    public function setPhoneNumber($phoneNumber)
    {
        if (is_null($phoneNumber)) {
            throw new \InvalidArgumentException('non-nullable phoneNumber cannot be null');
        }
        if ((mb_strlen($phoneNumber) > 15)) {
            throw new \InvalidArgumentException('invalid length for $phoneNumber when calling PayOptionAdditionalInfo., must be smaller than or equal to 15.');
        }

        $this->container['phoneNumber'] = $phoneNumber;

        return $this;
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
            throw new \InvalidArgumentException('invalid length for $paymentCode when calling PayOptionAdditionalInfo., must be smaller than or equal to 64.');
        }

        $this->container['paymentCode'] = $paymentCode;

        return $this;
    }

    public function getPromoInfos()
    {
        return $this->container['promoInfos'];
    }

    public function setPromoInfos($promoInfos)
    {
        if (is_null($promoInfos)) {
            throw new \InvalidArgumentException('non-nullable promoInfos cannot be null');
        }
        $this->container['promoInfos'] = $promoInfos;

        return $this;
    }


}


