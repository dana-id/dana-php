# # RefundOrderResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**response_code** | **string** | Refer to response code list |
**response_message** | **string** | Refer to response code list |
**original_reference_no** | **string** | Original transaction identifier on DANA system | [optional]
**original_partner_reference_no** | **string** | Original transaction identifier on partner system |
**original_external_id** | **string** | Original external identifier on header message | [optional]
**original_capture_no** | **string** | DANA&#39;s capture identifier. Use to refund the corresponding capture order | [optional]
**refund_no** | **string** | Refund number identifier on DANA system | [optional]
**partner_refund_no** | **string** | Reference number from merchant for the refund |
**refund_amount** | [**\Dana\IPG\v1\Model\Money**](Money.md) | Refund amount. Contains two sub-fields - 1. Value (Amount, including the cents) and 2. Currency (Currency code based on ISO) |
**refund_time** | **string** | Refund time, in format YYYY-MM-DDTHH:mm:ss+07:00. Time must be in GMT+7 (Jakarta time) | [optional]
**additional_info** | **object** | Additional information | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
