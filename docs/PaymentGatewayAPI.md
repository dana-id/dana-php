# Dana\PaymentGateway\PaymentGatewayApi

All URIs are relative to https://api.saas.dana.id, except if the operation defines another base path.

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
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ORIGIN
$config = Dana\PaymentGateway\Configuration::getDefaultConfiguration()->setApiKey('ORIGIN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\PaymentGateway\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ORIGIN', 'Bearer');

// Configure API key authorization: X_PARTNER_ID
$config = Dana\PaymentGateway\Configuration::getDefaultConfiguration()->setApiKey('X-PARTNER-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\PaymentGateway\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-PARTNER-ID', 'Bearer');

// Configure API key authorization: CHANNEL_ID
$config = Dana\PaymentGateway\Configuration::getDefaultConfiguration()->setApiKey('CHANNEL-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\PaymentGateway\Configuration::getDefaultConfiguration()->setApiKeyPrefix('CHANNEL-ID', 'Bearer');

// Configure API key authorization: PRIVATE_KEY
$config = Dana\PaymentGateway\Configuration::getDefaultConfiguration()->setApiKey('privatekey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\PaymentGateway\Configuration::getDefaultConfiguration()->setApiKeyPrefix('privatekey', 'Bearer');

// Configure API key authorization: PRIVATE_KEY_PATH
$config = Dana\PaymentGateway\Configuration::getDefaultConfiguration()->setApiKey('privatekeypath', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\PaymentGateway\Configuration::getDefaultConfiguration()->setApiKeyPrefix('privatekeypath', 'Bearer');


$apiInstance = new Dana\PaymentGateway\Api\PaymentGatewayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cancelOrderRequest = new \Dana\PaymentGateway\v1\Model\CancelOrderRequest(); // \Dana\PaymentGateway\v1\Model\CancelOrderRequest

try {
    $result = $apiInstance->cancelOrder($cancelOrderRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentGatewayApi->cancelOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cancelOrderRequest** | [**\Dana\PaymentGateway\v1\Model\CancelOrderRequest**](./PaymentGateway/CancelOrderRequest.md)|  | |

### Return type

[**\Dana\PaymentGateway\v1\Model\CancelOrderResponse**](./PaymentGateway/CancelOrderResponse.md)

### Authorization

[ORIGIN](../../README.md#ORIGIN), [X_PARTNER_ID](../../README.md#X_PARTNER_ID), [CHANNEL_ID](../../README.md#CHANNEL_ID), [PRIVATE_KEY](../../README.md#PRIVATE_KEY), [PRIVATE_KEY_PATH](../../README.md#PRIVATE_KEY_PATH)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

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
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ORIGIN
$config = Dana\PaymentGateway\Configuration::getDefaultConfiguration()->setApiKey('ORIGIN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\PaymentGateway\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ORIGIN', 'Bearer');

// Configure API key authorization: X_PARTNER_ID
$config = Dana\PaymentGateway\Configuration::getDefaultConfiguration()->setApiKey('X-PARTNER-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\PaymentGateway\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-PARTNER-ID', 'Bearer');

// Configure API key authorization: CHANNEL_ID
$config = Dana\PaymentGateway\Configuration::getDefaultConfiguration()->setApiKey('CHANNEL-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\PaymentGateway\Configuration::getDefaultConfiguration()->setApiKeyPrefix('CHANNEL-ID', 'Bearer');

// Configure API key authorization: PRIVATE_KEY
$config = Dana\PaymentGateway\Configuration::getDefaultConfiguration()->setApiKey('privatekey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\PaymentGateway\Configuration::getDefaultConfiguration()->setApiKeyPrefix('privatekey', 'Bearer');

// Configure API key authorization: PRIVATE_KEY_PATH
$config = Dana\PaymentGateway\Configuration::getDefaultConfiguration()->setApiKey('privatekeypath', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\PaymentGateway\Configuration::getDefaultConfiguration()->setApiKeyPrefix('privatekeypath', 'Bearer');

// Configure API key authorization: ENV
$config = Dana\PaymentGateway\Configuration::getDefaultConfiguration()->setApiKey('env', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\PaymentGateway\Configuration::getDefaultConfiguration()->setApiKeyPrefix('env', 'Bearer');


$apiInstance = new Dana\PaymentGateway\Api\PaymentGatewayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$consultPayRequest = new \Dana\PaymentGateway\v1\Model\ConsultPayRequest(); // \Dana\PaymentGateway\v1\Model\ConsultPayRequest

try {
    $result = $apiInstance->consultPay($consultPayRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentGatewayApi->consultPay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **consultPayRequest** | [**\Dana\PaymentGateway\v1\Model\ConsultPayRequest**](./PaymentGateway/ConsultPayRequest.md)|  | |

### Return type

[**\Dana\PaymentGateway\v1\Model\ConsultPayResponse**](./PaymentGateway/ConsultPayResponse.md)

### Authorization

[ORIGIN](../../README.md#ORIGIN), [X_PARTNER_ID](../../README.md#X_PARTNER_ID), [CHANNEL_ID](../../README.md#CHANNEL_ID), [PRIVATE_KEY](../../README.md#PRIVATE_KEY), [PRIVATE_KEY_PATH](../../README.md#PRIVATE_KEY_PATH), [ENV](../../README.md#ENV)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

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
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ORIGIN
$config = Dana\PaymentGateway\Configuration::getDefaultConfiguration()->setApiKey('ORIGIN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\PaymentGateway\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ORIGIN', 'Bearer');

// Configure API key authorization: X_PARTNER_ID
$config = Dana\PaymentGateway\Configuration::getDefaultConfiguration()->setApiKey('X-PARTNER-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\PaymentGateway\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-PARTNER-ID', 'Bearer');

// Configure API key authorization: CHANNEL_ID
$config = Dana\PaymentGateway\Configuration::getDefaultConfiguration()->setApiKey('CHANNEL-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\PaymentGateway\Configuration::getDefaultConfiguration()->setApiKeyPrefix('CHANNEL-ID', 'Bearer');

// Configure API key authorization: PRIVATE_KEY
$config = Dana\PaymentGateway\Configuration::getDefaultConfiguration()->setApiKey('privatekey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\PaymentGateway\Configuration::getDefaultConfiguration()->setApiKeyPrefix('privatekey', 'Bearer');

// Configure API key authorization: PRIVATE_KEY_PATH
$config = Dana\PaymentGateway\Configuration::getDefaultConfiguration()->setApiKey('privatekeypath', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\PaymentGateway\Configuration::getDefaultConfiguration()->setApiKeyPrefix('privatekeypath', 'Bearer');

// Configure API key authorization: ENV
$config = Dana\PaymentGateway\Configuration::getDefaultConfiguration()->setApiKey('env', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\PaymentGateway\Configuration::getDefaultConfiguration()->setApiKeyPrefix('env', 'Bearer');


$apiInstance = new Dana\PaymentGateway\Api\PaymentGatewayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createOrderRequest = new \Dana\PaymentGateway\v1\Model\CreateOrderRequest(); // \Dana\PaymentGateway\v1\Model\CreateOrderRequest

try {
    $result = $apiInstance->createOrder($createOrderRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentGatewayApi->createOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createOrderRequest** | [**\Dana\PaymentGateway\v1\Model\CreateOrderRequest**](./PaymentGateway/CreateOrderRequest.md)|  | |

### Return type

[**\Dana\PaymentGateway\v1\Model\CreateOrderResponse**](./PaymentGateway/CreateOrderResponse.md)

### Authorization

[ORIGIN](../../README.md#ORIGIN), [X_PARTNER_ID](../../README.md#X_PARTNER_ID), [CHANNEL_ID](../../README.md#CHANNEL_ID), [PRIVATE_KEY](../../README.md#PRIVATE_KEY), [PRIVATE_KEY_PATH](../../README.md#PRIVATE_KEY_PATH), [ENV](../../README.md#ENV)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

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
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ORIGIN
$config = Dana\PaymentGateway\Configuration::getDefaultConfiguration()->setApiKey('ORIGIN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\PaymentGateway\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ORIGIN', 'Bearer');

// Configure API key authorization: X_PARTNER_ID
$config = Dana\PaymentGateway\Configuration::getDefaultConfiguration()->setApiKey('X-PARTNER-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\PaymentGateway\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-PARTNER-ID', 'Bearer');

// Configure API key authorization: CHANNEL_ID
$config = Dana\PaymentGateway\Configuration::getDefaultConfiguration()->setApiKey('CHANNEL-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\PaymentGateway\Configuration::getDefaultConfiguration()->setApiKeyPrefix('CHANNEL-ID', 'Bearer');

// Configure API key authorization: PRIVATE_KEY
$config = Dana\PaymentGateway\Configuration::getDefaultConfiguration()->setApiKey('privatekey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\PaymentGateway\Configuration::getDefaultConfiguration()->setApiKeyPrefix('privatekey', 'Bearer');

// Configure API key authorization: PRIVATE_KEY_PATH
$config = Dana\PaymentGateway\Configuration::getDefaultConfiguration()->setApiKey('privatekeypath', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\PaymentGateway\Configuration::getDefaultConfiguration()->setApiKeyPrefix('privatekeypath', 'Bearer');


$apiInstance = new Dana\PaymentGateway\Api\PaymentGatewayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$queryPaymentRequest = new \Dana\PaymentGateway\v1\Model\QueryPaymentRequest(); // \Dana\PaymentGateway\v1\Model\QueryPaymentRequest

try {
    $result = $apiInstance->queryPayment($queryPaymentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentGatewayApi->queryPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **queryPaymentRequest** | [**\Dana\PaymentGateway\v1\Model\QueryPaymentRequest**](./PaymentGateway/QueryPaymentRequest.md)|  | |

### Return type

[**\Dana\PaymentGateway\v1\Model\QueryPaymentResponse**](./PaymentGateway/QueryPaymentResponse.md)

### Authorization

[ORIGIN](../../README.md#ORIGIN), [X_PARTNER_ID](../../README.md#X_PARTNER_ID), [CHANNEL_ID](../../README.md#CHANNEL_ID), [PRIVATE_KEY](../../README.md#PRIVATE_KEY), [PRIVATE_KEY_PATH](../../README.md#PRIVATE_KEY_PATH)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

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
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ORIGIN
$config = Dana\PaymentGateway\Configuration::getDefaultConfiguration()->setApiKey('ORIGIN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\PaymentGateway\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ORIGIN', 'Bearer');

// Configure API key authorization: X_PARTNER_ID
$config = Dana\PaymentGateway\Configuration::getDefaultConfiguration()->setApiKey('X-PARTNER-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\PaymentGateway\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-PARTNER-ID', 'Bearer');

// Configure API key authorization: CHANNEL_ID
$config = Dana\PaymentGateway\Configuration::getDefaultConfiguration()->setApiKey('CHANNEL-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\PaymentGateway\Configuration::getDefaultConfiguration()->setApiKeyPrefix('CHANNEL-ID', 'Bearer');

// Configure API key authorization: PRIVATE_KEY
$config = Dana\PaymentGateway\Configuration::getDefaultConfiguration()->setApiKey('privatekey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\PaymentGateway\Configuration::getDefaultConfiguration()->setApiKeyPrefix('privatekey', 'Bearer');

// Configure API key authorization: PRIVATE_KEY_PATH
$config = Dana\PaymentGateway\Configuration::getDefaultConfiguration()->setApiKey('privatekeypath', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\PaymentGateway\Configuration::getDefaultConfiguration()->setApiKeyPrefix('privatekeypath', 'Bearer');


$apiInstance = new Dana\PaymentGateway\Api\PaymentGatewayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$refundOrderRequest = new \Dana\PaymentGateway\v1\Model\RefundOrderRequest(); // \Dana\PaymentGateway\v1\Model\RefundOrderRequest

try {
    $result = $apiInstance->refundOrder($refundOrderRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentGatewayApi->refundOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **refundOrderRequest** | [**\Dana\PaymentGateway\v1\Model\RefundOrderRequest**](./PaymentGateway/RefundOrderRequest.md)|  | |

### Return type

[**\Dana\PaymentGateway\v1\Model\RefundOrderResponse**](./PaymentGateway/RefundOrderResponse.md)

### Authorization

[ORIGIN](../../README.md#ORIGIN), [X_PARTNER_ID](../../README.md#X_PARTNER_ID), [CHANNEL_ID](../../README.md#CHANNEL_ID), [PRIVATE_KEY](../../README.md#PRIVATE_KEY), [PRIVATE_KEY_PATH](../../README.md#PRIVATE_KEY_PATH)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
