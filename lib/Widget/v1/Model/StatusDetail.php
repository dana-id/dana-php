<?php

namespace Dana\Widget\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\Widget\v1\Enum;

class StatusDetail extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'StatusDetail';

    protected static $openAPITypes = [
        'acquirementStatus' => 'string',
        'frozen' => 'string',
        'cancelled' => 'string'
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

    public const ACQUIREMENT_STATUS_INIT = 'INIT';
    public const ACQUIREMENT_STATUS_SUCCESS = 'SUCCESS';
    public const ACQUIREMENT_STATUS_CLOSED = 'CLOSED';
    public const ACQUIREMENT_STATUS_PAYING = 'PAYING';
    public const ACQUIREMENT_STATUS_MERCHANT_ACCEPT = 'MERCHANT_ACCEPT';
    public const ACQUIREMENT_STATUS_CANCELLED = 'CANCELLED';

    public function getAcquirementStatusAllowableValues()
    {
        return [
            self::ACQUIREMENT_STATUS_INIT,
            self::ACQUIREMENT_STATUS_SUCCESS,
            self::ACQUIREMENT_STATUS_CLOSED,
            self::ACQUIREMENT_STATUS_PAYING,
            self::ACQUIREMENT_STATUS_MERCHANT_ACCEPT,
            self::ACQUIREMENT_STATUS_CANCELLED,
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

        if ($this->container['acquirementStatus'] === null) {
            $invalidProperties[] = "'acquirementStatus' can't be null";
        }
        $allowedValues = $this->getAcquirementStatusAllowableValues();
        if (!is_null($this->container['acquirementStatus']) && !in_array($this->container['acquirementStatus'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'acquirementStatus', must be one of '%s'",
                $this->container['acquirementStatus'],
                implode("', '", $allowedValues)
            );
        }

        if ((mb_strlen($this->container['acquirementStatus']) > 64)) {
            $invalidProperties[] = "invalid value for 'acquirementStatus', the character length must be smaller than or equal to 64.";
        }

        return $invalidProperties;
    }



    public function getAcquirementStatus()
    {
        return $this->container['acquirementStatus'];
    }

    public function setAcquirementStatus($acquirementStatus)
    {
        if (is_null($acquirementStatus)) {
            throw new \InvalidArgumentException('non-nullable acquirementStatus cannot be null');
        }
        $allowedValues = $this->getAcquirementStatusAllowableValues();
        if (!in_array($acquirementStatus, $allowedValues, true) && !empty($acquirementStatus)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'acquirementStatus', must be one of '%s'",
                    $acquirementStatus,
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($acquirementStatus) > 64)) {
            throw new \InvalidArgumentException('invalid length for $acquirementStatus when calling StatusDetail., must be smaller than or equal to 64.');
        }

        $this->container['acquirementStatus'] = $acquirementStatus;

        return $this;
    }

    public function getFrozen()
    {
        return $this->container['frozen'];
    }

    public function setFrozen($frozen)
    {
        if (is_null($frozen)) {
            throw new \InvalidArgumentException('non-nullable frozen cannot be null');
        }
        $this->container['frozen'] = $frozen;

        return $this;
    }

    public function getCancelled()
    {
        return $this->container['cancelled'];
    }

    public function setCancelled($cancelled)
    {
        if (is_null($cancelled)) {
            throw new \InvalidArgumentException('non-nullable cancelled cannot be null');
        }
        $this->container['cancelled'] = $cancelled;

        return $this;
    }


}


