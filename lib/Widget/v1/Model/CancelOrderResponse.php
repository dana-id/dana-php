<?php
/**
 * CancelOrderResponse
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
 * CancelOrderResponse Class Doc Comment
 *
 * @category Class
 * @package  Dana\Widget
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CancelOrderResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CancelOrderResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'responseCode' => 'string',
        'responseMessage' => 'string',
        'originalReferenceNo' => 'string',
        'originalPartnerReferenceNo' => 'string',
        'originalExternalId' => 'string',
        'cancelTime' => 'string',
        'transactionDate' => 'string',
        'additionalInfo' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'responseCode' => null,
        'responseMessage' => null,
        'originalReferenceNo' => null,
        'originalPartnerReferenceNo' => null,
        'originalExternalId' => null,
        'cancelTime' => null,
        'transactionDate' => null,
        'additionalInfo' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'responseCode' => false,
        'responseMessage' => false,
        'originalReferenceNo' => false,
        'originalPartnerReferenceNo' => false,
        'originalExternalId' => false,
        'cancelTime' => false,
        'transactionDate' => false,
        'additionalInfo' => false
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
        'responseCode' => 'responseCode',
        'responseMessage' => 'responseMessage',
        'originalReferenceNo' => 'originalReferenceNo',
        'originalPartnerReferenceNo' => 'originalPartnerReferenceNo',
        'originalExternalId' => 'originalExternalId',
        'cancelTime' => 'cancelTime',
        'transactionDate' => 'transactionDate',
        'additionalInfo' => 'additionalInfo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'responseCode' => 'setResponseCode',
        'responseMessage' => 'setResponseMessage',
        'originalReferenceNo' => 'setOriginalReferenceNo',
        'originalPartnerReferenceNo' => 'setOriginalPartnerReferenceNo',
        'originalExternalId' => 'setOriginalExternalId',
        'cancelTime' => 'setCancelTime',
        'transactionDate' => 'setTransactionDate',
        'additionalInfo' => 'setAdditionalInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'responseCode' => 'getResponseCode',
        'responseMessage' => 'getResponseMessage',
        'originalReferenceNo' => 'getOriginalReferenceNo',
        'originalPartnerReferenceNo' => 'getOriginalPartnerReferenceNo',
        'originalExternalId' => 'getOriginalExternalId',
        'cancelTime' => 'getCancelTime',
        'transactionDate' => 'getTransactionDate',
        'additionalInfo' => 'getAdditionalInfo'
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
        $this->setIfExists('responseCode', $data ?? [], null);
        $this->setIfExists('responseMessage', $data ?? [], null);
        $this->setIfExists('originalReferenceNo', $data ?? [], null);
        $this->setIfExists('originalPartnerReferenceNo', $data ?? [], null);
        $this->setIfExists('originalExternalId', $data ?? [], null);
        $this->setIfExists('cancelTime', $data ?? [], null);
        $this->setIfExists('transactionDate', $data ?? [], null);
        $this->setIfExists('additionalInfo', $data ?? [], null);
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

        if (!is_null($this->container['cancelTime']) && (mb_strlen($this->container['cancelTime']) > 25)) {
            $invalidProperties[] = "invalid value for 'cancelTime', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['cancelTime']) && !preg_match("/^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/", $this->container['cancelTime'])) {
            $invalidProperties[] = "invalid value for 'cancelTime', must be conform to the pattern /^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/.";
        }

        if (!is_null($this->container['transactionDate']) && (mb_strlen($this->container['transactionDate']) > 25)) {
            $invalidProperties[] = "invalid value for 'transactionDate', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['transactionDate']) && !preg_match("/^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/", $this->container['transactionDate'])) {
            $invalidProperties[] = "invalid value for 'transactionDate', must be conform to the pattern /^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/.";
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
     * Gets responseCode
     *
     * @return string
     */
    public function getResponseCode()
    {
        return $this->container['responseCode'];
    }

    /**
     * Sets responseCode
     *
     * @param string $responseCode Refer to response code list
     *
     * @return self
     */
    public function setResponseCode($responseCode)
    {
        if (is_null($responseCode)) {
            throw new \InvalidArgumentException('non-nullable responseCode cannot be null');
        }
        if ((mb_strlen($responseCode) > 7)) {
            throw new \InvalidArgumentException('invalid length for $responseCode when calling CancelOrderResponse., must be smaller than or equal to 7.');
        }

        $this->container['responseCode'] = $responseCode;

        return $this;
    }

    /**
     * Gets responseMessage
     *
     * @return string
     */
    public function getResponseMessage()
    {
        return $this->container['responseMessage'];
    }

    /**
     * Sets responseMessage
     *
     * @param string $responseMessage Refer to response code list
     *
     * @return self
     */
    public function setResponseMessage($responseMessage)
    {
        if (is_null($responseMessage)) {
            throw new \InvalidArgumentException('non-nullable responseMessage cannot be null');
        }
        if ((mb_strlen($responseMessage) > 150)) {
            throw new \InvalidArgumentException('invalid length for $responseMessage when calling CancelOrderResponse., must be smaller than or equal to 150.');
        }

        $this->container['responseMessage'] = $responseMessage;

        return $this;
    }

    /**
     * Gets originalReferenceNo
     *
     * @return string|null
     */
    public function getOriginalReferenceNo()
    {
        return $this->container['originalReferenceNo'];
    }

    /**
     * Sets originalReferenceNo
     *
     * @param string|null $originalReferenceNo Original transaction identifier on DANA system
     *
     * @return self
     */
    public function setOriginalReferenceNo($originalReferenceNo)
    {
        if (is_null($originalReferenceNo)) {
            throw new \InvalidArgumentException('non-nullable originalReferenceNo cannot be null');
        }
        if ((mb_strlen($originalReferenceNo) > 64)) {
            throw new \InvalidArgumentException('invalid length for $originalReferenceNo when calling CancelOrderResponse., must be smaller than or equal to 64.');
        }

        $this->container['originalReferenceNo'] = $originalReferenceNo;

        return $this;
    }

    /**
     * Gets originalPartnerReferenceNo
     *
     * @return string
     */
    public function getOriginalPartnerReferenceNo()
    {
        return $this->container['originalPartnerReferenceNo'];
    }

    /**
     * Sets originalPartnerReferenceNo
     *
     * @param string $originalPartnerReferenceNo Original transaction identifier on partner system
     *
     * @return self
     */
    public function setOriginalPartnerReferenceNo($originalPartnerReferenceNo)
    {
        if (is_null($originalPartnerReferenceNo)) {
            throw new \InvalidArgumentException('non-nullable originalPartnerReferenceNo cannot be null');
        }
        if ((mb_strlen($originalPartnerReferenceNo) > 64)) {
            throw new \InvalidArgumentException('invalid length for $originalPartnerReferenceNo when calling CancelOrderResponse., must be smaller than or equal to 64.');
        }

        $this->container['originalPartnerReferenceNo'] = $originalPartnerReferenceNo;

        return $this;
    }

    /**
     * Gets originalExternalId
     *
     * @return string|null
     */
    public function getOriginalExternalId()
    {
        return $this->container['originalExternalId'];
    }

    /**
     * Sets originalExternalId
     *
     * @param string|null $originalExternalId Original external identifier on header message
     *
     * @return self
     */
    public function setOriginalExternalId($originalExternalId)
    {
        if (is_null($originalExternalId)) {
            throw new \InvalidArgumentException('non-nullable originalExternalId cannot be null');
        }
        if ((mb_strlen($originalExternalId) > 36)) {
            throw new \InvalidArgumentException('invalid length for $originalExternalId when calling CancelOrderResponse., must be smaller than or equal to 36.');
        }

        $this->container['originalExternalId'] = $originalExternalId;

        return $this;
    }

    /**
     * Gets cancelTime
     *
     * @return string|null
     */
    public function getCancelTime()
    {
        return $this->container['cancelTime'];
    }

    /**
     * Sets cancelTime
     *
     * @param string|null $cancelTime Cancellation date time, in format YYYY-MM-DDTHH:mm:ss+07:00. Time must be in GMT+7 (Jakarta time)
     *
     * @return self
     */
    public function setCancelTime($cancelTime)
    {
        if (is_null($cancelTime)) {
            throw new \InvalidArgumentException('non-nullable cancelTime cannot be null');
        }
        if ((mb_strlen($cancelTime) > 25)) {
            throw new \InvalidArgumentException('invalid length for $cancelTime when calling CancelOrderResponse., must be smaller than or equal to 25.');
        }
        if ((!preg_match("/^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/", ObjectSerializer::toString($cancelTime)))) {
            throw new \InvalidArgumentException("invalid value for \$cancelTime when calling CancelOrderResponse., must conform to the pattern /^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/.");
        }

        $this->container['cancelTime'] = $cancelTime;

        return $this;
    }

    /**
     * Gets transactionDate
     *
     * @return string|null
     */
    public function getTransactionDate()
    {
        return $this->container['transactionDate'];
    }

    /**
     * Sets transactionDate
     *
     * @param string|null $transactionDate Transaction date, in format YYYY-MM-DDTHH:mm:ss+07:00. Time must be in GMT+7 (Jakarta time)
     *
     * @return self
     */
    public function setTransactionDate($transactionDate)
    {
        if (is_null($transactionDate)) {
            throw new \InvalidArgumentException('non-nullable transactionDate cannot be null');
        }
        if ((mb_strlen($transactionDate) > 25)) {
            throw new \InvalidArgumentException('invalid length for $transactionDate when calling CancelOrderResponse., must be smaller than or equal to 25.');
        }
        if ((!preg_match("/^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/", ObjectSerializer::toString($transactionDate)))) {
            throw new \InvalidArgumentException("invalid value for \$transactionDate when calling CancelOrderResponse., must conform to the pattern /^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/.");
        }

        $this->container['transactionDate'] = $transactionDate;

        return $this;
    }

    /**
     * Gets additionalInfo
     *
     * @return object|null
     */
    public function getAdditionalInfo()
    {
        return $this->container['additionalInfo'];
    }

    /**
     * Sets additionalInfo
     *
     * @param object|null $additionalInfo Additional information
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


