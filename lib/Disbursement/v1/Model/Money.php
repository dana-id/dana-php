<?php

namespace Dana\Disbursement\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\Disbursement\v1\Enum;

class Money extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'Money';

    protected static $openAPITypes = [
        'value' => 'string',
        'currency' => 'string'
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

        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
        }
        if ((mb_strlen($this->container['value']) > 19)) {
            $invalidProperties[] = "invalid value for 'value', the character length must be smaller than or equal to 19.";
        }

        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ((mb_strlen($this->container['currency']) > 3)) {
            $invalidProperties[] = "invalid value for 'currency', the character length must be smaller than or equal to 3.";
        }

        return $invalidProperties;
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
        if ((mb_strlen($value) > 19)) {
            throw new \InvalidArgumentException('invalid length for $value when calling Money., must be smaller than or equal to 19.');
        }

        $this->container['value'] = $value;

        return $this;
    }

    public function getCurrency()
    {
        return $this->container['currency'];
    }

    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
        }
        if ((mb_strlen($currency) > 3)) {
            throw new \InvalidArgumentException('invalid length for $currency when calling Money., must be smaller than or equal to 3.');
        }

        $this->container['currency'] = $currency;

        return $this;
    }


}


