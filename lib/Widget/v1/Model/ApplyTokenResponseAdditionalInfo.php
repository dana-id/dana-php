<?php

namespace Dana\Widget\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\Widget\v1\Enum;

class ApplyTokenResponseAdditionalInfo extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'ApplyTokenResponseAdditionalInfo';

    protected static $openAPITypes = [
        'userInfo' => '\Dana\Widget\v1\Model\ApplyTokenResponseAdditionalInfoUserInfo'
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



    public function getUserInfo()
    {
        return $this->container['userInfo'];
    }

    public function setUserInfo($userInfo)
    {
        if (is_null($userInfo)) {
            throw new \InvalidArgumentException('non-nullable userInfo cannot be null');
        }
        $this->container['userInfo'] = $userInfo;

        return $this;
    }


}


