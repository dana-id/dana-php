<?php

namespace Dana\Widget\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\Widget\v1\Enum;

class TimeDetail extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'TimeDetail';

    protected static $openAPITypes = [
        'createdTime' => 'string',
        'expiryTime' => 'string',
        'paidTimes' => 'string[]',
        'confirmedTimes' => 'string[]',
        'cancelledTime' => 'string'
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

        if ($this->container['createdTime'] === null) {
            $invalidProperties[] = "'createdTime' can't be null";
        }
        if ((mb_strlen($this->container['createdTime']) > 25)) {
            $invalidProperties[] = "invalid value for 'createdTime', the character length must be smaller than or equal to 25.";
        }

        if (!preg_match("/^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/", $this->container['createdTime'])) {
            $invalidProperties[] = "invalid value for 'createdTime', must be conform to the pattern /^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/.";
        }

        if ($this->container['expiryTime'] === null) {
            $invalidProperties[] = "'expiryTime' can't be null";
        }
        if ((mb_strlen($this->container['expiryTime']) > 25)) {
            $invalidProperties[] = "invalid value for 'expiryTime', the character length must be smaller than or equal to 25.";
        }

        if (!preg_match("/^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/", $this->container['expiryTime'])) {
            $invalidProperties[] = "invalid value for 'expiryTime', must be conform to the pattern /^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/.";
        }

        if (!is_null($this->container['cancelledTime']) && (mb_strlen($this->container['cancelledTime']) > 25)) {
            $invalidProperties[] = "invalid value for 'cancelledTime', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['cancelledTime']) && !preg_match("/^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/", $this->container['cancelledTime'])) {
            $invalidProperties[] = "invalid value for 'cancelledTime', must be conform to the pattern /^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/.";
        }

        return $invalidProperties;
    }



    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    public function setCreatedTime($createdTime)
    {
        if (is_null($createdTime)) {
            throw new \InvalidArgumentException('non-nullable createdTime cannot be null');
        }
        if ((mb_strlen($createdTime) > 25)) {
            throw new \InvalidArgumentException('invalid length for $createdTime when calling TimeDetail., must be smaller than or equal to 25.');
        }
        if ((!preg_match("/^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/", ObjectSerializer::toString($createdTime)))) {
            throw new \InvalidArgumentException("invalid value for \$createdTime when calling TimeDetail., must conform to the pattern /^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/.");
        }

        $this->container['createdTime'] = $createdTime;

        return $this;
    }

    public function getExpiryTime()
    {
        return $this->container['expiryTime'];
    }

    public function setExpiryTime($expiryTime)
    {
        if (is_null($expiryTime)) {
            throw new \InvalidArgumentException('non-nullable expiryTime cannot be null');
        }
        if ((mb_strlen($expiryTime) > 25)) {
            throw new \InvalidArgumentException('invalid length for $expiryTime when calling TimeDetail., must be smaller than or equal to 25.');
        }
        if ((!preg_match("/^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/", ObjectSerializer::toString($expiryTime)))) {
            throw new \InvalidArgumentException("invalid value for \$expiryTime when calling TimeDetail., must conform to the pattern /^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/.");
        }

        $this->container['expiryTime'] = $expiryTime;

        return $this;
    }

    public function getPaidTimes()
    {
        return $this->container['paidTimes'];
    }

    public function setPaidTimes($paidTimes)
    {
        if (is_null($paidTimes)) {
            throw new \InvalidArgumentException('non-nullable paidTimes cannot be null');
        }
        $this->container['paidTimes'] = $paidTimes;

        return $this;
    }

    public function getConfirmedTimes()
    {
        return $this->container['confirmedTimes'];
    }

    public function setConfirmedTimes($confirmedTimes)
    {
        if (is_null($confirmedTimes)) {
            throw new \InvalidArgumentException('non-nullable confirmedTimes cannot be null');
        }
        $this->container['confirmedTimes'] = $confirmedTimes;

        return $this;
    }

    public function getCancelledTime()
    {
        return $this->container['cancelledTime'];
    }

    public function setCancelledTime($cancelledTime)
    {
        if (is_null($cancelledTime)) {
            throw new \InvalidArgumentException('non-nullable cancelledTime cannot be null');
        }
        if ((mb_strlen($cancelledTime) > 25)) {
            throw new \InvalidArgumentException('invalid length for $cancelledTime when calling TimeDetail., must be smaller than or equal to 25.');
        }
        if ((!preg_match("/^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/", ObjectSerializer::toString($cancelledTime)))) {
            throw new \InvalidArgumentException("invalid value for \$cancelledTime when calling TimeDetail., must conform to the pattern /^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/.");
        }

        $this->container['cancelledTime'] = $cancelledTime;

        return $this;
    }


}


