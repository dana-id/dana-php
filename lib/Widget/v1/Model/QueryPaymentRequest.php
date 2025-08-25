<?php

namespace Dana\Widget\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\Widget\v1\Enum;

class QueryPaymentRequest extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'QueryPaymentRequest';

    protected static $openAPITypes = [
        'originalPartnerReferenceNo' => 'string',
        'originalReferenceNo' => 'string',
        'originalExternalId' => 'string',
        'serviceCode' => 'string',
        'transactionDate' => 'string',
        'amount' => '\Dana\Widget\v1\Model\Money',
        'merchantId' => 'string',
        'subMerchantId' => 'string',
        'externalStoreId' => 'string',
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
            
            'serviceCode' => '54',
            
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

        if (!is_null($this->container['originalPartnerReferenceNo']) && (mb_strlen($this->container['originalPartnerReferenceNo']) > 64)) {
            $invalidProperties[] = "invalid value for 'originalPartnerReferenceNo', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['originalReferenceNo']) && (mb_strlen($this->container['originalReferenceNo']) > 64)) {
            $invalidProperties[] = "invalid value for 'originalReferenceNo', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['originalExternalId']) && (mb_strlen($this->container['originalExternalId']) > 36)) {
            $invalidProperties[] = "invalid value for 'originalExternalId', the character length must be smaller than or equal to 36.";
        }

        if ($this->container['serviceCode'] === null) {
            $invalidProperties[] = "'serviceCode' can't be null";
        }
        if ((mb_strlen($this->container['serviceCode']) > 2)) {
            $invalidProperties[] = "invalid value for 'serviceCode', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['transactionDate']) && (mb_strlen($this->container['transactionDate']) > 25)) {
            $invalidProperties[] = "invalid value for 'transactionDate', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['transactionDate']) && !preg_match("/^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/", $this->container['transactionDate'])) {
            $invalidProperties[] = "invalid value for 'transactionDate', must be conform to the pattern /^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/.";
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
            throw new \InvalidArgumentException('invalid length for $originalPartnerReferenceNo when calling QueryPaymentRequest., must be smaller than or equal to 64.');
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
            throw new \InvalidArgumentException('invalid length for $originalReferenceNo when calling QueryPaymentRequest., must be smaller than or equal to 64.');
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
            throw new \InvalidArgumentException('invalid length for $originalExternalId when calling QueryPaymentRequest., must be smaller than or equal to 36.');
        }

        $this->container['originalExternalId'] = $originalExternalId;

        return $this;
    }

    public function getServiceCode()
    {
        return $this->container['serviceCode'];
    }

    public function setServiceCode($serviceCode)
    {
        if (is_null($serviceCode)) {
            throw new \InvalidArgumentException('non-nullable serviceCode cannot be null');
        }
        if ((mb_strlen($serviceCode) > 2)) {
            throw new \InvalidArgumentException('invalid length for $serviceCode when calling QueryPaymentRequest., must be smaller than or equal to 2.');
        }

        $this->container['serviceCode'] = $serviceCode;

        return $this;
    }

    public function getTransactionDate()
    {
        return $this->container['transactionDate'];
    }

    public function setTransactionDate($transactionDate)
    {
        if (is_null($transactionDate)) {
            throw new \InvalidArgumentException('non-nullable transactionDate cannot be null');
        }
        if ((mb_strlen($transactionDate) > 25)) {
            throw new \InvalidArgumentException('invalid length for $transactionDate when calling QueryPaymentRequest., must be smaller than or equal to 25.');
        }
        if ((!preg_match("/^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/", ObjectSerializer::toString($transactionDate)))) {
            throw new \InvalidArgumentException("invalid value for \$transactionDate when calling QueryPaymentRequest., must conform to the pattern /^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/.");
        }

        $this->container['transactionDate'] = $transactionDate;

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
            throw new \InvalidArgumentException('invalid length for $merchantId when calling QueryPaymentRequest., must be smaller than or equal to 64.');
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
            throw new \InvalidArgumentException('invalid length for $subMerchantId when calling QueryPaymentRequest., must be smaller than or equal to 32.');
        }

        $this->container['subMerchantId'] = $subMerchantId;

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
            throw new \InvalidArgumentException('invalid length for $externalStoreId when calling QueryPaymentRequest., must be smaller than or equal to 64.');
        }

        $this->container['externalStoreId'] = $externalStoreId;

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


