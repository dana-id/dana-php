<?php

namespace Dana\Disbursement\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\Disbursement\v1\Enum;

class DanaAccountInquiryRequestAdditionalInfo extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'DanaAccountInquiryRequestAdditionalInfo';

    protected static $openAPITypes = [
        'fundType' => 'string',
        'externalDivisionId' => 'string',
        'chargeTarget' => 'string',
        'accessToken' => 'string',
        'customerId' => 'string'
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

    public const CHARGE_TARGET_DIVISION = 'DIVISION';
    public const CHARGE_TARGET_MERCHANT = 'MERCHANT';

    public function getChargeTargetAllowableValues()
    {
        return [
            self::CHARGE_TARGET_DIVISION,
            self::CHARGE_TARGET_MERCHANT,
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

        if ($this->container['fundType'] === null) {
            $invalidProperties[] = "'fundType' can't be null";
        }
        if ((mb_strlen($this->container['fundType']) > 64)) {
            $invalidProperties[] = "invalid value for 'fundType', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['externalDivisionId']) && (mb_strlen($this->container['externalDivisionId']) > 64)) {
            $invalidProperties[] = "invalid value for 'externalDivisionId', the character length must be smaller than or equal to 64.";
        }

        $allowedValues = $this->getChargeTargetAllowableValues();
        if (!is_null($this->container['chargeTarget']) && !in_array($this->container['chargeTarget'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'chargeTarget', must be one of '%s'",
                $this->container['chargeTarget'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['chargeTarget']) && (mb_strlen($this->container['chargeTarget']) > 64)) {
            $invalidProperties[] = "invalid value for 'chargeTarget', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['accessToken']) && (mb_strlen($this->container['accessToken']) > 512)) {
            $invalidProperties[] = "invalid value for 'accessToken', the character length must be smaller than or equal to 512.";
        }

        if (!is_null($this->container['customerId']) && (mb_strlen($this->container['customerId']) > 32)) {
            $invalidProperties[] = "invalid value for 'customerId', the character length must be smaller than or equal to 32.";
        }

        return $invalidProperties;
    }



    public function getFundType()
    {
        return $this->container['fundType'];
    }

    public function setFundType($fundType)
    {
        if (is_null($fundType)) {
            throw new \InvalidArgumentException('non-nullable fundType cannot be null');
        }
        if ((mb_strlen($fundType) > 64)) {
            throw new \InvalidArgumentException('invalid length for $fundType when calling DanaAccountInquiryRequestAdditionalInfo., must be smaller than or equal to 64.');
        }

        $this->container['fundType'] = $fundType;

        return $this;
    }

    public function getExternalDivisionId()
    {
        return $this->container['externalDivisionId'];
    }

    public function setExternalDivisionId($externalDivisionId)
    {
        if (is_null($externalDivisionId)) {
            throw new \InvalidArgumentException('non-nullable externalDivisionId cannot be null');
        }
        if ((mb_strlen($externalDivisionId) > 64)) {
            throw new \InvalidArgumentException('invalid length for $externalDivisionId when calling DanaAccountInquiryRequestAdditionalInfo., must be smaller than or equal to 64.');
        }

        $this->container['externalDivisionId'] = $externalDivisionId;

        return $this;
    }

    public function getChargeTarget()
    {
        return $this->container['chargeTarget'];
    }

    public function setChargeTarget($chargeTarget)
    {
        if (is_null($chargeTarget)) {
            throw new \InvalidArgumentException('non-nullable chargeTarget cannot be null');
        }
        $allowedValues = $this->getChargeTargetAllowableValues();
        if (!in_array($chargeTarget, $allowedValues, true) && !empty($chargeTarget)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'chargeTarget', must be one of '%s'",
                    $chargeTarget,
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($chargeTarget) > 64)) {
            throw new \InvalidArgumentException('invalid length for $chargeTarget when calling DanaAccountInquiryRequestAdditionalInfo., must be smaller than or equal to 64.');
        }

        $this->container['chargeTarget'] = $chargeTarget;

        return $this;
    }

    public function getAccessToken()
    {
        return $this->container['accessToken'];
    }

    public function setAccessToken($accessToken)
    {
        if (is_null($accessToken)) {
            throw new \InvalidArgumentException('non-nullable accessToken cannot be null');
        }
        if ((mb_strlen($accessToken) > 512)) {
            throw new \InvalidArgumentException('invalid length for $accessToken when calling DanaAccountInquiryRequestAdditionalInfo., must be smaller than or equal to 512.');
        }

        $this->container['accessToken'] = $accessToken;

        return $this;
    }

    public function getCustomerId()
    {
        return $this->container['customerId'];
    }

    public function setCustomerId($customerId)
    {
        if (is_null($customerId)) {
            throw new \InvalidArgumentException('non-nullable customerId cannot be null');
        }
        if ((mb_strlen($customerId) > 32)) {
            throw new \InvalidArgumentException('invalid length for $customerId when calling DanaAccountInquiryRequestAdditionalInfo., must be smaller than or equal to 32.');
        }

        $this->container['customerId'] = $customerId;

        return $this;
    }


}


