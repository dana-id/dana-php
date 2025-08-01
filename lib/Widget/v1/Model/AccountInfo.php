<?php
/**
 * AccountInfo
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
 * AccountInfo Class Doc Comment
 *
 * @category Class
 * @package  Dana\Widget
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AccountInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AccountInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'balanceType' => 'string',
        'amount' => '\Dana\Widget\v1\Model\Money',
        'floatAmount' => '\Dana\Widget\v1\Model\Money',
        'holdAmount' => '\Dana\Widget\v1\Model\Money',
        'availableBalance' => '\Dana\Widget\v1\Model\Money',
        'ledgerBalance' => '\Dana\Widget\v1\Model\Money',
        'currentMultilateralLimit' => '\Dana\Widget\v1\Model\Money',
        'registrationStatusCode' => 'string',
        'status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'balanceType' => null,
        'amount' => null,
        'floatAmount' => null,
        'holdAmount' => null,
        'availableBalance' => null,
        'ledgerBalance' => null,
        'currentMultilateralLimit' => null,
        'registrationStatusCode' => null,
        'status' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'balanceType' => false,
        'amount' => false,
        'floatAmount' => false,
        'holdAmount' => false,
        'availableBalance' => false,
        'ledgerBalance' => false,
        'currentMultilateralLimit' => false,
        'registrationStatusCode' => false,
        'status' => false
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
        'balanceType' => 'balanceType',
        'amount' => 'amount',
        'floatAmount' => 'floatAmount',
        'holdAmount' => 'holdAmount',
        'availableBalance' => 'availableBalance',
        'ledgerBalance' => 'ledgerBalance',
        'currentMultilateralLimit' => 'currentMultilateralLimit',
        'registrationStatusCode' => 'registrationStatusCode',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'balanceType' => 'setBalanceType',
        'amount' => 'setAmount',
        'floatAmount' => 'setFloatAmount',
        'holdAmount' => 'setHoldAmount',
        'availableBalance' => 'setAvailableBalance',
        'ledgerBalance' => 'setLedgerBalance',
        'currentMultilateralLimit' => 'setCurrentMultilateralLimit',
        'registrationStatusCode' => 'setRegistrationStatusCode',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'balanceType' => 'getBalanceType',
        'amount' => 'getAmount',
        'floatAmount' => 'getFloatAmount',
        'holdAmount' => 'getHoldAmount',
        'availableBalance' => 'getAvailableBalance',
        'ledgerBalance' => 'getLedgerBalance',
        'currentMultilateralLimit' => 'getCurrentMultilateralLimit',
        'registrationStatusCode' => 'getRegistrationStatusCode',
        'status' => 'getStatus'
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
        $this->setIfExists('balanceType', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('floatAmount', $data ?? [], null);
        $this->setIfExists('holdAmount', $data ?? [], null);
        $this->setIfExists('availableBalance', $data ?? [], null);
        $this->setIfExists('ledgerBalance', $data ?? [], null);
        $this->setIfExists('currentMultilateralLimit', $data ?? [], null);
        $this->setIfExists('registrationStatusCode', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
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

        if (!is_null($this->container['balanceType']) && (mb_strlen($this->container['balanceType']) > 70)) {
            $invalidProperties[] = "invalid value for 'balanceType', the character length must be smaller than or equal to 70.";
        }

        if (!is_null($this->container['registrationStatusCode']) && (mb_strlen($this->container['registrationStatusCode']) > 4)) {
            $invalidProperties[] = "invalid value for 'registrationStatusCode', the character length must be smaller than or equal to 4.";
        }

        if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 4)) {
            $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 4.";
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
     * Gets balanceType
     *
     * @return string|null
     */
    public function getBalanceType()
    {
        return $this->container['balanceType'];
    }

    /**
     * Sets balanceType
     *
     * @param string|null $balanceType Account information of balance type to specify which balance type expected to be returned. Will return all available balance type if this parameter empty
     *
     * @return self
     */
    public function setBalanceType($balanceType)
    {
        if (is_null($balanceType)) {
            throw new \InvalidArgumentException('non-nullable balanceType cannot be null');
        }
        if ((mb_strlen($balanceType) > 70)) {
            throw new \InvalidArgumentException('invalid length for $balanceType when calling AccountInfo., must be smaller than or equal to 70.');
        }

        $this->container['balanceType'] = $balanceType;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return \Dana\Widget\v1\Model\Money|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param \Dana\Widget\v1\Model\Money|null $amount Account information of amount which include the net active amount. Contains two sub-fields:<br> 1. Value: Amount, including the cents<br> 2. Currency: Currency code based on ISO
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets floatAmount
     *
     * @return \Dana\Widget\v1\Model\Money|null
     */
    public function getFloatAmount()
    {
        return $this->container['floatAmount'];
    }

    /**
     * Sets floatAmount
     *
     * @param \Dana\Widget\v1\Model\Money|null $floatAmount Account information of float amount which include the inactive amount due to cut off period. Contains two sub-fields:<br> 1. Value: Amount, including the cents<br> 2. Currency: Currency code based on ISO
     *
     * @return self
     */
    public function setFloatAmount($floatAmount)
    {
        if (is_null($floatAmount)) {
            throw new \InvalidArgumentException('non-nullable floatAmount cannot be null');
        }
        $this->container['floatAmount'] = $floatAmount;

        return $this;
    }

    /**
     * Gets holdAmount
     *
     * @return \Dana\Widget\v1\Model\Money|null
     */
    public function getHoldAmount()
    {
        return $this->container['holdAmount'];
    }

    /**
     * Sets holdAmount
     *
     * @param \Dana\Widget\v1\Model\Money|null $holdAmount Account information of hold amount which include the unusable amount due to certain type of transaction. Contains two sub-fields:<br> 1. Value: Amount, including the cents<br> 2. Currency: Currency code based on ISO
     *
     * @return self
     */
    public function setHoldAmount($holdAmount)
    {
        if (is_null($holdAmount)) {
            throw new \InvalidArgumentException('non-nullable holdAmount cannot be null');
        }
        $this->container['holdAmount'] = $holdAmount;

        return $this;
    }

    /**
     * Gets availableBalance
     *
     * @return \Dana\Widget\v1\Model\Money|null
     */
    public function getAvailableBalance()
    {
        return $this->container['availableBalance'];
    }

    /**
     * Sets availableBalance
     *
     * @param \Dana\Widget\v1\Model\Money|null $availableBalance Account information of available balance which include the active amount that can be used for transaction. Contains two sub-fields:<br> 1. Value: Amount, including the cents<br> 2. Currency: Currency code based on ISO
     *
     * @return self
     */
    public function setAvailableBalance($availableBalance)
    {
        if (is_null($availableBalance)) {
            throw new \InvalidArgumentException('non-nullable availableBalance cannot be null');
        }
        $this->container['availableBalance'] = $availableBalance;

        return $this;
    }

    /**
     * Gets ledgerBalance
     *
     * @return \Dana\Widget\v1\Model\Money|null
     */
    public function getLedgerBalance()
    {
        return $this->container['ledgerBalance'];
    }

    /**
     * Sets ledgerBalance
     *
     * @param \Dana\Widget\v1\Model\Money|null $ledgerBalance Account information of ledger balance which include the starting balance for this day. Contains two sub-fields:<br> 1. Value: Amount, including the cents<br> 2. Currency: Currency code based on ISO
     *
     * @return self
     */
    public function setLedgerBalance($ledgerBalance)
    {
        if (is_null($ledgerBalance)) {
            throw new \InvalidArgumentException('non-nullable ledgerBalance cannot be null');
        }
        $this->container['ledgerBalance'] = $ledgerBalance;

        return $this;
    }

    /**
     * Gets currentMultilateralLimit
     *
     * @return \Dana\Widget\v1\Model\Money|null
     */
    public function getCurrentMultilateralLimit()
    {
        return $this->container['currentMultilateralLimit'];
    }

    /**
     * Sets currentMultilateralLimit
     *
     * @param \Dana\Widget\v1\Model\Money|null $currentMultilateralLimit Account information of current multilateral limit. Contains two sub-fields:<br> 1. Value: Amount, including the cents<br> 2. Currency: Currency code based on ISO
     *
     * @return self
     */
    public function setCurrentMultilateralLimit($currentMultilateralLimit)
    {
        if (is_null($currentMultilateralLimit)) {
            throw new \InvalidArgumentException('non-nullable currentMultilateralLimit cannot be null');
        }
        $this->container['currentMultilateralLimit'] = $currentMultilateralLimit;

        return $this;
    }

    /**
     * Gets registrationStatusCode
     *
     * @return string|null
     */
    public function getRegistrationStatusCode()
    {
        return $this->container['registrationStatusCode'];
    }

    /**
     * Sets registrationStatusCode
     *
     * @param string|null $registrationStatusCode Account information of customer registration status
     *
     * @return self
     */
    public function setRegistrationStatusCode($registrationStatusCode)
    {
        if (is_null($registrationStatusCode)) {
            throw new \InvalidArgumentException('non-nullable registrationStatusCode cannot be null');
        }
        if ((mb_strlen($registrationStatusCode) > 4)) {
            throw new \InvalidArgumentException('invalid length for $registrationStatusCode when calling AccountInfo., must be smaller than or equal to 4.');
        }

        $this->container['registrationStatusCode'] = $registrationStatusCode;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status Account information of status. The values include:<br> 1 = Active Account<br> 2 = Closed Account<br> 4 = New Account<br> 6 = Restricted Account<br> 7 = Frozen Account
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        if ((mb_strlen($status) > 4)) {
            throw new \InvalidArgumentException('invalid length for $status when calling AccountInfo., must be smaller than or equal to 4.');
        }

        $this->container['status'] = $status;

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


