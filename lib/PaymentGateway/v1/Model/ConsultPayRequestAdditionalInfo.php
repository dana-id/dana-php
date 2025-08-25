<?php

namespace Dana\PaymentGateway\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\PaymentGateway\v1\Enum;

class ConsultPayRequestAdditionalInfo extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'ConsultPayRequestAdditionalInfo';

    protected static $openAPITypes = [
        'buyer' => '\Dana\PaymentGateway\v1\Model\Buyer',
        'envInfo' => '\Dana\PaymentGateway\v1\Model\EnvInfo',
        'merchantTransType' => 'string'
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

        if ($this->container['buyer'] === null) {
            $invalidProperties[] = "'buyer' can't be null";
        }
        if ($this->container['envInfo'] === null) {
            $invalidProperties[] = "'envInfo' can't be null";
        }
        if (!is_null($this->container['merchantTransType']) && (mb_strlen($this->container['merchantTransType']) > 64)) {
            $invalidProperties[] = "invalid value for 'merchantTransType', the character length must be smaller than or equal to 64.";
        }

        return $invalidProperties;
    }



    public function getBuyer()
    {
        return $this->container['buyer'];
    }

    public function setBuyer($buyer)
    {
        if (is_null($buyer)) {
            throw new \InvalidArgumentException('non-nullable buyer cannot be null');
        }
        $this->container['buyer'] = $buyer;

        return $this;
    }

    public function getEnvInfo()
    {
        return $this->container['envInfo'];
    }

    public function setEnvInfo($envInfo)
    {
        if (is_null($envInfo)) {
            throw new \InvalidArgumentException('non-nullable envInfo cannot be null');
        }
        $this->container['envInfo'] = $envInfo;

        return $this;
    }

    public function getMerchantTransType()
    {
        return $this->container['merchantTransType'];
    }

    public function setMerchantTransType($merchantTransType)
    {
        if (is_null($merchantTransType)) {
            throw new \InvalidArgumentException('non-nullable merchantTransType cannot be null');
        }
        if ((mb_strlen($merchantTransType) > 64)) {
            throw new \InvalidArgumentException('invalid length for $merchantTransType when calling ConsultPayRequestAdditionalInfo., must be smaller than or equal to 64.');
        }

        $this->container['merchantTransType'] = $merchantTransType;

        return $this;
    }


}


