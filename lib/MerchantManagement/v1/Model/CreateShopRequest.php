<?php

namespace Dana\MerchantManagement\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\MerchantManagement\v1\Enum;

class CreateShopRequest extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'CreateShopRequest';

    protected static $openAPITypes = [
        'merchantId' => 'string',
        'parentDivisionId' => 'string',
        'shopParentType' => 'string',
        'mainName' => 'string',
        'shopAddress' => '\Dana\MerchantManagement\v1\Model\AddressInfo',
        'shopDesc' => 'string',
        'externalShopId' => 'string',
        'logoUrlMap' => 'array<string,string>',
        'mccCodes' => 'string[]',
        'sizeType' => 'string',
        'ln' => 'string',
        'lat' => 'string',
        'taxNo' => 'string',
        'brandName' => 'string',
        'taxAddress' => '\Dana\MerchantManagement\v1\Model\AddressInfo',
        'loyalty' => 'string',
        'apiVersion' => 'string',
        'businessEntity' => 'string',
        'businessDocs' => '\Dana\MerchantManagement\v1\Model\BusinessDocs[]',
        'ownerName' => '\Dana\MerchantManagement\v1\Model\UserName',
        'ownerIdType' => 'string',
        'ownerIdNo' => 'string',
        'ownerAddress' => '\Dana\MerchantManagement\v1\Model\AddressInfo',
        'ownerPhoneNumber' => '\Dana\MerchantManagement\v1\Model\MobileNoInfo',
        'shopOwning' => 'string',
        'deviceNumber' => 'string',
        'posNumber' => 'string',
        'directorPics' => '\Dana\MerchantManagement\v1\Model\PicInfo[]',
        'nonDirectorPics' => '\Dana\MerchantManagement\v1\Model\PicInfo[]',
        'shopBizType' => 'string',
        'extInfo' => 'array<string,mixed>'
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

    public const SHOP_PARENT_TYPE_MERCHANT = 'MERCHANT';
    public const SHOP_PARENT_TYPE_DIVISION = 'DIVISION';
    public const SHOP_PARENT_TYPE_EXTERNAL_DIVISION = 'EXTERNAL_DIVISION';
    public const SIZE_TYPE_UMI = 'UMI';
    public const SIZE_TYPE_UKE = 'UKE';
    public const SIZE_TYPE_UME = 'UME';
    public const SIZE_TYPE_UBE = 'UBE';
    public const LOYALTY_TRUE = 'true';
    public const LOYALTY_FALSE = 'false';
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
    public const SHOP_OWNING_DIRECT_OWNED = 'DIRECT_OWNED';
    public const SHOP_OWNING_FRANCHISED = 'FRANCHISED';

    public function getShopParentTypeAllowableValues()
    {
        return [
            self::SHOP_PARENT_TYPE_MERCHANT,
            self::SHOP_PARENT_TYPE_DIVISION,
            self::SHOP_PARENT_TYPE_EXTERNAL_DIVISION,
        ];
    }

    public function getSizeTypeAllowableValues()
    {
        return [
            self::SIZE_TYPE_UMI,
            self::SIZE_TYPE_UKE,
            self::SIZE_TYPE_UME,
            self::SIZE_TYPE_UBE,
        ];
    }

    public function getLoyaltyAllowableValues()
    {
        return [
            self::LOYALTY_TRUE,
            self::LOYALTY_FALSE,
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

    public function getShopOwningAllowableValues()
    {
        return [
            self::SHOP_OWNING_DIRECT_OWNED,
            self::SHOP_OWNING_FRANCHISED,
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

        if ($this->container['merchantId'] === null) {
            $invalidProperties[] = "'merchantId' can't be null";
        }
        if ((mb_strlen($this->container['merchantId']) > 21)) {
            $invalidProperties[] = "invalid value for 'merchantId', the character length must be smaller than or equal to 21.";
        }

        if ($this->container['shopParentType'] === null) {
            $invalidProperties[] = "'shopParentType' can't be null";
        }
        $allowedValues = $this->getShopParentTypeAllowableValues();
        if (!is_null($this->container['shopParentType']) && !in_array($this->container['shopParentType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'shopParentType', must be one of '%s'",
                $this->container['shopParentType'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['mainName'] === null) {
            $invalidProperties[] = "'mainName' can't be null";
        }
        if ((mb_strlen($this->container['mainName']) > 256)) {
            $invalidProperties[] = "invalid value for 'mainName', the character length must be smaller than or equal to 256.";
        }

        if ($this->container['externalShopId'] === null) {
            $invalidProperties[] = "'externalShopId' can't be null";
        }
        if ((mb_strlen($this->container['externalShopId']) > 64)) {
            $invalidProperties[] = "invalid value for 'externalShopId', the character length must be smaller than or equal to 64.";
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

        if (!is_null($this->container['taxNo']) && !preg_match("/^[0-9]{15}$/", $this->container['taxNo'])) {
            $invalidProperties[] = "invalid value for 'taxNo', must be conform to the pattern /^[0-9]{15}$/.";
        }

        $allowedValues = $this->getLoyaltyAllowableValues();
        if (!is_null($this->container['loyalty']) && !in_array($this->container['loyalty'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'loyalty', must be one of '%s'",
                $this->container['loyalty'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getBusinessEntityAllowableValues();
        if (!is_null($this->container['businessEntity']) && !in_array($this->container['businessEntity'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'businessEntity', must be one of '%s'",
                $this->container['businessEntity'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getOwnerIdTypeAllowableValues();
        if (!is_null($this->container['ownerIdType']) && !in_array($this->container['ownerIdType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'ownerIdType', must be one of '%s'",
                $this->container['ownerIdType'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getShopOwningAllowableValues();
        if (!is_null($this->container['shopOwning']) && !in_array($this->container['shopOwning'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'shopOwning', must be one of '%s'",
                $this->container['shopOwning'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
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
            throw new \InvalidArgumentException('invalid length for $merchantId when calling CreateShopRequest., must be smaller than or equal to 21.');
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

    public function getShopParentType()
    {
        return $this->container['shopParentType'];
    }

    public function setShopParentType($shopParentType)
    {
        if (is_null($shopParentType)) {
            throw new \InvalidArgumentException('non-nullable shopParentType cannot be null');
        }
        $allowedValues = $this->getShopParentTypeAllowableValues();
        if (!in_array($shopParentType, $allowedValues, true) && !empty($shopParentType)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'shopParentType', must be one of '%s'",
                    $shopParentType,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['shopParentType'] = $shopParentType;

        return $this;
    }

    public function getMainName()
    {
        return $this->container['mainName'];
    }

    public function setMainName($mainName)
    {
        if (is_null($mainName)) {
            throw new \InvalidArgumentException('non-nullable mainName cannot be null');
        }
        if ((mb_strlen($mainName) > 256)) {
            throw new \InvalidArgumentException('invalid length for $mainName when calling CreateShopRequest., must be smaller than or equal to 256.');
        }

        $this->container['mainName'] = $mainName;

        return $this;
    }

    public function getShopAddress()
    {
        return $this->container['shopAddress'];
    }

    public function setShopAddress($shopAddress)
    {
        if (is_null($shopAddress)) {
            throw new \InvalidArgumentException('non-nullable shopAddress cannot be null');
        }
        $this->container['shopAddress'] = $shopAddress;

        return $this;
    }

    public function getShopDesc()
    {
        return $this->container['shopDesc'];
    }

    public function setShopDesc($shopDesc)
    {
        if (is_null($shopDesc)) {
            throw new \InvalidArgumentException('non-nullable shopDesc cannot be null');
        }
        $this->container['shopDesc'] = $shopDesc;

        return $this;
    }

    public function getExternalShopId()
    {
        return $this->container['externalShopId'];
    }

    public function setExternalShopId($externalShopId)
    {
        if (is_null($externalShopId)) {
            throw new \InvalidArgumentException('non-nullable externalShopId cannot be null');
        }
        if ((mb_strlen($externalShopId) > 64)) {
            throw new \InvalidArgumentException('invalid length for $externalShopId when calling CreateShopRequest., must be smaller than or equal to 64.');
        }

        $this->container['externalShopId'] = $externalShopId;

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

    public function getLn()
    {
        return $this->container['ln'];
    }

    public function setLn($ln)
    {
        if (is_null($ln)) {
            throw new \InvalidArgumentException('non-nullable ln cannot be null');
        }
        $this->container['ln'] = $ln;

        return $this;
    }

    public function getLat()
    {
        return $this->container['lat'];
    }

    public function setLat($lat)
    {
        if (is_null($lat)) {
            throw new \InvalidArgumentException('non-nullable lat cannot be null');
        }
        $this->container['lat'] = $lat;

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

        if ((!preg_match("/^[0-9]{15}$/", ObjectSerializer::toString($taxNo)))) {
            throw new \InvalidArgumentException("invalid value for \$taxNo when calling CreateShopRequest., must conform to the pattern /^[0-9]{15}$/.");
        }

        $this->container['taxNo'] = $taxNo;

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

    public function getLoyalty()
    {
        return $this->container['loyalty'];
    }

    public function setLoyalty($loyalty)
    {
        if (is_null($loyalty)) {
            throw new \InvalidArgumentException('non-nullable loyalty cannot be null');
        }
        $allowedValues = $this->getLoyaltyAllowableValues();
        if (!in_array($loyalty, $allowedValues, true) && !empty($loyalty)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'loyalty', must be one of '%s'",
                    $loyalty,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['loyalty'] = $loyalty;

        return $this;
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
        $this->container['apiVersion'] = $apiVersion;

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

    public function getShopOwning()
    {
        return $this->container['shopOwning'];
    }

    public function setShopOwning($shopOwning)
    {
        if (is_null($shopOwning)) {
            throw new \InvalidArgumentException('non-nullable shopOwning cannot be null');
        }
        $allowedValues = $this->getShopOwningAllowableValues();
        if (!in_array($shopOwning, $allowedValues, true) && !empty($shopOwning)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'shopOwning', must be one of '%s'",
                    $shopOwning,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['shopOwning'] = $shopOwning;

        return $this;
    }

    public function getDeviceNumber()
    {
        return $this->container['deviceNumber'];
    }

    public function setDeviceNumber($deviceNumber)
    {
        if (is_null($deviceNumber)) {
            throw new \InvalidArgumentException('non-nullable deviceNumber cannot be null');
        }
        $this->container['deviceNumber'] = $deviceNumber;

        return $this;
    }

    public function getPosNumber()
    {
        return $this->container['posNumber'];
    }

    public function setPosNumber($posNumber)
    {
        if (is_null($posNumber)) {
            throw new \InvalidArgumentException('non-nullable posNumber cannot be null');
        }
        $this->container['posNumber'] = $posNumber;

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

    public function getShopBizType()
    {
        return $this->container['shopBizType'];
    }

    public function setShopBizType($shopBizType)
    {
        if (is_null($shopBizType)) {
            throw new \InvalidArgumentException('non-nullable shopBizType cannot be null');
        }
        $this->container['shopBizType'] = $shopBizType;

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


}


