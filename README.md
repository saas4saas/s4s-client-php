# S4sFull
description

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: stable
- Build date: 2016-11-04T17:12:12.887Z
- Build package: class io.swagger.codegen.languages.PhpClientCodegen
For more information, please visit [No URL avaiable yet](No URL avaiable yet)

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
    require_once('/path/to/S4sFull/autoload.php');
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

## Documentation for API Endpoints

All URIs are relative to *https://api.saas4saas.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*SsPaymentApi* | [**conf**](docs/Api/SsPaymentApi.md#conf) | **GET** /s4s-payment/conf | 
*SsPaymentApi* | [**customerInfoCurrency**](docs/Api/SsPaymentApi.md#customerinfocurrency) | **GET** /s4s-payment/customer/{customer-id}/info/currency | 
*SsPaymentApi* | [**customerInfoGet**](docs/Api/SsPaymentApi.md#customerinfoget) | **GET** /s4s-payment/customer/{customer-id}/info | 
*SsPaymentApi* | [**customerInfoHasPaymentInfo**](docs/Api/SsPaymentApi.md#customerinfohaspaymentinfo) | **GET** /s4s-payment/customer/{customer-id}/info/hasPaymentInfo | 
*SsPaymentApi* | [**customerInfoStripeCustomer**](docs/Api/SsPaymentApi.md#customerinfostripecustomer) | **POST** /s4s-payment/customer/{customer-id}/info/stripeCustomer | 
*SsPaymentApi* | [**customerPaymentAdd**](docs/Api/SsPaymentApi.md#customerpaymentadd) | **POST** /s4s-payment/customer/{customer-id}/payment | 
*SsPaymentApi* | [**customerPaymentCancelPatch**](docs/Api/SsPaymentApi.md#customerpaymentcancelpatch) | **PATCH** /s4s-payment/customer/{customer-id}/payment/{payment-id}/cancel | 
*SsPaymentApi* | [**customerPaymentGet**](docs/Api/SsPaymentApi.md#customerpaymentget) | **GET** /s4s-payment/customer/{customer-id}/payment | 
*SsPaymentApi* | [**customerPaymentPayPatch**](docs/Api/SsPaymentApi.md#customerpaymentpaypatch) | **PATCH** /s4s-payment/customer/{customer-id}/payment/{payment-id}/pay | 
*SsPaymentApi* | [**customerPaymentValues**](docs/Api/SsPaymentApi.md#customerpaymentvalues) | **GET** /s4s-payment/customer/{customer-id}/payment/values | 
*SsPaymentApi* | [**paymentConfigGet**](docs/Api/SsPaymentApi.md#paymentconfigget) | **GET** /s4s-payment/paymentConfig | 
*SsPaymentApi* | [**paymentConfigPut**](docs/Api/SsPaymentApi.md#paymentconfigput) | **PUT** /s4s-payment/paymentConfig | 
*SsPaymentApi* | [**paymentGetAll**](docs/Api/SsPaymentApi.md#paymentgetall) | **GET** /s4s-payment/payment | 
*SsPricingApi* | [**customerBillClose**](docs/Api/SsPricingApi.md#customerbillclose) | **GET** /s4s-pricing/customer/{customer-id}/bill/{customer-bill-id}/close | 
*SsPricingApi* | [**customerBillGet**](docs/Api/SsPricingApi.md#customerbillget) | **GET** /s4s-pricing/customer/{customer-id}/bill/{customer-bill-id} | 
*SsPricingApi* | [**customerBillInitGet**](docs/Api/SsPricingApi.md#customerbillinitget) | **GET** /s4s-pricing/customer/{customer-id}/bill/init | 
*SsPricingApi* | [**customerBillInitPost**](docs/Api/SsPricingApi.md#customerbillinitpost) | **GET** /s4s-pricing/customer/{customer-id}/bill/initPost | 
*SsPricingApi* | [**customerBillOrGet**](docs/Api/SsPricingApi.md#customerbillorget) | **GET** /s4s-pricing/customer/{customer-id}/bill/or | 
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
*SsPricingApi* | [**pricing**](docs/Api/SsPricingApi.md#pricing) | **GET** /s4s-pricing/pricing | 
*SsPricingApi* | [**pricing2**](docs/Api/SsPricingApi.md#pricing2) | **GET** /s4s-pricing/pricing2 | 
*SsPricingApi* | [**pricingConfigGet**](docs/Api/SsPricingApi.md#pricingconfigget) | **GET** /s4s-pricing/pricingConfig | 
*SsPricingApi* | [**pricingConfigPut**](docs/Api/SsPricingApi.md#pricingconfigput) | **PUT** /s4s-pricing/pricingConfig | 
*SsPricingApi* | [**pricingUiConf**](docs/Api/SsPricingApi.md#pricinguiconf) | **GET** /s4s-pricing/pricingUiConf | 
*SsPricingApi* | [**pricingUiConfigGet**](docs/Api/SsPricingApi.md#pricinguiconfigget) | **GET** /s4s-pricing/pricingUiConfig | 
*SsPricingApi* | [**pricingUiConfigPut**](docs/Api/SsPricingApi.md#pricinguiconfigput) | **PUT** /s4s-pricing/pricingUiConfig | 
*SsProductApi* | [**customerEnjoyAdd**](docs/Api/SsProductApi.md#customerenjoyadd) | **POST** /s4s-product/customer/{customer-id}/enjoy | 
*SsProductApi* | [**customerEnjoyClose**](docs/Api/SsProductApi.md#customerenjoyclose) | **GET** /s4s-product/customer/{customer-id}/enjoy/{enjoy-id}/close | 
*SsProductApi* | [**customerEnjoyGet**](docs/Api/SsProductApi.md#customerenjoyget) | **GET** /s4s-product/customer/{customer-id}/enjoy/{enjoy-id} | 
*SsProductApi* | [**customerEnjoyGetAll**](docs/Api/SsProductApi.md#customerenjoygetall) | **GET** /s4s-product/customer/{customer-id}/enjoy | 
*SsProductApi* | [**customerEnjoySpend**](docs/Api/SsProductApi.md#customerenjoyspend) | **GET** /s4s-product/customer/{customer-id}/enjoy/{customer-pack-id}/spend | 
*SsProductApi* | [**customerEnjoyValues**](docs/Api/SsProductApi.md#customerenjoyvalues) | **GET** /s4s-product/customer/{customer-id}/enjoy/values | 
*SsProductApi* | [**customerHistoryPackGet**](docs/Api/SsProductApi.md#customerhistorypackget) | **GET** /s4s-product/customer/{customer-id}/history/pack/{id} | 
*SsProductApi* | [**customerHistoryPackGetAll**](docs/Api/SsProductApi.md#customerhistorypackgetall) | **GET** /s4s-product/customer/{customer-id}/history/pack | 
*SsProductApi* | [**customerHistoryPackValues**](docs/Api/SsProductApi.md#customerhistorypackvalues) | **GET** /s4s-product/customer/{customer-id}/history/pack/values | 
*SsProductApi* | [**customerHistorySubscriptionGet**](docs/Api/SsProductApi.md#customerhistorysubscriptionget) | **GET** /s4s-product/customer/{customer-id}/history/subscription/{id} | 
*SsProductApi* | [**customerHistorySubscriptionGetAll**](docs/Api/SsProductApi.md#customerhistorysubscriptiongetall) | **GET** /s4s-product/customer/{customer-id}/history/subscription | 
*SsProductApi* | [**customerHistorySubscriptionValues**](docs/Api/SsProductApi.md#customerhistorysubscriptionvalues) | **GET** /s4s-product/customer/{customer-id}/history/subscription/values | 
*SsProductApi* | [**customerResource**](docs/Api/SsProductApi.md#customerresource) | **GET** /s4s-product/customer/{customer-id}/resource | 
*SsProductApi* | [**customerSubscriptionAdd**](docs/Api/SsProductApi.md#customersubscriptionadd) | **POST** /s4s-product/customer/{customer-id}/subscription | 
*SsProductApi* | [**customerSubscriptionClose**](docs/Api/SsProductApi.md#customersubscriptionclose) | **GET** /s4s-product/customer/{customer-id}/subscription/{subscription-id}/close | 
*SsProductApi* | [**customerSubscriptionGet**](docs/Api/SsProductApi.md#customersubscriptionget) | **GET** /s4s-product/customer/{customer-id}/subscription/{subscription-id} | 
*SsProductApi* | [**customerSubscriptionGetAll**](docs/Api/SsProductApi.md#customersubscriptiongetall) | **GET** /s4s-product/customer/{customer-id}/subscription | 
*SsProductApi* | [**customerSubscriptionRenew**](docs/Api/SsProductApi.md#customersubscriptionrenew) | **GET** /s4s-product/customer/{customer-id}/subscription/{subscription-id}/renew | 
*SsProductApi* | [**customerSubscriptionSpend**](docs/Api/SsProductApi.md#customersubscriptionspend) | **GET** /s4s-product/customer/{customer-id}/subscription/{customer-subscription-id}/spend | 
*SsProductApi* | [**customerSubscriptionValues**](docs/Api/SsProductApi.md#customersubscriptionvalues) | **GET** /s4s-product/customer/{customer-id}/subscription/values | 
*SsProductApi* | [**productConfigGet**](docs/Api/SsProductApi.md#productconfigget) | **GET** /s4s-product/productConfig | 
*SsProductApi* | [**productConfigPut**](docs/Api/SsProductApi.md#productconfigput) | **PUT** /s4s-product/productConfig | 
*SsResourceApi* | [**customerResourceGet**](docs/Api/SsResourceApi.md#customerresourceget) | **GET** /s4s-resource/customer/{customer-id}/resource/{resourceid} | 
*SsResourceApi* | [**customerResourceLimitGet**](docs/Api/SsResourceApi.md#customerresourcelimitget) | **GET** /s4s-resource/customer/{customer-id}/resource/{resourceid}/limit | 
*SsResourceApi* | [**customerResourcePatch**](docs/Api/SsResourceApi.md#customerresourcepatch) | **PATCH** /s4s-resource/customer/{customer-id}/resource/{resourceid} | 
*SsResourceApi* | [**customerResourceProductGet**](docs/Api/SsResourceApi.md#customerresourceproductget) | **GET** /s4s-resource/customer/{customer-id}/resource/{resourceid}/product/{customer-product-id} | 
*SsResourceApi* | [**customerResourceProductLimitGet**](docs/Api/SsResourceApi.md#customerresourceproductlimitget) | **GET** /s4s-resource/customer/{customer-id}/resource/{resourceid}/product/{customer-product-id}/limit | 
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
*SsUserApi* | [**htmlConf**](docs/Api/SsUserApi.md#htmlconf) | **GET** /s4s-user/htmlConf | 
*SsUserApi* | [**selfAccountGet**](docs/Api/SsUserApi.md#selfaccountget) | **GET** /s4s-user/selfAccount | 
*SsUserApi* | [**selfAccountKeysAdd**](docs/Api/SsUserApi.md#selfaccountkeysadd) | **POST** /s4s-user/selfAccount/keys | 
*SsUserApi* | [**selfAccountKeysDel**](docs/Api/SsUserApi.md#selfaccountkeysdel) | **DELETE** /s4s-user/selfAccount/keys/{user-id} | 
*SsUserApi* | [**selfAccountKeysGetAll**](docs/Api/SsUserApi.md#selfaccountkeysgetall) | **GET** /s4s-user/selfAccount/keys | 
*SsUserApi* | [**selfAccountPrivateDataPut**](docs/Api/SsUserApi.md#selfaccountprivatedataput) | **PUT** /s4s-user/selfAccount/privateData | 
*SsUserApi* | [**selfAccountPut**](docs/Api/SsUserApi.md#selfaccountput) | **PUT** /s4s-user/selfAccount | 
*SsUserApi* | [**selfAccountStatusPut**](docs/Api/SsUserApi.md#selfaccountstatusput) | **PUT** /s4s-user/selfAccount/status | 
*SsUserApi* | [**selfAccountUserAdd**](docs/Api/SsUserApi.md#selfaccountuseradd) | **POST** /s4s-user/selfAccount/user | 
*SsUserApi* | [**selfAccountUserChangePwdToken**](docs/Api/SsUserApi.md#selfaccountuserchangepwdtoken) | **GET** /s4s-user/selfAccount/user/{user-id}/changePwdToken | 
*SsUserApi* | [**selfAccountUserGet**](docs/Api/SsUserApi.md#selfaccountuserget) | **GET** /s4s-user/selfAccount/user/{user-id} | 
*SsUserApi* | [**selfAccountUserLogin**](docs/Api/SsUserApi.md#selfaccountuserlogin) | **GET** /s4s-user/selfAccount/user/{user-id}/login | 
*SsUserApi* | [**selfAccountUserPut**](docs/Api/SsUserApi.md#selfaccountuserput) | **PUT** /s4s-user/selfAccount/user/{user-id} | 
*SsUserApi* | [**selfAccountUserResendEmailConfirmation**](docs/Api/SsUserApi.md#selfaccountuserresendemailconfirmation) | **GET** /s4s-user/selfAccount/user/{user-id}/resendEmailConfirmation | 
*SsUserApi* | [**selfUserChangePwdToken**](docs/Api/SsUserApi.md#selfuserchangepwdtoken) | **GET** /s4s-user/selfUser/changePwdToken | 
*SsUserApi* | [**selfUserGet**](docs/Api/SsUserApi.md#selfuserget) | **GET** /s4s-user/selfUser | 
*SsUserApi* | [**selfUserLogin**](docs/Api/SsUserApi.md#selfuserlogin) | **GET** /s4s-user/selfUser/login | 
*SsUserApi* | [**selfUserPut**](docs/Api/SsUserApi.md#selfuserput) | **PUT** /s4s-user/selfUser | 
*SsUserApi* | [**selfUserResendEmailConfirmation**](docs/Api/SsUserApi.md#selfuserresendemailconfirmation) | **GET** /s4s-user/selfUser/resendEmailConfirmation | 
*SsUserApi* | [**userConfigGet**](docs/Api/SsUserApi.md#userconfigget) | **GET** /s4s-user/userConfig | 
*SsUserApi* | [**userConfigPut**](docs/Api/SsUserApi.md#userconfigput) | **PUT** /s4s-user/userConfig | 
*SsUserApi* | [**userUiConfigGet**](docs/Api/SsUserApi.md#useruiconfigget) | **GET** /s4s-user/userUiConfig | 
*SsUserApi* | [**userUiConfigPut**](docs/Api/SsUserApi.md#useruiconfigput) | **PUT** /s4s-user/userUiConfig | 
*SsUserNotificationApi* | [**operatorConf**](docs/Api/SsUserNotificationApi.md#operatorconf) | **GET** /s4s-user-notification/operator/conf/{notification-key} | 
*SsUserNotificationApi* | [**operatorSend**](docs/Api/SsUserNotificationApi.md#operatorsend) | **GET** /s4s-user-notification/operator/send/{notification-key} | 
*SsUserNotificationApi* | [**operatorSendEmail**](docs/Api/SsUserNotificationApi.md#operatorsendemail) | **POST** /s4s-user-notification/operator/sendEmail | 
*SsUserNotificationApi* | [**userSend**](docs/Api/SsUserNotificationApi.md#usersend) | **GET** /s4s-user-notification/user/send/{notification-key} | 
*SsUserNotificationApi* | [**userSendEmail**](docs/Api/SsUserNotificationApi.md#usersendemail) | **POST** /s4s-user-notification/user/sendEmail | 


## Documentation For Models

 - [Account](docs/Model/Account.md)
 - [CustomerBill](docs/Model/CustomerBill.md)
 - [CustomerInfo](docs/Model/CustomerInfo.md)
 - [CustomerPack](docs/Model/CustomerPack.md)
 - [CustomerPackSubscription](docs/Model/CustomerPackSubscription.md)
 - [CustomerPayment](docs/Model/CustomerPayment.md)
 - [CustomerPlan](docs/Model/CustomerPlan.md)
 - [CustomerPlanPeriod](docs/Model/CustomerPlanPeriod.md)
 - [Email](docs/Model/Email.md)
 - [EmailRecover](docs/Model/EmailRecover.md)
 - [FinalInterval](docs/Model/FinalInterval.md)
 - [GoogleAuth](docs/Model/GoogleAuth.md)
 - [GoogleTokenId](docs/Model/GoogleTokenId.md)
 - [Login](docs/Model/Login.md)
 - [OneTimePay](docs/Model/OneTimePay.md)
 - [OperatorConfiguration](docs/Model/OperatorConfiguration.md)
 - [Pack](docs/Model/Pack.md)
 - [PaymentConf](docs/Model/PaymentConf.md)
 - [PaymentPaypal](docs/Model/PaymentPaypal.md)
 - [PaymentRequest](docs/Model/PaymentRequest.md)
 - [Plan](docs/Model/Plan.md)
 - [Price](docs/Model/Price.md)
 - [PricingConf](docs/Model/PricingConf.md)
 - [PricingPolicy](docs/Model/PricingPolicy.md)
 - [PricingTable2Full](docs/Model/PricingTable2Full.md)
 - [PricingTable2Plan](docs/Model/PricingTable2Plan.md)
 - [PricingTableFull](docs/Model/PricingTableFull.md)
 - [PricingTablePack](docs/Model/PricingTablePack.md)
 - [PricingTablePlan](docs/Model/PricingTablePlan.md)
 - [PricingTablePlanCost](docs/Model/PricingTablePlanCost.md)
 - [PricingTableResource](docs/Model/PricingTableResource.md)
 - [PricingUiConf](docs/Model/PricingUiConf.md)
 - [PricingUiConfPack](docs/Model/PricingUiConfPack.md)
 - [PricingUiConfPlan](docs/Model/PricingUiConfPlan.md)
 - [PricingUiConfResource](docs/Model/PricingUiConfResource.md)
 - [ProductConf](docs/Model/ProductConf.md)
 - [QuantiyIntervalPrice](docs/Model/QuantiyIntervalPrice.md)
 - [Resource](docs/Model/Resource.md)
 - [ResourcePatch](docs/Model/ResourcePatch.md)
 - [ResourcePatchResult](docs/Model/ResourcePatchResult.md)
 - [ResourceStatus](docs/Model/ResourceStatus.md)
 - [S4sError](docs/Model/S4sError.md)
 - [Session](docs/Model/Session.md)
 - [StripeAccessCode](docs/Model/StripeAccessCode.md)
 - [StripeConf](docs/Model/StripeConf.md)
 - [StripeCustomer](docs/Model/StripeCustomer.md)
 - [Subscription](docs/Model/Subscription.md)
 - [User](docs/Model/User.md)
 - [UserApi](docs/Model/UserApi.md)
 - [UserConfig](docs/Model/UserConfig.md)
 - [UserContact](docs/Model/UserContact.md)
 - [UserEntity](docs/Model/UserEntity.md)
 - [UserUiConf](docs/Model/UserUiConf.md)
 - [UtUser](docs/Model/UtUser.md)
 - [VariableCost](docs/Model/VariableCost.md)
 - [VariableCostIntervalCost](docs/Model/VariableCostIntervalCost.md)
 - [VariableCostIntervalPerUnit](docs/Model/VariableCostIntervalPerUnit.md)
 - [VariableCostPerUnit](docs/Model/VariableCostPerUnit.md)


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

rui.p.oliveira@impactinglabs.com


