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

