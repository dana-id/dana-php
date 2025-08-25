<?php

namespace Dana\MerchantManagement\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\MerchantManagement\v1\Enum;

class QueryDivisionRequest extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'QueryDivisionRequest';

    protected static $openAPITypes = [
        'merchantId' => 'string',
        'divisionId' => 'string',
        'divisionIdType' => 'string'
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

    public const DIVISION_ID_TYPE_INNER_ID = 'INNER_ID';
    public const DIVISION_ID_TYPE_EXTERNAL_ID = 'EXTERNAL_ID';

    public function getDivisionIdTypeAllowableValues()
    {
        return [
            self::DIVISION_ID_TYPE_INNER_ID,
            self::DIVISION_ID_TYPE_EXTERNAL_ID,
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

        if (!is_null($this->container['merchantId']) && (mb_strlen($this->container['merchantId']) > 21)) {
            $invalidProperties[] = "invalid value for 'merchantId', the character length must be smaller than or equal to 21.";
        }

        if ($this->container['divisionId'] === null) {
            $invalidProperties[] = "'divisionId' can't be null";
        }
        if ($this->container['divisionIdType'] === null) {
            $invalidProperties[] = "'divisionIdType' can't be null";
        }
        $allowedValues = $this->getDivisionIdTypeAllowableValues();
        if (!is_null($this->container['divisionIdType']) && !in_array($this->container['divisionIdType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'divisionIdType', must be one of '%s'",
                $this->container['divisionIdType'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }



    public function getMerchantId()
    {
        return $this->container['merchantId'];
    }

    public function setMerchantId($merchantId)
    {
        if (is_null($merchantId)) {
            throw new \InvalidArgumentException('non-nullable merchantId cannot be null');
        }
        if ((mb_strlen($merchantId) > 21)) {
            throw new \InvalidArgumentException('invalid length for $merchantId when calling QueryDivisionRequest., must be smaller than or equal to 21.');
        }

        $this->container['merchantId'] = $merchantId;

        return $this;
    }

    public function getDivisionId()
    {
        return $this->container['divisionId'];
    }

    public function setDivisionId($divisionId)
    {
        if (is_null($divisionId)) {
            throw new \InvalidArgumentException('non-nullable divisionId cannot be null');
        }
        $this->container['divisionId'] = $divisionId;

        return $this;
    }

    public function getDivisionIdType()
    {
        return $this->container['divisionIdType'];
    }

    public function setDivisionIdType($divisionIdType)
    {
        if (is_null($divisionIdType)) {
            throw new \InvalidArgumentException('non-nullable divisionIdType cannot be null');
        }
        $allowedValues = $this->getDivisionIdTypeAllowableValues();
        if (!in_array($divisionIdType, $allowedValues, true) && !empty($divisionIdType)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'divisionIdType', must be one of '%s'",
                    $divisionIdType,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['divisionIdType'] = $divisionIdType;

        return $this;
    }


}


