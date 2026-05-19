<?php

namespace Dana\MerchantManagement\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\MerchantManagement\v1\Enum;

class QueryMerchantInfoResponseResponseBody extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'QueryMerchantInfoResponseResponseBody';

    protected static $openAPITypes = [
        'resultInfo' => '\Dana\MerchantManagement\v1\Model\MemberAssetResultInfo',
        'merchantInformation' => '\Dana\MerchantManagement\v1\Model\MerchantInformation'
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

    public function getMerchantInformation()
    {
        return $this->container['merchantInformation'];
    }

    public function setMerchantInformation($merchantInformation)
    {
        if (is_null($merchantInformation)) {
            throw new \InvalidArgumentException('non-nullable merchantInformation cannot be null');
        }
        $this->container['merchantInformation'] = $merchantInformation;

        return $this;
    }


}


