# Swagger\Client\SsPricingApi

All URIs are relative to *https://api.saas4saas.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customerBillClose**](SsPricingApi.md#customerBillClose) | **GET** /s4s-pricing/customer/{customer-id}/bill/{customer-bill-id}/close | 
[**customerBillGet**](SsPricingApi.md#customerBillGet) | **GET** /s4s-pricing/customer/{customer-id}/bill/{customer-bill-id} | 
[**customerBillInitGet**](SsPricingApi.md#customerBillInitGet) | **GET** /s4s-pricing/customer/{customer-id}/bill/init | 
[**customerBillInitPost**](SsPricingApi.md#customerBillInitPost) | **GET** /s4s-pricing/customer/{customer-id}/bill/initPost | 
[**customerBillOrGet**](SsPricingApi.md#customerBillOrGet) | **GET** /s4s-pricing/customer/{customer-id}/bill/or | 
[**customerBillValues**](SsPricingApi.md#customerBillValues) | **GET** /s4s-pricing/customer/{customer-id}/bill/values | 
[**customerHistoryPlanValues**](SsPricingApi.md#customerHistoryPlanValues) | **GET** /s4s-pricing/customer/{customer-id}/history/plan/values | 
[**customerPlanAdd**](SsPricingApi.md#customerPlanAdd) | **POST** /s4s-pricing/customer/{customer-id}/plan | 
[**customerPlanAddCheck**](SsPricingApi.md#customerPlanAddCheck) | **POST** /s4s-pricing/customer/{customer-id}/plan/addCheck | 
[**customerPlanClose**](SsPricingApi.md#customerPlanClose) | **GET** /s4s-pricing/customer/{customer-id}/plan/{customer-plan-id}/close | 
[**customerPlanFamily**](SsPricingApi.md#customerPlanFamily) | **GET** /s4s-pricing/customer/{customer-id}/plan/family | 
[**customerPlanGet**](SsPricingApi.md#customerPlanGet) | **GET** /s4s-pricing/customer/{customer-id}/plan/{customer-plan-id} | 
[**customerPlanGetAll**](SsPricingApi.md#customerPlanGetAll) | **GET** /s4s-pricing/customer/{customer-id}/plan | 
[**customerPlanPay**](SsPricingApi.md#customerPlanPay) | **GET** /s4s-pricing/customer/{customer-id}/plan/pay | 
[**customerPlanPlan**](SsPricingApi.md#customerPlanPlan) | **GET** /s4s-pricing/customer/{customer-id}/plan/plan | 
[**customerPlanValues**](SsPricingApi.md#customerPlanValues) | **GET** /s4s-pricing/customer/{customer-id}/plan/values | 
[**pricing**](SsPricingApi.md#pricing) | **GET** /s4s-pricing/pricing | 
[**pricing2**](SsPricingApi.md#pricing2) | **GET** /s4s-pricing/pricing2 | 
[**pricingConfigGet**](SsPricingApi.md#pricingConfigGet) | **GET** /s4s-pricing/pricingConfig | 
[**pricingConfigPut**](SsPricingApi.md#pricingConfigPut) | **PUT** /s4s-pricing/pricingConfig | 
[**pricingUiConf**](SsPricingApi.md#pricingUiConf) | **GET** /s4s-pricing/pricingUiConf | 
[**pricingUiConfigGet**](SsPricingApi.md#pricingUiConfigGet) | **GET** /s4s-pricing/pricingUiConfig | 
[**pricingUiConfigPut**](SsPricingApi.md#pricingUiConfigPut) | **PUT** /s4s-pricing/pricingUiConfig | 


# **customerBillClose**
> \Swagger\Client\Model\CustomerBill customerBillClose($customer_id, $customer_bill_id)





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

$api_instance = new Swagger\Client\Api\SsPricingApi();
$customer_id = "customer_id_example"; // string | 
$customer_bill_id = "customer_bill_id_example"; // string | 

try {
    $result = $api_instance->customerBillClose($customer_id, $customer_bill_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsPricingApi->customerBillClose: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**|  |
 **customer_bill_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\CustomerBill**](../Model/CustomerBill.md)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerBillGet**
> \Swagger\Client\Model\CustomerBill customerBillGet($customer_id, $customer_bill_id)





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

$api_instance = new Swagger\Client\Api\SsPricingApi();
$customer_id = "customer_id_example"; // string | 
$customer_bill_id = "customer_bill_id_example"; // string | 

try {
    $result = $api_instance->customerBillGet($customer_id, $customer_bill_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsPricingApi->customerBillGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**|  |
 **customer_bill_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\CustomerBill**](../Model/CustomerBill.md)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerBillInitGet**
> \Swagger\Client\Model\CustomerBill customerBillInitGet($customer_id, $bill_id, $customer_plan_id)





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

$api_instance = new Swagger\Client\Api\SsPricingApi();
$customer_id = "customer_id_example"; // string | 
$bill_id = "bill_id_example"; // string | 
$customer_plan_id = "customer_plan_id_example"; // string | 

try {
    $result = $api_instance->customerBillInitGet($customer_id, $bill_id, $customer_plan_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsPricingApi->customerBillInitGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**|  |
 **bill_id** | **string**|  |
 **customer_plan_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\CustomerBill**](../Model/CustomerBill.md)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerBillInitPost**
> \Swagger\Client\Model\CustomerBill customerBillInitPost($customer_id, $bill_id, $customer_plan_id)





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

$api_instance = new Swagger\Client\Api\SsPricingApi();
$customer_id = "customer_id_example"; // string | 
$bill_id = "bill_id_example"; // string | 
$customer_plan_id = "customer_plan_id_example"; // string | 

try {
    $result = $api_instance->customerBillInitPost($customer_id, $bill_id, $customer_plan_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsPricingApi->customerBillInitPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**|  |
 **bill_id** | **string**|  |
 **customer_plan_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\CustomerBill**](../Model/CustomerBill.md)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerBillOrGet**
> \Swagger\Client\Model\CustomerBill customerBillOrGet($customer_id)





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

$api_instance = new Swagger\Client\Api\SsPricingApi();
$customer_id = "customer_id_example"; // string | 

try {
    $result = $api_instance->customerBillOrGet($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsPricingApi->customerBillOrGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\CustomerBill**](../Model/CustomerBill.md)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerBillValues**
> customerBillValues($customer_id, $page, $number_per_page)





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

$api_instance = new Swagger\Client\Api\SsPricingApi();
$customer_id = "customer_id_example"; // string | 
$page = 56; // int | 
$number_per_page = 56; // int | 

try {
    $api_instance->customerBillValues($customer_id, $page, $number_per_page);
} catch (Exception $e) {
    echo 'Exception when calling SsPricingApi->customerBillValues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**|  |
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

# **customerHistoryPlanValues**
> customerHistoryPlanValues($customer_id, $page, $number_per_page)





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

$api_instance = new Swagger\Client\Api\SsPricingApi();
$customer_id = "customer_id_example"; // string | 
$page = 56; // int | 
$number_per_page = 56; // int | 

try {
    $api_instance->customerHistoryPlanValues($customer_id, $page, $number_per_page);
} catch (Exception $e) {
    echo 'Exception when calling SsPricingApi->customerHistoryPlanValues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**|  |
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

# **customerPlanAdd**
> \Swagger\Client\Model\CustomerPlan customerPlanAdd($customer_id, $customer_plan)



Add a new Product to a Customer

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

$api_instance = new Swagger\Client\Api\SsPricingApi();
$customer_id = "customer_id_example"; // string | 
$customer_plan = new \Swagger\Client\Model\CustomerPlan(); // \Swagger\Client\Model\CustomerPlan | 

try {
    $result = $api_instance->customerPlanAdd($customer_id, $customer_plan);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsPricingApi->customerPlanAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**|  |
 **customer_plan** | [**\Swagger\Client\Model\CustomerPlan**](../Model/\Swagger\Client\Model\CustomerPlan.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\CustomerPlan**](../Model/CustomerPlan.md)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPlanAddCheck**
> \Swagger\Client\Model\CustomerPlan customerPlanAddCheck($customer_id, $customer_plan)





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

$api_instance = new Swagger\Client\Api\SsPricingApi();
$customer_id = "customer_id_example"; // string | 
$customer_plan = new \Swagger\Client\Model\CustomerPlan(); // \Swagger\Client\Model\CustomerPlan | 

try {
    $result = $api_instance->customerPlanAddCheck($customer_id, $customer_plan);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsPricingApi->customerPlanAddCheck: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**|  |
 **customer_plan** | [**\Swagger\Client\Model\CustomerPlan**](../Model/\Swagger\Client\Model\CustomerPlan.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\CustomerPlan**](../Model/CustomerPlan.md)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPlanClose**
> string customerPlanClose($customer_id, $customer_plan_id)





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

$api_instance = new Swagger\Client\Api\SsPricingApi();
$customer_id = "customer_id_example"; // string | 
$customer_plan_id = "customer_plan_id_example"; // string | 

try {
    $result = $api_instance->customerPlanClose($customer_id, $customer_plan_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsPricingApi->customerPlanClose: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**|  |
 **customer_plan_id** | **string**|  |

### Return type

**string**

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPlanFamily**
> \Swagger\Client\Model\CustomerPlan customerPlanFamily($customer_id, $family)





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

$api_instance = new Swagger\Client\Api\SsPricingApi();
$customer_id = "customer_id_example"; // string | 
$family = "family_example"; // string | 

try {
    $result = $api_instance->customerPlanFamily($customer_id, $family);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsPricingApi->customerPlanFamily: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**|  |
 **family** | **string**|  |

### Return type

[**\Swagger\Client\Model\CustomerPlan**](../Model/CustomerPlan.md)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPlanGet**
> \Swagger\Client\Model\CustomerPlan customerPlanGet($customer_id, $customer_plan_id)



Get a certain

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

$api_instance = new Swagger\Client\Api\SsPricingApi();
$customer_id = "customer_id_example"; // string | 
$customer_plan_id = "customer_plan_id_example"; // string | 

try {
    $result = $api_instance->customerPlanGet($customer_id, $customer_plan_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsPricingApi->customerPlanGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**|  |
 **customer_plan_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\CustomerPlan**](../Model/CustomerPlan.md)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPlanGetAll**
> string[] customerPlanGetAll($customer_id)



Get all Products Customers

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

$api_instance = new Swagger\Client\Api\SsPricingApi();
$customer_id = "customer_id_example"; // string | 

try {
    $result = $api_instance->customerPlanGetAll($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsPricingApi->customerPlanGetAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**|  |

### Return type

**string[]**

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPlanPay**
> string customerPlanPay($customer_id, $customer_plan_id, $customer_bill_id, $when_pay)





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

$api_instance = new Swagger\Client\Api\SsPricingApi();
$customer_id = "customer_id_example"; // string | 
$customer_plan_id = "customer_plan_id_example"; // string | 
$customer_bill_id = "customer_bill_id_example"; // string | 
$when_pay = "when_pay_example"; // string | 

try {
    $result = $api_instance->customerPlanPay($customer_id, $customer_plan_id, $customer_bill_id, $when_pay);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsPricingApi->customerPlanPay: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**|  |
 **customer_plan_id** | **string**|  |
 **customer_bill_id** | **string**|  |
 **when_pay** | **string**|  |

### Return type

**string**

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPlanPlan**
> \Swagger\Client\Model\Plan customerPlanPlan($customer_id, $plan_id)



Get all the actual customerPlanId for the planId

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

$api_instance = new Swagger\Client\Api\SsPricingApi();
$customer_id = "customer_id_example"; // string | 
$plan_id = "plan_id_example"; // string | 

try {
    $result = $api_instance->customerPlanPlan($customer_id, $plan_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsPricingApi->customerPlanPlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**|  |
 **plan_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\Plan**](../Model/Plan.md)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPlanValues**
> customerPlanValues($customer_id, $page, $number_per_page)





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

$api_instance = new Swagger\Client\Api\SsPricingApi();
$customer_id = "customer_id_example"; // string | 
$page = 56; // int | 
$number_per_page = 56; // int | 

try {
    $api_instance->customerPlanValues($customer_id, $page, $number_per_page);
} catch (Exception $e) {
    echo 'Exception when calling SsPricingApi->customerPlanValues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**|  |
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

# **pricing**
> \Swagger\Client\Model\PricingTableFull pricing($currency, $only_pan_id)



Get the actual pricing configuration, usefull for dynamic create a pricing table

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

$api_instance = new Swagger\Client\Api\SsPricingApi();
$currency = "currency_example"; // string | 
$only_pan_id = "only_pan_id_example"; // string | 

try {
    $result = $api_instance->pricing($currency, $only_pan_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsPricingApi->pricing: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**|  |
 **only_pan_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\PricingTableFull**](../Model/PricingTableFull.md)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pricing2**
> \Swagger\Client\Model\PricingTable2Full pricing2($currency, $only_pan_id)





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

$api_instance = new Swagger\Client\Api\SsPricingApi();
$currency = "currency_example"; // string | 
$only_pan_id = "only_pan_id_example"; // string | 

try {
    $result = $api_instance->pricing2($currency, $only_pan_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsPricingApi->pricing2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**|  |
 **only_pan_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\PricingTable2Full**](../Model/PricingTable2Full.md)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pricingConfigGet**
> \Swagger\Client\Model\PricingConf pricingConfigGet()





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

$api_instance = new Swagger\Client\Api\SsPricingApi();

try {
    $result = $api_instance->pricingConfigGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsPricingApi->pricingConfigGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\PricingConf**](../Model/PricingConf.md)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pricingConfigPut**
> string pricingConfigPut($a)





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

$api_instance = new Swagger\Client\Api\SsPricingApi();
$a = new \Swagger\Client\Model\PricingConf(); // \Swagger\Client\Model\PricingConf | 

try {
    $result = $api_instance->pricingConfigPut($a);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsPricingApi->pricingConfigPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **a** | [**\Swagger\Client\Model\PricingConf**](../Model/\Swagger\Client\Model\PricingConf.md)|  | [optional]

### Return type

**string**

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pricingUiConf**
> \Swagger\Client\Model\PricingUiConf pricingUiConf()





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

$api_instance = new Swagger\Client\Api\SsPricingApi();

try {
    $result = $api_instance->pricingUiConf();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsPricingApi->pricingUiConf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\PricingUiConf**](../Model/PricingUiConf.md)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pricingUiConfigGet**
> \Swagger\Client\Model\PricingUiConf pricingUiConfigGet()





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

$api_instance = new Swagger\Client\Api\SsPricingApi();

try {
    $result = $api_instance->pricingUiConfigGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsPricingApi->pricingUiConfigGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\PricingUiConf**](../Model/PricingUiConf.md)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pricingUiConfigPut**
> string pricingUiConfigPut($a)





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

$api_instance = new Swagger\Client\Api\SsPricingApi();
$a = new \Swagger\Client\Model\PricingUiConf(); // \Swagger\Client\Model\PricingUiConf | 

try {
    $result = $api_instance->pricingUiConfigPut($a);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsPricingApi->pricingUiConfigPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **a** | [**\Swagger\Client\Model\PricingUiConf**](../Model/\Swagger\Client\Model\PricingUiConf.md)|  | [optional]

### Return type

**string**

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

