# Swagger\Client\SsPaymentApi

All URIs are relative to *https://api.saas4saas.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**conf**](SsPaymentApi.md#conf) | **GET** /s4s-payment/conf | 
[**customerInfoCurrency**](SsPaymentApi.md#customerInfoCurrency) | **GET** /s4s-payment/customer/{customer-id}/info/currency | 
[**customerInfoGet**](SsPaymentApi.md#customerInfoGet) | **GET** /s4s-payment/customer/{customer-id}/info | 
[**customerInfoHasPaymentInfo**](SsPaymentApi.md#customerInfoHasPaymentInfo) | **GET** /s4s-payment/customer/{customer-id}/info/hasPaymentInfo | 
[**customerInfoStripeCustomer**](SsPaymentApi.md#customerInfoStripeCustomer) | **POST** /s4s-payment/customer/{customer-id}/info/stripeCustomer | 
[**customerPaymentAdd**](SsPaymentApi.md#customerPaymentAdd) | **POST** /s4s-payment/customer/{customer-id}/payment | 
[**customerPaymentCancelPatch**](SsPaymentApi.md#customerPaymentCancelPatch) | **PATCH** /s4s-payment/customer/{customer-id}/payment/{payment-id}/cancel | 
[**customerPaymentGet**](SsPaymentApi.md#customerPaymentGet) | **GET** /s4s-payment/customer/{customer-id}/payment | 
[**customerPaymentPayPatch**](SsPaymentApi.md#customerPaymentPayPatch) | **PATCH** /s4s-payment/customer/{customer-id}/payment/{payment-id}/pay | 
[**customerPaymentValues**](SsPaymentApi.md#customerPaymentValues) | **GET** /s4s-payment/customer/{customer-id}/payment/values | 
[**paymentConfigGet**](SsPaymentApi.md#paymentConfigGet) | **GET** /s4s-payment/paymentConfig | 
[**paymentConfigPut**](SsPaymentApi.md#paymentConfigPut) | **PUT** /s4s-payment/paymentConfig | 
[**paymentGetAll**](SsPaymentApi.md#paymentGetAll) | **GET** /s4s-payment/payment | 


# **conf**
> \Swagger\Client\Model\PaymentConf conf()





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

$api_instance = new Swagger\Client\Api\SsPaymentApi();

try {
    $result = $api_instance->conf();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsPaymentApi->conf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\PaymentConf**](../Model/PaymentConf.md)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerInfoCurrency**
> string customerInfoCurrency($customer_id, $currency)





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

$api_instance = new Swagger\Client\Api\SsPaymentApi();
$customer_id = "customer_id_example"; // string | 
$currency = "currency_example"; // string | 

try {
    $result = $api_instance->customerInfoCurrency($customer_id, $currency);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsPaymentApi->customerInfoCurrency: ', $e->getMessage(), PHP_EOL;
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

# **customerInfoGet**
> \Swagger\Client\Model\CustomerInfo customerInfoGet($customer_id)





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

$api_instance = new Swagger\Client\Api\SsPaymentApi();
$customer_id = "customer_id_example"; // string | 

try {
    $result = $api_instance->customerInfoGet($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsPaymentApi->customerInfoGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\CustomerInfo**](../Model/CustomerInfo.md)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerInfoHasPaymentInfo**
> bool customerInfoHasPaymentInfo($customer_id)





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

$api_instance = new Swagger\Client\Api\SsPaymentApi();
$customer_id = "customer_id_example"; // string | 

try {
    $result = $api_instance->customerInfoHasPaymentInfo($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsPaymentApi->customerInfoHasPaymentInfo: ', $e->getMessage(), PHP_EOL;
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

# **customerInfoStripeCustomer**
> string customerInfoStripeCustomer($customer_id, $stripe_customer)





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

$api_instance = new Swagger\Client\Api\SsPaymentApi();
$customer_id = "customer_id_example"; // string | 
$stripe_customer = new \Swagger\Client\Model\StripeCustomer(); // \Swagger\Client\Model\StripeCustomer | 

try {
    $result = $api_instance->customerInfoStripeCustomer($customer_id, $stripe_customer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsPaymentApi->customerInfoStripeCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**|  |
 **stripe_customer** | [**\Swagger\Client\Model\StripeCustomer**](../Model/\Swagger\Client\Model\StripeCustomer.md)|  | [optional]

### Return type

**string**

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPaymentAdd**
> \Swagger\Client\Model\PaymentRequest customerPaymentAdd($customer_id, $payment_request)





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

$api_instance = new Swagger\Client\Api\SsPaymentApi();
$customer_id = "customer_id_example"; // string | 
$payment_request = new \Swagger\Client\Model\PaymentRequest(); // \Swagger\Client\Model\PaymentRequest | 

try {
    $result = $api_instance->customerPaymentAdd($customer_id, $payment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsPaymentApi->customerPaymentAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**|  |
 **payment_request** | [**\Swagger\Client\Model\PaymentRequest**](../Model/\Swagger\Client\Model\PaymentRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\PaymentRequest**](../Model/PaymentRequest.md)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPaymentCancelPatch**
> string customerPaymentCancelPatch($customer_id, $payment_id)





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

$api_instance = new Swagger\Client\Api\SsPaymentApi();
$customer_id = "customer_id_example"; // string | 
$payment_id = "payment_id_example"; // string | 

try {
    $result = $api_instance->customerPaymentCancelPatch($customer_id, $payment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsPaymentApi->customerPaymentCancelPatch: ', $e->getMessage(), PHP_EOL;
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

# **customerPaymentGet**
> \Swagger\Client\Model\PaymentRequest customerPaymentGet($customer_id, $payment_id)





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

$api_instance = new Swagger\Client\Api\SsPaymentApi();
$customer_id = "customer_id_example"; // string | 
$payment_id = "payment_id_example"; // string | 

try {
    $result = $api_instance->customerPaymentGet($customer_id, $payment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsPaymentApi->customerPaymentGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**|  |
 **payment_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\PaymentRequest**](../Model/PaymentRequest.md)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPaymentPayPatch**
> \Swagger\Client\Model\PaymentRequest customerPaymentPayPatch($customer_id, $payment_id)





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

$api_instance = new Swagger\Client\Api\SsPaymentApi();
$customer_id = "customer_id_example"; // string | 
$payment_id = "payment_id_example"; // string | 

try {
    $result = $api_instance->customerPaymentPayPatch($customer_id, $payment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsPaymentApi->customerPaymentPayPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**|  |
 **payment_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\PaymentRequest**](../Model/PaymentRequest.md)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPaymentValues**
> customerPaymentValues($customer_id, $page, $number_per_page)





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

$api_instance = new Swagger\Client\Api\SsPaymentApi();
$customer_id = "customer_id_example"; // string | 
$page = 56; // int | 
$number_per_page = 56; // int | 

try {
    $api_instance->customerPaymentValues($customer_id, $page, $number_per_page);
} catch (Exception $e) {
    echo 'Exception when calling SsPaymentApi->customerPaymentValues: ', $e->getMessage(), PHP_EOL;
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

# **paymentConfigGet**
> \Swagger\Client\Model\PaymentConf paymentConfigGet()





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

$api_instance = new Swagger\Client\Api\SsPaymentApi();

try {
    $result = $api_instance->paymentConfigGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsPaymentApi->paymentConfigGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\PaymentConf**](../Model/PaymentConf.md)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentConfigPut**
> string paymentConfigPut($a)





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

$api_instance = new Swagger\Client\Api\SsPaymentApi();
$a = new \Swagger\Client\Model\PaymentConf(); // \Swagger\Client\Model\PaymentConf | 

try {
    $result = $api_instance->paymentConfigPut($a);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsPaymentApi->paymentConfigPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **a** | [**\Swagger\Client\Model\PaymentConf**](../Model/\Swagger\Client\Model\PaymentConf.md)|  | [optional]

### Return type

**string**

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentGetAll**
> paymentGetAll($page, $number_per_page)





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

$api_instance = new Swagger\Client\Api\SsPaymentApi();
$page = 56; // int | 
$number_per_page = 56; // int | 

try {
    $api_instance->paymentGetAll($page, $number_per_page);
} catch (Exception $e) {
    echo 'Exception when calling SsPaymentApi->paymentGetAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
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

