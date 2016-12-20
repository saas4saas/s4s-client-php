# Swagger\Client\SsUserApi

All URIs are relative to *https://*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountAdd**](SsUserApi.md#accountAdd) | **POST** /s4s-user/account | 
[**accountAutoLogin**](SsUserApi.md#accountAutoLogin) | **GET** /s4s-user/account/autoLogin | 
[**accountChangePasswordPatch**](SsUserApi.md#accountChangePasswordPatch) | **PATCH** /s4s-user/account/changePassword | 
[**accountGetAll**](SsUserApi.md#accountGetAll) | **GET** /s4s-user/account | 
[**accountIdGet**](SsUserApi.md#accountIdGet) | **GET** /s4s-user/account/{account-id} | 
[**accountIdKeysAdd**](SsUserApi.md#accountIdKeysAdd) | **POST** /s4s-user/account/{account-id}/keys | 
[**accountIdKeysDel**](SsUserApi.md#accountIdKeysDel) | **DELETE** /s4s-user/account/{account-id}/keys/{user-id} | 
[**accountIdKeysGetAll**](SsUserApi.md#accountIdKeysGetAll) | **GET** /s4s-user/account/{account-id}/keys | 
[**accountIdPrivateDataPut**](SsUserApi.md#accountIdPrivateDataPut) | **PUT** /s4s-user/account/{account-id}/privateData | 
[**accountIdPut**](SsUserApi.md#accountIdPut) | **PUT** /s4s-user/account/{account-id} | 
[**accountIdStatusPut**](SsUserApi.md#accountIdStatusPut) | **PUT** /s4s-user/account/{account-id}/status | 
[**accountIdUserAdd**](SsUserApi.md#accountIdUserAdd) | **POST** /s4s-user/account/{account-id}/user | 
[**accountIdUserChangePwdToken**](SsUserApi.md#accountIdUserChangePwdToken) | **GET** /s4s-user/account/{account-id}/user/{user-id}/changePwdToken | 
[**accountIdUserGet**](SsUserApi.md#accountIdUserGet) | **GET** /s4s-user/account/{account-id}/user/{user-id} | 
[**accountIdUserLogin**](SsUserApi.md#accountIdUserLogin) | **GET** /s4s-user/account/{account-id}/user/{user-id}/login | 
[**accountIdUserPut**](SsUserApi.md#accountIdUserPut) | **PUT** /s4s-user/account/{account-id}/user/{user-id} | 
[**accountIdUserResendEmailConfirmation**](SsUserApi.md#accountIdUserResendEmailConfirmation) | **GET** /s4s-user/account/{account-id}/user/{user-id}/resendEmailConfirmation | 
[**accountLogin**](SsUserApi.md#accountLogin) | **POST** /s4s-user/account/login | 
[**accountLoginOrAdd**](SsUserApi.md#accountLoginOrAdd) | **POST** /s4s-user/account/loginOr | 
[**accountRecover**](SsUserApi.md#accountRecover) | **POST** /s4s-user/account/recover | 
[**accountUserChangePwdToken**](SsUserApi.md#accountUserChangePwdToken) | **GET** /s4s-user/account/user/{user-id}/changePwdToken | 
[**accountUserGet**](SsUserApi.md#accountUserGet) | **GET** /s4s-user/account/user/{user-id} | 
[**accountUserLogin**](SsUserApi.md#accountUserLogin) | **GET** /s4s-user/account/user/{user-id}/login | 
[**accountUserPut**](SsUserApi.md#accountUserPut) | **PUT** /s4s-user/account/user/{user-id} | 
[**accountUserResendEmailConfirmation**](SsUserApi.md#accountUserResendEmailConfirmation) | **GET** /s4s-user/account/user/{user-id}/resendEmailConfirmation | 
[**accountUsernameChangePwdToken**](SsUserApi.md#accountUsernameChangePwdToken) | **GET** /s4s-user/account/username/changePwdToken | 
[**accountUsernameGet**](SsUserApi.md#accountUsernameGet) | **GET** /s4s-user/account/username | 
[**accountUsernameLogin**](SsUserApi.md#accountUsernameLogin) | **GET** /s4s-user/account/username/login | 
[**accountUsernamePut**](SsUserApi.md#accountUsernamePut) | **PUT** /s4s-user/account/username | 
[**accountUsernameResendEmailConfirmation**](SsUserApi.md#accountUsernameResendEmailConfirmation) | **GET** /s4s-user/account/username/resendEmailConfirmation | 
[**authenticate**](SsUserApi.md#authenticate) | **GET** /s4s-user/authenticate | 
[**config**](SsUserApi.md#config) | **GET** /s4s-user/config | 
[**googleLogin**](SsUserApi.md#googleLogin) | **POST** /s4s-user/googleLogin | 
[**renewSession**](SsUserApi.md#renewSession) | **GET** /s4s-user/renewSession | 


# **accountAdd**
> \s4s/model\Account accountAdd($new_account)





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

$api_instance = new Swagger\Client\Api\SsUserApi();
$new_account = new \s4s/model\Account(); // \s4s/model\Account | 

try {
    $result = $api_instance->accountAdd($new_account);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsUserApi->accountAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **new_account** | [**\s4s/model\Account**](../Model/\s4s/model\Account.md)|  | [optional]

### Return type

[**\s4s/model\Account**](../Model/Account.md)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountAutoLogin**
> \s4s/model\Session accountAutoLogin($remember_me_token)





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

$api_instance = new Swagger\Client\Api\SsUserApi();
$remember_me_token = "remember_me_token_example"; // string | 

try {
    $result = $api_instance->accountAutoLogin($remember_me_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsUserApi->accountAutoLogin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **remember_me_token** | **string**|  |

### Return type

[**\s4s/model\Session**](../Model/Session.md)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountChangePasswordPatch**
> string accountChangePasswordPatch($change_pwd_token, $recover)





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

$api_instance = new Swagger\Client\Api\SsUserApi();
$change_pwd_token = "change_pwd_token_example"; // string | 
$recover = new \s4s/model\EmailRecover(); // \s4s/model\EmailRecover | 

try {
    $result = $api_instance->accountChangePasswordPatch($change_pwd_token, $recover);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsUserApi->accountChangePasswordPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **change_pwd_token** | **string**|  |
 **recover** | [**\s4s/model\EmailRecover**](../Model/\s4s/model\EmailRecover.md)|  | [optional]

### Return type

**string**

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountGetAll**
> \s4s/model\DataListAccount accountGetAll($page, $number_per_page, $load_default_user)





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

$api_instance = new Swagger\Client\Api\SsUserApi();
$page = 56; // int | 
$number_per_page = 56; // int | 
$load_default_user = true; // bool | 

try {
    $result = $api_instance->accountGetAll($page, $number_per_page, $load_default_user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsUserApi->accountGetAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  |
 **number_per_page** | **int**|  |
 **load_default_user** | **bool**|  |

### Return type

[**\s4s/model\DataListAccount**](../Model/DataListAccount.md)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountIdGet**
> \s4s/model\Account accountIdGet($account_id)





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

$api_instance = new Swagger\Client\Api\SsUserApi();
$account_id = "account_id_example"; // string | 

try {
    $result = $api_instance->accountIdGet($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsUserApi->accountIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**|  |

### Return type

[**\s4s/model\Account**](../Model/Account.md)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountIdKeysAdd**
> \s4s/model\UserApi accountIdKeysAdd($account_id)





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

$api_instance = new Swagger\Client\Api\SsUserApi();
$account_id = "account_id_example"; // string | 

try {
    $result = $api_instance->accountIdKeysAdd($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsUserApi->accountIdKeysAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**|  |

### Return type

[**\s4s/model\UserApi**](../Model/UserApi.md)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountIdKeysDel**
> string accountIdKeysDel($account_id, $user_id)





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

$api_instance = new Swagger\Client\Api\SsUserApi();
$account_id = "account_id_example"; // string | 
$user_id = "user_id_example"; // string | 

try {
    $result = $api_instance->accountIdKeysDel($account_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsUserApi->accountIdKeysDel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**|  |
 **user_id** | **string**|  |

### Return type

**string**

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountIdKeysGetAll**
> \s4s/model\DataListUserApi accountIdKeysGetAll($account_id, $page, $number_per_page)





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

$api_instance = new Swagger\Client\Api\SsUserApi();
$account_id = "account_id_example"; // string | 
$page = 56; // int | 
$number_per_page = 56; // int | 

try {
    $result = $api_instance->accountIdKeysGetAll($account_id, $page, $number_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsUserApi->accountIdKeysGetAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**|  |
 **page** | **int**|  |
 **number_per_page** | **int**|  |

### Return type

[**\s4s/model\DataListUserApi**](../Model/DataListUserApi.md)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountIdPrivateDataPut**
> string accountIdPrivateDataPut($account_id, $private_data)





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

$api_instance = new Swagger\Client\Api\SsUserApi();
$account_id = "account_id_example"; // string | 
$private_data = NULL; // object | 

try {
    $result = $api_instance->accountIdPrivateDataPut($account_id, $private_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsUserApi->accountIdPrivateDataPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**|  |
 **private_data** | **object**|  | [optional]

### Return type

**string**

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountIdPut**
> \s4s/model\Account accountIdPut($account_id, $new_account)





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

$api_instance = new Swagger\Client\Api\SsUserApi();
$account_id = "account_id_example"; // string | 
$new_account = new \s4s/model\Account(); // \s4s/model\Account | 

try {
    $result = $api_instance->accountIdPut($account_id, $new_account);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsUserApi->accountIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**|  |
 **new_account** | [**\s4s/model\Account**](../Model/\s4s/model\Account.md)|  | [optional]

### Return type

[**\s4s/model\Account**](../Model/Account.md)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountIdStatusPut**
> string accountIdStatusPut($account_id, $status)





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

$api_instance = new Swagger\Client\Api\SsUserApi();
$account_id = "account_id_example"; // string | 
$status = "status_example"; // string | 

try {
    $result = $api_instance->accountIdStatusPut($account_id, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsUserApi->accountIdStatusPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**|  |
 **status** | **string**|  |

### Return type

**string**

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountIdUserAdd**
> \s4s/model\User accountIdUserAdd($account_id, $user)





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

$api_instance = new Swagger\Client\Api\SsUserApi();
$account_id = "account_id_example"; // string | 
$user = new \s4s/model\User(); // \s4s/model\User | 

try {
    $result = $api_instance->accountIdUserAdd($account_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsUserApi->accountIdUserAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**|  |
 **user** | [**\s4s/model\User**](../Model/\s4s/model\User.md)|  | [optional]

### Return type

[**\s4s/model\User**](../Model/User.md)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountIdUserChangePwdToken**
> string accountIdUserChangePwdToken($account_id, $user_id, $current_pwd)





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

$api_instance = new Swagger\Client\Api\SsUserApi();
$account_id = "account_id_example"; // string | 
$user_id = "user_id_example"; // string | 
$current_pwd = "current_pwd_example"; // string | 

try {
    $result = $api_instance->accountIdUserChangePwdToken($account_id, $user_id, $current_pwd);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsUserApi->accountIdUserChangePwdToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**|  |
 **user_id** | **string**|  |
 **current_pwd** | **string**|  |

### Return type

**string**

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountIdUserGet**
> \s4s/model\User accountIdUserGet($account_id, $user_id)





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

$api_instance = new Swagger\Client\Api\SsUserApi();
$account_id = "account_id_example"; // string | 
$user_id = "user_id_example"; // string | 

try {
    $result = $api_instance->accountIdUserGet($account_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsUserApi->accountIdUserGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**|  |
 **user_id** | **string**|  |

### Return type

[**\s4s/model\User**](../Model/User.md)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountIdUserLogin**
> \s4s/model\Session accountIdUserLogin($account_id, $user_id)





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

$api_instance = new Swagger\Client\Api\SsUserApi();
$account_id = "account_id_example"; // string | 
$user_id = "user_id_example"; // string | 

try {
    $result = $api_instance->accountIdUserLogin($account_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsUserApi->accountIdUserLogin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**|  |
 **user_id** | **string**|  |

### Return type

[**\s4s/model\Session**](../Model/Session.md)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountIdUserPut**
> \s4s/model\User accountIdUserPut($account_id, $user_id, $user)





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

$api_instance = new Swagger\Client\Api\SsUserApi();
$account_id = "account_id_example"; // string | 
$user_id = "user_id_example"; // string | 
$user = new \s4s/model\User(); // \s4s/model\User | 

try {
    $result = $api_instance->accountIdUserPut($account_id, $user_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsUserApi->accountIdUserPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**|  |
 **user_id** | **string**|  |
 **user** | [**\s4s/model\User**](../Model/\s4s/model\User.md)|  | [optional]

### Return type

[**\s4s/model\User**](../Model/User.md)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountIdUserResendEmailConfirmation**
> string accountIdUserResendEmailConfirmation($account_id, $user_id)





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

$api_instance = new Swagger\Client\Api\SsUserApi();
$account_id = "account_id_example"; // string | 
$user_id = "user_id_example"; // string | 

try {
    $result = $api_instance->accountIdUserResendEmailConfirmation($account_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsUserApi->accountIdUserResendEmailConfirmation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**|  |
 **user_id** | **string**|  |

### Return type

**string**

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountLogin**
> \s4s/model\Session accountLogin($login)





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

$api_instance = new Swagger\Client\Api\SsUserApi();
$login = new \s4s/model\Login(); // \s4s/model\Login | 

try {
    $result = $api_instance->accountLogin($login);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsUserApi->accountLogin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **login** | [**\s4s/model\Login**](../Model/\s4s/model\Login.md)|  | [optional]

### Return type

[**\s4s/model\Session**](../Model/Session.md)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountLoginOrAdd**
> \s4s/model\Session accountLoginOrAdd($account)





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

$api_instance = new Swagger\Client\Api\SsUserApi();
$account = new \s4s/model\Account(); // \s4s/model\Account | 

try {
    $result = $api_instance->accountLoginOrAdd($account);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsUserApi->accountLoginOrAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account** | [**\s4s/model\Account**](../Model/\s4s/model\Account.md)|  | [optional]

### Return type

[**\s4s/model\Session**](../Model/Session.md)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountRecover**
> string accountRecover($recover)





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

$api_instance = new Swagger\Client\Api\SsUserApi();
$recover = new \s4s/model\EmailRecover(); // \s4s/model\EmailRecover | 

try {
    $result = $api_instance->accountRecover($recover);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsUserApi->accountRecover: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **recover** | [**\s4s/model\EmailRecover**](../Model/\s4s/model\EmailRecover.md)|  | [optional]

### Return type

**string**

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountUserChangePwdToken**
> string accountUserChangePwdToken($user_id, $current_pwd)





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

$api_instance = new Swagger\Client\Api\SsUserApi();
$user_id = "user_id_example"; // string | 
$current_pwd = "current_pwd_example"; // string | 

try {
    $result = $api_instance->accountUserChangePwdToken($user_id, $current_pwd);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsUserApi->accountUserChangePwdToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **current_pwd** | **string**|  |

### Return type

**string**

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountUserGet**
> \s4s/model\User accountUserGet($user_id)





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

$api_instance = new Swagger\Client\Api\SsUserApi();
$user_id = "user_id_example"; // string | 

try {
    $result = $api_instance->accountUserGet($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsUserApi->accountUserGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |

### Return type

[**\s4s/model\User**](../Model/User.md)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountUserLogin**
> \s4s/model\Session accountUserLogin($user_id)





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

$api_instance = new Swagger\Client\Api\SsUserApi();
$user_id = "user_id_example"; // string | 

try {
    $result = $api_instance->accountUserLogin($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsUserApi->accountUserLogin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |

### Return type

[**\s4s/model\Session**](../Model/Session.md)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountUserPut**
> \s4s/model\User accountUserPut($user_id, $user)





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

$api_instance = new Swagger\Client\Api\SsUserApi();
$user_id = "user_id_example"; // string | 
$user = new \s4s/model\User(); // \s4s/model\User | 

try {
    $result = $api_instance->accountUserPut($user_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsUserApi->accountUserPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **user** | [**\s4s/model\User**](../Model/\s4s/model\User.md)|  | [optional]

### Return type

[**\s4s/model\User**](../Model/User.md)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountUserResendEmailConfirmation**
> string accountUserResendEmailConfirmation($user_id)





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

$api_instance = new Swagger\Client\Api\SsUserApi();
$user_id = "user_id_example"; // string | 

try {
    $result = $api_instance->accountUserResendEmailConfirmation($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsUserApi->accountUserResendEmailConfirmation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |

### Return type

**string**

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountUsernameChangePwdToken**
> string accountUsernameChangePwdToken($usr, $current_pwd)





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

$api_instance = new Swagger\Client\Api\SsUserApi();
$usr = "usr_example"; // string | 
$current_pwd = "current_pwd_example"; // string | 

try {
    $result = $api_instance->accountUsernameChangePwdToken($usr, $current_pwd);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsUserApi->accountUsernameChangePwdToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **usr** | **string**|  |
 **current_pwd** | **string**|  |

### Return type

**string**

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountUsernameGet**
> \s4s/model\User accountUsernameGet($usr)





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

$api_instance = new Swagger\Client\Api\SsUserApi();
$usr = "usr_example"; // string | 

try {
    $result = $api_instance->accountUsernameGet($usr);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsUserApi->accountUsernameGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **usr** | **string**|  |

### Return type

[**\s4s/model\User**](../Model/User.md)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountUsernameLogin**
> \s4s/model\Session accountUsernameLogin($usr)





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

$api_instance = new Swagger\Client\Api\SsUserApi();
$usr = "usr_example"; // string | 

try {
    $result = $api_instance->accountUsernameLogin($usr);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsUserApi->accountUsernameLogin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **usr** | **string**|  |

### Return type

[**\s4s/model\Session**](../Model/Session.md)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountUsernamePut**
> \s4s/model\User accountUsernamePut($usr, $user)





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

$api_instance = new Swagger\Client\Api\SsUserApi();
$usr = "usr_example"; // string | 
$user = new \s4s/model\User(); // \s4s/model\User | 

try {
    $result = $api_instance->accountUsernamePut($usr, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsUserApi->accountUsernamePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **usr** | **string**|  |
 **user** | [**\s4s/model\User**](../Model/\s4s/model\User.md)|  | [optional]

### Return type

[**\s4s/model\User**](../Model/User.md)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountUsernameResendEmailConfirmation**
> string accountUsernameResendEmailConfirmation($usr)





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

$api_instance = new Swagger\Client\Api\SsUserApi();
$usr = "usr_example"; // string | 

try {
    $result = $api_instance->accountUsernameResendEmailConfirmation($usr);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsUserApi->accountUsernameResendEmailConfirmation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **usr** | **string**|  |

### Return type

**string**

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authenticate**
> \s4s/model\UtUser authenticate($authtoken)





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

$api_instance = new Swagger\Client\Api\SsUserApi();
$authtoken = "authtoken_example"; // string | 

try {
    $result = $api_instance->authenticate($authtoken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsUserApi->authenticate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authtoken** | **string**|  |

### Return type

[**\s4s/model\UtUser**](../Model/UtUser.md)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **config**
> \s4s/model\UserConfig config()





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

$api_instance = new Swagger\Client\Api\SsUserApi();

try {
    $result = $api_instance->config();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsUserApi->config: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\s4s/model\UserConfig**](../Model/UserConfig.md)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **googleLogin**
> \s4s/model\Session googleLogin($google)





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

$api_instance = new Swagger\Client\Api\SsUserApi();
$google = new \s4s/model\GoogleAuth(); // \s4s/model\GoogleAuth | 

try {
    $result = $api_instance->googleLogin($google);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsUserApi->googleLogin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **google** | [**\s4s/model\GoogleAuth**](../Model/\s4s/model\GoogleAuth.md)|  | [optional]

### Return type

[**\s4s/model\Session**](../Model/Session.md)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **renewSession**
> \s4s/model\Session renewSession($authtoken)





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

$api_instance = new Swagger\Client\Api\SsUserApi();
$authtoken = "authtoken_example"; // string | 

try {
    $result = $api_instance->renewSession($authtoken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsUserApi->renewSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authtoken** | **string**|  |

### Return type

[**\s4s/model\Session**](../Model/Session.md)

### Authorization

[tenantid](../../README.md#tenantid), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

