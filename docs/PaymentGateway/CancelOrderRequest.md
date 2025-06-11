# # CancelOrderRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**original_partner_reference_no** | **string** | Original transaction identifier on partner system |
**original_reference_no** | **string** | Original transaction identifier on DANA system | [optional]
**original_external_id** | **string** | Original external identifier on header message | [optional]
**merchant_id** | **string** | Merchant identifier that is unique per each merchant |
**sub_merchant_id** | **string** | Information of sub merchant identifier | [optional]
**reason** | **string** | Cancellation reason | [optional]
**external_store_id** | **string** | Store identifier to indicate to which store this payment belongs to | [optional]
**amount** | [**\Dana\IPG\v1\Model\Money**](Money.md) | Amount. Contains two sub fields - Value (Transaction amount, including the cents) and Currency (Currency code based on ISO 4217) | [optional]
**additional_info** | **object** | Additional information | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
