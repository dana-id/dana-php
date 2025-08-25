<?php

namespace Dana\Widget\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\Widget\v1\Enum;

class RefundPromoInfo extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'RefundPromoInfo';

    protected static $openAPITypes = [
        'promoId' => 'string',
        'promoName' => 'string',
        'promoType' => 'string',
        'refundAmount' => '\Dana\Widget\v1\Model\Money'
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

    public const PROMO_TYPE_CASH_BACK = 'CASH_BACK';
    public const PROMO_TYPE_DISCOUNT = 'DISCOUNT';
    public const PROMO_TYPE_VOUCHER = 'VOUCHER';
    public const PROMO_TYPE_POINT = 'POINT';

    public function getPromoTypeAllowableValues()
    {
        return [
            self::PROMO_TYPE_CASH_BACK,
            self::PROMO_TYPE_DISCOUNT,
            self::PROMO_TYPE_VOUCHER,
            self::PROMO_TYPE_POINT,
        ];
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

        if ($this->container['promoId'] === null) {
            $invalidProperties[] = "'promoId' can't be null";
        }
        if ((mb_strlen($this->container['promoId']) > 128)) {
            $invalidProperties[] = "invalid value for 'promoId', the character length must be smaller than or equal to 128.";
        }

        if ($this->container['promoName'] === null) {
            $invalidProperties[] = "'promoName' can't be null";
        }
        if ((mb_strlen($this->container['promoName']) > 128)) {
            $invalidProperties[] = "invalid value for 'promoName', the character length must be smaller than or equal to 128.";
        }

        if ($this->container['promoType'] === null) {
            $invalidProperties[] = "'promoType' can't be null";
        }
        $allowedValues = $this->getPromoTypeAllowableValues();
        if (!is_null($this->container['promoType']) && !in_array($this->container['promoType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'promoType', must be one of '%s'",
                $this->container['promoType'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['refundAmount'] === null) {
            $invalidProperties[] = "'refundAmount' can't be null";
        }
        return $invalidProperties;
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
        if ((mb_strlen($promoId) > 128)) {
            throw new \InvalidArgumentException('invalid length for $promoId when calling RefundPromoInfo., must be smaller than or equal to 128.');
        }

        $this->container['promoId'] = $promoId;

        return $this;
    }

    public function getPromoName()
    {
        return $this->container['promoName'];
    }

    public function setPromoName($promoName)
    {
        if (is_null($promoName)) {
            throw new \InvalidArgumentException('non-nullable promoName cannot be null');
        }
        if ((mb_strlen($promoName) > 128)) {
            throw new \InvalidArgumentException('invalid length for $promoName when calling RefundPromoInfo., must be smaller than or equal to 128.');
        }

        $this->container['promoName'] = $promoName;

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
        $allowedValues = $this->getPromoTypeAllowableValues();
        if (!in_array($promoType, $allowedValues, true) && !empty($promoType)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'promoType', must be one of '%s'",
                    $promoType,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['promoType'] = $promoType;

        return $this;
    }

    public function getRefundAmount()
    {
        return $this->container['refundAmount'];
    }

    public function setRefundAmount($refundAmount)
    {
        if (is_null($refundAmount)) {
            throw new \InvalidArgumentException('non-nullable refundAmount cannot be null');
        }
        $this->container['refundAmount'] = $refundAmount;

        return $this;
    }


}


