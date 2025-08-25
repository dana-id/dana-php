<?php

namespace Dana\PaymentGateway\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\PaymentGateway\v1\Enum;

class CreateOrderByApiAdditionalInfo extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'CreateOrderByApiAdditionalInfo';

    protected static $openAPITypes = [
        'mcc' => 'string',
        'extendInfo' => 'string',
        'envInfo' => '\Dana\PaymentGateway\v1\Model\EnvInfo',
        'order' => '\Dana\PaymentGateway\v1\Model\OrderApiObject'
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

        if ($this->container['mcc'] === null) {
            $invalidProperties[] = "'mcc' can't be null";
        }
        if ((mb_strlen($this->container['mcc']) > 64)) {
            $invalidProperties[] = "invalid value for 'mcc', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['extendInfo']) && (mb_strlen($this->container['extendInfo']) > 4096)) {
            $invalidProperties[] = "invalid value for 'extendInfo', the character length must be smaller than or equal to 4096.";
        }

        if ($this->container['envInfo'] === null) {
            $invalidProperties[] = "'envInfo' can't be null";
        }
        return $invalidProperties;
    }



    public function getMcc()
    {
        return $this->container['mcc'];
    }

    public function setMcc($mcc)
    {
        if (is_null($mcc)) {
            throw new \InvalidArgumentException('non-nullable mcc cannot be null');
        }
        if ((mb_strlen($mcc) > 64)) {
            throw new \InvalidArgumentException('invalid length for $mcc when calling CreateOrderByApiAdditionalInfo., must be smaller than or equal to 64.');
        }

        $this->container['mcc'] = $mcc;

        return $this;
    }

    public function getExtendInfo()
    {
        return $this->container['extendInfo'];
    }

    public function setExtendInfo($extendInfo)
    {
        if (is_null($extendInfo)) {
            throw new \InvalidArgumentException('non-nullable extendInfo cannot be null');
        }
        if ((mb_strlen($extendInfo) > 4096)) {
            throw new \InvalidArgumentException('invalid length for $extendInfo when calling CreateOrderByApiAdditionalInfo., must be smaller than or equal to 4096.');
        }

        $this->container['extendInfo'] = $extendInfo;

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

    public function getOrder()
    {
        return $this->container['order'];
    }

    public function setOrder($order)
    {
        if (is_null($order)) {
            throw new \InvalidArgumentException('non-nullable order cannot be null');
        }
        $this->container['order'] = $order;

        return $this;
    }


}


