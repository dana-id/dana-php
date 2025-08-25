<?php

namespace Dana\PaymentGateway\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\PaymentGateway\v1\Enum;

class CancelOrderRequest extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'CancelOrderRequest';

    protected static $openAPITypes = [
        'originalPartnerReferenceNo' => 'string',
        'originalReferenceNo' => 'string',
        'originalExternalId' => 'string',
        'merchantId' => 'string',
        'subMerchantId' => 'string',
        'reason' => 'string',
        'externalStoreId' => 'string',
        'amount' => '\Dana\PaymentGateway\v1\Model\Money',
        'additionalInfo' => 'object'
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

        if ($this->container['originalPartnerReferenceNo'] === null) {
            $invalidProperties[] = "'originalPartnerReferenceNo' can't be null";
        }
        if ((mb_strlen($this->container['originalPartnerReferenceNo']) > 64)) {
            $invalidProperties[] = "invalid value for 'originalPartnerReferenceNo', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['originalReferenceNo']) && (mb_strlen($this->container['originalReferenceNo']) > 64)) {
            $invalidProperties[] = "invalid value for 'originalReferenceNo', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['originalExternalId']) && (mb_strlen($this->container['originalExternalId']) > 36)) {
            $invalidProperties[] = "invalid value for 'originalExternalId', the character length must be smaller than or equal to 36.";
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

        if (!is_null($this->container['reason']) && (mb_strlen($this->container['reason']) > 256)) {
            $invalidProperties[] = "invalid value for 'reason', the character length must be smaller than or equal to 256.";
        }

        if (!is_null($this->container['externalStoreId']) && (mb_strlen($this->container['externalStoreId']) > 64)) {
            $invalidProperties[] = "invalid value for 'externalStoreId', the character length must be smaller than or equal to 64.";
        }

        return $invalidProperties;
    }



    public function getOriginalPartnerReferenceNo()
    {
        return $this->container['originalPartnerReferenceNo'];
    }

    public function setOriginalPartnerReferenceNo($originalPartnerReferenceNo)
    {
        if (is_null($originalPartnerReferenceNo)) {
            throw new \InvalidArgumentException('non-nullable originalPartnerReferenceNo cannot be null');
        }
        if ((mb_strlen($originalPartnerReferenceNo) > 64)) {
            throw new \InvalidArgumentException('invalid length for $originalPartnerReferenceNo when calling CancelOrderRequest., must be smaller than or equal to 64.');
        }

        $this->container['originalPartnerReferenceNo'] = $originalPartnerReferenceNo;

        return $this;
    }

    public function getOriginalReferenceNo()
    {
        return $this->container['originalReferenceNo'];
    }

    public function setOriginalReferenceNo($originalReferenceNo)
    {
        if (is_null($originalReferenceNo)) {
            throw new \InvalidArgumentException('non-nullable originalReferenceNo cannot be null');
        }
        if ((mb_strlen($originalReferenceNo) > 64)) {
            throw new \InvalidArgumentException('invalid length for $originalReferenceNo when calling CancelOrderRequest., must be smaller than or equal to 64.');
        }

        $this->container['originalReferenceNo'] = $originalReferenceNo;

        return $this;
    }

    public function getOriginalExternalId()
    {
        return $this->container['originalExternalId'];
    }

    public function setOriginalExternalId($originalExternalId)
    {
        if (is_null($originalExternalId)) {
            throw new \InvalidArgumentException('non-nullable originalExternalId cannot be null');
        }
        if ((mb_strlen($originalExternalId) > 36)) {
            throw new \InvalidArgumentException('invalid length for $originalExternalId when calling CancelOrderRequest., must be smaller than or equal to 36.');
        }

        $this->container['originalExternalId'] = $originalExternalId;

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
            throw new \InvalidArgumentException('invalid length for $merchantId when calling CancelOrderRequest., must be smaller than or equal to 64.');
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
            throw new \InvalidArgumentException('invalid length for $subMerchantId when calling CancelOrderRequest., must be smaller than or equal to 32.');
        }

        $this->container['subMerchantId'] = $subMerchantId;

        return $this;
    }

    public function getReason()
    {
        return $this->container['reason'];
    }

    public function setReason($reason)
    {
        if (is_null($reason)) {
            throw new \InvalidArgumentException('non-nullable reason cannot be null');
        }
        if ((mb_strlen($reason) > 256)) {
            throw new \InvalidArgumentException('invalid length for $reason when calling CancelOrderRequest., must be smaller than or equal to 256.');
        }

        $this->container['reason'] = $reason;

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
            throw new \InvalidArgumentException('invalid length for $externalStoreId when calling CancelOrderRequest., must be smaller than or equal to 64.');
        }

        $this->container['externalStoreId'] = $externalStoreId;

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


