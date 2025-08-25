<?php

namespace Dana\MerchantManagement\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\MerchantManagement\v1\Enum;

class QueryDivisionResponseResponse extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'QueryDivisionResponseResponse';

    protected static $openAPITypes = [
        'head' => '\Dana\MerchantManagement\v1\Model\QueryDivisionResponseResponseHead',
        'body' => '\Dana\MerchantManagement\v1\Model\QueryDivisionResponseResponseBody'
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

        if ($this->container['head'] === null) {
            $invalidProperties[] = "'head' can't be null";
        }
        if ($this->container['body'] === null) {
            $invalidProperties[] = "'body' can't be null";
        }
        return $invalidProperties;
    }



    public function getHead()
    {
        return $this->container['head'];
    }

    public function setHead($head)
    {
        if (is_null($head)) {
            throw new \InvalidArgumentException('non-nullable head cannot be null');
        }
        $this->container['head'] = $head;

        return $this;
    }

    public function getBody()
    {
        return $this->container['body'];
    }

    public function setBody($body)
    {
        if (is_null($body)) {
            throw new \InvalidArgumentException('non-nullable body cannot be null');
        }
        $this->container['body'] = $body;

        return $this;
    }


}


