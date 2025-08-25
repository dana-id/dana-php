<?php

namespace Dana\MerchantManagement\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\MerchantManagement\v1\Enum;

class UserName extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'UserName';

    protected static $openAPITypes = [
        'firstName' => 'string',
        'lastName' => 'string'
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



    public function getFirstName()
    {
        return $this->container['firstName'];
    }

    public function setFirstName($firstName)
    {
        if (is_null($firstName)) {
            throw new \InvalidArgumentException('non-nullable firstName cannot be null');
        }
        $this->container['firstName'] = $firstName;

        return $this;
    }

    public function getLastName()
    {
        return $this->container['lastName'];
    }

    public function setLastName($lastName)
    {
        if (is_null($lastName)) {
            throw new \InvalidArgumentException('non-nullable lastName cannot be null');
        }
        $this->container['lastName'] = $lastName;

        return $this;
    }


}


