<?php

namespace Dana\MerchantManagement\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\MerchantManagement\v1\Enum;

class MerchantContactAddress extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'MerchantContactAddress';

    protected static $openAPITypes = [
        'address1' => 'string',
        'address2' => 'string',
        'country' => 'string',
        'province' => 'string',
        'city' => 'string',
        'area' => 'string',
        'zipcode' => 'string',
        'contactAddressType' => 'string'
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

    public const CONTACT_ADDRESS_TYPE_OFFICE_ADD = 'OFFICE_ADD';
    public const CONTACT_ADDRESS_TYPE_REG_ADD = 'REG_ADD';
    public const CONTACT_ADDRESS_TYPE_HOME_ADD = 'HOME_ADD';

    public function getContactAddressTypeAllowableValues()
    {
        return [
            self::CONTACT_ADDRESS_TYPE_OFFICE_ADD,
            self::CONTACT_ADDRESS_TYPE_REG_ADD,
            self::CONTACT_ADDRESS_TYPE_HOME_ADD,
        ];
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

        if (!is_null($this->container['address1']) && (mb_strlen($this->container['address1']) > 256)) {
            $invalidProperties[] = "invalid value for 'address1', the character length must be smaller than or equal to 256.";
        }

        if (!is_null($this->container['address2']) && (mb_strlen($this->container['address2']) > 256)) {
            $invalidProperties[] = "invalid value for 'address2', the character length must be smaller than or equal to 256.";
        }

        if (!is_null($this->container['country']) && (mb_strlen($this->container['country']) > 64)) {
            $invalidProperties[] = "invalid value for 'country', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['province']) && (mb_strlen($this->container['province']) > 64)) {
            $invalidProperties[] = "invalid value for 'province', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['city']) && (mb_strlen($this->container['city']) > 64)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['area']) && (mb_strlen($this->container['area']) > 64)) {
            $invalidProperties[] = "invalid value for 'area', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['zipcode']) && (mb_strlen($this->container['zipcode']) > 32)) {
            $invalidProperties[] = "invalid value for 'zipcode', the character length must be smaller than or equal to 32.";
        }

        $allowedValues = $this->getContactAddressTypeAllowableValues();
        if (!is_null($this->container['contactAddressType']) && !in_array($this->container['contactAddressType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'contactAddressType', must be one of '%s'",
                $this->container['contactAddressType'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['contactAddressType']) && (mb_strlen($this->container['contactAddressType']) > 32)) {
            $invalidProperties[] = "invalid value for 'contactAddressType', the character length must be smaller than or equal to 32.";
        }

        return $invalidProperties;
    }



    public function getAddress1()
    {
        return $this->container['address1'];
    }

    public function setAddress1($address1)
    {
        if (is_null($address1)) {
            throw new \InvalidArgumentException('non-nullable address1 cannot be null');
        }
        if ((mb_strlen($address1) > 256)) {
            throw new \InvalidArgumentException('invalid length for $address1 when calling MerchantContactAddress., must be smaller than or equal to 256.');
        }

        $this->container['address1'] = $address1;

        return $this;
    }

    public function getAddress2()
    {
        return $this->container['address2'];
    }

    public function setAddress2($address2)
    {
        if (is_null($address2)) {
            throw new \InvalidArgumentException('non-nullable address2 cannot be null');
        }
        if ((mb_strlen($address2) > 256)) {
            throw new \InvalidArgumentException('invalid length for $address2 when calling MerchantContactAddress., must be smaller than or equal to 256.');
        }

        $this->container['address2'] = $address2;

        return $this;
    }

    public function getCountry()
    {
        return $this->container['country'];
    }

    public function setCountry($country)
    {
        if (is_null($country)) {
            throw new \InvalidArgumentException('non-nullable country cannot be null');
        }
        if ((mb_strlen($country) > 64)) {
            throw new \InvalidArgumentException('invalid length for $country when calling MerchantContactAddress., must be smaller than or equal to 64.');
        }

        $this->container['country'] = $country;

        return $this;
    }

    public function getProvince()
    {
        return $this->container['province'];
    }

    public function setProvince($province)
    {
        if (is_null($province)) {
            throw new \InvalidArgumentException('non-nullable province cannot be null');
        }
        if ((mb_strlen($province) > 64)) {
            throw new \InvalidArgumentException('invalid length for $province when calling MerchantContactAddress., must be smaller than or equal to 64.');
        }

        $this->container['province'] = $province;

        return $this;
    }

    public function getCity()
    {
        return $this->container['city'];
    }

    public function setCity($city)
    {
        if (is_null($city)) {
            throw new \InvalidArgumentException('non-nullable city cannot be null');
        }
        if ((mb_strlen($city) > 64)) {
            throw new \InvalidArgumentException('invalid length for $city when calling MerchantContactAddress., must be smaller than or equal to 64.');
        }

        $this->container['city'] = $city;

        return $this;
    }

    public function getArea()
    {
        return $this->container['area'];
    }

    public function setArea($area)
    {
        if (is_null($area)) {
            throw new \InvalidArgumentException('non-nullable area cannot be null');
        }
        if ((mb_strlen($area) > 64)) {
            throw new \InvalidArgumentException('invalid length for $area when calling MerchantContactAddress., must be smaller than or equal to 64.');
        }

        $this->container['area'] = $area;

        return $this;
    }

    public function getZipcode()
    {
        return $this->container['zipcode'];
    }

    public function setZipcode($zipcode)
    {
        if (is_null($zipcode)) {
            throw new \InvalidArgumentException('non-nullable zipcode cannot be null');
        }
        if ((mb_strlen($zipcode) > 32)) {
            throw new \InvalidArgumentException('invalid length for $zipcode when calling MerchantContactAddress., must be smaller than or equal to 32.');
        }

        $this->container['zipcode'] = $zipcode;

        return $this;
    }

    public function getContactAddressType()
    {
        return $this->container['contactAddressType'];
    }

    public function setContactAddressType($contactAddressType)
    {
        if (is_null($contactAddressType)) {
            throw new \InvalidArgumentException('non-nullable contactAddressType cannot be null');
        }
        $allowedValues = $this->getContactAddressTypeAllowableValues();
        if (!in_array($contactAddressType, $allowedValues, true) && !empty($contactAddressType)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'contactAddressType', must be one of '%s'",
                    $contactAddressType,
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($contactAddressType) > 32)) {
            throw new \InvalidArgumentException('invalid length for $contactAddressType when calling MerchantContactAddress., must be smaller than or equal to 32.');
        }

        $this->container['contactAddressType'] = $contactAddressType;

        return $this;
    }


}


