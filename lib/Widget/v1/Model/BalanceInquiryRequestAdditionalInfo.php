<?php

namespace Dana\Widget\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\Widget\v1\Enum;

class BalanceInquiryRequestAdditionalInfo extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'BalanceInquiryRequestAdditionalInfo';

    protected static $openAPITypes = [
        'accessToken' => 'string',
        'endUserIpAddress' => 'string',
        'deviceId' => 'string',
        'latitude' => 'string',
        'longitude' => 'string'
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

        if ($this->container['accessToken'] === null) {
            $invalidProperties[] = "'accessToken' can't be null";
        }
        if ((mb_strlen($this->container['accessToken']) > 512)) {
            $invalidProperties[] = "invalid value for 'accessToken', the character length must be smaller than or equal to 512.";
        }

        if (!is_null($this->container['endUserIpAddress']) && (mb_strlen($this->container['endUserIpAddress']) > 15)) {
            $invalidProperties[] = "invalid value for 'endUserIpAddress', the character length must be smaller than or equal to 15.";
        }

        if ($this->container['deviceId'] === null) {
            $invalidProperties[] = "'deviceId' can't be null";
        }
        if ((mb_strlen($this->container['deviceId']) > 400)) {
            $invalidProperties[] = "invalid value for 'deviceId', the character length must be smaller than or equal to 400.";
        }

        if (!is_null($this->container['latitude']) && (mb_strlen($this->container['latitude']) > 10)) {
            $invalidProperties[] = "invalid value for 'latitude', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['latitude']) && !preg_match("/^[-+]?[0-9]{1,2}([.][0-9]{1,4})?$/", $this->container['latitude'])) {
            $invalidProperties[] = "invalid value for 'latitude', must be conform to the pattern /^[-+]?[0-9]{1,2}([.][0-9]{1,4})?$/.";
        }

        if (!is_null($this->container['longitude']) && (mb_strlen($this->container['longitude']) > 10)) {
            $invalidProperties[] = "invalid value for 'longitude', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['longitude']) && !preg_match("/^[-+]?[0-9]{1,2}([.][0-9]{1,4})?$/", $this->container['longitude'])) {
            $invalidProperties[] = "invalid value for 'longitude', must be conform to the pattern /^[-+]?[0-9]{1,2}([.][0-9]{1,4})?$/.";
        }

        return $invalidProperties;
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
            throw new \InvalidArgumentException('invalid length for $accessToken when calling BalanceInquiryRequestAdditionalInfo., must be smaller than or equal to 512.');
        }

        $this->container['accessToken'] = $accessToken;

        return $this;
    }

    public function getEndUserIpAddress()
    {
        return $this->container['endUserIpAddress'];
    }

    public function setEndUserIpAddress($endUserIpAddress)
    {
        if (is_null($endUserIpAddress)) {
            throw new \InvalidArgumentException('non-nullable endUserIpAddress cannot be null');
        }
        if ((mb_strlen($endUserIpAddress) > 15)) {
            throw new \InvalidArgumentException('invalid length for $endUserIpAddress when calling BalanceInquiryRequestAdditionalInfo., must be smaller than or equal to 15.');
        }

        $this->container['endUserIpAddress'] = $endUserIpAddress;

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
        if ((mb_strlen($deviceId) > 400)) {
            throw new \InvalidArgumentException('invalid length for $deviceId when calling BalanceInquiryRequestAdditionalInfo., must be smaller than or equal to 400.');
        }

        $this->container['deviceId'] = $deviceId;

        return $this;
    }

    public function getLatitude()
    {
        return $this->container['latitude'];
    }

    public function setLatitude($latitude)
    {
        if (is_null($latitude)) {
            throw new \InvalidArgumentException('non-nullable latitude cannot be null');
        }
        if ((mb_strlen($latitude) > 10)) {
            throw new \InvalidArgumentException('invalid length for $latitude when calling BalanceInquiryRequestAdditionalInfo., must be smaller than or equal to 10.');
        }
        if ((!preg_match("/^[-+]?[0-9]{1,2}([.][0-9]{1,4})?$/", ObjectSerializer::toString($latitude)))) {
            throw new \InvalidArgumentException("invalid value for \$latitude when calling BalanceInquiryRequestAdditionalInfo., must conform to the pattern /^[-+]?[0-9]{1,2}([.][0-9]{1,4})?$/.");
        }

        $this->container['latitude'] = $latitude;

        return $this;
    }

    public function getLongitude()
    {
        return $this->container['longitude'];
    }

    public function setLongitude($longitude)
    {
        if (is_null($longitude)) {
            throw new \InvalidArgumentException('non-nullable longitude cannot be null');
        }
        if ((mb_strlen($longitude) > 10)) {
            throw new \InvalidArgumentException('invalid length for $longitude when calling BalanceInquiryRequestAdditionalInfo., must be smaller than or equal to 10.');
        }
        if ((!preg_match("/^[-+]?[0-9]{1,2}([.][0-9]{1,4})?$/", ObjectSerializer::toString($longitude)))) {
            throw new \InvalidArgumentException("invalid value for \$longitude when calling BalanceInquiryRequestAdditionalInfo., must conform to the pattern /^[-+]?[0-9]{1,2}([.][0-9]{1,4})?$/.");
        }

        $this->container['longitude'] = $longitude;

        return $this;
    }


}


