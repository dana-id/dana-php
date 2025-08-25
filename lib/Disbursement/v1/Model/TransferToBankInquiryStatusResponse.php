<?php

namespace Dana\Disbursement\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\Disbursement\v1\Enum;

class TransferToBankInquiryStatusResponse extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'TransferToBankInquiryStatusResponse';

    protected static $openAPITypes = [
        'responseCode' => 'string',
        'responseMessage' => 'string',
        'originalPartnerReferenceNo' => 'string',
        'originalReferenceNo' => 'string',
        'originalExternalId' => 'string',
        'serviceCode' => 'string',
        'amount' => '\Dana\Disbursement\v1\Model\Money',
        'latestTransactionStatus' => 'string',
        'transactionStatusDesc' => 'string',
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

    public const LATEST_TRANSACTION_STATUS__00 = '00';
    public const LATEST_TRANSACTION_STATUS__01 = '01';
    public const LATEST_TRANSACTION_STATUS__02 = '02';
    public const LATEST_TRANSACTION_STATUS__03 = '03';
    public const LATEST_TRANSACTION_STATUS__04 = '04';
    public const LATEST_TRANSACTION_STATUS__05 = '05';
    public const LATEST_TRANSACTION_STATUS__06 = '06';
    public const LATEST_TRANSACTION_STATUS__07 = '07';

    public function getLatestTransactionStatusAllowableValues()
    {
        return [
            self::LATEST_TRANSACTION_STATUS__00,
            self::LATEST_TRANSACTION_STATUS__01,
            self::LATEST_TRANSACTION_STATUS__02,
            self::LATEST_TRANSACTION_STATUS__03,
            self::LATEST_TRANSACTION_STATUS__04,
            self::LATEST_TRANSACTION_STATUS__05,
            self::LATEST_TRANSACTION_STATUS__06,
            self::LATEST_TRANSACTION_STATUS__07,
        ];
    }




    public function __construct(?array $data = null)
    {
        $localData = [];
        $defaultValues = [
            
            'serviceCode' => '00',
            
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

        if (!is_null($this->container['originalExternalId']) && (mb_strlen($this->container['originalExternalId']) > 36)) {
            $invalidProperties[] = "invalid value for 'originalExternalId', the character length must be smaller than or equal to 36.";
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
        $allowedValues = $this->getLatestTransactionStatusAllowableValues();
        if (!is_null($this->container['latestTransactionStatus']) && !in_array($this->container['latestTransactionStatus'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'latestTransactionStatus', must be one of '%s'",
                $this->container['latestTransactionStatus'],
                implode("', '", $allowedValues)
            );
        }

        if ((mb_strlen($this->container['latestTransactionStatus']) > 2)) {
            $invalidProperties[] = "invalid value for 'latestTransactionStatus', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['transactionStatusDesc']) && (mb_strlen($this->container['transactionStatusDesc']) > 50)) {
            $invalidProperties[] = "invalid value for 'transactionStatusDesc', the character length must be smaller than or equal to 50.";
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
            throw new \InvalidArgumentException('invalid length for $responseCode when calling TransferToBankInquiryStatusResponse., must be smaller than or equal to 7.');
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
            throw new \InvalidArgumentException('invalid length for $responseMessage when calling TransferToBankInquiryStatusResponse., must be smaller than or equal to 150.');
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
            throw new \InvalidArgumentException('invalid length for $originalPartnerReferenceNo when calling TransferToBankInquiryStatusResponse., must be smaller than or equal to 64.');
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
            throw new \InvalidArgumentException('invalid length for $originalReferenceNo when calling TransferToBankInquiryStatusResponse., must be smaller than or equal to 64.');
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
            throw new \InvalidArgumentException('invalid length for $originalExternalId when calling TransferToBankInquiryStatusResponse., must be smaller than or equal to 36.');
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
            throw new \InvalidArgumentException('invalid length for $serviceCode when calling TransferToBankInquiryStatusResponse., must be smaller than or equal to 2.');
        }

        $this->container['serviceCode'] = $serviceCode;

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

    public function getLatestTransactionStatus()
    {
        return $this->container['latestTransactionStatus'];
    }

    public function setLatestTransactionStatus($latestTransactionStatus)
    {
        if (is_null($latestTransactionStatus)) {
            throw new \InvalidArgumentException('non-nullable latestTransactionStatus cannot be null');
        }
        $allowedValues = $this->getLatestTransactionStatusAllowableValues();
        if (!in_array($latestTransactionStatus, $allowedValues, true) && !empty($latestTransactionStatus)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'latestTransactionStatus', must be one of '%s'",
                    $latestTransactionStatus,
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($latestTransactionStatus) > 2)) {
            throw new \InvalidArgumentException('invalid length for $latestTransactionStatus when calling TransferToBankInquiryStatusResponse., must be smaller than or equal to 2.');
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
            throw new \InvalidArgumentException('invalid length for $transactionStatusDesc when calling TransferToBankInquiryStatusResponse., must be smaller than or equal to 50.');
        }

        $this->container['transactionStatusDesc'] = $transactionStatusDesc;

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


