# s4s\SsPaymentApi

All URIs are relative to *https://*

Method | HTTP request | Description
------------- | ------------- | -------------
[**paymentCustomerInfoCurrency**](SsPaymentApi.md#paymentCustomerInfoCurrency) | **GET** /s4s-pricing/payment/customer/{customer-id}/info/currency | 
[**paymentCustomerInfoGet**](SsPaymentApi.md#paymentCustomerInfoGet) | **GET** /s4s-pricing/payment/customer/{customer-id}/info | 
[**paymentCustomerInfoHasPaymentInfo**](SsPaymentApi.md#paymentCustomerInfoHasPaymentInfo) | **GET** /s4s-pricing/payment/customer/{customer-id}/info/hasPaymentInfo | 
[**paymentCustomerInfoStripeCustomer**](SsPaymentApi.md#paymentCustomerInfoStripeCustomer) | **POST** /s4s-pricing/payment/customer/{customer-id}/info/stripeCustomer | 
[**paymentCustomerPaymentAdd**](SsPaymentApi.md#paymentCustomerPaymentAdd) | **POST** /s4s-pricing/payment/customer/{customer-id}/payment | 
[**paymentCustomerPaymentCancelPatch**](SsPaymentApi.md#paymentCustomerPaymentCancelPatch) | **PATCH** /s4s-pricing/payment/customer/{customer-id}/payment/{payment-id}/cancel | 
[**paymentCustomerPaymentGetAll**](SsPaymentApi.md#paymentCustomerPaymentGetAll) | **GET** /s4s-pricing/payment/customer/{customer-id}/payment | 
[**paymentCustomerPaymentPayPatch**](SsPaymentApi.md#paymentCustomerPaymentPayPatch) | **PATCH** /s4s-pricing/payment/customer/{customer-id}/payment/{payment-id}/pay | 
[**paymentCustomerPaymentValues**](SsPaymentApi.md#paymentCustomerPaymentValues) | **GET** /s4s-pricing/payment/customer/{customer-id}/payment/values | 
[**paymentPaymentGetAll**](SsPaymentApi.md#paymentPaymentGetAll) | **GET** /s4s-pricing/payment/payment | 


# **paymentCustomerInfoCurrency**
> string paymentCustomerInfoCurrency($customer_id, $currency)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: tenantid
s4s\Configuration::getDefaultConfiguration()->setApiKey('tenantid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// s4s\Configuration::getDefaultConfiguration()->setApiKeyPrefix('tenantid', 'Bearer');
// Configure API key authorization: token
s4s\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// s4s\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new s4s\Api\SsPaymentApi();
$customer_id = "customer_id_example"; // string | 
$currency = "currency_example"; // string | 

try {
    $result = $api_instance->paymentCustomerInfoCurrency($customer_id, $currency);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsPaymentApi->paymentCustomerInfoCurrency: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**|  |
 **currency** | **string**|  |

### Return type

**string**

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentCustomerInfoGet**
> \s4s\model\CustomerInfo paymentCustomerInfoGet($customer_id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: tenantid
s4s\Configuration::getDefaultConfiguration()->setApiKey('tenantid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// s4s\Configuration::getDefaultConfiguration()->setApiKeyPrefix('tenantid', 'Bearer');
// Configure API key authorization: token
s4s\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// s4s\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new s4s\Api\SsPaymentApi();
$customer_id = "customer_id_example"; // string | 

try {
    $result = $api_instance->paymentCustomerInfoGet($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsPaymentApi->paymentCustomerInfoGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**|  |

### Return type

[**\s4s\model\CustomerInfo**](../Model/CustomerInfo.md)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentCustomerInfoHasPaymentInfo**
> bool paymentCustomerInfoHasPaymentInfo($customer_id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: tenantid
s4s\Configuration::getDefaultConfiguration()->setApiKey('tenantid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// s4s\Configuration::getDefaultConfiguration()->setApiKeyPrefix('tenantid', 'Bearer');
// Configure API key authorization: token
s4s\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// s4s\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new s4s\Api\SsPaymentApi();
$customer_id = "customer_id_example"; // string | 

try {
    $result = $api_instance->paymentCustomerInfoHasPaymentInfo($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsPaymentApi->paymentCustomerInfoHasPaymentInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**|  |

### Return type

**bool**

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentCustomerInfoStripeCustomer**
> string paymentCustomerInfoStripeCustomer($customer_id, $stripe_customer)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: tenantid
s4s\Configuration::getDefaultConfiguration()->setApiKey('tenantid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// s4s\Configuration::getDefaultConfiguration()->setApiKeyPrefix('tenantid', 'Bearer');
// Configure API key authorization: token
s4s\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// s4s\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new s4s\Api\SsPaymentApi();
$customer_id = "customer_id_example"; // string | 
$stripe_customer = new \s4s\model\StripeCustomer(); // \s4s\model\StripeCustomer | 

try {
    $result = $api_instance->paymentCustomerInfoStripeCustomer($customer_id, $stripe_customer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsPaymentApi->paymentCustomerInfoStripeCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**|  |
 **stripe_customer** | [**\s4s\model\StripeCustomer**](../Model/\s4s\model\StripeCustomer.md)|  | [optional]

### Return type

**string**

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentCustomerPaymentAdd**
> \s4s\model\PaymentRequest paymentCustomerPaymentAdd($customer_id, $payment_request)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: tenantid
s4s\Configuration::getDefaultConfiguration()->setApiKey('tenantid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// s4s\Configuration::getDefaultConfiguration()->setApiKeyPrefix('tenantid', 'Bearer');
// Configure API key authorization: token
s4s\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// s4s\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new s4s\Api\SsPaymentApi();
$customer_id = "customer_id_example"; // string | 
$payment_request = new \s4s\model\PaymentRequest(); // \s4s\model\PaymentRequest | 

try {
    $result = $api_instance->paymentCustomerPaymentAdd($customer_id, $payment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsPaymentApi->paymentCustomerPaymentAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**|  |
 **payment_request** | [**\s4s\model\PaymentRequest**](../Model/\s4s\model\PaymentRequest.md)|  | [optional]

### Return type

[**\s4s\model\PaymentRequest**](../Model/PaymentRequest.md)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentCustomerPaymentCancelPatch**
> string paymentCustomerPaymentCancelPatch($customer_id, $payment_id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: tenantid
s4s\Configuration::getDefaultConfiguration()->setApiKey('tenantid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// s4s\Configuration::getDefaultConfiguration()->setApiKeyPrefix('tenantid', 'Bearer');
// Configure API key authorization: token
s4s\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// s4s\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new s4s\Api\SsPaymentApi();
$customer_id = "customer_id_example"; // string | 
$payment_id = "payment_id_example"; // string | 

try {
    $result = $api_instance->paymentCustomerPaymentCancelPatch($customer_id, $payment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsPaymentApi->paymentCustomerPaymentCancelPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**|  |
 **payment_id** | **string**|  |

### Return type

**string**

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentCustomerPaymentGetAll**
> string[] paymentCustomerPaymentGetAll($customer_id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: tenantid
s4s\Configuration::getDefaultConfiguration()->setApiKey('tenantid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// s4s\Configuration::getDefaultConfiguration()->setApiKeyPrefix('tenantid', 'Bearer');
// Configure API key authorization: token
s4s\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// s4s\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new s4s\Api\SsPaymentApi();
$customer_id = "customer_id_example"; // string | 

try {
    $result = $api_instance->paymentCustomerPaymentGetAll($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsPaymentApi->paymentCustomerPaymentGetAll: ', $e->getMessage(), PHP_EOL;
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

# **paymentCustomerPaymentPayPatch**
> \s4s\model\PaymentRequest paymentCustomerPaymentPayPatch($customer_id, $payment_id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: tenantid
s4s\Configuration::getDefaultConfiguration()->setApiKey('tenantid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// s4s\Configuration::getDefaultConfiguration()->setApiKeyPrefix('tenantid', 'Bearer');
// Configure API key authorization: token
s4s\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// s4s\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new s4s\Api\SsPaymentApi();
$customer_id = "customer_id_example"; // string | 
$payment_id = "payment_id_example"; // string | 

try {
    $result = $api_instance->paymentCustomerPaymentPayPatch($customer_id, $payment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsPaymentApi->paymentCustomerPaymentPayPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**|  |
 **payment_id** | **string**|  |

### Return type

[**\s4s\model\PaymentRequest**](../Model/PaymentRequest.md)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentCustomerPaymentValues**
> \s4s\model\DataListPaymentRequest paymentCustomerPaymentValues($customer_id, $page, $number_per_page)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: tenantid
s4s\Configuration::getDefaultConfiguration()->setApiKey('tenantid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// s4s\Configuration::getDefaultConfiguration()->setApiKeyPrefix('tenantid', 'Bearer');
// Configure API key authorization: token
s4s\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// s4s\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new s4s\Api\SsPaymentApi();
$customer_id = "customer_id_example"; // string | 
$page = 56; // int | 
$number_per_page = 56; // int | 

try {
    $result = $api_instance->paymentCustomerPaymentValues($customer_id, $page, $number_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsPaymentApi->paymentCustomerPaymentValues: ', $e->getMessage(), PHP_EOL;
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

[**\s4s\model\DataListPaymentRequest**](../Model/DataListPaymentRequest.md)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentPaymentGetAll**
> \s4s\model\DataListPaymentRequest paymentPaymentGetAll($page, $number_per_page)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: tenantid
s4s\Configuration::getDefaultConfiguration()->setApiKey('tenantid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// s4s\Configuration::getDefaultConfiguration()->setApiKeyPrefix('tenantid', 'Bearer');
// Configure API key authorization: token
s4s\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// s4s\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new s4s\Api\SsPaymentApi();
$page = 56; // int | 
$number_per_page = 56; // int | 

try {
    $result = $api_instance->paymentPaymentGetAll($page, $number_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsPaymentApi->paymentPaymentGetAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  |
 **number_per_page** | **int**|  |

### Return type

[**\s4s\model\DataListPaymentRequest**](../Model/DataListPaymentRequest.md)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

