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

[****](./Disbursement/.md)

### Return type

[**\Dana\Disbursement\v1\Model\BankAccountInquiryResponse**](./Disbursement/BankAccountInquiryResponse.md)

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

[****](./Disbursement/.md)

### Return type

[**\Dana\Disbursement\v1\Model\DanaAccountInquiryResponse**](./Disbursement/DanaAccountInquiryResponse.md)

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

[****](./Disbursement/.md)

### Return type

[**\Dana\Disbursement\v1\Model\TransferToBankResponse**](./Disbursement/TransferToBankResponse.md)

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

[****](./Disbursement/.md)

### Return type

[**\Dana\Disbursement\v1\Model\TransferToBankInquiryStatusResponse**](./Disbursement/TransferToBankInquiryStatusResponse.md)

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

[****](./Disbursement/.md)

### Return type

[**\Dana\Disbursement\v1\Model\TransferToDanaResponse**](./Disbursement/TransferToDanaResponse.md)

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

[****](./Disbursement/.md)

### Return type

[**\Dana\Disbursement\v1\Model\TransferToDanaInquiryStatusResponse**](./Disbursement/TransferToDanaInquiryStatusResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
