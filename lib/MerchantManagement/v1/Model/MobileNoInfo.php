<?php

namespace Dana\MerchantManagement\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\MerchantManagement\v1\Enum;

class MobileNoInfo extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'MobileNoInfo';

    protected static $openAPITypes = [
        'mobileNo' => 'string',
        'mobileId' => 'string',
        'verified' => 'string'
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

    public const VERIFIED_TRUE = 'true';
    public const VERIFIED_FALSE = 'false';

    public function getVerifiedAllowableValues()
    {
        return [
            self::VERIFIED_TRUE,
            self::VERIFIED_FALSE,
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

        $allowedValues = $this->getVerifiedAllowableValues();
        if (!is_null($this->container['verified']) && !in_array($this->container['verified'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'verified', must be one of '%s'",
                $this->container['verified'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }



    public function getMobileNo()
    {
        return $this->container['mobileNo'];
    }

    public function setMobileNo($mobileNo)
    {
        if (is_null($mobileNo)) {
            throw new \InvalidArgumentException('non-nullable mobileNo cannot be null');
        }
        $this->container['mobileNo'] = $mobileNo;

        return $this;
    }

    public function getMobileId()
    {
        return $this->container['mobileId'];
    }

    public function setMobileId($mobileId)
    {
        if (is_null($mobileId)) {
            throw new \InvalidArgumentException('non-nullable mobileId cannot be null');
        }
        $this->container['mobileId'] = $mobileId;

        return $this;
    }

    public function getVerified()
    {
        return $this->container['verified'];
    }

    public function setVerified($verified)
    {
        if (is_null($verified)) {
            throw new \InvalidArgumentException('non-nullable verified cannot be null');
        }
        $allowedValues = $this->getVerifiedAllowableValues();
        if (!in_array($verified, $allowedValues, true) && !empty($verified)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'verified', must be one of '%s'",
                    $verified,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['verified'] = $verified;

        return $this;
    }


}


