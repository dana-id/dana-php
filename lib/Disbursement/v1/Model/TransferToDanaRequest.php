<?php

namespace Dana\Disbursement\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\Disbursement\v1\Enum;

class TransferToDanaRequest extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'TransferToDanaRequest';

    protected static $openAPITypes = [
        'partnerReferenceNo' => 'string',
        'customerNumber' => 'string',
        'amount' => '\Dana\Disbursement\v1\Model\Money',
        'feeAmount' => '\Dana\Disbursement\v1\Model\Money',
        'transactionDate' => 'string',
        'sessionId' => 'string',
        'categoryId' => 'float',
        'notes' => 'string',
        'additionalInfo' => '\Dana\Disbursement\v1\Model\TransferToDanaRequestAdditionalInfo'
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

        if (!is_null($this->container['customerNumber']) && (mb_strlen($this->container['customerNumber']) > 32)) {
            $invalidProperties[] = "invalid value for 'customerNumber', the character length must be smaller than or equal to 32.";
        }

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['feeAmount'] === null) {
            $invalidProperties[] = "'feeAmount' can't be null";
        }
        if (!is_null($this->container['transactionDate']) && (mb_strlen($this->container['transactionDate']) > 25)) {
            $invalidProperties[] = "invalid value for 'transactionDate', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['transactionDate']) && !preg_match("/^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/", $this->container['transactionDate'])) {
            $invalidProperties[] = "invalid value for 'transactionDate', must be conform to the pattern /^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/.";
        }

        if (!is_null($this->container['sessionId']) && (mb_strlen($this->container['sessionId']) > 25)) {
            $invalidProperties[] = "invalid value for 'sessionId', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['categoryId']) && ($this->container['categoryId'] > 9999999999)) {
            $invalidProperties[] = "invalid value for 'categoryId', must be smaller than or equal to 9999999999.";
        }

        if (!is_null($this->container['notes']) && (mb_strlen($this->container['notes']) > 255)) {
            $invalidProperties[] = "invalid value for 'notes', the character length must be smaller than or equal to 255.";
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
            throw new \InvalidArgumentException('invalid length for $partnerReferenceNo when calling TransferToDanaRequest., must be smaller than or equal to 64.');
        }

        $this->container['partnerReferenceNo'] = $partnerReferenceNo;

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
            throw new \InvalidArgumentException('invalid length for $customerNumber when calling TransferToDanaRequest., must be smaller than or equal to 32.');
        }

        $this->container['customerNumber'] = $customerNumber;

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
            throw new \InvalidArgumentException('invalid length for $transactionDate when calling TransferToDanaRequest., must be smaller than or equal to 25.');
        }
        if ((!preg_match("/^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/", ObjectSerializer::toString($transactionDate)))) {
            throw new \InvalidArgumentException("invalid value for \$transactionDate when calling TransferToDanaRequest., must conform to the pattern /^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/.");
        }

        $this->container['transactionDate'] = $transactionDate;

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
            throw new \InvalidArgumentException('invalid length for $sessionId when calling TransferToDanaRequest., must be smaller than or equal to 25.');
        }

        $this->container['sessionId'] = $sessionId;

        return $this;
    }

    public function getCategoryId()
    {
        return $this->container['categoryId'];
    }

    public function setCategoryId($categoryId)
    {
        if (is_null($categoryId)) {
            throw new \InvalidArgumentException('non-nullable categoryId cannot be null');
        }

        if (($categoryId > 9999999999)) {
            throw new \InvalidArgumentException('invalid value for $categoryId when calling TransferToDanaRequest., must be smaller than or equal to 9999999999.');
        }

        $this->container['categoryId'] = $categoryId;

        return $this;
    }

    public function getNotes()
    {
        return $this->container['notes'];
    }

    public function setNotes($notes)
    {
        if (is_null($notes)) {
            throw new \InvalidArgumentException('non-nullable notes cannot be null');
        }
        if ((mb_strlen($notes) > 255)) {
            throw new \InvalidArgumentException('invalid length for $notes when calling TransferToDanaRequest., must be smaller than or equal to 255.');
        }

        $this->container['notes'] = $notes;

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


