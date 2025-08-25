<?php

namespace Dana\MerchantManagement\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\MerchantManagement\v1\Enum;

class QueryMerchantResourceRequest extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'QueryMerchantResourceRequest';

    protected static $openAPITypes = [
        'requestMerchantId' => 'string',
        'merchantResourceInfoList' => 'string[]'
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

    public const MERCHANT_RESOURCE_INFO_LIST_MERCHANT_DEPOSIT_BALANCE = 'MERCHANT_DEPOSIT_BALANCE';
    public const MERCHANT_RESOURCE_INFO_LIST_MERCHANT_AVAILABLE_BALANCE = 'MERCHANT_AVAILABLE_BALANCE';
    public const MERCHANT_RESOURCE_INFO_LIST_MERCHANT_TOTAL_BALANCE = 'MERCHANT_TOTAL_BALANCE';

    public function getMerchantResourceInfoListAllowableValues()
    {
        return [
            self::MERCHANT_RESOURCE_INFO_LIST_MERCHANT_DEPOSIT_BALANCE,
            self::MERCHANT_RESOURCE_INFO_LIST_MERCHANT_AVAILABLE_BALANCE,
            self::MERCHANT_RESOURCE_INFO_LIST_MERCHANT_TOTAL_BALANCE,
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

        if ($this->container['requestMerchantId'] === null) {
            $invalidProperties[] = "'requestMerchantId' can't be null";
        }
        if ($this->container['merchantResourceInfoList'] === null) {
            $invalidProperties[] = "'merchantResourceInfoList' can't be null";
        }
        if ((count($this->container['merchantResourceInfoList']) < 1)) {
            $invalidProperties[] = "invalid value for 'merchantResourceInfoList', number of items must be greater than or equal to 1.";
        }

        return $invalidProperties;
    }



    public function getRequestMerchantId()
    {
        return $this->container['requestMerchantId'];
    }

    public function setRequestMerchantId($requestMerchantId)
    {
        if (is_null($requestMerchantId)) {
            throw new \InvalidArgumentException('non-nullable requestMerchantId cannot be null');
        }
        $this->container['requestMerchantId'] = $requestMerchantId;

        return $this;
    }

    public function getMerchantResourceInfoList()
    {
        return $this->container['merchantResourceInfoList'];
    }

    public function setMerchantResourceInfoList($merchantResourceInfoList)
    {
        if (is_null($merchantResourceInfoList)) {
            throw new \InvalidArgumentException('non-nullable merchantResourceInfoList cannot be null');
        }
        $allowedValues = $this->getMerchantResourceInfoListAllowableValues();
        if (array_diff($merchantResourceInfoList, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'merchantResourceInfoList', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }


        if ((count($merchantResourceInfoList) < 1)) {
            throw new \InvalidArgumentException('invalid length for $merchantResourceInfoList when calling QueryMerchantResourceRequest., number of items must be greater than or equal to 1.');
        }
        $this->container['merchantResourceInfoList'] = $merchantResourceInfoList;

        return $this;
    }


}


