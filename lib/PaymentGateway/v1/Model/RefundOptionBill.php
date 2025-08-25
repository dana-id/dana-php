<?php

namespace Dana\PaymentGateway\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\PaymentGateway\v1\Enum;

class RefundOptionBill extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'RefundOptionBill';

    protected static $openAPITypes = [
        'payMethod' => 'string',
        'transAmount' => '\Dana\PaymentGateway\v1\Model\Money'
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

    public const PAY_METHOD_BALANCE = 'BALANCE';
    public const PAY_METHOD_COUPON = 'COUPON';
    public const PAY_METHOD_NET_BANKING = 'NET_BANKING';
    public const PAY_METHOD_CREDIT_CARD = 'CREDIT_CARD';
    public const PAY_METHOD_DEBIT_CARD = 'DEBIT_CARD';
    public const PAY_METHOD_VIRTUAL_ACCOUNT = 'VIRTUAL_ACCOUNT';
    public const PAY_METHOD_OTC = 'OTC';
    public const PAY_METHOD_DIRECT_DEBIT_CREDIT_CARD = 'DIRECT_DEBIT_CREDIT_CARD';
    public const PAY_METHOD_DIRECT_DEBIT_DEBIT_CARD = 'DIRECT_DEBIT_DEBIT_CARD';
    public const PAY_METHOD_ONLINE_CREDIT = 'ONLINE_CREDIT';
    public const PAY_METHOD_LOAN_CREDIT = 'LOAN_CREDIT';

    public function getPayMethodAllowableValues()
    {
        return [
            self::PAY_METHOD_BALANCE,
            self::PAY_METHOD_COUPON,
            self::PAY_METHOD_NET_BANKING,
            self::PAY_METHOD_CREDIT_CARD,
            self::PAY_METHOD_DEBIT_CARD,
            self::PAY_METHOD_VIRTUAL_ACCOUNT,
            self::PAY_METHOD_OTC,
            self::PAY_METHOD_DIRECT_DEBIT_CREDIT_CARD,
            self::PAY_METHOD_DIRECT_DEBIT_DEBIT_CARD,
            self::PAY_METHOD_ONLINE_CREDIT,
            self::PAY_METHOD_LOAN_CREDIT,
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

        $allowedValues = $this->getPayMethodAllowableValues();
        if (!is_null($this->container['payMethod']) && !in_array($this->container['payMethod'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'payMethod', must be one of '%s'",
                $this->container['payMethod'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['payMethod']) && (mb_strlen($this->container['payMethod']) > 64)) {
            $invalidProperties[] = "invalid value for 'payMethod', the character length must be smaller than or equal to 64.";
        }

        return $invalidProperties;
    }



    public function getPayMethod()
    {
        return $this->container['payMethod'];
    }

    public function setPayMethod($payMethod)
    {
        if (is_null($payMethod)) {
            throw new \InvalidArgumentException('non-nullable payMethod cannot be null');
        }
        $allowedValues = $this->getPayMethodAllowableValues();
        if (!in_array($payMethod, $allowedValues, true) && !empty($payMethod)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'payMethod', must be one of '%s'",
                    $payMethod,
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($payMethod) > 64)) {
            throw new \InvalidArgumentException('invalid length for $payMethod when calling RefundOptionBill., must be smaller than or equal to 64.');
        }

        $this->container['payMethod'] = $payMethod;

        return $this;
    }

    public function getTransAmount()
    {
        return $this->container['transAmount'];
    }

    public function setTransAmount($transAmount)
    {
        if (is_null($transAmount)) {
            throw new \InvalidArgumentException('non-nullable transAmount cannot be null');
        }
        $this->container['transAmount'] = $transAmount;

        return $this;
    }


}


