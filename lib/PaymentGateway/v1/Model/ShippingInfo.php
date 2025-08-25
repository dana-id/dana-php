<?php

namespace Dana\PaymentGateway\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\PaymentGateway\v1\Enum;

class ShippingInfo extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'ShippingInfo';

    protected static $openAPITypes = [
        'merchantShippingId' => 'string',
        'trackingNo' => 'string',
        'carrier' => 'string',
        'chargeAmount' => '\Dana\PaymentGateway\v1\Model\Money',
        'countryName' => 'string',
        'stateName' => 'string',
        'cityName' => 'string',
        'areaName' => 'string',
        'address1' => 'string',
        'address2' => 'string',
        'firstName' => 'string',
        'lastName' => 'string',
        'mobileNo' => 'string',
        'phoneNo' => 'string',
        'zipCode' => 'string',
        'email' => 'string',
        'faxNo' => 'string'
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

        if ($this->container['merchantShippingId'] === null) {
            $invalidProperties[] = "'merchantShippingId' can't be null";
        }
        if ((mb_strlen($this->container['merchantShippingId']) > 64)) {
            $invalidProperties[] = "invalid value for 'merchantShippingId', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['trackingNo']) && (mb_strlen($this->container['trackingNo']) > 64)) {
            $invalidProperties[] = "invalid value for 'trackingNo', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['carrier']) && (mb_strlen($this->container['carrier']) > 64)) {
            $invalidProperties[] = "invalid value for 'carrier', the character length must be smaller than or equal to 64.";
        }

        if ($this->container['countryName'] === null) {
            $invalidProperties[] = "'countryName' can't be null";
        }
        if ((mb_strlen($this->container['countryName']) > 64)) {
            $invalidProperties[] = "invalid value for 'countryName', the character length must be smaller than or equal to 64.";
        }

        if ($this->container['stateName'] === null) {
            $invalidProperties[] = "'stateName' can't be null";
        }
        if ((mb_strlen($this->container['stateName']) > 64)) {
            $invalidProperties[] = "invalid value for 'stateName', the character length must be smaller than or equal to 64.";
        }

        if ($this->container['cityName'] === null) {
            $invalidProperties[] = "'cityName' can't be null";
        }
        if ((mb_strlen($this->container['cityName']) > 64)) {
            $invalidProperties[] = "invalid value for 'cityName', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['areaName']) && (mb_strlen($this->container['areaName']) > 64)) {
            $invalidProperties[] = "invalid value for 'areaName', the character length must be smaller than or equal to 64.";
        }

        if ($this->container['address1'] === null) {
            $invalidProperties[] = "'address1' can't be null";
        }
        if ((mb_strlen($this->container['address1']) > 256)) {
            $invalidProperties[] = "invalid value for 'address1', the character length must be smaller than or equal to 256.";
        }

        if (!is_null($this->container['address2']) && (mb_strlen($this->container['address2']) > 256)) {
            $invalidProperties[] = "invalid value for 'address2', the character length must be smaller than or equal to 256.";
        }

        if ($this->container['firstName'] === null) {
            $invalidProperties[] = "'firstName' can't be null";
        }
        if ((mb_strlen($this->container['firstName']) > 64)) {
            $invalidProperties[] = "invalid value for 'firstName', the character length must be smaller than or equal to 64.";
        }

        if ($this->container['lastName'] === null) {
            $invalidProperties[] = "'lastName' can't be null";
        }
        if ((mb_strlen($this->container['lastName']) > 64)) {
            $invalidProperties[] = "invalid value for 'lastName', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['mobileNo']) && (mb_strlen($this->container['mobileNo']) > 32)) {
            $invalidProperties[] = "invalid value for 'mobileNo', the character length must be smaller than or equal to 32.";
        }

        if (!is_null($this->container['phoneNo']) && (mb_strlen($this->container['phoneNo']) > 32)) {
            $invalidProperties[] = "invalid value for 'phoneNo', the character length must be smaller than or equal to 32.";
        }

        if ($this->container['zipCode'] === null) {
            $invalidProperties[] = "'zipCode' can't be null";
        }
        if ((mb_strlen($this->container['zipCode']) > 32)) {
            $invalidProperties[] = "invalid value for 'zipCode', the character length must be smaller than or equal to 32.";
        }

        if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) > 128)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['faxNo']) && (mb_strlen($this->container['faxNo']) > 32)) {
            $invalidProperties[] = "invalid value for 'faxNo', the character length must be smaller than or equal to 32.";
        }

        return $invalidProperties;
    }



    public function getMerchantShippingId()
    {
        return $this->container['merchantShippingId'];
    }

    public function setMerchantShippingId($merchantShippingId)
    {
        if (is_null($merchantShippingId)) {
            throw new \InvalidArgumentException('non-nullable merchantShippingId cannot be null');
        }
        if ((mb_strlen($merchantShippingId) > 64)) {
            throw new \InvalidArgumentException('invalid length for $merchantShippingId when calling ShippingInfo., must be smaller than or equal to 64.');
        }

        $this->container['merchantShippingId'] = $merchantShippingId;

        return $this;
    }

    public function getTrackingNo()
    {
        return $this->container['trackingNo'];
    }

    public function setTrackingNo($trackingNo)
    {
        if (is_null($trackingNo)) {
            throw new \InvalidArgumentException('non-nullable trackingNo cannot be null');
        }
        if ((mb_strlen($trackingNo) > 64)) {
            throw new \InvalidArgumentException('invalid length for $trackingNo when calling ShippingInfo., must be smaller than or equal to 64.');
        }

        $this->container['trackingNo'] = $trackingNo;

        return $this;
    }

    public function getCarrier()
    {
        return $this->container['carrier'];
    }

    public function setCarrier($carrier)
    {
        if (is_null($carrier)) {
            throw new \InvalidArgumentException('non-nullable carrier cannot be null');
        }
        if ((mb_strlen($carrier) > 64)) {
            throw new \InvalidArgumentException('invalid length for $carrier when calling ShippingInfo., must be smaller than or equal to 64.');
        }

        $this->container['carrier'] = $carrier;

        return $this;
    }

    public function getChargeAmount()
    {
        return $this->container['chargeAmount'];
    }

    public function setChargeAmount($chargeAmount)
    {
        if (is_null($chargeAmount)) {
            throw new \InvalidArgumentException('non-nullable chargeAmount cannot be null');
        }
        $this->container['chargeAmount'] = $chargeAmount;

        return $this;
    }

    public function getCountryName()
    {
        return $this->container['countryName'];
    }

    public function setCountryName($countryName)
    {
        if (is_null($countryName)) {
            throw new \InvalidArgumentException('non-nullable countryName cannot be null');
        }
        if ((mb_strlen($countryName) > 64)) {
            throw new \InvalidArgumentException('invalid length for $countryName when calling ShippingInfo., must be smaller than or equal to 64.');
        }

        $this->container['countryName'] = $countryName;

        return $this;
    }

    public function getStateName()
    {
        return $this->container['stateName'];
    }

    public function setStateName($stateName)
    {
        if (is_null($stateName)) {
            throw new \InvalidArgumentException('non-nullable stateName cannot be null');
        }
        if ((mb_strlen($stateName) > 64)) {
            throw new \InvalidArgumentException('invalid length for $stateName when calling ShippingInfo., must be smaller than or equal to 64.');
        }

        $this->container['stateName'] = $stateName;

        return $this;
    }

    public function getCityName()
    {
        return $this->container['cityName'];
    }

    public function setCityName($cityName)
    {
        if (is_null($cityName)) {
            throw new \InvalidArgumentException('non-nullable cityName cannot be null');
        }
        if ((mb_strlen($cityName) > 64)) {
            throw new \InvalidArgumentException('invalid length for $cityName when calling ShippingInfo., must be smaller than or equal to 64.');
        }

        $this->container['cityName'] = $cityName;

        return $this;
    }

    public function getAreaName()
    {
        return $this->container['areaName'];
    }

    public function setAreaName($areaName)
    {
        if (is_null($areaName)) {
            throw new \InvalidArgumentException('non-nullable areaName cannot be null');
        }
        if ((mb_strlen($areaName) > 64)) {
            throw new \InvalidArgumentException('invalid length for $areaName when calling ShippingInfo., must be smaller than or equal to 64.');
        }

        $this->container['areaName'] = $areaName;

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
        if ((mb_strlen($address1) > 256)) {
            throw new \InvalidArgumentException('invalid length for $address1 when calling ShippingInfo., must be smaller than or equal to 256.');
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
            throw new \InvalidArgumentException('invalid length for $address2 when calling ShippingInfo., must be smaller than or equal to 256.');
        }

        $this->container['address2'] = $address2;

        return $this;
    }

    public function getFirstName()
    {
        return $this->container['firstName'];
    }

    public function setFirstName($firstName)
    {
        if (is_null($firstName)) {
            throw new \InvalidArgumentException('non-nullable firstName cannot be null');
        }
        if ((mb_strlen($firstName) > 64)) {
            throw new \InvalidArgumentException('invalid length for $firstName when calling ShippingInfo., must be smaller than or equal to 64.');
        }

        $this->container['firstName'] = $firstName;

        return $this;
    }

    public function getLastName()
    {
        return $this->container['lastName'];
    }

    public function setLastName($lastName)
    {
        if (is_null($lastName)) {
            throw new \InvalidArgumentException('non-nullable lastName cannot be null');
        }
        if ((mb_strlen($lastName) > 64)) {
            throw new \InvalidArgumentException('invalid length for $lastName when calling ShippingInfo., must be smaller than or equal to 64.');
        }

        $this->container['lastName'] = $lastName;

        return $this;
    }

    public function getMobileNo()
    {
        return $this->container['mobileNo'];
    }

    public function setMobileNo($mobileNo)
    {
        if (is_null($mobileNo)) {
            throw new \InvalidArgumentException('non-nullable mobileNo cannot be null');
        }
        if ((mb_strlen($mobileNo) > 32)) {
            throw new \InvalidArgumentException('invalid length for $mobileNo when calling ShippingInfo., must be smaller than or equal to 32.');
        }

        $this->container['mobileNo'] = $mobileNo;

        return $this;
    }

    public function getPhoneNo()
    {
        return $this->container['phoneNo'];
    }

    public function setPhoneNo($phoneNo)
    {
        if (is_null($phoneNo)) {
            throw new \InvalidArgumentException('non-nullable phoneNo cannot be null');
        }
        if ((mb_strlen($phoneNo) > 32)) {
            throw new \InvalidArgumentException('invalid length for $phoneNo when calling ShippingInfo., must be smaller than or equal to 32.');
        }

        $this->container['phoneNo'] = $phoneNo;

        return $this;
    }

    public function getZipCode()
    {
        return $this->container['zipCode'];
    }

    public function setZipCode($zipCode)
    {
        if (is_null($zipCode)) {
            throw new \InvalidArgumentException('non-nullable zipCode cannot be null');
        }
        if ((mb_strlen($zipCode) > 32)) {
            throw new \InvalidArgumentException('invalid length for $zipCode when calling ShippingInfo., must be smaller than or equal to 32.');
        }

        $this->container['zipCode'] = $zipCode;

        return $this;
    }

    public function getEmail()
    {
        return $this->container['email'];
    }

    public function setEmail($email)
    {
        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }
        if ((mb_strlen($email) > 128)) {
            throw new \InvalidArgumentException('invalid length for $email when calling ShippingInfo., must be smaller than or equal to 128.');
        }

        $this->container['email'] = $email;

        return $this;
    }

    public function getFaxNo()
    {
        return $this->container['faxNo'];
    }

    public function setFaxNo($faxNo)
    {
        if (is_null($faxNo)) {
            throw new \InvalidArgumentException('non-nullable faxNo cannot be null');
        }
        if ((mb_strlen($faxNo) > 32)) {
            throw new \InvalidArgumentException('invalid length for $faxNo when calling ShippingInfo., must be smaller than or equal to 32.');
        }

        $this->container['faxNo'] = $faxNo;

        return $this;
    }


}


