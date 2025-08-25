<?php

namespace Dana\Widget\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\Widget\v1\Enum;

class ApplyOTTResponseUserResourcesInner extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'ApplyOTTResponseUserResourcesInner';

    protected static $openAPITypes = [
        'resourceType' => 'string',
        'value' => 'string'
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

        if (!is_null($this->container['resourceType']) && (mb_strlen($this->container['resourceType']) > 32)) {
            $invalidProperties[] = "invalid value for 'resourceType', the character length must be smaller than or equal to 32.";
        }

        if (!is_null($this->container['value']) && (mb_strlen($this->container['value']) > 128)) {
            $invalidProperties[] = "invalid value for 'value', the character length must be smaller than or equal to 128.";
        }

        return $invalidProperties;
    }



    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    public function setResourceType($resourceType)
    {
        if (is_null($resourceType)) {
            throw new \InvalidArgumentException('non-nullable resourceType cannot be null');
        }
        if ((mb_strlen($resourceType) > 32)) {
            throw new \InvalidArgumentException('invalid length for $resourceType when calling ApplyOTTResponseUserResourcesInner., must be smaller than or equal to 32.');
        }

        $this->container['resourceType'] = $resourceType;

        return $this;
    }

    public function getValue()
    {
        return $this->container['value'];
    }

    public function setValue($value)
    {
        if (is_null($value)) {
            throw new \InvalidArgumentException('non-nullable value cannot be null');
        }
        if ((mb_strlen($value) > 128)) {
            throw new \InvalidArgumentException('invalid length for $value when calling ApplyOTTResponseUserResourcesInner., must be smaller than or equal to 128.');
        }

        $this->container['value'] = $value;

        return $this;
    }


}


