<?php

namespace Dana\Widget\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\Widget\v1\Enum;

class Oauth2UrlData extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'Oauth2UrlData';

    protected static $openAPITypes = [
        'externalId' => 'string',
        'merchantId' => 'string',
        'subMerchantId' => 'string',
        'seamlessData' => '\Dana\Widget\v1\Model\Oauth2UrlDataSeamlessData',
        'scopes' => 'string[]',
        'redirectUrl' => 'string',
        'state' => 'string',
        'lang' => 'string',
        'allowRegistration' => 'string',
        'mode' => 'string'
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

    public const MODE_API = 'API';
    public const MODE_DEEPLINK = 'DEEPLINK';

    public function getModeAllowableValues()
    {
        return [
            self::MODE_API,
            self::MODE_DEEPLINK,
        ];
    }




    public function __construct(?array $data = null)
    {
        $localData = [];
        $defaultValues = [
            
            'lang' => 'id',
            
            'allowRegistration' => 'true',
            
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

        if ($this->container['externalId'] === null) {
            $invalidProperties[] = "'externalId' can't be null";
        }
        if ((mb_strlen($this->container['externalId']) > 64)) {
            $invalidProperties[] = "invalid value for 'externalId', the character length must be smaller than or equal to 64.";
        }

        if ($this->container['merchantId'] === null) {
            $invalidProperties[] = "'merchantId' can't be null";
        }
        if ((mb_strlen($this->container['merchantId']) > 64)) {
            $invalidProperties[] = "invalid value for 'merchantId', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['subMerchantId']) && (mb_strlen($this->container['subMerchantId']) > 64)) {
            $invalidProperties[] = "invalid value for 'subMerchantId', the character length must be smaller than or equal to 64.";
        }

        if ($this->container['redirectUrl'] === null) {
            $invalidProperties[] = "'redirectUrl' can't be null";
        }
        $allowedValues = $this->getModeAllowableValues();
        if (!is_null($this->container['mode']) && !in_array($this->container['mode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'mode', must be one of '%s'",
                $this->container['mode'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }



    public function getExternalId()
    {
        return $this->container['externalId'];
    }

    public function setExternalId($externalId)
    {
        if (is_null($externalId)) {
            throw new \InvalidArgumentException('non-nullable externalId cannot be null');
        }
        if ((mb_strlen($externalId) > 64)) {
            throw new \InvalidArgumentException('invalid length for $externalId when calling Oauth2UrlData., must be smaller than or equal to 64.');
        }

        $this->container['externalId'] = $externalId;

        return $this;
    }

    public function getMerchantId()
    {
        return $this->container['merchantId'];
    }

    public function setMerchantId($merchantId)
    {
        if (is_null($merchantId)) {
            throw new \InvalidArgumentException('non-nullable merchantId cannot be null');
        }
        if ((mb_strlen($merchantId) > 64)) {
            throw new \InvalidArgumentException('invalid length for $merchantId when calling Oauth2UrlData., must be smaller than or equal to 64.');
        }

        $this->container['merchantId'] = $merchantId;

        return $this;
    }

    public function getSubMerchantId()
    {
        return $this->container['subMerchantId'];
    }

    public function setSubMerchantId($subMerchantId)
    {
        if (is_null($subMerchantId)) {
            throw new \InvalidArgumentException('non-nullable subMerchantId cannot be null');
        }
        if ((mb_strlen($subMerchantId) > 64)) {
            throw new \InvalidArgumentException('invalid length for $subMerchantId when calling Oauth2UrlData., must be smaller than or equal to 64.');
        }

        $this->container['subMerchantId'] = $subMerchantId;

        return $this;
    }

    public function getSeamlessData()
    {
        return $this->container['seamlessData'];
    }

    public function setSeamlessData($seamlessData)
    {
        if (is_null($seamlessData)) {
            throw new \InvalidArgumentException('non-nullable seamlessData cannot be null');
        }
        $this->container['seamlessData'] = $seamlessData;

        return $this;
    }

    public function getScopes()
    {
        return $this->container['scopes'];
    }

    public function setScopes($scopes)
    {
        if (is_null($scopes)) {
            throw new \InvalidArgumentException('non-nullable scopes cannot be null');
        }
        $this->container['scopes'] = $scopes;

        return $this;
    }

    public function getRedirectUrl()
    {
        return $this->container['redirectUrl'];
    }

    public function setRedirectUrl($redirectUrl)
    {
        if (is_null($redirectUrl)) {
            throw new \InvalidArgumentException('non-nullable redirectUrl cannot be null');
        }
        $this->container['redirectUrl'] = $redirectUrl;

        return $this;
    }

    public function getState()
    {
        return $this->container['state'];
    }

    public function setState($state)
    {
        if (is_null($state)) {
            throw new \InvalidArgumentException('non-nullable state cannot be null');
        }
        $this->container['state'] = $state;

        return $this;
    }

    public function getLang()
    {
        return $this->container['lang'];
    }

    public function setLang($lang)
    {
        if (is_null($lang)) {
            throw new \InvalidArgumentException('non-nullable lang cannot be null');
        }
        $this->container['lang'] = $lang;

        return $this;
    }

    public function getAllowRegistration()
    {
        return $this->container['allowRegistration'];
    }

    public function setAllowRegistration($allowRegistration)
    {
        if (is_null($allowRegistration)) {
            throw new \InvalidArgumentException('non-nullable allowRegistration cannot be null');
        }
        $this->container['allowRegistration'] = $allowRegistration;

        return $this;
    }

    public function getMode()
    {
        return $this->container['mode'];
    }

    public function setMode($mode)
    {
        if (is_null($mode)) {
            throw new \InvalidArgumentException('non-nullable mode cannot be null');
        }
        $allowedValues = $this->getModeAllowableValues();
        if (!in_array($mode, $allowedValues, true) && !empty($mode)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'mode', must be one of '%s'",
                    $mode,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['mode'] = $mode;

        return $this;
    }


}


