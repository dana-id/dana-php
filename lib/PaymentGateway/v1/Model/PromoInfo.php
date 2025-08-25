<?php

namespace Dana\PaymentGateway\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\PaymentGateway\v1\Enum;

class PromoInfo extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'PromoInfo';

    protected static $openAPITypes = [
        'promoAmount' => '\Dana\PaymentGateway\v1\Model\Money',
        'promoId' => 'string',
        'promoType' => 'string'
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
            
            'promoType' => 'DIRECT_DISCOUNT',
            
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

        if ($this->container['promoAmount'] === null) {
            $invalidProperties[] = "'promoAmount' can't be null";
        }
        if ($this->container['promoId'] === null) {
            $invalidProperties[] = "'promoId' can't be null";
        }
        if ((mb_strlen($this->container['promoId']) > 64)) {
            $invalidProperties[] = "invalid value for 'promoId', the character length must be smaller than or equal to 64.";
        }

        if ($this->container['promoType'] === null) {
            $invalidProperties[] = "'promoType' can't be null";
        }
        if ((mb_strlen($this->container['promoType']) > 32)) {
            $invalidProperties[] = "invalid value for 'promoType', the character length must be smaller than or equal to 32.";
        }

        return $invalidProperties;
    }



    public function getPromoAmount()
    {
        return $this->container['promoAmount'];
    }

    public function setPromoAmount($promoAmount)
    {
        if (is_null($promoAmount)) {
            throw new \InvalidArgumentException('non-nullable promoAmount cannot be null');
        }
        $this->container['promoAmount'] = $promoAmount;

        return $this;
    }

    public function getPromoId()
    {
        return $this->container['promoId'];
    }

    public function setPromoId($promoId)
    {
        if (is_null($promoId)) {
            throw new \InvalidArgumentException('non-nullable promoId cannot be null');
        }
        if ((mb_strlen($promoId) > 64)) {
            throw new \InvalidArgumentException('invalid length for $promoId when calling PromoInfo., must be smaller than or equal to 64.');
        }

        $this->container['promoId'] = $promoId;

        return $this;
    }

    public function getPromoType()
    {
        return $this->container['promoType'];
    }

    public function setPromoType($promoType)
    {
        if (is_null($promoType)) {
            throw new \InvalidArgumentException('non-nullable promoType cannot be null');
        }
        if ((mb_strlen($promoType) > 32)) {
            throw new \InvalidArgumentException('invalid length for $promoType when calling PromoInfo., must be smaller than or equal to 32.');
        }

        $this->container['promoType'] = $promoType;

        return $this;
    }


}


