# WidgetApi

All URIs are relative to http://api.sandbox.dana.id for sandbox and https://api.saas.dana.id for production.

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
use Dana\Configuration;
use Dana\Env;
use Dana\Widget\v1\Api\WidgetApi;
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



$apiInstance = new WidgetApi(
    null, // this also can be set to custom http client which implements `GuzzleHttp\ClientInterface`
    $configuration
);
$accountUnbindingRequest = AccountUnbindingRequest();

try {
    $result = $apiInstance->accountUnbinding($accountUnbindingRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetApi->accountUnbinding: ', $e->getMessage(), PHP_EOL;
}
```

### Payload

[****](./Widget/.md)

### Return type

[**\Dana\Widget\v1\Model\AccountUnbindingResponse**](./Widget/AccountUnbindingResponse.md)

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
use Dana\Configuration;
use Dana\Env;
use Dana\Widget\v1\Api\WidgetApi;
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



$apiInstance = new WidgetApi(
    null, // this also can be set to custom http client which implements `GuzzleHttp\ClientInterface`
    $configuration
);
$applyOTTRequest = ApplyOTTRequest();

try {
    $result = $apiInstance->applyOTT($applyOTTRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetApi->applyOTT: ', $e->getMessage(), PHP_EOL;
}
```

### Payload

[****](./Widget/.md)

### Return type

[**\Dana\Widget\v1\Model\ApplyOTTResponse**](./Widget/ApplyOTTResponse.md)

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
use Dana\Configuration;
use Dana\Env;
use Dana\Widget\v1\Api\WidgetApi;
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



$apiInstance = new WidgetApi(
    null, // this also can be set to custom http client which implements `GuzzleHttp\ClientInterface`
    $configuration
);
$applyTokenRequest = ApplyTokenRequest();

try {
    $result = $apiInstance->applyToken($applyTokenRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetApi->applyToken: ', $e->getMessage(), PHP_EOL;
}
```

### Payload

[****](./Widget/.md)

### Return type

[**\Dana\Widget\v1\Model\ApplyTokenResponse**](./Widget/ApplyTokenResponse.md)

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
use Dana\Configuration;
use Dana\Env;
use Dana\Widget\v1\Api\WidgetApi;
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



$apiInstance = new WidgetApi(
    null, // this also can be set to custom http client which implements `GuzzleHttp\ClientInterface`
    $configuration
);
$balanceInquiryRequest = BalanceInquiryRequest();

try {
    $result = $apiInstance->balanceInquiry($balanceInquiryRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetApi->balanceInquiry: ', $e->getMessage(), PHP_EOL;
}
```

### Payload

[****](./Widget/.md)

### Return type

[**\Dana\Widget\v1\Model\BalanceInquiryResponse**](./Widget/BalanceInquiryResponse.md)

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
use Dana\Configuration;
use Dana\Env;
use Dana\Widget\v1\Api\WidgetApi;
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



$apiInstance = new WidgetApi(
    null, // this also can be set to custom http client which implements `GuzzleHttp\ClientInterface`
    $configuration
);
$cancelOrderRequest = CancelOrderRequest();

try {
    $result = $apiInstance->cancelOrder($cancelOrderRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetApi->cancelOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Payload

[****](./Widget/.md)

### Return type

[**\Dana\Widget\v1\Model\CancelOrderResponse**](./Widget/CancelOrderResponse.md)

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
use Dana\Configuration;
use Dana\Env;
use Dana\Widget\v1\Api\WidgetApi;
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



$apiInstance = new WidgetApi(
    null, // this also can be set to custom http client which implements `GuzzleHttp\ClientInterface`
    $configuration
);
$queryPaymentRequest = QueryPaymentRequest();

try {
    $result = $apiInstance->queryPayment($queryPaymentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetApi->queryPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Payload

[****](./Widget/.md)

### Return type

[**\Dana\Widget\v1\Model\QueryPaymentResponse**](./Widget/QueryPaymentResponse.md)

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
use Dana\Configuration;
use Dana\Env;
use Dana\Widget\v1\Api\WidgetApi;
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



$apiInstance = new WidgetApi(
    null, // this also can be set to custom http client which implements `GuzzleHttp\ClientInterface`
    $configuration
);
$queryUserProfileRequest = QueryUserProfileRequest();

try {
    $result = $apiInstance->queryUserProfile($queryUserProfileRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetApi->queryUserProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Payload

[****](./Widget/.md)

### Return type

[**\Dana\Widget\v1\Model\QueryUserProfileResponse**](./Widget/QueryUserProfileResponse.md)

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
use Dana\Configuration;
use Dana\Env;
use Dana\Widget\v1\Api\WidgetApi;
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



$apiInstance = new WidgetApi(
    null, // this also can be set to custom http client which implements `GuzzleHttp\ClientInterface`
    $configuration
);
$refundOrderRequest = RefundOrderRequest();

try {
    $result = $apiInstance->refundOrder($refundOrderRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetApi->refundOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Payload

[****](./Widget/.md)

### Return type

[**\Dana\Widget\v1\Model\RefundOrderResponse**](./Widget/RefundOrderResponse.md)

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
use Dana\Configuration;
use Dana\Env;
use Dana\Widget\v1\Api\WidgetApi;
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



$apiInstance = new WidgetApi(
    null, // this also can be set to custom http client which implements `GuzzleHttp\ClientInterface`
    $configuration
);
$widgetPaymentRequest = WidgetPaymentRequest();

try {
    $result = $apiInstance->widgetPayment($widgetPaymentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetApi->widgetPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Payload

[****](./Widget/.md)

### Return type

[**\Dana\Widget\v1\Model\WidgetPaymentResponse**](./Widget/WidgetPaymentResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
