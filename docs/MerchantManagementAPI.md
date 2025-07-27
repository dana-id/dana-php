# Dana\MerchantManagement\MerchantManagementApi

All URIs are relative to https://api.saas.dana.id, except if the operation defines another base path.

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
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CLIENT_SECRET
$config = Dana\MerchantManagement\Configuration::getDefaultConfiguration()->setApiKey('clientSecret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\MerchantManagement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('clientSecret', 'Bearer');


$apiInstance = new Dana\MerchantManagement\Api\MerchantManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createDivisionRequest = new \Dana\MerchantManagement\v1\Model\CreateDivisionRequest(); // \Dana\MerchantManagement\v1\Model\CreateDivisionRequest

try {
    $result = $apiInstance->createDivision($createDivisionRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantManagementApi->createDivision: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createDivisionRequest** | [**\Dana\MerchantManagement\v1\Model\CreateDivisionRequest**](./MerchantManagement/CreateDivisionRequest.md)|  | |

### Return type

[**\Dana\MerchantManagement\v1\Model\CreateDivisionResponse**](./MerchantManagement/CreateDivisionResponse.md)

### Authorization

[CLIENT_SECRET](../../README.md#CLIENT_SECRET)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

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
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CLIENT_SECRET
$config = Dana\MerchantManagement\Configuration::getDefaultConfiguration()->setApiKey('clientSecret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\MerchantManagement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('clientSecret', 'Bearer');


$apiInstance = new Dana\MerchantManagement\Api\MerchantManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createShopRequest = new \Dana\MerchantManagement\v1\Model\CreateShopRequest(); // \Dana\MerchantManagement\v1\Model\CreateShopRequest

try {
    $result = $apiInstance->createShop($createShopRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantManagementApi->createShop: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createShopRequest** | [**\Dana\MerchantManagement\v1\Model\CreateShopRequest**](./MerchantManagement/CreateShopRequest.md)|  | |

### Return type

[**\Dana\MerchantManagement\v1\Model\CreateShopResponse**](./MerchantManagement/CreateShopResponse.md)

### Authorization

[CLIENT_SECRET](../../README.md#CLIENT_SECRET)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

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
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CLIENT_SECRET
$config = Dana\MerchantManagement\Configuration::getDefaultConfiguration()->setApiKey('clientSecret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\MerchantManagement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('clientSecret', 'Bearer');


$apiInstance = new Dana\MerchantManagement\Api\MerchantManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$queryDivisionRequest = new \Dana\MerchantManagement\v1\Model\QueryDivisionRequest(); // \Dana\MerchantManagement\v1\Model\QueryDivisionRequest

try {
    $result = $apiInstance->queryDivision($queryDivisionRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantManagementApi->queryDivision: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **queryDivisionRequest** | [**\Dana\MerchantManagement\v1\Model\QueryDivisionRequest**](./MerchantManagement/QueryDivisionRequest.md)|  | |

### Return type

[**\Dana\MerchantManagement\v1\Model\QueryDivisionResponse**](./MerchantManagement/QueryDivisionResponse.md)

### Authorization

[CLIENT_SECRET](../../README.md#CLIENT_SECRET)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

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
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CLIENT_SECRET
$config = Dana\MerchantManagement\Configuration::getDefaultConfiguration()->setApiKey('clientSecret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\MerchantManagement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('clientSecret', 'Bearer');


$apiInstance = new Dana\MerchantManagement\Api\MerchantManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$queryMerchantResourceRequest = new \Dana\MerchantManagement\v1\Model\QueryMerchantResourceRequest(); // \Dana\MerchantManagement\v1\Model\QueryMerchantResourceRequest

try {
    $result = $apiInstance->queryMerchantResource($queryMerchantResourceRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantManagementApi->queryMerchantResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **queryMerchantResourceRequest** | [**\Dana\MerchantManagement\v1\Model\QueryMerchantResourceRequest**](./MerchantManagement/QueryMerchantResourceRequest.md)|  | |

### Return type

[**\Dana\MerchantManagement\v1\Model\QueryMerchantResourceResponse**](./MerchantManagement/QueryMerchantResourceResponse.md)

### Authorization

[CLIENT_SECRET](../../README.md#CLIENT_SECRET)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

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
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CLIENT_SECRET
$config = Dana\MerchantManagement\Configuration::getDefaultConfiguration()->setApiKey('clientSecret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\MerchantManagement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('clientSecret', 'Bearer');


$apiInstance = new Dana\MerchantManagement\Api\MerchantManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$queryShopRequest = new \Dana\MerchantManagement\v1\Model\QueryShopRequest(); // \Dana\MerchantManagement\v1\Model\QueryShopRequest

try {
    $result = $apiInstance->queryShop($queryShopRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantManagementApi->queryShop: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **queryShopRequest** | [**\Dana\MerchantManagement\v1\Model\QueryShopRequest**](./MerchantManagement/QueryShopRequest.md)|  | |

### Return type

[**\Dana\MerchantManagement\v1\Model\QueryShopResponse**](./MerchantManagement/QueryShopResponse.md)

### Authorization

[CLIENT_SECRET](../../README.md#CLIENT_SECRET)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

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
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CLIENT_SECRET
$config = Dana\MerchantManagement\Configuration::getDefaultConfiguration()->setApiKey('clientSecret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\MerchantManagement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('clientSecret', 'Bearer');


$apiInstance = new Dana\MerchantManagement\Api\MerchantManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updateDivisionRequest = new \Dana\MerchantManagement\v1\Model\UpdateDivisionRequest(); // \Dana\MerchantManagement\v1\Model\UpdateDivisionRequest

try {
    $result = $apiInstance->updateDivision($updateDivisionRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantManagementApi->updateDivision: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **updateDivisionRequest** | [**\Dana\MerchantManagement\v1\Model\UpdateDivisionRequest**](./MerchantManagement/UpdateDivisionRequest.md)|  | |

### Return type

[**\Dana\MerchantManagement\v1\Model\UpdateDivisionResponse**](./MerchantManagement/UpdateDivisionResponse.md)

### Authorization

[CLIENT_SECRET](../../README.md#CLIENT_SECRET)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

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
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CLIENT_SECRET
$config = Dana\MerchantManagement\Configuration::getDefaultConfiguration()->setApiKey('clientSecret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dana\MerchantManagement\Configuration::getDefaultConfiguration()->setApiKeyPrefix('clientSecret', 'Bearer');


$apiInstance = new Dana\MerchantManagement\Api\MerchantManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updateShopRequest = new \Dana\MerchantManagement\v1\Model\UpdateShopRequest(); // \Dana\MerchantManagement\v1\Model\UpdateShopRequest

try {
    $result = $apiInstance->updateShop($updateShopRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantManagementApi->updateShop: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **updateShopRequest** | [**\Dana\MerchantManagement\v1\Model\UpdateShopRequest**](./MerchantManagement/UpdateShopRequest.md)|  | |

### Return type

[**\Dana\MerchantManagement\v1\Model\UpdateShopResponse**](./MerchantManagement/UpdateShopResponse.md)

### Authorization

[CLIENT_SECRET](../../README.md#CLIENT_SECRET)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
