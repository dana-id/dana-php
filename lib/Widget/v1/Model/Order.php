<?php

namespace Dana\Widget\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\Widget\v1\Enum;

class Order extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'Order';

    protected static $openAPITypes = [
        'buyer' => '\Dana\Widget\v1\Model\Buyer',
        'seller' => '\Dana\Widget\v1\Model\Seller',
        'orderTitle' => 'string',
        'merchantTransType' => 'string',
        'orderMemo' => 'string',
        'createdTime' => 'string',
        'goods' => '\Dana\Widget\v1\Model\Goods[]',
        'shippingInfo' => '\Dana\Widget\v1\Model\ShippingInfo[]',
        'internationalOrderInfo' => '\Dana\Widget\v1\Model\InternationalOrderInfo',
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

        if ($this->container['orderTitle'] === null) {
            $invalidProperties[] = "'orderTitle' can't be null";
        }
        if ((mb_strlen($this->container['orderTitle']) > 64)) {
            $invalidProperties[] = "invalid value for 'orderTitle', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['merchantTransType']) && (mb_strlen($this->container['merchantTransType']) > 64)) {
            $invalidProperties[] = "invalid value for 'merchantTransType', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['orderMemo']) && (mb_strlen($this->container['orderMemo']) > 64)) {
            $invalidProperties[] = "invalid value for 'orderMemo', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['createdTime']) && !preg_match("/^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/", $this->container['createdTime'])) {
            $invalidProperties[] = "invalid value for 'createdTime', must be conform to the pattern /^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/.";
        }

        if (!is_null($this->container['extendInfo']) && (mb_strlen($this->container['extendInfo']) > 4096)) {
            $invalidProperties[] = "invalid value for 'extendInfo', the character length must be smaller than or equal to 4096.";
        }

        return $invalidProperties;
    }



    public function getBuyer()
    {
        return $this->container['buyer'];
    }

    public function setBuyer($buyer)
    {
        if (is_null($buyer)) {
            throw new \InvalidArgumentException('non-nullable buyer cannot be null');
        }
        $this->container['buyer'] = $buyer;

        return $this;
    }

    public function getSeller()
    {
        return $this->container['seller'];
    }

    public function setSeller($seller)
    {
        if (is_null($seller)) {
            throw new \InvalidArgumentException('non-nullable seller cannot be null');
        }
        $this->container['seller'] = $seller;

        return $this;
    }

    public function getOrderTitle()
    {
        return $this->container['orderTitle'];
    }

    public function setOrderTitle($orderTitle)
    {
        if (is_null($orderTitle)) {
            throw new \InvalidArgumentException('non-nullable orderTitle cannot be null');
        }
        if ((mb_strlen($orderTitle) > 64)) {
            throw new \InvalidArgumentException('invalid length for $orderTitle when calling Order., must be smaller than or equal to 64.');
        }

        $this->container['orderTitle'] = $orderTitle;

        return $this;
    }

    public function getMerchantTransType()
    {
        return $this->container['merchantTransType'];
    }

    public function setMerchantTransType($merchantTransType)
    {
        if (is_null($merchantTransType)) {
            throw new \InvalidArgumentException('non-nullable merchantTransType cannot be null');
        }
        if ((mb_strlen($merchantTransType) > 64)) {
            throw new \InvalidArgumentException('invalid length for $merchantTransType when calling Order., must be smaller than or equal to 64.');
        }

        $this->container['merchantTransType'] = $merchantTransType;

        return $this;
    }

    public function getOrderMemo()
    {
        return $this->container['orderMemo'];
    }

    public function setOrderMemo($orderMemo)
    {
        if (is_null($orderMemo)) {
            throw new \InvalidArgumentException('non-nullable orderMemo cannot be null');
        }
        if ((mb_strlen($orderMemo) > 64)) {
            throw new \InvalidArgumentException('invalid length for $orderMemo when calling Order., must be smaller than or equal to 64.');
        }

        $this->container['orderMemo'] = $orderMemo;

        return $this;
    }

    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    public function setCreatedTime($createdTime)
    {
        if (is_null($createdTime)) {
            throw new \InvalidArgumentException('non-nullable createdTime cannot be null');
        }

        if ((!preg_match("/^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/", ObjectSerializer::toString($createdTime)))) {
            throw new \InvalidArgumentException("invalid value for \$createdTime when calling Order., must conform to the pattern /^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/.");
        }

        $this->container['createdTime'] = $createdTime;

        return $this;
    }

    public function getGoods()
    {
        return $this->container['goods'];
    }

    public function setGoods($goods)
    {
        if (is_null($goods)) {
            throw new \InvalidArgumentException('non-nullable goods cannot be null');
        }
        $this->container['goods'] = $goods;

        return $this;
    }

    public function getShippingInfo()
    {
        return $this->container['shippingInfo'];
    }

    public function setShippingInfo($shippingInfo)
    {
        if (is_null($shippingInfo)) {
            throw new \InvalidArgumentException('non-nullable shippingInfo cannot be null');
        }
        $this->container['shippingInfo'] = $shippingInfo;

        return $this;
    }

    public function getInternationalOrderInfo()
    {
        return $this->container['internationalOrderInfo'];
    }

    public function setInternationalOrderInfo($internationalOrderInfo)
    {
        if (is_null($internationalOrderInfo)) {
            throw new \InvalidArgumentException('non-nullable internationalOrderInfo cannot be null');
        }
        $this->container['internationalOrderInfo'] = $internationalOrderInfo;

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
            throw new \InvalidArgumentException('invalid length for $extendInfo when calling Order., must be smaller than or equal to 4096.');
        }

        $this->container['extendInfo'] = $extendInfo;

        return $this;
    }


}


