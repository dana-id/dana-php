<?php

namespace Dana\Disbursement\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\Disbursement\v1\Enum;

class BankAccountInquiryResponse extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'BankAccountInquiryResponse';

    protected static $openAPITypes = [
        'responseCode' => 'string',
        'responseMessage' => 'string',
        'referenceNo' => 'string',
        'partnerReferenceNo' => 'string',
        'accountType' => 'string',
        'beneficiaryAccountNumber' => 'string',
        'beneficiaryAccountName' => 'string',
        'beneficiaryBankCode' => 'string',
        'beneficiaryBankShortName' => 'string',
        'beneficiaryBankName' => 'string',
        'amount' => '\Dana\Disbursement\v1\Model\Money',
        'additionalInfo' => '\Dana\Disbursement\v1\Model\BankAccountInquiryResponseAdditionalInfo'
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

        if (!is_null($this->container['accountType']) && (mb_strlen($this->container['accountType']) > 25)) {
            $invalidProperties[] = "invalid value for 'accountType', the character length must be smaller than or equal to 25.";
        }

        if ($this->container['beneficiaryAccountNumber'] === null) {
            $invalidProperties[] = "'beneficiaryAccountNumber' can't be null";
        }
        if ((mb_strlen($this->container['beneficiaryAccountNumber']) > 32)) {
            $invalidProperties[] = "invalid value for 'beneficiaryAccountNumber', the character length must be smaller than or equal to 32.";
        }

        if ($this->container['beneficiaryAccountName'] === null) {
            $invalidProperties[] = "'beneficiaryAccountName' can't be null";
        }
        if ((mb_strlen($this->container['beneficiaryAccountName']) > 64)) {
            $invalidProperties[] = "invalid value for 'beneficiaryAccountName', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['beneficiaryBankCode']) && (mb_strlen($this->container['beneficiaryBankCode']) > 8)) {
            $invalidProperties[] = "invalid value for 'beneficiaryBankCode', the character length must be smaller than or equal to 8.";
        }

        if (!is_null($this->container['beneficiaryBankShortName']) && (mb_strlen($this->container['beneficiaryBankShortName']) > 25)) {
            $invalidProperties[] = "invalid value for 'beneficiaryBankShortName', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['beneficiaryBankName']) && (mb_strlen($this->container['beneficiaryBankName']) > 25)) {
            $invalidProperties[] = "invalid value for 'beneficiaryBankName', the character length must be smaller than or equal to 25.";
        }

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
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
            throw new \InvalidArgumentException('invalid length for $responseCode when calling BankAccountInquiryResponse., must be smaller than or equal to 7.');
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
            throw new \InvalidArgumentException('invalid length for $responseMessage when calling BankAccountInquiryResponse., must be smaller than or equal to 150.');
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
            throw new \InvalidArgumentException('invalid length for $referenceNo when calling BankAccountInquiryResponse., must be smaller than or equal to 64.');
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
            throw new \InvalidArgumentException('invalid length for $partnerReferenceNo when calling BankAccountInquiryResponse., must be smaller than or equal to 64.');
        }

        $this->container['partnerReferenceNo'] = $partnerReferenceNo;

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
            throw new \InvalidArgumentException('invalid length for $accountType when calling BankAccountInquiryResponse., must be smaller than or equal to 25.');
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
            throw new \InvalidArgumentException('invalid length for $beneficiaryAccountNumber when calling BankAccountInquiryResponse., must be smaller than or equal to 32.');
        }

        $this->container['beneficiaryAccountNumber'] = $beneficiaryAccountNumber;

        return $this;
    }

    public function getBeneficiaryAccountName()
    {
        return $this->container['beneficiaryAccountName'];
    }

    public function setBeneficiaryAccountName($beneficiaryAccountName)
    {
        if (is_null($beneficiaryAccountName)) {
            throw new \InvalidArgumentException('non-nullable beneficiaryAccountName cannot be null');
        }
        if ((mb_strlen($beneficiaryAccountName) > 64)) {
            throw new \InvalidArgumentException('invalid length for $beneficiaryAccountName when calling BankAccountInquiryResponse., must be smaller than or equal to 64.');
        }

        $this->container['beneficiaryAccountName'] = $beneficiaryAccountName;

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
            throw new \InvalidArgumentException('invalid length for $beneficiaryBankCode when calling BankAccountInquiryResponse., must be smaller than or equal to 8.');
        }

        $this->container['beneficiaryBankCode'] = $beneficiaryBankCode;

        return $this;
    }

    public function getBeneficiaryBankShortName()
    {
        return $this->container['beneficiaryBankShortName'];
    }

    public function setBeneficiaryBankShortName($beneficiaryBankShortName)
    {
        if (is_null($beneficiaryBankShortName)) {
            throw new \InvalidArgumentException('non-nullable beneficiaryBankShortName cannot be null');
        }
        if ((mb_strlen($beneficiaryBankShortName) > 25)) {
            throw new \InvalidArgumentException('invalid length for $beneficiaryBankShortName when calling BankAccountInquiryResponse., must be smaller than or equal to 25.');
        }

        $this->container['beneficiaryBankShortName'] = $beneficiaryBankShortName;

        return $this;
    }

    public function getBeneficiaryBankName()
    {
        return $this->container['beneficiaryBankName'];
    }

    public function setBeneficiaryBankName($beneficiaryBankName)
    {
        if (is_null($beneficiaryBankName)) {
            throw new \InvalidArgumentException('non-nullable beneficiaryBankName cannot be null');
        }
        if ((mb_strlen($beneficiaryBankName) > 25)) {
            throw new \InvalidArgumentException('invalid length for $beneficiaryBankName when calling BankAccountInquiryResponse., must be smaller than or equal to 25.');
        }

        $this->container['beneficiaryBankName'] = $beneficiaryBankName;

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


