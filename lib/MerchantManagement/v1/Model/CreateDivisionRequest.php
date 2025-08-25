<?php

namespace Dana\MerchantManagement\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\MerchantManagement\v1\Enum;

class CreateDivisionRequest extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'CreateDivisionRequest';

    protected static $openAPITypes = [
        'apiVersion' => 'string',
        'merchantId' => 'string',
        'parentDivisionId' => 'string',
        'parentRoleType' => 'string',
        'divisionName' => 'string',
        'divisionAddress' => '\Dana\MerchantManagement\v1\Model\AddressInfo',
        'divisionDescription' => 'string',
        'divisionType' => 'string',
        'externalDivisionId' => 'string',
        'logoUrlMap' => 'array<string,string>',
        'extInfo' => '\Dana\MerchantManagement\v1\Model\CreateDivisionRequestExtInfo',
        'mccCodes' => 'string[]',
        'businessDocs' => '\Dana\MerchantManagement\v1\Model\BusinessDocs[]',
        'businessEntity' => 'string',
        'ownerName' => '\Dana\MerchantManagement\v1\Model\UserName',
        'ownerPhoneNumber' => '\Dana\MerchantManagement\v1\Model\MobileNoInfo',
        'ownerIdType' => 'string',
        'ownerIdNo' => 'string',
        'ownerAddress' => '\Dana\MerchantManagement\v1\Model\AddressInfo',
        'directorPics' => '\Dana\MerchantManagement\v1\Model\PicInfo[]',
        'nonDirectorPics' => '\Dana\MerchantManagement\v1\Model\PicInfo[]',
        'sizeType' => 'string',
        'pgDivisionFlag' => 'string'
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

    public const PARENT_ROLE_TYPE_MERCHANT = 'MERCHANT';
    public const PARENT_ROLE_TYPE_DIVISION = 'DIVISION';
    public const PARENT_ROLE_TYPE_EXTERNAL_DIVISION = 'EXTERNAL_DIVISION';
    public const DIVISION_TYPE_REGION = 'REGION';
    public const DIVISION_TYPE_AREA = 'AREA';
    public const DIVISION_TYPE_BRANCH = 'BRANCH';
    public const DIVISION_TYPE_OUTLET = 'OUTLET';
    public const DIVISION_TYPE_STORE = 'STORE';
    public const DIVISION_TYPE_KIOSK = 'KIOSK';
    public const DIVISION_TYPE_STALL = 'STALL';
    public const DIVISION_TYPE_COUNTER = 'COUNTER';
    public const DIVISION_TYPE_BOOTH = 'BOOTH';
    public const DIVISION_TYPE_POINT_OF_SALE = 'POINT_OF_SALE';
    public const DIVISION_TYPE_VENDING_MACHINE = 'VENDING_MACHINE';
    public const BUSINESS_ENTITY_PT = 'pt';
    public const BUSINESS_ENTITY_CV = 'cv';
    public const BUSINESS_ENTITY_INDIVIDU = 'individu';
    public const BUSINESS_ENTITY_USAHA_DAGANG = 'usaha_dagang';
    public const BUSINESS_ENTITY_YAYASAN = 'yayasan';
    public const BUSINESS_ENTITY_KOPERASI = 'koperasi';
    public const OWNER_ID_TYPE_KTP = 'KTP';
    public const OWNER_ID_TYPE_SIM = 'SIM';
    public const OWNER_ID_TYPE_PASSPORT = 'PASSPORT';
    public const OWNER_ID_TYPE_SIUP = 'SIUP';
    public const OWNER_ID_TYPE_NIB = 'NIB';
    public const SIZE_TYPE_UMI = 'UMI';
    public const SIZE_TYPE_UKE = 'UKE';
    public const SIZE_TYPE_UME = 'UME';
    public const SIZE_TYPE_UBE = 'UBE';
    public const SIZE_TYPE_URE = 'URE';
    public const PG_DIVISION_FLAG_TRUE = 'true';
    public const PG_DIVISION_FLAG_FALSE = 'false';

    public function getParentRoleTypeAllowableValues()
    {
        return [
            self::PARENT_ROLE_TYPE_MERCHANT,
            self::PARENT_ROLE_TYPE_DIVISION,
            self::PARENT_ROLE_TYPE_EXTERNAL_DIVISION,
        ];
    }

    public function getDivisionTypeAllowableValues()
    {
        return [
            self::DIVISION_TYPE_REGION,
            self::DIVISION_TYPE_AREA,
            self::DIVISION_TYPE_BRANCH,
            self::DIVISION_TYPE_OUTLET,
            self::DIVISION_TYPE_STORE,
            self::DIVISION_TYPE_KIOSK,
            self::DIVISION_TYPE_STALL,
            self::DIVISION_TYPE_COUNTER,
            self::DIVISION_TYPE_BOOTH,
            self::DIVISION_TYPE_POINT_OF_SALE,
            self::DIVISION_TYPE_VENDING_MACHINE,
        ];
    }

    public function getBusinessEntityAllowableValues()
    {
        return [
            self::BUSINESS_ENTITY_PT,
            self::BUSINESS_ENTITY_CV,
            self::BUSINESS_ENTITY_INDIVIDU,
            self::BUSINESS_ENTITY_USAHA_DAGANG,
            self::BUSINESS_ENTITY_YAYASAN,
            self::BUSINESS_ENTITY_KOPERASI,
        ];
    }

    public function getOwnerIdTypeAllowableValues()
    {
        return [
            self::OWNER_ID_TYPE_KTP,
            self::OWNER_ID_TYPE_SIM,
            self::OWNER_ID_TYPE_PASSPORT,
            self::OWNER_ID_TYPE_SIUP,
            self::OWNER_ID_TYPE_NIB,
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

    public function getPgDivisionFlagAllowableValues()
    {
        return [
            self::PG_DIVISION_FLAG_TRUE,
            self::PG_DIVISION_FLAG_FALSE,
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

        if ($this->container['apiVersion'] === null) {
            $invalidProperties[] = "'apiVersion' can't be null";
        }
        if ((mb_strlen($this->container['apiVersion']) > 8)) {
            $invalidProperties[] = "invalid value for 'apiVersion', the character length must be smaller than or equal to 8.";
        }

        if ($this->container['merchantId'] === null) {
            $invalidProperties[] = "'merchantId' can't be null";
        }
        if ((mb_strlen($this->container['merchantId']) > 21)) {
            $invalidProperties[] = "invalid value for 'merchantId', the character length must be smaller than or equal to 21.";
        }

        if ($this->container['parentRoleType'] === null) {
            $invalidProperties[] = "'parentRoleType' can't be null";
        }
        $allowedValues = $this->getParentRoleTypeAllowableValues();
        if (!is_null($this->container['parentRoleType']) && !in_array($this->container['parentRoleType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'parentRoleType', must be one of '%s'",
                $this->container['parentRoleType'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['divisionName'] === null) {
            $invalidProperties[] = "'divisionName' can't be null";
        }
        if ((mb_strlen($this->container['divisionName']) > 256)) {
            $invalidProperties[] = "invalid value for 'divisionName', the character length must be smaller than or equal to 256.";
        }

        if ($this->container['divisionAddress'] === null) {
            $invalidProperties[] = "'divisionAddress' can't be null";
        }
        if (!is_null($this->container['divisionDescription']) && (mb_strlen($this->container['divisionDescription']) > 1024)) {
            $invalidProperties[] = "invalid value for 'divisionDescription', the character length must be smaller than or equal to 1024.";
        }

        if ($this->container['divisionType'] === null) {
            $invalidProperties[] = "'divisionType' can't be null";
        }
        $allowedValues = $this->getDivisionTypeAllowableValues();
        if (!is_null($this->container['divisionType']) && !in_array($this->container['divisionType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'divisionType', must be one of '%s'",
                $this->container['divisionType'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['externalDivisionId'] === null) {
            $invalidProperties[] = "'externalDivisionId' can't be null";
        }
        if ((mb_strlen($this->container['externalDivisionId']) > 64)) {
            $invalidProperties[] = "invalid value for 'externalDivisionId', the character length must be smaller than or equal to 64.";
        }

        if ($this->container['extInfo'] === null) {
            $invalidProperties[] = "'extInfo' can't be null";
        }
        if ($this->container['mccCodes'] === null) {
            $invalidProperties[] = "'mccCodes' can't be null";
        }
        if ($this->container['businessDocs'] === null) {
            $invalidProperties[] = "'businessDocs' can't be null";
        }
        if ($this->container['businessEntity'] === null) {
            $invalidProperties[] = "'businessEntity' can't be null";
        }
        $allowedValues = $this->getBusinessEntityAllowableValues();
        if (!is_null($this->container['businessEntity']) && !in_array($this->container['businessEntity'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'businessEntity', must be one of '%s'",
                $this->container['businessEntity'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['ownerName'] === null) {
            $invalidProperties[] = "'ownerName' can't be null";
        }
        if ($this->container['ownerPhoneNumber'] === null) {
            $invalidProperties[] = "'ownerPhoneNumber' can't be null";
        }
        if ($this->container['ownerIdType'] === null) {
            $invalidProperties[] = "'ownerIdType' can't be null";
        }
        $allowedValues = $this->getOwnerIdTypeAllowableValues();
        if (!is_null($this->container['ownerIdType']) && !in_array($this->container['ownerIdType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'ownerIdType', must be one of '%s'",
                $this->container['ownerIdType'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['ownerIdNo'] === null) {
            $invalidProperties[] = "'ownerIdNo' can't be null";
        }
        if ($this->container['ownerAddress'] === null) {
            $invalidProperties[] = "'ownerAddress' can't be null";
        }
        if ($this->container['directorPics'] === null) {
            $invalidProperties[] = "'directorPics' can't be null";
        }
        if ($this->container['nonDirectorPics'] === null) {
            $invalidProperties[] = "'nonDirectorPics' can't be null";
        }
        if ($this->container['sizeType'] === null) {
            $invalidProperties[] = "'sizeType' can't be null";
        }
        $allowedValues = $this->getSizeTypeAllowableValues();
        if (!is_null($this->container['sizeType']) && !in_array($this->container['sizeType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'sizeType', must be one of '%s'",
                $this->container['sizeType'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPgDivisionFlagAllowableValues();
        if (!is_null($this->container['pgDivisionFlag']) && !in_array($this->container['pgDivisionFlag'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'pgDivisionFlag', must be one of '%s'",
                $this->container['pgDivisionFlag'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }



    public function getApiVersion()
    {
        return $this->container['apiVersion'];
    }

    public function setApiVersion($apiVersion)
    {
        if (is_null($apiVersion)) {
            throw new \InvalidArgumentException('non-nullable apiVersion cannot be null');
        }
        if ((mb_strlen($apiVersion) > 8)) {
            throw new \InvalidArgumentException('invalid length for $apiVersion when calling CreateDivisionRequest., must be smaller than or equal to 8.');
        }

        $this->container['apiVersion'] = $apiVersion;

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
            throw new \InvalidArgumentException('invalid length for $merchantId when calling CreateDivisionRequest., must be smaller than or equal to 21.');
        }

        $this->container['merchantId'] = $merchantId;

        return $this;
    }

    public function getParentDivisionId()
    {
        return $this->container['parentDivisionId'];
    }

    public function setParentDivisionId($parentDivisionId)
    {
        if (is_null($parentDivisionId)) {
            throw new \InvalidArgumentException('non-nullable parentDivisionId cannot be null');
        }
        $this->container['parentDivisionId'] = $parentDivisionId;

        return $this;
    }

    public function getParentRoleType()
    {
        return $this->container['parentRoleType'];
    }

    public function setParentRoleType($parentRoleType)
    {
        if (is_null($parentRoleType)) {
            throw new \InvalidArgumentException('non-nullable parentRoleType cannot be null');
        }
        $allowedValues = $this->getParentRoleTypeAllowableValues();
        if (!in_array($parentRoleType, $allowedValues, true) && !empty($parentRoleType)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'parentRoleType', must be one of '%s'",
                    $parentRoleType,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['parentRoleType'] = $parentRoleType;

        return $this;
    }

    public function getDivisionName()
    {
        return $this->container['divisionName'];
    }

    public function setDivisionName($divisionName)
    {
        if (is_null($divisionName)) {
            throw new \InvalidArgumentException('non-nullable divisionName cannot be null');
        }
        if ((mb_strlen($divisionName) > 256)) {
            throw new \InvalidArgumentException('invalid length for $divisionName when calling CreateDivisionRequest., must be smaller than or equal to 256.');
        }

        $this->container['divisionName'] = $divisionName;

        return $this;
    }

    public function getDivisionAddress()
    {
        return $this->container['divisionAddress'];
    }

    public function setDivisionAddress($divisionAddress)
    {
        if (is_null($divisionAddress)) {
            throw new \InvalidArgumentException('non-nullable divisionAddress cannot be null');
        }
        $this->container['divisionAddress'] = $divisionAddress;

        return $this;
    }

    public function getDivisionDescription()
    {
        return $this->container['divisionDescription'];
    }

    public function setDivisionDescription($divisionDescription)
    {
        if (is_null($divisionDescription)) {
            throw new \InvalidArgumentException('non-nullable divisionDescription cannot be null');
        }
        if ((mb_strlen($divisionDescription) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $divisionDescription when calling CreateDivisionRequest., must be smaller than or equal to 1024.');
        }

        $this->container['divisionDescription'] = $divisionDescription;

        return $this;
    }

    public function getDivisionType()
    {
        return $this->container['divisionType'];
    }

    public function setDivisionType($divisionType)
    {
        if (is_null($divisionType)) {
            throw new \InvalidArgumentException('non-nullable divisionType cannot be null');
        }
        $allowedValues = $this->getDivisionTypeAllowableValues();
        if (!in_array($divisionType, $allowedValues, true) && !empty($divisionType)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'divisionType', must be one of '%s'",
                    $divisionType,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['divisionType'] = $divisionType;

        return $this;
    }

    public function getExternalDivisionId()
    {
        return $this->container['externalDivisionId'];
    }

    public function setExternalDivisionId($externalDivisionId)
    {
        if (is_null($externalDivisionId)) {
            throw new \InvalidArgumentException('non-nullable externalDivisionId cannot be null');
        }
        if ((mb_strlen($externalDivisionId) > 64)) {
            throw new \InvalidArgumentException('invalid length for $externalDivisionId when calling CreateDivisionRequest., must be smaller than or equal to 64.');
        }

        $this->container['externalDivisionId'] = $externalDivisionId;

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

    public function getExtInfo()
    {
        return $this->container['extInfo'];
    }

    public function setExtInfo($extInfo)
    {
        if (is_null($extInfo)) {
            throw new \InvalidArgumentException('non-nullable extInfo cannot be null');
        }
        $this->container['extInfo'] = $extInfo;

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

    public function getBusinessDocs()
    {
        return $this->container['businessDocs'];
    }

    public function setBusinessDocs($businessDocs)
    {
        if (is_null($businessDocs)) {
            throw new \InvalidArgumentException('non-nullable businessDocs cannot be null');
        }
        $this->container['businessDocs'] = $businessDocs;

        return $this;
    }

    public function getBusinessEntity()
    {
        return $this->container['businessEntity'];
    }

    public function setBusinessEntity($businessEntity)
    {
        if (is_null($businessEntity)) {
            throw new \InvalidArgumentException('non-nullable businessEntity cannot be null');
        }
        $allowedValues = $this->getBusinessEntityAllowableValues();
        if (!in_array($businessEntity, $allowedValues, true) && !empty($businessEntity)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'businessEntity', must be one of '%s'",
                    $businessEntity,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['businessEntity'] = $businessEntity;

        return $this;
    }

    public function getOwnerName()
    {
        return $this->container['ownerName'];
    }

    public function setOwnerName($ownerName)
    {
        if (is_null($ownerName)) {
            throw new \InvalidArgumentException('non-nullable ownerName cannot be null');
        }
        $this->container['ownerName'] = $ownerName;

        return $this;
    }

    public function getOwnerPhoneNumber()
    {
        return $this->container['ownerPhoneNumber'];
    }

    public function setOwnerPhoneNumber($ownerPhoneNumber)
    {
        if (is_null($ownerPhoneNumber)) {
            throw new \InvalidArgumentException('non-nullable ownerPhoneNumber cannot be null');
        }
        $this->container['ownerPhoneNumber'] = $ownerPhoneNumber;

        return $this;
    }

    public function getOwnerIdType()
    {
        return $this->container['ownerIdType'];
    }

    public function setOwnerIdType($ownerIdType)
    {
        if (is_null($ownerIdType)) {
            throw new \InvalidArgumentException('non-nullable ownerIdType cannot be null');
        }
        $allowedValues = $this->getOwnerIdTypeAllowableValues();
        if (!in_array($ownerIdType, $allowedValues, true) && !empty($ownerIdType)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'ownerIdType', must be one of '%s'",
                    $ownerIdType,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['ownerIdType'] = $ownerIdType;

        return $this;
    }

    public function getOwnerIdNo()
    {
        return $this->container['ownerIdNo'];
    }

    public function setOwnerIdNo($ownerIdNo)
    {
        if (is_null($ownerIdNo)) {
            throw new \InvalidArgumentException('non-nullable ownerIdNo cannot be null');
        }
        $this->container['ownerIdNo'] = $ownerIdNo;

        return $this;
    }

    public function getOwnerAddress()
    {
        return $this->container['ownerAddress'];
    }

    public function setOwnerAddress($ownerAddress)
    {
        if (is_null($ownerAddress)) {
            throw new \InvalidArgumentException('non-nullable ownerAddress cannot be null');
        }
        $this->container['ownerAddress'] = $ownerAddress;

        return $this;
    }

    public function getDirectorPics()
    {
        return $this->container['directorPics'];
    }

    public function setDirectorPics($directorPics)
    {
        if (is_null($directorPics)) {
            throw new \InvalidArgumentException('non-nullable directorPics cannot be null');
        }
        $this->container['directorPics'] = $directorPics;

        return $this;
    }

    public function getNonDirectorPics()
    {
        return $this->container['nonDirectorPics'];
    }

    public function setNonDirectorPics($nonDirectorPics)
    {
        if (is_null($nonDirectorPics)) {
            throw new \InvalidArgumentException('non-nullable nonDirectorPics cannot be null');
        }
        $this->container['nonDirectorPics'] = $nonDirectorPics;

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
        $this->container['sizeType'] = $sizeType;

        return $this;
    }

    public function getPgDivisionFlag()
    {
        return $this->container['pgDivisionFlag'];
    }

    public function setPgDivisionFlag($pgDivisionFlag)
    {
        if (is_null($pgDivisionFlag)) {
            throw new \InvalidArgumentException('non-nullable pgDivisionFlag cannot be null');
        }
        $allowedValues = $this->getPgDivisionFlagAllowableValues();
        if (!in_array($pgDivisionFlag, $allowedValues, true) && !empty($pgDivisionFlag)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'pgDivisionFlag', must be one of '%s'",
                    $pgDivisionFlag,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['pgDivisionFlag'] = $pgDivisionFlag;

        return $this;
    }


}


