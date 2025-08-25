<?php

namespace Dana\Widget\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\Widget\v1\Enum;

class ApplyTokenResponseAdditionalInfoUserInfo extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'ApplyTokenResponseAdditionalInfoUserInfo';

    protected static $openAPITypes = [
        'publicUserId' => 'string'
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

        if (!is_null($this->container['publicUserId']) && (mb_strlen($this->container['publicUserId']) > 64)) {
            $invalidProperties[] = "invalid value for 'publicUserId', the character length must be smaller than or equal to 64.";
        }

        return $invalidProperties;
    }



    public function getPublicUserId()
    {
        return $this->container['publicUserId'];
    }

    public function setPublicUserId($publicUserId)
    {
        if (is_null($publicUserId)) {
            throw new \InvalidArgumentException('non-nullable publicUserId cannot be null');
        }
        if ((mb_strlen($publicUserId) > 64)) {
            throw new \InvalidArgumentException('invalid length for $publicUserId when calling ApplyTokenResponseAdditionalInfoUserInfo., must be smaller than or equal to 64.');
        }

        $this->container['publicUserId'] = $publicUserId;

        return $this;
    }


}


