<?php

namespace Dana\MerchantManagement\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\MerchantManagement\v1\Enum;

class QueryMerchantInfoRequest extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'QueryMerchantInfoRequest';

    protected static $openAPITypes = [
        'roleId' => 'string',
        'loginType' => 'string',
        'isQueryAccount' => 'bool'
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

    protected array $openAPINullablesSetToNull = [];

    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    public const LOGIN_TYPE_ROLE = 'ROLE';
    public const LOGIN_TYPE_MOBILE_NO = 'MOBILE_NO';

    public function getLoginTypeAllowableValues()
    {
        return [
            self::LOGIN_TYPE_ROLE,
            self::LOGIN_TYPE_MOBILE_NO,
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

        if ($this->container['roleId'] === null) {
            $invalidProperties[] = "'roleId' can't be null";
        }
        if ($this->container['loginType'] === null) {
            $invalidProperties[] = "'loginType' can't be null";
        }
        $allowedValues = $this->getLoginTypeAllowableValues();
        if (!is_null($this->container['loginType']) && !in_array($this->container['loginType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'loginType', must be one of '%s'",
                $this->container['loginType'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }



    public function getRoleId()
    {
        return $this->container['roleId'];
    }

    public function setRoleId($roleId)
    {
        if (is_null($roleId)) {
            throw new \InvalidArgumentException('non-nullable roleId cannot be null');
        }
        $this->container['roleId'] = $roleId;

        return $this;
    }

    public function getLoginType()
    {
        return $this->container['loginType'];
    }

    public function setLoginType($loginType)
    {
        if (is_null($loginType)) {
            throw new \InvalidArgumentException('non-nullable loginType cannot be null');
        }
        $allowedValues = $this->getLoginTypeAllowableValues();
        if (!in_array($loginType, $allowedValues, true) && !empty($loginType)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'loginType', must be one of '%s'",
                    $loginType,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['loginType'] = $loginType;

        return $this;
    }

    public function getIsQueryAccount()
    {
        return $this->container['isQueryAccount'];
    }

    public function setIsQueryAccount($isQueryAccount)
    {
        if (is_null($isQueryAccount)) {
            throw new \InvalidArgumentException('non-nullable isQueryAccount cannot be null');
        }
        $this->container['isQueryAccount'] = $isQueryAccount;

        return $this;
    }


}


