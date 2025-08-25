<?php

namespace Dana\PaymentGateway\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\PaymentGateway\v1\Enum;

class AuditInfo extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'AuditInfo';

    protected static $openAPITypes = [
        'actionReason' => 'string',
        'thirdClientId' => 'string'
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

        if (!is_null($this->container['actionReason']) && (mb_strlen($this->container['actionReason']) > 256)) {
            $invalidProperties[] = "invalid value for 'actionReason', the character length must be smaller than or equal to 256.";
        }

        if (!is_null($this->container['thirdClientId']) && (mb_strlen($this->container['thirdClientId']) > 32)) {
            $invalidProperties[] = "invalid value for 'thirdClientId', the character length must be smaller than or equal to 32.";
        }

        return $invalidProperties;
    }



    public function getActionReason()
    {
        return $this->container['actionReason'];
    }

    public function setActionReason($actionReason)
    {
        if (is_null($actionReason)) {
            throw new \InvalidArgumentException('non-nullable actionReason cannot be null');
        }
        if ((mb_strlen($actionReason) > 256)) {
            throw new \InvalidArgumentException('invalid length for $actionReason when calling AuditInfo., must be smaller than or equal to 256.');
        }

        $this->container['actionReason'] = $actionReason;

        return $this;
    }

    public function getThirdClientId()
    {
        return $this->container['thirdClientId'];
    }

    public function setThirdClientId($thirdClientId)
    {
        if (is_null($thirdClientId)) {
            throw new \InvalidArgumentException('non-nullable thirdClientId cannot be null');
        }
        if ((mb_strlen($thirdClientId) > 32)) {
            throw new \InvalidArgumentException('invalid length for $thirdClientId when calling AuditInfo., must be smaller than or equal to 32.');
        }

        $this->container['thirdClientId'] = $thirdClientId;

        return $this;
    }


}


