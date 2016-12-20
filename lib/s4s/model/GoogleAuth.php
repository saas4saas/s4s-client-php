<?php
/**
 * GoogleAuth
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
 * GoogleAuth Class Doc Comment
 *
 * @category    Class */
 // @description Model description
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GoogleAuth implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'GoogleAuth';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'id_token' => 'string',
        'access_token' => 'string',
        'expires_in' => 'int',
        'token_type' => 'string',
        'google_id' => '\s4s/model\GoogleTokenId'
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
        'id_token' => 'id_token',
        'access_token' => 'access_token',
        'expires_in' => 'expires_in',
        'token_type' => 'token_type',
        'google_id' => 'googleId'
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
        'id_token' => 'setIdToken',
        'access_token' => 'setAccessToken',
        'expires_in' => 'setExpiresIn',
        'token_type' => 'setTokenType',
        'google_id' => 'setGoogleId'
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
        'id_token' => 'getIdToken',
        'access_token' => 'getAccessToken',
        'expires_in' => 'getExpiresIn',
        'token_type' => 'getTokenType',
        'google_id' => 'getGoogleId'
    );

    public static function getters()
    {
        return self::$getters;
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
        $this->container['id_token'] = isset($data['id_token']) ? $data['id_token'] : null;
        $this->container['access_token'] = isset($data['access_token']) ? $data['access_token'] : null;
        $this->container['expires_in'] = isset($data['expires_in']) ? $data['expires_in'] : null;
        $this->container['token_type'] = isset($data['token_type']) ? $data['token_type'] : null;
        $this->container['google_id'] = isset($data['google_id']) ? $data['google_id'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
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
        return true;
    }


    /**
     * Gets id_token
     * @return string
     */
    public function getIdToken()
    {
        return $this->container['id_token'];
    }

    /**
     * Sets id_token
     * @param string $id_token
     * @return $this
     */
    public function setIdToken($id_token)
    {
        $this->container['id_token'] = $id_token;

        return $this;
    }

    /**
     * Gets access_token
     * @return string
     */
    public function getAccessToken()
    {
        return $this->container['access_token'];
    }

    /**
     * Sets access_token
     * @param string $access_token
     * @return $this
     */
    public function setAccessToken($access_token)
    {
        $this->container['access_token'] = $access_token;

        return $this;
    }

    /**
     * Gets expires_in
     * @return int
     */
    public function getExpiresIn()
    {
        return $this->container['expires_in'];
    }

    /**
     * Sets expires_in
     * @param int $expires_in
     * @return $this
     */
    public function setExpiresIn($expires_in)
    {
        $this->container['expires_in'] = $expires_in;

        return $this;
    }

    /**
     * Gets token_type
     * @return string
     */
    public function getTokenType()
    {
        return $this->container['token_type'];
    }

    /**
     * Sets token_type
     * @param string $token_type
     * @return $this
     */
    public function setTokenType($token_type)
    {
        $this->container['token_type'] = $token_type;

        return $this;
    }

    /**
     * Gets google_id
     * @return \s4s/model\GoogleTokenId
     */
    public function getGoogleId()
    {
        return $this->container['google_id'];
    }

    /**
     * Sets google_id
     * @param \s4s/model\GoogleTokenId $google_id
     * @return $this
     */
    public function setGoogleId($google_id)
    {
        $this->container['google_id'] = $google_id;

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


