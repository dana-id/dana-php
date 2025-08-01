<?php
/**
 * StatusDetail
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
 * StatusDetail Class Doc Comment
 *
 * @category Class
 * @package  Dana\PaymentGateway
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class StatusDetail implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'StatusDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'acquirementStatus' => 'string',
        'frozen' => 'string',
        'cancelled' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'acquirementStatus' => null,
        'frozen' => null,
        'cancelled' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'acquirementStatus' => false,
        'frozen' => false,
        'cancelled' => false
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
        'acquirementStatus' => 'acquirementStatus',
        'frozen' => 'frozen',
        'cancelled' => 'cancelled'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'acquirementStatus' => 'setAcquirementStatus',
        'frozen' => 'setFrozen',
        'cancelled' => 'setCancelled'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'acquirementStatus' => 'getAcquirementStatus',
        'frozen' => 'getFrozen',
        'cancelled' => 'getCancelled'
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

    public const ACQUIREMENT_STATUS_INIT = 'INIT';
    public const ACQUIREMENT_STATUS_SUCCESS = 'SUCCESS';
    public const ACQUIREMENT_STATUS_CLOSED = 'CLOSED';
    public const ACQUIREMENT_STATUS_PAYING = 'PAYING';
    public const ACQUIREMENT_STATUS_MERCHANT_ACCEPT = 'MERCHANT_ACCEPT';
    public const ACQUIREMENT_STATUS_CANCELLED = 'CANCELLED';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAcquirementStatusAllowableValues()
    {
        return [
            self::ACQUIREMENT_STATUS_INIT,
            self::ACQUIREMENT_STATUS_SUCCESS,
            self::ACQUIREMENT_STATUS_CLOSED,
            self::ACQUIREMENT_STATUS_PAYING,
            self::ACQUIREMENT_STATUS_MERCHANT_ACCEPT,
            self::ACQUIREMENT_STATUS_CANCELLED,
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
        $this->setIfExists('acquirementStatus', $data ?? [], null);
        $this->setIfExists('frozen', $data ?? [], null);
        $this->setIfExists('cancelled', $data ?? [], null);
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

        if ($this->container['acquirementStatus'] === null) {
            $invalidProperties[] = "'acquirementStatus' can't be null";
        }
        $allowedValues = $this->getAcquirementStatusAllowableValues();
        if (!is_null($this->container['acquirementStatus']) && !in_array($this->container['acquirementStatus'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'acquirementStatus', must be one of '%s'",
                $this->container['acquirementStatus'],
                implode("', '", $allowedValues)
            );
        }

        if ((mb_strlen($this->container['acquirementStatus']) > 64)) {
            $invalidProperties[] = "invalid value for 'acquirementStatus', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['frozen']) && (mb_strlen($this->container['frozen']) > 64)) {
            $invalidProperties[] = "invalid value for 'frozen', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['cancelled']) && (mb_strlen($this->container['cancelled']) > 64)) {
            $invalidProperties[] = "invalid value for 'cancelled', the character length must be smaller than or equal to 64.";
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
     * Gets acquirementStatus
     *
     * @return string
     */
    public function getAcquirementStatus()
    {
        return $this->container['acquirementStatus'];
    }

    /**
     * Sets acquirementStatus
     *
     * @param string $acquirementStatus Acquirement status. The enums:<br> * INIT - Order is created but not paid yet<br> * SUCCESS - Order is succeeded<br> * CLOSED - Order is closed<br> * PAYING - Order is paid but not finish<br> * MERCHANT_ACCEPT - Order is accepted by merchant after order is paid for PAY-CONFIRM<br> * CANCELLED - Order is cancelled<br>
     *
     * @return self
     */
    public function setAcquirementStatus($acquirementStatus)
    {
        if (is_null($acquirementStatus)) {
            throw new \InvalidArgumentException('non-nullable acquirementStatus cannot be null');
        }
        $allowedValues = $this->getAcquirementStatusAllowableValues();
        if (!in_array($acquirementStatus, $allowedValues, true) && (!empty($acquirementStatus) || $acquirementStatus !== '')) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'acquirementStatus', must be one of '%s'",
                    $acquirementStatus,
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($acquirementStatus) > 64)) {
            throw new \InvalidArgumentException('invalid length for $acquirementStatus when calling StatusDetail., must be smaller than or equal to 64.');
        }

        $this->container['acquirementStatus'] = $acquirementStatus;

        return $this;
    }

    /**
     * Gets frozen
     *
     * @return string|null
     */
    public function getFrozen()
    {
        return $this->container['frozen'];
    }

    /**
     * Sets frozen
     *
     * @param string|null $frozen Whether the frozen is true or not
     *
     * @return self
     */
    public function setFrozen($frozen)
    {
        if (is_null($frozen)) {
            throw new \InvalidArgumentException('non-nullable frozen cannot be null');
        }
        if ((mb_strlen($frozen) > 64)) {
            throw new \InvalidArgumentException('invalid length for $frozen when calling StatusDetail., must be smaller than or equal to 64.');
        }

        $this->container['frozen'] = $frozen;

        return $this;
    }

    /**
     * Gets cancelled
     *
     * @return string|null
     */
    public function getCancelled()
    {
        return $this->container['cancelled'];
    }

    /**
     * Sets cancelled
     *
     * @param string|null $cancelled Whether the cancelled is true or not
     *
     * @return self
     */
    public function setCancelled($cancelled)
    {
        if (is_null($cancelled)) {
            throw new \InvalidArgumentException('non-nullable cancelled cannot be null');
        }
        if ((mb_strlen($cancelled) > 64)) {
            throw new \InvalidArgumentException('invalid length for $cancelled when calling StatusDetail., must be smaller than or equal to 64.');
        }

        $this->container['cancelled'] = $cancelled;

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


