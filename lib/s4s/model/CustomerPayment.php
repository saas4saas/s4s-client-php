<?php
/**
 * CustomerPayment
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * 
 *
 * No descripton provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 
 * Contact: 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace s4s/model;

use \ArrayAccess;

/**
 * CustomerPayment Class Doc Comment
 *
 * @category    Class */
 // @description Model description
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CustomerPayment implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CustomerPayment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'typ' => 'string',
        'stripe' => '\s4s/model\StripeCustomer'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'typ' => 'typ',
        'stripe' => 'stripe'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'typ' => 'setTyp',
        'stripe' => 'setStripe'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'typ' => 'getTyp',
        'stripe' => 'getStripe'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const TYP_STRIPE_CUSTOMER = 'StripeCustomer';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypAllowableValues()
    {
        return [
            self::TYP_STRIPE_CUSTOMER,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['typ'] = isset($data['typ']) ? $data['typ'] : null;
        $this->container['stripe'] = isset($data['stripe']) ? $data['stripe'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        $allowed_values = array("StripeCustomer");
        if (!in_array($this->container['typ'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'typ', must be one of #{allowed_values}.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        $allowed_values = array("StripeCustomer");
        if (!in_array($this->container['typ'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets typ
     * @return string
     */
    public function getTyp()
    {
        return $this->container['typ'];
    }

    /**
     * Sets typ
     * @param string $typ
     * @return $this
     */
    public function setTyp($typ)
    {
        $allowed_values = array('StripeCustomer');
        if (!in_array($typ, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'typ', must be one of 'StripeCustomer'");
        }
        $this->container['typ'] = $typ;

        return $this;
    }

    /**
     * Gets stripe
     * @return \s4s/model\StripeCustomer
     */
    public function getStripe()
    {
        return $this->container['stripe'];
    }

    /**
     * Sets stripe
     * @param \s4s/model\StripeCustomer $stripe
     * @return $this
     */
    public function setStripe($stripe)
    {
        $this->container['stripe'] = $stripe;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


