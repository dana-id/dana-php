<?php

namespace Dana\MerchantManagement\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\MerchantManagement\v1\Enum;

class PicInfo extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'PicInfo';

    protected static $openAPITypes = [
        'picName' => 'string',
        'picPosition' => 'string'
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



    public function getPicName()
    {
        return $this->container['picName'];
    }

    public function setPicName($picName)
    {
        if (is_null($picName)) {
            throw new \InvalidArgumentException('non-nullable picName cannot be null');
        }
        $this->container['picName'] = $picName;

        return $this;
    }

    public function getPicPosition()
    {
        return $this->container['picPosition'];
    }

    public function setPicPosition($picPosition)
    {
        if (is_null($picPosition)) {
            throw new \InvalidArgumentException('non-nullable picPosition cannot be null');
        }
        $this->container['picPosition'] = $picPosition;

        return $this;
    }


}


