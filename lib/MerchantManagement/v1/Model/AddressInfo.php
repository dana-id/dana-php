<?php

namespace Dana\MerchantManagement\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\MerchantManagement\v1\Enum;

class AddressInfo extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'AddressInfo';

    protected static $openAPITypes = [
        'country' => 'string',
        'province' => 'string',
        'city' => 'string',
        'area' => 'string',
        'address1' => 'string',
        'address2' => 'string',
        'postcode' => 'string',
        'subDistrict' => 'string'
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

        return $invalidProperties;
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
        $this->container['area'] = $area;

        return $this;
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
        $this->container['address2'] = $address2;

        return $this;
    }

    public function getPostcode()
    {
        return $this->container['postcode'];
    }

    public function setPostcode($postcode)
    {
        if (is_null($postcode)) {
            throw new \InvalidArgumentException('non-nullable postcode cannot be null');
        }
        $this->container['postcode'] = $postcode;

        return $this;
    }

    public function getSubDistrict()
    {
        return $this->container['subDistrict'];
    }

    public function setSubDistrict($subDistrict)
    {
        if (is_null($subDistrict)) {
            throw new \InvalidArgumentException('non-nullable subDistrict cannot be null');
        }
        $this->container['subDistrict'] = $subDistrict;

        return $this;
    }


}


