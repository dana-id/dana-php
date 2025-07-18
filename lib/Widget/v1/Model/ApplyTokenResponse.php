<?php
/**
 * ApplyTokenResponse
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
 * ApplyTokenResponse Class Doc Comment
 *
 * @category Class
 * @package  Dana\Widget
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ApplyTokenResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ApplyTokenResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'response_code' => 'string',
        'response_message' => 'string',
        'token_type' => 'string',
        'access_token' => 'string',
        'access_token_expiry_time' => 'string',
        'refresh_token' => 'string',
        'refresh_token_expiry_time' => 'string',
        'additional_info' => '\Dana\Widget\v1\Model\ApplyTokenResponseAdditionalInfo'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'response_code' => null,
        'response_message' => null,
        'token_type' => null,
        'access_token' => null,
        'access_token_expiry_time' => null,
        'refresh_token' => null,
        'refresh_token_expiry_time' => null,
        'additional_info' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'response_code' => false,
        'response_message' => false,
        'token_type' => false,
        'access_token' => false,
        'access_token_expiry_time' => false,
        'refresh_token' => false,
        'refresh_token_expiry_time' => false,
        'additional_info' => false
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
        'response_code' => 'responseCode',
        'response_message' => 'responseMessage',
        'token_type' => 'tokenType',
        'access_token' => 'accessToken',
        'access_token_expiry_time' => 'accessTokenExpiryTime',
        'refresh_token' => 'refreshToken',
        'refresh_token_expiry_time' => 'refreshTokenExpiryTime',
        'additional_info' => 'additionalInfo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'response_code' => 'setResponseCode',
        'response_message' => 'setResponseMessage',
        'token_type' => 'setTokenType',
        'access_token' => 'setAccessToken',
        'access_token_expiry_time' => 'setAccessTokenExpiryTime',
        'refresh_token' => 'setRefreshToken',
        'refresh_token_expiry_time' => 'setRefreshTokenExpiryTime',
        'additional_info' => 'setAdditionalInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'response_code' => 'getResponseCode',
        'response_message' => 'getResponseMessage',
        'token_type' => 'getTokenType',
        'access_token' => 'getAccessToken',
        'access_token_expiry_time' => 'getAccessTokenExpiryTime',
        'refresh_token' => 'getRefreshToken',
        'refresh_token_expiry_time' => 'getRefreshTokenExpiryTime',
        'additional_info' => 'getAdditionalInfo'
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
        $this->setIfExists('response_code', $data ?? [], null);
        $this->setIfExists('response_message', $data ?? [], null);
        $this->setIfExists('token_type', $data ?? [], null);
        $this->setIfExists('access_token', $data ?? [], null);
        $this->setIfExists('access_token_expiry_time', $data ?? [], null);
        $this->setIfExists('refresh_token', $data ?? [], null);
        $this->setIfExists('refresh_token_expiry_time', $data ?? [], null);
        $this->setIfExists('additional_info', $data ?? [], null);
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

        if ($this->container['response_code'] === null) {
            $invalidProperties[] = "'response_code' can't be null";
        }
        if ((mb_strlen($this->container['response_code']) > 7)) {
            $invalidProperties[] = "invalid value for 'response_code', the character length must be smaller than or equal to 7.";
        }

        if ($this->container['response_message'] === null) {
            $invalidProperties[] = "'response_message' can't be null";
        }
        if ((mb_strlen($this->container['response_message']) > 150)) {
            $invalidProperties[] = "invalid value for 'response_message', the character length must be smaller than or equal to 150.";
        }

        if (!is_null($this->container['token_type']) && (mb_strlen($this->container['token_type']) > 7)) {
            $invalidProperties[] = "invalid value for 'token_type', the character length must be smaller than or equal to 7.";
        }

        if ($this->container['access_token'] === null) {
            $invalidProperties[] = "'access_token' can't be null";
        }
        if ((mb_strlen($this->container['access_token']) > 512)) {
            $invalidProperties[] = "invalid value for 'access_token', the character length must be smaller than or equal to 512.";
        }

        if (!is_null($this->container['access_token_expiry_time']) && (mb_strlen($this->container['access_token_expiry_time']) > 25)) {
            $invalidProperties[] = "invalid value for 'access_token_expiry_time', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['access_token_expiry_time']) && !preg_match("/^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/", $this->container['access_token_expiry_time'])) {
            $invalidProperties[] = "invalid value for 'access_token_expiry_time', must be conform to the pattern /^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/.";
        }

        if (!is_null($this->container['refresh_token']) && (mb_strlen($this->container['refresh_token']) > 512)) {
            $invalidProperties[] = "invalid value for 'refresh_token', the character length must be smaller than or equal to 512.";
        }

        if (!is_null($this->container['refresh_token_expiry_time']) && (mb_strlen($this->container['refresh_token_expiry_time']) > 25)) {
            $invalidProperties[] = "invalid value for 'refresh_token_expiry_time', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['refresh_token_expiry_time']) && !preg_match("/^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/", $this->container['refresh_token_expiry_time'])) {
            $invalidProperties[] = "invalid value for 'refresh_token_expiry_time', must be conform to the pattern /^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/.";
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
     * Gets response_code
     *
     * @return string
     */
    public function getResponseCode()
    {
        return $this->container['response_code'];
    }

    /**
     * Sets response_code
     *
     * @param string $response_code Response code. Refer to https://dashboard.dana.id/api-docs/read/110#HTML-ApplyToken-ResponseCodeandMessage
     *
     * @return self
     */
    public function setResponseCode($response_code)
    {
        if (is_null($response_code)) {
            throw new \InvalidArgumentException('non-nullable response_code cannot be null');
        }
        if ((mb_strlen($response_code) > 7)) {
            throw new \InvalidArgumentException('invalid length for $response_code when calling ApplyTokenResponse., must be smaller than or equal to 7.');
        }

        $this->container['response_code'] = $response_code;

        return $this;
    }

    /**
     * Gets response_message
     *
     * @return string
     */
    public function getResponseMessage()
    {
        return $this->container['response_message'];
    }

    /**
     * Sets response_message
     *
     * @param string $response_message Response message. Refer to https://dashboard.dana.id/api-docs/read/110#HTML-ApplyToken-ResponseCodeandMessage
     *
     * @return self
     */
    public function setResponseMessage($response_message)
    {
        if (is_null($response_message)) {
            throw new \InvalidArgumentException('non-nullable response_message cannot be null');
        }
        if ((mb_strlen($response_message) > 150)) {
            throw new \InvalidArgumentException('invalid length for $response_message when calling ApplyTokenResponse., must be smaller than or equal to 150.');
        }

        $this->container['response_message'] = $response_message;

        return $this;
    }

    /**
     * Gets token_type
     *
     * @return string|null
     */
    public function getTokenType()
    {
        return $this->container['token_type'];
    }

    /**
     * Sets token_type
     *
     * @param string|null $token_type Token type. Present if successfully processed
     *
     * @return self
     */
    public function setTokenType($token_type)
    {
        if (is_null($token_type)) {
            throw new \InvalidArgumentException('non-nullable token_type cannot be null');
        }
        if ((mb_strlen($token_type) > 7)) {
            throw new \InvalidArgumentException('invalid length for $token_type when calling ApplyTokenResponse., must be smaller than or equal to 7.');
        }

        $this->container['token_type'] = $token_type;

        return $this;
    }

    /**
     * Gets access_token
     *
     * @return string
     */
    public function getAccessToken()
    {
        return $this->container['access_token'];
    }

    /**
     * Sets access_token
     *
     * @param string $access_token This token is called Customer Token that will be used as a parameter on header in other API “Authorization-Customer”. Present if successfully processed
     *
     * @return self
     */
    public function setAccessToken($access_token)
    {
        if (is_null($access_token)) {
            throw new \InvalidArgumentException('non-nullable access_token cannot be null');
        }
        if ((mb_strlen($access_token) > 512)) {
            throw new \InvalidArgumentException('invalid length for $access_token when calling ApplyTokenResponse., must be smaller than or equal to 512.');
        }

        $this->container['access_token'] = $access_token;

        return $this;
    }

    /**
     * Gets access_token_expiry_time
     *
     * @return string|null
     */
    public function getAccessTokenExpiryTime()
    {
        return $this->container['access_token_expiry_time'];
    }

    /**
     * Sets access_token_expiry_time
     *
     * @param string|null $access_token_expiry_time Expiry time for access token was given to user, in format YYYY-MM-DDTHH:mm:ss+07:00. Time must be in GMT+7 (Jakarta time). Present if successfully processed
     *
     * @return self
     */
    public function setAccessTokenExpiryTime($access_token_expiry_time)
    {
        if (is_null($access_token_expiry_time)) {
            throw new \InvalidArgumentException('non-nullable access_token_expiry_time cannot be null');
        }
        if ((mb_strlen($access_token_expiry_time) > 25)) {
            throw new \InvalidArgumentException('invalid length for $access_token_expiry_time when calling ApplyTokenResponse., must be smaller than or equal to 25.');
        }
        if ((!preg_match("/^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/", ObjectSerializer::toString($access_token_expiry_time)))) {
            throw new \InvalidArgumentException("invalid value for \$access_token_expiry_time when calling ApplyTokenResponse., must conform to the pattern /^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/.");
        }

        $this->container['access_token_expiry_time'] = $access_token_expiry_time;

        return $this;
    }

    /**
     * Gets refresh_token
     *
     * @return string|null
     */
    public function getRefreshToken()
    {
        return $this->container['refresh_token'];
    }

    /**
     * Sets refresh_token
     *
     * @param string|null $refresh_token This token is used for refresh session if existing token has been expired. Present if successfully processed
     *
     * @return self
     */
    public function setRefreshToken($refresh_token)
    {
        if (is_null($refresh_token)) {
            throw new \InvalidArgumentException('non-nullable refresh_token cannot be null');
        }
        if ((mb_strlen($refresh_token) > 512)) {
            throw new \InvalidArgumentException('invalid length for $refresh_token when calling ApplyTokenResponse., must be smaller than or equal to 512.');
        }

        $this->container['refresh_token'] = $refresh_token;

        return $this;
    }

    /**
     * Gets refresh_token_expiry_time
     *
     * @return string|null
     */
    public function getRefreshTokenExpiryTime()
    {
        return $this->container['refresh_token_expiry_time'];
    }

    /**
     * Sets refresh_token_expiry_time
     *
     * @param string|null $refresh_token_expiry_time Expiry time for refresh token was given to user, in format YYYY-MM-DDTHH:mm:ss+07:00. Time must be in GMT+7 (Jakarta time). Present if successfully processed
     *
     * @return self
     */
    public function setRefreshTokenExpiryTime($refresh_token_expiry_time)
    {
        if (is_null($refresh_token_expiry_time)) {
            throw new \InvalidArgumentException('non-nullable refresh_token_expiry_time cannot be null');
        }
        if ((mb_strlen($refresh_token_expiry_time) > 25)) {
            throw new \InvalidArgumentException('invalid length for $refresh_token_expiry_time when calling ApplyTokenResponse., must be smaller than or equal to 25.');
        }
        if ((!preg_match("/^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/", ObjectSerializer::toString($refresh_token_expiry_time)))) {
            throw new \InvalidArgumentException("invalid value for \$refresh_token_expiry_time when calling ApplyTokenResponse., must conform to the pattern /^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/.");
        }

        $this->container['refresh_token_expiry_time'] = $refresh_token_expiry_time;

        return $this;
    }

    /**
     * Gets additional_info
     *
     * @return \Dana\Widget\v1\Model\ApplyTokenResponseAdditionalInfo|null
     */
    public function getAdditionalInfo()
    {
        return $this->container['additional_info'];
    }

    /**
     * Sets additional_info
     *
     * @param \Dana\Widget\v1\Model\ApplyTokenResponseAdditionalInfo|null $additional_info Additional information
     *
     * @return self
     */
    public function setAdditionalInfo($additional_info)
    {
        if (is_null($additional_info)) {
            throw new \InvalidArgumentException('non-nullable additional_info cannot be null');
        }
        $this->container['additional_info'] = $additional_info;

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


