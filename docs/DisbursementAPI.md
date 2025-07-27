# Dana\Disbursement\DisbursementApi

All URIs are relative to https://api.saas.dana.id, except if the operation defines another base path.

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
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ORIGIN
$config = Dana\Disbursement\Configuration::getDefaultConfiguration()->setApiKey('ORIGIN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Disbursement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ORIGIN', 'Bearer');

// Configure API key authorization: X_PARTNER_ID
$config = Dana\Disbursement\Configuration::getDefaultConfiguration()->setApiKey('X-PARTNER-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Disbursement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-PARTNER-ID', 'Bearer');

// Configure API key authorization: CHANNEL_ID
$config = Dana\Disbursement\Configuration::getDefaultConfiguration()->setApiKey('CHANNEL-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Disbursement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('CHANNEL-ID', 'Bearer');

// Configure API key authorization: PRIVATE_KEY
$config = Dana\Disbursement\Configuration::getDefaultConfiguration()->setApiKey('privatekey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Disbursement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('privatekey', 'Bearer');

// Configure API key authorization: PRIVATE_KEY_PATH
$config = Dana\Disbursement\Configuration::getDefaultConfiguration()->setApiKey('privatekeypath', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Disbursement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('privatekeypath', 'Bearer');


$apiInstance = new Dana\Disbursement\Api\DisbursementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bankAccountInquiryRequest = new \Dana\Disbursement\v1\Model\BankAccountInquiryRequest(); // \Dana\Disbursement\v1\Model\BankAccountInquiryRequest

try {
    $result = $apiInstance->bankAccountInquiry($bankAccountInquiryRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisbursementApi->bankAccountInquiry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bankAccountInquiryRequest** | [**\Dana\Disbursement\v1\Model\BankAccountInquiryRequest**](./Disbursement/BankAccountInquiryRequest.md)|  | |

### Return type

[**\Dana\Disbursement\v1\Model\BankAccountInquiryResponse**](./Disbursement/BankAccountInquiryResponse.md)

### Authorization

[ORIGIN](../../README.md#ORIGIN), [X_PARTNER_ID](../../README.md#X_PARTNER_ID), [CHANNEL_ID](../../README.md#CHANNEL_ID), [PRIVATE_KEY](../../README.md#PRIVATE_KEY), [PRIVATE_KEY_PATH](../../README.md#PRIVATE_KEY_PATH)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

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
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ORIGIN
$config = Dana\Disbursement\Configuration::getDefaultConfiguration()->setApiKey('ORIGIN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Disbursement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ORIGIN', 'Bearer');

// Configure API key authorization: X_PARTNER_ID
$config = Dana\Disbursement\Configuration::getDefaultConfiguration()->setApiKey('X-PARTNER-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Disbursement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-PARTNER-ID', 'Bearer');

// Configure API key authorization: CHANNEL_ID
$config = Dana\Disbursement\Configuration::getDefaultConfiguration()->setApiKey('CHANNEL-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Disbursement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('CHANNEL-ID', 'Bearer');

// Configure API key authorization: PRIVATE_KEY
$config = Dana\Disbursement\Configuration::getDefaultConfiguration()->setApiKey('privatekey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Disbursement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('privatekey', 'Bearer');

// Configure API key authorization: PRIVATE_KEY_PATH
$config = Dana\Disbursement\Configuration::getDefaultConfiguration()->setApiKey('privatekeypath', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Disbursement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('privatekeypath', 'Bearer');


$apiInstance = new Dana\Disbursement\Api\DisbursementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$danaAccountInquiryRequest = new \Dana\Disbursement\v1\Model\DanaAccountInquiryRequest(); // \Dana\Disbursement\v1\Model\DanaAccountInquiryRequest

try {
    $result = $apiInstance->danaAccountInquiry($danaAccountInquiryRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisbursementApi->danaAccountInquiry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **danaAccountInquiryRequest** | [**\Dana\Disbursement\v1\Model\DanaAccountInquiryRequest**](./Disbursement/DanaAccountInquiryRequest.md)|  | |

### Return type

[**\Dana\Disbursement\v1\Model\DanaAccountInquiryResponse**](./Disbursement/DanaAccountInquiryResponse.md)

### Authorization

[ORIGIN](../../README.md#ORIGIN), [X_PARTNER_ID](../../README.md#X_PARTNER_ID), [CHANNEL_ID](../../README.md#CHANNEL_ID), [PRIVATE_KEY](../../README.md#PRIVATE_KEY), [PRIVATE_KEY_PATH](../../README.md#PRIVATE_KEY_PATH)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

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
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ORIGIN
$config = Dana\Disbursement\Configuration::getDefaultConfiguration()->setApiKey('ORIGIN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Disbursement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ORIGIN', 'Bearer');

// Configure API key authorization: X_PARTNER_ID
$config = Dana\Disbursement\Configuration::getDefaultConfiguration()->setApiKey('X-PARTNER-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Disbursement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-PARTNER-ID', 'Bearer');

// Configure API key authorization: CHANNEL_ID
$config = Dana\Disbursement\Configuration::getDefaultConfiguration()->setApiKey('CHANNEL-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Disbursement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('CHANNEL-ID', 'Bearer');

// Configure API key authorization: PRIVATE_KEY
$config = Dana\Disbursement\Configuration::getDefaultConfiguration()->setApiKey('privatekey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Disbursement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('privatekey', 'Bearer');

// Configure API key authorization: PRIVATE_KEY_PATH
$config = Dana\Disbursement\Configuration::getDefaultConfiguration()->setApiKey('privatekeypath', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Disbursement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('privatekeypath', 'Bearer');


$apiInstance = new Dana\Disbursement\Api\DisbursementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transferToBankRequest = new \Dana\Disbursement\v1\Model\TransferToBankRequest(); // \Dana\Disbursement\v1\Model\TransferToBankRequest

try {
    $result = $apiInstance->transferToBank($transferToBankRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisbursementApi->transferToBank: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transferToBankRequest** | [**\Dana\Disbursement\v1\Model\TransferToBankRequest**](./Disbursement/TransferToBankRequest.md)|  | |

### Return type

[**\Dana\Disbursement\v1\Model\TransferToBankResponse**](./Disbursement/TransferToBankResponse.md)

### Authorization

[ORIGIN](../../README.md#ORIGIN), [X_PARTNER_ID](../../README.md#X_PARTNER_ID), [CHANNEL_ID](../../README.md#CHANNEL_ID), [PRIVATE_KEY](../../README.md#PRIVATE_KEY), [PRIVATE_KEY_PATH](../../README.md#PRIVATE_KEY_PATH)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

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
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ORIGIN
$config = Dana\Disbursement\Configuration::getDefaultConfiguration()->setApiKey('ORIGIN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Disbursement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ORIGIN', 'Bearer');

// Configure API key authorization: X_PARTNER_ID
$config = Dana\Disbursement\Configuration::getDefaultConfiguration()->setApiKey('X-PARTNER-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Disbursement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-PARTNER-ID', 'Bearer');

// Configure API key authorization: CHANNEL_ID
$config = Dana\Disbursement\Configuration::getDefaultConfiguration()->setApiKey('CHANNEL-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Disbursement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('CHANNEL-ID', 'Bearer');

// Configure API key authorization: PRIVATE_KEY
$config = Dana\Disbursement\Configuration::getDefaultConfiguration()->setApiKey('privatekey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Disbursement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('privatekey', 'Bearer');

// Configure API key authorization: PRIVATE_KEY_PATH
$config = Dana\Disbursement\Configuration::getDefaultConfiguration()->setApiKey('privatekeypath', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Disbursement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('privatekeypath', 'Bearer');


$apiInstance = new Dana\Disbursement\Api\DisbursementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transferToBankInquiryStatusRequest = new \Dana\Disbursement\v1\Model\TransferToBankInquiryStatusRequest(); // \Dana\Disbursement\v1\Model\TransferToBankInquiryStatusRequest

try {
    $result = $apiInstance->transferToBankInquiryStatus($transferToBankInquiryStatusRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisbursementApi->transferToBankInquiryStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transferToBankInquiryStatusRequest** | [**\Dana\Disbursement\v1\Model\TransferToBankInquiryStatusRequest**](./Disbursement/TransferToBankInquiryStatusRequest.md)|  | |

### Return type

[**\Dana\Disbursement\v1\Model\TransferToBankInquiryStatusResponse**](./Disbursement/TransferToBankInquiryStatusResponse.md)

### Authorization

[ORIGIN](../../README.md#ORIGIN), [X_PARTNER_ID](../../README.md#X_PARTNER_ID), [CHANNEL_ID](../../README.md#CHANNEL_ID), [PRIVATE_KEY](../../README.md#PRIVATE_KEY), [PRIVATE_KEY_PATH](../../README.md#PRIVATE_KEY_PATH)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

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
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ORIGIN
$config = Dana\Disbursement\Configuration::getDefaultConfiguration()->setApiKey('ORIGIN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Disbursement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ORIGIN', 'Bearer');

// Configure API key authorization: X_PARTNER_ID
$config = Dana\Disbursement\Configuration::getDefaultConfiguration()->setApiKey('X-PARTNER-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Disbursement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-PARTNER-ID', 'Bearer');

// Configure API key authorization: CHANNEL_ID
$config = Dana\Disbursement\Configuration::getDefaultConfiguration()->setApiKey('CHANNEL-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Disbursement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('CHANNEL-ID', 'Bearer');

// Configure API key authorization: PRIVATE_KEY
$config = Dana\Disbursement\Configuration::getDefaultConfiguration()->setApiKey('privatekey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Disbursement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('privatekey', 'Bearer');

// Configure API key authorization: PRIVATE_KEY_PATH
$config = Dana\Disbursement\Configuration::getDefaultConfiguration()->setApiKey('privatekeypath', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Disbursement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('privatekeypath', 'Bearer');


$apiInstance = new Dana\Disbursement\Api\DisbursementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transferToDanaRequest = new \Dana\Disbursement\v1\Model\TransferToDanaRequest(); // \Dana\Disbursement\v1\Model\TransferToDanaRequest

try {
    $result = $apiInstance->transferToDana($transferToDanaRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisbursementApi->transferToDana: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transferToDanaRequest** | [**\Dana\Disbursement\v1\Model\TransferToDanaRequest**](./Disbursement/TransferToDanaRequest.md)|  | |

### Return type

[**\Dana\Disbursement\v1\Model\TransferToDanaResponse**](./Disbursement/TransferToDanaResponse.md)

### Authorization

[ORIGIN](../../README.md#ORIGIN), [X_PARTNER_ID](../../README.md#X_PARTNER_ID), [CHANNEL_ID](../../README.md#CHANNEL_ID), [PRIVATE_KEY](../../README.md#PRIVATE_KEY), [PRIVATE_KEY_PATH](../../README.md#PRIVATE_KEY_PATH)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

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
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ORIGIN
$config = Dana\Disbursement\Configuration::getDefaultConfiguration()->setApiKey('ORIGIN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Disbursement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ORIGIN', 'Bearer');

// Configure API key authorization: X_PARTNER_ID
$config = Dana\Disbursement\Configuration::getDefaultConfiguration()->setApiKey('X-PARTNER-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Disbursement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-PARTNER-ID', 'Bearer');

// Configure API key authorization: CHANNEL_ID
$config = Dana\Disbursement\Configuration::getDefaultConfiguration()->setApiKey('CHANNEL-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Disbursement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('CHANNEL-ID', 'Bearer');

// Configure API key authorization: PRIVATE_KEY
$config = Dana\Disbursement\Configuration::getDefaultConfiguration()->setApiKey('privatekey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Disbursement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('privatekey', 'Bearer');

// Configure API key authorization: PRIVATE_KEY_PATH
$config = Dana\Disbursement\Configuration::getDefaultConfiguration()->setApiKey('privatekeypath', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\Disbursement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('privatekeypath', 'Bearer');


$apiInstance = new Dana\Disbursement\Api\DisbursementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transferToDanaInquiryStatusRequest = new \Dana\Disbursement\v1\Model\TransferToDanaInquiryStatusRequest(); // \Dana\Disbursement\v1\Model\TransferToDanaInquiryStatusRequest

try {
    $result = $apiInstance->transferToDanaInquiryStatus($transferToDanaInquiryStatusRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisbursementApi->transferToDanaInquiryStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transferToDanaInquiryStatusRequest** | [**\Dana\Disbursement\v1\Model\TransferToDanaInquiryStatusRequest**](./Disbursement/TransferToDanaInquiryStatusRequest.md)|  | |

### Return type

[**\Dana\Disbursement\v1\Model\TransferToDanaInquiryStatusResponse**](./Disbursement/TransferToDanaInquiryStatusResponse.md)

### Authorization

[ORIGIN](../../README.md#ORIGIN), [X_PARTNER_ID](../../README.md#X_PARTNER_ID), [CHANNEL_ID](../../README.md#CHANNEL_ID), [PRIVATE_KEY](../../README.md#PRIVATE_KEY), [PRIVATE_KEY_PATH](../../README.md#PRIVATE_KEY_PATH)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
