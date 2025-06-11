# Dana\IPG\IPGApi

All URIs are relative to https://api.saas.dana.id, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**accountUnbinding()**](IPGApi.md#accountUnbinding) | **POST** /v1.0/registration-account-unbinding.htm | Account unbinding - Binding |
| [**applyOTT()**](IPGApi.md#applyOTT) | **POST** /rest/v1.1/qr/apply-ott | Apply OTT - IPG |
| [**applyToken()**](IPGApi.md#applyToken) | **POST** /v1.0/access-token/b2b2c.htm | Apply Token, required by Apply OTT - Binding |
| [**cancelOrder()**](IPGApi.md#cancelOrder) | **POST** /v1.0/debit/cancel.htm | Cancel Order - IPG |
| [**ipgPayment()**](IPGApi.md#ipgPayment) | **POST** /rest/redirection/v1.0/debit/payment-host-to-host | IPG payment - IPG |
| [**queryPayment()**](IPGApi.md#queryPayment) | **POST** /rest/v1.1/debit/status | Query Payment - IPG |
| [**refundOrder()**](IPGApi.md#refundOrder) | **POST** /v1.0/debit/refund.htm | Refund Order - IPG |


## `accountUnbinding()`

```php
accountUnbinding($account_unbinding_request): \Dana\IPG\v1\Model\AccountUnbindingResponse
```

Account unbinding - Binding

This API is used to reverses the account binding process by revoking the accessToken and refreshToken

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X_PARTNER_ID
$config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKey('X-PARTNER-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-PARTNER-ID', 'Bearer');

// Configure API key authorization: PRIVATE_KEY
$config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKey('privatekey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKeyPrefix('privatekey', 'Bearer');

// Configure API key authorization: PRIVATE_KEY_PATH
$config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKey('privatekeypath', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKeyPrefix('privatekeypath', 'Bearer');

// Configure API key authorization: ENV
$config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKey('env', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKeyPrefix('env', 'Bearer');


$apiInstance = new Dana\IPG\Api\IPGApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_unbinding_request = new \Dana\IPG\v1\Model\AccountUnbindingRequest(); // \Dana\IPG\v1\Model\AccountUnbindingRequest

try {
    $result = $apiInstance->accountUnbinding($account_unbinding_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IPGApi->accountUnbinding: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_unbinding_request** | [**\Dana\IPG\v1\Model\AccountUnbindingRequest**](./IPG/AccountUnbindingRequest.md)|  | |

### Return type

[**\Dana\IPG\v1\Model\AccountUnbindingResponse**](./IPG/AccountUnbindingResponse.md)

### Authorization

[X_PARTNER_ID](../../README.md#X_PARTNER_ID), [PRIVATE_KEY](../../README.md#PRIVATE_KEY), [PRIVATE_KEY_PATH](../../README.md#PRIVATE_KEY_PATH), [ENV](../../README.md#ENV)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `applyOTT()`

```php
applyOTT($apply_ott_request): \Dana\IPG\v1\Model\ApplyOTTResponse
```

Apply OTT - IPG

This API is used to get one time token that will be used as authorization parameter upon redirecting to DANA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ORIGIN
$config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKey('ORIGIN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ORIGIN', 'Bearer');

// Configure API key authorization: X_PARTNER_ID
$config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKey('X-PARTNER-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-PARTNER-ID', 'Bearer');

// Configure API key authorization: CHANNEL_ID
$config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKey('CHANNEL-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKeyPrefix('CHANNEL-ID', 'Bearer');

// Configure API key authorization: PRIVATE_KEY
$config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKey('privatekey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKeyPrefix('privatekey', 'Bearer');

// Configure API key authorization: PRIVATE_KEY_PATH
$config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKey('privatekeypath', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKeyPrefix('privatekeypath', 'Bearer');

// Configure API key authorization: ENV
$config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKey('env', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKeyPrefix('env', 'Bearer');


$apiInstance = new Dana\IPG\Api\IPGApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apply_ott_request = new \Dana\IPG\v1\Model\ApplyOTTRequest(); // \Dana\IPG\v1\Model\ApplyOTTRequest

try {
    $result = $apiInstance->applyOTT($apply_ott_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IPGApi->applyOTT: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **apply_ott_request** | [**\Dana\IPG\v1\Model\ApplyOTTRequest**](./IPG/ApplyOTTRequest.md)|  | |

### Return type

[**\Dana\IPG\v1\Model\ApplyOTTResponse**](./IPG/ApplyOTTResponse.md)

### Authorization

[ORIGIN](../../README.md#ORIGIN), [X_PARTNER_ID](../../README.md#X_PARTNER_ID), [CHANNEL_ID](../../README.md#CHANNEL_ID), [PRIVATE_KEY](../../README.md#PRIVATE_KEY), [PRIVATE_KEY_PATH](../../README.md#PRIVATE_KEY_PATH), [ENV](../../README.md#ENV)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `applyToken()`

```php
applyToken($apply_token_request): \Dana\IPG\v1\Model\ApplyTokenResponse
```

Apply Token, required by Apply OTT - Binding

This API is used to finalized account binding process by exchanging the authCode into accessToken that can be used as user authorization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X_PARTNER_ID
$config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKey('X-PARTNER-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-PARTNER-ID', 'Bearer');

// Configure API key authorization: PRIVATE_KEY
$config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKey('privatekey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKeyPrefix('privatekey', 'Bearer');

// Configure API key authorization: PRIVATE_KEY_PATH
$config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKey('privatekeypath', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKeyPrefix('privatekeypath', 'Bearer');

// Configure API key authorization: ENV
$config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKey('env', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKeyPrefix('env', 'Bearer');


$apiInstance = new Dana\IPG\Api\IPGApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apply_token_request = new \Dana\IPG\v1\Model\ApplyTokenRequest(); // \Dana\IPG\v1\Model\ApplyTokenRequest

try {
    $result = $apiInstance->applyToken($apply_token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IPGApi->applyToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **apply_token_request** | [**\Dana\IPG\v1\Model\ApplyTokenRequest**](./IPG/ApplyTokenRequest.md)|  | |

### Return type

[**\Dana\IPG\v1\Model\ApplyTokenResponse**](./IPG/ApplyTokenResponse.md)

### Authorization

[X_PARTNER_ID](../../README.md#X_PARTNER_ID), [PRIVATE_KEY](../../README.md#PRIVATE_KEY), [PRIVATE_KEY_PATH](../../README.md#PRIVATE_KEY_PATH), [ENV](../../README.md#ENV)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelOrder()`

```php
cancelOrder($cancel_order_request): \Dana\IPG\v1\Model\CancelOrderResponse
```

Cancel Order - IPG

This API is used to cancel the order from merchant's platform to DANA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ORIGIN
$config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKey('ORIGIN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ORIGIN', 'Bearer');

// Configure API key authorization: X_PARTNER_ID
$config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKey('X-PARTNER-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-PARTNER-ID', 'Bearer');

// Configure API key authorization: CHANNEL_ID
$config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKey('CHANNEL-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKeyPrefix('CHANNEL-ID', 'Bearer');

// Configure API key authorization: PRIVATE_KEY
$config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKey('privatekey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKeyPrefix('privatekey', 'Bearer');

// Configure API key authorization: PRIVATE_KEY_PATH
$config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKey('privatekeypath', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKeyPrefix('privatekeypath', 'Bearer');


$apiInstance = new Dana\IPG\Api\IPGApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cancel_order_request = new \Dana\IPG\v1\Model\CancelOrderRequest(); // \Dana\IPG\v1\Model\CancelOrderRequest

try {
    $result = $apiInstance->cancelOrder($cancel_order_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IPGApi->cancelOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cancel_order_request** | [**\Dana\IPG\v1\Model\CancelOrderRequest**](./IPG/CancelOrderRequest.md)|  | |

### Return type

[**\Dana\IPG\v1\Model\CancelOrderResponse**](./IPG/CancelOrderResponse.md)

### Authorization

[ORIGIN](../../README.md#ORIGIN), [X_PARTNER_ID](../../README.md#X_PARTNER_ID), [CHANNEL_ID](../../README.md#CHANNEL_ID), [PRIVATE_KEY](../../README.md#PRIVATE_KEY), [PRIVATE_KEY_PATH](../../README.md#PRIVATE_KEY_PATH)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipgPayment()`

```php
ipgPayment($ipg_payment_request): \Dana\IPG\v1\Model\IPGPaymentResponse
```

IPG payment - IPG

This API is used to initiate payment from merchant's platform to DANA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ORIGIN
$config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKey('ORIGIN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ORIGIN', 'Bearer');

// Configure API key authorization: X_PARTNER_ID
$config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKey('X-PARTNER-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-PARTNER-ID', 'Bearer');

// Configure API key authorization: CHANNEL_ID
$config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKey('CHANNEL-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKeyPrefix('CHANNEL-ID', 'Bearer');

// Configure API key authorization: PRIVATE_KEY
$config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKey('privatekey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKeyPrefix('privatekey', 'Bearer');

// Configure API key authorization: PRIVATE_KEY_PATH
$config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKey('privatekeypath', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKeyPrefix('privatekeypath', 'Bearer');

// Configure API key authorization: ENV
$config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKey('env', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKeyPrefix('env', 'Bearer');


$apiInstance = new Dana\IPG\Api\IPGApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ipg_payment_request = new \Dana\IPG\v1\Model\IPGPaymentRequest(); // \Dana\IPG\v1\Model\IPGPaymentRequest

try {
    $result = $apiInstance->ipgPayment($ipg_payment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IPGApi->ipgPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ipg_payment_request** | [**\Dana\IPG\v1\Model\IPGPaymentRequest**](./IPG/IPGPaymentRequest.md)|  | |

### Return type

[**\Dana\IPG\v1\Model\IPGPaymentResponse**](./IPG/IPGPaymentResponse.md)

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
queryPayment($query_payment_request): \Dana\IPG\v1\Model\QueryPaymentResponse
```

Query Payment - IPG

This API is used to inquiry payment status and information from merchant's platform to DANA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ORIGIN
$config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKey('ORIGIN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ORIGIN', 'Bearer');

// Configure API key authorization: X_PARTNER_ID
$config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKey('X-PARTNER-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-PARTNER-ID', 'Bearer');

// Configure API key authorization: CHANNEL_ID
$config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKey('CHANNEL-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKeyPrefix('CHANNEL-ID', 'Bearer');

// Configure API key authorization: PRIVATE_KEY
$config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKey('privatekey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKeyPrefix('privatekey', 'Bearer');

// Configure API key authorization: PRIVATE_KEY_PATH
$config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKey('privatekeypath', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKeyPrefix('privatekeypath', 'Bearer');


$apiInstance = new Dana\IPG\Api\IPGApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query_payment_request = new \Dana\IPG\v1\Model\QueryPaymentRequest(); // \Dana\IPG\v1\Model\QueryPaymentRequest

try {
    $result = $apiInstance->queryPayment($query_payment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IPGApi->queryPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **query_payment_request** | [**\Dana\IPG\v1\Model\QueryPaymentRequest**](./IPG/QueryPaymentRequest.md)|  | |

### Return type

[**\Dana\IPG\v1\Model\QueryPaymentResponse**](./IPG/QueryPaymentResponse.md)

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
refundOrder($refund_order_request): \Dana\IPG\v1\Model\RefundOrderResponse
```

Refund Order - IPG

This API is used to refund the order from merchant's platform to DANA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ORIGIN
$config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKey('ORIGIN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ORIGIN', 'Bearer');

// Configure API key authorization: X_PARTNER_ID
$config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKey('X-PARTNER-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-PARTNER-ID', 'Bearer');

// Configure API key authorization: CHANNEL_ID
$config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKey('CHANNEL-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKeyPrefix('CHANNEL-ID', 'Bearer');

// Configure API key authorization: PRIVATE_KEY
$config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKey('privatekey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKeyPrefix('privatekey', 'Bearer');

// Configure API key authorization: PRIVATE_KEY_PATH
$config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKey('privatekeypath', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\IPG\Configuration::getDefaultConfiguration()->setApiKeyPrefix('privatekeypath', 'Bearer');


$apiInstance = new Dana\IPG\Api\IPGApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$refund_order_request = new \Dana\IPG\v1\Model\RefundOrderRequest(); // \Dana\IPG\v1\Model\RefundOrderRequest

try {
    $result = $apiInstance->refundOrder($refund_order_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IPGApi->refundOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **refund_order_request** | [**\Dana\IPG\v1\Model\RefundOrderRequest**](./IPG/RefundOrderRequest.md)|  | |

### Return type

[**\Dana\IPG\v1\Model\RefundOrderResponse**](./IPG/RefundOrderResponse.md)

### Authorization

[ORIGIN](../../README.md#ORIGIN), [X_PARTNER_ID](../../README.md#X_PARTNER_ID), [CHANNEL_ID](../../README.md#CHANNEL_ID), [PRIVATE_KEY](../../README.md#PRIVATE_KEY), [PRIVATE_KEY_PATH](../../README.md#PRIVATE_KEY_PATH)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
