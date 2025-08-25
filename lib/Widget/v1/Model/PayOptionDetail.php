<?php

namespace Dana\Widget\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\Widget\v1\Enum;

class PayOptionDetail extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'PayOptionDetail';

    protected static $openAPITypes = [
        'payMethod' => 'string',
        'payOption' => 'string',
        'transAmount' => '\Dana\Widget\v1\Model\Money',
        'feeAmount' => '\Dana\Widget\v1\Model\Money',
        'cardToken' => 'string',
        'merchantToken' => 'string',
        'additionalInfo' => '\Dana\Widget\v1\Model\PayOptionDetailAdditionalInfo'
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

        if ($this->container['payMethod'] === null) {
            $invalidProperties[] = "'payMethod' can't be null";
        }
        if ((mb_strlen($this->container['payMethod']) > 64)) {
            $invalidProperties[] = "invalid value for 'payMethod', the character length must be smaller than or equal to 64.";
        }

        if ($this->container['payOption'] === null) {
            $invalidProperties[] = "'payOption' can't be null";
        }
        if ((mb_strlen($this->container['payOption']) > 64)) {
            $invalidProperties[] = "invalid value for 'payOption', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['cardToken']) && (mb_strlen($this->container['cardToken']) > 64)) {
            $invalidProperties[] = "invalid value for 'cardToken', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['merchantToken']) && (mb_strlen($this->container['merchantToken']) > 64)) {
            $invalidProperties[] = "invalid value for 'merchantToken', the character length must be smaller than or equal to 64.";
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
        if ((mb_strlen($payMethod) > 64)) {
            throw new \InvalidArgumentException('invalid length for $payMethod when calling PayOptionDetail., must be smaller than or equal to 64.');
        }

        $this->container['payMethod'] = $payMethod;

        return $this;
    }

    public function getPayOption()
    {
        return $this->container['payOption'];
    }

    public function setPayOption($payOption)
    {
        if (is_null($payOption)) {
            throw new \InvalidArgumentException('non-nullable payOption cannot be null');
        }
        if ((mb_strlen($payOption) > 64)) {
            throw new \InvalidArgumentException('invalid length for $payOption when calling PayOptionDetail., must be smaller than or equal to 64.');
        }

        $this->container['payOption'] = $payOption;

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

    public function getFeeAmount()
    {
        return $this->container['feeAmount'];
    }

    public function setFeeAmount($feeAmount)
    {
        if (is_null($feeAmount)) {
            throw new \InvalidArgumentException('non-nullable feeAmount cannot be null');
        }
        $this->container['feeAmount'] = $feeAmount;

        return $this;
    }

    public function getCardToken()
    {
        return $this->container['cardToken'];
    }

    public function setCardToken($cardToken)
    {
        if (is_null($cardToken)) {
            throw new \InvalidArgumentException('non-nullable cardToken cannot be null');
        }
        if ((mb_strlen($cardToken) > 64)) {
            throw new \InvalidArgumentException('invalid length for $cardToken when calling PayOptionDetail., must be smaller than or equal to 64.');
        }

        $this->container['cardToken'] = $cardToken;

        return $this;
    }

    public function getMerchantToken()
    {
        return $this->container['merchantToken'];
    }

    public function setMerchantToken($merchantToken)
    {
        if (is_null($merchantToken)) {
            throw new \InvalidArgumentException('non-nullable merchantToken cannot be null');
        }
        if ((mb_strlen($merchantToken) > 64)) {
            throw new \InvalidArgumentException('invalid length for $merchantToken when calling PayOptionDetail., must be smaller than or equal to 64.');
        }

        $this->container['merchantToken'] = $merchantToken;

        return $this;
    }

    public function getAdditionalInfo()
    {
        return $this->container['additionalInfo'];
    }

    public function setAdditionalInfo($additionalInfo)
    {
        if (is_null($additionalInfo)) {
            throw new \InvalidArgumentException('non-nullable additionalInfo cannot be null');
        }
        $this->container['additionalInfo'] = $additionalInfo;

        return $this;
    }


}


