# s4s\SsNotificationApi

All URIs are relative to *https://*

Method | HTTP request | Description
------------- | ------------- | -------------
[**notificationContactus**](SsNotificationApi.md#notificationContactus) | **GET** /s4s-user/notification/contactus | 
[**notificationOperatorConf**](SsNotificationApi.md#notificationOperatorConf) | **GET** /s4s-user/notification/operator/conf/{notification-key} | 
[**notificationOperatorSendEmail**](SsNotificationApi.md#notificationOperatorSendEmail) | **POST** /s4s-user/notification/operator/sendEmail | 
[**notificationUserSendEmail**](SsNotificationApi.md#notificationUserSendEmail) | **POST** /s4s-user/notification/user/sendEmail | 


# **notificationContactus**
> string notificationContactus($name, $email, $phone, $message)





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

$api_instance = new s4s\Api\SsNotificationApi();
$name = "name_example"; // string | 
$email = "email_example"; // string | 
$phone = "phone_example"; // string | 
$message = "message_example"; // string | 

try {
    $result = $api_instance->notificationContactus($name, $email, $phone, $message);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsNotificationApi->notificationContactus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **email** | **string**|  |
 **phone** | **string**|  |
 **message** | **string**|  |

### Return type

**string**

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **notificationOperatorConf**
> \s4s\model\OperatorConfiguration notificationOperatorConf($notification_key)





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

$api_instance = new s4s\Api\SsNotificationApi();
$notification_key = "notification_key_example"; // string | 

try {
    $result = $api_instance->notificationOperatorConf($notification_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsNotificationApi->notificationOperatorConf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **notification_key** | **string**|  |

### Return type

[**\s4s\model\OperatorConfiguration**](../Model/OperatorConfiguration.md)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **notificationOperatorSendEmail**
> string notificationOperatorSendEmail($notification_key, $email)





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

$api_instance = new s4s\Api\SsNotificationApi();
$notification_key = "notification_key_example"; // string | 
$email = new \s4s\model\Email(); // \s4s\model\Email | 

try {
    $result = $api_instance->notificationOperatorSendEmail($notification_key, $email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsNotificationApi->notificationOperatorSendEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **notification_key** | **string**|  |
 **email** | [**\s4s\model\Email**](../Model/\s4s\model\Email.md)|  | [optional]

### Return type

**string**

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **notificationUserSendEmail**
> string notificationUserSendEmail($user_id, $email)





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

$api_instance = new s4s\Api\SsNotificationApi();
$user_id = "user_id_example"; // string | 
$email = new \s4s\model\Email(); // \s4s\model\Email | 

try {
    $result = $api_instance->notificationUserSendEmail($user_id, $email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsNotificationApi->notificationUserSendEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **email** | [**\s4s\model\Email**](../Model/\s4s\model\Email.md)|  | [optional]

### Return type

**string**

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

