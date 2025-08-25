<?php

namespace Dana\Widget\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\Widget\v1\Enum;

class ServiceInfo extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'ServiceInfo';

    protected static $openAPITypes = [
        'serviceType' => 'string',
        'serviceScenario' => 'string',
        'extendInfo' => 'string'
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

    public const SERVICE_TYPE_PARKING = 'PARKING';
    public const SERVICE_TYPE_INVESTMENT = 'INVESTMENT';
    public const SERVICE_SCENARIO_SCAN_AND_PAY = 'SCAN_AND_PAY';
    public const SERVICE_SCENARIO_EXIT_AND_PAY = 'EXIT_AND_PAY';
    public const SERVICE_SCENARIO_EMAS_PURCHASE = 'EMAS_PURCHASE';

    public function getServiceTypeAllowableValues()
    {
        return [
            self::SERVICE_TYPE_PARKING,
            self::SERVICE_TYPE_INVESTMENT,
        ];
    }

    public function getServiceScenarioAllowableValues()
    {
        return [
            self::SERVICE_SCENARIO_SCAN_AND_PAY,
            self::SERVICE_SCENARIO_EXIT_AND_PAY,
            self::SERVICE_SCENARIO_EMAS_PURCHASE,
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

        $allowedValues = $this->getServiceTypeAllowableValues();
        if (!is_null($this->container['serviceType']) && !in_array($this->container['serviceType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'serviceType', must be one of '%s'",
                $this->container['serviceType'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getServiceScenarioAllowableValues();
        if (!is_null($this->container['serviceScenario']) && !in_array($this->container['serviceScenario'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'serviceScenario', must be one of '%s'",
                $this->container['serviceScenario'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['extendInfo']) && (mb_strlen($this->container['extendInfo']) > 4096)) {
            $invalidProperties[] = "invalid value for 'extendInfo', the character length must be smaller than or equal to 4096.";
        }

        return $invalidProperties;
    }



    public function getServiceType()
    {
        return $this->container['serviceType'];
    }

    public function setServiceType($serviceType)
    {
        if (is_null($serviceType)) {
            throw new \InvalidArgumentException('non-nullable serviceType cannot be null');
        }
        $allowedValues = $this->getServiceTypeAllowableValues();
        if (!in_array($serviceType, $allowedValues, true) && !empty($serviceType)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'serviceType', must be one of '%s'",
                    $serviceType,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['serviceType'] = $serviceType;

        return $this;
    }

    public function getServiceScenario()
    {
        return $this->container['serviceScenario'];
    }

    public function setServiceScenario($serviceScenario)
    {
        if (is_null($serviceScenario)) {
            throw new \InvalidArgumentException('non-nullable serviceScenario cannot be null');
        }
        $allowedValues = $this->getServiceScenarioAllowableValues();
        if (!in_array($serviceScenario, $allowedValues, true) && !empty($serviceScenario)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'serviceScenario', must be one of '%s'",
                    $serviceScenario,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['serviceScenario'] = $serviceScenario;

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
            throw new \InvalidArgumentException('invalid length for $extendInfo when calling ServiceInfo., must be smaller than or equal to 4096.');
        }

        $this->container['extendInfo'] = $extendInfo;

        return $this;
    }


}


