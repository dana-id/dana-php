<?php

namespace Dana\MerchantManagement\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\MerchantManagement\v1\Enum;

class UpdateShopRequest extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'UpdateShopRequest';

    protected static $openAPITypes = [
        'shopId' => 'string',
        'merchantId' => 'string',
        'shopIdType' => 'string',
        'mainName' => 'string',
        'shopAddress' => '\Dana\MerchantManagement\v1\Model\AddressInfo',
        'shopDesc' => 'string',
        'newExternalShopId' => 'string',
        'mccCodes' => 'string[]',
        'logoUrlMap' => 'array<string,string>',
        'extInfo' => 'array<string,mixed>',
        'sizeType' => 'string',
        'ln' => 'string',
        'lat' => 'string',
        'loyalty' => 'string',
        'ownerAddress' => '\Dana\MerchantManagement\v1\Model\AddressInfo',
        'ownerName' => '\Dana\MerchantManagement\v1\Model\UserName',
        'ownerPhoneNumber' => '\Dana\MerchantManagement\v1\Model\MobileNoInfo',
        'ownerIdType' => 'string',
        'ownerIdNo' => 'string',
        'deviceNumber' => 'string',
        'posNumber' => 'string',
        'apiVersion' => 'string',
        'businessEntity' => 'string',
        'shopOwning' => 'string',
        'shopBizType' => 'string',
        'businessDocs' => '\Dana\MerchantManagement\v1\Model\BusinessDocs[]',
        'businessEndDate' => 'string',
        'taxNo' => 'string',
        'taxAddress' => '\Dana\MerchantManagement\v1\Model\AddressInfo',
        'brandName' => 'string',
        'directorPics' => '\Dana\MerchantManagement\v1\Model\PicInfo[]',
        'nonDirectorPics' => '\Dana\MerchantManagement\v1\Model\PicInfo[]'
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

    public const SHOP_ID_TYPE_INNER_ID = 'INNER_ID';
    public const SHOP_ID_TYPE_EXTERNAL_ID = 'EXTERNAL_ID';
    public const SIZE_TYPE_UMI = 'UMI';
    public const SIZE_TYPE_UKE = 'UKE';
    public const SIZE_TYPE_UME = 'UME';
    public const SIZE_TYPE_UBE = 'UBE';
    public const LOYALTY_TRUE = 'true';
    public const LOYALTY_FALSE = 'false';
    public const OWNER_ID_TYPE_KTP = 'KTP';
    public const OWNER_ID_TYPE_SIM = 'SIM';
    public const OWNER_ID_TYPE_PASSPORT = 'PASSPORT';
    public const OWNER_ID_TYPE_SIUP = 'SIUP';
    public const OWNER_ID_TYPE_NIB = 'NIB';
    public const BUSINESS_ENTITY_PT = 'pt';
    public const BUSINESS_ENTITY_CV = 'cv';
    public const BUSINESS_ENTITY_INDIVIDU = 'individu';
    public const BUSINESS_ENTITY_USAHA_DAGANG = 'usaha_dagang';
    public const BUSINESS_ENTITY_YAYASAN = 'yayasan';
    public const BUSINESS_ENTITY_KOPERASI = 'koperasi';
    public const SHOP_OWNING_DIRECT_OWNED = 'DIRECT_OWNED';
    public const SHOP_OWNING_FRANCHISED = 'FRANCHISED';
    public const SHOP_BIZ_TYPE_ONLINE = 'ONLINE';
    public const SHOP_BIZ_TYPE_OFFLINE = 'OFFLINE';

    public function getShopIdTypeAllowableValues()
    {
        return [
            self::SHOP_ID_TYPE_INNER_ID,
            self::SHOP_ID_TYPE_EXTERNAL_ID,
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

    public function getShopOwningAllowableValues()
    {
        return [
            self::SHOP_OWNING_DIRECT_OWNED,
            self::SHOP_OWNING_FRANCHISED,
        ];
    }

    public function getShopBizTypeAllowableValues()
    {
        return [
            self::SHOP_BIZ_TYPE_ONLINE,
            self::SHOP_BIZ_TYPE_OFFLINE,
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

        if ($this->container['shopId'] === null) {
            $invalidProperties[] = "'shopId' can't be null";
        }
        if ($this->container['merchantId'] === null) {
            $invalidProperties[] = "'merchantId' can't be null";
        }
        if ((mb_strlen($this->container['merchantId']) > 21)) {
            $invalidProperties[] = "invalid value for 'merchantId', the character length must be smaller than or equal to 21.";
        }

        if ($this->container['shopIdType'] === null) {
            $invalidProperties[] = "'shopIdType' can't be null";
        }
        $allowedValues = $this->getShopIdTypeAllowableValues();
        if (!is_null($this->container['shopIdType']) && !in_array($this->container['shopIdType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'shopIdType', must be one of '%s'",
                $this->container['shopIdType'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['mainName']) && (mb_strlen($this->container['mainName']) > 256)) {
            $invalidProperties[] = "invalid value for 'mainName', the character length must be smaller than or equal to 256.";
        }

        if ($this->container['shopAddress'] === null) {
            $invalidProperties[] = "'shopAddress' can't be null";
        }
        if (!is_null($this->container['shopDesc']) && (mb_strlen($this->container['shopDesc']) > 1024)) {
            $invalidProperties[] = "invalid value for 'shopDesc', the character length must be smaller than or equal to 1024.";
        }

        if (!is_null($this->container['newExternalShopId']) && (mb_strlen($this->container['newExternalShopId']) > 64)) {
            $invalidProperties[] = "invalid value for 'newExternalShopId', the character length must be smaller than or equal to 64.";
        }

        $allowedValues = $this->getSizeTypeAllowableValues();
        if (!is_null($this->container['sizeType']) && !in_array($this->container['sizeType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'sizeType', must be one of '%s'",
                $this->container['sizeType'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['ln']) && (mb_strlen($this->container['ln']) > 10)) {
            $invalidProperties[] = "invalid value for 'ln', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['lat']) && (mb_strlen($this->container['lat']) > 10)) {
            $invalidProperties[] = "invalid value for 'lat', the character length must be smaller than or equal to 10.";
        }

        $allowedValues = $this->getLoyaltyAllowableValues();
        if (!is_null($this->container['loyalty']) && !in_array($this->container['loyalty'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'loyalty', must be one of '%s'",
                $this->container['loyalty'],
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

        if (!is_null($this->container['apiVersion']) && (mb_strlen($this->container['apiVersion']) > 8)) {
            $invalidProperties[] = "invalid value for 'apiVersion', the character length must be smaller than or equal to 8.";
        }

        $allowedValues = $this->getBusinessEntityAllowableValues();
        if (!is_null($this->container['businessEntity']) && !in_array($this->container['businessEntity'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'businessEntity', must be one of '%s'",
                $this->container['businessEntity'],
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

        $allowedValues = $this->getShopBizTypeAllowableValues();
        if (!is_null($this->container['shopBizType']) && !in_array($this->container['shopBizType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'shopBizType', must be one of '%s'",
                $this->container['shopBizType'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['businessEndDate']) && (mb_strlen($this->container['businessEndDate']) > 10)) {
            $invalidProperties[] = "invalid value for 'businessEndDate', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['taxNo']) && !preg_match("/^[0-9]{15}$/", $this->container['taxNo'])) {
            $invalidProperties[] = "invalid value for 'taxNo', must be conform to the pattern /^[0-9]{15}$/.";
        }

        if (!is_null($this->container['brandName']) && (mb_strlen($this->container['brandName']) > 256)) {
            $invalidProperties[] = "invalid value for 'brandName', the character length must be smaller than or equal to 256.";
        }

        return $invalidProperties;
    }



    public function getShopId()
    {
        return $this->container['shopId'];
    }

    public function setShopId($shopId)
    {
        if (is_null($shopId)) {
            throw new \InvalidArgumentException('non-nullable shopId cannot be null');
        }
        $this->container['shopId'] = $shopId;

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
            throw new \InvalidArgumentException('invalid length for $merchantId when calling UpdateShopRequest., must be smaller than or equal to 21.');
        }

        $this->container['merchantId'] = $merchantId;

        return $this;
    }

    public function getShopIdType()
    {
        return $this->container['shopIdType'];
    }

    public function setShopIdType($shopIdType)
    {
        if (is_null($shopIdType)) {
            throw new \InvalidArgumentException('non-nullable shopIdType cannot be null');
        }
        $allowedValues = $this->getShopIdTypeAllowableValues();
        if (!in_array($shopIdType, $allowedValues, true) && !empty($shopIdType)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'shopIdType', must be one of '%s'",
                    $shopIdType,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['shopIdType'] = $shopIdType;

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
            throw new \InvalidArgumentException('invalid length for $mainName when calling UpdateShopRequest., must be smaller than or equal to 256.');
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
        if ((mb_strlen($shopDesc) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $shopDesc when calling UpdateShopRequest., must be smaller than or equal to 1024.');
        }

        $this->container['shopDesc'] = $shopDesc;

        return $this;
    }

    public function getNewExternalShopId()
    {
        return $this->container['newExternalShopId'];
    }

    public function setNewExternalShopId($newExternalShopId)
    {
        if (is_null($newExternalShopId)) {
            throw new \InvalidArgumentException('non-nullable newExternalShopId cannot be null');
        }
        if ((mb_strlen($newExternalShopId) > 64)) {
            throw new \InvalidArgumentException('invalid length for $newExternalShopId when calling UpdateShopRequest., must be smaller than or equal to 64.');
        }

        $this->container['newExternalShopId'] = $newExternalShopId;

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
        if ((mb_strlen($ln) > 10)) {
            throw new \InvalidArgumentException('invalid length for $ln when calling UpdateShopRequest., must be smaller than or equal to 10.');
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
        if ((mb_strlen($lat) > 10)) {
            throw new \InvalidArgumentException('invalid length for $lat when calling UpdateShopRequest., must be smaller than or equal to 10.');
        }

        $this->container['lat'] = $lat;

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
            throw new \InvalidArgumentException('invalid length for $apiVersion when calling UpdateShopRequest., must be smaller than or equal to 8.');
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

    public function getShopBizType()
    {
        return $this->container['shopBizType'];
    }

    public function setShopBizType($shopBizType)
    {
        if (is_null($shopBizType)) {
            throw new \InvalidArgumentException('non-nullable shopBizType cannot be null');
        }
        $allowedValues = $this->getShopBizTypeAllowableValues();
        if (!in_array($shopBizType, $allowedValues, true) && !empty($shopBizType)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'shopBizType', must be one of '%s'",
                    $shopBizType,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['shopBizType'] = $shopBizType;

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

    public function getBusinessEndDate()
    {
        return $this->container['businessEndDate'];
    }

    public function setBusinessEndDate($businessEndDate)
    {
        if (is_null($businessEndDate)) {
            throw new \InvalidArgumentException('non-nullable businessEndDate cannot be null');
        }
        if ((mb_strlen($businessEndDate) > 10)) {
            throw new \InvalidArgumentException('invalid length for $businessEndDate when calling UpdateShopRequest., must be smaller than or equal to 10.');
        }

        $this->container['businessEndDate'] = $businessEndDate;

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
            throw new \InvalidArgumentException("invalid value for \$taxNo when calling UpdateShopRequest., must conform to the pattern /^[0-9]{15}$/.");
        }

        $this->container['taxNo'] = $taxNo;

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
            throw new \InvalidArgumentException('invalid length for $brandName when calling UpdateShopRequest., must be smaller than or equal to 256.');
        }

        $this->container['brandName'] = $brandName;

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


}


