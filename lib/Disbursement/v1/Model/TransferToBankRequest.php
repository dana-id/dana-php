<?php

namespace Dana\Disbursement\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\Disbursement\v1\Enum;

class TransferToBankRequest extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'TransferToBankRequest';

    protected static $openAPITypes = [
        'partnerReferenceNo' => 'string',
        'customerNumber' => 'string',
        'accountType' => 'string',
        'beneficiaryAccountNumber' => 'string',
        'beneficiaryBankCode' => 'string',
        'amount' => '\Dana\Disbursement\v1\Model\Money',
        'additionalInfo' => '\Dana\Disbursement\v1\Model\TransferToBankRequestAdditionalInfo'
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

        if (!is_null($this->container['accountType']) && (mb_strlen($this->container['accountType']) > 25)) {
            $invalidProperties[] = "invalid value for 'accountType', the character length must be smaller than or equal to 25.";
        }

        if ($this->container['beneficiaryAccountNumber'] === null) {
            $invalidProperties[] = "'beneficiaryAccountNumber' can't be null";
        }
        if ((mb_strlen($this->container['beneficiaryAccountNumber']) > 32)) {
            $invalidProperties[] = "invalid value for 'beneficiaryAccountNumber', the character length must be smaller than or equal to 32.";
        }

        if ($this->container['beneficiaryBankCode'] === null) {
            $invalidProperties[] = "'beneficiaryBankCode' can't be null";
        }
        if ((mb_strlen($this->container['beneficiaryBankCode']) > 8)) {
            $invalidProperties[] = "invalid value for 'beneficiaryBankCode', the character length must be smaller than or equal to 8.";
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
            throw new \InvalidArgumentException('invalid length for $partnerReferenceNo when calling TransferToBankRequest., must be smaller than or equal to 64.');
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
            throw new \InvalidArgumentException('invalid length for $customerNumber when calling TransferToBankRequest., must be smaller than or equal to 32.');
        }

        $this->container['customerNumber'] = $customerNumber;

        return $this;
    }

    public function getAccountType()
    {
        return $this->container['accountType'];
    }

    public function setAccountType($accountType)
    {
        if (is_null($accountType)) {
            throw new \InvalidArgumentException('non-nullable accountType cannot be null');
        }
        if ((mb_strlen($accountType) > 25)) {
            throw new \InvalidArgumentException('invalid length for $accountType when calling TransferToBankRequest., must be smaller than or equal to 25.');
        }

        $this->container['accountType'] = $accountType;

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
            throw new \InvalidArgumentException('invalid length for $beneficiaryAccountNumber when calling TransferToBankRequest., must be smaller than or equal to 32.');
        }

        $this->container['beneficiaryAccountNumber'] = $beneficiaryAccountNumber;

        return $this;
    }

    public function getBeneficiaryBankCode()
    {
        return $this->container['beneficiaryBankCode'];
    }

    public function setBeneficiaryBankCode($beneficiaryBankCode)
    {
        if (is_null($beneficiaryBankCode)) {
            throw new \InvalidArgumentException('non-nullable beneficiaryBankCode cannot be null');
        }
        if ((mb_strlen($beneficiaryBankCode) > 8)) {
            throw new \InvalidArgumentException('invalid length for $beneficiaryBankCode when calling TransferToBankRequest., must be smaller than or equal to 8.');
        }

        $this->container['beneficiaryBankCode'] = $beneficiaryBankCode;

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


