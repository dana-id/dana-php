<?php

namespace Dana\MerchantManagement\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\MerchantManagement\v1\Enum;

class QueryShopRequest extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'QueryShopRequest';

    protected static $openAPITypes = [
        'merchantId' => 'string',
        'shopId' => 'string',
        'shopIdType' => 'string'
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

    public const SHOP_ID_TYPE_INNER_ID = 'INNER_ID';
    public const SHOP_ID_TYPE_EXTERNAL_ID = 'EXTERNAL_ID';

    public function getShopIdTypeAllowableValues()
    {
        return [
            self::SHOP_ID_TYPE_INNER_ID,
            self::SHOP_ID_TYPE_EXTERNAL_ID,
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

        if (!is_null($this->container['merchantId']) && (mb_strlen($this->container['merchantId']) > 21)) {
            $invalidProperties[] = "invalid value for 'merchantId', the character length must be smaller than or equal to 21.";
        }

        if ($this->container['shopId'] === null) {
            $invalidProperties[] = "'shopId' can't be null";
        }
        if ($this->container['shopIdType'] === null) {
            $invalidProperties[] = "'shopIdType' can't be null";
        }
        $allowedValues = $this->getShopIdTypeAllowableValues();
        if (!is_null($this->container['shopIdType']) && !in_array($this->container['shopIdType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'shopIdType', must be one of '%s'",
                $this->container['shopIdType'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }



    public function getMerchantId()
    {
        return $this->container['merchantId'];
    }

    public function setMerchantId($merchantId)
    {
        if (is_null($merchantId)) {
            throw new \InvalidArgumentException('non-nullable merchantId cannot be null');
        }
        if ((mb_strlen($merchantId) > 21)) {
            throw new \InvalidArgumentException('invalid length for $merchantId when calling QueryShopRequest., must be smaller than or equal to 21.');
        }

        $this->container['merchantId'] = $merchantId;

        return $this;
    }

    public function getShopId()
    {
        return $this->container['shopId'];
    }

    public function setShopId($shopId)
    {
        if (is_null($shopId)) {
            throw new \InvalidArgumentException('non-nullable shopId cannot be null');
        }
        $this->container['shopId'] = $shopId;

        return $this;
    }

    public function getShopIdType()
    {
        return $this->container['shopIdType'];
    }

    public function setShopIdType($shopIdType)
    {
        if (is_null($shopIdType)) {
            throw new \InvalidArgumentException('non-nullable shopIdType cannot be null');
        }
        $allowedValues = $this->getShopIdTypeAllowableValues();
        if (!in_array($shopIdType, $allowedValues, true) && !empty($shopIdType)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'shopIdType', must be one of '%s'",
                    $shopIdType,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['shopIdType'] = $shopIdType;

        return $this;
    }


}


