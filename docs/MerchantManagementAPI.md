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

[****](./MerchantManagement/.md)

### Return type

[**\Dana\MerchantManagement\v1\Model\CreateDivisionResponse**](./MerchantManagement/CreateDivisionResponse.md)

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

[****](./MerchantManagement/.md)

### Return type

[**\Dana\MerchantManagement\v1\Model\CreateShopResponse**](./MerchantManagement/CreateShopResponse.md)

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

[****](./MerchantManagement/.md)

### Return type

[**\Dana\MerchantManagement\v1\Model\QueryDivisionResponse**](./MerchantManagement/QueryDivisionResponse.md)

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

[****](./MerchantManagement/.md)

### Return type

[**\Dana\MerchantManagement\v1\Model\QueryMerchantResourceResponse**](./MerchantManagement/QueryMerchantResourceResponse.md)

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

[****](./MerchantManagement/.md)

### Return type

[**\Dana\MerchantManagement\v1\Model\QueryShopResponse**](./MerchantManagement/QueryShopResponse.md)

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

[****](./MerchantManagement/.md)

### Return type

[**\Dana\MerchantManagement\v1\Model\UpdateDivisionResponse**](./MerchantManagement/UpdateDivisionResponse.md)

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

[****](./MerchantManagement/.md)

### Return type

[**\Dana\MerchantManagement\v1\Model\UpdateShopResponse**](./MerchantManagement/UpdateShopResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
