<?php

namespace Dana\Widget\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\Widget\v1\Enum;

class PaymentView extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'PaymentView';

    protected static $openAPITypes = [
        'cashierRequestId' => 'string',
        'paidTime' => 'string',
        'payOptionInfos' => '\Dana\Widget\v1\Model\PayOptionInfo[]',
        'payRequestExtendInfo' => 'string',
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

        if (!is_null($this->container['cashierRequestId']) && (mb_strlen($this->container['cashierRequestId']) > 64)) {
            $invalidProperties[] = "invalid value for 'cashierRequestId', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['paidTime']) && (mb_strlen($this->container['paidTime']) > 25)) {
            $invalidProperties[] = "invalid value for 'paidTime', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['paidTime']) && !preg_match("/^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/", $this->container['paidTime'])) {
            $invalidProperties[] = "invalid value for 'paidTime', must be conform to the pattern /^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/.";
        }

        if (!is_null($this->container['payRequestExtendInfo']) && (mb_strlen($this->container['payRequestExtendInfo']) > 4096)) {
            $invalidProperties[] = "invalid value for 'payRequestExtendInfo', the character length must be smaller than or equal to 4096.";
        }

        if (!is_null($this->container['extendInfo']) && (mb_strlen($this->container['extendInfo']) > 4096)) {
            $invalidProperties[] = "invalid value for 'extendInfo', the character length must be smaller than or equal to 4096.";
        }

        return $invalidProperties;
    }



    public function getCashierRequestId()
    {
        return $this->container['cashierRequestId'];
    }

    public function setCashierRequestId($cashierRequestId)
    {
        if (is_null($cashierRequestId)) {
            throw new \InvalidArgumentException('non-nullable cashierRequestId cannot be null');
        }
        if ((mb_strlen($cashierRequestId) > 64)) {
            throw new \InvalidArgumentException('invalid length for $cashierRequestId when calling PaymentView., must be smaller than or equal to 64.');
        }

        $this->container['cashierRequestId'] = $cashierRequestId;

        return $this;
    }

    public function getPaidTime()
    {
        return $this->container['paidTime'];
    }

    public function setPaidTime($paidTime)
    {
        if (is_null($paidTime)) {
            throw new \InvalidArgumentException('non-nullable paidTime cannot be null');
        }
        if ((mb_strlen($paidTime) > 25)) {
            throw new \InvalidArgumentException('invalid length for $paidTime when calling PaymentView., must be smaller than or equal to 25.');
        }
        if ((!preg_match("/^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/", ObjectSerializer::toString($paidTime)))) {
            throw new \InvalidArgumentException("invalid value for \$paidTime when calling PaymentView., must conform to the pattern /^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/.");
        }

        $this->container['paidTime'] = $paidTime;

        return $this;
    }

    public function getPayOptionInfos()
    {
        return $this->container['payOptionInfos'];
    }

    public function setPayOptionInfos($payOptionInfos)
    {
        if (is_null($payOptionInfos)) {
            throw new \InvalidArgumentException('non-nullable payOptionInfos cannot be null');
        }
        $this->container['payOptionInfos'] = $payOptionInfos;

        return $this;
    }

    public function getPayRequestExtendInfo()
    {
        return $this->container['payRequestExtendInfo'];
    }

    public function setPayRequestExtendInfo($payRequestExtendInfo)
    {
        if (is_null($payRequestExtendInfo)) {
            throw new \InvalidArgumentException('non-nullable payRequestExtendInfo cannot be null');
        }
        if ((mb_strlen($payRequestExtendInfo) > 4096)) {
            throw new \InvalidArgumentException('invalid length for $payRequestExtendInfo when calling PaymentView., must be smaller than or equal to 4096.');
        }

        $this->container['payRequestExtendInfo'] = $payRequestExtendInfo;

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
            throw new \InvalidArgumentException('invalid length for $extendInfo when calling PaymentView., must be smaller than or equal to 4096.');
        }

        $this->container['extendInfo'] = $extendInfo;

        return $this;
    }


}


