# DisbursementApi

All URIs are relative to http://api.sandbox.dana.id for sandbox and https://api.saas.dana.id for production.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**bankAccountInquiry()**](DisbursementApi.md#bankAccountInquiry) | **POST** /v1.0/emoney/bank-account-inquiry.htm | Transfer to Bank Account Inquiry |
| [**danaAccountInquiry()**](DisbursementApi.md#danaAccountInquiry) | **POST** /v1.0/emoney/account-inquiry.htm | DANA Account Inquiry |
| [**transferToBank()**](DisbursementApi.md#transferToBank) | **POST** /v1.0/emoney/transfer-bank.htm | Transfer to Bank |
| [**transferToBankInquiryStatus()**](DisbursementApi.md#transferToBankInquiryStatus) | **POST** /v1.0/emoney/transfer-bank-status.htm | Transfer to Bank Inquiry Status |
| [**transferToDana()**](DisbursementApi.md#transferToDana) | **POST** /v1.0/emoney/topup.htm | Transfer to DANA |
| [**transferToDanaInquiryStatus()**](DisbursementApi.md#transferToDanaInquiryStatus) | **POST** /v1.0/emoney/topup-status.htm | Transfer to DANA Inquiry Status |


## `bankAccountInquiry()`

```php
bankAccountInquiry($bankAccountInquiryRequest): \Dana\Disbursement\v1\Model\BankAccountInquiryResponse
```

Transfer to Bank Account Inquiry

This API is used for merchant to do inquiry Bank account info via DANA

### Example

```php
<?php
use Dana\Configuration;
use Dana\Env;
use Dana\Disbursement\v1\Api\DisbursementApi;
use Dana\Disbursement\v1\Model\BankAccountInquiryRequest;

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



$apiInstance = new DisbursementApi(
    null, // this also can be set to custom http client which implements `GuzzleHttp\ClientInterface`
    $configuration
);
$bankAccountInquiryRequest = BankAccountInquiryRequest();

try {
    $result = $apiInstance->bankAccountInquiry($bankAccountInquiryRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisbursementApi->bankAccountInquiry: ', $e->getMessage(), PHP_EOL;
}
```

### Payload

[**BankAccountInquiryRequest**](./Disbursement/BankAccountInquiryRequest.md)

### Return type

[**BankAccountInquiryResponse**](./Disbursement/BankAccountInquiryResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `danaAccountInquiry()`

```php
danaAccountInquiry($danaAccountInquiryRequest): \Dana\Disbursement\v1\Model\DanaAccountInquiryResponse
```

DANA Account Inquiry

This API is used for merchant to do account inquiry to DANA

### Example

```php
<?php
use Dana\Configuration;
use Dana\Env;
use Dana\Disbursement\v1\Api\DisbursementApi;
use Dana\Disbursement\v1\Model\DanaAccountInquiryRequest;

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



$apiInstance = new DisbursementApi(
    null, // this also can be set to custom http client which implements `GuzzleHttp\ClientInterface`
    $configuration
);
$danaAccountInquiryRequest = DanaAccountInquiryRequest();

try {
    $result = $apiInstance->danaAccountInquiry($danaAccountInquiryRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisbursementApi->danaAccountInquiry: ', $e->getMessage(), PHP_EOL;
}
```

### Payload

[**DanaAccountInquiryRequest**](./Disbursement/DanaAccountInquiryRequest.md)

### Return type

[**DanaAccountInquiryResponse**](./Disbursement/DanaAccountInquiryResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transferToBank()`

```php
transferToBank($transferToBankRequest): \Dana\Disbursement\v1\Model\TransferToBankResponse
```

Transfer to Bank

This API is used for merchant to do transfer to Bank request via DANA

### Example

```php
<?php
use Dana\Configuration;
use Dana\Env;
use Dana\Disbursement\v1\Api\DisbursementApi;
use Dana\Disbursement\v1\Model\TransferToBankRequest;

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



$apiInstance = new DisbursementApi(
    null, // this also can be set to custom http client which implements `GuzzleHttp\ClientInterface`
    $configuration
);
$transferToBankRequest = TransferToBankRequest();

try {
    $result = $apiInstance->transferToBank($transferToBankRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisbursementApi->transferToBank: ', $e->getMessage(), PHP_EOL;
}
```

### Payload

[**TransferToBankRequest**](./Disbursement/TransferToBankRequest.md)

### Return type

[**TransferToBankResponse**](./Disbursement/TransferToBankResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transferToBankInquiryStatus()`

```php
transferToBankInquiryStatus($transferToBankInquiryStatusRequest): \Dana\Disbursement\v1\Model\TransferToBankInquiryStatusResponse
```

Transfer to Bank Inquiry Status

This API is used for merchant to do inquiry status transfer to Bank transaction to DANA

### Example

```php
<?php
use Dana\Configuration;
use Dana\Env;
use Dana\Disbursement\v1\Api\DisbursementApi;
use Dana\Disbursement\v1\Model\TransferToBankInquiryStatusRequest;

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



$apiInstance = new DisbursementApi(
    null, // this also can be set to custom http client which implements `GuzzleHttp\ClientInterface`
    $configuration
);
$transferToBankInquiryStatusRequest = TransferToBankInquiryStatusRequest();

try {
    $result = $apiInstance->transferToBankInquiryStatus($transferToBankInquiryStatusRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisbursementApi->transferToBankInquiryStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Payload

[**TransferToBankInquiryStatusRequest**](./Disbursement/TransferToBankInquiryStatusRequest.md)

### Return type

[**TransferToBankInquiryStatusResponse**](./Disbursement/TransferToBankInquiryStatusResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transferToDana()`

```php
transferToDana($transferToDanaRequest): \Dana\Disbursement\v1\Model\TransferToDanaResponse
```

Transfer to DANA

This API is used for merchant to do top up request to DANA

### Example

```php
<?php
use Dana\Configuration;
use Dana\Env;
use Dana\Disbursement\v1\Api\DisbursementApi;
use Dana\Disbursement\v1\Model\TransferToDanaRequest;

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



$apiInstance = new DisbursementApi(
    null, // this also can be set to custom http client which implements `GuzzleHttp\ClientInterface`
    $configuration
);
$transferToDanaRequest = TransferToDanaRequest();

try {
    $result = $apiInstance->transferToDana($transferToDanaRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisbursementApi->transferToDana: ', $e->getMessage(), PHP_EOL;
}
```

### Payload

[**TransferToDanaRequest**](./Disbursement/TransferToDanaRequest.md)

### Return type

[**TransferToDanaResponse**](./Disbursement/TransferToDanaResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transferToDanaInquiryStatus()`

```php
transferToDanaInquiryStatus($transferToDanaInquiryStatusRequest): \Dana\Disbursement\v1\Model\TransferToDanaInquiryStatusResponse
```

Transfer to DANA Inquiry Status

This API is used for merchant to do inquiry status top up transaction to DANA

### Example

```php
<?php
use Dana\Configuration;
use Dana\Env;
use Dana\Disbursement\v1\Api\DisbursementApi;
use Dana\Disbursement\v1\Model\TransferToDanaInquiryStatusRequest;

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



$apiInstance = new DisbursementApi(
    null, // this also can be set to custom http client which implements `GuzzleHttp\ClientInterface`
    $configuration
);
$transferToDanaInquiryStatusRequest = TransferToDanaInquiryStatusRequest();

try {
    $result = $apiInstance->transferToDanaInquiryStatus($transferToDanaInquiryStatusRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisbursementApi->transferToDanaInquiryStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Payload

[**TransferToDanaInquiryStatusRequest**](./Disbursement/TransferToDanaInquiryStatusRequest.md)

### Return type

[**TransferToDanaInquiryStatusResponse**](./Disbursement/TransferToDanaInquiryStatusResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)


## Enum Types

### Example Usage

```php
// Importing an enum class
use Dana\Disbursement\v1\Enum\TerminalType;

// Using enum constants
$model->setTerminalType(TerminalType::APP);

// Using enum values directly as strings
$model->setTerminalType('APP');
```

### ActorType

| Constant | Value |
|----------|-------|
| `USER` | `USER` |
| `MERCHANT` | `MERCHANT` |
| `MERCHANT_OPERATOR` | `MERCHANT_OPERATOR` |
| `BACK_OFFICE` | `BACK_OFFICE` |
| `SYSTEM` | `SYSTEM` |

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

