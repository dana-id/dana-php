<?php

namespace Dana\Widget\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\Widget\v1\Enum;

class ApplyTokenAuthorizationCodeRequest extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'ApplyTokenAuthorizationCodeRequest';

    protected static $openAPITypes = [
        'additionalInfo' => 'array<string,mixed>',
        'grantType' => 'string',
        'authCode' => 'string',
        'refreshToken' => 'string'
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

    public const GRANT_TYPE_AUTHORIZATION_CODE = 'AUTHORIZATION_CODE';

    public function getGrantTypeAllowableValues()
    {
        return [
            self::GRANT_TYPE_AUTHORIZATION_CODE,
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

        if ($this->container['grantType'] === null) {
            $invalidProperties[] = "'grantType' can't be null";
        }
        $allowedValues = $this->getGrantTypeAllowableValues();
        if (!is_null($this->container['grantType']) && !in_array($this->container['grantType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'grantType', must be one of '%s'",
                $this->container['grantType'],
                implode("', '", $allowedValues)
            );
        }

        if ((mb_strlen($this->container['grantType']) > 64)) {
            $invalidProperties[] = "invalid value for 'grantType', the character length must be smaller than or equal to 64.";
        }

        if ($this->container['authCode'] === null) {
            $invalidProperties[] = "'authCode' can't be null";
        }
        if ((mb_strlen($this->container['authCode']) > 256)) {
            $invalidProperties[] = "invalid value for 'authCode', the character length must be smaller than or equal to 256.";
        }

        if (!is_null($this->container['refreshToken']) && (mb_strlen($this->container['refreshToken']) > 512)) {
            $invalidProperties[] = "invalid value for 'refreshToken', the character length must be smaller than or equal to 512.";
        }

        return $invalidProperties;
    }



    public function getAdditionalInfo()
    {
        return $this->container['additionalInfo'];
    }

    public function setAdditionalInfo($additionalInfo)
    {
        if (is_null($additionalInfo)) {
            throw new \InvalidArgumentException('non-nullable additionalInfo cannot be null');
        }
        $this->container['additionalInfo'] = $additionalInfo;

        return $this;
    }

    public function getGrantType()
    {
        return $this->container['grantType'];
    }

    public function setGrantType($grantType)
    {
        if (is_null($grantType)) {
            throw new \InvalidArgumentException('non-nullable grantType cannot be null');
        }
        $allowedValues = $this->getGrantTypeAllowableValues();
        if (!in_array($grantType, $allowedValues, true) && !empty($grantType)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'grantType', must be one of '%s'",
                    $grantType,
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($grantType) > 64)) {
            throw new \InvalidArgumentException('invalid length for $grantType when calling ApplyTokenAuthorizationCodeRequest., must be smaller than or equal to 64.');
        }

        $this->container['grantType'] = $grantType;

        return $this;
    }

    public function getAuthCode()
    {
        return $this->container['authCode'];
    }

    public function setAuthCode($authCode)
    {
        if (is_null($authCode)) {
            throw new \InvalidArgumentException('non-nullable authCode cannot be null');
        }
        if ((mb_strlen($authCode) > 256)) {
            throw new \InvalidArgumentException('invalid length for $authCode when calling ApplyTokenAuthorizationCodeRequest., must be smaller than or equal to 256.');
        }

        $this->container['authCode'] = $authCode;

        return $this;
    }

    public function getRefreshToken()
    {
        return $this->container['refreshToken'];
    }

    public function setRefreshToken($refreshToken)
    {
        if (is_null($refreshToken)) {
            throw new \InvalidArgumentException('non-nullable refreshToken cannot be null');
        }
        if ((mb_strlen($refreshToken) > 512)) {
            throw new \InvalidArgumentException('invalid length for $refreshToken when calling ApplyTokenAuthorizationCodeRequest., must be smaller than or equal to 512.');
        }

        $this->container['refreshToken'] = $refreshToken;

        return $this;
    }


}


