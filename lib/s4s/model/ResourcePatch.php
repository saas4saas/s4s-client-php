<?php
/**
 * ResourcePatch
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
 * ResourcePatch Class Doc Comment
 *
 * @category    Class */
 // @description Model description
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ResourcePatch implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ResourcePatch';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'op' => 'string',
        'value' => 'int',
        'patch_what_is_possible' => 'bool'
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
        'op' => 'op',
        'value' => 'value',
        'patch_what_is_possible' => 'patchWhatIsPossible'
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
        'op' => 'setOp',
        'value' => 'setValue',
        'patch_what_is_possible' => 'setPatchWhatIsPossible'
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
        'op' => 'getOp',
        'value' => 'getValue',
        'patch_what_is_possible' => 'getPatchWhatIsPossible'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const OP_DEC = 'Dec';
    const OP_INC = 'Inc';
    const OP_NOTHING = 'Nothing';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getOpAllowableValues()
    {
        return [
            self::OP_DEC,
            self::OP_INC,
            self::OP_NOTHING,
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
        $this->container['op'] = isset($data['op']) ? $data['op'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['patch_what_is_possible'] = isset($data['patch_what_is_possible']) ? $data['patch_what_is_possible'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        $allowed_values = array("Dec", "Inc", "Nothing");
        if (!in_array($this->container['op'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'op', must be one of #{allowed_values}.";
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
        $allowed_values = array("Dec", "Inc", "Nothing");
        if (!in_array($this->container['op'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets op
     * @return string
     */
    public function getOp()
    {
        return $this->container['op'];
    }

    /**
     * Sets op
     * @param string $op
     * @return $this
     */
    public function setOp($op)
    {
        $allowed_values = array('Dec', 'Inc', 'Nothing');
        if (!in_array($op, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'op', must be one of 'Dec', 'Inc', 'Nothing'");
        }
        $this->container['op'] = $op;

        return $this;
    }

    /**
     * Gets value
     * @return int
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     * @param int $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets patch_what_is_possible
     * @return bool
     */
    public function getPatchWhatIsPossible()
    {
        return $this->container['patch_what_is_possible'];
    }

    /**
     * Sets patch_what_is_possible
     * @param bool $patch_what_is_possible
     * @return $this
     */
    public function setPatchWhatIsPossible($patch_what_is_possible)
    {
        $this->container['patch_what_is_possible'] = $patch_what_is_possible;

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


