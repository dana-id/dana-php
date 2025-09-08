# WidgetApi

All URIs are relative to http://api.sandbox.dana.id for sandbox and https://api.saas.dana.id for production.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**accountUnbinding()**](WidgetApi.md#accountunbinding) | **POST** /v1.0/registration-account-unbinding.htm | Account unbinding - Binding |
| [**applyOTT()**](WidgetApi.md#applyott) | **POST** /rest/v1.1/qr/apply-ott | Apply OTT - Widget |
| [**applyToken()**](WidgetApi.md#applytoken) | **POST** /v1.0/access-token/b2b2c.htm | Apply Token, required by Apply OTT - Binding |
| [**balanceInquiry()**](WidgetApi.md#balanceinquiry) | **POST** /v1.0/balance-inquiry.htm | Balance Inquiry |
| [**cancelOrder()**](WidgetApi.md#cancelorder) | **POST** /v1.0/debit/cancel.htm | Cancel Order - Widget |
| [**queryPayment()**](WidgetApi.md#querypayment) | **POST** /rest/v1.1/debit/status | Query Payment - Widget |
| [**queryUserProfile()**](WidgetApi.md#queryuserprofile) | **POST** /dana/member/query/queryUserProfile.htm | Query User Profile |
| [**refundOrder()**](WidgetApi.md#refundorder) | **POST** /v1.0/debit/refund.htm | Refund Order - Widget |
| [**widgetPayment()**](WidgetApi.md#widgetpayment) | **POST** /rest/redirection/v1.0/debit/payment-host-to-host | Widget Payment - Widget |


## Additional Documentation
* [Enum Types](#enum-types) - List of available enum constants
* [WebhookParser](#webhookparser) - Webhook handling and notification parsing
* [OAuth URL Generation](#oauth-url-generation) - Generate OAuth URLs for authorization
* [Complete Payment URL Generation](#complete-payment-url-generation) - Generate URL to complete the payment by combining webRedirectUrl with OTT token


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
use Dana\Widget\v1\Model\AccountUnbindingRequest;

// Set up configuration with authentication settings
$configuration = new Configuration();

// The Configuration constructor automatically loads values from environment variables
// Choose one of PRIVATE_KEY or PRIVATE_KEY_PATH to set, if you set both, PRIVATE_KEY will be ignored
$configuration->setApiKey('PRIVATE_KEY', getenv('PRIVATE_KEY'));
// $configuration->setApiKey('PRIVATE_KEY_PATH', getenv('PRIVATE_KEY_PATH'));
$configuration->setApiKey('ORIGIN', getenv('ORIGIN'));
$configuration->setApiKey('X_PARTNER_ID', getenv('X_PARTNER_ID'));
$configuration->setApiKey('DANA_ENV', Env::SANDBOX);
// Choose one of ENV or DANA_ENV to set, if you set both, ENV will be ignored
// $configuration->setApiKey('ENV', Env::SANDBOX);



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

[**AccountUnbindingRequest**](./Widget/AccountUnbindingRequest.md)

### Return type

[**AccountUnbindingResponse**](./Widget/AccountUnbindingResponse.md)

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
use Dana\Widget\v1\Model\ApplyOTTRequest;

// Set up configuration with authentication settings
$configuration = new Configuration();

// The Configuration constructor automatically loads values from environment variables
// Choose one of PRIVATE_KEY or PRIVATE_KEY_PATH to set, if you set both, PRIVATE_KEY will be ignored
$configuration->setApiKey('PRIVATE_KEY', getenv('PRIVATE_KEY'));
// $configuration->setApiKey('PRIVATE_KEY_PATH', getenv('PRIVATE_KEY_PATH'));
$configuration->setApiKey('ORIGIN', getenv('ORIGIN'));
$configuration->setApiKey('X_PARTNER_ID', getenv('X_PARTNER_ID'));
$configuration->setApiKey('DANA_ENV', Env::SANDBOX);
// Choose one of ENV or DANA_ENV to set, if you set both, ENV will be ignored
// $configuration->setApiKey('ENV', Env::SANDBOX);



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

[**ApplyOTTRequest**](./Widget/ApplyOTTRequest.md)

### Return type

[**ApplyOTTResponse**](./Widget/ApplyOTTResponse.md)

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
use Dana\Widget\v1\Model\ApplyTokenRequest;

// Set up configuration with authentication settings
$configuration = new Configuration();

// The Configuration constructor automatically loads values from environment variables
// Choose one of PRIVATE_KEY or PRIVATE_KEY_PATH to set, if you set both, PRIVATE_KEY will be ignored
$configuration->setApiKey('PRIVATE_KEY', getenv('PRIVATE_KEY'));
// $configuration->setApiKey('PRIVATE_KEY_PATH', getenv('PRIVATE_KEY_PATH'));
$configuration->setApiKey('ORIGIN', getenv('ORIGIN'));
$configuration->setApiKey('X_PARTNER_ID', getenv('X_PARTNER_ID'));
$configuration->setApiKey('DANA_ENV', Env::SANDBOX);
// Choose one of ENV or DANA_ENV to set, if you set both, ENV will be ignored
// $configuration->setApiKey('ENV', Env::SANDBOX);



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

[**ApplyTokenRequest**](./Widget/ApplyTokenRequest.md)

### Return type

[**ApplyTokenResponse**](./Widget/ApplyTokenResponse.md)

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
use Dana\Widget\v1\Model\BalanceInquiryRequest;

// Set up configuration with authentication settings
$configuration = new Configuration();

// The Configuration constructor automatically loads values from environment variables
// Choose one of PRIVATE_KEY or PRIVATE_KEY_PATH to set, if you set both, PRIVATE_KEY will be ignored
$configuration->setApiKey('PRIVATE_KEY', getenv('PRIVATE_KEY'));
// $configuration->setApiKey('PRIVATE_KEY_PATH', getenv('PRIVATE_KEY_PATH'));
$configuration->setApiKey('ORIGIN', getenv('ORIGIN'));
$configuration->setApiKey('X_PARTNER_ID', getenv('X_PARTNER_ID'));
$configuration->setApiKey('DANA_ENV', Env::SANDBOX);
// Choose one of ENV or DANA_ENV to set, if you set both, ENV will be ignored
// $configuration->setApiKey('ENV', Env::SANDBOX);



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

[**BalanceInquiryRequest**](./Widget/BalanceInquiryRequest.md)

### Return type

[**BalanceInquiryResponse**](./Widget/BalanceInquiryResponse.md)

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
use Dana\Widget\v1\Model\CancelOrderRequest;

// Set up configuration with authentication settings
$configuration = new Configuration();

// The Configuration constructor automatically loads values from environment variables
// Choose one of PRIVATE_KEY or PRIVATE_KEY_PATH to set, if you set both, PRIVATE_KEY will be ignored
$configuration->setApiKey('PRIVATE_KEY', getenv('PRIVATE_KEY'));
// $configuration->setApiKey('PRIVATE_KEY_PATH', getenv('PRIVATE_KEY_PATH'));
$configuration->setApiKey('ORIGIN', getenv('ORIGIN'));
$configuration->setApiKey('X_PARTNER_ID', getenv('X_PARTNER_ID'));
$configuration->setApiKey('DANA_ENV', Env::SANDBOX);
// Choose one of ENV or DANA_ENV to set, if you set both, ENV will be ignored
// $configuration->setApiKey('ENV', Env::SANDBOX);



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

[**CancelOrderRequest**](./Widget/CancelOrderRequest.md)

### Return type

[**CancelOrderResponse**](./Widget/CancelOrderResponse.md)

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
use Dana\Widget\v1\Model\QueryPaymentRequest;

// Set up configuration with authentication settings
$configuration = new Configuration();

// The Configuration constructor automatically loads values from environment variables
// Choose one of PRIVATE_KEY or PRIVATE_KEY_PATH to set, if you set both, PRIVATE_KEY will be ignored
$configuration->setApiKey('PRIVATE_KEY', getenv('PRIVATE_KEY'));
// $configuration->setApiKey('PRIVATE_KEY_PATH', getenv('PRIVATE_KEY_PATH'));
$configuration->setApiKey('ORIGIN', getenv('ORIGIN'));
$configuration->setApiKey('X_PARTNER_ID', getenv('X_PARTNER_ID'));
$configuration->setApiKey('DANA_ENV', Env::SANDBOX);
// Choose one of ENV or DANA_ENV to set, if you set both, ENV will be ignored
// $configuration->setApiKey('ENV', Env::SANDBOX);



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

[**QueryPaymentRequest**](./Widget/QueryPaymentRequest.md)

### Return type

[**QueryPaymentResponse**](./Widget/QueryPaymentResponse.md)

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
use Dana\Widget\v1\Model\QueryUserProfileRequest;

// Set up configuration with authentication settings
$configuration = new Configuration();

// The Configuration constructor automatically loads values from environment variables
// Choose one of PRIVATE_KEY or PRIVATE_KEY_PATH to set, if you set both, PRIVATE_KEY will be ignored
$configuration->setApiKey('PRIVATE_KEY', getenv('PRIVATE_KEY'));
// $configuration->setApiKey('PRIVATE_KEY_PATH', getenv('PRIVATE_KEY_PATH'));
$configuration->setApiKey('ORIGIN', getenv('ORIGIN'));
$configuration->setApiKey('X_PARTNER_ID', getenv('X_PARTNER_ID'));
$configuration->setApiKey('DANA_ENV', Env::SANDBOX);
// Choose one of ENV or DANA_ENV to set, if you set both, ENV will be ignored
// $configuration->setApiKey('ENV', Env::SANDBOX);



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

[**QueryUserProfileRequest**](./Widget/QueryUserProfileRequest.md)

### Return type

[**QueryUserProfileResponse**](./Widget/QueryUserProfileResponse.md)

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
use Dana\Widget\v1\Model\RefundOrderRequest;

// Set up configuration with authentication settings
$configuration = new Configuration();

// The Configuration constructor automatically loads values from environment variables
// Choose one of PRIVATE_KEY or PRIVATE_KEY_PATH to set, if you set both, PRIVATE_KEY will be ignored
$configuration->setApiKey('PRIVATE_KEY', getenv('PRIVATE_KEY'));
// $configuration->setApiKey('PRIVATE_KEY_PATH', getenv('PRIVATE_KEY_PATH'));
$configuration->setApiKey('ORIGIN', getenv('ORIGIN'));
$configuration->setApiKey('X_PARTNER_ID', getenv('X_PARTNER_ID'));
$configuration->setApiKey('DANA_ENV', Env::SANDBOX);
// Choose one of ENV or DANA_ENV to set, if you set both, ENV will be ignored
// $configuration->setApiKey('ENV', Env::SANDBOX);



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

[**RefundOrderRequest**](./Widget/RefundOrderRequest.md)

### Return type

[**RefundOrderResponse**](./Widget/RefundOrderResponse.md)

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
use Dana\Widget\v1\Model\WidgetPaymentRequest;

// Set up configuration with authentication settings
$configuration = new Configuration();

// The Configuration constructor automatically loads values from environment variables
// Choose one of PRIVATE_KEY or PRIVATE_KEY_PATH to set, if you set both, PRIVATE_KEY will be ignored
$configuration->setApiKey('PRIVATE_KEY', getenv('PRIVATE_KEY'));
// $configuration->setApiKey('PRIVATE_KEY_PATH', getenv('PRIVATE_KEY_PATH'));
$configuration->setApiKey('ORIGIN', getenv('ORIGIN'));
$configuration->setApiKey('X_PARTNER_ID', getenv('X_PARTNER_ID'));
$configuration->setApiKey('DANA_ENV', Env::SANDBOX);
// Choose one of ENV or DANA_ENV to set, if you set both, ENV will be ignored
// $configuration->setApiKey('ENV', Env::SANDBOX);



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

[**WidgetPaymentRequest**](./Widget/WidgetPaymentRequest.md)

### Return type

[**WidgetPaymentResponse**](./Widget/WidgetPaymentResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## Enum Types

### Example Usage

```php
// Importing an enum class
use Dana\Widget\v1\Enum\AcquirementStatus;

// Using enum constants
$model->setProperty(AcquirementStatus::INIT);

// Using enum values directly as strings
$model->setProperty('INIT');
```

### AcquirementStatus

| Constant | Value |
|----------|-------|
| `INIT` | `INIT` |
| `SUCCESS` | `SUCCESS` |
| `CLOSED` | `CLOSED` |
| `PAYING` | `PAYING` |
| `MERCHANT_ACCEPT` | `MERCHANT_ACCEPT` |
| `CANCELLED` | `CANCELLED` |

### Mode

| Constant | Value |
|----------|-------|
| `API` | `API` |
| `DEEPLINK` | `DEEPLINK` |

### PromoType

| Constant | Value |
|----------|-------|
| `CASH_BACK` | `CASH_BACK` |
| `DISCOUNT` | `DISCOUNT` |
| `VOUCHER` | `VOUCHER` |
| `POINT` | `POINT` |

### ResourceType

| Constant | Value |
|----------|-------|
| `BALANCE` | `BALANCE` |
| `TRANSACTION_URL` | `TRANSACTION_URL` |
| `MASK_DANA_ID` | `MASK_DANA_ID` |
| `TOPUP_URL` | `TOPUP_URL` |
| `OTT` | `OTT` |
| `USER_KYC` | `USER_KYC` |

### ResultStatus

| Constant | Value |
|----------|-------|
| `S` | `S` |
| `F` | `F` |
| `U` | `U` |

### ServiceScenario

| Constant | Value |
|----------|-------|
| `SCAN_AND_PAY` | `SCAN_AND_PAY` |
| `EXIT_AND_PAY` | `EXIT_AND_PAY` |
| `EMAS_PURCHASE` | `EMAS_PURCHASE` |

### ServiceType

| Constant | Value |
|----------|-------|
| `PARKING` | `PARKING` |
| `INVESTMENT` | `INVESTMENT` |

### OrderTerminalType

| Constant | Value |
|----------|-------|
| `APP` | `APP` |
| `WEB` | `WEB` |
| `WAP` | `WAP` |
| `SYSTEM` | `SYSTEM` |

### PayMethod

| Constant | Value |
|----------|-------|
| `BALANCE` | `BALANCE` |
| `COUPON` | `COUPON` |
| `NET_BANKING` | `NET_BANKING` |
| `CREDIT_CARD` | `CREDIT_CARD` |
| `DEBIT_CARD` | `DEBIT_CARD` |
| `VIRTUAL_ACCOUNT` | `VIRTUAL_ACCOUNT` |
| `OTC` | `OTC` |
| `DIRECT_DEBIT_CREDIT_CARD` | `DIRECT_DEBIT_CREDIT_CARD` |
| `DIRECT_DEBIT_DEBIT_CARD` | `DIRECT_DEBIT_DEBIT_CARD` |
| `ONLINE_CREDIT` | `ONLINE_CREDIT` |
| `LOAN_CREDIT` | `LOAN_CREDIT` |
| `NETWORK_PAY` | `NETWORK_PAY` |
| `CARD` | `CARD` |

### PayOption

| Constant | Value |
|----------|-------|
| `NETWORK_PAY_PG_SPAY` | `NETWORK_PAY_PG_SPAY` |
| `NETWORK_PAY_PG_OVO` | `NETWORK_PAY_PG_OVO` |
| `NETWORK_PAY_PG_GOPAY` | `NETWORK_PAY_PG_GOPAY` |
| `NETWORK_PAY_PG_LINKAJA` | `NETWORK_PAY_PG_LINKAJA` |
| `NETWORK_PAY_PG_CARD` | `NETWORK_PAY_PG_CARD` |
| `VIRTUAL_ACCOUNT_BCA` | `VIRTUAL_ACCOUNT_BCA` |
| `VIRTUAL_ACCOUNT_BNI` | `VIRTUAL_ACCOUNT_BNI` |
| `VIRTUAL_ACCOUNT_MANDIRI` | `VIRTUAL_ACCOUNT_MANDIRI` |
| `VIRTUAL_ACCOUNT_BRI` | `VIRTUAL_ACCOUNT_BRI` |
| `VIRTUAL_ACCOUNT_BTPN` | `VIRTUAL_ACCOUNT_BTPN` |
| `VIRTUAL_ACCOUNT_CIMB` | `VIRTUAL_ACCOUNT_CIMB` |
| `VIRTUAL_ACCOUNT_PERMATA` | `VIRTUAL_ACCOUNT_PERMATA` |

### SourcePlatform

| Constant | Value |
|----------|-------|
| `IPG` | `IPG` |

### TerminalType

| Constant | Value |
|----------|-------|
| `APP` | `APP` |
| `WEB` | `WEB` |
| `WAP` | `WAP` |
| `SYSTEM` | `SYSTEM` |

### Type

| Constant | Value |
|----------|-------|
| `PAY_RETURN` | `PAY_RETURN` |
| `NOTIFICATION` | `NOTIFICATION` |


# WebhookParser

This section demonstrates how to securely verify and parse DANA webhook notifications using the PHP SDK.

## Example

```php
<?php
use Dana\Configuration;
use Dana\Webhook\WebhookParser;

// Initialize the WebhookParser
// You can provide the public key directly as a string or via a file path.
// The parser will prioritize publicKeyPath if both are provided.

// Option 1: Provide public key as a string
$danaPublicKey = getenv('DANA_PUBLIC_KEY');
$parser = new WebhookParser($danaPublicKey);

// Option 2: Provide path to public key file
// $danaPublicKeyPath = getenv('DANA_PUBLIC_KEY_PATH'); // e.g., "/path/to/your/dana_public_key.pem"
// $parser = new WebhookParser(null, $danaPublicKeyPath);

// Get the request data
$httpMethod = $_SERVER['REQUEST_METHOD'];
$relativePathUrl = '/v1.0/debit/notify'; // This should match the path DANA sends the webhook to

// Get headers - getallheaders() is the standard way in PHP
$headers = getallheaders();
// For frameworks that don't support getallheaders(), you can use:
// $headers = [];
// foreach ($_SERVER as $name => $value) {
//     if (substr($name, 0, 5) === 'HTTP_') {
//         $headers[str_replace(' ', '-', ucwords(strtolower(str_replace('_', ' ', substr($name, 5)))))] = $value;
//     }
// }

// Get the raw request body as a JSON string
$webhookBodyStr = file_get_contents('php://input');

// If you need to access the decoded data before passing to the parser
// (Not required for parseWebhook which expects the raw string)
// $jsonData = json_decode($webhookBodyStr, true);
// if (json_last_error() !== JSON_ERROR_NONE) {
//     throw new \RuntimeException('Invalid JSON in webhook payload: ' . json_last_error_msg());
// }
// echo "Request data: " . print_r($jsonData, true);

try {
    // Parse and verify the webhook
    $parsedData = $parser->parseWebhook(
        $httpMethod,
        $relativePathUrl,
        $headers,
        $webhookBodyStr
    );
    
    // If we reach here, the webhook was parsed and verified successfully
    echo "Webhook verified successfully!\n";
    echo "Original Partner Reference No: " . $parsedData->getOriginalPartnerReferenceNo() . "\n";
    echo "Amount: " . $parsedData->getAmount()->getValue() . " " . $parsedData->getAmount()->getCurrency() . "\n";
    echo "Status: " . $parsedData->getLatestTransactionStatus() . "\n";
    
    // Access additional information if available
    if ($parsedData->getAdditionalInfo() && $parsedData->getAdditionalInfo()->getPaymentInfo()) {
        $paymentInfo = $parsedData->getAdditionalInfo()->getPaymentInfo();
        $payOptions = $paymentInfo->getPayOptionInfos();
        
        foreach ($payOptions as $payOption) {
            echo "Payment Method: " . $payOption->getPayMethod() . "\n";
            if ($payOption->getPayOption()) {
                echo "Payment Option: " . $payOption->getPayOption() . "\n";
            }
        }
    }
    
} catch (\Exception $e) {
    // If verification fails, do not trust the payload
    error_log("Webhook verification failed: " . $e->getMessage());
    
    // Respond with an error
    header('Content-Type: application/json');
    http_response_code(400);
    echo json_encode([
        'response_code' => '96',
        'response_message' => 'System Error'
    ]);
}
```

## API Reference

### `WebhookParser`

The `WebhookParser` is part of the `Dana\Webhook` namespace.

**Constructor:**

```php
public function __construct(?string $publicKey = null, ?string $publicKeyPath = null)
```
- `publicKey` (?string): Optional. The DANA gateway's public key as a PEM formatted string.
- `publicKeyPath` (?string): Optional. The file path to the DANA gateway's public key PEM file. If provided, this will be prioritized over the `publicKey` string.
- **Throws:** `\InvalidArgumentException` if neither publicKey nor publicKeyPath is provided or if the public key cannot be loaded.

**Method:**

```php
public function parseWebhook(string $httpMethod, string $relativePathURL, array $headers, string $body): \Dana\Webhook\v1\Model\FinishNotifyRequest
```
- `httpMethod` (string): The HTTP method of the incoming webhook request (e.g., `POST`).
- `relativePathURL` (string): The relative URL path of the webhook endpoint that received the notification (e.g., `/v1.0/debit/notify`).
- `headers` (array): An array containing the HTTP request headers. This must include `X-SIGNATURE` and `X-TIMESTAMP` headers provided by DANA for signature verification.
- `body` (string): The raw JSON string payload from the webhook request body.
- **Returns:** An instance of `\Dana\Webhook\v1\Model\FinishNotifyRequest` containing the parsed and verified webhook data.
- **Throws:** `\InvalidArgumentException` if required parameters are missing or `\RuntimeException` if signature verification fails.

## Security Notes
- Always use the official public key provided by DANA for webhook verification. Store and load it securely.
- The `parseWebhook` method handles both JSON parsing and cryptographic signature verification. If it throws an exception, the payload should not be trusted.

## Webhook Notification Models

The following webhook notification models may be received:

Model | Description
------------- | -------------
[**FinishNotifyRequest**](./Webhook/FinishNotifyRequest.md) | Represents the standard notification payload for payment events.


# OAuth URL Generation

This section demonstrates how to generate OAuth URLs for widget authorization using the PHP SDK.

## Example

```php
<?php
use Dana\Widget\v1\Model\Oauth2UrlData;
use Dana\Widget\v1\Util\Util;
use Dana\Widget\v1\Enum\Mode;

// Set up OAuth2 URL data
$oauth2UrlData = new Oauth2UrlData();
$oauth2UrlData->setMode(Mode::DEEPLINK); // the default mode is API if not set
$oauth2UrlData->setRedirectUrl('https://google.com');
$oauth2UrlData->setMerchantId('merchant_id'); // from env variable
$oauth2UrlData->setExternalId('external_id');
$oauth2UrlData->setSeamlessData([
    'mobileNumber' => '087875849373'
]);

// Generate the OAuth URL
$oauthUrl = Util::generateOauthUrl($oauth2UrlData, $privateKey, $privateKeyPath);
echo 'Generated OAuth URL: ' . $oauthUrl;
```

The generated URL can be used to redirect users to DANA's authorization page.

# Complete Payment URL Generation

You can generate a payment URL by combining the webRedirectUrl from a WidgetPaymentResponse with an OTT token from an ApplyOTTResponse.

## Example

```php
<?php
use Dana\Widget\v1\Model\WidgetPaymentResponse;
use Dana\Widget\v1\Model\ApplyOTTResponse;
use Dana\Widget\v1\Util\Util;

// Example response from createWidgetPayment
$widgetPaymentResponse = new WidgetPaymentResponse();
$widgetPaymentResponse->setWebRedirectUrl('https://example.com/payment?token=abc123');
// This should be from createPayment Widget API

// Example response from applyOTT
$applyOTTResponse = new ApplyOTTResponse();
$applyOTTResponse->setUserResources([
    [
        'value' => 'ott_token_value'
    ]
]);
// This should be from applyOTT Widget API

// Generate the payment URL
$paymentUrl = Util::generateCompletePaymentUrl($widgetPaymentResponse, $applyOTTResponse);
echo 'Generated Payment URL: ' . $paymentUrl;
```

The generated URL can be used to redirect users to DANA's payment page.

