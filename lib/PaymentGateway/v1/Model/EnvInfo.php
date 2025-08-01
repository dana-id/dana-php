<?php
/**
 * EnvInfo
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Dana\PaymentGateway
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Payment Gateway API
 *
 * API for doing operations in DANA Payment Gateway (Gapura)
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.12.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Dana\PaymentGateway\v1\Model;

use \ArrayAccess;
use \Dana\ObjectSerializer;
use \Dana\Model\ModelInterface;

/**
 * EnvInfo Class Doc Comment
 *
 * @category Class
 * @package  Dana\PaymentGateway
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EnvInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EnvInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sessionId' => 'string',
        'tokenId' => 'string',
        'websiteLanguage' => 'string',
        'clientIp' => 'string',
        'osType' => 'string',
        'appVersion' => 'string',
        'sdkVersion' => 'string',
        'sourcePlatform' => 'string',
        'orderOsType' => 'string',
        'merchantAppVersion' => 'string',
        'terminalType' => 'string',
        'orderTerminalType' => 'string',
        'extendInfo' => 'string',
        'clientKey' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'sessionId' => null,
        'tokenId' => null,
        'websiteLanguage' => null,
        'clientIp' => null,
        'osType' => null,
        'appVersion' => null,
        'sdkVersion' => null,
        'sourcePlatform' => null,
        'orderOsType' => null,
        'merchantAppVersion' => null,
        'terminalType' => null,
        'orderTerminalType' => null,
        'extendInfo' => null,
        'clientKey' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'sessionId' => false,
        'tokenId' => false,
        'websiteLanguage' => false,
        'clientIp' => false,
        'osType' => false,
        'appVersion' => false,
        'sdkVersion' => false,
        'sourcePlatform' => false,
        'orderOsType' => false,
        'merchantAppVersion' => false,
        'terminalType' => false,
        'orderTerminalType' => false,
        'extendInfo' => false,
        'clientKey' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'sessionId' => 'sessionId',
        'tokenId' => 'tokenId',
        'websiteLanguage' => 'websiteLanguage',
        'clientIp' => 'clientIp',
        'osType' => 'osType',
        'appVersion' => 'appVersion',
        'sdkVersion' => 'sdkVersion',
        'sourcePlatform' => 'sourcePlatform',
        'orderOsType' => 'orderOsType',
        'merchantAppVersion' => 'merchantAppVersion',
        'terminalType' => 'terminalType',
        'orderTerminalType' => 'orderTerminalType',
        'extendInfo' => 'extendInfo',
        'clientKey' => 'clientKey'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sessionId' => 'setSessionId',
        'tokenId' => 'setTokenId',
        'websiteLanguage' => 'setWebsiteLanguage',
        'clientIp' => 'setClientIp',
        'osType' => 'setOsType',
        'appVersion' => 'setAppVersion',
        'sdkVersion' => 'setSdkVersion',
        'sourcePlatform' => 'setSourcePlatform',
        'orderOsType' => 'setOrderOsType',
        'merchantAppVersion' => 'setMerchantAppVersion',
        'terminalType' => 'setTerminalType',
        'orderTerminalType' => 'setOrderTerminalType',
        'extendInfo' => 'setExtendInfo',
        'clientKey' => 'setClientKey'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sessionId' => 'getSessionId',
        'tokenId' => 'getTokenId',
        'websiteLanguage' => 'getWebsiteLanguage',
        'clientIp' => 'getClientIp',
        'osType' => 'getOsType',
        'appVersion' => 'getAppVersion',
        'sdkVersion' => 'getSdkVersion',
        'sourcePlatform' => 'getSourcePlatform',
        'orderOsType' => 'getOrderOsType',
        'merchantAppVersion' => 'getMerchantAppVersion',
        'terminalType' => 'getTerminalType',
        'orderTerminalType' => 'getOrderTerminalType',
        'extendInfo' => 'getExtendInfo',
        'clientKey' => 'getClientKey'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    public const SOURCE_PLATFORM_IPG = 'IPG';
    public const TERMINAL_TYPE_APP = 'APP';
    public const TERMINAL_TYPE_WEB = 'WEB';
    public const TERMINAL_TYPE_WAP = 'WAP';
    public const TERMINAL_TYPE_SYSTEM = 'SYSTEM';
    public const ORDER_TERMINAL_TYPE_APP = 'APP';
    public const ORDER_TERMINAL_TYPE_WEB = 'WEB';
    public const ORDER_TERMINAL_TYPE_WAP = 'WAP';
    public const ORDER_TERMINAL_TYPE_SYSTEM = 'SYSTEM';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSourcePlatformAllowableValues()
    {
        return [
            self::SOURCE_PLATFORM_IPG,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTerminalTypeAllowableValues()
    {
        return [
            self::TERMINAL_TYPE_APP,
            self::TERMINAL_TYPE_WEB,
            self::TERMINAL_TYPE_WAP,
            self::TERMINAL_TYPE_SYSTEM,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOrderTerminalTypeAllowableValues()
    {
        return [
            self::ORDER_TERMINAL_TYPE_APP,
            self::ORDER_TERMINAL_TYPE_WEB,
            self::ORDER_TERMINAL_TYPE_WAP,
            self::ORDER_TERMINAL_TYPE_SYSTEM,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('sessionId', $data ?? [], null);
        $this->setIfExists('tokenId', $data ?? [], null);
        $this->setIfExists('websiteLanguage', $data ?? [], null);
        $this->setIfExists('clientIp', $data ?? [], null);
        $this->setIfExists('osType', $data ?? [], null);
        $this->setIfExists('appVersion', $data ?? [], null);
        $this->setIfExists('sdkVersion', $data ?? [], null);
        $this->setIfExists('sourcePlatform', $data ?? [], null);
        $this->setIfExists('orderOsType', $data ?? [], null);
        $this->setIfExists('merchantAppVersion', $data ?? [], null);
        $this->setIfExists('terminalType', $data ?? [], null);
        $this->setIfExists('orderTerminalType', $data ?? [], null);
        $this->setIfExists('extendInfo', $data ?? [], null);
        $this->setIfExists('clientKey', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['sessionId']) && (mb_strlen($this->container['sessionId']) > 128)) {
            $invalidProperties[] = "invalid value for 'sessionId', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['tokenId']) && (mb_strlen($this->container['tokenId']) > 128)) {
            $invalidProperties[] = "invalid value for 'tokenId', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['websiteLanguage']) && (mb_strlen($this->container['websiteLanguage']) > 16)) {
            $invalidProperties[] = "invalid value for 'websiteLanguage', the character length must be smaller than or equal to 16.";
        }

        if (!is_null($this->container['clientIp']) && (mb_strlen($this->container['clientIp']) > 32)) {
            $invalidProperties[] = "invalid value for 'clientIp', the character length must be smaller than or equal to 32.";
        }

        if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) > 128)) {
            $invalidProperties[] = "invalid value for 'osType', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['appVersion']) && (mb_strlen($this->container['appVersion']) > 128)) {
            $invalidProperties[] = "invalid value for 'appVersion', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['sdkVersion']) && (mb_strlen($this->container['sdkVersion']) > 128)) {
            $invalidProperties[] = "invalid value for 'sdkVersion', the character length must be smaller than or equal to 128.";
        }

        if ($this->container['sourcePlatform'] === null) {
            $invalidProperties[] = "'sourcePlatform' can't be null";
        }
        $allowedValues = $this->getSourcePlatformAllowableValues();
        if (!is_null($this->container['sourcePlatform']) && !in_array($this->container['sourcePlatform'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'sourcePlatform', must be one of '%s'",
                $this->container['sourcePlatform'],
                implode("', '", $allowedValues)
            );
        }

        if ((mb_strlen($this->container['sourcePlatform']) > 32)) {
            $invalidProperties[] = "invalid value for 'sourcePlatform', the character length must be smaller than or equal to 32.";
        }

        if (!is_null($this->container['orderOsType']) && (mb_strlen($this->container['orderOsType']) > 128)) {
            $invalidProperties[] = "invalid value for 'orderOsType', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['merchantAppVersion']) && (mb_strlen($this->container['merchantAppVersion']) > 128)) {
            $invalidProperties[] = "invalid value for 'merchantAppVersion', the character length must be smaller than or equal to 128.";
        }

        if ($this->container['terminalType'] === null) {
            $invalidProperties[] = "'terminalType' can't be null";
        }
        $allowedValues = $this->getTerminalTypeAllowableValues();
        if (!is_null($this->container['terminalType']) && !in_array($this->container['terminalType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'terminalType', must be one of '%s'",
                $this->container['terminalType'],
                implode("', '", $allowedValues)
            );
        }

        if ((mb_strlen($this->container['terminalType']) > 32)) {
            $invalidProperties[] = "invalid value for 'terminalType', the character length must be smaller than or equal to 32.";
        }

        $allowedValues = $this->getOrderTerminalTypeAllowableValues();
        if (!is_null($this->container['orderTerminalType']) && !in_array($this->container['orderTerminalType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'orderTerminalType', must be one of '%s'",
                $this->container['orderTerminalType'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['orderTerminalType']) && (mb_strlen($this->container['orderTerminalType']) > 32)) {
            $invalidProperties[] = "invalid value for 'orderTerminalType', the character length must be smaller than or equal to 32.";
        }

        if (!is_null($this->container['extendInfo']) && (mb_strlen($this->container['extendInfo']) > 4096)) {
            $invalidProperties[] = "invalid value for 'extendInfo', the character length must be smaller than or equal to 4096.";
        }

        if (!is_null($this->container['clientKey']) && (mb_strlen($this->container['clientKey']) > 64)) {
            $invalidProperties[] = "invalid value for 'clientKey', the character length must be smaller than or equal to 64.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets sessionId
     *
     * @return string|null
     */
    public function getSessionId()
    {
        return $this->container['sessionId'];
    }

    /**
     * Sets sessionId
     *
     * @param string|null $sessionId Session identifier
     *
     * @return self
     */
    public function setSessionId($sessionId)
    {
        if (is_null($sessionId)) {
            throw new \InvalidArgumentException('non-nullable sessionId cannot be null');
        }
        if ((mb_strlen($sessionId) > 128)) {
            throw new \InvalidArgumentException('invalid length for $sessionId when calling EnvInfo., must be smaller than or equal to 128.');
        }

        $this->container['sessionId'] = $sessionId;

        return $this;
    }

    /**
     * Gets tokenId
     *
     * @return string|null
     */
    public function getTokenId()
    {
        return $this->container['tokenId'];
    }

    /**
     * Sets tokenId
     *
     * @param string|null $tokenId Token identifier
     *
     * @return self
     */
    public function setTokenId($tokenId)
    {
        if (is_null($tokenId)) {
            throw new \InvalidArgumentException('non-nullable tokenId cannot be null');
        }
        if ((mb_strlen($tokenId) > 128)) {
            throw new \InvalidArgumentException('invalid length for $tokenId when calling EnvInfo., must be smaller than or equal to 128.');
        }

        $this->container['tokenId'] = $tokenId;

        return $this;
    }

    /**
     * Gets websiteLanguage
     *
     * @return string|null
     */
    public function getWebsiteLanguage()
    {
        return $this->container['websiteLanguage'];
    }

    /**
     * Sets websiteLanguage
     *
     * @param string|null $websiteLanguage Website language
     *
     * @return self
     */
    public function setWebsiteLanguage($websiteLanguage)
    {
        if (is_null($websiteLanguage)) {
            throw new \InvalidArgumentException('non-nullable websiteLanguage cannot be null');
        }
        if ((mb_strlen($websiteLanguage) > 16)) {
            throw new \InvalidArgumentException('invalid length for $websiteLanguage when calling EnvInfo., must be smaller than or equal to 16.');
        }

        $this->container['websiteLanguage'] = $websiteLanguage;

        return $this;
    }

    /**
     * Gets clientIp
     *
     * @return string|null
     */
    public function getClientIp()
    {
        return $this->container['clientIp'];
    }

    /**
     * Sets clientIp
     *
     * @param string|null $clientIp Client IP address
     *
     * @return self
     */
    public function setClientIp($clientIp)
    {
        if (is_null($clientIp)) {
            throw new \InvalidArgumentException('non-nullable clientIp cannot be null');
        }
        if ((mb_strlen($clientIp) > 32)) {
            throw new \InvalidArgumentException('invalid length for $clientIp when calling EnvInfo., must be smaller than or equal to 32.');
        }

        $this->container['clientIp'] = $clientIp;

        return $this;
    }

    /**
     * Gets osType
     *
     * @return string|null
     */
    public function getOsType()
    {
        return $this->container['osType'];
    }

    /**
     * Sets osType
     *
     * @param string|null $osType Operating system type
     *
     * @return self
     */
    public function setOsType($osType)
    {
        if (is_null($osType)) {
            throw new \InvalidArgumentException('non-nullable osType cannot be null');
        }
        if ((mb_strlen($osType) > 128)) {
            throw new \InvalidArgumentException('invalid length for $osType when calling EnvInfo., must be smaller than or equal to 128.');
        }

        $this->container['osType'] = $osType;

        return $this;
    }

    /**
     * Gets appVersion
     *
     * @return string|null
     */
    public function getAppVersion()
    {
        return $this->container['appVersion'];
    }

    /**
     * Sets appVersion
     *
     * @param string|null $appVersion App version
     *
     * @return self
     */
    public function setAppVersion($appVersion)
    {
        if (is_null($appVersion)) {
            throw new \InvalidArgumentException('non-nullable appVersion cannot be null');
        }
        if ((mb_strlen($appVersion) > 128)) {
            throw new \InvalidArgumentException('invalid length for $appVersion when calling EnvInfo., must be smaller than or equal to 128.');
        }

        $this->container['appVersion'] = $appVersion;

        return $this;
    }

    /**
     * Gets sdkVersion
     *
     * @return string|null
     */
    public function getSdkVersion()
    {
        return $this->container['sdkVersion'];
    }

    /**
     * Sets sdkVersion
     *
     * @param string|null $sdkVersion SDK version
     *
     * @return self
     */
    public function setSdkVersion($sdkVersion)
    {
        if (is_null($sdkVersion)) {
            throw new \InvalidArgumentException('non-nullable sdkVersion cannot be null');
        }
        if ((mb_strlen($sdkVersion) > 128)) {
            throw new \InvalidArgumentException('invalid length for $sdkVersion when calling EnvInfo., must be smaller than or equal to 128.');
        }

        $this->container['sdkVersion'] = $sdkVersion;

        return $this;
    }

    /**
     * Gets sourcePlatform
     *
     * @return string
     */
    public function getSourcePlatform()
    {
        return $this->container['sourcePlatform'];
    }

    /**
     * Sets sourcePlatform
     *
     * @param string $sourcePlatform The source platform is always independent payment gateway (IPG)
     *
     * @return self
     */
    public function setSourcePlatform($sourcePlatform)
    {
        if (is_null($sourcePlatform)) {
            throw new \InvalidArgumentException('non-nullable sourcePlatform cannot be null');
        }
        $allowedValues = $this->getSourcePlatformAllowableValues();
        if (!in_array($sourcePlatform, $allowedValues, true) && (!empty($sourcePlatform) || $sourcePlatform !== '')) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'sourcePlatform', must be one of '%s'",
                    $sourcePlatform,
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($sourcePlatform) > 32)) {
            throw new \InvalidArgumentException('invalid length for $sourcePlatform when calling EnvInfo., must be smaller than or equal to 32.');
        }

        $this->container['sourcePlatform'] = $sourcePlatform;

        return $this;
    }

    /**
     * Gets orderOsType
     *
     * @return string|null
     */
    public function getOrderOsType()
    {
        return $this->container['orderOsType'];
    }

    /**
     * Sets orderOsType
     *
     * @param string|null $orderOsType Order operating system type
     *
     * @return self
     */
    public function setOrderOsType($orderOsType)
    {
        if (is_null($orderOsType)) {
            throw new \InvalidArgumentException('non-nullable orderOsType cannot be null');
        }
        if ((mb_strlen($orderOsType) > 128)) {
            throw new \InvalidArgumentException('invalid length for $orderOsType when calling EnvInfo., must be smaller than or equal to 128.');
        }

        $this->container['orderOsType'] = $orderOsType;

        return $this;
    }

    /**
     * Gets merchantAppVersion
     *
     * @return string|null
     */
    public function getMerchantAppVersion()
    {
        return $this->container['merchantAppVersion'];
    }

    /**
     * Sets merchantAppVersion
     *
     * @param string|null $merchantAppVersion Merchant App version
     *
     * @return self
     */
    public function setMerchantAppVersion($merchantAppVersion)
    {
        if (is_null($merchantAppVersion)) {
            throw new \InvalidArgumentException('non-nullable merchantAppVersion cannot be null');
        }
        if ((mb_strlen($merchantAppVersion) > 128)) {
            throw new \InvalidArgumentException('invalid length for $merchantAppVersion when calling EnvInfo., must be smaller than or equal to 128.');
        }

        $this->container['merchantAppVersion'] = $merchantAppVersion;

        return $this;
    }

    /**
     * Gets terminalType
     *
     * @return string
     */
    public function getTerminalType()
    {
        return $this->container['terminalType'];
    }

    /**
     * Sets terminalType
     *
     * @param string $terminalType Terminal type. The enums:<br> * APP - Mobile Application<br> * WEB - Browser Web<br> * WAP - Mobile Wap<br> * SYSTEM - System Call<br>
     *
     * @return self
     */
    public function setTerminalType($terminalType)
    {
        if (is_null($terminalType)) {
            throw new \InvalidArgumentException('non-nullable terminalType cannot be null');
        }
        $allowedValues = $this->getTerminalTypeAllowableValues();
        if (!in_array($terminalType, $allowedValues, true) && (!empty($terminalType) || $terminalType !== '')) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'terminalType', must be one of '%s'",
                    $terminalType,
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($terminalType) > 32)) {
            throw new \InvalidArgumentException('invalid length for $terminalType when calling EnvInfo., must be smaller than or equal to 32.');
        }

        $this->container['terminalType'] = $terminalType;

        return $this;
    }

    /**
     * Gets orderTerminalType
     *
     * @return string|null
     */
    public function getOrderTerminalType()
    {
        return $this->container['orderTerminalType'];
    }

    /**
     * Sets orderTerminalType
     *
     * @param string|null $orderTerminalType Order terminal type. The enums:<br> * APP - Mobile Application<br> * WEB - Browser Web<br> * WAP - Mobile Wap<br> * SYSTEM - System Call<br>
     *
     * @return self
     */
    public function setOrderTerminalType($orderTerminalType)
    {
        if (is_null($orderTerminalType)) {
            throw new \InvalidArgumentException('non-nullable orderTerminalType cannot be null');
        }
        $allowedValues = $this->getOrderTerminalTypeAllowableValues();
        if (!in_array($orderTerminalType, $allowedValues, true) && (!empty($orderTerminalType) || $orderTerminalType !== '')) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'orderTerminalType', must be one of '%s'",
                    $orderTerminalType,
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($orderTerminalType) > 32)) {
            throw new \InvalidArgumentException('invalid length for $orderTerminalType when calling EnvInfo., must be smaller than or equal to 32.');
        }

        $this->container['orderTerminalType'] = $orderTerminalType;

        return $this;
    }

    /**
     * Gets extendInfo
     *
     * @return string|null
     */
    public function getExtendInfo()
    {
        return $this->container['extendInfo'];
    }

    /**
     * Sets extendInfo
     *
     * @param string|null $extendInfo Extend information
     *
     * @return self
     */
    public function setExtendInfo($extendInfo)
    {
        if (is_null($extendInfo)) {
            throw new \InvalidArgumentException('non-nullable extendInfo cannot be null');
        }
        if ((mb_strlen($extendInfo) > 4096)) {
            throw new \InvalidArgumentException('invalid length for $extendInfo when calling EnvInfo., must be smaller than or equal to 4096.');
        }

        $this->container['extendInfo'] = $extendInfo;

        return $this;
    }

    /**
     * Gets clientKey
     *
     * @return string|null
     */
    public function getClientKey()
    {
        return $this->container['clientKey'];
    }

    /**
     * Sets clientKey
     *
     * @param string|null $clientKey Unique identifier for partner was generated by DANA
     *
     * @return self
     */
    public function setClientKey($clientKey)
    {
        if (is_null($clientKey)) {
            throw new \InvalidArgumentException('non-nullable clientKey cannot be null');
        }
        if ((mb_strlen($clientKey) > 64)) {
            throw new \InvalidArgumentException('invalid length for $clientKey when calling EnvInfo., must be smaller than or equal to 64.');
        }

        $this->container['clientKey'] = $clientKey;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


