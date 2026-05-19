<?php

namespace Dana\MerchantManagement\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\MerchantManagement\v1\Enum;

class MerchantAccountInfo extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'MerchantAccountInfo';

    protected static $openAPITypes = [
        'accountNo' => 'string',
        'status' => 'string',
        'debitFreezeStatus' => 'string',
        'creditFreezeStatus' => 'string',
        'totalAmount' => 'string',
        'availableAmount' => 'string',
        'currency' => 'string',
        'accountType' => 'string'
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

    protected array $openAPINullablesSetToNull = [];

    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    public const STATUS_ENABLE = 'ENABLE';
    public const STATUS_FROZEN = 'FROZEN';
    public const STATUS_CLOSE = 'CLOSE';
    public const DEBIT_FREEZE_STATUS_ENABLE = 'ENABLE';
    public const DEBIT_FREEZE_STATUS_FROZEN = 'FROZEN';
    public const DEBIT_FREEZE_STATUS_CLOSE = 'CLOSE';
    public const CREDIT_FREEZE_STATUS_ENABLE = 'ENABLE';
    public const CREDIT_FREEZE_STATUS_FROZEN = 'FROZEN';
    public const CREDIT_FREEZE_STATUS_CLOSE = 'CLOSE';
    public const ACCOUNT_TYPE_MERCHANT_SETTLEMENT_ACCOUNT = 'MERCHANT_SETTLEMENT_ACCOUNT';
    public const ACCOUNT_TYPE_MERCHANT_PAYABLE_ACCOUNT = 'MERCHANT_PAYABLE_ACCOUNT';
    public const ACCOUNT_TYPE_MERCHANT_DEPOSIT_ACCOUNT = 'MERCHANT_DEPOSIT_ACCOUNT';

    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ENABLE,
            self::STATUS_FROZEN,
            self::STATUS_CLOSE,
        ];
    }

    public function getDebitFreezeStatusAllowableValues()
    {
        return [
            self::DEBIT_FREEZE_STATUS_ENABLE,
            self::DEBIT_FREEZE_STATUS_FROZEN,
            self::DEBIT_FREEZE_STATUS_CLOSE,
        ];
    }

    public function getCreditFreezeStatusAllowableValues()
    {
        return [
            self::CREDIT_FREEZE_STATUS_ENABLE,
            self::CREDIT_FREEZE_STATUS_FROZEN,
            self::CREDIT_FREEZE_STATUS_CLOSE,
        ];
    }

    public function getAccountTypeAllowableValues()
    {
        return [
            self::ACCOUNT_TYPE_MERCHANT_SETTLEMENT_ACCOUNT,
            self::ACCOUNT_TYPE_MERCHANT_PAYABLE_ACCOUNT,
            self::ACCOUNT_TYPE_MERCHANT_DEPOSIT_ACCOUNT,
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

        if (!is_null($this->container['accountNo']) && (mb_strlen($this->container['accountNo']) > 32)) {
            $invalidProperties[] = "invalid value for 'accountNo', the character length must be smaller than or equal to 32.";
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 6)) {
            $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 6.";
        }

        $allowedValues = $this->getDebitFreezeStatusAllowableValues();
        if (!is_null($this->container['debitFreezeStatus']) && !in_array($this->container['debitFreezeStatus'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'debitFreezeStatus', must be one of '%s'",
                $this->container['debitFreezeStatus'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['debitFreezeStatus']) && (mb_strlen($this->container['debitFreezeStatus']) > 6)) {
            $invalidProperties[] = "invalid value for 'debitFreezeStatus', the character length must be smaller than or equal to 6.";
        }

        $allowedValues = $this->getCreditFreezeStatusAllowableValues();
        if (!is_null($this->container['creditFreezeStatus']) && !in_array($this->container['creditFreezeStatus'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'creditFreezeStatus', must be one of '%s'",
                $this->container['creditFreezeStatus'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['creditFreezeStatus']) && (mb_strlen($this->container['creditFreezeStatus']) > 6)) {
            $invalidProperties[] = "invalid value for 'creditFreezeStatus', the character length must be smaller than or equal to 6.";
        }

        if (!is_null($this->container['currency']) && (mb_strlen($this->container['currency']) > 3)) {
            $invalidProperties[] = "invalid value for 'currency', the character length must be smaller than or equal to 3.";
        }

        $allowedValues = $this->getAccountTypeAllowableValues();
        if (!is_null($this->container['accountType']) && !in_array($this->container['accountType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'accountType', must be one of '%s'",
                $this->container['accountType'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['accountType']) && (mb_strlen($this->container['accountType']) > 64)) {
            $invalidProperties[] = "invalid value for 'accountType', the character length must be smaller than or equal to 64.";
        }

        return $invalidProperties;
    }



    public function getAccountNo()
    {
        return $this->container['accountNo'];
    }

    public function setAccountNo($accountNo)
    {
        if (is_null($accountNo)) {
            throw new \InvalidArgumentException('non-nullable accountNo cannot be null');
        }
        if ((mb_strlen($accountNo) > 32)) {
            throw new \InvalidArgumentException('invalid length for $accountNo when calling MerchantAccountInfo., must be smaller than or equal to 32.');
        }

        $this->container['accountNo'] = $accountNo;

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
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true) && !empty($status)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($status) > 6)) {
            throw new \InvalidArgumentException('invalid length for $status when calling MerchantAccountInfo., must be smaller than or equal to 6.');
        }

        $this->container['status'] = $status;

        return $this;
    }

    public function getDebitFreezeStatus()
    {
        return $this->container['debitFreezeStatus'];
    }

    public function setDebitFreezeStatus($debitFreezeStatus)
    {
        if (is_null($debitFreezeStatus)) {
            throw new \InvalidArgumentException('non-nullable debitFreezeStatus cannot be null');
        }
        $allowedValues = $this->getDebitFreezeStatusAllowableValues();
        if (!in_array($debitFreezeStatus, $allowedValues, true) && !empty($debitFreezeStatus)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'debitFreezeStatus', must be one of '%s'",
                    $debitFreezeStatus,
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($debitFreezeStatus) > 6)) {
            throw new \InvalidArgumentException('invalid length for $debitFreezeStatus when calling MerchantAccountInfo., must be smaller than or equal to 6.');
        }

        $this->container['debitFreezeStatus'] = $debitFreezeStatus;

        return $this;
    }

    public function getCreditFreezeStatus()
    {
        return $this->container['creditFreezeStatus'];
    }

    public function setCreditFreezeStatus($creditFreezeStatus)
    {
        if (is_null($creditFreezeStatus)) {
            throw new \InvalidArgumentException('non-nullable creditFreezeStatus cannot be null');
        }
        $allowedValues = $this->getCreditFreezeStatusAllowableValues();
        if (!in_array($creditFreezeStatus, $allowedValues, true) && !empty($creditFreezeStatus)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'creditFreezeStatus', must be one of '%s'",
                    $creditFreezeStatus,
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($creditFreezeStatus) > 6)) {
            throw new \InvalidArgumentException('invalid length for $creditFreezeStatus when calling MerchantAccountInfo., must be smaller than or equal to 6.');
        }

        $this->container['creditFreezeStatus'] = $creditFreezeStatus;

        return $this;
    }

    public function getTotalAmount()
    {
        return $this->container['totalAmount'];
    }

    public function setTotalAmount($totalAmount)
    {
        if (is_null($totalAmount)) {
            throw new \InvalidArgumentException('non-nullable totalAmount cannot be null');
        }
        $this->container['totalAmount'] = $totalAmount;

        return $this;
    }

    public function getAvailableAmount()
    {
        return $this->container['availableAmount'];
    }

    public function setAvailableAmount($availableAmount)
    {
        if (is_null($availableAmount)) {
            throw new \InvalidArgumentException('non-nullable availableAmount cannot be null');
        }
        $this->container['availableAmount'] = $availableAmount;

        return $this;
    }

    public function getCurrency()
    {
        return $this->container['currency'];
    }

    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
        }
        if ((mb_strlen($currency) > 3)) {
            throw new \InvalidArgumentException('invalid length for $currency when calling MerchantAccountInfo., must be smaller than or equal to 3.');
        }

        $this->container['currency'] = $currency;

        return $this;
    }

    public function getAccountType()
    {
        return $this->container['accountType'];
    }

    public function setAccountType($accountType)
    {
        if (is_null($accountType)) {
            throw new \InvalidArgumentException('non-nullable accountType cannot be null');
        }
        $allowedValues = $this->getAccountTypeAllowableValues();
        if (!in_array($accountType, $allowedValues, true) && !empty($accountType)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'accountType', must be one of '%s'",
                    $accountType,
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($accountType) > 64)) {
            throw new \InvalidArgumentException('invalid length for $accountType when calling MerchantAccountInfo., must be smaller than or equal to 64.');
        }

        $this->container['accountType'] = $accountType;

        return $this;
    }


}


