<?php

namespace Dana\Widget\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\Widget\v1\Enum;

class PayOptionInfo extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'PayOptionInfo';

    protected static $openAPITypes = [
        'payMethod' => 'string',
        'payOption' => 'string',
        'payAmount' => '\Dana\Widget\v1\Model\Money',
        'transAmount' => '\Dana\Widget\v1\Model\Money',
        'chargeAmount' => '\Dana\Widget\v1\Model\Money',
        'payOptionBillExtendInfo' => 'string',
        'extendInfo' => 'string',
        'paymentCode' => 'string'
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
    public const PAY_METHOD_CARD = 'CARD';
    public const PAY_OPTION_NETWORK_PAY_PG_SPAY = 'NETWORK_PAY_PG_SPAY';
    public const PAY_OPTION_NETWORK_PAY_PG_OVO = 'NETWORK_PAY_PG_OVO';
    public const PAY_OPTION_NETWORK_PAY_PG_GOPAY = 'NETWORK_PAY_PG_GOPAY';
    public const PAY_OPTION_NETWORK_PAY_PG_LINKAJA = 'NETWORK_PAY_PG_LINKAJA';
    public const PAY_OPTION_NETWORK_PAY_PG_CARD = 'NETWORK_PAY_PG_CARD';
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
            self::PAY_METHOD_CARD,
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

        $allowedValues = $this->getPayOptionAllowableValues();
        if (!is_null($this->container['payOption']) && !in_array($this->container['payOption'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'payOption', must be one of '%s'",
                $this->container['payOption'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['payOption']) && (mb_strlen($this->container['payOption']) > 64)) {
            $invalidProperties[] = "invalid value for 'payOption', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['payOptionBillExtendInfo']) && (mb_strlen($this->container['payOptionBillExtendInfo']) > 4096)) {
            $invalidProperties[] = "invalid value for 'payOptionBillExtendInfo', the character length must be smaller than or equal to 4096.";
        }

        if (!is_null($this->container['extendInfo']) && (mb_strlen($this->container['extendInfo']) > 4096)) {
            $invalidProperties[] = "invalid value for 'extendInfo', the character length must be smaller than or equal to 4096.";
        }

        if (!is_null($this->container['paymentCode']) && (mb_strlen($this->container['paymentCode']) > 64)) {
            $invalidProperties[] = "invalid value for 'paymentCode', the character length must be smaller than or equal to 64.";
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
            throw new \InvalidArgumentException('invalid length for $payMethod when calling PayOptionInfo., must be smaller than or equal to 64.');
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
            throw new \InvalidArgumentException('invalid length for $payOption when calling PayOptionInfo., must be smaller than or equal to 64.');
        }

        $this->container['payOption'] = $payOption;

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

    public function getPayOptionBillExtendInfo()
    {
        return $this->container['payOptionBillExtendInfo'];
    }

    public function setPayOptionBillExtendInfo($payOptionBillExtendInfo)
    {
        if (is_null($payOptionBillExtendInfo)) {
            throw new \InvalidArgumentException('non-nullable payOptionBillExtendInfo cannot be null');
        }
        if ((mb_strlen($payOptionBillExtendInfo) > 4096)) {
            throw new \InvalidArgumentException('invalid length for $payOptionBillExtendInfo when calling PayOptionInfo., must be smaller than or equal to 4096.');
        }

        $this->container['payOptionBillExtendInfo'] = $payOptionBillExtendInfo;

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
            throw new \InvalidArgumentException('invalid length for $extendInfo when calling PayOptionInfo., must be smaller than or equal to 4096.');
        }

        $this->container['extendInfo'] = $extendInfo;

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
            throw new \InvalidArgumentException('invalid length for $paymentCode when calling PayOptionInfo., must be smaller than or equal to 64.');
        }

        $this->container['paymentCode'] = $paymentCode;

        return $this;
    }


}


