<?php

namespace Dana\Widget\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\Widget\v1\Enum;

class VirtualAccountInfo extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'VirtualAccountInfo';

    protected static $openAPITypes = [
        'virtualAccountCode' => 'string',
        'virtualAccountExpiryTime' => 'string',
        'signature' => 'string'
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

        if ($this->container['virtualAccountCode'] === null) {
            $invalidProperties[] = "'virtualAccountCode' can't be null";
        }
        if ((mb_strlen($this->container['virtualAccountCode']) > 64)) {
            $invalidProperties[] = "invalid value for 'virtualAccountCode', the character length must be smaller than or equal to 64.";
        }

        if ($this->container['virtualAccountExpiryTime'] === null) {
            $invalidProperties[] = "'virtualAccountExpiryTime' can't be null";
        }
        if ((mb_strlen($this->container['virtualAccountExpiryTime']) > 25)) {
            $invalidProperties[] = "invalid value for 'virtualAccountExpiryTime', the character length must be smaller than or equal to 25.";
        }

        if (!preg_match("/^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/", $this->container['virtualAccountExpiryTime'])) {
            $invalidProperties[] = "invalid value for 'virtualAccountExpiryTime', must be conform to the pattern /^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/.";
        }

        if ($this->container['signature'] === null) {
            $invalidProperties[] = "'signature' can't be null";
        }
        return $invalidProperties;
    }



    public function getVirtualAccountCode()
    {
        return $this->container['virtualAccountCode'];
    }

    public function setVirtualAccountCode($virtualAccountCode)
    {
        if (is_null($virtualAccountCode)) {
            throw new \InvalidArgumentException('non-nullable virtualAccountCode cannot be null');
        }
        if ((mb_strlen($virtualAccountCode) > 64)) {
            throw new \InvalidArgumentException('invalid length for $virtualAccountCode when calling VirtualAccountInfo., must be smaller than or equal to 64.');
        }

        $this->container['virtualAccountCode'] = $virtualAccountCode;

        return $this;
    }

    public function getVirtualAccountExpiryTime()
    {
        return $this->container['virtualAccountExpiryTime'];
    }

    public function setVirtualAccountExpiryTime($virtualAccountExpiryTime)
    {
        if (is_null($virtualAccountExpiryTime)) {
            throw new \InvalidArgumentException('non-nullable virtualAccountExpiryTime cannot be null');
        }
        if ((mb_strlen($virtualAccountExpiryTime) > 25)) {
            throw new \InvalidArgumentException('invalid length for $virtualAccountExpiryTime when calling VirtualAccountInfo., must be smaller than or equal to 25.');
        }
        if ((!preg_match("/^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/", ObjectSerializer::toString($virtualAccountExpiryTime)))) {
            throw new \InvalidArgumentException("invalid value for \$virtualAccountExpiryTime when calling VirtualAccountInfo., must conform to the pattern /^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/.");
        }

        $this->container['virtualAccountExpiryTime'] = $virtualAccountExpiryTime;

        return $this;
    }

    public function getSignature()
    {
        return $this->container['signature'];
    }

    public function setSignature($signature)
    {
        if (is_null($signature)) {
            throw new \InvalidArgumentException('non-nullable signature cannot be null');
        }
        $this->container['signature'] = $signature;

        return $this;
    }


}


