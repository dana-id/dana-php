<?php

namespace Dana\PaymentGateway\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\PaymentGateway\v1\Enum;

class QueryPaymentResponseAdditionalInfo extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'QueryPaymentResponseAdditionalInfo';

    protected static $openAPITypes = [
        'buyer' => '\Dana\PaymentGateway\v1\Model\Buyer',
        'seller' => '\Dana\PaymentGateway\v1\Model\Seller',
        'amountDetail' => '\Dana\PaymentGateway\v1\Model\AmountDetail',
        'timeDetail' => '\Dana\PaymentGateway\v1\Model\TimeDetail',
        'goods' => '\Dana\PaymentGateway\v1\Model\Goods[]',
        'shippingInfo' => '\Dana\PaymentGateway\v1\Model\ShippingInfo[]',
        'orderMemo' => 'string',
        'paymentViews' => '\Dana\PaymentGateway\v1\Model\PaymentView[]',
        'extendInfo' => 'string',
        'statusDetail' => '\Dana\PaymentGateway\v1\Model\StatusDetail',
        'closeReason' => 'string',
        'virtualAccountInfo' => '\Dana\PaymentGateway\v1\Model\VirtualAccountInfo',
        'merchantId' => 'string'
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

        if (!is_null($this->container['orderMemo']) && (mb_strlen($this->container['orderMemo']) > 64)) {
            $invalidProperties[] = "invalid value for 'orderMemo', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['extendInfo']) && (mb_strlen($this->container['extendInfo']) > 4096)) {
            $invalidProperties[] = "invalid value for 'extendInfo', the character length must be smaller than or equal to 4096.";
        }

        if (!is_null($this->container['closeReason']) && (mb_strlen($this->container['closeReason']) > 128)) {
            $invalidProperties[] = "invalid value for 'closeReason', the character length must be smaller than or equal to 128.";
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

    public function getAmountDetail()
    {
        return $this->container['amountDetail'];
    }

    public function setAmountDetail($amountDetail)
    {
        if (is_null($amountDetail)) {
            throw new \InvalidArgumentException('non-nullable amountDetail cannot be null');
        }
        $this->container['amountDetail'] = $amountDetail;

        return $this;
    }

    public function getTimeDetail()
    {
        return $this->container['timeDetail'];
    }

    public function setTimeDetail($timeDetail)
    {
        if (is_null($timeDetail)) {
            throw new \InvalidArgumentException('non-nullable timeDetail cannot be null');
        }
        $this->container['timeDetail'] = $timeDetail;

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
            throw new \InvalidArgumentException('invalid length for $orderMemo when calling QueryPaymentResponseAdditionalInfo., must be smaller than or equal to 64.');
        }

        $this->container['orderMemo'] = $orderMemo;

        return $this;
    }

    public function getPaymentViews()
    {
        return $this->container['paymentViews'];
    }

    public function setPaymentViews($paymentViews)
    {
        if (is_null($paymentViews)) {
            throw new \InvalidArgumentException('non-nullable paymentViews cannot be null');
        }
        $this->container['paymentViews'] = $paymentViews;

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
            throw new \InvalidArgumentException('invalid length for $extendInfo when calling QueryPaymentResponseAdditionalInfo., must be smaller than or equal to 4096.');
        }

        $this->container['extendInfo'] = $extendInfo;

        return $this;
    }

    public function getStatusDetail()
    {
        return $this->container['statusDetail'];
    }

    public function setStatusDetail($statusDetail)
    {
        if (is_null($statusDetail)) {
            throw new \InvalidArgumentException('non-nullable statusDetail cannot be null');
        }
        $this->container['statusDetail'] = $statusDetail;

        return $this;
    }

    public function getCloseReason()
    {
        return $this->container['closeReason'];
    }

    public function setCloseReason($closeReason)
    {
        if (is_null($closeReason)) {
            throw new \InvalidArgumentException('non-nullable closeReason cannot be null');
        }
        if ((mb_strlen($closeReason) > 128)) {
            throw new \InvalidArgumentException('invalid length for $closeReason when calling QueryPaymentResponseAdditionalInfo., must be smaller than or equal to 128.');
        }

        $this->container['closeReason'] = $closeReason;

        return $this;
    }

    public function getVirtualAccountInfo()
    {
        return $this->container['virtualAccountInfo'];
    }

    public function setVirtualAccountInfo($virtualAccountInfo)
    {
        if (is_null($virtualAccountInfo)) {
            throw new \InvalidArgumentException('non-nullable virtualAccountInfo cannot be null');
        }
        $this->container['virtualAccountInfo'] = $virtualAccountInfo;

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
        $this->container['merchantId'] = $merchantId;

        return $this;
    }


}


