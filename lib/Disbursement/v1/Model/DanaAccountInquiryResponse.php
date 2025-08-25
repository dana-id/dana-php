<?php

namespace Dana\Disbursement\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\Disbursement\v1\Enum;

class DanaAccountInquiryResponse extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'DanaAccountInquiryResponse';

    protected static $openAPITypes = [
        'responseCode' => 'string',
        'responseMessage' => 'string',
        'referenceNo' => 'string',
        'partnerReferenceNo' => 'string',
        'sessionId' => 'string',
        'customerNumber' => 'string',
        'customerName' => 'string',
        'customerMonthlyInLimit' => 'string',
        'minAmount' => '\Dana\Disbursement\v1\Model\Money',
        'maxAmount' => '\Dana\Disbursement\v1\Model\Money',
        'amount' => '\Dana\Disbursement\v1\Model\Money',
        'feeAmount' => '\Dana\Disbursement\v1\Model\Money',
        'feeType' => 'string',
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

        if ($this->container['responseCode'] === null) {
            $invalidProperties[] = "'responseCode' can't be null";
        }
        if ((mb_strlen($this->container['responseCode']) > 7)) {
            $invalidProperties[] = "invalid value for 'responseCode', the character length must be smaller than or equal to 7.";
        }

        if ($this->container['responseMessage'] === null) {
            $invalidProperties[] = "'responseMessage' can't be null";
        }
        if ((mb_strlen($this->container['responseMessage']) > 150)) {
            $invalidProperties[] = "invalid value for 'responseMessage', the character length must be smaller than or equal to 150.";
        }

        if (!is_null($this->container['referenceNo']) && (mb_strlen($this->container['referenceNo']) > 64)) {
            $invalidProperties[] = "invalid value for 'referenceNo', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['partnerReferenceNo']) && (mb_strlen($this->container['partnerReferenceNo']) > 64)) {
            $invalidProperties[] = "invalid value for 'partnerReferenceNo', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['sessionId']) && (mb_strlen($this->container['sessionId']) > 25)) {
            $invalidProperties[] = "invalid value for 'sessionId', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['customerNumber']) && (mb_strlen($this->container['customerNumber']) > 32)) {
            $invalidProperties[] = "invalid value for 'customerNumber', the character length must be smaller than or equal to 32.";
        }

        if ($this->container['customerName'] === null) {
            $invalidProperties[] = "'customerName' can't be null";
        }
        if ((mb_strlen($this->container['customerName']) > 255)) {
            $invalidProperties[] = "invalid value for 'customerName', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['customerMonthlyInLimit']) && (mb_strlen($this->container['customerMonthlyInLimit']) > 17)) {
            $invalidProperties[] = "invalid value for 'customerMonthlyInLimit', the character length must be smaller than or equal to 17.";
        }

        if ($this->container['minAmount'] === null) {
            $invalidProperties[] = "'minAmount' can't be null";
        }
        if ($this->container['maxAmount'] === null) {
            $invalidProperties[] = "'maxAmount' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['feeAmount'] === null) {
            $invalidProperties[] = "'feeAmount' can't be null";
        }
        if (!is_null($this->container['feeType']) && (mb_strlen($this->container['feeType']) > 25)) {
            $invalidProperties[] = "invalid value for 'feeType', the character length must be smaller than or equal to 25.";
        }

        return $invalidProperties;
    }



    public function getResponseCode()
    {
        return $this->container['responseCode'];
    }

    public function setResponseCode($responseCode)
    {
        if (is_null($responseCode)) {
            throw new \InvalidArgumentException('non-nullable responseCode cannot be null');
        }
        if ((mb_strlen($responseCode) > 7)) {
            throw new \InvalidArgumentException('invalid length for $responseCode when calling DanaAccountInquiryResponse., must be smaller than or equal to 7.');
        }

        $this->container['responseCode'] = $responseCode;

        return $this;
    }

    public function getResponseMessage()
    {
        return $this->container['responseMessage'];
    }

    public function setResponseMessage($responseMessage)
    {
        if (is_null($responseMessage)) {
            throw new \InvalidArgumentException('non-nullable responseMessage cannot be null');
        }
        if ((mb_strlen($responseMessage) > 150)) {
            throw new \InvalidArgumentException('invalid length for $responseMessage when calling DanaAccountInquiryResponse., must be smaller than or equal to 150.');
        }

        $this->container['responseMessage'] = $responseMessage;

        return $this;
    }

    public function getReferenceNo()
    {
        return $this->container['referenceNo'];
    }

    public function setReferenceNo($referenceNo)
    {
        if (is_null($referenceNo)) {
            throw new \InvalidArgumentException('non-nullable referenceNo cannot be null');
        }
        if ((mb_strlen($referenceNo) > 64)) {
            throw new \InvalidArgumentException('invalid length for $referenceNo when calling DanaAccountInquiryResponse., must be smaller than or equal to 64.');
        }

        $this->container['referenceNo'] = $referenceNo;

        return $this;
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
            throw new \InvalidArgumentException('invalid length for $partnerReferenceNo when calling DanaAccountInquiryResponse., must be smaller than or equal to 64.');
        }

        $this->container['partnerReferenceNo'] = $partnerReferenceNo;

        return $this;
    }

    public function getSessionId()
    {
        return $this->container['sessionId'];
    }

    public function setSessionId($sessionId)
    {
        if (is_null($sessionId)) {
            throw new \InvalidArgumentException('non-nullable sessionId cannot be null');
        }
        if ((mb_strlen($sessionId) > 25)) {
            throw new \InvalidArgumentException('invalid length for $sessionId when calling DanaAccountInquiryResponse., must be smaller than or equal to 25.');
        }

        $this->container['sessionId'] = $sessionId;

        return $this;
    }

    public function getCustomerNumber()
    {
        return $this->container['customerNumber'];
    }

    public function setCustomerNumber($customerNumber)
    {
        if (is_null($customerNumber)) {
            throw new \InvalidArgumentException('non-nullable customerNumber cannot be null');
        }
        if ((mb_strlen($customerNumber) > 32)) {
            throw new \InvalidArgumentException('invalid length for $customerNumber when calling DanaAccountInquiryResponse., must be smaller than or equal to 32.');
        }

        $this->container['customerNumber'] = $customerNumber;

        return $this;
    }

    public function getCustomerName()
    {
        return $this->container['customerName'];
    }

    public function setCustomerName($customerName)
    {
        if (is_null($customerName)) {
            throw new \InvalidArgumentException('non-nullable customerName cannot be null');
        }
        if ((mb_strlen($customerName) > 255)) {
            throw new \InvalidArgumentException('invalid length for $customerName when calling DanaAccountInquiryResponse., must be smaller than or equal to 255.');
        }

        $this->container['customerName'] = $customerName;

        return $this;
    }

    public function getCustomerMonthlyInLimit()
    {
        return $this->container['customerMonthlyInLimit'];
    }

    public function setCustomerMonthlyInLimit($customerMonthlyInLimit)
    {
        if (is_null($customerMonthlyInLimit)) {
            throw new \InvalidArgumentException('non-nullable customerMonthlyInLimit cannot be null');
        }
        if ((mb_strlen($customerMonthlyInLimit) > 17)) {
            throw new \InvalidArgumentException('invalid length for $customerMonthlyInLimit when calling DanaAccountInquiryResponse., must be smaller than or equal to 17.');
        }

        $this->container['customerMonthlyInLimit'] = $customerMonthlyInLimit;

        return $this;
    }

    public function getMinAmount()
    {
        return $this->container['minAmount'];
    }

    public function setMinAmount($minAmount)
    {
        if (is_null($minAmount)) {
            throw new \InvalidArgumentException('non-nullable minAmount cannot be null');
        }
        $this->container['minAmount'] = $minAmount;

        return $this;
    }

    public function getMaxAmount()
    {
        return $this->container['maxAmount'];
    }

    public function setMaxAmount($maxAmount)
    {
        if (is_null($maxAmount)) {
            throw new \InvalidArgumentException('non-nullable maxAmount cannot be null');
        }
        $this->container['maxAmount'] = $maxAmount;

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

    public function getFeeAmount()
    {
        return $this->container['feeAmount'];
    }

    public function setFeeAmount($feeAmount)
    {
        if (is_null($feeAmount)) {
            throw new \InvalidArgumentException('non-nullable feeAmount cannot be null');
        }
        $this->container['feeAmount'] = $feeAmount;

        return $this;
    }

    public function getFeeType()
    {
        return $this->container['feeType'];
    }

    public function setFeeType($feeType)
    {
        if (is_null($feeType)) {
            throw new \InvalidArgumentException('non-nullable feeType cannot be null');
        }
        if ((mb_strlen($feeType) > 25)) {
            throw new \InvalidArgumentException('invalid length for $feeType when calling DanaAccountInquiryResponse., must be smaller than or equal to 25.');
        }

        $this->container['feeType'] = $feeType;

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


