<?php

namespace Dana\Widget\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\Widget\v1\Enum;

class PayOptionDetailAdditionalInfo extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'PayOptionDetailAdditionalInfo';

    protected static $openAPITypes = [
        'topupAndPay' => 'bool',
        'payerAccountNo' => 'string',
        'saveCardAfterPay' => 'bool',
        'channelInfo' => 'string',
        'issuingCountry' => 'string',
        'assetType' => 'string',
        'extendInfo' => 'string'
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

        if (!is_null($this->container['payerAccountNo']) && (mb_strlen($this->container['payerAccountNo']) > 64)) {
            $invalidProperties[] = "invalid value for 'payerAccountNo', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['channelInfo']) && (mb_strlen($this->container['channelInfo']) > 4096)) {
            $invalidProperties[] = "invalid value for 'channelInfo', the character length must be smaller than or equal to 4096.";
        }

        if (!is_null($this->container['issuingCountry']) && (mb_strlen($this->container['issuingCountry']) > 8)) {
            $invalidProperties[] = "invalid value for 'issuingCountry', the character length must be smaller than or equal to 8.";
        }

        if (!is_null($this->container['assetType']) && (mb_strlen($this->container['assetType']) > 64)) {
            $invalidProperties[] = "invalid value for 'assetType', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['extendInfo']) && (mb_strlen($this->container['extendInfo']) > 4096)) {
            $invalidProperties[] = "invalid value for 'extendInfo', the character length must be smaller than or equal to 4096.";
        }

        return $invalidProperties;
    }



    public function getTopupAndPay()
    {
        return $this->container['topupAndPay'];
    }

    public function setTopupAndPay($topupAndPay)
    {
        if (is_null($topupAndPay)) {
            throw new \InvalidArgumentException('non-nullable topupAndPay cannot be null');
        }
        $this->container['topupAndPay'] = $topupAndPay;

        return $this;
    }

    public function getPayerAccountNo()
    {
        return $this->container['payerAccountNo'];
    }

    public function setPayerAccountNo($payerAccountNo)
    {
        if (is_null($payerAccountNo)) {
            throw new \InvalidArgumentException('non-nullable payerAccountNo cannot be null');
        }
        if ((mb_strlen($payerAccountNo) > 64)) {
            throw new \InvalidArgumentException('invalid length for $payerAccountNo when calling PayOptionDetailAdditionalInfo., must be smaller than or equal to 64.');
        }

        $this->container['payerAccountNo'] = $payerAccountNo;

        return $this;
    }

    public function getSaveCardAfterPay()
    {
        return $this->container['saveCardAfterPay'];
    }

    public function setSaveCardAfterPay($saveCardAfterPay)
    {
        if (is_null($saveCardAfterPay)) {
            throw new \InvalidArgumentException('non-nullable saveCardAfterPay cannot be null');
        }
        $this->container['saveCardAfterPay'] = $saveCardAfterPay;

        return $this;
    }

    public function getChannelInfo()
    {
        return $this->container['channelInfo'];
    }

    public function setChannelInfo($channelInfo)
    {
        if (is_null($channelInfo)) {
            throw new \InvalidArgumentException('non-nullable channelInfo cannot be null');
        }
        if ((mb_strlen($channelInfo) > 4096)) {
            throw new \InvalidArgumentException('invalid length for $channelInfo when calling PayOptionDetailAdditionalInfo., must be smaller than or equal to 4096.');
        }

        $this->container['channelInfo'] = $channelInfo;

        return $this;
    }

    public function getIssuingCountry()
    {
        return $this->container['issuingCountry'];
    }

    public function setIssuingCountry($issuingCountry)
    {
        if (is_null($issuingCountry)) {
            throw new \InvalidArgumentException('non-nullable issuingCountry cannot be null');
        }
        if ((mb_strlen($issuingCountry) > 8)) {
            throw new \InvalidArgumentException('invalid length for $issuingCountry when calling PayOptionDetailAdditionalInfo., must be smaller than or equal to 8.');
        }

        $this->container['issuingCountry'] = $issuingCountry;

        return $this;
    }

    public function getAssetType()
    {
        return $this->container['assetType'];
    }

    public function setAssetType($assetType)
    {
        if (is_null($assetType)) {
            throw new \InvalidArgumentException('non-nullable assetType cannot be null');
        }
        if ((mb_strlen($assetType) > 64)) {
            throw new \InvalidArgumentException('invalid length for $assetType when calling PayOptionDetailAdditionalInfo., must be smaller than or equal to 64.');
        }

        $this->container['assetType'] = $assetType;

        return $this;
    }

    public function getExtendInfo()
    {
        return $this->container['extendInfo'];
    }

    public function setExtendInfo($extendInfo)
    {
        if (is_null($extendInfo)) {
            throw new \InvalidArgumentException('non-nullable extendInfo cannot be null');
        }
        if ((mb_strlen($extendInfo) > 4096)) {
            throw new \InvalidArgumentException('invalid length for $extendInfo when calling PayOptionDetailAdditionalInfo., must be smaller than or equal to 4096.');
        }

        $this->container['extendInfo'] = $extendInfo;

        return $this;
    }


}


