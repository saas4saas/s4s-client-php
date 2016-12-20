# 
No descripton provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 
- Package version: v2.1.5
- Build date: 2016-12-20T16:34:10.357Z
- Build package: class io.swagger.codegen.languages.PhpClientCodegen
For more information, please visit []()

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/saas4saas/s4s-full-php.git"
    }
  ],
  "require": {
    "saas4saas/s4s-full-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to//autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit lib/Tests
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *https://*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*SsNotificationApi* | [**notificationContactus**](docs/Api/SsNotificationApi.md#notificationcontactus) | **GET** /s4s-user/notification/contactus | 
*SsNotificationApi* | [**notificationOperatorConf**](docs/Api/SsNotificationApi.md#notificationoperatorconf) | **GET** /s4s-user/notification/operator/conf/{notification-key} | 
*SsNotificationApi* | [**notificationOperatorSendEmail**](docs/Api/SsNotificationApi.md#notificationoperatorsendemail) | **POST** /s4s-user/notification/operator/sendEmail | 
*SsNotificationApi* | [**notificationUserSendEmail**](docs/Api/SsNotificationApi.md#notificationusersendemail) | **POST** /s4s-user/notification/user/sendEmail | 
*SsPaymentApi* | [**paymentCustomerInfoCurrency**](docs/Api/SsPaymentApi.md#paymentcustomerinfocurrency) | **GET** /s4s-pricing/payment/customer/{customer-id}/info/currency | 
*SsPaymentApi* | [**paymentCustomerInfoGet**](docs/Api/SsPaymentApi.md#paymentcustomerinfoget) | **GET** /s4s-pricing/payment/customer/{customer-id}/info | 
*SsPaymentApi* | [**paymentCustomerInfoHasPaymentInfo**](docs/Api/SsPaymentApi.md#paymentcustomerinfohaspaymentinfo) | **GET** /s4s-pricing/payment/customer/{customer-id}/info/hasPaymentInfo | 
*SsPaymentApi* | [**paymentCustomerInfoStripeCustomer**](docs/Api/SsPaymentApi.md#paymentcustomerinfostripecustomer) | **POST** /s4s-pricing/payment/customer/{customer-id}/info/stripeCustomer | 
*SsPaymentApi* | [**paymentCustomerPaymentAdd**](docs/Api/SsPaymentApi.md#paymentcustomerpaymentadd) | **POST** /s4s-pricing/payment/customer/{customer-id}/payment | 
*SsPaymentApi* | [**paymentCustomerPaymentCancelPatch**](docs/Api/SsPaymentApi.md#paymentcustomerpaymentcancelpatch) | **PATCH** /s4s-pricing/payment/customer/{customer-id}/payment/{payment-id}/cancel | 
*SsPaymentApi* | [**paymentCustomerPaymentGetAll**](docs/Api/SsPaymentApi.md#paymentcustomerpaymentgetall) | **GET** /s4s-pricing/payment/customer/{customer-id}/payment | 
*SsPaymentApi* | [**paymentCustomerPaymentPayPatch**](docs/Api/SsPaymentApi.md#paymentcustomerpaymentpaypatch) | **PATCH** /s4s-pricing/payment/customer/{customer-id}/payment/{payment-id}/pay | 
*SsPaymentApi* | [**paymentCustomerPaymentValues**](docs/Api/SsPaymentApi.md#paymentcustomerpaymentvalues) | **GET** /s4s-pricing/payment/customer/{customer-id}/payment/values | 
*SsPaymentApi* | [**paymentPaymentGetAll**](docs/Api/SsPaymentApi.md#paymentpaymentgetall) | **GET** /s4s-pricing/payment/payment | 
*SsPricingApi* | [**customerBillClose**](docs/Api/SsPricingApi.md#customerbillclose) | **GET** /s4s-pricing/customer/{customer-id}/bill/{customer-bill-id}/close | 
*SsPricingApi* | [**customerBillGet**](docs/Api/SsPricingApi.md#customerbillget) | **GET** /s4s-pricing/customer/{customer-id}/bill/{customer-bill-id} | 
*SsPricingApi* | [**customerBillInitGet**](docs/Api/SsPricingApi.md#customerbillinitget) | **GET** /s4s-pricing/customer/{customer-id}/bill/init | 
*SsPricingApi* | [**customerBillInitPost**](docs/Api/SsPricingApi.md#customerbillinitpost) | **GET** /s4s-pricing/customer/{customer-id}/bill/initPost | 
*SsPricingApi* | [**customerBillOrGet**](docs/Api/SsPricingApi.md#customerbillorget) | **GET** /s4s-pricing/customer/{customer-id}/bill/or | 
*SsPricingApi* | [**customerBillPaymentAdd**](docs/Api/SsPricingApi.md#customerbillpaymentadd) | **POST** /s4s-pricing/customer/{customer-id}/bill/payment | 
*SsPricingApi* | [**customerBillValues**](docs/Api/SsPricingApi.md#customerbillvalues) | **GET** /s4s-pricing/customer/{customer-id}/bill/values | 
*SsPricingApi* | [**customerHistoryPlanValues**](docs/Api/SsPricingApi.md#customerhistoryplanvalues) | **GET** /s4s-pricing/customer/{customer-id}/history/plan/values | 
*SsPricingApi* | [**customerPlanAdd**](docs/Api/SsPricingApi.md#customerplanadd) | **POST** /s4s-pricing/customer/{customer-id}/plan | 
*SsPricingApi* | [**customerPlanAddCheck**](docs/Api/SsPricingApi.md#customerplanaddcheck) | **POST** /s4s-pricing/customer/{customer-id}/plan/addCheck | 
*SsPricingApi* | [**customerPlanClose**](docs/Api/SsPricingApi.md#customerplanclose) | **GET** /s4s-pricing/customer/{customer-id}/plan/{customer-plan-id}/close | 
*SsPricingApi* | [**customerPlanFamily**](docs/Api/SsPricingApi.md#customerplanfamily) | **GET** /s4s-pricing/customer/{customer-id}/plan/family | 
*SsPricingApi* | [**customerPlanGet**](docs/Api/SsPricingApi.md#customerplanget) | **GET** /s4s-pricing/customer/{customer-id}/plan/{customer-plan-id} | 
*SsPricingApi* | [**customerPlanGetAll**](docs/Api/SsPricingApi.md#customerplangetall) | **GET** /s4s-pricing/customer/{customer-id}/plan | 
*SsPricingApi* | [**customerPlanPay**](docs/Api/SsPricingApi.md#customerplanpay) | **GET** /s4s-pricing/customer/{customer-id}/plan/pay | 
*SsPricingApi* | [**customerPlanPlan**](docs/Api/SsPricingApi.md#customerplanplan) | **GET** /s4s-pricing/customer/{customer-id}/plan/plan | 
*SsPricingApi* | [**customerPlanValues**](docs/Api/SsPricingApi.md#customerplanvalues) | **GET** /s4s-pricing/customer/{customer-id}/plan/values | 
*SsResourceApi* | [**resourceCustomerResourceGet**](docs/Api/SsResourceApi.md#resourcecustomerresourceget) | **GET** /s4s-pricing/resource/customer/{customer-id}/resource/{resourceid} | 
*SsResourceApi* | [**resourceCustomerResourceLimitGet**](docs/Api/SsResourceApi.md#resourcecustomerresourcelimitget) | **GET** /s4s-pricing/resource/customer/{customer-id}/resource/{resourceid}/limit | 
*SsResourceApi* | [**resourceCustomerResourcePatch**](docs/Api/SsResourceApi.md#resourcecustomerresourcepatch) | **PATCH** /s4s-pricing/resource/customer/{customer-id}/resource/{resourceid} | 
*SsResourceApi* | [**resourceCustomerResourceProductGet**](docs/Api/SsResourceApi.md#resourcecustomerresourceproductget) | **GET** /s4s-pricing/resource/customer/{customer-id}/resource/{resourceid}/product/{customer-product-id} | 
*SsResourceApi* | [**resourceCustomerResourceUnspendDel**](docs/Api/SsResourceApi.md#resourcecustomerresourceunspenddel) | **DELETE** /s4s-pricing/resource/customer/{customer-id}/resource/{resourceid}/unspend | 
*SsResourceApi* | [**resourceCustomerResourceUnspendGet**](docs/Api/SsResourceApi.md#resourcecustomerresourceunspendget) | **GET** /s4s-pricing/resource/customer/{customer-id}/resource/{resourceid}/unspend | 
*SsResourceApi* | [**resourceCustomerResourceUnspendPatch**](docs/Api/SsResourceApi.md#resourcecustomerresourceunspendpatch) | **PATCH** /s4s-pricing/resource/customer/{customer-id}/resource/{resourceid}/unspend | 
*SsResourceApi* | [**resourceCustomerUpdateLimits**](docs/Api/SsResourceApi.md#resourcecustomerupdatelimits) | **GET** /s4s-pricing/resource/customer/{customer-id}/updateLimits | 
*SsUserApi* | [**accountAdd**](docs/Api/SsUserApi.md#accountadd) | **POST** /s4s-user/account | 
*SsUserApi* | [**accountAutoLogin**](docs/Api/SsUserApi.md#accountautologin) | **GET** /s4s-user/account/autoLogin | 
*SsUserApi* | [**accountChangePasswordPatch**](docs/Api/SsUserApi.md#accountchangepasswordpatch) | **PATCH** /s4s-user/account/changePassword | 
*SsUserApi* | [**accountGetAll**](docs/Api/SsUserApi.md#accountgetall) | **GET** /s4s-user/account | 
*SsUserApi* | [**accountIdGet**](docs/Api/SsUserApi.md#accountidget) | **GET** /s4s-user/account/{account-id} | 
*SsUserApi* | [**accountIdKeysAdd**](docs/Api/SsUserApi.md#accountidkeysadd) | **POST** /s4s-user/account/{account-id}/keys | 
*SsUserApi* | [**accountIdKeysDel**](docs/Api/SsUserApi.md#accountidkeysdel) | **DELETE** /s4s-user/account/{account-id}/keys/{user-id} | 
*SsUserApi* | [**accountIdKeysGetAll**](docs/Api/SsUserApi.md#accountidkeysgetall) | **GET** /s4s-user/account/{account-id}/keys | 
*SsUserApi* | [**accountIdPrivateDataPut**](docs/Api/SsUserApi.md#accountidprivatedataput) | **PUT** /s4s-user/account/{account-id}/privateData | 
*SsUserApi* | [**accountIdPut**](docs/Api/SsUserApi.md#accountidput) | **PUT** /s4s-user/account/{account-id} | 
*SsUserApi* | [**accountIdStatusPut**](docs/Api/SsUserApi.md#accountidstatusput) | **PUT** /s4s-user/account/{account-id}/status | 
*SsUserApi* | [**accountIdUserAdd**](docs/Api/SsUserApi.md#accountiduseradd) | **POST** /s4s-user/account/{account-id}/user | 
*SsUserApi* | [**accountIdUserChangePwdToken**](docs/Api/SsUserApi.md#accountiduserchangepwdtoken) | **GET** /s4s-user/account/{account-id}/user/{user-id}/changePwdToken | 
*SsUserApi* | [**accountIdUserGet**](docs/Api/SsUserApi.md#accountiduserget) | **GET** /s4s-user/account/{account-id}/user/{user-id} | 
*SsUserApi* | [**accountIdUserLogin**](docs/Api/SsUserApi.md#accountiduserlogin) | **GET** /s4s-user/account/{account-id}/user/{user-id}/login | 
*SsUserApi* | [**accountIdUserPut**](docs/Api/SsUserApi.md#accountiduserput) | **PUT** /s4s-user/account/{account-id}/user/{user-id} | 
*SsUserApi* | [**accountIdUserResendEmailConfirmation**](docs/Api/SsUserApi.md#accountiduserresendemailconfirmation) | **GET** /s4s-user/account/{account-id}/user/{user-id}/resendEmailConfirmation | 
*SsUserApi* | [**accountLogin**](docs/Api/SsUserApi.md#accountlogin) | **POST** /s4s-user/account/login | 
*SsUserApi* | [**accountLoginOrAdd**](docs/Api/SsUserApi.md#accountloginoradd) | **POST** /s4s-user/account/loginOr | 
*SsUserApi* | [**accountRecover**](docs/Api/SsUserApi.md#accountrecover) | **POST** /s4s-user/account/recover | 
*SsUserApi* | [**accountUserChangePwdToken**](docs/Api/SsUserApi.md#accountuserchangepwdtoken) | **GET** /s4s-user/account/user/{user-id}/changePwdToken | 
*SsUserApi* | [**accountUserGet**](docs/Api/SsUserApi.md#accountuserget) | **GET** /s4s-user/account/user/{user-id} | 
*SsUserApi* | [**accountUserLogin**](docs/Api/SsUserApi.md#accountuserlogin) | **GET** /s4s-user/account/user/{user-id}/login | 
*SsUserApi* | [**accountUserPut**](docs/Api/SsUserApi.md#accountuserput) | **PUT** /s4s-user/account/user/{user-id} | 
*SsUserApi* | [**accountUserResendEmailConfirmation**](docs/Api/SsUserApi.md#accountuserresendemailconfirmation) | **GET** /s4s-user/account/user/{user-id}/resendEmailConfirmation | 
*SsUserApi* | [**accountUsernameChangePwdToken**](docs/Api/SsUserApi.md#accountusernamechangepwdtoken) | **GET** /s4s-user/account/username/changePwdToken | 
*SsUserApi* | [**accountUsernameGet**](docs/Api/SsUserApi.md#accountusernameget) | **GET** /s4s-user/account/username | 
*SsUserApi* | [**accountUsernameLogin**](docs/Api/SsUserApi.md#accountusernamelogin) | **GET** /s4s-user/account/username/login | 
*SsUserApi* | [**accountUsernamePut**](docs/Api/SsUserApi.md#accountusernameput) | **PUT** /s4s-user/account/username | 
*SsUserApi* | [**accountUsernameResendEmailConfirmation**](docs/Api/SsUserApi.md#accountusernameresendemailconfirmation) | **GET** /s4s-user/account/username/resendEmailConfirmation | 
*SsUserApi* | [**authenticate**](docs/Api/SsUserApi.md#authenticate) | **GET** /s4s-user/authenticate | 
*SsUserApi* | [**config**](docs/Api/SsUserApi.md#config) | **GET** /s4s-user/config | 
*SsUserApi* | [**googleLogin**](docs/Api/SsUserApi.md#googlelogin) | **POST** /s4s-user/googleLogin | 
*SsUserApi* | [**renewSession**](docs/Api/SsUserApi.md#renewsession) | **GET** /s4s-user/renewSession | 


## Documentation For Models

 - [Account](docs/Model/Account.md)
 - [CustomerBill](docs/Model/CustomerBill.md)
 - [CustomerInfo](docs/Model/CustomerInfo.md)
 - [CustomerPayment](docs/Model/CustomerPayment.md)
 - [CustomerPlan](docs/Model/CustomerPlan.md)
 - [DataListAccount](docs/Model/DataListAccount.md)
 - [DataListCustomerBill](docs/Model/DataListCustomerBill.md)
 - [DataListCustomerPlan](docs/Model/DataListCustomerPlan.md)
 - [DataListPaymentRequest](docs/Model/DataListPaymentRequest.md)
 - [DataListUserApi](docs/Model/DataListUserApi.md)
 - [Email](docs/Model/Email.md)
 - [EmailRecover](docs/Model/EmailRecover.md)
 - [GoogleAuth](docs/Model/GoogleAuth.md)
 - [GoogleTokenId](docs/Model/GoogleTokenId.md)
 - [Login](docs/Model/Login.md)
 - [OneTimePay](docs/Model/OneTimePay.md)
 - [OperatorConfiguration](docs/Model/OperatorConfiguration.md)
 - [PaymentRequest](docs/Model/PaymentRequest.md)
 - [Plan](docs/Model/Plan.md)
 - [Price](docs/Model/Price.md)
 - [ResourcePatch](docs/Model/ResourcePatch.md)
 - [ResourcePatchResult](docs/Model/ResourcePatchResult.md)
 - [S4sError](docs/Model/S4sError.md)
 - [Session](docs/Model/Session.md)
 - [StripeCustomer](docs/Model/StripeCustomer.md)
 - [Subscription](docs/Model/Subscription.md)
 - [User](docs/Model/User.md)
 - [UserApi](docs/Model/UserApi.md)
 - [UserConfig](docs/Model/UserConfig.md)
 - [UserContact](docs/Model/UserContact.md)
 - [UtUser](docs/Model/UtUser.md)


## Documentation For Authorization


## tenantid

- **Type**: API key
- **API key parameter name**: tenantid
- **Location**: URL query string

## token

- **Type**: API key
- **API key parameter name**: token
- **Location**: URL query string


## Author




