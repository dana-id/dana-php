<?php

namespace Dana\Widget\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\Widget\v1\Enum;

class WidgetPaymentRequest extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'WidgetPaymentRequest';

    protected static $openAPITypes = [
        'partnerReferenceNo' => 'string',
        'merchantId' => 'string',
        'subMerchantId' => 'string',
        'amount' => '\Dana\Widget\v1\Model\Money',
        'externalStoreId' => 'string',
        'validUpTo' => 'string',
        'pointOfInitiation' => 'string',
        'disabledPayMethods' => 'string',
        'payOptionDetails' => '\Dana\Widget\v1\Model\PayOptionDetail[]',
        'additionalInfo' => '\Dana\Widget\v1\Model\WidgetPaymentRequestAdditionalInfo',
        'urlParams' => '\Dana\Widget\v1\Model\UrlParam[]'
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

        if ($this->container['partnerReferenceNo'] === null) {
            $invalidProperties[] = "'partnerReferenceNo' can't be null";
        }
        if ((mb_strlen($this->container['partnerReferenceNo']) > 64)) {
            $invalidProperties[] = "invalid value for 'partnerReferenceNo', the character length must be smaller than or equal to 64.";
        }

        if ($this->container['merchantId'] === null) {
            $invalidProperties[] = "'merchantId' can't be null";
        }
        if ((mb_strlen($this->container['merchantId']) > 64)) {
            $invalidProperties[] = "invalid value for 'merchantId', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['subMerchantId']) && (mb_strlen($this->container['subMerchantId']) > 32)) {
            $invalidProperties[] = "invalid value for 'subMerchantId', the character length must be smaller than or equal to 32.";
        }

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if (!is_null($this->container['externalStoreId']) && (mb_strlen($this->container['externalStoreId']) > 64)) {
            $invalidProperties[] = "invalid value for 'externalStoreId', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['validUpTo']) && !preg_match("/^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/", $this->container['validUpTo'])) {
            $invalidProperties[] = "invalid value for 'validUpTo', must be conform to the pattern /^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/.";
        }

        if (!is_null($this->container['pointOfInitiation']) && (mb_strlen($this->container['pointOfInitiation']) > 20)) {
            $invalidProperties[] = "invalid value for 'pointOfInitiation', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['disabledPayMethods']) && (mb_strlen($this->container['disabledPayMethods']) > 64)) {
            $invalidProperties[] = "invalid value for 'disabledPayMethods', the character length must be smaller than or equal to 64.";
        }

        if ($this->container['additionalInfo'] === null) {
            $invalidProperties[] = "'additionalInfo' can't be null";
        }
        return $invalidProperties;
    }



    public function getPartnerReferenceNo()
    {
        return $this->container['partnerReferenceNo'];
    }

    public function setPartnerReferenceNo($partnerReferenceNo)
    {
        if (is_null($partnerReferenceNo)) {
            throw new \InvalidArgumentException('non-nullable partnerReferenceNo cannot be null');
        }
        if ((mb_strlen($partnerReferenceNo) > 64)) {
            throw new \InvalidArgumentException('invalid length for $partnerReferenceNo when calling WidgetPaymentRequest., must be smaller than or equal to 64.');
        }

        $this->container['partnerReferenceNo'] = $partnerReferenceNo;

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
            throw new \InvalidArgumentException('invalid length for $merchantId when calling WidgetPaymentRequest., must be smaller than or equal to 64.');
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
        if ((mb_strlen($subMerchantId) > 32)) {
            throw new \InvalidArgumentException('invalid length for $subMerchantId when calling WidgetPaymentRequest., must be smaller than or equal to 32.');
        }

        $this->container['subMerchantId'] = $subMerchantId;

        return $this;
    }

    public function getAmount()
    {
        return $this->container['amount'];
    }

    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }
        $this->container['amount'] = $amount;

        return $this;
    }

    public function getExternalStoreId()
    {
        return $this->container['externalStoreId'];
    }

    public function setExternalStoreId($externalStoreId)
    {
        if (is_null($externalStoreId)) {
            throw new \InvalidArgumentException('non-nullable externalStoreId cannot be null');
        }
        if ((mb_strlen($externalStoreId) > 64)) {
            throw new \InvalidArgumentException('invalid length for $externalStoreId when calling WidgetPaymentRequest., must be smaller than or equal to 64.');
        }

        $this->container['externalStoreId'] = $externalStoreId;

        return $this;
    }

    public function getValidUpTo()
    {
        return $this->container['validUpTo'];
    }

    public function setValidUpTo($validUpTo)
    {
        if (is_null($validUpTo)) {
            throw new \InvalidArgumentException('non-nullable validUpTo cannot be null');
        }

        if ((!preg_match("/^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/", ObjectSerializer::toString($validUpTo)))) {
            throw new \InvalidArgumentException("invalid value for \$validUpTo when calling WidgetPaymentRequest., must conform to the pattern /^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/.");
        }

        $this->container['validUpTo'] = $validUpTo;

        return $this;
    }

    public function getPointOfInitiation()
    {
        return $this->container['pointOfInitiation'];
    }

    public function setPointOfInitiation($pointOfInitiation)
    {
        if (is_null($pointOfInitiation)) {
            throw new \InvalidArgumentException('non-nullable pointOfInitiation cannot be null');
        }
        if ((mb_strlen($pointOfInitiation) > 20)) {
            throw new \InvalidArgumentException('invalid length for $pointOfInitiation when calling WidgetPaymentRequest., must be smaller than or equal to 20.');
        }

        $this->container['pointOfInitiation'] = $pointOfInitiation;

        return $this;
    }

    public function getDisabledPayMethods()
    {
        return $this->container['disabledPayMethods'];
    }

    public function setDisabledPayMethods($disabledPayMethods)
    {
        if (is_null($disabledPayMethods)) {
            throw new \InvalidArgumentException('non-nullable disabledPayMethods cannot be null');
        }
        if ((mb_strlen($disabledPayMethods) > 64)) {
            throw new \InvalidArgumentException('invalid length for $disabledPayMethods when calling WidgetPaymentRequest., must be smaller than or equal to 64.');
        }

        $this->container['disabledPayMethods'] = $disabledPayMethods;

        return $this;
    }

    public function getPayOptionDetails()
    {
        return $this->container['payOptionDetails'];
    }

    public function setPayOptionDetails($payOptionDetails)
    {
        if (is_null($payOptionDetails)) {
            throw new \InvalidArgumentException('non-nullable payOptionDetails cannot be null');
        }
        $this->container['payOptionDetails'] = $payOptionDetails;

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

    public function getUrlParams()
    {
        return $this->container['urlParams'];
    }

    public function setUrlParams($urlParams)
    {
        if (is_null($urlParams)) {
            throw new \InvalidArgumentException('non-nullable urlParams cannot be null');
        }
        $this->container['urlParams'] = $urlParams;

        return $this;
    }


}


