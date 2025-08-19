# PaymentGatewayApi

All URIs are relative to http://api.sandbox.dana.id for sandbox and https://api.saas.dana.id for production.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelOrder()**](PaymentGatewayApi.md#cancelOrder) | **POST** /payment-gateway/v1.0/debit/cancel.htm | Cancel Order - Payment Gateway |
| [**consultPay()**](PaymentGatewayApi.md#consultPay) | **POST** /v1.0/payment-gateway/consult-pay.htm | Consult Pay - Payment Gateway |
| [**createOrder()**](PaymentGatewayApi.md#createOrder) | **POST** /payment-gateway/v1.0/debit/payment-host-to-host.htm | Create Order - Payment Gateway |
| [**queryPayment()**](PaymentGatewayApi.md#queryPayment) | **POST** /payment-gateway/v1.0/debit/status.htm | Query Payment - Payment Gateway |
| [**refundOrder()**](PaymentGatewayApi.md#refundOrder) | **POST** /payment-gateway/v1.0/debit/refund.htm | Refund Order - Payment Gateway |


## Additional Documentation
* [Enum Types](#enum-types) - List of available enum constants 
* [WebhookParser](#webhookparser) - Webhook handling and notification parsing


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
use Dana\PaymentGateway\v1\Model\CancelOrderRequest;

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

[**CancelOrderRequest**](./PaymentGateway/CancelOrderRequest.md)

### Return type

[**CancelOrderResponse**](./PaymentGateway/CancelOrderResponse.md)

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
use Dana\PaymentGateway\v1\Model\ConsultPayRequest;

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

[**ConsultPayRequest**](./PaymentGateway/ConsultPayRequest.md)

### Return type

[**ConsultPayResponse**](./PaymentGateway/ConsultPayResponse.md)

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
use Dana\PaymentGateway\v1\Model\CreateOrderRequest;

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

[**CreateOrderRequest**](./PaymentGateway/CreateOrderRequest.md)

### Return type

[**CreateOrderResponse**](./PaymentGateway/CreateOrderResponse.md)

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
use Dana\PaymentGateway\v1\Model\QueryPaymentRequest;

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

[**QueryPaymentRequest**](./PaymentGateway/QueryPaymentRequest.md)

### Return type

[**QueryPaymentResponse**](./PaymentGateway/QueryPaymentResponse.md)

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
use Dana\PaymentGateway\v1\Model\RefundOrderRequest;

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

[**RefundOrderRequest**](./PaymentGateway/RefundOrderRequest.md)

### Return type

[**RefundOrderResponse**](./PaymentGateway/RefundOrderResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)


## Enum Types

### Example Usage

```php
// Importing an enum class
use Dana\PaymentGateway\v1\Enum\TerminalType;

// Using enum constants
$model->setTerminalType(TerminalType::APP);

// Using enum values directly as strings
$model->setTerminalType('APP');
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

### ActorType

| Constant | Value |
|----------|-------|
| `USER` | `USER` |
| `MERCHANT` | `MERCHANT` |
| `MERCHANT_OPERATOR` | `MERCHANT_OPERATOR` |
| `BACK_OFFICE` | `BACK_OFFICE` |
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

### OrderTerminalType

| Constant | Value |
|----------|-------|
| `APP` | `APP` |
| `WEB` | `WEB` |
| `WAP` | `WAP` |
| `SYSTEM` | `SYSTEM` |

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

