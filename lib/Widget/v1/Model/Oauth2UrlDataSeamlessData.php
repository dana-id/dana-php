<?php

namespace Dana\Widget\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\Widget\v1\Enum;

class Oauth2UrlDataSeamlessData extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'Oauth2UrlDataSeamlessData';

    protected static $openAPITypes = [
        'bizScenario' => 'string',
        'mobileNumber' => 'string',
        'verifiedTime' => 'string',
        'externalUid' => 'string',
        'deviceId' => 'string',
        'skipRegisterConsult' => 'bool'
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

        return $invalidProperties;
    }



    public function getBizScenario()
    {
        return $this->container['bizScenario'];
    }

    public function setBizScenario($bizScenario)
    {
        if (is_null($bizScenario)) {
            throw new \InvalidArgumentException('non-nullable bizScenario cannot be null');
        }
        $this->container['bizScenario'] = $bizScenario;

        return $this;
    }

    public function getMobileNumber()
    {
        return $this->container['mobileNumber'];
    }

    public function setMobileNumber($mobileNumber)
    {
        if (is_null($mobileNumber)) {
            throw new \InvalidArgumentException('non-nullable mobileNumber cannot be null');
        }
        $this->container['mobileNumber'] = $mobileNumber;

        return $this;
    }

    public function getVerifiedTime()
    {
        return $this->container['verifiedTime'];
    }

    public function setVerifiedTime($verifiedTime)
    {
        if (is_null($verifiedTime)) {
            throw new \InvalidArgumentException('non-nullable verifiedTime cannot be null');
        }
        $this->container['verifiedTime'] = $verifiedTime;

        return $this;
    }

    public function getExternalUid()
    {
        return $this->container['externalUid'];
    }

    public function setExternalUid($externalUid)
    {
        if (is_null($externalUid)) {
            throw new \InvalidArgumentException('non-nullable externalUid cannot be null');
        }
        $this->container['externalUid'] = $externalUid;

        return $this;
    }

    public function getDeviceId()
    {
        return $this->container['deviceId'];
    }

    public function setDeviceId($deviceId)
    {
        if (is_null($deviceId)) {
            throw new \InvalidArgumentException('non-nullable deviceId cannot be null');
        }
        $this->container['deviceId'] = $deviceId;

        return $this;
    }

    public function getSkipRegisterConsult()
    {
        return $this->container['skipRegisterConsult'];
    }

    public function setSkipRegisterConsult($skipRegisterConsult)
    {
        if (is_null($skipRegisterConsult)) {
            throw new \InvalidArgumentException('non-nullable skipRegisterConsult cannot be null');
        }
        $this->container['skipRegisterConsult'] = $skipRegisterConsult;

        return $this;
    }


}


