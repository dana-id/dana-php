<?php

namespace Dana\Widget\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\Widget\v1\Enum;

class AccountInfo extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'AccountInfo';

    protected static $openAPITypes = [
        'balanceType' => 'string',
        'amount' => '\Dana\Widget\v1\Model\Money',
        'floatAmount' => '\Dana\Widget\v1\Model\Money',
        'holdAmount' => '\Dana\Widget\v1\Model\Money',
        'availableBalance' => '\Dana\Widget\v1\Model\Money',
        'ledgerBalance' => '\Dana\Widget\v1\Model\Money',
        'currentMultilateralLimit' => '\Dana\Widget\v1\Model\Money',
        'registrationStatusCode' => 'string',
        'status' => 'string'
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

        if (!is_null($this->container['balanceType']) && (mb_strlen($this->container['balanceType']) > 70)) {
            $invalidProperties[] = "invalid value for 'balanceType', the character length must be smaller than or equal to 70.";
        }

        if (!is_null($this->container['registrationStatusCode']) && (mb_strlen($this->container['registrationStatusCode']) > 4)) {
            $invalidProperties[] = "invalid value for 'registrationStatusCode', the character length must be smaller than or equal to 4.";
        }

        if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 4)) {
            $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 4.";
        }

        return $invalidProperties;
    }



    public function getBalanceType()
    {
        return $this->container['balanceType'];
    }

    public function setBalanceType($balanceType)
    {
        if (is_null($balanceType)) {
            throw new \InvalidArgumentException('non-nullable balanceType cannot be null');
        }
        if ((mb_strlen($balanceType) > 70)) {
            throw new \InvalidArgumentException('invalid length for $balanceType when calling AccountInfo., must be smaller than or equal to 70.');
        }

        $this->container['balanceType'] = $balanceType;

        return $this;
    }

    public function getAmount()
    {
        return $this->container['amount'];
    }

    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }
        $this->container['amount'] = $amount;

        return $this;
    }

    public function getFloatAmount()
    {
        return $this->container['floatAmount'];
    }

    public function setFloatAmount($floatAmount)
    {
        if (is_null($floatAmount)) {
            throw new \InvalidArgumentException('non-nullable floatAmount cannot be null');
        }
        $this->container['floatAmount'] = $floatAmount;

        return $this;
    }

    public function getHoldAmount()
    {
        return $this->container['holdAmount'];
    }

    public function setHoldAmount($holdAmount)
    {
        if (is_null($holdAmount)) {
            throw new \InvalidArgumentException('non-nullable holdAmount cannot be null');
        }
        $this->container['holdAmount'] = $holdAmount;

        return $this;
    }

    public function getAvailableBalance()
    {
        return $this->container['availableBalance'];
    }

    public function setAvailableBalance($availableBalance)
    {
        if (is_null($availableBalance)) {
            throw new \InvalidArgumentException('non-nullable availableBalance cannot be null');
        }
        $this->container['availableBalance'] = $availableBalance;

        return $this;
    }

    public function getLedgerBalance()
    {
        return $this->container['ledgerBalance'];
    }

    public function setLedgerBalance($ledgerBalance)
    {
        if (is_null($ledgerBalance)) {
            throw new \InvalidArgumentException('non-nullable ledgerBalance cannot be null');
        }
        $this->container['ledgerBalance'] = $ledgerBalance;

        return $this;
    }

    public function getCurrentMultilateralLimit()
    {
        return $this->container['currentMultilateralLimit'];
    }

    public function setCurrentMultilateralLimit($currentMultilateralLimit)
    {
        if (is_null($currentMultilateralLimit)) {
            throw new \InvalidArgumentException('non-nullable currentMultilateralLimit cannot be null');
        }
        $this->container['currentMultilateralLimit'] = $currentMultilateralLimit;

        return $this;
    }

    public function getRegistrationStatusCode()
    {
        return $this->container['registrationStatusCode'];
    }

    public function setRegistrationStatusCode($registrationStatusCode)
    {
        if (is_null($registrationStatusCode)) {
            throw new \InvalidArgumentException('non-nullable registrationStatusCode cannot be null');
        }
        if ((mb_strlen($registrationStatusCode) > 4)) {
            throw new \InvalidArgumentException('invalid length for $registrationStatusCode when calling AccountInfo., must be smaller than or equal to 4.');
        }

        $this->container['registrationStatusCode'] = $registrationStatusCode;

        return $this;
    }

    public function getStatus()
    {
        return $this->container['status'];
    }

    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        if ((mb_strlen($status) > 4)) {
            throw new \InvalidArgumentException('invalid length for $status when calling AccountInfo., must be smaller than or equal to 4.');
        }

        $this->container['status'] = $status;

        return $this;
    }


}


