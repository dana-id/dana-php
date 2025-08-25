<?php

namespace Dana\Widget\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\Widget\v1\Enum;

class AccountUnbindingRequest extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'AccountUnbindingRequest';

    protected static $openAPITypes = [
        'merchantId' => 'string',
        'subMerchantId' => 'string',
        'partnerReferenceNo' => 'string',
        'linkId' => 'string',
        'tokenId' => 'string',
        'additionalInfo' => '\Dana\Widget\v1\Model\AccountUnbindingRequestAdditionalInfo'
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

        if ($this->container['merchantId'] === null) {
            $invalidProperties[] = "'merchantId' can't be null";
        }
        if ((mb_strlen($this->container['merchantId']) > 64)) {
            $invalidProperties[] = "invalid value for 'merchantId', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['subMerchantId']) && (mb_strlen($this->container['subMerchantId']) > 32)) {
            $invalidProperties[] = "invalid value for 'subMerchantId', the character length must be smaller than or equal to 32.";
        }

        if (!is_null($this->container['partnerReferenceNo']) && (mb_strlen($this->container['partnerReferenceNo']) > 64)) {
            $invalidProperties[] = "invalid value for 'partnerReferenceNo', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['linkId']) && (mb_strlen($this->container['linkId']) > 24)) {
            $invalidProperties[] = "invalid value for 'linkId', the character length must be smaller than or equal to 24.";
        }

        if (!is_null($this->container['tokenId']) && (mb_strlen($this->container['tokenId']) > 128)) {
            $invalidProperties[] = "invalid value for 'tokenId', the character length must be smaller than or equal to 128.";
        }

        if ($this->container['additionalInfo'] === null) {
            $invalidProperties[] = "'additionalInfo' can't be null";
        }
        return $invalidProperties;
    }



    public function getMerchantId()
    {
        return $this->container['merchantId'];
    }

    public function setMerchantId($merchantId)
    {
        if (is_null($merchantId)) {
            throw new \InvalidArgumentException('non-nullable merchantId cannot be null');
        }
        if ((mb_strlen($merchantId) > 64)) {
            throw new \InvalidArgumentException('invalid length for $merchantId when calling AccountUnbindingRequest., must be smaller than or equal to 64.');
        }

        $this->container['merchantId'] = $merchantId;

        return $this;
    }

    public function getSubMerchantId()
    {
        return $this->container['subMerchantId'];
    }

    public function setSubMerchantId($subMerchantId)
    {
        if (is_null($subMerchantId)) {
            throw new \InvalidArgumentException('non-nullable subMerchantId cannot be null');
        }
        if ((mb_strlen($subMerchantId) > 32)) {
            throw new \InvalidArgumentException('invalid length for $subMerchantId when calling AccountUnbindingRequest., must be smaller than or equal to 32.');
        }

        $this->container['subMerchantId'] = $subMerchantId;

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
            throw new \InvalidArgumentException('invalid length for $partnerReferenceNo when calling AccountUnbindingRequest., must be smaller than or equal to 64.');
        }

        $this->container['partnerReferenceNo'] = $partnerReferenceNo;

        return $this;
    }

    public function getLinkId()
    {
        return $this->container['linkId'];
    }

    public function setLinkId($linkId)
    {
        if (is_null($linkId)) {
            throw new \InvalidArgumentException('non-nullable linkId cannot be null');
        }
        if ((mb_strlen($linkId) > 24)) {
            throw new \InvalidArgumentException('invalid length for $linkId when calling AccountUnbindingRequest., must be smaller than or equal to 24.');
        }

        $this->container['linkId'] = $linkId;

        return $this;
    }

    public function getTokenId()
    {
        return $this->container['tokenId'];
    }

    public function setTokenId($tokenId)
    {
        if (is_null($tokenId)) {
            throw new \InvalidArgumentException('non-nullable tokenId cannot be null');
        }
        if ((mb_strlen($tokenId) > 128)) {
            throw new \InvalidArgumentException('invalid length for $tokenId when calling AccountUnbindingRequest., must be smaller than or equal to 128.');
        }

        $this->container['tokenId'] = $tokenId;

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


