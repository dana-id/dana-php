<?php

namespace Dana\Widget\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\Widget\v1\Enum;

class BalanceInquiryRequest extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'BalanceInquiryRequest';

    protected static $openAPITypes = [
        'partnerReferenceNo' => 'string',
        'balanceTypes' => 'string[]',
        'additionalInfo' => '\Dana\Widget\v1\Model\BalanceInquiryRequestAdditionalInfo'
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

        if (!is_null($this->container['partnerReferenceNo']) && (mb_strlen($this->container['partnerReferenceNo']) > 64)) {
            $invalidProperties[] = "invalid value for 'partnerReferenceNo', the character length must be smaller than or equal to 64.";
        }

        if ($this->container['additionalInfo'] === null) {
            $invalidProperties[] = "'additionalInfo' can't be null";
        }
        return $invalidProperties;
    }



    public function getPartnerReferenceNo()
    {
        return $this->container['partnerReferenceNo'];
    }

    public function setPartnerReferenceNo($partnerReferenceNo)
    {
        if (is_null($partnerReferenceNo)) {
            throw new \InvalidArgumentException('non-nullable partnerReferenceNo cannot be null');
        }
        if ((mb_strlen($partnerReferenceNo) > 64)) {
            throw new \InvalidArgumentException('invalid length for $partnerReferenceNo when calling BalanceInquiryRequest., must be smaller than or equal to 64.');
        }

        $this->container['partnerReferenceNo'] = $partnerReferenceNo;

        return $this;
    }

    public function getBalanceTypes()
    {
        return $this->container['balanceTypes'];
    }

    public function setBalanceTypes($balanceTypes)
    {
        if (is_null($balanceTypes)) {
            throw new \InvalidArgumentException('non-nullable balanceTypes cannot be null');
        }
        $this->container['balanceTypes'] = $balanceTypes;

        return $this;
    }

    public function getAdditionalInfo()
    {
        return $this->container['additionalInfo'];
    }

    public function setAdditionalInfo($additionalInfo)
    {
        if (is_null($additionalInfo)) {
            throw new \InvalidArgumentException('non-nullable additionalInfo cannot be null');
        }
        $this->container['additionalInfo'] = $additionalInfo;

        return $this;
    }


}


