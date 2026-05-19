<?php

namespace Dana\MerchantManagement\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\MerchantManagement\v1\Enum;

class MerchantContactMobileNo extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'MerchantContactMobileNo';

    protected static $openAPITypes = [
        'mobileNo' => 'string',
        'isVerified' => 'string'
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

    protected array $openAPINullablesSetToNull = [];

    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
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

        if (!is_null($this->container['mobileNo']) && (mb_strlen($this->container['mobileNo']) > 32)) {
            $invalidProperties[] = "invalid value for 'mobileNo', the character length must be smaller than or equal to 32.";
        }

        if (!is_null($this->container['isVerified']) && (mb_strlen($this->container['isVerified']) > 5)) {
            $invalidProperties[] = "invalid value for 'isVerified', the character length must be smaller than or equal to 5.";
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
        if ((mb_strlen($mobileNo) > 32)) {
            throw new \InvalidArgumentException('invalid length for $mobileNo when calling MerchantContactMobileNo., must be smaller than or equal to 32.');
        }

        $this->container['mobileNo'] = $mobileNo;

        return $this;
    }

    public function getIsVerified()
    {
        return $this->container['isVerified'];
    }

    public function setIsVerified($isVerified)
    {
        if (is_null($isVerified)) {
            throw new \InvalidArgumentException('non-nullable isVerified cannot be null');
        }
        if ((mb_strlen($isVerified) > 5)) {
            throw new \InvalidArgumentException('invalid length for $isVerified when calling MerchantContactMobileNo., must be smaller than or equal to 5.');
        }

        $this->container['isVerified'] = $isVerified;

        return $this;
    }


}


