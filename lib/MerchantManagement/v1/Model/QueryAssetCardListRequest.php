<?php

namespace Dana\MerchantManagement\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\MerchantManagement\v1\Enum;

class QueryAssetCardListRequest extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'QueryAssetCardListRequest';

    protected static $openAPITypes = [
        'memberId' => 'string',
        'bindingId' => 'string',
        'enableOnly' => 'string',
        'contactBizTypeList' => 'string[]',
        'assetTypeList' => 'string[]'
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

    public const ENABLE_ONLY_TRUE = 'true';
    public const ENABLE_ONLY_FALSE = 'false';
    public const CONTACT_BIZ_TYPE_LIST_TRANSFER_HIS = 'TRANSFER_HIS';
    public const CONTACT_BIZ_TYPE_LIST_DIRECT_TRANSFER = 'DIRECT_TRANSFER';
    public const CONTACT_BIZ_TYPE_LIST_GENERAL_CARD = 'GENERAL_CARD';
    public const CONTACT_BIZ_TYPE_LIST_DIRECTPAY_CARD = 'DIRECTPAY_CARD';
    public const CONTACT_BIZ_TYPE_LIST_PAYMENT_CARD = 'PAYMENT_CARD';
    public const CONTACT_BIZ_TYPE_LIST_CASHOUT_CARD = 'CASHOUT_CARD';
    public const CONTACT_BIZ_TYPE_LIST_IMPS_ACCOUNT = 'IMPS_ACCOUNT';
    public const CONTACT_BIZ_TYPE_LIST_INVESTMENT_ACCOUNT = 'INVESTMENT_ACCOUNT';
    public const ASSET_TYPE_LIST_CHECKING_ACCOUNT = 'CHECKING_ACCOUNT';
    public const ASSET_TYPE_LIST_SAVINGS_ACCOUNT = 'SAVINGS_ACCOUNT';
    public const ASSET_TYPE_LIST_LOAN_ACCOUNT = 'LOAN_ACCOUNT';
    public const ASSET_TYPE_LIST_IMPS_ACCOUNT = 'IMPS_ACCOUNT';
    public const ASSET_TYPE_LIST_DEBIT_CARD = 'DEBIT_CARD';
    public const ASSET_TYPE_LIST_CREDIT_CARD = 'CREDIT_CARD';
    public const ASSET_TYPE_LIST_SECURED_CREDIT_CARD = 'SECURED_CREDIT_CARD';
    public const ASSET_TYPE_LIST_VA_ACCOUNT = 'VA_ACCOUNT';
    public const ASSET_TYPE_LIST_OTC_ACCOUNT = 'OTC_ACCOUNT';
    public const ASSET_TYPE_LIST_REFUND_ACCOUNT = 'REFUND_ACCOUNT';
    public const ASSET_TYPE_LIST_CREDIT_ACCOUNT = 'CREDIT_ACCOUNT';
    public const ASSET_TYPE_LIST_LOAN = 'LOAN';
    public const ASSET_TYPE_LIST_MUTUAL_FUNDS_ACCOUNT = 'MUTUAL_FUNDS_ACCOUNT';
    public const ASSET_TYPE_LIST_INVESTMENT = 'INVESTMENT';

    public function getEnableOnlyAllowableValues()
    {
        return [
            self::ENABLE_ONLY_TRUE,
            self::ENABLE_ONLY_FALSE,
        ];
    }

    public function getContactBizTypeListAllowableValues()
    {
        return [
            self::CONTACT_BIZ_TYPE_LIST_TRANSFER_HIS,
            self::CONTACT_BIZ_TYPE_LIST_DIRECT_TRANSFER,
            self::CONTACT_BIZ_TYPE_LIST_GENERAL_CARD,
            self::CONTACT_BIZ_TYPE_LIST_DIRECTPAY_CARD,
            self::CONTACT_BIZ_TYPE_LIST_PAYMENT_CARD,
            self::CONTACT_BIZ_TYPE_LIST_CASHOUT_CARD,
            self::CONTACT_BIZ_TYPE_LIST_IMPS_ACCOUNT,
            self::CONTACT_BIZ_TYPE_LIST_INVESTMENT_ACCOUNT,
        ];
    }

    public function getAssetTypeListAllowableValues()
    {
        return [
            self::ASSET_TYPE_LIST_CHECKING_ACCOUNT,
            self::ASSET_TYPE_LIST_SAVINGS_ACCOUNT,
            self::ASSET_TYPE_LIST_LOAN_ACCOUNT,
            self::ASSET_TYPE_LIST_IMPS_ACCOUNT,
            self::ASSET_TYPE_LIST_DEBIT_CARD,
            self::ASSET_TYPE_LIST_CREDIT_CARD,
            self::ASSET_TYPE_LIST_SECURED_CREDIT_CARD,
            self::ASSET_TYPE_LIST_VA_ACCOUNT,
            self::ASSET_TYPE_LIST_OTC_ACCOUNT,
            self::ASSET_TYPE_LIST_REFUND_ACCOUNT,
            self::ASSET_TYPE_LIST_CREDIT_ACCOUNT,
            self::ASSET_TYPE_LIST_LOAN,
            self::ASSET_TYPE_LIST_MUTUAL_FUNDS_ACCOUNT,
            self::ASSET_TYPE_LIST_INVESTMENT,
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

        if ($this->container['memberId'] === null) {
            $invalidProperties[] = "'memberId' can't be null";
        }
        if ((mb_strlen($this->container['memberId']) > 21)) {
            $invalidProperties[] = "invalid value for 'memberId', the character length must be smaller than or equal to 21.";
        }

        if (!is_null($this->container['bindingId']) && (mb_strlen($this->container['bindingId']) > 32)) {
            $invalidProperties[] = "invalid value for 'bindingId', the character length must be smaller than or equal to 32.";
        }

        $allowedValues = $this->getEnableOnlyAllowableValues();
        if (!is_null($this->container['enableOnly']) && !in_array($this->container['enableOnly'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'enableOnly', must be one of '%s'",
                $this->container['enableOnly'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['enableOnly']) && (mb_strlen($this->container['enableOnly']) > 5)) {
            $invalidProperties[] = "invalid value for 'enableOnly', the character length must be smaller than or equal to 5.";
        }

        return $invalidProperties;
    }



    public function getMemberId()
    {
        return $this->container['memberId'];
    }

    public function setMemberId($memberId)
    {
        if (is_null($memberId)) {
            throw new \InvalidArgumentException('non-nullable memberId cannot be null');
        }
        if ((mb_strlen($memberId) > 21)) {
            throw new \InvalidArgumentException('invalid length for $memberId when calling QueryAssetCardListRequest., must be smaller than or equal to 21.');
        }

        $this->container['memberId'] = $memberId;

        return $this;
    }

    public function getBindingId()
    {
        return $this->container['bindingId'];
    }

    public function setBindingId($bindingId)
    {
        if (is_null($bindingId)) {
            throw new \InvalidArgumentException('non-nullable bindingId cannot be null');
        }
        if ((mb_strlen($bindingId) > 32)) {
            throw new \InvalidArgumentException('invalid length for $bindingId when calling QueryAssetCardListRequest., must be smaller than or equal to 32.');
        }

        $this->container['bindingId'] = $bindingId;

        return $this;
    }

    public function getEnableOnly()
    {
        return $this->container['enableOnly'];
    }

    public function setEnableOnly($enableOnly)
    {
        if (is_null($enableOnly)) {
            throw new \InvalidArgumentException('non-nullable enableOnly cannot be null');
        }
        $allowedValues = $this->getEnableOnlyAllowableValues();
        if (!in_array($enableOnly, $allowedValues, true) && !empty($enableOnly)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'enableOnly', must be one of '%s'",
                    $enableOnly,
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($enableOnly) > 5)) {
            throw new \InvalidArgumentException('invalid length for $enableOnly when calling QueryAssetCardListRequest., must be smaller than or equal to 5.');
        }

        $this->container['enableOnly'] = $enableOnly;

        return $this;
    }

    public function getContactBizTypeList()
    {
        return $this->container['contactBizTypeList'];
    }

    public function setContactBizTypeList($contactBizTypeList)
    {
        if (is_null($contactBizTypeList)) {
            throw new \InvalidArgumentException('non-nullable contactBizTypeList cannot be null');
        }
        $allowedValues = $this->getContactBizTypeListAllowableValues();
        if (array_diff($contactBizTypeList, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'contactBizTypeList', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['contactBizTypeList'] = $contactBizTypeList;

        return $this;
    }

    public function getAssetTypeList()
    {
        return $this->container['assetTypeList'];
    }

    public function setAssetTypeList($assetTypeList)
    {
        if (is_null($assetTypeList)) {
            throw new \InvalidArgumentException('non-nullable assetTypeList cannot be null');
        }
        $allowedValues = $this->getAssetTypeListAllowableValues();
        if (array_diff($assetTypeList, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'assetTypeList', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['assetTypeList'] = $assetTypeList;

        return $this;
    }


}


