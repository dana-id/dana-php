<?php

namespace Dana\Widget\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\Widget\v1\Enum;

class CancelOrderResponse extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'CancelOrderResponse';

    protected static $openAPITypes = [
        'responseCode' => 'string',
        'responseMessage' => 'string',
        'originalReferenceNo' => 'string',
        'originalPartnerReferenceNo' => 'string',
        'originalExternalId' => 'string',
        'cancelTime' => 'string',
        'transactionDate' => 'string',
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

        if (!is_null($this->container['originalReferenceNo']) && (mb_strlen($this->container['originalReferenceNo']) > 64)) {
            $invalidProperties[] = "invalid value for 'originalReferenceNo', the character length must be smaller than or equal to 64.";
        }

        if ($this->container['originalPartnerReferenceNo'] === null) {
            $invalidProperties[] = "'originalPartnerReferenceNo' can't be null";
        }
        if ((mb_strlen($this->container['originalPartnerReferenceNo']) > 64)) {
            $invalidProperties[] = "invalid value for 'originalPartnerReferenceNo', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['originalExternalId']) && (mb_strlen($this->container['originalExternalId']) > 36)) {
            $invalidProperties[] = "invalid value for 'originalExternalId', the character length must be smaller than or equal to 36.";
        }

        if (!is_null($this->container['cancelTime']) && (mb_strlen($this->container['cancelTime']) > 25)) {
            $invalidProperties[] = "invalid value for 'cancelTime', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['cancelTime']) && !preg_match("/^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/", $this->container['cancelTime'])) {
            $invalidProperties[] = "invalid value for 'cancelTime', must be conform to the pattern /^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/.";
        }

        if (!is_null($this->container['transactionDate']) && (mb_strlen($this->container['transactionDate']) > 25)) {
            $invalidProperties[] = "invalid value for 'transactionDate', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['transactionDate']) && !preg_match("/^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/", $this->container['transactionDate'])) {
            $invalidProperties[] = "invalid value for 'transactionDate', must be conform to the pattern /^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/.";
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
            throw new \InvalidArgumentException('invalid length for $responseCode when calling CancelOrderResponse., must be smaller than or equal to 7.');
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
            throw new \InvalidArgumentException('invalid length for $responseMessage when calling CancelOrderResponse., must be smaller than or equal to 150.');
        }

        $this->container['responseMessage'] = $responseMessage;

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
            throw new \InvalidArgumentException('invalid length for $originalReferenceNo when calling CancelOrderResponse., must be smaller than or equal to 64.');
        }

        $this->container['originalReferenceNo'] = $originalReferenceNo;

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
            throw new \InvalidArgumentException('invalid length for $originalPartnerReferenceNo when calling CancelOrderResponse., must be smaller than or equal to 64.');
        }

        $this->container['originalPartnerReferenceNo'] = $originalPartnerReferenceNo;

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
            throw new \InvalidArgumentException('invalid length for $originalExternalId when calling CancelOrderResponse., must be smaller than or equal to 36.');
        }

        $this->container['originalExternalId'] = $originalExternalId;

        return $this;
    }

    public function getCancelTime()
    {
        return $this->container['cancelTime'];
    }

    public function setCancelTime($cancelTime)
    {
        if (is_null($cancelTime)) {
            throw new \InvalidArgumentException('non-nullable cancelTime cannot be null');
        }
        if ((mb_strlen($cancelTime) > 25)) {
            throw new \InvalidArgumentException('invalid length for $cancelTime when calling CancelOrderResponse., must be smaller than or equal to 25.');
        }
        if ((!preg_match("/^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/", ObjectSerializer::toString($cancelTime)))) {
            throw new \InvalidArgumentException("invalid value for \$cancelTime when calling CancelOrderResponse., must conform to the pattern /^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/.");
        }

        $this->container['cancelTime'] = $cancelTime;

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
            throw new \InvalidArgumentException('invalid length for $transactionDate when calling CancelOrderResponse., must be smaller than or equal to 25.');
        }
        if ((!preg_match("/^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/", ObjectSerializer::toString($transactionDate)))) {
            throw new \InvalidArgumentException("invalid value for \$transactionDate when calling CancelOrderResponse., must conform to the pattern /^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/.");
        }

        $this->container['transactionDate'] = $transactionDate;

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


