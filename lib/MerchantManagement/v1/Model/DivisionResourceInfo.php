<?php

namespace Dana\MerchantManagement\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\MerchantManagement\v1\Enum;

class DivisionResourceInfo extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'DivisionResourceInfo';

    protected static $openAPITypes = [
        'divisionId' => 'string',
        'merchantId' => 'string',
        'parentRoleType' => 'string',
        'contactAddress' => '\Dana\MerchantManagement\v1\Model\AddressInfo',
        'divisionDescription' => 'string',
        'divisionType' => 'string',
        'divisionName' => 'string',
        'externalDivisionId' => 'string',
        'pgDivisionFlag' => 'string'
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

    public const PARENT_ROLE_TYPE_MERCHANT = 'MERCHANT';
    public const PARENT_ROLE_TYPE_DIVISION = 'DIVISION';
    public const PARENT_ROLE_TYPE_EXTERNAL_DIVISION = 'EXTERNAL_DIVISION';
    public const DIVISION_TYPE_REGION = 'REGION';
    public const DIVISION_TYPE_AREA = 'AREA';
    public const DIVISION_TYPE_BRANCH = 'BRANCH';
    public const DIVISION_TYPE_OUTLET = 'OUTLET';
    public const DIVISION_TYPE_STORE = 'STORE';
    public const DIVISION_TYPE_KIOSK = 'KIOSK';
    public const DIVISION_TYPE_STALL = 'STALL';
    public const DIVISION_TYPE_COUNTER = 'COUNTER';
    public const DIVISION_TYPE_BOOTH = 'BOOTH';
    public const DIVISION_TYPE_POINT_OF_SALE = 'POINT_OF_SALE';
    public const DIVISION_TYPE_VENDING_MACHINE = 'VENDING_MACHINE';
    public const PG_DIVISION_FLAG_TRUE = 'true';
    public const PG_DIVISION_FLAG_FALSE = 'false';

    public function getParentRoleTypeAllowableValues()
    {
        return [
            self::PARENT_ROLE_TYPE_MERCHANT,
            self::PARENT_ROLE_TYPE_DIVISION,
            self::PARENT_ROLE_TYPE_EXTERNAL_DIVISION,
        ];
    }

    public function getDivisionTypeAllowableValues()
    {
        return [
            self::DIVISION_TYPE_REGION,
            self::DIVISION_TYPE_AREA,
            self::DIVISION_TYPE_BRANCH,
            self::DIVISION_TYPE_OUTLET,
            self::DIVISION_TYPE_STORE,
            self::DIVISION_TYPE_KIOSK,
            self::DIVISION_TYPE_STALL,
            self::DIVISION_TYPE_COUNTER,
            self::DIVISION_TYPE_BOOTH,
            self::DIVISION_TYPE_POINT_OF_SALE,
            self::DIVISION_TYPE_VENDING_MACHINE,
        ];
    }

    public function getPgDivisionFlagAllowableValues()
    {
        return [
            self::PG_DIVISION_FLAG_TRUE,
            self::PG_DIVISION_FLAG_FALSE,
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

        $allowedValues = $this->getParentRoleTypeAllowableValues();
        if (!is_null($this->container['parentRoleType']) && !in_array($this->container['parentRoleType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'parentRoleType', must be one of '%s'",
                $this->container['parentRoleType'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getDivisionTypeAllowableValues();
        if (!is_null($this->container['divisionType']) && !in_array($this->container['divisionType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'divisionType', must be one of '%s'",
                $this->container['divisionType'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPgDivisionFlagAllowableValues();
        if (!is_null($this->container['pgDivisionFlag']) && !in_array($this->container['pgDivisionFlag'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'pgDivisionFlag', must be one of '%s'",
                $this->container['pgDivisionFlag'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
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

    public function getMerchantId()
    {
        return $this->container['merchantId'];
    }

    public function setMerchantId($merchantId)
    {
        if (is_null($merchantId)) {
            throw new \InvalidArgumentException('non-nullable merchantId cannot be null');
        }
        $this->container['merchantId'] = $merchantId;

        return $this;
    }

    public function getParentRoleType()
    {
        return $this->container['parentRoleType'];
    }

    public function setParentRoleType($parentRoleType)
    {
        if (is_null($parentRoleType)) {
            throw new \InvalidArgumentException('non-nullable parentRoleType cannot be null');
        }
        $allowedValues = $this->getParentRoleTypeAllowableValues();
        if (!in_array($parentRoleType, $allowedValues, true) && !empty($parentRoleType)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'parentRoleType', must be one of '%s'",
                    $parentRoleType,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['parentRoleType'] = $parentRoleType;

        return $this;
    }

    public function getContactAddress()
    {
        return $this->container['contactAddress'];
    }

    public function setContactAddress($contactAddress)
    {
        if (is_null($contactAddress)) {
            throw new \InvalidArgumentException('non-nullable contactAddress cannot be null');
        }
        $this->container['contactAddress'] = $contactAddress;

        return $this;
    }

    public function getDivisionDescription()
    {
        return $this->container['divisionDescription'];
    }

    public function setDivisionDescription($divisionDescription)
    {
        if (is_null($divisionDescription)) {
            throw new \InvalidArgumentException('non-nullable divisionDescription cannot be null');
        }
        $this->container['divisionDescription'] = $divisionDescription;

        return $this;
    }

    public function getDivisionType()
    {
        return $this->container['divisionType'];
    }

    public function setDivisionType($divisionType)
    {
        if (is_null($divisionType)) {
            throw new \InvalidArgumentException('non-nullable divisionType cannot be null');
        }
        $allowedValues = $this->getDivisionTypeAllowableValues();
        if (!in_array($divisionType, $allowedValues, true) && !empty($divisionType)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'divisionType', must be one of '%s'",
                    $divisionType,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['divisionType'] = $divisionType;

        return $this;
    }

    public function getDivisionName()
    {
        return $this->container['divisionName'];
    }

    public function setDivisionName($divisionName)
    {
        if (is_null($divisionName)) {
            throw new \InvalidArgumentException('non-nullable divisionName cannot be null');
        }
        $this->container['divisionName'] = $divisionName;

        return $this;
    }

    public function getExternalDivisionId()
    {
        return $this->container['externalDivisionId'];
    }

    public function setExternalDivisionId($externalDivisionId)
    {
        if (is_null($externalDivisionId)) {
            throw new \InvalidArgumentException('non-nullable externalDivisionId cannot be null');
        }
        $this->container['externalDivisionId'] = $externalDivisionId;

        return $this;
    }

    public function getPgDivisionFlag()
    {
        return $this->container['pgDivisionFlag'];
    }

    public function setPgDivisionFlag($pgDivisionFlag)
    {
        if (is_null($pgDivisionFlag)) {
            throw new \InvalidArgumentException('non-nullable pgDivisionFlag cannot be null');
        }
        $allowedValues = $this->getPgDivisionFlagAllowableValues();
        if (!in_array($pgDivisionFlag, $allowedValues, true) && !empty($pgDivisionFlag)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'pgDivisionFlag', must be one of '%s'",
                    $pgDivisionFlag,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['pgDivisionFlag'] = $pgDivisionFlag;

        return $this;
    }


}


