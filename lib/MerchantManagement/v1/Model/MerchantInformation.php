<?php

namespace Dana\MerchantManagement\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\MerchantManagement\v1\Enum;

class MerchantInformation extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'MerchantInformation';

    protected static $openAPITypes = [
        'phoneNumber' => 'string',
        'merchantId' => 'string',
        'merchantType' => 'string',
        'merchantSubType' => 'string',
        'mccCodes' => 'string[]',
        'logoUrl' => 'string',
        'logoUrlMap' => 'array<string,string>',
        'shortNameCode' => 'string',
        'officialName' => 'string',
        'englishName' => 'string',
        'localName' => 'string',
        'certificate' => '\Dana\MerchantManagement\v1\Model\MerchantCertificateInfo',
        'registeredAddress' => '\Dana\MerchantManagement\v1\Model\MerchantContactAddress',
        'businessAddress' => '\Dana\MerchantManagement\v1\Model\MerchantContactAddress',
        'officeTelephone' => 'string',
        'faxTelephone' => 'string',
        'corporateOfficialName' => '\Dana\MerchantManagement\v1\Model\UserName',
        'corporateCertificate' => '\Dana\MerchantManagement\v1\Model\MerchantCorporateCertificate',
        'contactOfficialName' => '\Dana\MerchantManagement\v1\Model\UserName',
        'contactMobileNo' => '\Dana\MerchantManagement\v1\Model\MerchantContactMobileNo',
        'contactTelephone' => 'string',
        'contactEmail' => '\Dana\MerchantManagement\v1\Model\MerchantContactEmail',
        'createdTime' => 'string',
        'modifiedTime' => 'string',
        'merchantStatus' => 'string',
        'registerSource' => 'string',
        'sizeType' => 'string',
        'platformMid' => 'string',
        'taxNo' => 'string',
        'accounts' => '\Dana\MerchantManagement\v1\Model\MerchantAccountInfo[]',
        'brandName' => 'string',
        'taxAddress' => '\Dana\MerchantManagement\v1\Model\MerchantContactAddress'
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

    public const MERCHANT_TYPE_INDIVIDUAL = 'INDIVIDUAL';
    public const MERCHANT_TYPE_CORPORATION = 'CORPORATION';
    public const MERCHANT_TYPE_FINANCIAL_INST = 'FINANCIAL_INST';
    public const MERCHANT_SUB_TYPE_COMPANY_TYPE_22 = 'COMPANY_TYPE_22';
    public const MERCHANT_SUB_TYPE_COMPANY_TYPE_31 = 'COMPANY_TYPE_31';
    public const MERCHANT_SUB_TYPE_COMPANY_TYPE_41 = 'COMPANY_TYPE_41';
    public const MERCHANT_STATUS_PENDING = 'PENDING';
    public const MERCHANT_STATUS_ACTIVE = 'ACTIVE';
    public const MERCHANT_STATUS_FROZEN = 'FROZEN';
    public const SIZE_TYPE_UMI = 'UMI';
    public const SIZE_TYPE_UKE = 'UKE';
    public const SIZE_TYPE_UME = 'UME';
    public const SIZE_TYPE_UBE = 'UBE';
    public const SIZE_TYPE_URE = 'URE';

    public function getMerchantTypeAllowableValues()
    {
        return [
            self::MERCHANT_TYPE_INDIVIDUAL,
            self::MERCHANT_TYPE_CORPORATION,
            self::MERCHANT_TYPE_FINANCIAL_INST,
        ];
    }

    public function getMerchantSubTypeAllowableValues()
    {
        return [
            self::MERCHANT_SUB_TYPE_COMPANY_TYPE_22,
            self::MERCHANT_SUB_TYPE_COMPANY_TYPE_31,
            self::MERCHANT_SUB_TYPE_COMPANY_TYPE_41,
        ];
    }

    public function getMerchantStatusAllowableValues()
    {
        return [
            self::MERCHANT_STATUS_PENDING,
            self::MERCHANT_STATUS_ACTIVE,
            self::MERCHANT_STATUS_FROZEN,
        ];
    }

    public function getSizeTypeAllowableValues()
    {
        return [
            self::SIZE_TYPE_UMI,
            self::SIZE_TYPE_UKE,
            self::SIZE_TYPE_UME,
            self::SIZE_TYPE_UBE,
            self::SIZE_TYPE_URE,
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

        if (!is_null($this->container['phoneNumber']) && (mb_strlen($this->container['phoneNumber']) > 64)) {
            $invalidProperties[] = "invalid value for 'phoneNumber', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['merchantId']) && (mb_strlen($this->container['merchantId']) > 21)) {
            $invalidProperties[] = "invalid value for 'merchantId', the character length must be smaller than or equal to 21.";
        }

        $allowedValues = $this->getMerchantTypeAllowableValues();
        if (!is_null($this->container['merchantType']) && !in_array($this->container['merchantType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'merchantType', must be one of '%s'",
                $this->container['merchantType'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['merchantType']) && (mb_strlen($this->container['merchantType']) > 14)) {
            $invalidProperties[] = "invalid value for 'merchantType', the character length must be smaller than or equal to 14.";
        }

        $allowedValues = $this->getMerchantSubTypeAllowableValues();
        if (!is_null($this->container['merchantSubType']) && !in_array($this->container['merchantSubType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'merchantSubType', must be one of '%s'",
                $this->container['merchantSubType'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['merchantSubType']) && (mb_strlen($this->container['merchantSubType']) > 32)) {
            $invalidProperties[] = "invalid value for 'merchantSubType', the character length must be smaller than or equal to 32.";
        }

        if (!is_null($this->container['shortNameCode']) && (mb_strlen($this->container['shortNameCode']) > 16)) {
            $invalidProperties[] = "invalid value for 'shortNameCode', the character length must be smaller than or equal to 16.";
        }

        if (!is_null($this->container['officialName']) && (mb_strlen($this->container['officialName']) > 128)) {
            $invalidProperties[] = "invalid value for 'officialName', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['englishName']) && (mb_strlen($this->container['englishName']) > 128)) {
            $invalidProperties[] = "invalid value for 'englishName', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['localName']) && (mb_strlen($this->container['localName']) > 128)) {
            $invalidProperties[] = "invalid value for 'localName', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['officeTelephone']) && (mb_strlen($this->container['officeTelephone']) > 64)) {
            $invalidProperties[] = "invalid value for 'officeTelephone', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['faxTelephone']) && (mb_strlen($this->container['faxTelephone']) > 64)) {
            $invalidProperties[] = "invalid value for 'faxTelephone', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['contactTelephone']) && (mb_strlen($this->container['contactTelephone']) > 32)) {
            $invalidProperties[] = "invalid value for 'contactTelephone', the character length must be smaller than or equal to 32.";
        }

        if (!is_null($this->container['createdTime']) && (mb_strlen($this->container['createdTime']) > 25)) {
            $invalidProperties[] = "invalid value for 'createdTime', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['modifiedTime']) && (mb_strlen($this->container['modifiedTime']) > 25)) {
            $invalidProperties[] = "invalid value for 'modifiedTime', the character length must be smaller than or equal to 25.";
        }

        $allowedValues = $this->getMerchantStatusAllowableValues();
        if (!is_null($this->container['merchantStatus']) && !in_array($this->container['merchantStatus'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'merchantStatus', must be one of '%s'",
                $this->container['merchantStatus'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['merchantStatus']) && (mb_strlen($this->container['merchantStatus']) > 7)) {
            $invalidProperties[] = "invalid value for 'merchantStatus', the character length must be smaller than or equal to 7.";
        }

        if (!is_null($this->container['registerSource']) && (mb_strlen($this->container['registerSource']) > 256)) {
            $invalidProperties[] = "invalid value for 'registerSource', the character length must be smaller than or equal to 256.";
        }

        $allowedValues = $this->getSizeTypeAllowableValues();
        if (!is_null($this->container['sizeType']) && !in_array($this->container['sizeType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'sizeType', must be one of '%s'",
                $this->container['sizeType'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['sizeType']) && (mb_strlen($this->container['sizeType']) > 3)) {
            $invalidProperties[] = "invalid value for 'sizeType', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['platformMid']) && (mb_strlen($this->container['platformMid']) > 64)) {
            $invalidProperties[] = "invalid value for 'platformMid', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['taxNo']) && (mb_strlen($this->container['taxNo']) > 15)) {
            $invalidProperties[] = "invalid value for 'taxNo', the character length must be smaller than or equal to 15.";
        }

        if (!is_null($this->container['taxNo']) && !preg_match("/^[0-9]{15}$/", $this->container['taxNo'])) {
            $invalidProperties[] = "invalid value for 'taxNo', must be conform to the pattern /^[0-9]{15}$/.";
        }

        if (!is_null($this->container['brandName']) && (mb_strlen($this->container['brandName']) > 256)) {
            $invalidProperties[] = "invalid value for 'brandName', the character length must be smaller than or equal to 256.";
        }

        return $invalidProperties;
    }



    public function getPhoneNumber()
    {
        return $this->container['phoneNumber'];
    }

    public function setPhoneNumber($phoneNumber)
    {
        if (is_null($phoneNumber)) {
            throw new \InvalidArgumentException('non-nullable phoneNumber cannot be null');
        }
        if ((mb_strlen($phoneNumber) > 64)) {
            throw new \InvalidArgumentException('invalid length for $phoneNumber when calling MerchantInformation., must be smaller than or equal to 64.');
        }

        $this->container['phoneNumber'] = $phoneNumber;

        return $this;
    }

    public function getMerchantId()
    {
        return $this->container['merchantId'];
    }

    public function setMerchantId($merchantId)
    {
        if (is_null($merchantId)) {
            throw new \InvalidArgumentException('non-nullable merchantId cannot be null');
        }
        if ((mb_strlen($merchantId) > 21)) {
            throw new \InvalidArgumentException('invalid length for $merchantId when calling MerchantInformation., must be smaller than or equal to 21.');
        }

        $this->container['merchantId'] = $merchantId;

        return $this;
    }

    public function getMerchantType()
    {
        return $this->container['merchantType'];
    }

    public function setMerchantType($merchantType)
    {
        if (is_null($merchantType)) {
            throw new \InvalidArgumentException('non-nullable merchantType cannot be null');
        }
        $allowedValues = $this->getMerchantTypeAllowableValues();
        if (!in_array($merchantType, $allowedValues, true) && !empty($merchantType)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'merchantType', must be one of '%s'",
                    $merchantType,
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($merchantType) > 14)) {
            throw new \InvalidArgumentException('invalid length for $merchantType when calling MerchantInformation., must be smaller than or equal to 14.');
        }

        $this->container['merchantType'] = $merchantType;

        return $this;
    }

    public function getMerchantSubType()
    {
        return $this->container['merchantSubType'];
    }

    public function setMerchantSubType($merchantSubType)
    {
        if (is_null($merchantSubType)) {
            throw new \InvalidArgumentException('non-nullable merchantSubType cannot be null');
        }
        $allowedValues = $this->getMerchantSubTypeAllowableValues();
        if (!in_array($merchantSubType, $allowedValues, true) && !empty($merchantSubType)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'merchantSubType', must be one of '%s'",
                    $merchantSubType,
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($merchantSubType) > 32)) {
            throw new \InvalidArgumentException('invalid length for $merchantSubType when calling MerchantInformation., must be smaller than or equal to 32.');
        }

        $this->container['merchantSubType'] = $merchantSubType;

        return $this;
    }

    public function getMccCodes()
    {
        return $this->container['mccCodes'];
    }

    public function setMccCodes($mccCodes)
    {
        if (is_null($mccCodes)) {
            throw new \InvalidArgumentException('non-nullable mccCodes cannot be null');
        }
        $this->container['mccCodes'] = $mccCodes;

        return $this;
    }

    public function getLogoUrl()
    {
        return $this->container['logoUrl'];
    }

    public function setLogoUrl($logoUrl)
    {
        if (is_null($logoUrl)) {
            throw new \InvalidArgumentException('non-nullable logoUrl cannot be null');
        }
        $this->container['logoUrl'] = $logoUrl;

        return $this;
    }

    public function getLogoUrlMap()
    {
        return $this->container['logoUrlMap'];
    }

    public function setLogoUrlMap($logoUrlMap)
    {
        if (is_null($logoUrlMap)) {
            throw new \InvalidArgumentException('non-nullable logoUrlMap cannot be null');
        }
        $this->container['logoUrlMap'] = $logoUrlMap;

        return $this;
    }

    public function getShortNameCode()
    {
        return $this->container['shortNameCode'];
    }

    public function setShortNameCode($shortNameCode)
    {
        if (is_null($shortNameCode)) {
            throw new \InvalidArgumentException('non-nullable shortNameCode cannot be null');
        }
        if ((mb_strlen($shortNameCode) > 16)) {
            throw new \InvalidArgumentException('invalid length for $shortNameCode when calling MerchantInformation., must be smaller than or equal to 16.');
        }

        $this->container['shortNameCode'] = $shortNameCode;

        return $this;
    }

    public function getOfficialName()
    {
        return $this->container['officialName'];
    }

    public function setOfficialName($officialName)
    {
        if (is_null($officialName)) {
            throw new \InvalidArgumentException('non-nullable officialName cannot be null');
        }
        if ((mb_strlen($officialName) > 128)) {
            throw new \InvalidArgumentException('invalid length for $officialName when calling MerchantInformation., must be smaller than or equal to 128.');
        }

        $this->container['officialName'] = $officialName;

        return $this;
    }

    public function getEnglishName()
    {
        return $this->container['englishName'];
    }

    public function setEnglishName($englishName)
    {
        if (is_null($englishName)) {
            throw new \InvalidArgumentException('non-nullable englishName cannot be null');
        }
        if ((mb_strlen($englishName) > 128)) {
            throw new \InvalidArgumentException('invalid length for $englishName when calling MerchantInformation., must be smaller than or equal to 128.');
        }

        $this->container['englishName'] = $englishName;

        return $this;
    }

    public function getLocalName()
    {
        return $this->container['localName'];
    }

    public function setLocalName($localName)
    {
        if (is_null($localName)) {
            throw new \InvalidArgumentException('non-nullable localName cannot be null');
        }
        if ((mb_strlen($localName) > 128)) {
            throw new \InvalidArgumentException('invalid length for $localName when calling MerchantInformation., must be smaller than or equal to 128.');
        }

        $this->container['localName'] = $localName;

        return $this;
    }

    public function getCertificate()
    {
        return $this->container['certificate'];
    }

    public function setCertificate($certificate)
    {
        if (is_null($certificate)) {
            throw new \InvalidArgumentException('non-nullable certificate cannot be null');
        }
        $this->container['certificate'] = $certificate;

        return $this;
    }

    public function getRegisteredAddress()
    {
        return $this->container['registeredAddress'];
    }

    public function setRegisteredAddress($registeredAddress)
    {
        if (is_null($registeredAddress)) {
            throw new \InvalidArgumentException('non-nullable registeredAddress cannot be null');
        }
        $this->container['registeredAddress'] = $registeredAddress;

        return $this;
    }

    public function getBusinessAddress()
    {
        return $this->container['businessAddress'];
    }

    public function setBusinessAddress($businessAddress)
    {
        if (is_null($businessAddress)) {
            throw new \InvalidArgumentException('non-nullable businessAddress cannot be null');
        }
        $this->container['businessAddress'] = $businessAddress;

        return $this;
    }

    public function getOfficeTelephone()
    {
        return $this->container['officeTelephone'];
    }

    public function setOfficeTelephone($officeTelephone)
    {
        if (is_null($officeTelephone)) {
            throw new \InvalidArgumentException('non-nullable officeTelephone cannot be null');
        }
        if ((mb_strlen($officeTelephone) > 64)) {
            throw new \InvalidArgumentException('invalid length for $officeTelephone when calling MerchantInformation., must be smaller than or equal to 64.');
        }

        $this->container['officeTelephone'] = $officeTelephone;

        return $this;
    }

    public function getFaxTelephone()
    {
        return $this->container['faxTelephone'];
    }

    public function setFaxTelephone($faxTelephone)
    {
        if (is_null($faxTelephone)) {
            throw new \InvalidArgumentException('non-nullable faxTelephone cannot be null');
        }
        if ((mb_strlen($faxTelephone) > 64)) {
            throw new \InvalidArgumentException('invalid length for $faxTelephone when calling MerchantInformation., must be smaller than or equal to 64.');
        }

        $this->container['faxTelephone'] = $faxTelephone;

        return $this;
    }

    public function getCorporateOfficialName()
    {
        return $this->container['corporateOfficialName'];
    }

    public function setCorporateOfficialName($corporateOfficialName)
    {
        if (is_null($corporateOfficialName)) {
            throw new \InvalidArgumentException('non-nullable corporateOfficialName cannot be null');
        }
        $this->container['corporateOfficialName'] = $corporateOfficialName;

        return $this;
    }

    public function getCorporateCertificate()
    {
        return $this->container['corporateCertificate'];
    }

    public function setCorporateCertificate($corporateCertificate)
    {
        if (is_null($corporateCertificate)) {
            throw new \InvalidArgumentException('non-nullable corporateCertificate cannot be null');
        }
        $this->container['corporateCertificate'] = $corporateCertificate;

        return $this;
    }

    public function getContactOfficialName()
    {
        return $this->container['contactOfficialName'];
    }

    public function setContactOfficialName($contactOfficialName)
    {
        if (is_null($contactOfficialName)) {
            throw new \InvalidArgumentException('non-nullable contactOfficialName cannot be null');
        }
        $this->container['contactOfficialName'] = $contactOfficialName;

        return $this;
    }

    public function getContactMobileNo()
    {
        return $this->container['contactMobileNo'];
    }

    public function setContactMobileNo($contactMobileNo)
    {
        if (is_null($contactMobileNo)) {
            throw new \InvalidArgumentException('non-nullable contactMobileNo cannot be null');
        }
        $this->container['contactMobileNo'] = $contactMobileNo;

        return $this;
    }

    public function getContactTelephone()
    {
        return $this->container['contactTelephone'];
    }

    public function setContactTelephone($contactTelephone)
    {
        if (is_null($contactTelephone)) {
            throw new \InvalidArgumentException('non-nullable contactTelephone cannot be null');
        }
        if ((mb_strlen($contactTelephone) > 32)) {
            throw new \InvalidArgumentException('invalid length for $contactTelephone when calling MerchantInformation., must be smaller than or equal to 32.');
        }

        $this->container['contactTelephone'] = $contactTelephone;

        return $this;
    }

    public function getContactEmail()
    {
        return $this->container['contactEmail'];
    }

    public function setContactEmail($contactEmail)
    {
        if (is_null($contactEmail)) {
            throw new \InvalidArgumentException('non-nullable contactEmail cannot be null');
        }
        $this->container['contactEmail'] = $contactEmail;

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
        if ((mb_strlen($createdTime) > 25)) {
            throw new \InvalidArgumentException('invalid length for $createdTime when calling MerchantInformation., must be smaller than or equal to 25.');
        }

        $this->container['createdTime'] = $createdTime;

        return $this;
    }

    public function getModifiedTime()
    {
        return $this->container['modifiedTime'];
    }

    public function setModifiedTime($modifiedTime)
    {
        if (is_null($modifiedTime)) {
            throw new \InvalidArgumentException('non-nullable modifiedTime cannot be null');
        }
        if ((mb_strlen($modifiedTime) > 25)) {
            throw new \InvalidArgumentException('invalid length for $modifiedTime when calling MerchantInformation., must be smaller than or equal to 25.');
        }

        $this->container['modifiedTime'] = $modifiedTime;

        return $this;
    }

    public function getMerchantStatus()
    {
        return $this->container['merchantStatus'];
    }

    public function setMerchantStatus($merchantStatus)
    {
        if (is_null($merchantStatus)) {
            throw new \InvalidArgumentException('non-nullable merchantStatus cannot be null');
        }
        $allowedValues = $this->getMerchantStatusAllowableValues();
        if (!in_array($merchantStatus, $allowedValues, true) && !empty($merchantStatus)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'merchantStatus', must be one of '%s'",
                    $merchantStatus,
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($merchantStatus) > 7)) {
            throw new \InvalidArgumentException('invalid length for $merchantStatus when calling MerchantInformation., must be smaller than or equal to 7.');
        }

        $this->container['merchantStatus'] = $merchantStatus;

        return $this;
    }

    public function getRegisterSource()
    {
        return $this->container['registerSource'];
    }

    public function setRegisterSource($registerSource)
    {
        if (is_null($registerSource)) {
            throw new \InvalidArgumentException('non-nullable registerSource cannot be null');
        }
        if ((mb_strlen($registerSource) > 256)) {
            throw new \InvalidArgumentException('invalid length for $registerSource when calling MerchantInformation., must be smaller than or equal to 256.');
        }

        $this->container['registerSource'] = $registerSource;

        return $this;
    }

    public function getSizeType()
    {
        return $this->container['sizeType'];
    }

    public function setSizeType($sizeType)
    {
        if (is_null($sizeType)) {
            throw new \InvalidArgumentException('non-nullable sizeType cannot be null');
        }
        $allowedValues = $this->getSizeTypeAllowableValues();
        if (!in_array($sizeType, $allowedValues, true) && !empty($sizeType)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'sizeType', must be one of '%s'",
                    $sizeType,
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($sizeType) > 3)) {
            throw new \InvalidArgumentException('invalid length for $sizeType when calling MerchantInformation., must be smaller than or equal to 3.');
        }

        $this->container['sizeType'] = $sizeType;

        return $this;
    }

    public function getPlatformMid()
    {
        return $this->container['platformMid'];
    }

    public function setPlatformMid($platformMid)
    {
        if (is_null($platformMid)) {
            throw new \InvalidArgumentException('non-nullable platformMid cannot be null');
        }
        if ((mb_strlen($platformMid) > 64)) {
            throw new \InvalidArgumentException('invalid length for $platformMid when calling MerchantInformation., must be smaller than or equal to 64.');
        }

        $this->container['platformMid'] = $platformMid;

        return $this;
    }

    public function getTaxNo()
    {
        return $this->container['taxNo'];
    }

    public function setTaxNo($taxNo)
    {
        if (is_null($taxNo)) {
            throw new \InvalidArgumentException('non-nullable taxNo cannot be null');
        }
        if ((mb_strlen($taxNo) > 15)) {
            throw new \InvalidArgumentException('invalid length for $taxNo when calling MerchantInformation., must be smaller than or equal to 15.');
        }
        if ((!preg_match("/^[0-9]{15}$/", ObjectSerializer::toString($taxNo)))) {
            throw new \InvalidArgumentException("invalid value for \$taxNo when calling MerchantInformation., must conform to the pattern /^[0-9]{15}$/.");
        }

        $this->container['taxNo'] = $taxNo;

        return $this;
    }

    public function getAccounts()
    {
        return $this->container['accounts'];
    }

    public function setAccounts($accounts)
    {
        if (is_null($accounts)) {
            throw new \InvalidArgumentException('non-nullable accounts cannot be null');
        }
        $this->container['accounts'] = $accounts;

        return $this;
    }

    public function getBrandName()
    {
        return $this->container['brandName'];
    }

    public function setBrandName($brandName)
    {
        if (is_null($brandName)) {
            throw new \InvalidArgumentException('non-nullable brandName cannot be null');
        }
        if ((mb_strlen($brandName) > 256)) {
            throw new \InvalidArgumentException('invalid length for $brandName when calling MerchantInformation., must be smaller than or equal to 256.');
        }

        $this->container['brandName'] = $brandName;

        return $this;
    }

    public function getTaxAddress()
    {
        return $this->container['taxAddress'];
    }

    public function setTaxAddress($taxAddress)
    {
        if (is_null($taxAddress)) {
            throw new \InvalidArgumentException('non-nullable taxAddress cannot be null');
        }
        $this->container['taxAddress'] = $taxAddress;

        return $this;
    }


}


