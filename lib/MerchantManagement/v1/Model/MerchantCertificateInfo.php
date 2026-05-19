<?php

namespace Dana\MerchantManagement\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\MerchantManagement\v1\Enum;

class MerchantCertificateInfo extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'MerchantCertificateInfo';

    protected static $openAPITypes = [
        'certificateNo' => 'string',
        'certificateType' => 'string',
        'certificateUrls' => 'string[]',
        'certificateExpiryDate' => 'string'
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

    protected array $openAPINullablesSetToNull = [];

    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
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

        if (!is_null($this->container['certificateNo']) && (mb_strlen($this->container['certificateNo']) > 256)) {
            $invalidProperties[] = "invalid value for 'certificateNo', the character length must be smaller than or equal to 256.";
        }

        if (!is_null($this->container['certificateType']) && (mb_strlen($this->container['certificateType']) > 16)) {
            $invalidProperties[] = "invalid value for 'certificateType', the character length must be smaller than or equal to 16.";
        }

        if (!is_null($this->container['certificateExpiryDate']) && (mb_strlen($this->container['certificateExpiryDate']) > 25)) {
            $invalidProperties[] = "invalid value for 'certificateExpiryDate', the character length must be smaller than or equal to 25.";
        }

        return $invalidProperties;
    }



    public function getCertificateNo()
    {
        return $this->container['certificateNo'];
    }

    public function setCertificateNo($certificateNo)
    {
        if (is_null($certificateNo)) {
            throw new \InvalidArgumentException('non-nullable certificateNo cannot be null');
        }
        if ((mb_strlen($certificateNo) > 256)) {
            throw new \InvalidArgumentException('invalid length for $certificateNo when calling MerchantCertificateInfo., must be smaller than or equal to 256.');
        }

        $this->container['certificateNo'] = $certificateNo;

        return $this;
    }

    public function getCertificateType()
    {
        return $this->container['certificateType'];
    }

    public function setCertificateType($certificateType)
    {
        if (is_null($certificateType)) {
            throw new \InvalidArgumentException('non-nullable certificateType cannot be null');
        }
        if ((mb_strlen($certificateType) > 16)) {
            throw new \InvalidArgumentException('invalid length for $certificateType when calling MerchantCertificateInfo., must be smaller than or equal to 16.');
        }

        $this->container['certificateType'] = $certificateType;

        return $this;
    }

    public function getCertificateUrls()
    {
        return $this->container['certificateUrls'];
    }

    public function setCertificateUrls($certificateUrls)
    {
        if (is_null($certificateUrls)) {
            throw new \InvalidArgumentException('non-nullable certificateUrls cannot be null');
        }
        $this->container['certificateUrls'] = $certificateUrls;

        return $this;
    }

    public function getCertificateExpiryDate()
    {
        return $this->container['certificateExpiryDate'];
    }

    public function setCertificateExpiryDate($certificateExpiryDate)
    {
        if (is_null($certificateExpiryDate)) {
            throw new \InvalidArgumentException('non-nullable certificateExpiryDate cannot be null');
        }
        if ((mb_strlen($certificateExpiryDate) > 25)) {
            throw new \InvalidArgumentException('invalid length for $certificateExpiryDate when calling MerchantCertificateInfo., must be smaller than or equal to 25.');
        }

        $this->container['certificateExpiryDate'] = $certificateExpiryDate;

        return $this;
    }


}


