<?php

namespace Dana\MerchantManagement\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\MerchantManagement\v1\Enum;

class BusinessDocs extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'BusinessDocs';

    protected static $openAPITypes = [
        'docType' => 'string',
        'docId' => 'string',
        'docFile' => 'string'
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

    public const DOC_TYPE_KTP = 'KTP';
    public const DOC_TYPE_SIM = 'SIM';
    public const DOC_TYPE_SIUP = 'SIUP';
    public const DOC_TYPE_NIB = 'NIB';

    public function getDocTypeAllowableValues()
    {
        return [
            self::DOC_TYPE_KTP,
            self::DOC_TYPE_SIM,
            self::DOC_TYPE_SIUP,
            self::DOC_TYPE_NIB,
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

        $allowedValues = $this->getDocTypeAllowableValues();
        if (!is_null($this->container['docType']) && !in_array($this->container['docType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'docType', must be one of '%s'",
                $this->container['docType'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }



    public function getDocType()
    {
        return $this->container['docType'];
    }

    public function setDocType($docType)
    {
        if (is_null($docType)) {
            throw new \InvalidArgumentException('non-nullable docType cannot be null');
        }
        $allowedValues = $this->getDocTypeAllowableValues();
        if (!in_array($docType, $allowedValues, true) && !empty($docType)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'docType', must be one of '%s'",
                    $docType,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['docType'] = $docType;

        return $this;
    }

    public function getDocId()
    {
        return $this->container['docId'];
    }

    public function setDocId($docId)
    {
        if (is_null($docId)) {
            throw new \InvalidArgumentException('non-nullable docId cannot be null');
        }
        $this->container['docId'] = $docId;

        return $this;
    }

    public function getDocFile()
    {
        return $this->container['docFile'];
    }

    public function setDocFile($docFile)
    {
        if (is_null($docFile)) {
            throw new \InvalidArgumentException('non-nullable docFile cannot be null');
        }
        $this->container['docFile'] = $docFile;

        return $this;
    }


}


