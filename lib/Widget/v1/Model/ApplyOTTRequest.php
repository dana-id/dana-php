<?php

namespace Dana\Widget\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\Widget\v1\Enum;

class ApplyOTTRequest extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'ApplyOTTRequest';

    protected static $openAPITypes = [
        'userResources' => 'string[]',
        'additionalInfo' => '\Dana\Widget\v1\Model\ApplyOTTRequestAdditionalInfo'
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

    public const USER_RESOURCES_OTT = 'OTT';

    public function getUserResourcesAllowableValues()
    {
        return [
            self::USER_RESOURCES_OTT,
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

        if ($this->container['userResources'] === null) {
            $invalidProperties[] = "'userResources' can't be null";
        }
        if ($this->container['additionalInfo'] === null) {
            $invalidProperties[] = "'additionalInfo' can't be null";
        }
        return $invalidProperties;
    }



    public function getUserResources()
    {
        return $this->container['userResources'];
    }

    public function setUserResources($userResources)
    {
        if (is_null($userResources)) {
            throw new \InvalidArgumentException('non-nullable userResources cannot be null');
        }
        $allowedValues = $this->getUserResourcesAllowableValues();
        if (array_diff($userResources, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'userResources', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['userResources'] = $userResources;

        return $this;
    }

    public function getAdditionalInfo()
    {
        return $this->container['additionalInfo'];
    }

    public function setAdditionalInfo($additionalInfo)
    {
        if (is_null($additionalInfo)) {
            throw new \InvalidArgumentException('non-nullable additionalInfo cannot be null');
        }
        $this->container['additionalInfo'] = $additionalInfo;

        return $this;
    }


}


