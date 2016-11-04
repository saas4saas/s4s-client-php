# Swagger\Client\SsProductApi

All URIs are relative to *https://api.saas4saas.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customerEnjoyAdd**](SsProductApi.md#customerEnjoyAdd) | **POST** /s4s-product/customer/{customer-id}/enjoy | 
[**customerEnjoyClose**](SsProductApi.md#customerEnjoyClose) | **GET** /s4s-product/customer/{customer-id}/enjoy/{enjoy-id}/close | 
[**customerEnjoyGet**](SsProductApi.md#customerEnjoyGet) | **GET** /s4s-product/customer/{customer-id}/enjoy/{enjoy-id} | 
[**customerEnjoyGetAll**](SsProductApi.md#customerEnjoyGetAll) | **GET** /s4s-product/customer/{customer-id}/enjoy | 
[**customerEnjoySpend**](SsProductApi.md#customerEnjoySpend) | **GET** /s4s-product/customer/{customer-id}/enjoy/{customer-pack-id}/spend | 
[**customerEnjoyValues**](SsProductApi.md#customerEnjoyValues) | **GET** /s4s-product/customer/{customer-id}/enjoy/values | 
[**customerHistoryPackGet**](SsProductApi.md#customerHistoryPackGet) | **GET** /s4s-product/customer/{customer-id}/history/pack/{id} | 
[**customerHistoryPackGetAll**](SsProductApi.md#customerHistoryPackGetAll) | **GET** /s4s-product/customer/{customer-id}/history/pack | 
[**customerHistoryPackValues**](SsProductApi.md#customerHistoryPackValues) | **GET** /s4s-product/customer/{customer-id}/history/pack/values | 
[**customerHistorySubscriptionGet**](SsProductApi.md#customerHistorySubscriptionGet) | **GET** /s4s-product/customer/{customer-id}/history/subscription/{id} | 
[**customerHistorySubscriptionGetAll**](SsProductApi.md#customerHistorySubscriptionGetAll) | **GET** /s4s-product/customer/{customer-id}/history/subscription | 
[**customerHistorySubscriptionValues**](SsProductApi.md#customerHistorySubscriptionValues) | **GET** /s4s-product/customer/{customer-id}/history/subscription/values | 
[**customerResource**](SsProductApi.md#customerResource) | **GET** /s4s-product/customer/{customer-id}/resource | 
[**customerSubscriptionAdd**](SsProductApi.md#customerSubscriptionAdd) | **POST** /s4s-product/customer/{customer-id}/subscription | 
[**customerSubscriptionClose**](SsProductApi.md#customerSubscriptionClose) | **GET** /s4s-product/customer/{customer-id}/subscription/{subscription-id}/close | 
[**customerSubscriptionGet**](SsProductApi.md#customerSubscriptionGet) | **GET** /s4s-product/customer/{customer-id}/subscription/{subscription-id} | 
[**customerSubscriptionGetAll**](SsProductApi.md#customerSubscriptionGetAll) | **GET** /s4s-product/customer/{customer-id}/subscription | 
[**customerSubscriptionRenew**](SsProductApi.md#customerSubscriptionRenew) | **GET** /s4s-product/customer/{customer-id}/subscription/{subscription-id}/renew | 
[**customerSubscriptionSpend**](SsProductApi.md#customerSubscriptionSpend) | **GET** /s4s-product/customer/{customer-id}/subscription/{customer-subscription-id}/spend | 
[**customerSubscriptionValues**](SsProductApi.md#customerSubscriptionValues) | **GET** /s4s-product/customer/{customer-id}/subscription/values | 
[**productConfigGet**](SsProductApi.md#productConfigGet) | **GET** /s4s-product/productConfig | 
[**productConfigPut**](SsProductApi.md#productConfigPut) | **PUT** /s4s-product/productConfig | 


# **customerEnjoyAdd**
> \Swagger\Client\Model\CustomerPack customerEnjoyAdd($customer_id, $expiration_offset, $override_enjoy_id, $override_subscription_id, $new_enjoy)



Relationate a new product with the customer

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

$api_instance = new Swagger\Client\Api\SsProductApi();
$customer_id = "customer_id_example"; // string | The given id from the user service
$expiration_offset = 789; // int | 
$override_enjoy_id = "override_enjoy_id_example"; // string | 
$override_subscription_id = "override_subscription_id_example"; // string | 
$new_enjoy = new \Swagger\Client\Model\CustomerPack(); // \Swagger\Client\Model\CustomerPack | 

try {
    $result = $api_instance->customerEnjoyAdd($customer_id, $expiration_offset, $override_enjoy_id, $override_subscription_id, $new_enjoy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsProductApi->customerEnjoyAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The given id from the user service |
 **expiration_offset** | **int**|  |
 **override_enjoy_id** | **string**|  |
 **override_subscription_id** | **string**|  |
 **new_enjoy** | [**\Swagger\Client\Model\CustomerPack**](../Model/\Swagger\Client\Model\CustomerPack.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\CustomerPack**](../Model/CustomerPack.md)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerEnjoyClose**
> \Swagger\Client\Model\CustomerPack customerEnjoyClose($customer_id, $enjoy_id)



Will close the enjoyId product, an create the the a new equivalent EnjoyProduct. Only refreshing the limits if its need

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

$api_instance = new Swagger\Client\Api\SsProductApi();
$customer_id = "customer_id_example"; // string | The given id from the user service
$enjoy_id = "enjoy_id_example"; // string | 

try {
    $result = $api_instance->customerEnjoyClose($customer_id, $enjoy_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsProductApi->customerEnjoyClose: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The given id from the user service |
 **enjoy_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\CustomerPack**](../Model/CustomerPack.md)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerEnjoyGet**
> \Swagger\Client\Model\CustomerPack customerEnjoyGet($customer_id, $enjoy_id)



Get a certain product releated to customer

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

$api_instance = new Swagger\Client\Api\SsProductApi();
$customer_id = "customer_id_example"; // string | The given id from the user service
$enjoy_id = "enjoy_id_example"; // string | 

try {
    $result = $api_instance->customerEnjoyGet($customer_id, $enjoy_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsProductApi->customerEnjoyGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The given id from the user service |
 **enjoy_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\CustomerPack**](../Model/CustomerPack.md)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerEnjoyGetAll**
> string[] customerEnjoyGetAll($customer_id)



Get all the current products relationed with the customer

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

$api_instance = new Swagger\Client\Api\SsProductApi();
$customer_id = "customer_id_example"; // string | The given id from the user service

try {
    $result = $api_instance->customerEnjoyGetAll($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsProductApi->customerEnjoyGetAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The given id from the user service |

### Return type

**string[]**

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerEnjoySpend**
> map[string,int] customerEnjoySpend($customer_id, $customer_pack_id)





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

$api_instance = new Swagger\Client\Api\SsProductApi();
$customer_id = "customer_id_example"; // string | The given id from the user service
$customer_pack_id = "customer_pack_id_example"; // string | 

try {
    $result = $api_instance->customerEnjoySpend($customer_id, $customer_pack_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsProductApi->customerEnjoySpend: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The given id from the user service |
 **customer_pack_id** | **string**|  |

### Return type

[**map[string,int]**](../Model/map.md)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerEnjoyValues**
> customerEnjoyValues($customer_id, $page, $number_per_page, $load_resource_status_list)





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

$api_instance = new Swagger\Client\Api\SsProductApi();
$customer_id = "customer_id_example"; // string | The given id from the user service
$page = 56; // int | 
$number_per_page = 56; // int | 
$load_resource_status_list = true; // bool | 

try {
    $api_instance->customerEnjoyValues($customer_id, $page, $number_per_page, $load_resource_status_list);
} catch (Exception $e) {
    echo 'Exception when calling SsProductApi->customerEnjoyValues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The given id from the user service |
 **page** | **int**|  |
 **number_per_page** | **int**|  |
 **load_resource_status_list** | **bool**|  |

### Return type

void (empty response body)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerHistoryPackGet**
> \Swagger\Client\Model\CustomerPack customerHistoryPackGet($customer_id, $id)





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

$api_instance = new Swagger\Client\Api\SsProductApi();
$customer_id = "customer_id_example"; // string | The given id from the user service
$id = "id_example"; // string | 

try {
    $result = $api_instance->customerHistoryPackGet($customer_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsProductApi->customerHistoryPackGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The given id from the user service |
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\CustomerPack**](../Model/CustomerPack.md)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerHistoryPackGetAll**
> string[] customerHistoryPackGetAll($customer_id)





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

$api_instance = new Swagger\Client\Api\SsProductApi();
$customer_id = "customer_id_example"; // string | The given id from the user service

try {
    $result = $api_instance->customerHistoryPackGetAll($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsProductApi->customerHistoryPackGetAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The given id from the user service |

### Return type

**string[]**

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerHistoryPackValues**
> customerHistoryPackValues($customer_id, $page, $number_per_page, $load_resource_status_list)





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

$api_instance = new Swagger\Client\Api\SsProductApi();
$customer_id = "customer_id_example"; // string | The given id from the user service
$page = 56; // int | 
$number_per_page = 56; // int | 
$load_resource_status_list = true; // bool | 

try {
    $api_instance->customerHistoryPackValues($customer_id, $page, $number_per_page, $load_resource_status_list);
} catch (Exception $e) {
    echo 'Exception when calling SsProductApi->customerHistoryPackValues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The given id from the user service |
 **page** | **int**|  |
 **number_per_page** | **int**|  |
 **load_resource_status_list** | **bool**|  |

### Return type

void (empty response body)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerHistorySubscriptionGet**
> \Swagger\Client\Model\CustomerPack customerHistorySubscriptionGet($customer_id, $id)





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

$api_instance = new Swagger\Client\Api\SsProductApi();
$customer_id = "customer_id_example"; // string | The given id from the user service
$id = "id_example"; // string | 

try {
    $result = $api_instance->customerHistorySubscriptionGet($customer_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsProductApi->customerHistorySubscriptionGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The given id from the user service |
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\CustomerPack**](../Model/CustomerPack.md)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerHistorySubscriptionGetAll**
> string[] customerHistorySubscriptionGetAll($customer_id)





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

$api_instance = new Swagger\Client\Api\SsProductApi();
$customer_id = "customer_id_example"; // string | The given id from the user service

try {
    $result = $api_instance->customerHistorySubscriptionGetAll($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsProductApi->customerHistorySubscriptionGetAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The given id from the user service |

### Return type

**string[]**

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerHistorySubscriptionValues**
> customerHistorySubscriptionValues($customer_id, $page, $number_per_page, $load_resource_status_list)





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

$api_instance = new Swagger\Client\Api\SsProductApi();
$customer_id = "customer_id_example"; // string | The given id from the user service
$page = 56; // int | 
$number_per_page = 56; // int | 
$load_resource_status_list = true; // bool | 

try {
    $api_instance->customerHistorySubscriptionValues($customer_id, $page, $number_per_page, $load_resource_status_list);
} catch (Exception $e) {
    echo 'Exception when calling SsProductApi->customerHistorySubscriptionValues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The given id from the user service |
 **page** | **int**|  |
 **number_per_page** | **int**|  |
 **load_resource_status_list** | **bool**|  |

### Return type

void (empty response body)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerResource**
> customerResource($customer_id, $page, $number_per_page)





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

$api_instance = new Swagger\Client\Api\SsProductApi();
$customer_id = "customer_id_example"; // string | The given id from the user service
$page = 56; // int | 
$number_per_page = 56; // int | 

try {
    $api_instance->customerResource($customer_id, $page, $number_per_page);
} catch (Exception $e) {
    echo 'Exception when calling SsProductApi->customerResource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The given id from the user service |
 **page** | **int**|  |
 **number_per_page** | **int**|  |

### Return type

void (empty response body)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerSubscriptionAdd**
> \Swagger\Client\Model\CustomerPackSubscription customerSubscriptionAdd($customer_id, $override_subscription_id, $override_enjoy_id, $new_subscription)



Add a new subscription to customer

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

$api_instance = new Swagger\Client\Api\SsProductApi();
$customer_id = "customer_id_example"; // string | The given id from the user service
$override_subscription_id = "override_subscription_id_example"; // string | 
$override_enjoy_id = "override_enjoy_id_example"; // string | 
$new_subscription = new \Swagger\Client\Model\CustomerPackSubscription(); // \Swagger\Client\Model\CustomerPackSubscription | 

try {
    $result = $api_instance->customerSubscriptionAdd($customer_id, $override_subscription_id, $override_enjoy_id, $new_subscription);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsProductApi->customerSubscriptionAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The given id from the user service |
 **override_subscription_id** | **string**|  |
 **override_enjoy_id** | **string**|  |
 **new_subscription** | [**\Swagger\Client\Model\CustomerPackSubscription**](../Model/\Swagger\Client\Model\CustomerPackSubscription.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\CustomerPackSubscription**](../Model/CustomerPackSubscription.md)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerSubscriptionClose**
> string customerSubscriptionClose($customer_id, $subscription_id)





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

$api_instance = new Swagger\Client\Api\SsProductApi();
$customer_id = "customer_id_example"; // string | The given id from the user service
$subscription_id = "subscription_id_example"; // string | 

try {
    $result = $api_instance->customerSubscriptionClose($customer_id, $subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsProductApi->customerSubscriptionClose: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The given id from the user service |
 **subscription_id** | **string**|  |

### Return type

**string**

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerSubscriptionGet**
> \Swagger\Client\Model\CustomerPackSubscription customerSubscriptionGet($customer_id, $subscription_id)



Get a subscription by its Ids

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

$api_instance = new Swagger\Client\Api\SsProductApi();
$customer_id = "customer_id_example"; // string | The given id from the user service
$subscription_id = "subscription_id_example"; // string | 

try {
    $result = $api_instance->customerSubscriptionGet($customer_id, $subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsProductApi->customerSubscriptionGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The given id from the user service |
 **subscription_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\CustomerPackSubscription**](../Model/CustomerPackSubscription.md)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerSubscriptionGetAll**
> string[] customerSubscriptionGetAll($customer_id)



Get all the current subscriptions of a customer

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

$api_instance = new Swagger\Client\Api\SsProductApi();
$customer_id = "customer_id_example"; // string | The given id from the user service

try {
    $result = $api_instance->customerSubscriptionGetAll($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsProductApi->customerSubscriptionGetAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The given id from the user service |

### Return type

**string[]**

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerSubscriptionRenew**
> string customerSubscriptionRenew($customer_id, $subscription_id)





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

$api_instance = new Swagger\Client\Api\SsProductApi();
$customer_id = "customer_id_example"; // string | The given id from the user service
$subscription_id = "subscription_id_example"; // string | 

try {
    $result = $api_instance->customerSubscriptionRenew($customer_id, $subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsProductApi->customerSubscriptionRenew: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The given id from the user service |
 **subscription_id** | **string**|  |

### Return type

**string**

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerSubscriptionSpend**
> map[string,int] customerSubscriptionSpend($customer_id, $customer_subscription_id)





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

$api_instance = new Swagger\Client\Api\SsProductApi();
$customer_id = "customer_id_example"; // string | The given id from the user service
$customer_subscription_id = "customer_subscription_id_example"; // string | 

try {
    $result = $api_instance->customerSubscriptionSpend($customer_id, $customer_subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsProductApi->customerSubscriptionSpend: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The given id from the user service |
 **customer_subscription_id** | **string**|  |

### Return type

[**map[string,int]**](../Model/map.md)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerSubscriptionValues**
> customerSubscriptionValues($customer_id, $page, $number_per_page, $load_default_user)





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

$api_instance = new Swagger\Client\Api\SsProductApi();
$customer_id = "customer_id_example"; // string | The given id from the user service
$page = 56; // int | 
$number_per_page = 56; // int | 
$load_default_user = true; // bool | 

try {
    $api_instance->customerSubscriptionValues($customer_id, $page, $number_per_page, $load_default_user);
} catch (Exception $e) {
    echo 'Exception when calling SsProductApi->customerSubscriptionValues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The given id from the user service |
 **page** | **int**|  |
 **number_per_page** | **int**|  |
 **load_default_user** | **bool**|  |

### Return type

void (empty response body)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productConfigGet**
> \Swagger\Client\Model\ProductConf productConfigGet()





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

$api_instance = new Swagger\Client\Api\SsProductApi();

try {
    $result = $api_instance->productConfigGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsProductApi->productConfigGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ProductConf**](../Model/ProductConf.md)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productConfigPut**
> string productConfigPut($a)





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

$api_instance = new Swagger\Client\Api\SsProductApi();
$a = new \Swagger\Client\Model\ProductConf(); // \Swagger\Client\Model\ProductConf | 

try {
    $result = $api_instance->productConfigPut($a);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsProductApi->productConfigPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **a** | [**\Swagger\Client\Model\ProductConf**](../Model/\Swagger\Client\Model\ProductConf.md)|  | [optional]

### Return type

**string**

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

