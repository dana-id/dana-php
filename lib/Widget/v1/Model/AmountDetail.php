<?php

namespace Dana\Widget\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\Widget\v1\Enum;

class AmountDetail extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'AmountDetail';

    protected static $openAPITypes = [
        'orderAmount' => '\Dana\Widget\v1\Model\Money',
        'payAmount' => '\Dana\Widget\v1\Model\Money',
        'voidAmount' => '\Dana\Widget\v1\Model\Money',
        'confirmAmount' => '\Dana\Widget\v1\Model\Money',
        'refundAmount' => '\Dana\Widget\v1\Model\Money',
        'chargebackAmount' => '\Dana\Widget\v1\Model\Money',
        'chargeAmount' => '\Dana\Widget\v1\Model\Money'
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

        if ($this->container['orderAmount'] === null) {
            $invalidProperties[] = "'orderAmount' can't be null";
        }
        return $invalidProperties;
    }



    public function getOrderAmount()
    {
        return $this->container['orderAmount'];
    }

    public function setOrderAmount($orderAmount)
    {
        if (is_null($orderAmount)) {
            throw new \InvalidArgumentException('non-nullable orderAmount cannot be null');
        }
        $this->container['orderAmount'] = $orderAmount;

        return $this;
    }

    public function getPayAmount()
    {
        return $this->container['payAmount'];
    }

    public function setPayAmount($payAmount)
    {
        if (is_null($payAmount)) {
            throw new \InvalidArgumentException('non-nullable payAmount cannot be null');
        }
        $this->container['payAmount'] = $payAmount;

        return $this;
    }

    public function getVoidAmount()
    {
        return $this->container['voidAmount'];
    }

    public function setVoidAmount($voidAmount)
    {
        if (is_null($voidAmount)) {
            throw new \InvalidArgumentException('non-nullable voidAmount cannot be null');
        }
        $this->container['voidAmount'] = $voidAmount;

        return $this;
    }

    public function getConfirmAmount()
    {
        return $this->container['confirmAmount'];
    }

    public function setConfirmAmount($confirmAmount)
    {
        if (is_null($confirmAmount)) {
            throw new \InvalidArgumentException('non-nullable confirmAmount cannot be null');
        }
        $this->container['confirmAmount'] = $confirmAmount;

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

    public function getChargebackAmount()
    {
        return $this->container['chargebackAmount'];
    }

    public function setChargebackAmount($chargebackAmount)
    {
        if (is_null($chargebackAmount)) {
            throw new \InvalidArgumentException('non-nullable chargebackAmount cannot be null');
        }
        $this->container['chargebackAmount'] = $chargebackAmount;

        return $this;
    }

    public function getChargeAmount()
    {
        return $this->container['chargeAmount'];
    }

    public function setChargeAmount($chargeAmount)
    {
        if (is_null($chargeAmount)) {
            throw new \InvalidArgumentException('non-nullable chargeAmount cannot be null');
        }
        $this->container['chargeAmount'] = $chargeAmount;

        return $this;
    }


}


