<?php

namespace Dana\PaymentGateway\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\PaymentGateway\v1\Enum;

class RefundOrderResponse extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'RefundOrderResponse';

    protected static $openAPITypes = [
        'responseCode' => 'string',
        'responseMessage' => 'string',
        'originalReferenceNo' => 'string',
        'originalPartnerReferenceNo' => 'string',
        'originalExternalId' => 'string',
        'originalCaptureNo' => 'string',
        'refundNo' => 'string',
        'partnerRefundNo' => 'string',
        'refundAmount' => '\Dana\PaymentGateway\v1\Model\Money',
        'refundTime' => 'string',
        'additionalInfo' => 'object'
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

        if (!is_null($this->container['originalReferenceNo']) && (mb_strlen($this->container['originalReferenceNo']) > 64)) {
            $invalidProperties[] = "invalid value for 'originalReferenceNo', the character length must be smaller than or equal to 64.";
        }

        if ($this->container['originalPartnerReferenceNo'] === null) {
            $invalidProperties[] = "'originalPartnerReferenceNo' can't be null";
        }
        if ((mb_strlen($this->container['originalPartnerReferenceNo']) > 64)) {
            $invalidProperties[] = "invalid value for 'originalPartnerReferenceNo', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['originalExternalId']) && (mb_strlen($this->container['originalExternalId']) > 36)) {
            $invalidProperties[] = "invalid value for 'originalExternalId', the character length must be smaller than or equal to 36.";
        }

        if (!is_null($this->container['originalCaptureNo']) && (mb_strlen($this->container['originalCaptureNo']) > 64)) {
            $invalidProperties[] = "invalid value for 'originalCaptureNo', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['refundNo']) && (mb_strlen($this->container['refundNo']) > 64)) {
            $invalidProperties[] = "invalid value for 'refundNo', the character length must be smaller than or equal to 64.";
        }

        if ($this->container['partnerRefundNo'] === null) {
            $invalidProperties[] = "'partnerRefundNo' can't be null";
        }
        if ((mb_strlen($this->container['partnerRefundNo']) > 64)) {
            $invalidProperties[] = "invalid value for 'partnerRefundNo', the character length must be smaller than or equal to 64.";
        }

        if ($this->container['refundAmount'] === null) {
            $invalidProperties[] = "'refundAmount' can't be null";
        }
        if (!is_null($this->container['refundTime']) && (mb_strlen($this->container['refundTime']) > 25)) {
            $invalidProperties[] = "invalid value for 'refundTime', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['refundTime']) && !preg_match("/^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/", $this->container['refundTime'])) {
            $invalidProperties[] = "invalid value for 'refundTime', must be conform to the pattern /^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/.";
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
            throw new \InvalidArgumentException('invalid length for $responseCode when calling RefundOrderResponse., must be smaller than or equal to 7.');
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
            throw new \InvalidArgumentException('invalid length for $responseMessage when calling RefundOrderResponse., must be smaller than or equal to 150.');
        }

        $this->container['responseMessage'] = $responseMessage;

        return $this;
    }

    public function getOriginalReferenceNo()
    {
        return $this->container['originalReferenceNo'];
    }

    public function setOriginalReferenceNo($originalReferenceNo)
    {
        if (is_null($originalReferenceNo)) {
            throw new \InvalidArgumentException('non-nullable originalReferenceNo cannot be null');
        }
        if ((mb_strlen($originalReferenceNo) > 64)) {
            throw new \InvalidArgumentException('invalid length for $originalReferenceNo when calling RefundOrderResponse., must be smaller than or equal to 64.');
        }

        $this->container['originalReferenceNo'] = $originalReferenceNo;

        return $this;
    }

    public function getOriginalPartnerReferenceNo()
    {
        return $this->container['originalPartnerReferenceNo'];
    }

    public function setOriginalPartnerReferenceNo($originalPartnerReferenceNo)
    {
        if (is_null($originalPartnerReferenceNo)) {
            throw new \InvalidArgumentException('non-nullable originalPartnerReferenceNo cannot be null');
        }
        if ((mb_strlen($originalPartnerReferenceNo) > 64)) {
            throw new \InvalidArgumentException('invalid length for $originalPartnerReferenceNo when calling RefundOrderResponse., must be smaller than or equal to 64.');
        }

        $this->container['originalPartnerReferenceNo'] = $originalPartnerReferenceNo;

        return $this;
    }

    public function getOriginalExternalId()
    {
        return $this->container['originalExternalId'];
    }

    public function setOriginalExternalId($originalExternalId)
    {
        if (is_null($originalExternalId)) {
            throw new \InvalidArgumentException('non-nullable originalExternalId cannot be null');
        }
        if ((mb_strlen($originalExternalId) > 36)) {
            throw new \InvalidArgumentException('invalid length for $originalExternalId when calling RefundOrderResponse., must be smaller than or equal to 36.');
        }

        $this->container['originalExternalId'] = $originalExternalId;

        return $this;
    }

    public function getOriginalCaptureNo()
    {
        return $this->container['originalCaptureNo'];
    }

    public function setOriginalCaptureNo($originalCaptureNo)
    {
        if (is_null($originalCaptureNo)) {
            throw new \InvalidArgumentException('non-nullable originalCaptureNo cannot be null');
        }
        if ((mb_strlen($originalCaptureNo) > 64)) {
            throw new \InvalidArgumentException('invalid length for $originalCaptureNo when calling RefundOrderResponse., must be smaller than or equal to 64.');
        }

        $this->container['originalCaptureNo'] = $originalCaptureNo;

        return $this;
    }

    public function getRefundNo()
    {
        return $this->container['refundNo'];
    }

    public function setRefundNo($refundNo)
    {
        if (is_null($refundNo)) {
            throw new \InvalidArgumentException('non-nullable refundNo cannot be null');
        }
        if ((mb_strlen($refundNo) > 64)) {
            throw new \InvalidArgumentException('invalid length for $refundNo when calling RefundOrderResponse., must be smaller than or equal to 64.');
        }

        $this->container['refundNo'] = $refundNo;

        return $this;
    }

    public function getPartnerRefundNo()
    {
        return $this->container['partnerRefundNo'];
    }

    public function setPartnerRefundNo($partnerRefundNo)
    {
        if (is_null($partnerRefundNo)) {
            throw new \InvalidArgumentException('non-nullable partnerRefundNo cannot be null');
        }
        if ((mb_strlen($partnerRefundNo) > 64)) {
            throw new \InvalidArgumentException('invalid length for $partnerRefundNo when calling RefundOrderResponse., must be smaller than or equal to 64.');
        }

        $this->container['partnerRefundNo'] = $partnerRefundNo;

        return $this;
    }

    public function getRefundAmount()
    {
        return $this->container['refundAmount'];
    }

    public function setRefundAmount($refundAmount)
    {
        if (is_null($refundAmount)) {
            throw new \InvalidArgumentException('non-nullable refundAmount cannot be null');
        }
        $this->container['refundAmount'] = $refundAmount;

        return $this;
    }

    public function getRefundTime()
    {
        return $this->container['refundTime'];
    }

    public function setRefundTime($refundTime)
    {
        if (is_null($refundTime)) {
            throw new \InvalidArgumentException('non-nullable refundTime cannot be null');
        }
        if ((mb_strlen($refundTime) > 25)) {
            throw new \InvalidArgumentException('invalid length for $refundTime when calling RefundOrderResponse., must be smaller than or equal to 25.');
        }
        if ((!preg_match("/^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/", ObjectSerializer::toString($refundTime)))) {
            throw new \InvalidArgumentException("invalid value for \$refundTime when calling RefundOrderResponse., must conform to the pattern /^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/.");
        }

        $this->container['refundTime'] = $refundTime;

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


