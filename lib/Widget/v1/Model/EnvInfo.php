<?php

namespace Dana\Widget\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\Widget\v1\Enum;

class EnvInfo extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'EnvInfo';

    protected static $openAPITypes = [
        'sessionId' => 'string',
        'tokenId' => 'string',
        'websiteLanguage' => 'string',
        'clientIp' => 'string',
        'osType' => 'string',
        'appVersion' => 'string',
        'sdkVersion' => 'string',
        'sourcePlatform' => 'string',
        'orderOsType' => 'string',
        'merchantAppVersion' => 'string',
        'terminalType' => 'string',
        'orderTerminalType' => 'string',
        'extendInfo' => 'string',
        'clientKey' => 'string'
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

    public const SOURCE_PLATFORM_IPG = 'IPG';
    public const TERMINAL_TYPE_APP = 'APP';
    public const TERMINAL_TYPE_WEB = 'WEB';
    public const TERMINAL_TYPE_WAP = 'WAP';
    public const TERMINAL_TYPE_SYSTEM = 'SYSTEM';
    public const ORDER_TERMINAL_TYPE_APP = 'APP';
    public const ORDER_TERMINAL_TYPE_WEB = 'WEB';
    public const ORDER_TERMINAL_TYPE_WAP = 'WAP';
    public const ORDER_TERMINAL_TYPE_SYSTEM = 'SYSTEM';

    public function getSourcePlatformAllowableValues()
    {
        return [
            self::SOURCE_PLATFORM_IPG,
        ];
    }

    public function getTerminalTypeAllowableValues()
    {
        return [
            self::TERMINAL_TYPE_APP,
            self::TERMINAL_TYPE_WEB,
            self::TERMINAL_TYPE_WAP,
            self::TERMINAL_TYPE_SYSTEM,
        ];
    }

    public function getOrderTerminalTypeAllowableValues()
    {
        return [
            self::ORDER_TERMINAL_TYPE_APP,
            self::ORDER_TERMINAL_TYPE_WEB,
            self::ORDER_TERMINAL_TYPE_WAP,
            self::ORDER_TERMINAL_TYPE_SYSTEM,
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

        if (!is_null($this->container['sessionId']) && (mb_strlen($this->container['sessionId']) > 128)) {
            $invalidProperties[] = "invalid value for 'sessionId', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['tokenId']) && (mb_strlen($this->container['tokenId']) > 128)) {
            $invalidProperties[] = "invalid value for 'tokenId', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['websiteLanguage']) && (mb_strlen($this->container['websiteLanguage']) > 16)) {
            $invalidProperties[] = "invalid value for 'websiteLanguage', the character length must be smaller than or equal to 16.";
        }

        if (!is_null($this->container['clientIp']) && (mb_strlen($this->container['clientIp']) > 32)) {
            $invalidProperties[] = "invalid value for 'clientIp', the character length must be smaller than or equal to 32.";
        }

        if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) > 128)) {
            $invalidProperties[] = "invalid value for 'osType', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['appVersion']) && (mb_strlen($this->container['appVersion']) > 128)) {
            $invalidProperties[] = "invalid value for 'appVersion', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['sdkVersion']) && (mb_strlen($this->container['sdkVersion']) > 128)) {
            $invalidProperties[] = "invalid value for 'sdkVersion', the character length must be smaller than or equal to 128.";
        }

        if ($this->container['sourcePlatform'] === null) {
            $invalidProperties[] = "'sourcePlatform' can't be null";
        }
        $allowedValues = $this->getSourcePlatformAllowableValues();
        if (!is_null($this->container['sourcePlatform']) && !in_array($this->container['sourcePlatform'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'sourcePlatform', must be one of '%s'",
                $this->container['sourcePlatform'],
                implode("', '", $allowedValues)
            );
        }

        if ((mb_strlen($this->container['sourcePlatform']) > 32)) {
            $invalidProperties[] = "invalid value for 'sourcePlatform', the character length must be smaller than or equal to 32.";
        }

        if (!is_null($this->container['orderOsType']) && (mb_strlen($this->container['orderOsType']) > 128)) {
            $invalidProperties[] = "invalid value for 'orderOsType', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['merchantAppVersion']) && (mb_strlen($this->container['merchantAppVersion']) > 128)) {
            $invalidProperties[] = "invalid value for 'merchantAppVersion', the character length must be smaller than or equal to 128.";
        }

        if ($this->container['terminalType'] === null) {
            $invalidProperties[] = "'terminalType' can't be null";
        }
        $allowedValues = $this->getTerminalTypeAllowableValues();
        if (!is_null($this->container['terminalType']) && !in_array($this->container['terminalType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'terminalType', must be one of '%s'",
                $this->container['terminalType'],
                implode("', '", $allowedValues)
            );
        }

        if ((mb_strlen($this->container['terminalType']) > 32)) {
            $invalidProperties[] = "invalid value for 'terminalType', the character length must be smaller than or equal to 32.";
        }

        $allowedValues = $this->getOrderTerminalTypeAllowableValues();
        if (!is_null($this->container['orderTerminalType']) && !in_array($this->container['orderTerminalType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'orderTerminalType', must be one of '%s'",
                $this->container['orderTerminalType'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['orderTerminalType']) && (mb_strlen($this->container['orderTerminalType']) > 32)) {
            $invalidProperties[] = "invalid value for 'orderTerminalType', the character length must be smaller than or equal to 32.";
        }

        if (!is_null($this->container['extendInfo']) && (mb_strlen($this->container['extendInfo']) > 4096)) {
            $invalidProperties[] = "invalid value for 'extendInfo', the character length must be smaller than or equal to 4096.";
        }

        if (!is_null($this->container['clientKey']) && (mb_strlen($this->container['clientKey']) > 64)) {
            $invalidProperties[] = "invalid value for 'clientKey', the character length must be smaller than or equal to 64.";
        }

        return $invalidProperties;
    }



    public function getSessionId()
    {
        return $this->container['sessionId'];
    }

    public function setSessionId($sessionId)
    {
        if (is_null($sessionId)) {
            throw new \InvalidArgumentException('non-nullable sessionId cannot be null');
        }
        if ((mb_strlen($sessionId) > 128)) {
            throw new \InvalidArgumentException('invalid length for $sessionId when calling EnvInfo., must be smaller than or equal to 128.');
        }

        $this->container['sessionId'] = $sessionId;

        return $this;
    }

    public function getTokenId()
    {
        return $this->container['tokenId'];
    }

    public function setTokenId($tokenId)
    {
        if (is_null($tokenId)) {
            throw new \InvalidArgumentException('non-nullable tokenId cannot be null');
        }
        if ((mb_strlen($tokenId) > 128)) {
            throw new \InvalidArgumentException('invalid length for $tokenId when calling EnvInfo., must be smaller than or equal to 128.');
        }

        $this->container['tokenId'] = $tokenId;

        return $this;
    }

    public function getWebsiteLanguage()
    {
        return $this->container['websiteLanguage'];
    }

    public function setWebsiteLanguage($websiteLanguage)
    {
        if (is_null($websiteLanguage)) {
            throw new \InvalidArgumentException('non-nullable websiteLanguage cannot be null');
        }
        if ((mb_strlen($websiteLanguage) > 16)) {
            throw new \InvalidArgumentException('invalid length for $websiteLanguage when calling EnvInfo., must be smaller than or equal to 16.');
        }

        $this->container['websiteLanguage'] = $websiteLanguage;

        return $this;
    }

    public function getClientIp()
    {
        return $this->container['clientIp'];
    }

    public function setClientIp($clientIp)
    {
        if (is_null($clientIp)) {
            throw new \InvalidArgumentException('non-nullable clientIp cannot be null');
        }
        if ((mb_strlen($clientIp) > 32)) {
            throw new \InvalidArgumentException('invalid length for $clientIp when calling EnvInfo., must be smaller than or equal to 32.');
        }

        $this->container['clientIp'] = $clientIp;

        return $this;
    }

    public function getOsType()
    {
        return $this->container['osType'];
    }

    public function setOsType($osType)
    {
        if (is_null($osType)) {
            throw new \InvalidArgumentException('non-nullable osType cannot be null');
        }
        if ((mb_strlen($osType) > 128)) {
            throw new \InvalidArgumentException('invalid length for $osType when calling EnvInfo., must be smaller than or equal to 128.');
        }

        $this->container['osType'] = $osType;

        return $this;
    }

    public function getAppVersion()
    {
        return $this->container['appVersion'];
    }

    public function setAppVersion($appVersion)
    {
        if (is_null($appVersion)) {
            throw new \InvalidArgumentException('non-nullable appVersion cannot be null');
        }
        if ((mb_strlen($appVersion) > 128)) {
            throw new \InvalidArgumentException('invalid length for $appVersion when calling EnvInfo., must be smaller than or equal to 128.');
        }

        $this->container['appVersion'] = $appVersion;

        return $this;
    }

    public function getSdkVersion()
    {
        return $this->container['sdkVersion'];
    }

    public function setSdkVersion($sdkVersion)
    {
        if (is_null($sdkVersion)) {
            throw new \InvalidArgumentException('non-nullable sdkVersion cannot be null');
        }
        if ((mb_strlen($sdkVersion) > 128)) {
            throw new \InvalidArgumentException('invalid length for $sdkVersion when calling EnvInfo., must be smaller than or equal to 128.');
        }

        $this->container['sdkVersion'] = $sdkVersion;

        return $this;
    }

    public function getSourcePlatform()
    {
        return $this->container['sourcePlatform'];
    }

    public function setSourcePlatform($sourcePlatform)
    {
        if (is_null($sourcePlatform)) {
            throw new \InvalidArgumentException('non-nullable sourcePlatform cannot be null');
        }
        $allowedValues = $this->getSourcePlatformAllowableValues();
        if (!in_array($sourcePlatform, $allowedValues, true) && !empty($sourcePlatform)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'sourcePlatform', must be one of '%s'",
                    $sourcePlatform,
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($sourcePlatform) > 32)) {
            throw new \InvalidArgumentException('invalid length for $sourcePlatform when calling EnvInfo., must be smaller than or equal to 32.');
        }

        $this->container['sourcePlatform'] = $sourcePlatform;

        return $this;
    }

    public function getOrderOsType()
    {
        return $this->container['orderOsType'];
    }

    public function setOrderOsType($orderOsType)
    {
        if (is_null($orderOsType)) {
            throw new \InvalidArgumentException('non-nullable orderOsType cannot be null');
        }
        if ((mb_strlen($orderOsType) > 128)) {
            throw new \InvalidArgumentException('invalid length for $orderOsType when calling EnvInfo., must be smaller than or equal to 128.');
        }

        $this->container['orderOsType'] = $orderOsType;

        return $this;
    }

    public function getMerchantAppVersion()
    {
        return $this->container['merchantAppVersion'];
    }

    public function setMerchantAppVersion($merchantAppVersion)
    {
        if (is_null($merchantAppVersion)) {
            throw new \InvalidArgumentException('non-nullable merchantAppVersion cannot be null');
        }
        if ((mb_strlen($merchantAppVersion) > 128)) {
            throw new \InvalidArgumentException('invalid length for $merchantAppVersion when calling EnvInfo., must be smaller than or equal to 128.');
        }

        $this->container['merchantAppVersion'] = $merchantAppVersion;

        return $this;
    }

    public function getTerminalType()
    {
        return $this->container['terminalType'];
    }

    public function setTerminalType($terminalType)
    {
        if (is_null($terminalType)) {
            throw new \InvalidArgumentException('non-nullable terminalType cannot be null');
        }
        $allowedValues = $this->getTerminalTypeAllowableValues();
        if (!in_array($terminalType, $allowedValues, true) && !empty($terminalType)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'terminalType', must be one of '%s'",
                    $terminalType,
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($terminalType) > 32)) {
            throw new \InvalidArgumentException('invalid length for $terminalType when calling EnvInfo., must be smaller than or equal to 32.');
        }

        $this->container['terminalType'] = $terminalType;

        return $this;
    }

    public function getOrderTerminalType()
    {
        return $this->container['orderTerminalType'];
    }

    public function setOrderTerminalType($orderTerminalType)
    {
        if (is_null($orderTerminalType)) {
            throw new \InvalidArgumentException('non-nullable orderTerminalType cannot be null');
        }
        $allowedValues = $this->getOrderTerminalTypeAllowableValues();
        if (!in_array($orderTerminalType, $allowedValues, true) && !empty($orderTerminalType)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'orderTerminalType', must be one of '%s'",
                    $orderTerminalType,
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($orderTerminalType) > 32)) {
            throw new \InvalidArgumentException('invalid length for $orderTerminalType when calling EnvInfo., must be smaller than or equal to 32.');
        }

        $this->container['orderTerminalType'] = $orderTerminalType;

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
            throw new \InvalidArgumentException('invalid length for $extendInfo when calling EnvInfo., must be smaller than or equal to 4096.');
        }

        $this->container['extendInfo'] = $extendInfo;

        return $this;
    }

    public function getClientKey()
    {
        return $this->container['clientKey'];
    }

    public function setClientKey($clientKey)
    {
        if (is_null($clientKey)) {
            throw new \InvalidArgumentException('non-nullable clientKey cannot be null');
        }
        if ((mb_strlen($clientKey) > 64)) {
            throw new \InvalidArgumentException('invalid length for $clientKey when calling EnvInfo., must be smaller than or equal to 64.');
        }

        $this->container['clientKey'] = $clientKey;

        return $this;
    }


}


