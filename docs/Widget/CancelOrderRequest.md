# # CancelOrderRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**originalPartnerReferenceNo** | **string** | Original transaction identifier on partner system |
**originalReferenceNo** | **string** | Original transaction identifier on DANA system | [optional]
**originalExternalId** | **string** | Original external identifier on header message | [optional]
**merchantId** | **string** | Merchant identifier that is unique per each merchant |
**subMerchantId** | **string** | Information of sub merchant identifier | [optional]
**reason** | **string** | Cancellation reason | [optional]
**externalStoreId** | **string** | Store identifier to indicate to which store this payment belongs to | [optional]
**amount** | [**\Dana\Widget\v1\Model\Money**](Money.md) | Amount. Contains two sub fields - Value (Transaction amount, including the cents) and Currency (Currency code based on ISO 4217) | [optional]
**additionalInfo** | **object** | Additional information | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
