<?php

namespace Dana\MerchantManagement\v1\Model;

use Dana\ObjectSerializer;
use Dana\Model\BaseModel;
use Dana\MerchantManagement\v1\Enum;

class CreateDivisionRequestExtInfo extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'CreateDivisionRequestExtInfo';

    protected static $openAPITypes = [
        'pICEMAIL' => 'string',
        'pICPHONENUMBER' => 'string',
        'sUBMITTEREMAIL' => 'string',
        'gOODSSOLDTYPE' => 'string',
        'uSECASE' => 'string',
        'uSERPROFILING' => 'string',
        'aVGTICKET' => 'string',
        'oMZET' => 'string',
        'eXTURLS' => 'string',
        'bRANDNAME' => 'string'
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

    public const G_OODSSOLDTYPE_DIGITAL = 'DIGITAL';
    public const G_OODSSOLDTYPE_PHYSICAL = 'PHYSICAL';
    public const U_SERPROFILING_B2_B = 'B2B';
    public const U_SERPROFILING_B2_C = 'B2C';

    public function getGOODSSOLDTYPEAllowableValues()
    {
        return [
            self::G_OODSSOLDTYPE_DIGITAL,
            self::G_OODSSOLDTYPE_PHYSICAL,
        ];
    }

    public function getUSERPROFILINGAllowableValues()
    {
        return [
            self::U_SERPROFILING_B2_B,
            self::U_SERPROFILING_B2_C,
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

        $allowedValues = $this->getGOODSSOLDTYPEAllowableValues();
        if (!is_null($this->container['gOODSSOLDTYPE']) && !in_array($this->container['gOODSSOLDTYPE'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'gOODSSOLDTYPE', must be one of '%s'",
                $this->container['gOODSSOLDTYPE'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getUSERPROFILINGAllowableValues();
        if (!is_null($this->container['uSERPROFILING']) && !in_array($this->container['uSERPROFILING'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'uSERPROFILING', must be one of '%s'",
                $this->container['uSERPROFILING'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }



    public function getPICEMAIL()
    {
        return $this->container['pICEMAIL'];
    }

    public function setPICEMAIL($pICEMAIL)
    {
        if (is_null($pICEMAIL)) {
            throw new \InvalidArgumentException('non-nullable pICEMAIL cannot be null');
        }
        $this->container['pICEMAIL'] = $pICEMAIL;

        return $this;
    }

    public function getPICPHONENUMBER()
    {
        return $this->container['pICPHONENUMBER'];
    }

    public function setPICPHONENUMBER($pICPHONENUMBER)
    {
        if (is_null($pICPHONENUMBER)) {
            throw new \InvalidArgumentException('non-nullable pICPHONENUMBER cannot be null');
        }
        $this->container['pICPHONENUMBER'] = $pICPHONENUMBER;

        return $this;
    }

    public function getSUBMITTEREMAIL()
    {
        return $this->container['sUBMITTEREMAIL'];
    }

    public function setSUBMITTEREMAIL($sUBMITTEREMAIL)
    {
        if (is_null($sUBMITTEREMAIL)) {
            throw new \InvalidArgumentException('non-nullable sUBMITTEREMAIL cannot be null');
        }
        $this->container['sUBMITTEREMAIL'] = $sUBMITTEREMAIL;

        return $this;
    }

    public function getGOODSSOLDTYPE()
    {
        return $this->container['gOODSSOLDTYPE'];
    }

    public function setGOODSSOLDTYPE($gOODSSOLDTYPE)
    {
        if (is_null($gOODSSOLDTYPE)) {
            throw new \InvalidArgumentException('non-nullable gOODSSOLDTYPE cannot be null');
        }
        $allowedValues = $this->getGOODSSOLDTYPEAllowableValues();
        if (!in_array($gOODSSOLDTYPE, $allowedValues, true) && !empty($gOODSSOLDTYPE)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'gOODSSOLDTYPE', must be one of '%s'",
                    $gOODSSOLDTYPE,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['gOODSSOLDTYPE'] = $gOODSSOLDTYPE;

        return $this;
    }

    public function getUSECASE()
    {
        return $this->container['uSECASE'];
    }

    public function setUSECASE($uSECASE)
    {
        if (is_null($uSECASE)) {
            throw new \InvalidArgumentException('non-nullable uSECASE cannot be null');
        }
        $this->container['uSECASE'] = $uSECASE;

        return $this;
    }

    public function getUSERPROFILING()
    {
        return $this->container['uSERPROFILING'];
    }

    public function setUSERPROFILING($uSERPROFILING)
    {
        if (is_null($uSERPROFILING)) {
            throw new \InvalidArgumentException('non-nullable uSERPROFILING cannot be null');
        }
        $allowedValues = $this->getUSERPROFILINGAllowableValues();
        if (!in_array($uSERPROFILING, $allowedValues, true) && !empty($uSERPROFILING)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'uSERPROFILING', must be one of '%s'",
                    $uSERPROFILING,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['uSERPROFILING'] = $uSERPROFILING;

        return $this;
    }

    public function getAVGTICKET()
    {
        return $this->container['aVGTICKET'];
    }

    public function setAVGTICKET($aVGTICKET)
    {
        if (is_null($aVGTICKET)) {
            throw new \InvalidArgumentException('non-nullable aVGTICKET cannot be null');
        }
        $this->container['aVGTICKET'] = $aVGTICKET;

        return $this;
    }

    public function getOMZET()
    {
        return $this->container['oMZET'];
    }

    public function setOMZET($oMZET)
    {
        if (is_null($oMZET)) {
            throw new \InvalidArgumentException('non-nullable oMZET cannot be null');
        }
        $this->container['oMZET'] = $oMZET;

        return $this;
    }

    public function getEXTURLS()
    {
        return $this->container['eXTURLS'];
    }

    public function setEXTURLS($eXTURLS)
    {
        if (is_null($eXTURLS)) {
            throw new \InvalidArgumentException('non-nullable eXTURLS cannot be null');
        }
        $this->container['eXTURLS'] = $eXTURLS;

        return $this;
    }

    public function getBRANDNAME()
    {
        return $this->container['bRANDNAME'];
    }

    public function setBRANDNAME($bRANDNAME)
    {
        if (is_null($bRANDNAME)) {
            throw new \InvalidArgumentException('non-nullable bRANDNAME cannot be null');
        }
        $this->container['bRANDNAME'] = $bRANDNAME;

        return $this;
    }


}


