# # RefundOrderRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchant_id** | **string** | Merchant identifier that is unique per each merchant |
**sub_merchant_id** | **string** | Information of sub merchant identifier | [optional]
**original_reference_no** | **string** | Original transaction identifier on DANA system | [optional]
**original_partner_reference_no** | **string** | Original transaction identifier on partner system |
**original_external_id** | **string** | Original external identifier on header message | [optional]
**original_capture_no** | **string** | DANA&#39;s capture identifier. Use to refund the corresponding capture order | [optional]
**partner_refund_no** | **string** | Reference number from merchant for the refund |
**refund_amount** | [**\Dana\IPG\v1\Model\Money**](Money.md) | Refund amount. Contains two sub-fields - 1. Value (Transaction amount, including the cents) and 2. Currency (Currency code based on ISO) |
**external_store_id** | **string** | Store identifier to indicate to which store this payment belongs to | [optional]
**reason** | **string** | Refund reason | [optional]
**additional_info** | [**\Dana\IPG\v1\Model\RefundOrderRequestAdditionalInfo**](RefundOrderRequestAdditionalInfo.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
