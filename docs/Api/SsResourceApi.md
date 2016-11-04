# Swagger\Client\SsResourceApi

All URIs are relative to *https://api.saas4saas.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customerResourceGet**](SsResourceApi.md#customerResourceGet) | **GET** /s4s-resource/customer/{customer-id}/resource/{resourceid} | 
[**customerResourceLimitGet**](SsResourceApi.md#customerResourceLimitGet) | **GET** /s4s-resource/customer/{customer-id}/resource/{resourceid}/limit | 
[**customerResourcePatch**](SsResourceApi.md#customerResourcePatch) | **PATCH** /s4s-resource/customer/{customer-id}/resource/{resourceid} | 
[**customerResourceProductGet**](SsResourceApi.md#customerResourceProductGet) | **GET** /s4s-resource/customer/{customer-id}/resource/{resourceid}/product/{customer-product-id} | 
[**customerResourceProductLimitGet**](SsResourceApi.md#customerResourceProductLimitGet) | **GET** /s4s-resource/customer/{customer-id}/resource/{resourceid}/product/{customer-product-id}/limit | 


# **customerResourceGet**
> int customerResourceGet($customer_id, $resourceid)





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
    $result = $api_instance->customerResourceGet($customer_id, $resourceid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsResourceApi->customerResourceGet: ', $e->getMessage(), PHP_EOL;
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

# **customerResourceLimitGet**
> int customerResourceLimitGet($customer_id, $resourceid)





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
    $result = $api_instance->customerResourceLimitGet($customer_id, $resourceid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsResourceApi->customerResourceLimitGet: ', $e->getMessage(), PHP_EOL;
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

# **customerResourcePatch**
> \Swagger\Client\Model\ResourcePatchResult customerResourcePatch($customer_id, $resourceid, $value)



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
$value = new \Swagger\Client\Model\ResourcePatch(); // \Swagger\Client\Model\ResourcePatch | The Operation and value to update the resource

try {
    $result = $api_instance->customerResourcePatch($customer_id, $resourceid, $value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsResourceApi->customerResourcePatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**|  |
 **resourceid** | **string**|  |
 **value** | [**\Swagger\Client\Model\ResourcePatch**](../Model/\Swagger\Client\Model\ResourcePatch.md)| The Operation and value to update the resource | [optional]

### Return type

[**\Swagger\Client\Model\ResourcePatchResult**](../Model/ResourcePatchResult.md)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerResourceProductGet**
> int customerResourceProductGet($customer_id, $resourceid, $customer_product_id)





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
    $result = $api_instance->customerResourceProductGet($customer_id, $resourceid, $customer_product_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsResourceApi->customerResourceProductGet: ', $e->getMessage(), PHP_EOL;
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

# **customerResourceProductLimitGet**
> int customerResourceProductLimitGet($customer_id, $resourceid, $customer_product_id)





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
    $result = $api_instance->customerResourceProductLimitGet($customer_id, $resourceid, $customer_product_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsResourceApi->customerResourceProductLimitGet: ', $e->getMessage(), PHP_EOL;
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

