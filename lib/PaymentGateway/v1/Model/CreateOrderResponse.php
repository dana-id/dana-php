<?php

namespace Dana\PaymentGateway\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\PaymentGateway\v1\Enum;

class CreateOrderResponse extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'CreateOrderResponse';

    protected static $openAPITypes = [
        'responseCode' => 'string',
        'responseMessage' => 'string',
        'referenceNo' => 'string',
        'partnerReferenceNo' => 'string',
        'webRedirectUrl' => 'string',
        'additionalInfo' => '\Dana\PaymentGateway\v1\Model\CreateOrderResponseAdditionalInfo',
        'externalOrderId' => 'string'
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

        if ($this->container['partnerReferenceNo'] === null) {
            $invalidProperties[] = "'partnerReferenceNo' can't be null";
        }
        if ((mb_strlen($this->container['partnerReferenceNo']) > 64)) {
            $invalidProperties[] = "invalid value for 'partnerReferenceNo', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['webRedirectUrl']) && (mb_strlen($this->container['webRedirectUrl']) > 2048)) {
            $invalidProperties[] = "invalid value for 'webRedirectUrl', the character length must be smaller than or equal to 2048.";
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
            throw new \InvalidArgumentException('invalid length for $responseCode when calling CreateOrderResponse., must be smaller than or equal to 7.');
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
            throw new \InvalidArgumentException('invalid length for $responseMessage when calling CreateOrderResponse., must be smaller than or equal to 150.');
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
            throw new \InvalidArgumentException('invalid length for $referenceNo when calling CreateOrderResponse., must be smaller than or equal to 64.');
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
            throw new \InvalidArgumentException('invalid length for $partnerReferenceNo when calling CreateOrderResponse., must be smaller than or equal to 64.');
        }

        $this->container['partnerReferenceNo'] = $partnerReferenceNo;

        return $this;
    }

    public function getWebRedirectUrl()
    {
        return $this->container['webRedirectUrl'];
    }

    public function setWebRedirectUrl($webRedirectUrl)
    {
        if (is_null($webRedirectUrl)) {
            throw new \InvalidArgumentException('non-nullable webRedirectUrl cannot be null');
        }
        if ((mb_strlen($webRedirectUrl) > 2048)) {
            throw new \InvalidArgumentException('invalid length for $webRedirectUrl when calling CreateOrderResponse., must be smaller than or equal to 2048.');
        }

        $this->container['webRedirectUrl'] = $webRedirectUrl;

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

    public function getExternalOrderId()
    {
        return $this->container['externalOrderId'];
    }

    public function setExternalOrderId($externalOrderId)
    {
        if (is_null($externalOrderId)) {
            throw new \InvalidArgumentException('non-nullable externalOrderId cannot be null');
        }
        $this->container['externalOrderId'] = $externalOrderId;

        return $this;
    }


}


