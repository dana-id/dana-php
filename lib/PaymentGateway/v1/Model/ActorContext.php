<?php

namespace Dana\PaymentGateway\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\PaymentGateway\v1\Enum;

class ActorContext extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'ActorContext';

    protected static $openAPITypes = [
        'actorId' => 'string',
        'actorType' => 'string'
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

    public const ACTOR_TYPE_USER = 'USER';
    public const ACTOR_TYPE_MERCHANT = 'MERCHANT';
    public const ACTOR_TYPE_MERCHANT_OPERATOR = 'MERCHANT_OPERATOR';
    public const ACTOR_TYPE_BACK_OFFICE = 'BACK_OFFICE';
    public const ACTOR_TYPE_SYSTEM = 'SYSTEM';

    public function getActorTypeAllowableValues()
    {
        return [
            self::ACTOR_TYPE_USER,
            self::ACTOR_TYPE_MERCHANT,
            self::ACTOR_TYPE_MERCHANT_OPERATOR,
            self::ACTOR_TYPE_BACK_OFFICE,
            self::ACTOR_TYPE_SYSTEM,
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

        if (!is_null($this->container['actorId']) && (mb_strlen($this->container['actorId']) > 64)) {
            $invalidProperties[] = "invalid value for 'actorId', the character length must be smaller than or equal to 64.";
        }

        $allowedValues = $this->getActorTypeAllowableValues();
        if (!is_null($this->container['actorType']) && !in_array($this->container['actorType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'actorType', must be one of '%s'",
                $this->container['actorType'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['actorType']) && (mb_strlen($this->container['actorType']) > 32)) {
            $invalidProperties[] = "invalid value for 'actorType', the character length must be smaller than or equal to 32.";
        }

        return $invalidProperties;
    }



    public function getActorId()
    {
        return $this->container['actorId'];
    }

    public function setActorId($actorId)
    {
        if (is_null($actorId)) {
            throw new \InvalidArgumentException('non-nullable actorId cannot be null');
        }
        if ((mb_strlen($actorId) > 64)) {
            throw new \InvalidArgumentException('invalid length for $actorId when calling ActorContext., must be smaller than or equal to 64.');
        }

        $this->container['actorId'] = $actorId;

        return $this;
    }

    public function getActorType()
    {
        return $this->container['actorType'];
    }

    public function setActorType($actorType)
    {
        if (is_null($actorType)) {
            throw new \InvalidArgumentException('non-nullable actorType cannot be null');
        }
        $allowedValues = $this->getActorTypeAllowableValues();
        if (!in_array($actorType, $allowedValues, true) && !empty($actorType)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'actorType', must be one of '%s'",
                    $actorType,
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($actorType) > 32)) {
            throw new \InvalidArgumentException('invalid length for $actorType when calling ActorContext., must be smaller than or equal to 32.');
        }

        $this->container['actorType'] = $actorType;

        return $this;
    }


}


