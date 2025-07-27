# # PayOptionDetail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payMethod** | **string** | Payment Method, e.g. CREDIT_CARD |
**payOption** | **string** | Payment option which shows the provider of this payment e.g. CREDIT_CARD_VISA |
**transAmount** | [**\Dana\Widget\v1\Model\Money**](Money.md) | Trans amount. Contains value and currency | [optional]
**feeAmount** | [**\Dana\Widget\v1\Model\Money**](Money.md) | Fee amount. Contains value and currency | [optional]
**cardToken** | **string** | Card token used for this payment | [optional]
**merchantToken** | **string** | Merchant token used for this payment | [optional]
**additionalInfo** | [**\Dana\Widget\v1\Model\PayOptionDetailAdditionalInfo**](PayOptionDetailAdditionalInfo.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
