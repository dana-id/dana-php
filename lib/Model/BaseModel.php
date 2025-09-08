<?php
/**
 * BaseModel
 * PHP version 7.4
 *
 * @category Class
 * @package  Dana\Model
 */

namespace Dana\Model;

use \ArrayAccess;
use \Dana\ObjectSerializer;
use \Dana\Model\ModelInterface;

/**
 * BaseModel Class 
 * Base model to be extended by domain-specific models
 */
abstract class BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    protected $container = [];

    /**
     * Gets the openAPITypes array for the model
     * @return array
     */
    abstract public static function openAPITypes();

    /**
     * Gets the openAPIFormats array for the model
     * @return array
     */
    abstract public static function openAPIFormats();

    /**
     * Gets the model's name
     * @return string
     */
    abstract public function getModelName();

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        if ($data !== null) {
            foreach ($data as $property => $value) {
                $this->container[$property] = $value;
            }
        }
    }

    /**
     * Returns true if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return array_key_exists($property, $this->container) && is_null($this->container[$property]);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        return [];
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
     * Returns true if the property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        $nullables = static::openAPINullables();
        return isset($nullables[$property]) && $nullables[$property];
    }

    /**
     * Gets the array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return [];
    }

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function setters()
    {
        $setters = [];
        foreach(static::openAPITypes() as $property => $type) {
            $setters[$property] = 'set' . str_replace(' ', '', ucwords(str_replace('_', ' ', $property)));
        }
        return $setters;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function getters()
    {
        $getters = [];
        foreach(static::openAPITypes() as $property => $type) {
            $getters[$property] = 'get' . str_replace(' ', '', ucwords(str_replace('_', ' ', $property)));
        }
        return $getters;
    }

    /**
     * Sets $this->container[$offset] to the given data or to the given default Value if $data is null
     *
     * @param string $offset The offset to assign the value to
     * @param mixed  $value The value to set
     * @param mixed  $defaultValue The default value to set if $value is null
     */
    protected function setProperty(string $offset, $value, $defaultValue)
    {
        if (is_null($value)) {
            $this->container[$offset] = $defaultValue;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Checks if offset exists
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset
     * @param  integer $offset Offset
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset
     * @param  integer|null $offset Offset
     * @param  mixed   $value  Value to be set
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
     * Unsets offset
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @return mixed Returns data which can be serialized by json_encode()
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES
        );
    }

    /**
     * Gets a header-safe presentation of the object
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_UNESCAPED_SLASHES);
    }
}
