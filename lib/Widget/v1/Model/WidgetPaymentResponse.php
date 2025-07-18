<?php
/**
 * WidgetPaymentResponse
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
 * WidgetPaymentResponse Class Doc Comment
 *
 * @category Class
 * @description Response object for Direct Debit Payment API
 * @package  Dana\Widget
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WidgetPaymentResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WidgetPaymentResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'response_code' => 'string',
        'response_message' => 'string',
        'reference_no' => 'string',
        'partner_reference_no' => 'string',
        'web_redirect_url' => 'string',
        'additional_info' => 'array<string,mixed>'
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
        'reference_no' => null,
        'partner_reference_no' => null,
        'web_redirect_url' => null,
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
        'reference_no' => false,
        'partner_reference_no' => false,
        'web_redirect_url' => false,
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
        'reference_no' => 'referenceNo',
        'partner_reference_no' => 'partnerReferenceNo',
        'web_redirect_url' => 'webRedirectUrl',
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
        'reference_no' => 'setReferenceNo',
        'partner_reference_no' => 'setPartnerReferenceNo',
        'web_redirect_url' => 'setWebRedirectUrl',
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
        'reference_no' => 'getReferenceNo',
        'partner_reference_no' => 'getPartnerReferenceNo',
        'web_redirect_url' => 'getWebRedirectUrl',
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
        $this->setIfExists('reference_no', $data ?? [], null);
        $this->setIfExists('partner_reference_no', $data ?? [], null);
        $this->setIfExists('web_redirect_url', $data ?? [], null);
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

        if (!is_null($this->container['reference_no']) && (mb_strlen($this->container['reference_no']) > 64)) {
            $invalidProperties[] = "invalid value for 'reference_no', the character length must be smaller than or equal to 64.";
        }

        if ($this->container['partner_reference_no'] === null) {
            $invalidProperties[] = "'partner_reference_no' can't be null";
        }
        if ((mb_strlen($this->container['partner_reference_no']) > 64)) {
            $invalidProperties[] = "invalid value for 'partner_reference_no', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['web_redirect_url']) && (mb_strlen($this->container['web_redirect_url']) > 2048)) {
            $invalidProperties[] = "invalid value for 'web_redirect_url', the character length must be smaller than or equal to 2048.";
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
     * @param string $response_code Refer to response code list:<br> * 2005400 - Successful<br> * 4005400 - Bad Request - Retry request with proper parameter<br> * 4005401 - Invalid Field Format - Retry request with proper parameter<br> * 4005402 - Invalid Mandatory Field - Retry request with proper parameter<br> * 4015400 - Unauthorized. [reason] - Retry request with proper parameter<br> * 4035402 - Exceeds Transaction Amount Limit - Try to adjust the order amount<br> * 4035405 - Do Not Honor - Retry request with proper parameter or can contact DANA to check the user/account status<br> * 4035415 - Transaction Not Permitted - Retry request periodically or consult to DANA<br> * 4045408 - Invalid Merchant - Retry request with proper parameter<br> * 4045418 - Inconsistent Request - Retry with proper parameter<br> * 4295400 - Too Many Requests - Retry request periodically by sending same request payload<br> * 5005400 - General Error - Retry request periodically<br> * 5005401 - Internal Server Error - Retry request periodically by sending same request payload<br>
     *
     * @return self
     */
    public function setResponseCode($response_code)
    {
        if (is_null($response_code)) {
            throw new \InvalidArgumentException('non-nullable response_code cannot be null');
        }
        if ((mb_strlen($response_code) > 7)) {
            throw new \InvalidArgumentException('invalid length for $response_code when calling WidgetPaymentResponse., must be smaller than or equal to 7.');
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
     * @param string $response_message Human readable response message
     *
     * @return self
     */
    public function setResponseMessage($response_message)
    {
        if (is_null($response_message)) {
            throw new \InvalidArgumentException('non-nullable response_message cannot be null');
        }
        if ((mb_strlen($response_message) > 150)) {
            throw new \InvalidArgumentException('invalid length for $response_message when calling WidgetPaymentResponse., must be smaller than or equal to 150.');
        }

        $this->container['response_message'] = $response_message;

        return $this;
    }

    /**
     * Gets reference_no
     *
     * @return string|null
     */
    public function getReferenceNo()
    {
        return $this->container['reference_no'];
    }

    /**
     * Sets reference_no
     *
     * @param string|null $reference_no Transaction identifier on DANA system, returned when transaction is successfully processed
     *
     * @return self
     */
    public function setReferenceNo($reference_no)
    {
        if (is_null($reference_no)) {
            throw new \InvalidArgumentException('non-nullable reference_no cannot be null');
        }
        if ((mb_strlen($reference_no) > 64)) {
            throw new \InvalidArgumentException('invalid length for $reference_no when calling WidgetPaymentResponse., must be smaller than or equal to 64.');
        }

        $this->container['reference_no'] = $reference_no;

        return $this;
    }

    /**
     * Gets partner_reference_no
     *
     * @return string
     */
    public function getPartnerReferenceNo()
    {
        return $this->container['partner_reference_no'];
    }

    /**
     * Sets partner_reference_no
     *
     * @param string $partner_reference_no Transaction identifier on partner system which assigned to each transaction
     *
     * @return self
     */
    public function setPartnerReferenceNo($partner_reference_no)
    {
        if (is_null($partner_reference_no)) {
            throw new \InvalidArgumentException('non-nullable partner_reference_no cannot be null');
        }
        if ((mb_strlen($partner_reference_no) > 64)) {
            throw new \InvalidArgumentException('invalid length for $partner_reference_no when calling WidgetPaymentResponse., must be smaller than or equal to 64.');
        }

        $this->container['partner_reference_no'] = $partner_reference_no;

        return $this;
    }

    /**
     * Gets web_redirect_url
     *
     * @return string|null
     */
    public function getWebRedirectUrl()
    {
        return $this->container['web_redirect_url'];
    }

    /**
     * Sets web_redirect_url
     *
     * @param string|null $web_redirect_url DANA checkout URL, returned when transaction is successfully processed
     *
     * @return self
     */
    public function setWebRedirectUrl($web_redirect_url)
    {
        if (is_null($web_redirect_url)) {
            throw new \InvalidArgumentException('non-nullable web_redirect_url cannot be null');
        }
        if ((mb_strlen($web_redirect_url) > 2048)) {
            throw new \InvalidArgumentException('invalid length for $web_redirect_url when calling WidgetPaymentResponse., must be smaller than or equal to 2048.');
        }

        $this->container['web_redirect_url'] = $web_redirect_url;

        return $this;
    }

    /**
     * Gets additional_info
     *
     * @return array<string,mixed>|null
     */
    public function getAdditionalInfo()
    {
        return $this->container['additional_info'];
    }

    /**
     * Sets additional_info
     *
     * @param array<string,mixed>|null $additional_info Additional information
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


