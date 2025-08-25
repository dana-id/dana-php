<?php

namespace Dana\Widget\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\Widget\v1\Enum;

class QueryPaymentResponse extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'QueryPaymentResponse';

    protected static $openAPITypes = [
        'responseCode' => 'string',
        'responseMessage' => 'string',
        'originalPartnerReferenceNo' => 'string',
        'originalReferenceNo' => 'string',
        'originalExternalId' => 'string',
        'serviceCode' => 'string',
        'latestTransactionStatus' => 'string',
        'transactionStatusDesc' => 'string',
        'originalResponseCode' => 'string',
        'originalResponseMessage' => 'string',
        'sessionId' => 'string',
        'requestID' => 'string',
        'transAmount' => '\Dana\Widget\v1\Model\Money',
        'amount' => '\Dana\Widget\v1\Model\Money',
        'feeAmount' => '\Dana\Widget\v1\Model\Money',
        'paidTime' => 'string',
        'title' => 'string',
        'additionalInfo' => '\Dana\Widget\v1\Model\QueryPaymentResponseAdditionalInfo'
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

        if (!is_null($this->container['originalPartnerReferenceNo']) && (mb_strlen($this->container['originalPartnerReferenceNo']) > 64)) {
            $invalidProperties[] = "invalid value for 'originalPartnerReferenceNo', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['originalReferenceNo']) && (mb_strlen($this->container['originalReferenceNo']) > 64)) {
            $invalidProperties[] = "invalid value for 'originalReferenceNo', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['originalExternalId']) && (mb_strlen($this->container['originalExternalId']) > 32)) {
            $invalidProperties[] = "invalid value for 'originalExternalId', the character length must be smaller than or equal to 32.";
        }

        if ($this->container['serviceCode'] === null) {
            $invalidProperties[] = "'serviceCode' can't be null";
        }
        if ((mb_strlen($this->container['serviceCode']) > 2)) {
            $invalidProperties[] = "invalid value for 'serviceCode', the character length must be smaller than or equal to 2.";
        }

        if ($this->container['latestTransactionStatus'] === null) {
            $invalidProperties[] = "'latestTransactionStatus' can't be null";
        }
        if ((mb_strlen($this->container['latestTransactionStatus']) > 2)) {
            $invalidProperties[] = "invalid value for 'latestTransactionStatus', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['transactionStatusDesc']) && (mb_strlen($this->container['transactionStatusDesc']) > 50)) {
            $invalidProperties[] = "invalid value for 'transactionStatusDesc', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['originalResponseCode']) && (mb_strlen($this->container['originalResponseCode']) > 7)) {
            $invalidProperties[] = "invalid value for 'originalResponseCode', the character length must be smaller than or equal to 7.";
        }

        if (!is_null($this->container['originalResponseMessage']) && (mb_strlen($this->container['originalResponseMessage']) > 150)) {
            $invalidProperties[] = "invalid value for 'originalResponseMessage', the character length must be smaller than or equal to 150.";
        }

        if (!is_null($this->container['sessionId']) && (mb_strlen($this->container['sessionId']) > 25)) {
            $invalidProperties[] = "invalid value for 'sessionId', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['requestID']) && (mb_strlen($this->container['requestID']) > 25)) {
            $invalidProperties[] = "invalid value for 'requestID', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['paidTime']) && (mb_strlen($this->container['paidTime']) > 25)) {
            $invalidProperties[] = "invalid value for 'paidTime', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['paidTime']) && !preg_match("/^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/", $this->container['paidTime'])) {
            $invalidProperties[] = "invalid value for 'paidTime', must be conform to the pattern /^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/.";
        }

        if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 256)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 256.";
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
            throw new \InvalidArgumentException('invalid length for $responseCode when calling QueryPaymentResponse., must be smaller than or equal to 7.');
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
            throw new \InvalidArgumentException('invalid length for $responseMessage when calling QueryPaymentResponse., must be smaller than or equal to 150.');
        }

        $this->container['responseMessage'] = $responseMessage;

        return $this;
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
            throw new \InvalidArgumentException('invalid length for $originalPartnerReferenceNo when calling QueryPaymentResponse., must be smaller than or equal to 64.');
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
            throw new \InvalidArgumentException('invalid length for $originalReferenceNo when calling QueryPaymentResponse., must be smaller than or equal to 64.');
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
        if ((mb_strlen($originalExternalId) > 32)) {
            throw new \InvalidArgumentException('invalid length for $originalExternalId when calling QueryPaymentResponse., must be smaller than or equal to 32.');
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
            throw new \InvalidArgumentException('invalid length for $serviceCode when calling QueryPaymentResponse., must be smaller than or equal to 2.');
        }

        $this->container['serviceCode'] = $serviceCode;

        return $this;
    }

    public function getLatestTransactionStatus()
    {
        return $this->container['latestTransactionStatus'];
    }

    public function setLatestTransactionStatus($latestTransactionStatus)
    {
        if (is_null($latestTransactionStatus)) {
            throw new \InvalidArgumentException('non-nullable latestTransactionStatus cannot be null');
        }
        if ((mb_strlen($latestTransactionStatus) > 2)) {
            throw new \InvalidArgumentException('invalid length for $latestTransactionStatus when calling QueryPaymentResponse., must be smaller than or equal to 2.');
        }

        $this->container['latestTransactionStatus'] = $latestTransactionStatus;

        return $this;
    }

    public function getTransactionStatusDesc()
    {
        return $this->container['transactionStatusDesc'];
    }

    public function setTransactionStatusDesc($transactionStatusDesc)
    {
        if (is_null($transactionStatusDesc)) {
            throw new \InvalidArgumentException('non-nullable transactionStatusDesc cannot be null');
        }
        if ((mb_strlen($transactionStatusDesc) > 50)) {
            throw new \InvalidArgumentException('invalid length for $transactionStatusDesc when calling QueryPaymentResponse., must be smaller than or equal to 50.');
        }

        $this->container['transactionStatusDesc'] = $transactionStatusDesc;

        return $this;
    }

    public function getOriginalResponseCode()
    {
        return $this->container['originalResponseCode'];
    }

    public function setOriginalResponseCode($originalResponseCode)
    {
        if (is_null($originalResponseCode)) {
            throw new \InvalidArgumentException('non-nullable originalResponseCode cannot be null');
        }
        if ((mb_strlen($originalResponseCode) > 7)) {
            throw new \InvalidArgumentException('invalid length for $originalResponseCode when calling QueryPaymentResponse., must be smaller than or equal to 7.');
        }

        $this->container['originalResponseCode'] = $originalResponseCode;

        return $this;
    }

    public function getOriginalResponseMessage()
    {
        return $this->container['originalResponseMessage'];
    }

    public function setOriginalResponseMessage($originalResponseMessage)
    {
        if (is_null($originalResponseMessage)) {
            throw new \InvalidArgumentException('non-nullable originalResponseMessage cannot be null');
        }
        if ((mb_strlen($originalResponseMessage) > 150)) {
            throw new \InvalidArgumentException('invalid length for $originalResponseMessage when calling QueryPaymentResponse., must be smaller than or equal to 150.');
        }

        $this->container['originalResponseMessage'] = $originalResponseMessage;

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
            throw new \InvalidArgumentException('invalid length for $sessionId when calling QueryPaymentResponse., must be smaller than or equal to 25.');
        }

        $this->container['sessionId'] = $sessionId;

        return $this;
    }

    public function getRequestID()
    {
        return $this->container['requestID'];
    }

    public function setRequestID($requestID)
    {
        if (is_null($requestID)) {
            throw new \InvalidArgumentException('non-nullable requestID cannot be null');
        }
        if ((mb_strlen($requestID) > 25)) {
            throw new \InvalidArgumentException('invalid length for $requestID when calling QueryPaymentResponse., must be smaller than or equal to 25.');
        }

        $this->container['requestID'] = $requestID;

        return $this;
    }

    public function getTransAmount()
    {
        return $this->container['transAmount'];
    }

    public function setTransAmount($transAmount)
    {
        if (is_null($transAmount)) {
            throw new \InvalidArgumentException('non-nullable transAmount cannot be null');
        }
        $this->container['transAmount'] = $transAmount;

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

    public function getPaidTime()
    {
        return $this->container['paidTime'];
    }

    public function setPaidTime($paidTime)
    {
        if (is_null($paidTime)) {
            throw new \InvalidArgumentException('non-nullable paidTime cannot be null');
        }
        if ((mb_strlen($paidTime) > 25)) {
            throw new \InvalidArgumentException('invalid length for $paidTime when calling QueryPaymentResponse., must be smaller than or equal to 25.');
        }
        if ((!preg_match("/^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/", ObjectSerializer::toString($paidTime)))) {
            throw new \InvalidArgumentException("invalid value for \$paidTime when calling QueryPaymentResponse., must conform to the pattern /^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/.");
        }

        $this->container['paidTime'] = $paidTime;

        return $this;
    }

    public function getTitle()
    {
        return $this->container['title'];
    }

    public function setTitle($title)
    {
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }
        if ((mb_strlen($title) > 256)) {
            throw new \InvalidArgumentException('invalid length for $title when calling QueryPaymentResponse., must be smaller than or equal to 256.');
        }

        $this->container['title'] = $title;

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


