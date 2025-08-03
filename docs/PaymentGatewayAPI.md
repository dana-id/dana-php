# PaymentGatewayApi

All URIs are relative to http://api.sandbox.dana.id for sandbox and https://api.saas.dana.id for production.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelOrder()**](PaymentGatewayApi.md#cancelOrder) | **POST** /payment-gateway/v1.0/debit/cancel.htm | Cancel Order - Payment Gateway |
| [**consultPay()**](PaymentGatewayApi.md#consultPay) | **POST** /v1.0/payment-gateway/consult-pay.htm | Consult Pay - Payment Gateway |
| [**createOrder()**](PaymentGatewayApi.md#createOrder) | **POST** /payment-gateway/v1.0/debit/payment-host-to-host.htm | Create Order - Payment Gateway |
| [**queryPayment()**](PaymentGatewayApi.md#queryPayment) | **POST** /payment-gateway/v1.0/debit/status.htm | Query Payment - Payment Gateway |
| [**refundOrder()**](PaymentGatewayApi.md#refundOrder) | **POST** /payment-gateway/v1.0/debit/refund.htm | Refund Order - Payment Gateway |


## `cancelOrder()`

```php
cancelOrder($cancelOrderRequest): \Dana\PaymentGateway\v1\Model\CancelOrderResponse
```

Cancel Order - Payment Gateway

This API is used to cancel the order from merchant's platform to DANA

### Example

```php
<?php
use Dana\Configuration;
use Dana\Env;
use Dana\PaymentGateway\v1\Api\PaymentGatewayApi;
use ;

// Set up configuration with authentication settings
$configuration = new Configuration();

// The Configuration constructor automatically loads values from environment variables
// Choose one of PRIVATE_KEY or PRIVATE_KEY_PATH to set, if you set both, PRIVATE_KEY will be ignored
$configuration->setApiKey('PRIVATE_KEY', getenv('PRIVATE_KEY'));
// $configuration->setApiKey('PRIVATE_KEY_PATH', getenv('PRIVATE_KEY_PATH'));
$configuration->setApiKey('ORIGIN', getenv('ORIGIN'));
$configuration->setApiKey('X_PARTNER_ID', getenv('X_PARTNER_ID'));
$configuration->setApiKey('DANA_ENV', Env::SANDBOX);
$configuration->setApiKey('ENV', Env::SANDBOX);



$apiInstance = new PaymentGatewayApi(
    null, // this also can be set to custom http client which implements `GuzzleHttp\ClientInterface`
    $configuration
);
$cancelOrderRequest = CancelOrderRequest();

try {
    $result = $apiInstance->cancelOrder($cancelOrderRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentGatewayApi->cancelOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Payload

[****](./PaymentGateway/.md)

### Return type

[**\Dana\PaymentGateway\v1\Model\CancelOrderResponse**](./PaymentGateway/CancelOrderResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `consultPay()`

```php
consultPay($consultPayRequest): \Dana\PaymentGateway\v1\Model\ConsultPayResponse
```

Consult Pay - Payment Gateway

This API is used to consult the list of payment methods or payment channels that user has and used in certain transactions or orders

### Example

```php
<?php
use Dana\Configuration;
use Dana\Env;
use Dana\PaymentGateway\v1\Api\PaymentGatewayApi;
use ;

// Set up configuration with authentication settings
$configuration = new Configuration();

// The Configuration constructor automatically loads values from environment variables
// Choose one of PRIVATE_KEY or PRIVATE_KEY_PATH to set, if you set both, PRIVATE_KEY will be ignored
$configuration->setApiKey('PRIVATE_KEY', getenv('PRIVATE_KEY'));
// $configuration->setApiKey('PRIVATE_KEY_PATH', getenv('PRIVATE_KEY_PATH'));
$configuration->setApiKey('ORIGIN', getenv('ORIGIN'));
$configuration->setApiKey('X_PARTNER_ID', getenv('X_PARTNER_ID'));
$configuration->setApiKey('DANA_ENV', Env::SANDBOX);
$configuration->setApiKey('ENV', Env::SANDBOX);



$apiInstance = new PaymentGatewayApi(
    null, // this also can be set to custom http client which implements `GuzzleHttp\ClientInterface`
    $configuration
);
$consultPayRequest = ConsultPayRequest();

try {
    $result = $apiInstance->consultPay($consultPayRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentGatewayApi->consultPay: ', $e->getMessage(), PHP_EOL;
}
```

### Payload

[****](./PaymentGateway/.md)

### Return type

[**\Dana\PaymentGateway\v1\Model\ConsultPayResponse**](./PaymentGateway/ConsultPayResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrder()`

```php
createOrder($createOrderRequest): \Dana\PaymentGateway\v1\Model\CreateOrderResponse
```

Create Order - Payment Gateway

This API is used for merchant to create order in DANA side

### Example

```php
<?php
use Dana\Configuration;
use Dana\Env;
use Dana\PaymentGateway\v1\Api\PaymentGatewayApi;
use ;

// Set up configuration with authentication settings
$configuration = new Configuration();

// The Configuration constructor automatically loads values from environment variables
// Choose one of PRIVATE_KEY or PRIVATE_KEY_PATH to set, if you set both, PRIVATE_KEY will be ignored
$configuration->setApiKey('PRIVATE_KEY', getenv('PRIVATE_KEY'));
// $configuration->setApiKey('PRIVATE_KEY_PATH', getenv('PRIVATE_KEY_PATH'));
$configuration->setApiKey('ORIGIN', getenv('ORIGIN'));
$configuration->setApiKey('X_PARTNER_ID', getenv('X_PARTNER_ID'));
$configuration->setApiKey('DANA_ENV', Env::SANDBOX);
$configuration->setApiKey('ENV', Env::SANDBOX);



$apiInstance = new PaymentGatewayApi(
    null, // this also can be set to custom http client which implements `GuzzleHttp\ClientInterface`
    $configuration
);
$createOrderRequest = CreateOrderRequest();

try {
    $result = $apiInstance->createOrder($createOrderRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentGatewayApi->createOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Payload

[****](./PaymentGateway/.md)

### Return type

[**\Dana\PaymentGateway\v1\Model\CreateOrderResponse**](./PaymentGateway/CreateOrderResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryPayment()`

```php
queryPayment($queryPaymentRequest): \Dana\PaymentGateway\v1\Model\QueryPaymentResponse
```

Query Payment - Payment Gateway

This API is used to inquiry payment status and information from merchant's platform to DANA

### Example

```php
<?php
use Dana\Configuration;
use Dana\Env;
use Dana\PaymentGateway\v1\Api\PaymentGatewayApi;
use ;

// Set up configuration with authentication settings
$configuration = new Configuration();

// The Configuration constructor automatically loads values from environment variables
// Choose one of PRIVATE_KEY or PRIVATE_KEY_PATH to set, if you set both, PRIVATE_KEY will be ignored
$configuration->setApiKey('PRIVATE_KEY', getenv('PRIVATE_KEY'));
// $configuration->setApiKey('PRIVATE_KEY_PATH', getenv('PRIVATE_KEY_PATH'));
$configuration->setApiKey('ORIGIN', getenv('ORIGIN'));
$configuration->setApiKey('X_PARTNER_ID', getenv('X_PARTNER_ID'));
$configuration->setApiKey('DANA_ENV', Env::SANDBOX);
$configuration->setApiKey('ENV', Env::SANDBOX);



$apiInstance = new PaymentGatewayApi(
    null, // this also can be set to custom http client which implements `GuzzleHttp\ClientInterface`
    $configuration
);
$queryPaymentRequest = QueryPaymentRequest();

try {
    $result = $apiInstance->queryPayment($queryPaymentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentGatewayApi->queryPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Payload

[****](./PaymentGateway/.md)

### Return type

[**\Dana\PaymentGateway\v1\Model\QueryPaymentResponse**](./PaymentGateway/QueryPaymentResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `refundOrder()`

```php
refundOrder($refundOrderRequest): \Dana\PaymentGateway\v1\Model\RefundOrderResponse
```

Refund Order - Payment Gateway

This API is used to refund the order from merchant's platform to DANA

### Example

```php
<?php
use Dana\Configuration;
use Dana\Env;
use Dana\PaymentGateway\v1\Api\PaymentGatewayApi;
use ;

// Set up configuration with authentication settings
$configuration = new Configuration();

// The Configuration constructor automatically loads values from environment variables
// Choose one of PRIVATE_KEY or PRIVATE_KEY_PATH to set, if you set both, PRIVATE_KEY will be ignored
$configuration->setApiKey('PRIVATE_KEY', getenv('PRIVATE_KEY'));
// $configuration->setApiKey('PRIVATE_KEY_PATH', getenv('PRIVATE_KEY_PATH'));
$configuration->setApiKey('ORIGIN', getenv('ORIGIN'));
$configuration->setApiKey('X_PARTNER_ID', getenv('X_PARTNER_ID'));
$configuration->setApiKey('DANA_ENV', Env::SANDBOX);
$configuration->setApiKey('ENV', Env::SANDBOX);



$apiInstance = new PaymentGatewayApi(
    null, // this also can be set to custom http client which implements `GuzzleHttp\ClientInterface`
    $configuration
);
$refundOrderRequest = RefundOrderRequest();

try {
    $result = $apiInstance->refundOrder($refundOrderRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentGatewayApi->refundOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Payload

[****](./PaymentGateway/.md)

### Return type

[**\Dana\PaymentGateway\v1\Model\RefundOrderResponse**](./PaymentGateway/RefundOrderResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
