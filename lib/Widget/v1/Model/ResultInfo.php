<?php

namespace Dana\Widget\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\Widget\v1\Enum;

class ResultInfo extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'ResultInfo';

    protected static $openAPITypes = [
        'resultStatus' => 'string',
        'resultCodeId' => 'string',
        'resultCode' => 'string',
        'resultMsg' => 'string'
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

    public const RESULT_STATUS_S = 'S';
    public const RESULT_STATUS_F = 'F';
    public const RESULT_STATUS_U = 'U';

    public function getResultStatusAllowableValues()
    {
        return [
            self::RESULT_STATUS_S,
            self::RESULT_STATUS_F,
            self::RESULT_STATUS_U,
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

        if ($this->container['resultStatus'] === null) {
            $invalidProperties[] = "'resultStatus' can't be null";
        }
        $allowedValues = $this->getResultStatusAllowableValues();
        if (!is_null($this->container['resultStatus']) && !in_array($this->container['resultStatus'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'resultStatus', must be one of '%s'",
                $this->container['resultStatus'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['resultCodeId'] === null) {
            $invalidProperties[] = "'resultCodeId' can't be null";
        }
        if ($this->container['resultCode'] === null) {
            $invalidProperties[] = "'resultCode' can't be null";
        }
        if ($this->container['resultMsg'] === null) {
            $invalidProperties[] = "'resultMsg' can't be null";
        }
        return $invalidProperties;
    }



    public function getResultStatus()
    {
        return $this->container['resultStatus'];
    }

    public function setResultStatus($resultStatus)
    {
        if (is_null($resultStatus)) {
            throw new \InvalidArgumentException('non-nullable resultStatus cannot be null');
        }
        $allowedValues = $this->getResultStatusAllowableValues();
        if (!in_array($resultStatus, $allowedValues, true) && !empty($resultStatus)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'resultStatus', must be one of '%s'",
                    $resultStatus,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['resultStatus'] = $resultStatus;

        return $this;
    }

    public function getResultCodeId()
    {
        return $this->container['resultCodeId'];
    }

    public function setResultCodeId($resultCodeId)
    {
        if (is_null($resultCodeId)) {
            throw new \InvalidArgumentException('non-nullable resultCodeId cannot be null');
        }
        $this->container['resultCodeId'] = $resultCodeId;

        return $this;
    }

    public function getResultCode()
    {
        return $this->container['resultCode'];
    }

    public function setResultCode($resultCode)
    {
        if (is_null($resultCode)) {
            throw new \InvalidArgumentException('non-nullable resultCode cannot be null');
        }
        $this->container['resultCode'] = $resultCode;

        return $this;
    }

    public function getResultMsg()
    {
        return $this->container['resultMsg'];
    }

    public function setResultMsg($resultMsg)
    {
        if (is_null($resultMsg)) {
            throw new \InvalidArgumentException('non-nullable resultMsg cannot be null');
        }
        $this->container['resultMsg'] = $resultMsg;

        return $this;
    }


}


