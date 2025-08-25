<?php

namespace Dana\Disbursement\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\Disbursement\v1\Enum;

class BankAccountInquiryResponseAdditionalInfo extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'BankAccountInquiryResponseAdditionalInfo';

    protected static $openAPITypes = [
        'feeAmount' => '\Dana\Disbursement\v1\Model\Money'
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

        if ($this->container['feeAmount'] === null) {
            $invalidProperties[] = "'feeAmount' can't be null";
        }
        return $invalidProperties;
    }



    public function getFeeAmount()
    {
        return $this->container['feeAmount'];
    }

    public function setFeeAmount($feeAmount)
    {
        if (is_null($feeAmount)) {
            throw new \InvalidArgumentException('non-nullable feeAmount cannot be null');
        }
        $this->container['feeAmount'] = $feeAmount;

        return $this;
    }


}


