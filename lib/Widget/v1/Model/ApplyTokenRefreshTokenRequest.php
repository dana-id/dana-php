<?php
/**
 * ApplyTokenRefreshTokenRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Dana\Widget
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Widget API
 *
 * API for enabling the user to make payment from merchant's platform with redirecting to DANA's platform.
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

namespace Dana\Widget\v1\Model;

use \ArrayAccess;
use \Dana\ObjectSerializer;
use \Dana\Model\ModelInterface;

/**
 * ApplyTokenRefreshTokenRequest Class Doc Comment
 *
 * @category Class
 * @package  Dana\Widget
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ApplyTokenRefreshTokenRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ApplyTokenRefreshTokenRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'additionalInfo' => 'array<string,mixed>',
        'grantType' => 'string',
        'authCode' => 'string',
        'refreshToken' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'additionalInfo' => null,
        'grantType' => null,
        'authCode' => null,
        'refreshToken' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'additionalInfo' => false,
        'grantType' => false,
        'authCode' => false,
        'refreshToken' => false
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
        'additionalInfo' => 'additionalInfo',
        'grantType' => 'grantType',
        'authCode' => 'authCode',
        'refreshToken' => 'refreshToken'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'additionalInfo' => 'setAdditionalInfo',
        'grantType' => 'setGrantType',
        'authCode' => 'setAuthCode',
        'refreshToken' => 'setRefreshToken'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'additionalInfo' => 'getAdditionalInfo',
        'grantType' => 'getGrantType',
        'authCode' => 'getAuthCode',
        'refreshToken' => 'getRefreshToken'
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

    public const GRANT_TYPE_REFRESH_TOKEN = 'REFRESH_TOKEN';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getGrantTypeAllowableValues()
    {
        return [
            self::GRANT_TYPE_REFRESH_TOKEN,
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
        $this->setIfExists('additionalInfo', $data ?? [], null);
        $this->setIfExists('grantType', $data ?? [], null);
        $this->setIfExists('authCode', $data ?? [], null);
        $this->setIfExists('refreshToken', $data ?? [], null);
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

        if ($this->container['grantType'] === null) {
            $invalidProperties[] = "'grantType' can't be null";
        }
        $allowedValues = $this->getGrantTypeAllowableValues();
        if (!is_null($this->container['grantType']) && !in_array($this->container['grantType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'grantType', must be one of '%s'",
                $this->container['grantType'],
                implode("', '", $allowedValues)
            );
        }

        if ((mb_strlen($this->container['grantType']) > 64)) {
            $invalidProperties[] = "invalid value for 'grantType', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['authCode']) && (mb_strlen($this->container['authCode']) > 256)) {
            $invalidProperties[] = "invalid value for 'authCode', the character length must be smaller than or equal to 256.";
        }

        if ($this->container['refreshToken'] === null) {
            $invalidProperties[] = "'refreshToken' can't be null";
        }
        if ((mb_strlen($this->container['refreshToken']) > 512)) {
            $invalidProperties[] = "invalid value for 'refreshToken', the character length must be smaller than or equal to 512.";
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
     * Gets additionalInfo
     *
     * @return array<string,mixed>|null
     */
    public function getAdditionalInfo()
    {
        return $this->container['additionalInfo'];
    }

    /**
     * Sets additionalInfo
     *
     * @param array<string,mixed>|null $additionalInfo Additional information
     *
     * @return self
     */
    public function setAdditionalInfo($additionalInfo)
    {
        if (is_null($additionalInfo)) {
            throw new \InvalidArgumentException('non-nullable additionalInfo cannot be null');
        }
        $this->container['additionalInfo'] = $additionalInfo;

        return $this;
    }

    /**
     * Gets grantType
     *
     * @return string
     */
    public function getGrantType()
    {
        return $this->container['grantType'];
    }

    /**
     * Sets grantType
     *
     * @param string $grantType Apply token request type. The value is REFRESH_TOKEN
     *
     * @return self
     */
    public function setGrantType($grantType)
    {
        if (is_null($grantType)) {
            throw new \InvalidArgumentException('non-nullable grantType cannot be null');
        }
        $allowedValues = $this->getGrantTypeAllowableValues();
        if (!in_array($grantType, $allowedValues, true) && !empty($grantType)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'grantType', must be one of '%s'",
                    $grantType,
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($grantType) > 64)) {
            throw new \InvalidArgumentException('invalid length for $grantType when calling ApplyTokenRefreshTokenRequest., must be smaller than or equal to 64.');
        }

        $this->container['grantType'] = $grantType;

        return $this;
    }

    /**
     * Gets authCode
     *
     * @return string|null
     */
    public function getAuthCode()
    {
        return $this->container['authCode'];
    }

    /**
     * Sets authCode
     *
     * @param string|null $authCode Authorization code. Please refer to https://dashboard.dana.id/api-docs/read/125. Required if grantType is AUTHORIZATION_CODE
     *
     * @return self
     */
    public function setAuthCode($authCode)
    {
        if (is_null($authCode)) {
            throw new \InvalidArgumentException('non-nullable authCode cannot be null');
        }
        if ((mb_strlen($authCode) > 256)) {
            throw new \InvalidArgumentException('invalid length for $authCode when calling ApplyTokenRefreshTokenRequest., must be smaller than or equal to 256.');
        }

        $this->container['authCode'] = $authCode;

        return $this;
    }

    /**
     * Gets refreshToken
     *
     * @return string
     */
    public function getRefreshToken()
    {
        return $this->container['refreshToken'];
    }

    /**
     * Sets refreshToken
     *
     * @param string $refreshToken This token is used for refresh session if existing token has been expired
     *
     * @return self
     */
    public function setRefreshToken($refreshToken)
    {
        if (is_null($refreshToken)) {
            throw new \InvalidArgumentException('non-nullable refreshToken cannot be null');
        }
        if ((mb_strlen($refreshToken) > 512)) {
            throw new \InvalidArgumentException('invalid length for $refreshToken when calling ApplyTokenRefreshTokenRequest., must be smaller than or equal to 512.');
        }

        $this->container['refreshToken'] = $refreshToken;

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


