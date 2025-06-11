# DanaPhp

API for doing operations in DANA Payment Gateway (Gapura)


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/DanaPhp/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: ORIGIN
$config = DanaPhp.\Configuration::getDefaultConfiguration()->setApiKey('ORIGIN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = DanaPhp.\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ORIGIN', 'Bearer');

// Configure API key authorization: X_PARTNER_ID
$config = DanaPhp.\Configuration::getDefaultConfiguration()->setApiKey('X-PARTNER-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = DanaPhp.\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-PARTNER-ID', 'Bearer');

// Configure API key authorization: CHANNEL_ID
$config = DanaPhp.\Configuration::getDefaultConfiguration()->setApiKey('CHANNEL-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = DanaPhp.\Configuration::getDefaultConfiguration()->setApiKeyPrefix('CHANNEL-ID', 'Bearer');

// Configure API key authorization: PRIVATE_KEY
$config = DanaPhp.\Configuration::getDefaultConfiguration()->setApiKey('privatekey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = DanaPhp.\Configuration::getDefaultConfiguration()->setApiKeyPrefix('privatekey', 'Bearer');

// Configure API key authorization: PRIVATE_KEY_PATH
$config = DanaPhp.\Configuration::getDefaultConfiguration()->setApiKey('privatekeypath', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = DanaPhp.\Configuration::getDefaultConfiguration()->setApiKeyPrefix('privatekeypath', 'Bearer');


$apiInstance = new DanaPhp.\Api\PaymentGatewayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cancel_order_request = new \DanaPhp.\Model\CancelOrderRequest(); // \DanaPhp.\Model\CancelOrderRequest

try {
    $result = $apiInstance->cancelOrder($cancel_order_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentGatewayApi->cancelOrder: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.saas.dana.id*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*PaymentGatewayApi* | [**cancelOrder**](docs/Api/PaymentGatewayApi.md#cancelorder) | **POST** /payment-gateway/v1.0/debit/cancel.htm | Cancel Order - Payment Gateway
*PaymentGatewayApi* | [**consultPay**](docs/Api/PaymentGatewayApi.md#consultpay) | **POST** /v1.0/payment-gateway/consult-pay.htm | Consult Pay - Payment Gateway
*PaymentGatewayApi* | [**createOrder**](docs/Api/PaymentGatewayApi.md#createorder) | **POST** /payment-gateway/v1.0/debit/payment-host-to-host.htm | Create Order - Payment Gateway
*PaymentGatewayApi* | [**queryPayment**](docs/Api/PaymentGatewayApi.md#querypayment) | **POST** /payment-gateway/v1.0/debit/status.htm | Query Payment - Payment Gateway
*PaymentGatewayApi* | [**refundOrder**](docs/Api/PaymentGatewayApi.md#refundorder) | **POST** /payment-gateway/v1.0/debit/refund.htm | Refund Order - Payment Gateway

## Models

- [ActorContext](docs/Model/ActorContext.md)
- [AmountDetail](docs/Model/AmountDetail.md)
- [AuditInfo](docs/Model/AuditInfo.md)
- [Buyer](docs/Model/Buyer.md)
- [CancelOrderRequest](docs/Model/CancelOrderRequest.md)
- [CancelOrderResponse](docs/Model/CancelOrderResponse.md)
- [ConsultPayPaymentInfo](docs/Model/ConsultPayPaymentInfo.md)
- [ConsultPayRequest](docs/Model/ConsultPayRequest.md)
- [ConsultPayRequestAdditionalInfo](docs/Model/ConsultPayRequestAdditionalInfo.md)
- [ConsultPayResponse](docs/Model/ConsultPayResponse.md)
- [CreateOrderBaseAdditionalInfo](docs/Model/CreateOrderBaseAdditionalInfo.md)
- [CreateOrderBaseRequest](docs/Model/CreateOrderBaseRequest.md)
- [CreateOrderByApiAdditionalInfo](docs/Model/CreateOrderByApiAdditionalInfo.md)
- [CreateOrderByApiRequest](docs/Model/CreateOrderByApiRequest.md)
- [CreateOrderByRedirectAdditionalInfo](docs/Model/CreateOrderByRedirectAdditionalInfo.md)
- [CreateOrderByRedirectRequest](docs/Model/CreateOrderByRedirectRequest.md)
- [CreateOrderRequest](docs/Model/CreateOrderRequest.md)
- [CreateOrderResponse](docs/Model/CreateOrderResponse.md)
- [CreateOrderResponseAdditionalInfo](docs/Model/CreateOrderResponseAdditionalInfo.md)
- [EnvInfo](docs/Model/EnvInfo.md)
- [FinishNotifyPaymentInfo](docs/Model/FinishNotifyPaymentInfo.md)
- [FinishNotifyRequest](docs/Model/FinishNotifyRequest.md)
- [FinishNotifyRequestAdditionalInfo](docs/Model/FinishNotifyRequestAdditionalInfo.md)
- [FinishNotifyResponse](docs/Model/FinishNotifyResponse.md)
- [Goods](docs/Model/Goods.md)
- [Money](docs/Model/Money.md)
- [OrderApiObject](docs/Model/OrderApiObject.md)
- [OrderBase](docs/Model/OrderBase.md)
- [OrderRedirectObject](docs/Model/OrderRedirectObject.md)
- [PayOptionAdditionalInfo](docs/Model/PayOptionAdditionalInfo.md)
- [PayOptionDetail](docs/Model/PayOptionDetail.md)
- [PayOptionInfo](docs/Model/PayOptionInfo.md)
- [PaymentView](docs/Model/PaymentView.md)
- [PromoInfo](docs/Model/PromoInfo.md)
- [QueryPaymentRequest](docs/Model/QueryPaymentRequest.md)
- [QueryPaymentResponse](docs/Model/QueryPaymentResponse.md)
- [QueryPaymentResponseAdditionalInfo](docs/Model/QueryPaymentResponseAdditionalInfo.md)
- [RefundOptionBill](docs/Model/RefundOptionBill.md)
- [RefundOrderRequest](docs/Model/RefundOrderRequest.md)
- [RefundOrderRequestAdditionalInfo](docs/Model/RefundOrderRequestAdditionalInfo.md)
- [RefundOrderResponse](docs/Model/RefundOrderResponse.md)
- [Seller](docs/Model/Seller.md)
- [ShippingInfo](docs/Model/ShippingInfo.md)
- [ShopInfo](docs/Model/ShopInfo.md)
- [StatusDetail](docs/Model/StatusDetail.md)
- [TimeDetail](docs/Model/TimeDetail.md)
- [UrlParam](docs/Model/UrlParam.md)
- [VirtualAccountInfo](docs/Model/VirtualAccountInfo.md)

## Authorization

Authentication schemes defined for the API:
### PRIVATE_KEY

- **Type**: API key
- **API key parameter name**: privatekey
- **Location**: HTTP header


### PRIVATE_KEY_PATH

- **Type**: API key
- **API key parameter name**: privatekeypath
- **Location**: HTTP header


### ENV

- **Type**: API key
- **API key parameter name**: env
- **Location**: HTTP header


### ORIGIN

- **Type**: API key
- **API key parameter name**: ORIGIN
- **Location**: HTTP header


### X_PARTNER_ID

- **Type**: API key
- **API key parameter name**: X-PARTNER-ID
- **Location**: HTTP header


### CHANNEL_ID

- **Type**: API key
- **API key parameter name**: CHANNEL-ID
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
    - Generator version: `7.12.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
