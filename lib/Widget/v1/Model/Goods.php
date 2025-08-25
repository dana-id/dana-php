<?php

namespace Dana\Widget\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\Widget\v1\Enum;

class Goods extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'Goods';

    protected static $openAPITypes = [
        'name' => 'string',
        'merchantGoodsId' => 'string',
        'description' => 'string',
        'category' => 'string',
        'price' => '\Dana\Widget\v1\Model\Money',
        'unit' => 'string',
        'quantity' => 'string',
        'merchantShippingId' => 'string',
        'snapshotUrl' => 'string',
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 64)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
        }

        if ($this->container['merchantGoodsId'] === null) {
            $invalidProperties[] = "'merchantGoodsId' can't be null";
        }
        if ((mb_strlen($this->container['merchantGoodsId']) > 64)) {
            $invalidProperties[] = "invalid value for 'merchantGoodsId', the character length must be smaller than or equal to 64.";
        }

        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ((mb_strlen($this->container['description']) > 1024)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
        }

        if ($this->container['category'] === null) {
            $invalidProperties[] = "'category' can't be null";
        }
        if ((mb_strlen($this->container['category']) > 64)) {
            $invalidProperties[] = "invalid value for 'category', the character length must be smaller than or equal to 64.";
        }

        if ($this->container['price'] === null) {
            $invalidProperties[] = "'price' can't be null";
        }
        if (!is_null($this->container['unit']) && (mb_strlen($this->container['unit']) > 64)) {
            $invalidProperties[] = "invalid value for 'unit', the character length must be smaller than or equal to 64.";
        }

        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if ((mb_strlen($this->container['quantity']) > 16)) {
            $invalidProperties[] = "invalid value for 'quantity', the character length must be smaller than or equal to 16.";
        }

        if (!is_null($this->container['merchantShippingId']) && (mb_strlen($this->container['merchantShippingId']) > 64)) {
            $invalidProperties[] = "invalid value for 'merchantShippingId', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['snapshotUrl']) && (mb_strlen($this->container['snapshotUrl']) > 512)) {
            $invalidProperties[] = "invalid value for 'snapshotUrl', the character length must be smaller than or equal to 512.";
        }

        if (!is_null($this->container['extendInfo']) && (mb_strlen($this->container['extendInfo']) > 4096)) {
            $invalidProperties[] = "invalid value for 'extendInfo', the character length must be smaller than or equal to 4096.";
        }

        return $invalidProperties;
    }



    public function getName()
    {
        return $this->container['name'];
    }

    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        if ((mb_strlen($name) > 64)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Goods., must be smaller than or equal to 64.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    public function getMerchantGoodsId()
    {
        return $this->container['merchantGoodsId'];
    }

    public function setMerchantGoodsId($merchantGoodsId)
    {
        if (is_null($merchantGoodsId)) {
            throw new \InvalidArgumentException('non-nullable merchantGoodsId cannot be null');
        }
        if ((mb_strlen($merchantGoodsId) > 64)) {
            throw new \InvalidArgumentException('invalid length for $merchantGoodsId when calling Goods., must be smaller than or equal to 64.');
        }

        $this->container['merchantGoodsId'] = $merchantGoodsId;

        return $this;
    }

    public function getDescription()
    {
        return $this->container['description'];
    }

    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        if ((mb_strlen($description) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $description when calling Goods., must be smaller than or equal to 1024.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    public function getCategory()
    {
        return $this->container['category'];
    }

    public function setCategory($category)
    {
        if (is_null($category)) {
            throw new \InvalidArgumentException('non-nullable category cannot be null');
        }
        if ((mb_strlen($category) > 64)) {
            throw new \InvalidArgumentException('invalid length for $category when calling Goods., must be smaller than or equal to 64.');
        }

        $this->container['category'] = $category;

        return $this;
    }

    public function getPrice()
    {
        return $this->container['price'];
    }

    public function setPrice($price)
    {
        if (is_null($price)) {
            throw new \InvalidArgumentException('non-nullable price cannot be null');
        }
        $this->container['price'] = $price;

        return $this;
    }

    public function getUnit()
    {
        return $this->container['unit'];
    }

    public function setUnit($unit)
    {
        if (is_null($unit)) {
            throw new \InvalidArgumentException('non-nullable unit cannot be null');
        }
        if ((mb_strlen($unit) > 64)) {
            throw new \InvalidArgumentException('invalid length for $unit when calling Goods., must be smaller than or equal to 64.');
        }

        $this->container['unit'] = $unit;

        return $this;
    }

    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    public function setQuantity($quantity)
    {
        if (is_null($quantity)) {
            throw new \InvalidArgumentException('non-nullable quantity cannot be null');
        }
        if ((mb_strlen($quantity) > 16)) {
            throw new \InvalidArgumentException('invalid length for $quantity when calling Goods., must be smaller than or equal to 16.');
        }

        $this->container['quantity'] = $quantity;

        return $this;
    }

    public function getMerchantShippingId()
    {
        return $this->container['merchantShippingId'];
    }

    public function setMerchantShippingId($merchantShippingId)
    {
        if (is_null($merchantShippingId)) {
            throw new \InvalidArgumentException('non-nullable merchantShippingId cannot be null');
        }
        if ((mb_strlen($merchantShippingId) > 64)) {
            throw new \InvalidArgumentException('invalid length for $merchantShippingId when calling Goods., must be smaller than or equal to 64.');
        }

        $this->container['merchantShippingId'] = $merchantShippingId;

        return $this;
    }

    public function getSnapshotUrl()
    {
        return $this->container['snapshotUrl'];
    }

    public function setSnapshotUrl($snapshotUrl)
    {
        if (is_null($snapshotUrl)) {
            throw new \InvalidArgumentException('non-nullable snapshotUrl cannot be null');
        }
        if ((mb_strlen($snapshotUrl) > 512)) {
            throw new \InvalidArgumentException('invalid length for $snapshotUrl when calling Goods., must be smaller than or equal to 512.');
        }

        $this->container['snapshotUrl'] = $snapshotUrl;

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
            throw new \InvalidArgumentException('invalid length for $extendInfo when calling Goods., must be smaller than or equal to 4096.');
        }

        $this->container['extendInfo'] = $extendInfo;

        return $this;
    }


}


