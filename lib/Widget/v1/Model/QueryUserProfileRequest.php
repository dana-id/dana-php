<?php

namespace Dana\Widget\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\Widget\v1\Enum;

class QueryUserProfileRequest extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'QueryUserProfileRequest';

    protected static $openAPITypes = [
        'userResources' => 'string[]'
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

    public const USER_RESOURCES_BALANCE = 'BALANCE';
    public const USER_RESOURCES_TRANSACTION_URL = 'TRANSACTION_URL';
    public const USER_RESOURCES_MASK_DANA_ID = 'MASK_DANA_ID';
    public const USER_RESOURCES_TOPUP_URL = 'TOPUP_URL';
    public const USER_RESOURCES_OTT = 'OTT';
    public const USER_RESOURCES_USER_KYC = 'USER_KYC';

    public function getUserResourcesAllowableValues()
    {
        return [
            self::USER_RESOURCES_BALANCE,
            self::USER_RESOURCES_TRANSACTION_URL,
            self::USER_RESOURCES_MASK_DANA_ID,
            self::USER_RESOURCES_TOPUP_URL,
            self::USER_RESOURCES_OTT,
            self::USER_RESOURCES_USER_KYC,
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
        if ((count($this->container['userResources']) < 1)) {
            $invalidProperties[] = "invalid value for 'userResources', number of items must be greater than or equal to 1.";
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


        if ((count($userResources) < 1)) {
            throw new \InvalidArgumentException('invalid length for $userResources when calling QueryUserProfileRequest., number of items must be greater than or equal to 1.');
        }
        $this->container['userResources'] = $userResources;

        return $this;
    }


}


