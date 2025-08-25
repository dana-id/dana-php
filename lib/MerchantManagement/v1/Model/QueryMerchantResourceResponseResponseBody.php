<?php

namespace Dana\MerchantManagement\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\MerchantManagement\v1\Enum;

class QueryMerchantResourceResponseResponseBody extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'QueryMerchantResourceResponseResponseBody';

    protected static $openAPITypes = [
        'resultInfo' => '\Dana\MerchantManagement\v1\Model\ResultInfo',
        'merchantResourceInformations' => '\Dana\MerchantManagement\v1\Model\MerchantResourceInformation[]'
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

        if ($this->container['resultInfo'] === null) {
            $invalidProperties[] = "'resultInfo' can't be null";
        }
        return $invalidProperties;
    }



    public function getResultInfo()
    {
        return $this->container['resultInfo'];
    }

    public function setResultInfo($resultInfo)
    {
        if (is_null($resultInfo)) {
            throw new \InvalidArgumentException('non-nullable resultInfo cannot be null');
        }
        $this->container['resultInfo'] = $resultInfo;

        return $this;
    }

    public function getMerchantResourceInformations()
    {
        return $this->container['merchantResourceInformations'];
    }

    public function setMerchantResourceInformations($merchantResourceInformations)
    {
        if (is_null($merchantResourceInformations)) {
            throw new \InvalidArgumentException('non-nullable merchantResourceInformations cannot be null');
        }
        $this->container['merchantResourceInformations'] = $merchantResourceInformations;

        return $this;
    }


}


