# Dana\Widget\WidgetApi

All URIs are relative to https://api.saas.dana.id, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**accountUnbinding()**](WidgetApi.md#accountUnbinding) | **POST** /v1.0/registration-account-unbinding.htm | Account unbinding - Binding |
| [**applyOTT()**](WidgetApi.md#applyOTT) | **POST** /rest/v1.1/qr/apply-ott | Apply OTT - Widget |
| [**applyToken()**](WidgetApi.md#applyToken) | **POST** /v1.0/access-token/b2b2c.htm | Apply Token, required by Apply OTT - Binding |
| [**balanceInquiry()**](WidgetApi.md#balanceInquiry) | **POST** /v1.0/balance-inquiry.htm | Balance Inquiry |
| [**cancelOrder()**](WidgetApi.md#cancelOrder) | **POST** /v1.0/debit/cancel.htm | Cancel Order - Widget |
| [**queryPayment()**](WidgetApi.md#queryPayment) | **POST** /rest/v1.1/debit/status | Query Payment - Widget |
| [**queryUserProfile()**](WidgetApi.md#queryUserProfile) | **POST** /dana/member/query/queryUserProfile.htm | Query User Profile |
| [**refundOrder()**](WidgetApi.md#refundOrder) | **POST** /v1.0/debit/refund.htm | Refund Order - Widget |
| [**widgetPayment()**](WidgetApi.md#widgetPayment) | **POST** /rest/redirection/v1.0/debit/payment-host-to-host | Widget Payment - Widget |


## `accountUnbinding()`

```php
accountUnbinding($accountUnbindingRequest): \Dana\Widget\v1\Model\AccountUnbindingResponse
```

Account unbinding - Binding

This API is used to reverses the account binding process by revoking the accessToken and refreshToken

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X_PARTNER_ID
$config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKey('X-PARTNER-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-PARTNER-ID', 'Bearer');

// Configure API key authorization: PRIVATE_KEY
$config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKey('privatekey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKeyPrefix('privatekey', 'Bearer');

// Configure API key authorization: PRIVATE_KEY_PATH
$config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKey('privatekeypath', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKeyPrefix('privatekeypath', 'Bearer');

// Configure API key authorization: ENV
$config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKey('env', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKeyPrefix('env', 'Bearer');


$apiInstance = new Dana\Widget\Api\WidgetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountUnbindingRequest = new \Dana\Widget\v1\Model\AccountUnbindingRequest(); // \Dana\Widget\v1\Model\AccountUnbindingRequest

try {
    $result = $apiInstance->accountUnbinding($accountUnbindingRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetApi->accountUnbinding: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accountUnbindingRequest** | [**\Dana\Widget\v1\Model\AccountUnbindingRequest**](./Widget/AccountUnbindingRequest.md)|  | |

### Return type

[**\Dana\Widget\v1\Model\AccountUnbindingResponse**](./Widget/AccountUnbindingResponse.md)

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
applyOTT($applyOTTRequest): \Dana\Widget\v1\Model\ApplyOTTResponse
```

Apply OTT - Widget

This API is used to get one time token that will be used as authorization parameter upon redirecting to DANA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ORIGIN
$config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKey('ORIGIN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ORIGIN', 'Bearer');

// Configure API key authorization: X_PARTNER_ID
$config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKey('X-PARTNER-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-PARTNER-ID', 'Bearer');

// Configure API key authorization: CHANNEL_ID
$config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKey('CHANNEL-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKeyPrefix('CHANNEL-ID', 'Bearer');

// Configure API key authorization: PRIVATE_KEY
$config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKey('privatekey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKeyPrefix('privatekey', 'Bearer');

// Configure API key authorization: PRIVATE_KEY_PATH
$config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKey('privatekeypath', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKeyPrefix('privatekeypath', 'Bearer');

// Configure API key authorization: ENV
$config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKey('env', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKeyPrefix('env', 'Bearer');


$apiInstance = new Dana\Widget\Api\WidgetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applyOTTRequest = new \Dana\Widget\v1\Model\ApplyOTTRequest(); // \Dana\Widget\v1\Model\ApplyOTTRequest

try {
    $result = $apiInstance->applyOTT($applyOTTRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetApi->applyOTT: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **applyOTTRequest** | [**\Dana\Widget\v1\Model\ApplyOTTRequest**](./Widget/ApplyOTTRequest.md)|  | |

### Return type

[**\Dana\Widget\v1\Model\ApplyOTTResponse**](./Widget/ApplyOTTResponse.md)

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
applyToken($applyTokenRequest): \Dana\Widget\v1\Model\ApplyTokenResponse
```

Apply Token, required by Apply OTT - Binding

This API is used to finalized account binding process by exchanging the authCode into accessToken that can be used as user authorization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X_PARTNER_ID
$config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKey('X-PARTNER-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-PARTNER-ID', 'Bearer');

// Configure API key authorization: PRIVATE_KEY
$config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKey('privatekey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKeyPrefix('privatekey', 'Bearer');

// Configure API key authorization: PRIVATE_KEY_PATH
$config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKey('privatekeypath', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKeyPrefix('privatekeypath', 'Bearer');

// Configure API key authorization: ENV
$config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKey('env', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKeyPrefix('env', 'Bearer');


$apiInstance = new Dana\Widget\Api\WidgetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applyTokenRequest = new \Dana\Widget\v1\Model\ApplyTokenRequest(); // \Dana\Widget\v1\Model\ApplyTokenRequest

try {
    $result = $apiInstance->applyToken($applyTokenRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetApi->applyToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **applyTokenRequest** | [**\Dana\Widget\v1\Model\ApplyTokenRequest**](./Widget/ApplyTokenRequest.md)|  | |

### Return type

[**\Dana\Widget\v1\Model\ApplyTokenResponse**](./Widget/ApplyTokenResponse.md)

### Authorization

[X_PARTNER_ID](../../README.md#X_PARTNER_ID), [PRIVATE_KEY](../../README.md#PRIVATE_KEY), [PRIVATE_KEY_PATH](../../README.md#PRIVATE_KEY_PATH), [ENV](../../README.md#ENV)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `balanceInquiry()`

```php
balanceInquiry($balanceInquiryRequest): \Dana\Widget\v1\Model\BalanceInquiryResponse
```

Balance Inquiry

This API is used to query user's DANA account balance via merchant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ORIGIN
$config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKey('ORIGIN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ORIGIN', 'Bearer');

// Configure API key authorization: X_PARTNER_ID
$config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKey('X-PARTNER-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-PARTNER-ID', 'Bearer');

// Configure API key authorization: CHANNEL_ID
$config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKey('CHANNEL-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKeyPrefix('CHANNEL-ID', 'Bearer');

// Configure API key authorization: PRIVATE_KEY
$config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKey('privatekey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKeyPrefix('privatekey', 'Bearer');

// Configure API key authorization: PRIVATE_KEY_PATH
$config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKey('privatekeypath', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKeyPrefix('privatekeypath', 'Bearer');


$apiInstance = new Dana\Widget\Api\WidgetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$balanceInquiryRequest = new \Dana\Widget\v1\Model\BalanceInquiryRequest(); // \Dana\Widget\v1\Model\BalanceInquiryRequest

try {
    $result = $apiInstance->balanceInquiry($balanceInquiryRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetApi->balanceInquiry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **balanceInquiryRequest** | [**\Dana\Widget\v1\Model\BalanceInquiryRequest**](./Widget/BalanceInquiryRequest.md)|  | |

### Return type

[**\Dana\Widget\v1\Model\BalanceInquiryResponse**](./Widget/BalanceInquiryResponse.md)

### Authorization

[ORIGIN](../../README.md#ORIGIN), [X_PARTNER_ID](../../README.md#X_PARTNER_ID), [CHANNEL_ID](../../README.md#CHANNEL_ID), [PRIVATE_KEY](../../README.md#PRIVATE_KEY), [PRIVATE_KEY_PATH](../../README.md#PRIVATE_KEY_PATH)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelOrder()`

```php
cancelOrder($cancelOrderRequest): \Dana\Widget\v1\Model\CancelOrderResponse
```

Cancel Order - Widget

This API is used to cancel the order from merchant's platform to DANA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ORIGIN
$config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKey('ORIGIN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ORIGIN', 'Bearer');

// Configure API key authorization: X_PARTNER_ID
$config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKey('X-PARTNER-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-PARTNER-ID', 'Bearer');

// Configure API key authorization: CHANNEL_ID
$config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKey('CHANNEL-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKeyPrefix('CHANNEL-ID', 'Bearer');

// Configure API key authorization: PRIVATE_KEY
$config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKey('privatekey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKeyPrefix('privatekey', 'Bearer');

// Configure API key authorization: PRIVATE_KEY_PATH
$config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKey('privatekeypath', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKeyPrefix('privatekeypath', 'Bearer');


$apiInstance = new Dana\Widget\Api\WidgetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cancelOrderRequest = new \Dana\Widget\v1\Model\CancelOrderRequest(); // \Dana\Widget\v1\Model\CancelOrderRequest

try {
    $result = $apiInstance->cancelOrder($cancelOrderRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetApi->cancelOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cancelOrderRequest** | [**\Dana\Widget\v1\Model\CancelOrderRequest**](./Widget/CancelOrderRequest.md)|  | |

### Return type

[**\Dana\Widget\v1\Model\CancelOrderResponse**](./Widget/CancelOrderResponse.md)

### Authorization

[ORIGIN](../../README.md#ORIGIN), [X_PARTNER_ID](../../README.md#X_PARTNER_ID), [CHANNEL_ID](../../README.md#CHANNEL_ID), [PRIVATE_KEY](../../README.md#PRIVATE_KEY), [PRIVATE_KEY_PATH](../../README.md#PRIVATE_KEY_PATH)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryPayment()`

```php
queryPayment($queryPaymentRequest): \Dana\Widget\v1\Model\QueryPaymentResponse
```

Query Payment - Widget

This API is used to inquiry payment status and information from merchant's platform to DANA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ORIGIN
$config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKey('ORIGIN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ORIGIN', 'Bearer');

// Configure API key authorization: X_PARTNER_ID
$config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKey('X-PARTNER-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-PARTNER-ID', 'Bearer');

// Configure API key authorization: CHANNEL_ID
$config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKey('CHANNEL-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKeyPrefix('CHANNEL-ID', 'Bearer');

// Configure API key authorization: PRIVATE_KEY
$config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKey('privatekey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKeyPrefix('privatekey', 'Bearer');

// Configure API key authorization: PRIVATE_KEY_PATH
$config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKey('privatekeypath', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKeyPrefix('privatekeypath', 'Bearer');


$apiInstance = new Dana\Widget\Api\WidgetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$queryPaymentRequest = new \Dana\Widget\v1\Model\QueryPaymentRequest(); // \Dana\Widget\v1\Model\QueryPaymentRequest

try {
    $result = $apiInstance->queryPayment($queryPaymentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetApi->queryPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **queryPaymentRequest** | [**\Dana\Widget\v1\Model\QueryPaymentRequest**](./Widget/QueryPaymentRequest.md)|  | |

### Return type

[**\Dana\Widget\v1\Model\QueryPaymentResponse**](./Widget/QueryPaymentResponse.md)

### Authorization

[ORIGIN](../../README.md#ORIGIN), [X_PARTNER_ID](../../README.md#X_PARTNER_ID), [CHANNEL_ID](../../README.md#CHANNEL_ID), [PRIVATE_KEY](../../README.md#PRIVATE_KEY), [PRIVATE_KEY_PATH](../../README.md#PRIVATE_KEY_PATH)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryUserProfile()`

```php
queryUserProfile($queryUserProfileRequest): \Dana\Widget\v1\Model\QueryUserProfileResponse
```

Query User Profile

The API is used to query user profile such as DANA balance (unit in IDR), masked DANA phone number, KYC or OTT (one time token) between merchant server and DANA's server

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Dana\Widget\Api\WidgetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$queryUserProfileRequest = new \Dana\Widget\v1\Model\QueryUserProfileRequest(); // \Dana\Widget\v1\Model\QueryUserProfileRequest

try {
    $result = $apiInstance->queryUserProfile($queryUserProfileRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetApi->queryUserProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **queryUserProfileRequest** | [**\Dana\Widget\v1\Model\QueryUserProfileRequest**](./Widget/QueryUserProfileRequest.md)|  | |

### Return type

[**\Dana\Widget\v1\Model\QueryUserProfileResponse**](./Widget/QueryUserProfileResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `refundOrder()`

```php
refundOrder($refundOrderRequest): \Dana\Widget\v1\Model\RefundOrderResponse
```

Refund Order - Widget

This API is used to refund the order from merchant's platform to DANA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ORIGIN
$config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKey('ORIGIN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ORIGIN', 'Bearer');

// Configure API key authorization: X_PARTNER_ID
$config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKey('X-PARTNER-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-PARTNER-ID', 'Bearer');

// Configure API key authorization: CHANNEL_ID
$config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKey('CHANNEL-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKeyPrefix('CHANNEL-ID', 'Bearer');

// Configure API key authorization: PRIVATE_KEY
$config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKey('privatekey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKeyPrefix('privatekey', 'Bearer');

// Configure API key authorization: PRIVATE_KEY_PATH
$config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKey('privatekeypath', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKeyPrefix('privatekeypath', 'Bearer');


$apiInstance = new Dana\Widget\Api\WidgetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$refundOrderRequest = new \Dana\Widget\v1\Model\RefundOrderRequest(); // \Dana\Widget\v1\Model\RefundOrderRequest

try {
    $result = $apiInstance->refundOrder($refundOrderRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetApi->refundOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **refundOrderRequest** | [**\Dana\Widget\v1\Model\RefundOrderRequest**](./Widget/RefundOrderRequest.md)|  | |

### Return type

[**\Dana\Widget\v1\Model\RefundOrderResponse**](./Widget/RefundOrderResponse.md)

### Authorization

[ORIGIN](../../README.md#ORIGIN), [X_PARTNER_ID](../../README.md#X_PARTNER_ID), [CHANNEL_ID](../../README.md#CHANNEL_ID), [PRIVATE_KEY](../../README.md#PRIVATE_KEY), [PRIVATE_KEY_PATH](../../README.md#PRIVATE_KEY_PATH)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `widgetPayment()`

```php
widgetPayment($widgetPaymentRequest): \Dana\Widget\v1\Model\WidgetPaymentResponse
```

Widget Payment - Widget

This API is used to initiate payment from merchant's platform to DANA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ORIGIN
$config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKey('ORIGIN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ORIGIN', 'Bearer');

// Configure API key authorization: X_PARTNER_ID
$config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKey('X-PARTNER-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-PARTNER-ID', 'Bearer');

// Configure API key authorization: CHANNEL_ID
$config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKey('CHANNEL-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKeyPrefix('CHANNEL-ID', 'Bearer');

// Configure API key authorization: PRIVATE_KEY
$config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKey('privatekey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKeyPrefix('privatekey', 'Bearer');

// Configure API key authorization: PRIVATE_KEY_PATH
$config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKey('privatekeypath', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKeyPrefix('privatekeypath', 'Bearer');

// Configure API key authorization: ENV
$config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKey('env', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Widget\Configuration::getDefaultConfiguration()->setApiKeyPrefix('env', 'Bearer');


$apiInstance = new Dana\Widget\Api\WidgetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$widgetPaymentRequest = new \Dana\Widget\v1\Model\WidgetPaymentRequest(); // \Dana\Widget\v1\Model\WidgetPaymentRequest

try {
    $result = $apiInstance->widgetPayment($widgetPaymentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetApi->widgetPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **widgetPaymentRequest** | [**\Dana\Widget\v1\Model\WidgetPaymentRequest**](./Widget/WidgetPaymentRequest.md)|  | |

### Return type

[**\Dana\Widget\v1\Model\WidgetPaymentResponse**](./Widget/WidgetPaymentResponse.md)

### Authorization

[ORIGIN](../../README.md#ORIGIN), [X_PARTNER_ID](../../README.md#X_PARTNER_ID), [CHANNEL_ID](../../README.md#CHANNEL_ID), [PRIVATE_KEY](../../README.md#PRIVATE_KEY), [PRIVATE_KEY_PATH](../../README.md#PRIVATE_KEY_PATH), [ENV](../../README.md#ENV)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
