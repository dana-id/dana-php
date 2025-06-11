# # CreateOrderByRedirectAdditionalInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**mcc** | **string** | Additional information of merchant category code. This parameter is used to identify the type of business in which a merchant is engaged. Refer to Details of https://dashboard.dana.id/api-docs/read/197#OpenAPI-MerchantCategoryCode |
**extend_info** | **string** | Additional information of extend such as partner passthrough and risk information | [optional]
**env_info** | [**\Dana\PaymentGateway\v1\Model\EnvInfo**](EnvInfo.md) | Additional information of environment info |
**order** | [**\Dana\PaymentGateway\v1\Model\OrderRedirectObject**](OrderRedirectObject.md) | Additional information of order | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
