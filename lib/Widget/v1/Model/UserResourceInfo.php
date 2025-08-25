<?php

namespace Dana\Widget\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\Widget\v1\Enum;

class UserResourceInfo extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'UserResourceInfo';

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

    public const RESOURCE_TYPE_BALANCE = 'BALANCE';
    public const RESOURCE_TYPE_TRANSACTION_URL = 'TRANSACTION_URL';
    public const RESOURCE_TYPE_MASK_DANA_ID = 'MASK_DANA_ID';
    public const RESOURCE_TYPE_TOPUP_URL = 'TOPUP_URL';
    public const RESOURCE_TYPE_OTT = 'OTT';
    public const RESOURCE_TYPE_USER_KYC = 'USER_KYC';

    public function getResourceTypeAllowableValues()
    {
        return [
            self::RESOURCE_TYPE_BALANCE,
            self::RESOURCE_TYPE_TRANSACTION_URL,
            self::RESOURCE_TYPE_MASK_DANA_ID,
            self::RESOURCE_TYPE_TOPUP_URL,
            self::RESOURCE_TYPE_OTT,
            self::RESOURCE_TYPE_USER_KYC,
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

        if ($this->container['resourceType'] === null) {
            $invalidProperties[] = "'resourceType' can't be null";
        }
        $allowedValues = $this->getResourceTypeAllowableValues();
        if (!is_null($this->container['resourceType']) && !in_array($this->container['resourceType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'resourceType', must be one of '%s'",
                $this->container['resourceType'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
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
        $allowedValues = $this->getResourceTypeAllowableValues();
        if (!in_array($resourceType, $allowedValues, true) && !empty($resourceType)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'resourceType', must be one of '%s'",
                    $resourceType,
                    implode("', '", $allowedValues)
                )
            );
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
        $this->container['value'] = $value;

        return $this;
    }


}


