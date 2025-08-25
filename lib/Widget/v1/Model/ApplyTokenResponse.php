<?php

namespace Dana\Widget\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\Widget\v1\Enum;

class ApplyTokenResponse extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'ApplyTokenResponse';

    protected static $openAPITypes = [
        'responseCode' => 'string',
        'responseMessage' => 'string',
        'tokenType' => 'string',
        'accessToken' => 'string',
        'accessTokenExpiryTime' => 'string',
        'refreshToken' => 'string',
        'refreshTokenExpiryTime' => 'string',
        'additionalInfo' => '\Dana\Widget\v1\Model\ApplyTokenResponseAdditionalInfo'
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

        if ($this->container['responseCode'] === null) {
            $invalidProperties[] = "'responseCode' can't be null";
        }
        if ((mb_strlen($this->container['responseCode']) > 7)) {
            $invalidProperties[] = "invalid value for 'responseCode', the character length must be smaller than or equal to 7.";
        }

        if ($this->container['responseMessage'] === null) {
            $invalidProperties[] = "'responseMessage' can't be null";
        }
        if ((mb_strlen($this->container['responseMessage']) > 150)) {
            $invalidProperties[] = "invalid value for 'responseMessage', the character length must be smaller than or equal to 150.";
        }

        if (!is_null($this->container['tokenType']) && (mb_strlen($this->container['tokenType']) > 7)) {
            $invalidProperties[] = "invalid value for 'tokenType', the character length must be smaller than or equal to 7.";
        }

        if ($this->container['accessToken'] === null) {
            $invalidProperties[] = "'accessToken' can't be null";
        }
        if ((mb_strlen($this->container['accessToken']) > 512)) {
            $invalidProperties[] = "invalid value for 'accessToken', the character length must be smaller than or equal to 512.";
        }

        if (!is_null($this->container['accessTokenExpiryTime']) && (mb_strlen($this->container['accessTokenExpiryTime']) > 25)) {
            $invalidProperties[] = "invalid value for 'accessTokenExpiryTime', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['accessTokenExpiryTime']) && !preg_match("/^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/", $this->container['accessTokenExpiryTime'])) {
            $invalidProperties[] = "invalid value for 'accessTokenExpiryTime', must be conform to the pattern /^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/.";
        }

        if (!is_null($this->container['refreshToken']) && (mb_strlen($this->container['refreshToken']) > 512)) {
            $invalidProperties[] = "invalid value for 'refreshToken', the character length must be smaller than or equal to 512.";
        }

        if (!is_null($this->container['refreshTokenExpiryTime']) && (mb_strlen($this->container['refreshTokenExpiryTime']) > 25)) {
            $invalidProperties[] = "invalid value for 'refreshTokenExpiryTime', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['refreshTokenExpiryTime']) && !preg_match("/^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/", $this->container['refreshTokenExpiryTime'])) {
            $invalidProperties[] = "invalid value for 'refreshTokenExpiryTime', must be conform to the pattern /^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/.";
        }

        return $invalidProperties;
    }



    public function getResponseCode()
    {
        return $this->container['responseCode'];
    }

    public function setResponseCode($responseCode)
    {
        if (is_null($responseCode)) {
            throw new \InvalidArgumentException('non-nullable responseCode cannot be null');
        }
        if ((mb_strlen($responseCode) > 7)) {
            throw new \InvalidArgumentException('invalid length for $responseCode when calling ApplyTokenResponse., must be smaller than or equal to 7.');
        }

        $this->container['responseCode'] = $responseCode;

        return $this;
    }

    public function getResponseMessage()
    {
        return $this->container['responseMessage'];
    }

    public function setResponseMessage($responseMessage)
    {
        if (is_null($responseMessage)) {
            throw new \InvalidArgumentException('non-nullable responseMessage cannot be null');
        }
        if ((mb_strlen($responseMessage) > 150)) {
            throw new \InvalidArgumentException('invalid length for $responseMessage when calling ApplyTokenResponse., must be smaller than or equal to 150.');
        }

        $this->container['responseMessage'] = $responseMessage;

        return $this;
    }

    public function getTokenType()
    {
        return $this->container['tokenType'];
    }

    public function setTokenType($tokenType)
    {
        if (is_null($tokenType)) {
            throw new \InvalidArgumentException('non-nullable tokenType cannot be null');
        }
        if ((mb_strlen($tokenType) > 7)) {
            throw new \InvalidArgumentException('invalid length for $tokenType when calling ApplyTokenResponse., must be smaller than or equal to 7.');
        }

        $this->container['tokenType'] = $tokenType;

        return $this;
    }

    public function getAccessToken()
    {
        return $this->container['accessToken'];
    }

    public function setAccessToken($accessToken)
    {
        if (is_null($accessToken)) {
            throw new \InvalidArgumentException('non-nullable accessToken cannot be null');
        }
        if ((mb_strlen($accessToken) > 512)) {
            throw new \InvalidArgumentException('invalid length for $accessToken when calling ApplyTokenResponse., must be smaller than or equal to 512.');
        }

        $this->container['accessToken'] = $accessToken;

        return $this;
    }

    public function getAccessTokenExpiryTime()
    {
        return $this->container['accessTokenExpiryTime'];
    }

    public function setAccessTokenExpiryTime($accessTokenExpiryTime)
    {
        if (is_null($accessTokenExpiryTime)) {
            throw new \InvalidArgumentException('non-nullable accessTokenExpiryTime cannot be null');
        }
        if ((mb_strlen($accessTokenExpiryTime) > 25)) {
            throw new \InvalidArgumentException('invalid length for $accessTokenExpiryTime when calling ApplyTokenResponse., must be smaller than or equal to 25.');
        }
        if ((!preg_match("/^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/", ObjectSerializer::toString($accessTokenExpiryTime)))) {
            throw new \InvalidArgumentException("invalid value for \$accessTokenExpiryTime when calling ApplyTokenResponse., must conform to the pattern /^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/.");
        }

        $this->container['accessTokenExpiryTime'] = $accessTokenExpiryTime;

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
            throw new \InvalidArgumentException('invalid length for $refreshToken when calling ApplyTokenResponse., must be smaller than or equal to 512.');
        }

        $this->container['refreshToken'] = $refreshToken;

        return $this;
    }

    public function getRefreshTokenExpiryTime()
    {
        return $this->container['refreshTokenExpiryTime'];
    }

    public function setRefreshTokenExpiryTime($refreshTokenExpiryTime)
    {
        if (is_null($refreshTokenExpiryTime)) {
            throw new \InvalidArgumentException('non-nullable refreshTokenExpiryTime cannot be null');
        }
        if ((mb_strlen($refreshTokenExpiryTime) > 25)) {
            throw new \InvalidArgumentException('invalid length for $refreshTokenExpiryTime when calling ApplyTokenResponse., must be smaller than or equal to 25.');
        }
        if ((!preg_match("/^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/", ObjectSerializer::toString($refreshTokenExpiryTime)))) {
            throw new \InvalidArgumentException("invalid value for \$refreshTokenExpiryTime when calling ApplyTokenResponse., must conform to the pattern /^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/.");
        }

        $this->container['refreshTokenExpiryTime'] = $refreshTokenExpiryTime;

        return $this;
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


}


