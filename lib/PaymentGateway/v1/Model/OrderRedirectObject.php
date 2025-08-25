<?php

namespace Dana\PaymentGateway\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\PaymentGateway\v1\Enum;

class OrderRedirectObject extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'OrderRedirectObject';

    protected static $openAPITypes = [
        'orderTitle' => 'string',
        'merchantTransType' => 'string',
        'buyer' => '\Dana\PaymentGateway\v1\Model\Buyer',
        'goods' => '\Dana\PaymentGateway\v1\Model\Goods[]',
        'shippingInfo' => '\Dana\PaymentGateway\v1\Model\ShippingInfo[]',
        'extendInfo' => 'string',
        'createdTime' => 'string',
        'orderMemo' => 'string',
        'scenario' => 'string'
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

    public const SCENARIO_REDIRECT = 'REDIRECT';

    public function getScenarioAllowableValues()
    {
        return [
            self::SCENARIO_REDIRECT,
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

        if ($this->container['orderTitle'] === null) {
            $invalidProperties[] = "'orderTitle' can't be null";
        }
        if ((mb_strlen($this->container['orderTitle']) > 64)) {
            $invalidProperties[] = "invalid value for 'orderTitle', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['merchantTransType']) && (mb_strlen($this->container['merchantTransType']) > 64)) {
            $invalidProperties[] = "invalid value for 'merchantTransType', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['extendInfo']) && (mb_strlen($this->container['extendInfo']) > 4096)) {
            $invalidProperties[] = "invalid value for 'extendInfo', the character length must be smaller than or equal to 4096.";
        }

        $allowedValues = $this->getScenarioAllowableValues();
        if (!is_null($this->container['scenario']) && !in_array($this->container['scenario'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'scenario', must be one of '%s'",
                $this->container['scenario'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['scenario']) && (mb_strlen($this->container['scenario']) > 64)) {
            $invalidProperties[] = "invalid value for 'scenario', the character length must be smaller than or equal to 64.";
        }

        return $invalidProperties;
    }



    public function getOrderTitle()
    {
        return $this->container['orderTitle'];
    }

    public function setOrderTitle($orderTitle)
    {
        if (is_null($orderTitle)) {
            throw new \InvalidArgumentException('non-nullable orderTitle cannot be null');
        }
        if ((mb_strlen($orderTitle) > 64)) {
            throw new \InvalidArgumentException('invalid length for $orderTitle when calling OrderRedirectObject., must be smaller than or equal to 64.');
        }

        $this->container['orderTitle'] = $orderTitle;

        return $this;
    }

    public function getMerchantTransType()
    {
        return $this->container['merchantTransType'];
    }

    public function setMerchantTransType($merchantTransType)
    {
        if (is_null($merchantTransType)) {
            throw new \InvalidArgumentException('non-nullable merchantTransType cannot be null');
        }
        if ((mb_strlen($merchantTransType) > 64)) {
            throw new \InvalidArgumentException('invalid length for $merchantTransType when calling OrderRedirectObject., must be smaller than or equal to 64.');
        }

        $this->container['merchantTransType'] = $merchantTransType;

        return $this;
    }

    public function getBuyer()
    {
        return $this->container['buyer'];
    }

    public function setBuyer($buyer)
    {
        if (is_null($buyer)) {
            throw new \InvalidArgumentException('non-nullable buyer cannot be null');
        }
        $this->container['buyer'] = $buyer;

        return $this;
    }

    public function getGoods()
    {
        return $this->container['goods'];
    }

    public function setGoods($goods)
    {
        if (is_null($goods)) {
            throw new \InvalidArgumentException('non-nullable goods cannot be null');
        }
        $this->container['goods'] = $goods;

        return $this;
    }

    public function getShippingInfo()
    {
        return $this->container['shippingInfo'];
    }

    public function setShippingInfo($shippingInfo)
    {
        if (is_null($shippingInfo)) {
            throw new \InvalidArgumentException('non-nullable shippingInfo cannot be null');
        }
        $this->container['shippingInfo'] = $shippingInfo;

        return $this;
    }

    public function getExtendInfo()
    {
        return $this->container['extendInfo'];
    }

    public function setExtendInfo($extendInfo)
    {
        if (is_null($extendInfo)) {
            throw new \InvalidArgumentException('non-nullable extendInfo cannot be null');
        }
        if ((mb_strlen($extendInfo) > 4096)) {
            throw new \InvalidArgumentException('invalid length for $extendInfo when calling OrderRedirectObject., must be smaller than or equal to 4096.');
        }

        $this->container['extendInfo'] = $extendInfo;

        return $this;
    }

    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    public function setCreatedTime($createdTime)
    {
        if (is_null($createdTime)) {
            throw new \InvalidArgumentException('non-nullable createdTime cannot be null');
        }
        $this->container['createdTime'] = $createdTime;

        return $this;
    }

    public function getOrderMemo()
    {
        return $this->container['orderMemo'];
    }

    public function setOrderMemo($orderMemo)
    {
        if (is_null($orderMemo)) {
            throw new \InvalidArgumentException('non-nullable orderMemo cannot be null');
        }
        $this->container['orderMemo'] = $orderMemo;

        return $this;
    }

    public function getScenario()
    {
        return $this->container['scenario'];
    }

    public function setScenario($scenario)
    {
        if (is_null($scenario)) {
            throw new \InvalidArgumentException('non-nullable scenario cannot be null');
        }
        $allowedValues = $this->getScenarioAllowableValues();
        if (!in_array($scenario, $allowedValues, true) && !empty($scenario)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'scenario', must be one of '%s'",
                    $scenario,
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($scenario) > 64)) {
            throw new \InvalidArgumentException('invalid length for $scenario when calling OrderRedirectObject., must be smaller than or equal to 64.');
        }

        $this->container['scenario'] = $scenario;

        return $this;
    }


}


