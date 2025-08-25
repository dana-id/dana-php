<?php

namespace Dana\PaymentGateway\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\PaymentGateway\v1\Enum;

class RefundOrderRequestAdditionalInfo extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'RefundOrderRequestAdditionalInfo';

    protected static $openAPITypes = [
        'payoutAccountNo' => 'string',
        'refundAppliedTime' => 'string',
        'actorType' => 'string',
        'returnChargeToPayer' => 'string',
        'destination' => 'string',
        'envInfo' => '\Dana\PaymentGateway\v1\Model\EnvInfo',
        'auditInfo' => '\Dana\PaymentGateway\v1\Model\AuditInfo',
        'actorContext' => '\Dana\PaymentGateway\v1\Model\ActorContext',
        'refundOptionBill' => '\Dana\PaymentGateway\v1\Model\RefundOptionBill[]',
        'extendInfo' => 'string',
        'asyncRefund' => 'string'
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

    public const ACTOR_TYPE_USER = 'USER';
    public const ACTOR_TYPE_MERCHANT = 'MERCHANT';
    public const ACTOR_TYPE_MERCHANT_OPERATOR = 'MERCHANT_OPERATOR';
    public const ACTOR_TYPE_BACK_OFFICE = 'BACK_OFFICE';
    public const ACTOR_TYPE_SYSTEM = 'SYSTEM';

    public function getActorTypeAllowableValues()
    {
        return [
            self::ACTOR_TYPE_USER,
            self::ACTOR_TYPE_MERCHANT,
            self::ACTOR_TYPE_MERCHANT_OPERATOR,
            self::ACTOR_TYPE_BACK_OFFICE,
            self::ACTOR_TYPE_SYSTEM,
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

        if (!is_null($this->container['payoutAccountNo']) && (mb_strlen($this->container['payoutAccountNo']) > 64)) {
            $invalidProperties[] = "invalid value for 'payoutAccountNo', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['refundAppliedTime']) && (mb_strlen($this->container['refundAppliedTime']) > 25)) {
            $invalidProperties[] = "invalid value for 'refundAppliedTime', the character length must be smaller than or equal to 25.";
        }

        $allowedValues = $this->getActorTypeAllowableValues();
        if (!is_null($this->container['actorType']) && !in_array($this->container['actorType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'actorType', must be one of '%s'",
                $this->container['actorType'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['actorType']) && (mb_strlen($this->container['actorType']) > 64)) {
            $invalidProperties[] = "invalid value for 'actorType', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['returnChargeToPayer']) && (mb_strlen($this->container['returnChargeToPayer']) > 64)) {
            $invalidProperties[] = "invalid value for 'returnChargeToPayer', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['destination']) && (mb_strlen($this->container['destination']) > 64)) {
            $invalidProperties[] = "invalid value for 'destination', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['extendInfo']) && (mb_strlen($this->container['extendInfo']) > 4096)) {
            $invalidProperties[] = "invalid value for 'extendInfo', the character length must be smaller than or equal to 4096.";
        }

        if (!is_null($this->container['asyncRefund']) && (mb_strlen($this->container['asyncRefund']) > 5)) {
            $invalidProperties[] = "invalid value for 'asyncRefund', the character length must be smaller than or equal to 5.";
        }

        return $invalidProperties;
    }



    public function getPayoutAccountNo()
    {
        return $this->container['payoutAccountNo'];
    }

    public function setPayoutAccountNo($payoutAccountNo)
    {
        if (is_null($payoutAccountNo)) {
            throw new \InvalidArgumentException('non-nullable payoutAccountNo cannot be null');
        }
        if ((mb_strlen($payoutAccountNo) > 64)) {
            throw new \InvalidArgumentException('invalid length for $payoutAccountNo when calling RefundOrderRequestAdditionalInfo., must be smaller than or equal to 64.');
        }

        $this->container['payoutAccountNo'] = $payoutAccountNo;

        return $this;
    }

    public function getRefundAppliedTime()
    {
        return $this->container['refundAppliedTime'];
    }

    public function setRefundAppliedTime($refundAppliedTime)
    {
        if (is_null($refundAppliedTime)) {
            throw new \InvalidArgumentException('non-nullable refundAppliedTime cannot be null');
        }
        if ((mb_strlen($refundAppliedTime) > 25)) {
            throw new \InvalidArgumentException('invalid length for $refundAppliedTime when calling RefundOrderRequestAdditionalInfo., must be smaller than or equal to 25.');
        }

        $this->container['refundAppliedTime'] = $refundAppliedTime;

        return $this;
    }

    public function getActorType()
    {
        return $this->container['actorType'];
    }

    public function setActorType($actorType)
    {
        if (is_null($actorType)) {
            throw new \InvalidArgumentException('non-nullable actorType cannot be null');
        }
        $allowedValues = $this->getActorTypeAllowableValues();
        if (!in_array($actorType, $allowedValues, true) && !empty($actorType)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'actorType', must be one of '%s'",
                    $actorType,
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($actorType) > 64)) {
            throw new \InvalidArgumentException('invalid length for $actorType when calling RefundOrderRequestAdditionalInfo., must be smaller than or equal to 64.');
        }

        $this->container['actorType'] = $actorType;

        return $this;
    }

    public function getReturnChargeToPayer()
    {
        return $this->container['returnChargeToPayer'];
    }

    public function setReturnChargeToPayer($returnChargeToPayer)
    {
        if (is_null($returnChargeToPayer)) {
            throw new \InvalidArgumentException('non-nullable returnChargeToPayer cannot be null');
        }
        if ((mb_strlen($returnChargeToPayer) > 64)) {
            throw new \InvalidArgumentException('invalid length for $returnChargeToPayer when calling RefundOrderRequestAdditionalInfo., must be smaller than or equal to 64.');
        }

        $this->container['returnChargeToPayer'] = $returnChargeToPayer;

        return $this;
    }

    public function getDestination()
    {
        return $this->container['destination'];
    }

    public function setDestination($destination)
    {
        if (is_null($destination)) {
            throw new \InvalidArgumentException('non-nullable destination cannot be null');
        }
        if ((mb_strlen($destination) > 64)) {
            throw new \InvalidArgumentException('invalid length for $destination when calling RefundOrderRequestAdditionalInfo., must be smaller than or equal to 64.');
        }

        $this->container['destination'] = $destination;

        return $this;
    }

    public function getEnvInfo()
    {
        return $this->container['envInfo'];
    }

    public function setEnvInfo($envInfo)
    {
        if (is_null($envInfo)) {
            throw new \InvalidArgumentException('non-nullable envInfo cannot be null');
        }
        $this->container['envInfo'] = $envInfo;

        return $this;
    }

    public function getAuditInfo()
    {
        return $this->container['auditInfo'];
    }

    public function setAuditInfo($auditInfo)
    {
        if (is_null($auditInfo)) {
            throw new \InvalidArgumentException('non-nullable auditInfo cannot be null');
        }
        $this->container['auditInfo'] = $auditInfo;

        return $this;
    }

    public function getActorContext()
    {
        return $this->container['actorContext'];
    }

    public function setActorContext($actorContext)
    {
        if (is_null($actorContext)) {
            throw new \InvalidArgumentException('non-nullable actorContext cannot be null');
        }
        $this->container['actorContext'] = $actorContext;

        return $this;
    }

    public function getRefundOptionBill()
    {
        return $this->container['refundOptionBill'];
    }

    public function setRefundOptionBill($refundOptionBill)
    {
        if (is_null($refundOptionBill)) {
            throw new \InvalidArgumentException('non-nullable refundOptionBill cannot be null');
        }
        $this->container['refundOptionBill'] = $refundOptionBill;

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
            throw new \InvalidArgumentException('invalid length for $extendInfo when calling RefundOrderRequestAdditionalInfo., must be smaller than or equal to 4096.');
        }

        $this->container['extendInfo'] = $extendInfo;

        return $this;
    }

    public function getAsyncRefund()
    {
        return $this->container['asyncRefund'];
    }

    public function setAsyncRefund($asyncRefund)
    {
        if (is_null($asyncRefund)) {
            throw new \InvalidArgumentException('non-nullable asyncRefund cannot be null');
        }
        if ((mb_strlen($asyncRefund) > 5)) {
            throw new \InvalidArgumentException('invalid length for $asyncRefund when calling RefundOrderRequestAdditionalInfo., must be smaller than or equal to 5.');
        }

        $this->container['asyncRefund'] = $asyncRefund;

        return $this;
    }


}


