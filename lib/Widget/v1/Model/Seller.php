<?php

namespace Dana\Widget\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\Widget\v1\Enum;

class Seller extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'Seller';

    protected static $openAPITypes = [
        'externalUserType' => 'string',
        'nickname' => 'string',
        'externalUserId' => 'string',
        'userId' => 'string'
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

        if (!is_null($this->container['externalUserType']) && (mb_strlen($this->container['externalUserType']) > 32)) {
            $invalidProperties[] = "invalid value for 'externalUserType', the character length must be smaller than or equal to 32.";
        }

        if (!is_null($this->container['nickname']) && (mb_strlen($this->container['nickname']) > 64)) {
            $invalidProperties[] = "invalid value for 'nickname', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['externalUserId']) && (mb_strlen($this->container['externalUserId']) > 32)) {
            $invalidProperties[] = "invalid value for 'externalUserId', the character length must be smaller than or equal to 32.";
        }

        if (!is_null($this->container['userId']) && (mb_strlen($this->container['userId']) > 32)) {
            $invalidProperties[] = "invalid value for 'userId', the character length must be smaller than or equal to 32.";
        }

        return $invalidProperties;
    }



    public function getExternalUserType()
    {
        return $this->container['externalUserType'];
    }

    public function setExternalUserType($externalUserType)
    {
        if (is_null($externalUserType)) {
            throw new \InvalidArgumentException('non-nullable externalUserType cannot be null');
        }
        if ((mb_strlen($externalUserType) > 32)) {
            throw new \InvalidArgumentException('invalid length for $externalUserType when calling Seller., must be smaller than or equal to 32.');
        }

        $this->container['externalUserType'] = $externalUserType;

        return $this;
    }

    public function getNickname()
    {
        return $this->container['nickname'];
    }

    public function setNickname($nickname)
    {
        if (is_null($nickname)) {
            throw new \InvalidArgumentException('non-nullable nickname cannot be null');
        }
        if ((mb_strlen($nickname) > 64)) {
            throw new \InvalidArgumentException('invalid length for $nickname when calling Seller., must be smaller than or equal to 64.');
        }

        $this->container['nickname'] = $nickname;

        return $this;
    }

    public function getExternalUserId()
    {
        return $this->container['externalUserId'];
    }

    public function setExternalUserId($externalUserId)
    {
        if (is_null($externalUserId)) {
            throw new \InvalidArgumentException('non-nullable externalUserId cannot be null');
        }
        if ((mb_strlen($externalUserId) > 32)) {
            throw new \InvalidArgumentException('invalid length for $externalUserId when calling Seller., must be smaller than or equal to 32.');
        }

        $this->container['externalUserId'] = $externalUserId;

        return $this;
    }

    public function getUserId()
    {
        return $this->container['userId'];
    }

    public function setUserId($userId)
    {
        if (is_null($userId)) {
            throw new \InvalidArgumentException('non-nullable userId cannot be null');
        }
        if ((mb_strlen($userId) > 32)) {
            throw new \InvalidArgumentException('invalid length for $userId when calling Seller., must be smaller than or equal to 32.');
        }

        $this->container['userId'] = $userId;

        return $this;
    }


}


