<?php

namespace Dana\Widget\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\Widget\v1\Enum;

class InternationalOrderInfoExchangeRate extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'InternationalOrderInfoExchangeRate';

    protected static $openAPITypes = [
        'rate' => 'string',
        'exchangeRelation' => 'string'
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



    public function getRate()
    {
        return $this->container['rate'];
    }

    public function setRate($rate)
    {
        if (is_null($rate)) {
            throw new \InvalidArgumentException('non-nullable rate cannot be null');
        }
        $this->container['rate'] = $rate;

        return $this;
    }

    public function getExchangeRelation()
    {
        return $this->container['exchangeRelation'];
    }

    public function setExchangeRelation($exchangeRelation)
    {
        if (is_null($exchangeRelation)) {
            throw new \InvalidArgumentException('non-nullable exchangeRelation cannot be null');
        }
        $this->container['exchangeRelation'] = $exchangeRelation;

        return $this;
    }


}


