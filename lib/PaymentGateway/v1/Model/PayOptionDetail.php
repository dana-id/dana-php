<?php

namespace Dana\PaymentGateway\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\PaymentGateway\v1\Enum;

class PayOptionDetail extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'PayOptionDetail';

    protected static $openAPITypes = [
        'payMethod' => 'string',
        'payOption' => 'string',
        'transAmount' => '\Dana\PaymentGateway\v1\Model\Money',
        'feeAmount' => '\Dana\PaymentGateway\v1\Model\Money',
        'cardToken' => 'string',
        'merchantToken' => 'string',
        'additionalInfo' => '\Dana\PaymentGateway\v1\Model\PayOptionAdditionalInfo'
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
    public const PAY_METHOD_NETWORK_PAY = 'NETWORK_PAY';
    public const PAY_OPTION_NETWORK_PAY_PG_SPAY = 'NETWORK_PAY_PG_SPAY';
    public const PAY_OPTION_NETWORK_PAY_PG_OVO = 'NETWORK_PAY_PG_OVO';
    public const PAY_OPTION_NETWORK_PAY_PG_GOPAY = 'NETWORK_PAY_PG_GOPAY';
    public const PAY_OPTION_NETWORK_PAY_PG_LINKAJA = 'NETWORK_PAY_PG_LINKAJA';
    public const PAY_OPTION_NETWORK_PAY_PG_CARD = 'NETWORK_PAY_PG_CARD';
    public const PAY_OPTION_NETWORK_PAY_PG_QRIS = 'NETWORK_PAY_PG_QRIS';
    public const PAY_OPTION_VIRTUAL_ACCOUNT_BCA = 'VIRTUAL_ACCOUNT_BCA';
    public const PAY_OPTION_VIRTUAL_ACCOUNT_BNI = 'VIRTUAL_ACCOUNT_BNI';
    public const PAY_OPTION_VIRTUAL_ACCOUNT_MANDIRI = 'VIRTUAL_ACCOUNT_MANDIRI';
    public const PAY_OPTION_VIRTUAL_ACCOUNT_BRI = 'VIRTUAL_ACCOUNT_BRI';
    public const PAY_OPTION_VIRTUAL_ACCOUNT_BTPN = 'VIRTUAL_ACCOUNT_BTPN';
    public const PAY_OPTION_VIRTUAL_ACCOUNT_CIMB = 'VIRTUAL_ACCOUNT_CIMB';
    public const PAY_OPTION_VIRTUAL_ACCOUNT_PERMATA = 'VIRTUAL_ACCOUNT_PERMATA';

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
            self::PAY_METHOD_NETWORK_PAY,
        ];
    }

    public function getPayOptionAllowableValues()
    {
        return [
            self::PAY_OPTION_NETWORK_PAY_PG_SPAY,
            self::PAY_OPTION_NETWORK_PAY_PG_OVO,
            self::PAY_OPTION_NETWORK_PAY_PG_GOPAY,
            self::PAY_OPTION_NETWORK_PAY_PG_LINKAJA,
            self::PAY_OPTION_NETWORK_PAY_PG_CARD,
            self::PAY_OPTION_NETWORK_PAY_PG_QRIS,
            self::PAY_OPTION_VIRTUAL_ACCOUNT_BCA,
            self::PAY_OPTION_VIRTUAL_ACCOUNT_BNI,
            self::PAY_OPTION_VIRTUAL_ACCOUNT_MANDIRI,
            self::PAY_OPTION_VIRTUAL_ACCOUNT_BRI,
            self::PAY_OPTION_VIRTUAL_ACCOUNT_BTPN,
            self::PAY_OPTION_VIRTUAL_ACCOUNT_CIMB,
            self::PAY_OPTION_VIRTUAL_ACCOUNT_PERMATA,
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

        if ($this->container['payMethod'] === null) {
            $invalidProperties[] = "'payMethod' can't be null";
        }
        $allowedValues = $this->getPayMethodAllowableValues();
        if (!is_null($this->container['payMethod']) && !in_array($this->container['payMethod'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'payMethod', must be one of '%s'",
                $this->container['payMethod'],
                implode("', '", $allowedValues)
            );
        }

        if ((mb_strlen($this->container['payMethod']) > 64)) {
            $invalidProperties[] = "invalid value for 'payMethod', the character length must be smaller than or equal to 64.";
        }

        if ($this->container['payOption'] === null) {
            $invalidProperties[] = "'payOption' can't be null";
        }
        $allowedValues = $this->getPayOptionAllowableValues();
        if (!is_null($this->container['payOption']) && !in_array($this->container['payOption'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'payOption', must be one of '%s'",
                $this->container['payOption'],
                implode("', '", $allowedValues)
            );
        }

        if ((mb_strlen($this->container['payOption']) > 64)) {
            $invalidProperties[] = "invalid value for 'payOption', the character length must be smaller than or equal to 64.";
        }

        if ($this->container['transAmount'] === null) {
            $invalidProperties[] = "'transAmount' can't be null";
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
        $allowedValues = $this->getPayOptionAllowableValues();
        if (!in_array($payOption, $allowedValues, true) && !empty($payOption)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'payOption', must be one of '%s'",
                    $payOption,
                    implode("', '", $allowedValues)
                )
            );
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


