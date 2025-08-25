<?php

namespace Dana\Widget\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\Widget\v1\Enum;

class WidgetPaymentRequestAdditionalInfo extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'WidgetPaymentRequestAdditionalInfo';

    protected static $openAPITypes = [
        'supportDeepLinkCheckoutUrl' => 'string',
        'phoneNumber' => 'string',
        'publicUserId' => 'string',
        'productCode' => 'string',
        'serviceInfo' => '\Dana\Widget\v1\Model\ServiceInfo',
        'order' => '\Dana\Widget\v1\Model\Order',
        'mcc' => 'string',
        'envInfo' => '\Dana\Widget\v1\Model\EnvInfo',
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

        if (!is_null($this->container['supportDeepLinkCheckoutUrl']) && (mb_strlen($this->container['supportDeepLinkCheckoutUrl']) > 64)) {
            $invalidProperties[] = "invalid value for 'supportDeepLinkCheckoutUrl', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['phoneNumber']) && (mb_strlen($this->container['phoneNumber']) > 64)) {
            $invalidProperties[] = "invalid value for 'phoneNumber', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['publicUserId']) && (mb_strlen($this->container['publicUserId']) > 64)) {
            $invalidProperties[] = "invalid value for 'publicUserId', the character length must be smaller than or equal to 64.";
        }

        if ($this->container['productCode'] === null) {
            $invalidProperties[] = "'productCode' can't be null";
        }
        if ((mb_strlen($this->container['productCode']) > 32)) {
            $invalidProperties[] = "invalid value for 'productCode', the character length must be smaller than or equal to 32.";
        }

        if ($this->container['order'] === null) {
            $invalidProperties[] = "'order' can't be null";
        }
        if ($this->container['mcc'] === null) {
            $invalidProperties[] = "'mcc' can't be null";
        }
        if ((mb_strlen($this->container['mcc']) > 64)) {
            $invalidProperties[] = "invalid value for 'mcc', the character length must be smaller than or equal to 64.";
        }

        if ($this->container['envInfo'] === null) {
            $invalidProperties[] = "'envInfo' can't be null";
        }
        if (!is_null($this->container['extendInfo']) && (mb_strlen($this->container['extendInfo']) > 4096)) {
            $invalidProperties[] = "invalid value for 'extendInfo', the character length must be smaller than or equal to 4096.";
        }

        return $invalidProperties;
    }



    public function getSupportDeepLinkCheckoutUrl()
    {
        return $this->container['supportDeepLinkCheckoutUrl'];
    }

    public function setSupportDeepLinkCheckoutUrl($supportDeepLinkCheckoutUrl)
    {
        if (is_null($supportDeepLinkCheckoutUrl)) {
            throw new \InvalidArgumentException('non-nullable supportDeepLinkCheckoutUrl cannot be null');
        }
        if ((mb_strlen($supportDeepLinkCheckoutUrl) > 64)) {
            throw new \InvalidArgumentException('invalid length for $supportDeepLinkCheckoutUrl when calling WidgetPaymentRequestAdditionalInfo., must be smaller than or equal to 64.');
        }

        $this->container['supportDeepLinkCheckoutUrl'] = $supportDeepLinkCheckoutUrl;

        return $this;
    }

    public function getPhoneNumber()
    {
        return $this->container['phoneNumber'];
    }

    public function setPhoneNumber($phoneNumber)
    {
        if (is_null($phoneNumber)) {
            throw new \InvalidArgumentException('non-nullable phoneNumber cannot be null');
        }
        if ((mb_strlen($phoneNumber) > 64)) {
            throw new \InvalidArgumentException('invalid length for $phoneNumber when calling WidgetPaymentRequestAdditionalInfo., must be smaller than or equal to 64.');
        }

        $this->container['phoneNumber'] = $phoneNumber;

        return $this;
    }

    public function getPublicUserId()
    {
        return $this->container['publicUserId'];
    }

    public function setPublicUserId($publicUserId)
    {
        if (is_null($publicUserId)) {
            throw new \InvalidArgumentException('non-nullable publicUserId cannot be null');
        }
        if ((mb_strlen($publicUserId) > 64)) {
            throw new \InvalidArgumentException('invalid length for $publicUserId when calling WidgetPaymentRequestAdditionalInfo., must be smaller than or equal to 64.');
        }

        $this->container['publicUserId'] = $publicUserId;

        return $this;
    }

    public function getProductCode()
    {
        return $this->container['productCode'];
    }

    public function setProductCode($productCode)
    {
        if (is_null($productCode)) {
            throw new \InvalidArgumentException('non-nullable productCode cannot be null');
        }
        if ((mb_strlen($productCode) > 32)) {
            throw new \InvalidArgumentException('invalid length for $productCode when calling WidgetPaymentRequestAdditionalInfo., must be smaller than or equal to 32.');
        }

        $this->container['productCode'] = $productCode;

        return $this;
    }

    public function getServiceInfo()
    {
        return $this->container['serviceInfo'];
    }

    public function setServiceInfo($serviceInfo)
    {
        if (is_null($serviceInfo)) {
            throw new \InvalidArgumentException('non-nullable serviceInfo cannot be null');
        }
        $this->container['serviceInfo'] = $serviceInfo;

        return $this;
    }

    public function getOrder()
    {
        return $this->container['order'];
    }

    public function setOrder($order)
    {
        if (is_null($order)) {
            throw new \InvalidArgumentException('non-nullable order cannot be null');
        }
        $this->container['order'] = $order;

        return $this;
    }

    public function getMcc()
    {
        return $this->container['mcc'];
    }

    public function setMcc($mcc)
    {
        if (is_null($mcc)) {
            throw new \InvalidArgumentException('non-nullable mcc cannot be null');
        }
        if ((mb_strlen($mcc) > 64)) {
            throw new \InvalidArgumentException('invalid length for $mcc when calling WidgetPaymentRequestAdditionalInfo., must be smaller than or equal to 64.');
        }

        $this->container['mcc'] = $mcc;

        return $this;
    }

    public function getEnvInfo()
    {
        return $this->container['envInfo'];
    }

    public function setEnvInfo($envInfo)
    {
        if (is_null($envInfo)) {
            throw new \InvalidArgumentException('non-nullable envInfo cannot be null');
        }
        $this->container['envInfo'] = $envInfo;

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
            throw new \InvalidArgumentException('invalid length for $extendInfo when calling WidgetPaymentRequestAdditionalInfo., must be smaller than or equal to 4096.');
        }

        $this->container['extendInfo'] = $extendInfo;

        return $this;
    }


}


