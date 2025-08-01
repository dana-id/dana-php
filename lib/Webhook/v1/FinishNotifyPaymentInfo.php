<?php
/**
 * FinishNotifyPaymentInfo
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Dana\Webhook
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

namespace Dana\Webhook\v1;

use \ArrayAccess;
use \Dana\ObjectSerializer;
use \Dana\Model\ModelInterface;

/**
 * FinishNotifyPaymentInfo Class Doc Comment
 *
 * @category Class
 * @package  Dana\Webhook
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FinishNotifyPaymentInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FinishNotifyPaymentInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cashierRequestId' => 'string',
        'paidTime' => 'string',
        'payOptionInfos' => '\Dana\Webhook\v1\PayOptionInfo[]',
        'payRequestExtendInfo' => 'string',
        'extendInfo' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cashierRequestId' => null,
        'paidTime' => null,
        'payOptionInfos' => null,
        'payRequestExtendInfo' => null,
        'extendInfo' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'cashierRequestId' => false,
        'paidTime' => false,
        'payOptionInfos' => false,
        'payRequestExtendInfo' => false,
        'extendInfo' => false
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
        'cashierRequestId' => 'cashierRequestId',
        'paidTime' => 'paidTime',
        'payOptionInfos' => 'payOptionInfos',
        'payRequestExtendInfo' => 'payRequestExtendInfo',
        'extendInfo' => 'extendInfo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cashierRequestId' => 'setCashierRequestId',
        'paidTime' => 'setPaidTime',
        'payOptionInfos' => 'setPayOptionInfos',
        'payRequestExtendInfo' => 'setPayRequestExtendInfo',
        'extendInfo' => 'setExtendInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cashierRequestId' => 'getCashierRequestId',
        'paidTime' => 'getPaidTime',
        'payOptionInfos' => 'getPayOptionInfos',
        'payRequestExtendInfo' => 'getPayRequestExtendInfo',
        'extendInfo' => 'getExtendInfo'
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
        $this->setIfExists('cashierRequestId', $data ?? [], null);
        $this->setIfExists('paidTime', $data ?? [], null);
        $this->setIfExists('payOptionInfos', $data ?? [], null);
        $this->setIfExists('payRequestExtendInfo', $data ?? [], null);
        $this->setIfExists('extendInfo', $data ?? [], null);
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

        if ($this->container['cashierRequestId'] === null) {
            $invalidProperties[] = "'cashierRequestId' can't be null";
        }
        if ((mb_strlen($this->container['cashierRequestId']) > 64)) {
            $invalidProperties[] = "invalid value for 'cashierRequestId', the character length must be smaller than or equal to 64.";
        }

        if ($this->container['paidTime'] === null) {
            $invalidProperties[] = "'paidTime' can't be null";
        }
        if ((mb_strlen($this->container['paidTime']) > 25)) {
            $invalidProperties[] = "invalid value for 'paidTime', the character length must be smaller than or equal to 25.";
        }

        if (!preg_match("/^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/", $this->container['paidTime'])) {
            $invalidProperties[] = "invalid value for 'paidTime', must be conform to the pattern /^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/.";
        }

        if ($this->container['payOptionInfos'] === null) {
            $invalidProperties[] = "'payOptionInfos' can't be null";
        }
        if (!is_null($this->container['payRequestExtendInfo']) && (mb_strlen($this->container['payRequestExtendInfo']) > 4096)) {
            $invalidProperties[] = "invalid value for 'payRequestExtendInfo', the character length must be smaller than or equal to 4096.";
        }

        if (!is_null($this->container['extendInfo']) && (mb_strlen($this->container['extendInfo']) > 4096)) {
            $invalidProperties[] = "invalid value for 'extendInfo', the character length must be smaller than or equal to 4096.";
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
     * Gets cashierRequestId
     *
     * @return string
     */
    public function getCashierRequestId()
    {
        return $this->container['cashierRequestId'];
    }

    /**
     * Sets cashierRequestId
     *
     * @param string $cashierRequestId Cashier request identifier
     *
     * @return self
     */
    public function setCashierRequestId($cashierRequestId)
    {
        if (is_null($cashierRequestId)) {
            throw new \InvalidArgumentException('non-nullable cashierRequestId cannot be null');
        }
        if ((mb_strlen($cashierRequestId) > 64)) {
            throw new \InvalidArgumentException('invalid length for $cashierRequestId when calling FinishNotifyPaymentInfo., must be smaller than or equal to 64.');
        }

        $this->container['cashierRequestId'] = $cashierRequestId;

        return $this;
    }

    /**
     * Gets paidTime
     *
     * @return string
     */
    public function getPaidTime()
    {
        return $this->container['paidTime'];
    }

    /**
     * Sets paidTime
     *
     * @param string $paidTime Information of paid time, in format YYYY-MM-DDTHH:mm:ss+07:00. Time must be in GMT+7 (Jakarta time)
     *
     * @return self
     */
    public function setPaidTime($paidTime)
    {
        if (is_null($paidTime)) {
            throw new \InvalidArgumentException('non-nullable paidTime cannot be null');
        }
        if ((mb_strlen($paidTime) > 25)) {
            throw new \InvalidArgumentException('invalid length for $paidTime when calling FinishNotifyPaymentInfo., must be smaller than or equal to 25.');
        }
        if ((!preg_match("/^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/", ObjectSerializer::toString($paidTime)))) {
            throw new \InvalidArgumentException("invalid value for \$paidTime when calling FinishNotifyPaymentInfo., must conform to the pattern /^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}\\+07:00$/.");
        }

        $this->container['paidTime'] = $paidTime;

        return $this;
    }

    /**
     * Gets payOptionInfos
     *
     * @return \Dana\Webhook\v1\PayOptionInfo[]
     */
    public function getPayOptionInfos()
    {
        return $this->container['payOptionInfos'];
    }

    /**
     * Sets payOptionInfos
     *
     * @param \Dana\Webhook\v1\PayOptionInfo[] $payOptionInfos Information of pay option. Refer to payOptionInfos for the detailed
     *
     * @return self
     */
    public function setPayOptionInfos($payOptionInfos)
    {
        if (is_null($payOptionInfos)) {
            throw new \InvalidArgumentException('non-nullable payOptionInfos cannot be null');
        }
        $this->container['payOptionInfos'] = $payOptionInfos;

        return $this;
    }

    /**
     * Gets payRequestExtendInfo
     *
     * @return string|null
     */
    public function getPayRequestExtendInfo()
    {
        return $this->container['payRequestExtendInfo'];
    }

    /**
     * Sets payRequestExtendInfo
     *
     * @param string|null $payRequestExtendInfo Extend information of pay request
     *
     * @return self
     */
    public function setPayRequestExtendInfo($payRequestExtendInfo)
    {
        if (is_null($payRequestExtendInfo)) {
            throw new \InvalidArgumentException('non-nullable payRequestExtendInfo cannot be null');
        }
        if ((mb_strlen($payRequestExtendInfo) > 4096)) {
            throw new \InvalidArgumentException('invalid length for $payRequestExtendInfo when calling FinishNotifyPaymentInfo., must be smaller than or equal to 4096.');
        }

        $this->container['payRequestExtendInfo'] = $payRequestExtendInfo;

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
            throw new \InvalidArgumentException('invalid length for $extendInfo when calling FinishNotifyPaymentInfo., must be smaller than or equal to 4096.');
        }

        $this->container['extendInfo'] = $extendInfo;

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


