<?php

namespace Dana\MerchantManagement\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\MerchantManagement\v1\Enum;

class CreateShopResponseResponseHead extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'CreateShopResponseResponseHead';

    protected static $openAPITypes = [
        'version' => 'string',
        'function' => 'string',
        'clientId' => 'string',
        'respTime' => 'string',
        'reqMsgId' => 'string'
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

    public const MODEL_FUNCTION_DANA_MERCHANT_SHOP_CREATE_SHOP = 'dana.merchant.shop.createShop';

    public function getFunctionAllowableValues()
    {
        return [
            self::MODEL_FUNCTION_DANA_MERCHANT_SHOP_CREATE_SHOP,
        ];
    }




    public function __construct(?array $data = null)
    {
        $localData = [];
        $defaultValues = [
            
            'version' => '2.0',
            
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

        if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 8)) {
            $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 8.";
        }

        $allowedValues = $this->getFunctionAllowableValues();
        if (!is_null($this->container['function']) && !in_array($this->container['function'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'function', must be one of '%s'",
                $this->container['function'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['function']) && (mb_strlen($this->container['function']) > 128)) {
            $invalidProperties[] = "invalid value for 'function', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['clientId']) && (mb_strlen($this->container['clientId']) > 32)) {
            $invalidProperties[] = "invalid value for 'clientId', the character length must be smaller than or equal to 32.";
        }

        if (!is_null($this->container['reqMsgId']) && (mb_strlen($this->container['reqMsgId']) > 64)) {
            $invalidProperties[] = "invalid value for 'reqMsgId', the character length must be smaller than or equal to 64.";
        }

        return $invalidProperties;
    }



    public function getVersion()
    {
        return $this->container['version'];
    }

    public function setVersion($version)
    {
        if (is_null($version)) {
            throw new \InvalidArgumentException('non-nullable version cannot be null');
        }
        if ((mb_strlen($version) > 8)) {
            throw new \InvalidArgumentException('invalid length for $version when calling CreateShopResponseResponseHead., must be smaller than or equal to 8.');
        }

        $this->container['version'] = $version;

        return $this;
    }

    public function getFunction()
    {
        return $this->container['function'];
    }

    public function setFunction($function)
    {
        if (is_null($function)) {
            throw new \InvalidArgumentException('non-nullable function cannot be null');
        }
        $allowedValues = $this->getFunctionAllowableValues();
        if (!in_array($function, $allowedValues, true) && !empty($function)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'function', must be one of '%s'",
                    $function,
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($function) > 128)) {
            throw new \InvalidArgumentException('invalid length for $function when calling CreateShopResponseResponseHead., must be smaller than or equal to 128.');
        }

        $this->container['function'] = $function;

        return $this;
    }

    public function getClientId()
    {
        return $this->container['clientId'];
    }

    public function setClientId($clientId)
    {
        if (is_null($clientId)) {
            throw new \InvalidArgumentException('non-nullable clientId cannot be null');
        }
        if ((mb_strlen($clientId) > 32)) {
            throw new \InvalidArgumentException('invalid length for $clientId when calling CreateShopResponseResponseHead., must be smaller than or equal to 32.');
        }

        $this->container['clientId'] = $clientId;

        return $this;
    }

    public function getRespTime()
    {
        return $this->container['respTime'];
    }

    public function setRespTime($respTime)
    {
        if (is_null($respTime)) {
            throw new \InvalidArgumentException('non-nullable respTime cannot be null');
        }
        $this->container['respTime'] = $respTime;

        return $this;
    }

    public function getReqMsgId()
    {
        return $this->container['reqMsgId'];
    }

    public function setReqMsgId($reqMsgId)
    {
        if (is_null($reqMsgId)) {
            throw new \InvalidArgumentException('non-nullable reqMsgId cannot be null');
        }
        if ((mb_strlen($reqMsgId) > 64)) {
            throw new \InvalidArgumentException('invalid length for $reqMsgId when calling CreateShopResponseResponseHead., must be smaller than or equal to 64.');
        }

        $this->container['reqMsgId'] = $reqMsgId;

        return $this;
    }


}


