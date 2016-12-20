# Swagger\Client\SsResourceApi

All URIs are relative to *https://*

Method | HTTP request | Description
------------- | ------------- | -------------
[**resourceCustomerResourceGet**](SsResourceApi.md#resourceCustomerResourceGet) | **GET** /s4s-pricing/resource/customer/{customer-id}/resource/{resourceid} | 
[**resourceCustomerResourceLimitGet**](SsResourceApi.md#resourceCustomerResourceLimitGet) | **GET** /s4s-pricing/resource/customer/{customer-id}/resource/{resourceid}/limit | 
[**resourceCustomerResourcePatch**](SsResourceApi.md#resourceCustomerResourcePatch) | **PATCH** /s4s-pricing/resource/customer/{customer-id}/resource/{resourceid} | 
[**resourceCustomerResourceProductGet**](SsResourceApi.md#resourceCustomerResourceProductGet) | **GET** /s4s-pricing/resource/customer/{customer-id}/resource/{resourceid}/product/{customer-product-id} | 
[**resourceCustomerResourceUnspendDel**](SsResourceApi.md#resourceCustomerResourceUnspendDel) | **DELETE** /s4s-pricing/resource/customer/{customer-id}/resource/{resourceid}/unspend | 
[**resourceCustomerResourceUnspendGet**](SsResourceApi.md#resourceCustomerResourceUnspendGet) | **GET** /s4s-pricing/resource/customer/{customer-id}/resource/{resourceid}/unspend | 
[**resourceCustomerResourceUnspendPatch**](SsResourceApi.md#resourceCustomerResourceUnspendPatch) | **PATCH** /s4s-pricing/resource/customer/{customer-id}/resource/{resourceid}/unspend | 
[**resourceCustomerUpdateLimits**](SsResourceApi.md#resourceCustomerUpdateLimits) | **GET** /s4s-pricing/resource/customer/{customer-id}/updateLimits | 


# **resourceCustomerResourceGet**
> int resourceCustomerResourceGet($customer_id, $resourceid)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: tenantid
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('tenantid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('tenantid', 'Bearer');
// Configure API key authorization: token
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new Swagger\Client\Api\SsResourceApi();
$customer_id = "customer_id_example"; // string | 
$resourceid = "resourceid_example"; // string | 

try {
    $result = $api_instance->resourceCustomerResourceGet($customer_id, $resourceid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsResourceApi->resourceCustomerResourceGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**|  |
 **resourceid** | **string**|  |

### Return type

**int**

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resourceCustomerResourceLimitGet**
> int resourceCustomerResourceLimitGet($customer_id, $resourceid)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: tenantid
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('tenantid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('tenantid', 'Bearer');
// Configure API key authorization: token
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new Swagger\Client\Api\SsResourceApi();
$customer_id = "customer_id_example"; // string | 
$resourceid = "resourceid_example"; // string | 

try {
    $result = $api_instance->resourceCustomerResourceLimitGet($customer_id, $resourceid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsResourceApi->resourceCustomerResourceLimitGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**|  |
 **resourceid** | **string**|  |

### Return type

**int**

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resourceCustomerResourcePatch**
> \s4s/model\ResourcePatchResult resourceCustomerResourcePatch($customer_id, $resourceid, $value)



Updates a resource of a customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: tenantid
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('tenantid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('tenantid', 'Bearer');
// Configure API key authorization: token
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new Swagger\Client\Api\SsResourceApi();
$customer_id = "customer_id_example"; // string | 
$resourceid = "resourceid_example"; // string | 
$value = new \s4s/model\ResourcePatch(); // \s4s/model\ResourcePatch | The Operation and value to update the resource

try {
    $result = $api_instance->resourceCustomerResourcePatch($customer_id, $resourceid, $value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsResourceApi->resourceCustomerResourcePatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**|  |
 **resourceid** | **string**|  |
 **value** | [**\s4s/model\ResourcePatch**](../Model/\s4s/model\ResourcePatch.md)| The Operation and value to update the resource | [optional]

### Return type

[**\s4s/model\ResourcePatchResult**](../Model/ResourcePatchResult.md)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resourceCustomerResourceProductGet**
> int resourceCustomerResourceProductGet($customer_id, $resourceid, $customer_product_id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: tenantid
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('tenantid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('tenantid', 'Bearer');
// Configure API key authorization: token
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new Swagger\Client\Api\SsResourceApi();
$customer_id = "customer_id_example"; // string | 
$resourceid = "resourceid_example"; // string | 
$customer_product_id = "customer_product_id_example"; // string | 

try {
    $result = $api_instance->resourceCustomerResourceProductGet($customer_id, $resourceid, $customer_product_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsResourceApi->resourceCustomerResourceProductGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**|  |
 **resourceid** | **string**|  |
 **customer_product_id** | **string**|  |

### Return type

**int**

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resourceCustomerResourceUnspendDel**
> string resourceCustomerResourceUnspendDel($customer_id, $resourceid, $also_delete_limit)



Get the actual consumition of a resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: tenantid
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('tenantid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('tenantid', 'Bearer');
// Configure API key authorization: token
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new Swagger\Client\Api\SsResourceApi();
$customer_id = "customer_id_example"; // string | 
$resourceid = "resourceid_example"; // string | 
$also_delete_limit = true; // bool | 

try {
    $result = $api_instance->resourceCustomerResourceUnspendDel($customer_id, $resourceid, $also_delete_limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsResourceApi->resourceCustomerResourceUnspendDel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**|  |
 **resourceid** | **string**|  |
 **also_delete_limit** | **bool**|  |

### Return type

**string**

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resourceCustomerResourceUnspendGet**
> int resourceCustomerResourceUnspendGet($customer_id, $resourceid)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: tenantid
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('tenantid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('tenantid', 'Bearer');
// Configure API key authorization: token
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new Swagger\Client\Api\SsResourceApi();
$customer_id = "customer_id_example"; // string | 
$resourceid = "resourceid_example"; // string | 

try {
    $result = $api_instance->resourceCustomerResourceUnspendGet($customer_id, $resourceid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsResourceApi->resourceCustomerResourceUnspendGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**|  |
 **resourceid** | **string**|  |

### Return type

**int**

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resourceCustomerResourceUnspendPatch**
> \s4s/model\ResourcePatchResult resourceCustomerResourceUnspendPatch($customer_id, $resourceid, $value)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: tenantid
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('tenantid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('tenantid', 'Bearer');
// Configure API key authorization: token
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new Swagger\Client\Api\SsResourceApi();
$customer_id = "customer_id_example"; // string | 
$resourceid = "resourceid_example"; // string | 
$value = new \s4s/model\ResourcePatch(); // \s4s/model\ResourcePatch | 

try {
    $result = $api_instance->resourceCustomerResourceUnspendPatch($customer_id, $resourceid, $value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsResourceApi->resourceCustomerResourceUnspendPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**|  |
 **resourceid** | **string**|  |
 **value** | [**\s4s/model\ResourcePatch**](../Model/\s4s/model\ResourcePatch.md)|  | [optional]

### Return type

[**\s4s/model\ResourcePatchResult**](../Model/ResourcePatchResult.md)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resourceCustomerUpdateLimits**
> string resourceCustomerUpdateLimits($customer_id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: tenantid
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('tenantid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('tenantid', 'Bearer');
// Configure API key authorization: token
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new Swagger\Client\Api\SsResourceApi();
$customer_id = "customer_id_example"; // string | 

try {
    $result = $api_instance->resourceCustomerUpdateLimits($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsResourceApi->resourceCustomerUpdateLimits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**|  |

### Return type

**string**

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

