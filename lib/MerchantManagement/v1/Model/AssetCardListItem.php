<?php

namespace Dana\MerchantManagement\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\MerchantManagement\v1\Enum;

class AssetCardListItem extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'AssetCardListItem';

    protected static $openAPITypes = [
        'contactBizType' => 'string',
        'cardIndexNo' => 'string',
        'cardNoLength' => 'string',
        'maskedCardNo' => 'string',
        'assetType' => 'string',
        'holderName' => 'array<string,mixed>',
        'instLogoUrl' => 'string',
        'instId' => 'string',
        'instOfficialName' => 'string',
        'expiryYear' => 'string',
        'expiryMonth' => 'string',
        'verified' => 'string',
        'bindingId' => 'string',
        'defaultAsset' => 'string',
        'enableStatus' => 'string',
        'directDebit' => 'string'
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

    public const CONTACT_BIZ_TYPE_TRANSFER_HIS = 'TRANSFER_HIS';
    public const CONTACT_BIZ_TYPE_DIRECT_TRANSFER = 'DIRECT_TRANSFER';
    public const CONTACT_BIZ_TYPE_GENERAL_CARD = 'GENERAL_CARD';
    public const CONTACT_BIZ_TYPE_DIRECTPAY_CARD = 'DIRECTPAY_CARD';
    public const CONTACT_BIZ_TYPE_PAYMENT_CARD = 'PAYMENT_CARD';
    public const CONTACT_BIZ_TYPE_CASHOUT_CARD = 'CASHOUT_CARD';
    public const CONTACT_BIZ_TYPE_IMPS_ACCOUNT = 'IMPS_ACCOUNT';
    public const CONTACT_BIZ_TYPE_INVESTMENT_ACCOUNT = 'INVESTMENT_ACCOUNT';
    public const ASSET_TYPE_CHECKING_ACCOUNT = 'CHECKING_ACCOUNT';
    public const ASSET_TYPE_SAVINGS_ACCOUNT = 'SAVINGS_ACCOUNT';
    public const ASSET_TYPE_LOAN_ACCOUNT = 'LOAN_ACCOUNT';
    public const ASSET_TYPE_IMPS_ACCOUNT = 'IMPS_ACCOUNT';
    public const ASSET_TYPE_DEBIT_CARD = 'DEBIT_CARD';
    public const ASSET_TYPE_CREDIT_CARD = 'CREDIT_CARD';
    public const ASSET_TYPE_SECURED_CREDIT_CARD = 'SECURED_CREDIT_CARD';
    public const ASSET_TYPE_VA_ACCOUNT = 'VA_ACCOUNT';
    public const ASSET_TYPE_OTC_ACCOUNT = 'OTC_ACCOUNT';
    public const ASSET_TYPE_REFUND_ACCOUNT = 'REFUND_ACCOUNT';
    public const ASSET_TYPE_CREDIT_ACCOUNT = 'CREDIT_ACCOUNT';
    public const ASSET_TYPE_LOAN = 'LOAN';
    public const ASSET_TYPE_MUTUAL_FUNDS_ACCOUNT = 'MUTUAL_FUNDS_ACCOUNT';
    public const ASSET_TYPE_INVESTMENT = 'INVESTMENT';
    public const VERIFIED_TRUE = 'true';
    public const VERIFIED_FALSE = 'false';
    public const DEFAULT_ASSET_TRUE = 'true';
    public const DEFAULT_ASSET_FALSE = 'false';
    public const ENABLE_STATUS_TRUE = 'true';
    public const ENABLE_STATUS_FALSE = 'false';
    public const DIRECT_DEBIT_TRUE = 'true';
    public const DIRECT_DEBIT_FALSE = 'false';

    public function getContactBizTypeAllowableValues()
    {
        return [
            self::CONTACT_BIZ_TYPE_TRANSFER_HIS,
            self::CONTACT_BIZ_TYPE_DIRECT_TRANSFER,
            self::CONTACT_BIZ_TYPE_GENERAL_CARD,
            self::CONTACT_BIZ_TYPE_DIRECTPAY_CARD,
            self::CONTACT_BIZ_TYPE_PAYMENT_CARD,
            self::CONTACT_BIZ_TYPE_CASHOUT_CARD,
            self::CONTACT_BIZ_TYPE_IMPS_ACCOUNT,
            self::CONTACT_BIZ_TYPE_INVESTMENT_ACCOUNT,
        ];
    }

    public function getAssetTypeAllowableValues()
    {
        return [
            self::ASSET_TYPE_CHECKING_ACCOUNT,
            self::ASSET_TYPE_SAVINGS_ACCOUNT,
            self::ASSET_TYPE_LOAN_ACCOUNT,
            self::ASSET_TYPE_IMPS_ACCOUNT,
            self::ASSET_TYPE_DEBIT_CARD,
            self::ASSET_TYPE_CREDIT_CARD,
            self::ASSET_TYPE_SECURED_CREDIT_CARD,
            self::ASSET_TYPE_VA_ACCOUNT,
            self::ASSET_TYPE_OTC_ACCOUNT,
            self::ASSET_TYPE_REFUND_ACCOUNT,
            self::ASSET_TYPE_CREDIT_ACCOUNT,
            self::ASSET_TYPE_LOAN,
            self::ASSET_TYPE_MUTUAL_FUNDS_ACCOUNT,
            self::ASSET_TYPE_INVESTMENT,
        ];
    }

    public function getVerifiedAllowableValues()
    {
        return [
            self::VERIFIED_TRUE,
            self::VERIFIED_FALSE,
        ];
    }

    public function getDefaultAssetAllowableValues()
    {
        return [
            self::DEFAULT_ASSET_TRUE,
            self::DEFAULT_ASSET_FALSE,
        ];
    }

    public function getEnableStatusAllowableValues()
    {
        return [
            self::ENABLE_STATUS_TRUE,
            self::ENABLE_STATUS_FALSE,
        ];
    }

    public function getDirectDebitAllowableValues()
    {
        return [
            self::DIRECT_DEBIT_TRUE,
            self::DIRECT_DEBIT_FALSE,
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

        if ($this->container['contactBizType'] === null) {
            $invalidProperties[] = "'contactBizType' can't be null";
        }
        $allowedValues = $this->getContactBizTypeAllowableValues();
        if (!is_null($this->container['contactBizType']) && !in_array($this->container['contactBizType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'contactBizType', must be one of '%s'",
                $this->container['contactBizType'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['cardIndexNo'] === null) {
            $invalidProperties[] = "'cardIndexNo' can't be null";
        }
        if ((mb_strlen($this->container['cardIndexNo']) > 20)) {
            $invalidProperties[] = "invalid value for 'cardIndexNo', the character length must be smaller than or equal to 20.";
        }

        if ($this->container['cardNoLength'] === null) {
            $invalidProperties[] = "'cardNoLength' can't be null";
        }
        if ((mb_strlen($this->container['cardNoLength']) > 2)) {
            $invalidProperties[] = "invalid value for 'cardNoLength', the character length must be smaller than or equal to 2.";
        }

        if ($this->container['maskedCardNo'] === null) {
            $invalidProperties[] = "'maskedCardNo' can't be null";
        }
        if ((mb_strlen($this->container['maskedCardNo']) > 256)) {
            $invalidProperties[] = "invalid value for 'maskedCardNo', the character length must be smaller than or equal to 256.";
        }

        if ($this->container['assetType'] === null) {
            $invalidProperties[] = "'assetType' can't be null";
        }
        $allowedValues = $this->getAssetTypeAllowableValues();
        if (!is_null($this->container['assetType']) && !in_array($this->container['assetType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'assetType', must be one of '%s'",
                $this->container['assetType'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['holderName'] === null) {
            $invalidProperties[] = "'holderName' can't be null";
        }
        if ($this->container['instId'] === null) {
            $invalidProperties[] = "'instId' can't be null";
        }
        if ((mb_strlen($this->container['instId']) > 32)) {
            $invalidProperties[] = "invalid value for 'instId', the character length must be smaller than or equal to 32.";
        }

        if ($this->container['instOfficialName'] === null) {
            $invalidProperties[] = "'instOfficialName' can't be null";
        }
        if ((mb_strlen($this->container['instOfficialName']) > 32)) {
            $invalidProperties[] = "invalid value for 'instOfficialName', the character length must be smaller than or equal to 32.";
        }

        if ($this->container['expiryYear'] === null) {
            $invalidProperties[] = "'expiryYear' can't be null";
        }
        if ((mb_strlen($this->container['expiryYear']) > 4)) {
            $invalidProperties[] = "invalid value for 'expiryYear', the character length must be smaller than or equal to 4.";
        }

        if ($this->container['expiryMonth'] === null) {
            $invalidProperties[] = "'expiryMonth' can't be null";
        }
        if ((mb_strlen($this->container['expiryMonth']) > 2)) {
            $invalidProperties[] = "invalid value for 'expiryMonth', the character length must be smaller than or equal to 2.";
        }

        if ($this->container['verified'] === null) {
            $invalidProperties[] = "'verified' can't be null";
        }
        $allowedValues = $this->getVerifiedAllowableValues();
        if (!is_null($this->container['verified']) && !in_array($this->container['verified'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'verified', must be one of '%s'",
                $this->container['verified'],
                implode("', '", $allowedValues)
            );
        }

        if ((mb_strlen($this->container['verified']) > 5)) {
            $invalidProperties[] = "invalid value for 'verified', the character length must be smaller than or equal to 5.";
        }

        if (!is_null($this->container['bindingId']) && (mb_strlen($this->container['bindingId']) > 21)) {
            $invalidProperties[] = "invalid value for 'bindingId', the character length must be smaller than or equal to 21.";
        }

        $allowedValues = $this->getDefaultAssetAllowableValues();
        if (!is_null($this->container['defaultAsset']) && !in_array($this->container['defaultAsset'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'defaultAsset', must be one of '%s'",
                $this->container['defaultAsset'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['defaultAsset']) && (mb_strlen($this->container['defaultAsset']) > 5)) {
            $invalidProperties[] = "invalid value for 'defaultAsset', the character length must be smaller than or equal to 5.";
        }

        $allowedValues = $this->getEnableStatusAllowableValues();
        if (!is_null($this->container['enableStatus']) && !in_array($this->container['enableStatus'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'enableStatus', must be one of '%s'",
                $this->container['enableStatus'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['enableStatus']) && (mb_strlen($this->container['enableStatus']) > 5)) {
            $invalidProperties[] = "invalid value for 'enableStatus', the character length must be smaller than or equal to 5.";
        }

        $allowedValues = $this->getDirectDebitAllowableValues();
        if (!is_null($this->container['directDebit']) && !in_array($this->container['directDebit'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'directDebit', must be one of '%s'",
                $this->container['directDebit'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['directDebit']) && (mb_strlen($this->container['directDebit']) > 5)) {
            $invalidProperties[] = "invalid value for 'directDebit', the character length must be smaller than or equal to 5.";
        }

        return $invalidProperties;
    }



    public function getContactBizType()
    {
        return $this->container['contactBizType'];
    }

    public function setContactBizType($contactBizType)
    {
        if (is_null($contactBizType)) {
            throw new \InvalidArgumentException('non-nullable contactBizType cannot be null');
        }
        $allowedValues = $this->getContactBizTypeAllowableValues();
        if (!in_array($contactBizType, $allowedValues, true) && !empty($contactBizType)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'contactBizType', must be one of '%s'",
                    $contactBizType,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['contactBizType'] = $contactBizType;

        return $this;
    }

    public function getCardIndexNo()
    {
        return $this->container['cardIndexNo'];
    }

    public function setCardIndexNo($cardIndexNo)
    {
        if (is_null($cardIndexNo)) {
            throw new \InvalidArgumentException('non-nullable cardIndexNo cannot be null');
        }
        if ((mb_strlen($cardIndexNo) > 20)) {
            throw new \InvalidArgumentException('invalid length for $cardIndexNo when calling AssetCardListItem., must be smaller than or equal to 20.');
        }

        $this->container['cardIndexNo'] = $cardIndexNo;

        return $this;
    }

    public function getCardNoLength()
    {
        return $this->container['cardNoLength'];
    }

    public function setCardNoLength($cardNoLength)
    {
        if (is_null($cardNoLength)) {
            throw new \InvalidArgumentException('non-nullable cardNoLength cannot be null');
        }
        if ((mb_strlen($cardNoLength) > 2)) {
            throw new \InvalidArgumentException('invalid length for $cardNoLength when calling AssetCardListItem., must be smaller than or equal to 2.');
        }

        $this->container['cardNoLength'] = $cardNoLength;

        return $this;
    }

    public function getMaskedCardNo()
    {
        return $this->container['maskedCardNo'];
    }

    public function setMaskedCardNo($maskedCardNo)
    {
        if (is_null($maskedCardNo)) {
            throw new \InvalidArgumentException('non-nullable maskedCardNo cannot be null');
        }
        if ((mb_strlen($maskedCardNo) > 256)) {
            throw new \InvalidArgumentException('invalid length for $maskedCardNo when calling AssetCardListItem., must be smaller than or equal to 256.');
        }

        $this->container['maskedCardNo'] = $maskedCardNo;

        return $this;
    }

    public function getAssetType()
    {
        return $this->container['assetType'];
    }

    public function setAssetType($assetType)
    {
        if (is_null($assetType)) {
            throw new \InvalidArgumentException('non-nullable assetType cannot be null');
        }
        $allowedValues = $this->getAssetTypeAllowableValues();
        if (!in_array($assetType, $allowedValues, true) && !empty($assetType)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'assetType', must be one of '%s'",
                    $assetType,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['assetType'] = $assetType;

        return $this;
    }

    public function getHolderName()
    {
        return $this->container['holderName'];
    }

    public function setHolderName($holderName)
    {
        if (is_null($holderName)) {
            throw new \InvalidArgumentException('non-nullable holderName cannot be null');
        }
        $this->container['holderName'] = $holderName;

        return $this;
    }

    public function getInstLogoUrl()
    {
        return $this->container['instLogoUrl'];
    }

    public function setInstLogoUrl($instLogoUrl)
    {
        if (is_null($instLogoUrl)) {
            throw new \InvalidArgumentException('non-nullable instLogoUrl cannot be null');
        }
        $this->container['instLogoUrl'] = $instLogoUrl;

        return $this;
    }

    public function getInstId()
    {
        return $this->container['instId'];
    }

    public function setInstId($instId)
    {
        if (is_null($instId)) {
            throw new \InvalidArgumentException('non-nullable instId cannot be null');
        }
        if ((mb_strlen($instId) > 32)) {
            throw new \InvalidArgumentException('invalid length for $instId when calling AssetCardListItem., must be smaller than or equal to 32.');
        }

        $this->container['instId'] = $instId;

        return $this;
    }

    public function getInstOfficialName()
    {
        return $this->container['instOfficialName'];
    }

    public function setInstOfficialName($instOfficialName)
    {
        if (is_null($instOfficialName)) {
            throw new \InvalidArgumentException('non-nullable instOfficialName cannot be null');
        }
        if ((mb_strlen($instOfficialName) > 32)) {
            throw new \InvalidArgumentException('invalid length for $instOfficialName when calling AssetCardListItem., must be smaller than or equal to 32.');
        }

        $this->container['instOfficialName'] = $instOfficialName;

        return $this;
    }

    public function getExpiryYear()
    {
        return $this->container['expiryYear'];
    }

    public function setExpiryYear($expiryYear)
    {
        if (is_null($expiryYear)) {
            throw new \InvalidArgumentException('non-nullable expiryYear cannot be null');
        }
        if ((mb_strlen($expiryYear) > 4)) {
            throw new \InvalidArgumentException('invalid length for $expiryYear when calling AssetCardListItem., must be smaller than or equal to 4.');
        }

        $this->container['expiryYear'] = $expiryYear;

        return $this;
    }

    public function getExpiryMonth()
    {
        return $this->container['expiryMonth'];
    }

    public function setExpiryMonth($expiryMonth)
    {
        if (is_null($expiryMonth)) {
            throw new \InvalidArgumentException('non-nullable expiryMonth cannot be null');
        }
        if ((mb_strlen($expiryMonth) > 2)) {
            throw new \InvalidArgumentException('invalid length for $expiryMonth when calling AssetCardListItem., must be smaller than or equal to 2.');
        }

        $this->container['expiryMonth'] = $expiryMonth;

        return $this;
    }

    public function getVerified()
    {
        return $this->container['verified'];
    }

    public function setVerified($verified)
    {
        if (is_null($verified)) {
            throw new \InvalidArgumentException('non-nullable verified cannot be null');
        }
        $allowedValues = $this->getVerifiedAllowableValues();
        if (!in_array($verified, $allowedValues, true) && !empty($verified)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'verified', must be one of '%s'",
                    $verified,
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($verified) > 5)) {
            throw new \InvalidArgumentException('invalid length for $verified when calling AssetCardListItem., must be smaller than or equal to 5.');
        }

        $this->container['verified'] = $verified;

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
        if ((mb_strlen($bindingId) > 21)) {
            throw new \InvalidArgumentException('invalid length for $bindingId when calling AssetCardListItem., must be smaller than or equal to 21.');
        }

        $this->container['bindingId'] = $bindingId;

        return $this;
    }

    public function getDefaultAsset()
    {
        return $this->container['defaultAsset'];
    }

    public function setDefaultAsset($defaultAsset)
    {
        if (is_null($defaultAsset)) {
            throw new \InvalidArgumentException('non-nullable defaultAsset cannot be null');
        }
        $allowedValues = $this->getDefaultAssetAllowableValues();
        if (!in_array($defaultAsset, $allowedValues, true) && !empty($defaultAsset)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'defaultAsset', must be one of '%s'",
                    $defaultAsset,
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($defaultAsset) > 5)) {
            throw new \InvalidArgumentException('invalid length for $defaultAsset when calling AssetCardListItem., must be smaller than or equal to 5.');
        }

        $this->container['defaultAsset'] = $defaultAsset;

        return $this;
    }

    public function getEnableStatus()
    {
        return $this->container['enableStatus'];
    }

    public function setEnableStatus($enableStatus)
    {
        if (is_null($enableStatus)) {
            throw new \InvalidArgumentException('non-nullable enableStatus cannot be null');
        }
        $allowedValues = $this->getEnableStatusAllowableValues();
        if (!in_array($enableStatus, $allowedValues, true) && !empty($enableStatus)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'enableStatus', must be one of '%s'",
                    $enableStatus,
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($enableStatus) > 5)) {
            throw new \InvalidArgumentException('invalid length for $enableStatus when calling AssetCardListItem., must be smaller than or equal to 5.');
        }

        $this->container['enableStatus'] = $enableStatus;

        return $this;
    }

    public function getDirectDebit()
    {
        return $this->container['directDebit'];
    }

    public function setDirectDebit($directDebit)
    {
        if (is_null($directDebit)) {
            throw new \InvalidArgumentException('non-nullable directDebit cannot be null');
        }
        $allowedValues = $this->getDirectDebitAllowableValues();
        if (!in_array($directDebit, $allowedValues, true) && !empty($directDebit)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'directDebit', must be one of '%s'",
                    $directDebit,
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($directDebit) > 5)) {
            throw new \InvalidArgumentException('invalid length for $directDebit when calling AssetCardListItem., must be smaller than or equal to 5.');
        }

        $this->container['directDebit'] = $directDebit;

        return $this;
    }


}


