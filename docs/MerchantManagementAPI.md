# MerchantManagementApi

All URIs are relative to http://api.sandbox.dana.id for sandbox and https://api.saas.dana.id for production.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createDivision()**](MerchantManagementApi.md#createDivision) | **POST** /dana/merchant/division/createDivision.htm | Create Division |
| [**createShop()**](MerchantManagementApi.md#createShop) | **POST** /dana/merchant/shop/createShop.htm | Member – Create Shop |
| [**queryDivision()**](MerchantManagementApi.md#queryDivision) | **POST** /dana/merchant/division/queryDivision.htm | Query Division |
| [**queryMerchantResource()**](MerchantManagementApi.md#queryMerchantResource) | **POST** /dana/merchant/queryMerchantResource.htm | Member – Merchant Open API Check Disbursement Account |
| [**queryShop()**](MerchantManagementApi.md#queryShop) | **POST** /dana/merchant/shop/queryShop.htm | Member – Query Shop |
| [**updateDivision()**](MerchantManagementApi.md#updateDivision) | **POST** /dana/merchant/division/updateDivision.htm | Update Division |
| [**updateShop()**](MerchantManagementApi.md#updateShop) | **POST** /dana/merchant/shop/updateShop.htm | Update Shop |


## `createDivision()`

```php
createDivision($createDivisionRequest): \Dana\MerchantManagement\v1\Model\CreateDivisionResponse
```

Create Division

This API is used to create a new division

### Example

```php
<?php
use Dana\Configuration;
use Dana\Env;
use Dana\MerchantManagement\v1\Api\MerchantManagementApi;
use Dana\MerchantManagement\v1\Model\CreateDivisionRequest;

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
$configuration->setApiKey('CLIENT_SECRET', getenv('CLIENT_SECRET'));



$apiInstance = new MerchantManagementApi(
    null, // this also can be set to custom http client which implements `GuzzleHttp\ClientInterface`
    $configuration
);
$createDivisionRequest = CreateDivisionRequest();

try {
    $result = $apiInstance->createDivision($createDivisionRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantManagementApi->createDivision: ', $e->getMessage(), PHP_EOL;
}
```

### Payload

[**CreateDivisionRequest**](./MerchantManagement/CreateDivisionRequest.md)

### Return type

[**CreateDivisionResponse**](./MerchantManagement/CreateDivisionResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createShop()`

```php
createShop($createShopRequest): \Dana\MerchantManagement\v1\Model\CreateShopResponse
```

Member – Create Shop

Create shop under merchant or division

### Example

```php
<?php
use Dana\Configuration;
use Dana\Env;
use Dana\MerchantManagement\v1\Api\MerchantManagementApi;
use Dana\MerchantManagement\v1\Model\CreateShopRequest;

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
$configuration->setApiKey('CLIENT_SECRET', getenv('CLIENT_SECRET'));



$apiInstance = new MerchantManagementApi(
    null, // this also can be set to custom http client which implements `GuzzleHttp\ClientInterface`
    $configuration
);
$createShopRequest = CreateShopRequest();

try {
    $result = $apiInstance->createShop($createShopRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantManagementApi->createShop: ', $e->getMessage(), PHP_EOL;
}
```

### Payload

[**CreateShopRequest**](./MerchantManagement/CreateShopRequest.md)

### Return type

[**CreateShopResponse**](./MerchantManagement/CreateShopResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryDivision()`

```php
queryDivision($queryDivisionRequest): \Dana\MerchantManagement\v1\Model\QueryDivisionResponse
```

Query Division

This API is used to obtain information of division

### Example

```php
<?php
use Dana\Configuration;
use Dana\Env;
use Dana\MerchantManagement\v1\Api\MerchantManagementApi;
use Dana\MerchantManagement\v1\Model\QueryDivisionRequest;

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
$configuration->setApiKey('CLIENT_SECRET', getenv('CLIENT_SECRET'));



$apiInstance = new MerchantManagementApi(
    null, // this also can be set to custom http client which implements `GuzzleHttp\ClientInterface`
    $configuration
);
$queryDivisionRequest = QueryDivisionRequest();

try {
    $result = $apiInstance->queryDivision($queryDivisionRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantManagementApi->queryDivision: ', $e->getMessage(), PHP_EOL;
}
```

### Payload

[**QueryDivisionRequest**](./MerchantManagement/QueryDivisionRequest.md)

### Return type

[**QueryDivisionResponse**](./MerchantManagement/QueryDivisionResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryMerchantResource()`

```php
queryMerchantResource($queryMerchantResourceRequest): \Dana\MerchantManagement\v1\Model\QueryMerchantResourceResponse
```

Member – Merchant Open API Check Disbursement Account

The interface is check merchant resource info (account balance merchant)

### Example

```php
<?php
use Dana\Configuration;
use Dana\Env;
use Dana\MerchantManagement\v1\Api\MerchantManagementApi;
use Dana\MerchantManagement\v1\Model\QueryMerchantResourceRequest;

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
$configuration->setApiKey('CLIENT_SECRET', getenv('CLIENT_SECRET'));



$apiInstance = new MerchantManagementApi(
    null, // this also can be set to custom http client which implements `GuzzleHttp\ClientInterface`
    $configuration
);
$queryMerchantResourceRequest = QueryMerchantResourceRequest();

try {
    $result = $apiInstance->queryMerchantResource($queryMerchantResourceRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantManagementApi->queryMerchantResource: ', $e->getMessage(), PHP_EOL;
}
```

### Payload

[**QueryMerchantResourceRequest**](./MerchantManagement/QueryMerchantResourceRequest.md)

### Return type

[**QueryMerchantResourceResponse**](./MerchantManagement/QueryMerchantResourceResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryShop()`

```php
queryShop($queryShopRequest): \Dana\MerchantManagement\v1\Model\QueryShopResponse
```

Member – Query Shop

This API is used to obtain information of shop information

### Example

```php
<?php
use Dana\Configuration;
use Dana\Env;
use Dana\MerchantManagement\v1\Api\MerchantManagementApi;
use Dana\MerchantManagement\v1\Model\QueryShopRequest;

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
$configuration->setApiKey('CLIENT_SECRET', getenv('CLIENT_SECRET'));



$apiInstance = new MerchantManagementApi(
    null, // this also can be set to custom http client which implements `GuzzleHttp\ClientInterface`
    $configuration
);
$queryShopRequest = QueryShopRequest();

try {
    $result = $apiInstance->queryShop($queryShopRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantManagementApi->queryShop: ', $e->getMessage(), PHP_EOL;
}
```

### Payload

[**QueryShopRequest**](./MerchantManagement/QueryShopRequest.md)

### Return type

[**QueryShopResponse**](./MerchantManagement/QueryShopResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDivision()`

```php
updateDivision($updateDivisionRequest): \Dana\MerchantManagement\v1\Model\UpdateDivisionResponse
```

Update Division

This API is used to update the division information

### Example

```php
<?php
use Dana\Configuration;
use Dana\Env;
use Dana\MerchantManagement\v1\Api\MerchantManagementApi;
use Dana\MerchantManagement\v1\Model\UpdateDivisionRequest;

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
$configuration->setApiKey('CLIENT_SECRET', getenv('CLIENT_SECRET'));



$apiInstance = new MerchantManagementApi(
    null, // this also can be set to custom http client which implements `GuzzleHttp\ClientInterface`
    $configuration
);
$updateDivisionRequest = UpdateDivisionRequest();

try {
    $result = $apiInstance->updateDivision($updateDivisionRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantManagementApi->updateDivision: ', $e->getMessage(), PHP_EOL;
}
```

### Payload

[**UpdateDivisionRequest**](./MerchantManagement/UpdateDivisionRequest.md)

### Return type

[**UpdateDivisionResponse**](./MerchantManagement/UpdateDivisionResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateShop()`

```php
updateShop($updateShopRequest): \Dana\MerchantManagement\v1\Model\UpdateShopResponse
```

Update Shop

This API is used to update the shop information

### Example

```php
<?php
use Dana\Configuration;
use Dana\Env;
use Dana\MerchantManagement\v1\Api\MerchantManagementApi;
use Dana\MerchantManagement\v1\Model\UpdateShopRequest;

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
$configuration->setApiKey('CLIENT_SECRET', getenv('CLIENT_SECRET'));



$apiInstance = new MerchantManagementApi(
    null, // this also can be set to custom http client which implements `GuzzleHttp\ClientInterface`
    $configuration
);
$updateShopRequest = UpdateShopRequest();

try {
    $result = $apiInstance->updateShop($updateShopRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantManagementApi->updateShop: ', $e->getMessage(), PHP_EOL;
}
```

### Payload

[**UpdateShopRequest**](./MerchantManagement/UpdateShopRequest.md)

### Return type

[**UpdateShopResponse**](./MerchantManagement/UpdateShopResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)


## Enum Types

### Example Usage

```php
// Importing an enum class
use Dana\MerchantManagement\v1\Enum\TerminalType;

// Using enum constants
$model->setTerminalType(TerminalType::APP);

// Using enum values directly as strings
$model->setTerminalType('APP');
```

### BusinessEntity

| Constant | Value |
|----------|-------|
| `PT` | `pt` |
| `CV` | `cv` |
| `INDIVIDU` | `individu` |
| `USAHA_DAGANG` | `usaha_dagang` |
| `YAYASAN` | `yayasan` |
| `KOPERASI` | `koperasi` |

### DivisionIdType

| Constant | Value |
|----------|-------|
| `INNER_ID` | `INNER_ID` |
| `EXTERNAL_ID` | `EXTERNAL_ID` |

### DivisionType

| Constant | Value |
|----------|-------|
| `REGION` | `REGION` |
| `AREA` | `AREA` |
| `BRANCH` | `BRANCH` |
| `OUTLET` | `OUTLET` |
| `STORE` | `STORE` |
| `KIOSK` | `KIOSK` |
| `STALL` | `STALL` |
| `COUNTER` | `COUNTER` |
| `BOOTH` | `BOOTH` |
| `POINT_OF_SALE` | `POINT_OF_SALE` |
| `VENDING_MACHINE` | `VENDING_MACHINE` |

### DocType

| Constant | Value |
|----------|-------|
| `KTP` | `KTP` |
| `SIM` | `SIM` |
| `SIUP` | `SIUP` |
| `NIB` | `NIB` |

### Loyalty

| Constant | Value |
|----------|-------|
| `TRUE` | `true` |
| `FALSE` | `false` |

### OwnerIdType

| Constant | Value |
|----------|-------|
| `KTP` | `KTP` |
| `SIM` | `SIM` |
| `PASSPORT` | `PASSPORT` |
| `SIUP` | `SIUP` |
| `NIB` | `NIB` |

### ParentRoleType

| Constant | Value |
|----------|-------|
| `MERCHANT` | `MERCHANT` |
| `DIVISION` | `DIVISION` |
| `EXTERNAL_DIVISION` | `EXTERNAL_DIVISION` |

### PgDivisionFlag

| Constant | Value |
|----------|-------|
| `TRUE` | `true` |
| `FALSE` | `false` |

### ResourceType

| Constant | Value |
|----------|-------|
| `MERCHANT_DEPOSIT_BALANCE` | `MERCHANT_DEPOSIT_BALANCE` |
| `MERCHANT_AVAILABLE_BALANCE` | `MERCHANT_AVAILABLE_BALANCE` |
| `MERCHANT_TOTAL_BALANCE` | `MERCHANT_TOTAL_BALANCE` |

### ResultStatus

| Constant | Value |
|----------|-------|
| `S` | `S` |
| `F` | `F` |
| `U` | `U` |

### ShopBizType

| Constant | Value |
|----------|-------|
| `ONLINE` | `ONLINE` |
| `OFFLINE` | `OFFLINE` |

### ShopIdType

| Constant | Value |
|----------|-------|
| `INNER_ID` | `INNER_ID` |
| `EXTERNAL_ID` | `EXTERNAL_ID` |

### ShopOwning

| Constant | Value |
|----------|-------|
| `DIRECT_OWNED` | `DIRECT_OWNED` |
| `FRANCHISED` | `FRANCHISED` |

### ShopParentType

| Constant | Value |
|----------|-------|
| `MERCHANT` | `MERCHANT` |
| `DIVISION` | `DIVISION` |
| `EXTERNAL_DIVISION` | `EXTERNAL_DIVISION` |

### SizeType

| Constant | Value |
|----------|-------|
| `UMI` | `UMI` |
| `UKE` | `UKE` |
| `UME` | `UME` |
| `UBE` | `UBE` |

### Verified

| Constant | Value |
|----------|-------|
| `TRUE` | `true` |
| `FALSE` | `false` |

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

