<?php

namespace Dana\MerchantManagement\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\MerchantManagement\v1\Enum;

class ShopResourceInfo extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'ShopResourceInfo';

    protected static $openAPITypes = [
        'merchantId' => 'string',
        'parentDivisionId' => 'string',
        'parentRoleType' => 'string',
        'mainName' => 'string',
        'sizeType' => 'string',
        'shopAddress' => '\Dana\MerchantManagement\v1\Model\AddressInfo',
        'externalShopId' => 'string',
        'logoUrlMap' => 'array<string,string>',
        'extInfo' => 'object',
        'ln' => 'string',
        'lat' => 'string',
        'nmid' => 'string'
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
        $this->container['parentRoleType'] = $parentRoleType;

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
        $this->container['mainName'] = $mainName;

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
        $this->container['sizeType'] = $sizeType;

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

    public function getExternalShopId()
    {
        return $this->container['externalShopId'];
    }

    public function setExternalShopId($externalShopId)
    {
        if (is_null($externalShopId)) {
            throw new \InvalidArgumentException('non-nullable externalShopId cannot be null');
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

    public function getNmid()
    {
        return $this->container['nmid'];
    }

    public function setNmid($nmid)
    {
        if (is_null($nmid)) {
            throw new \InvalidArgumentException('non-nullable nmid cannot be null');
        }
        $this->container['nmid'] = $nmid;

        return $this;
    }


}


