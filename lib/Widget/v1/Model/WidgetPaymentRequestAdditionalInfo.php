<?php
/**
 * WidgetPaymentRequestAdditionalInfo
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
 * WidgetPaymentRequestAdditionalInfo Class Doc Comment
 *
 * @category Class
 * @package  Dana\Widget
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WidgetPaymentRequestAdditionalInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WidgetPaymentRequestAdditionalInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'supportDeepLinkCheckoutUrl' => 'string',
        'phoneNumber' => 'string',
        'publicUserId' => 'string',
        'productCode' => 'string',
        'serviceInfo' => '\Dana\Widget\v1\Model\ServiceInfo',
        'order' => '\Dana\Widget\v1\Model\Order',
        'mcc' => 'string',
        'envInfo' => '\Dana\Widget\v1\Model\EnvInfo',
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
        'supportDeepLinkCheckoutUrl' => null,
        'phoneNumber' => null,
        'publicUserId' => null,
        'productCode' => null,
        'serviceInfo' => null,
        'order' => null,
        'mcc' => null,
        'envInfo' => null,
        'extendInfo' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'supportDeepLinkCheckoutUrl' => false,
        'phoneNumber' => false,
        'publicUserId' => false,
        'productCode' => false,
        'serviceInfo' => false,
        'order' => false,
        'mcc' => false,
        'envInfo' => false,
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
        'supportDeepLinkCheckoutUrl' => 'supportDeepLinkCheckoutUrl',
        'phoneNumber' => 'phoneNumber',
        'publicUserId' => 'publicUserId',
        'productCode' => 'productCode',
        'serviceInfo' => 'serviceInfo',
        'order' => 'order',
        'mcc' => 'mcc',
        'envInfo' => 'envInfo',
        'extendInfo' => 'extendInfo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'supportDeepLinkCheckoutUrl' => 'setSupportDeepLinkCheckoutUrl',
        'phoneNumber' => 'setPhoneNumber',
        'publicUserId' => 'setPublicUserId',
        'productCode' => 'setProductCode',
        'serviceInfo' => 'setServiceInfo',
        'order' => 'setOrder',
        'mcc' => 'setMcc',
        'envInfo' => 'setEnvInfo',
        'extendInfo' => 'setExtendInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'supportDeepLinkCheckoutUrl' => 'getSupportDeepLinkCheckoutUrl',
        'phoneNumber' => 'getPhoneNumber',
        'publicUserId' => 'getPublicUserId',
        'productCode' => 'getProductCode',
        'serviceInfo' => 'getServiceInfo',
        'order' => 'getOrder',
        'mcc' => 'getMcc',
        'envInfo' => 'getEnvInfo',
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
        $this->setIfExists('supportDeepLinkCheckoutUrl', $data ?? [], null);
        $this->setIfExists('phoneNumber', $data ?? [], null);
        $this->setIfExists('publicUserId', $data ?? [], null);
        $this->setIfExists('productCode', $data ?? [], null);
        $this->setIfExists('serviceInfo', $data ?? [], null);
        $this->setIfExists('order', $data ?? [], null);
        $this->setIfExists('mcc', $data ?? [], null);
        $this->setIfExists('envInfo', $data ?? [], null);
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

        if (!is_null($this->container['supportDeepLinkCheckoutUrl']) && (mb_strlen($this->container['supportDeepLinkCheckoutUrl']) > 64)) {
            $invalidProperties[] = "invalid value for 'supportDeepLinkCheckoutUrl', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['phoneNumber']) && (mb_strlen($this->container['phoneNumber']) > 64)) {
            $invalidProperties[] = "invalid value for 'phoneNumber', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['publicUserId']) && (mb_strlen($this->container['publicUserId']) > 64)) {
            $invalidProperties[] = "invalid value for 'publicUserId', the character length must be smaller than or equal to 64.";
        }

        if ($this->container['productCode'] === null) {
            $invalidProperties[] = "'productCode' can't be null";
        }
        if ((mb_strlen($this->container['productCode']) > 32)) {
            $invalidProperties[] = "invalid value for 'productCode', the character length must be smaller than or equal to 32.";
        }

        if ($this->container['order'] === null) {
            $invalidProperties[] = "'order' can't be null";
        }
        if ($this->container['mcc'] === null) {
            $invalidProperties[] = "'mcc' can't be null";
        }
        if ((mb_strlen($this->container['mcc']) > 64)) {
            $invalidProperties[] = "invalid value for 'mcc', the character length must be smaller than or equal to 64.";
        }

        if ($this->container['envInfo'] === null) {
            $invalidProperties[] = "'envInfo' can't be null";
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
     * Gets supportDeepLinkCheckoutUrl
     *
     * @return string|null
     */
    public function getSupportDeepLinkCheckoutUrl()
    {
        return $this->container['supportDeepLinkCheckoutUrl'];
    }

    /**
     * Sets supportDeepLinkCheckoutUrl
     *
     * @param string|null $supportDeepLinkCheckoutUrl Additional information of deeplink checkout URL. For Mini Program, DANA will treat as false
     *
     * @return self
     */
    public function setSupportDeepLinkCheckoutUrl($supportDeepLinkCheckoutUrl)
    {
        if (is_null($supportDeepLinkCheckoutUrl)) {
            throw new \InvalidArgumentException('non-nullable supportDeepLinkCheckoutUrl cannot be null');
        }
        if ((mb_strlen($supportDeepLinkCheckoutUrl) > 64)) {
            throw new \InvalidArgumentException('invalid length for $supportDeepLinkCheckoutUrl when calling WidgetPaymentRequestAdditionalInfo., must be smaller than or equal to 64.');
        }

        $this->container['supportDeepLinkCheckoutUrl'] = $supportDeepLinkCheckoutUrl;

        return $this;
    }

    /**
     * Gets phoneNumber
     *
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->container['phoneNumber'];
    }

    /**
     * Sets phoneNumber
     *
     * @param string|null $phoneNumber Additional information of user's phone number
     *
     * @return self
     */
    public function setPhoneNumber($phoneNumber)
    {
        if (is_null($phoneNumber)) {
            throw new \InvalidArgumentException('non-nullable phoneNumber cannot be null');
        }
        if ((mb_strlen($phoneNumber) > 64)) {
            throw new \InvalidArgumentException('invalid length for $phoneNumber when calling WidgetPaymentRequestAdditionalInfo., must be smaller than or equal to 64.');
        }

        $this->container['phoneNumber'] = $phoneNumber;

        return $this;
    }

    /**
     * Gets publicUserId
     *
     * @return string|null
     */
    public function getPublicUserId()
    {
        return $this->container['publicUserId'];
    }

    /**
     * Sets publicUserId
     *
     * @param string|null $publicUserId Additional information of public user's identifier
     *
     * @return self
     */
    public function setPublicUserId($publicUserId)
    {
        if (is_null($publicUserId)) {
            throw new \InvalidArgumentException('non-nullable publicUserId cannot be null');
        }
        if ((mb_strlen($publicUserId) > 64)) {
            throw new \InvalidArgumentException('invalid length for $publicUserId when calling WidgetPaymentRequestAdditionalInfo., must be smaller than or equal to 64.');
        }

        $this->container['publicUserId'] = $publicUserId;

        return $this;
    }

    /**
     * Gets productCode
     *
     * @return string
     */
    public function getProductCode()
    {
        return $this->container['productCode'];
    }

    /**
     * Sets productCode
     *
     * @param string $productCode Additional information of product code
     *
     * @return self
     */
    public function setProductCode($productCode)
    {
        if (is_null($productCode)) {
            throw new \InvalidArgumentException('non-nullable productCode cannot be null');
        }
        if ((mb_strlen($productCode) > 32)) {
            throw new \InvalidArgumentException('invalid length for $productCode when calling WidgetPaymentRequestAdditionalInfo., must be smaller than or equal to 32.');
        }

        $this->container['productCode'] = $productCode;

        return $this;
    }

    /**
     * Gets serviceInfo
     *
     * @return \Dana\Widget\v1\Model\ServiceInfo|null
     */
    public function getServiceInfo()
    {
        return $this->container['serviceInfo'];
    }

    /**
     * Sets serviceInfo
     *
     * @param \Dana\Widget\v1\Model\ServiceInfo|null $serviceInfo serviceInfo
     *
     * @return self
     */
    public function setServiceInfo($serviceInfo)
    {
        if (is_null($serviceInfo)) {
            throw new \InvalidArgumentException('non-nullable serviceInfo cannot be null');
        }
        $this->container['serviceInfo'] = $serviceInfo;

        return $this;
    }

    /**
     * Gets order
     *
     * @return \Dana\Widget\v1\Model\Order
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param \Dana\Widget\v1\Model\Order $order order
     *
     * @return self
     */
    public function setOrder($order)
    {
        if (is_null($order)) {
            throw new \InvalidArgumentException('non-nullable order cannot be null');
        }
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets mcc
     *
     * @return string
     */
    public function getMcc()
    {
        return $this->container['mcc'];
    }

    /**
     * Sets mcc
     *
     * @param string $mcc Additional information of merchant category code. This parameter is used to identify the type of business in which a merchant is engaged.
     *
     * @return self
     */
    public function setMcc($mcc)
    {
        if (is_null($mcc)) {
            throw new \InvalidArgumentException('non-nullable mcc cannot be null');
        }
        if ((mb_strlen($mcc) > 64)) {
            throw new \InvalidArgumentException('invalid length for $mcc when calling WidgetPaymentRequestAdditionalInfo., must be smaller than or equal to 64.');
        }

        $this->container['mcc'] = $mcc;

        return $this;
    }

    /**
     * Gets envInfo
     *
     * @return \Dana\Widget\v1\Model\EnvInfo
     */
    public function getEnvInfo()
    {
        return $this->container['envInfo'];
    }

    /**
     * Sets envInfo
     *
     * @param \Dana\Widget\v1\Model\EnvInfo $envInfo envInfo
     *
     * @return self
     */
    public function setEnvInfo($envInfo)
    {
        if (is_null($envInfo)) {
            throw new \InvalidArgumentException('non-nullable envInfo cannot be null');
        }
        $this->container['envInfo'] = $envInfo;

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
     * @param string|null $extendInfo Additional information of extend
     *
     * @return self
     */
    public function setExtendInfo($extendInfo)
    {
        if (is_null($extendInfo)) {
            throw new \InvalidArgumentException('non-nullable extendInfo cannot be null');
        }
        if ((mb_strlen($extendInfo) > 4096)) {
            throw new \InvalidArgumentException('invalid length for $extendInfo when calling WidgetPaymentRequestAdditionalInfo., must be smaller than or equal to 4096.');
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


