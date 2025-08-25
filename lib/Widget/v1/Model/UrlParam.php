<?php

namespace Dana\Widget\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\Widget\v1\Enum;

class UrlParam extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'UrlParam';

    protected static $openAPITypes = [
        'url' => 'string',
        'type' => 'string',
        'isDeeplink' => 'string'
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

    public const TYPE_PAY_RETURN = 'PAY_RETURN';
    public const TYPE_NOTIFICATION = 'NOTIFICATION';

    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_PAY_RETURN,
            self::TYPE_NOTIFICATION,
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

        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
        if ((mb_strlen($this->container['url']) > 512)) {
            $invalidProperties[] = "invalid value for 'url', the character length must be smaller than or equal to 512.";
        }

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        if ((mb_strlen($this->container['type']) > 32)) {
            $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 32.";
        }

        if ($this->container['isDeeplink'] === null) {
            $invalidProperties[] = "'isDeeplink' can't be null";
        }
        if ((mb_strlen($this->container['isDeeplink']) > 1)) {
            $invalidProperties[] = "invalid value for 'isDeeplink', the character length must be smaller than or equal to 1.";
        }

        return $invalidProperties;
    }



    public function getUrl()
    {
        return $this->container['url'];
    }

    public function setUrl($url)
    {
        if (is_null($url)) {
            throw new \InvalidArgumentException('non-nullable url cannot be null');
        }
        if ((mb_strlen($url) > 512)) {
            throw new \InvalidArgumentException('invalid length for $url when calling UrlParam., must be smaller than or equal to 512.');
        }

        $this->container['url'] = $url;

        return $this;
    }

    public function getType()
    {
        return $this->container['type'];
    }

    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true) && !empty($type)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($type) > 32)) {
            throw new \InvalidArgumentException('invalid length for $type when calling UrlParam., must be smaller than or equal to 32.');
        }

        $this->container['type'] = $type;

        return $this;
    }

    public function getIsDeeplink()
    {
        return $this->container['isDeeplink'];
    }

    public function setIsDeeplink($isDeeplink)
    {
        if (is_null($isDeeplink)) {
            throw new \InvalidArgumentException('non-nullable isDeeplink cannot be null');
        }
        if ((mb_strlen($isDeeplink) > 1)) {
            throw new \InvalidArgumentException('invalid length for $isDeeplink when calling UrlParam., must be smaller than or equal to 1.');
        }

        $this->container['isDeeplink'] = $isDeeplink;

        return $this;
    }


}


