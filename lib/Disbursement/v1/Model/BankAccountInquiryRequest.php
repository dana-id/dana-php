<?php

namespace Dana\Disbursement\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\Disbursement\v1\Enum;

class BankAccountInquiryRequest extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'BankAccountInquiryRequest';

    protected static $openAPITypes = [
        'partnerReferenceNo' => 'string',
        'customerNumber' => 'string',
        'beneficiaryAccountNumber' => 'string',
        'amount' => '\Dana\Disbursement\v1\Model\Money',
        'additionalInfo' => '\Dana\Disbursement\v1\Model\BankAccountInquiryRequestAdditionalInfo'
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

        if (!is_null($this->container['partnerReferenceNo']) && (mb_strlen($this->container['partnerReferenceNo']) > 64)) {
            $invalidProperties[] = "invalid value for 'partnerReferenceNo', the character length must be smaller than or equal to 64.";
        }

        if ($this->container['customerNumber'] === null) {
            $invalidProperties[] = "'customerNumber' can't be null";
        }
        if ((mb_strlen($this->container['customerNumber']) > 32)) {
            $invalidProperties[] = "invalid value for 'customerNumber', the character length must be smaller than or equal to 32.";
        }

        if ($this->container['beneficiaryAccountNumber'] === null) {
            $invalidProperties[] = "'beneficiaryAccountNumber' can't be null";
        }
        if ((mb_strlen($this->container['beneficiaryAccountNumber']) > 32)) {
            $invalidProperties[] = "invalid value for 'beneficiaryAccountNumber', the character length must be smaller than or equal to 32.";
        }

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
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
            throw new \InvalidArgumentException('invalid length for $partnerReferenceNo when calling BankAccountInquiryRequest., must be smaller than or equal to 64.');
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
            throw new \InvalidArgumentException('invalid length for $customerNumber when calling BankAccountInquiryRequest., must be smaller than or equal to 32.');
        }

        $this->container['customerNumber'] = $customerNumber;

        return $this;
    }

    public function getBeneficiaryAccountNumber()
    {
        return $this->container['beneficiaryAccountNumber'];
    }

    public function setBeneficiaryAccountNumber($beneficiaryAccountNumber)
    {
        if (is_null($beneficiaryAccountNumber)) {
            throw new \InvalidArgumentException('non-nullable beneficiaryAccountNumber cannot be null');
        }
        if ((mb_strlen($beneficiaryAccountNumber) > 32)) {
            throw new \InvalidArgumentException('invalid length for $beneficiaryAccountNumber when calling BankAccountInquiryRequest., must be smaller than or equal to 32.');
        }

        $this->container['beneficiaryAccountNumber'] = $beneficiaryAccountNumber;

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


