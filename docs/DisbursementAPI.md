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
| `APP` | `APP` |
| `WEB` | `WEB` |
| `WAP` | `WAP` |
| `SYSTEM` | `SYSTEM` |
| `BALANCE` | `BALANCE` |
| `COUPON` | `COUPON` |
| `NET_BANKING` | `NET_BANKING` |
| `CREDIT_CARD` | `CREDIT_CARD` |
| `DEBIT_CARD` | `DEBIT_CARD` |
| `VIRTUAL_ACCOUNT` | `VIRTUAL_ACCOUNT` |
| `OTC` | `OTC` |
| `DIRECT_DEBIT_CREDIT_CARD` | `DIRECT_DEBIT_CREDIT_CARD` |
| `DIRECT_DEBIT_DEBIT_CARD` | `DIRECT_DEBIT_DEBIT_CARD` |

### OrderTerminalType

| Constant | Value |
|----------|-------|
| `APP` | `APP` |
| `WEB` | `WEB` |
| `WAP` | `WAP` |
| `SYSTEM` | `SYSTEM` |
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
| `NETWORK_PAY_PG_SPAY` | `NETWORK_PAY_PG_SPAY` |
| `NETWORK_PAY_PG_OVO` | `NETWORK_PAY_PG_OVO` |

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
| `NETWORK_PAY_PG_SPAY` | `NETWORK_PAY_PG_SPAY` |
| `NETWORK_PAY_PG_OVO` | `NETWORK_PAY_PG_OVO` |
| `NETWORK_PAY_PG_GOPAY` | `NETWORK_PAY_PG_GOPAY` |
| `NETWORK_PAY_PG_LINKAJA` | `NETWORK_PAY_PG_LINKAJA` |
| `NETWORK_PAY_PG_CARD` | `NETWORK_PAY_PG_CARD` |
| `VIRTUAL_ACCOUNT_BCA` | `VIRTUAL_ACCOUNT_BCA` |
| `VIRTUAL_ACCOUNT_BNI` | `VIRTUAL_ACCOUNT_BNI` |

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
| `IPG` | `IPG` |
| `APP` | `APP` |
| `WEB` | `WEB` |
| `WAP` | `WAP` |
| `SYSTEM` | `SYSTEM` |
| `PAY_RETURN` | `PAY_RETURN` |

### SourcePlatform

| Constant | Value |
|----------|-------|
| `IPG` | `IPG` |
| `APP` | `APP` |
| `WEB` | `WEB` |
| `WAP` | `WAP` |
| `SYSTEM` | `SYSTEM` |
| `PAY_RETURN` | `PAY_RETURN` |
| `NOTIFICATION` | `NOTIFICATION` |

### TerminalType

| Constant | Value |
|----------|-------|
| `APP` | `APP` |
| `WEB` | `WEB` |
| `WAP` | `WAP` |
| `SYSTEM` | `SYSTEM` |
| `PAY_RETURN` | `PAY_RETURN` |
| `NOTIFICATION` | `NOTIFICATION` |

### Type

| Constant | Value |
|----------|-------|
| `PAY_RETURN` | `PAY_RETURN` |
| `NOTIFICATION` | `NOTIFICATION` |

