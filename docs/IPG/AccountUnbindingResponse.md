# # AccountUnbindingResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**response_code** | **string** | Response code. Refer to https://dashboard.dana.id/api-docs/read/108#HTML-AccountUnbinding-ResponseCodeandMessage |
**response_message** | **string** | Response message. Refer to https://dashboard.dana.id/api-docs/read/108#HTML-AccountUnbinding-ResponseCodeandMessage |
**reference_no** | **string** | Transaction identifier on DANA system | [optional]
**partner_reference_no** | **string** | Unique transaction identifier on partner system which assigned to each transaction | [optional]
**merchant_id** | **string** | Merchant identifier that is unique per each merchant | [optional]
**sub_merchant_id** | **string** | Information of sub merchant identifier | [optional]
**link_id** | **string** | Information of link identifier | [optional]
**unlink_result** | **string** | Result of unlinking process | [optional]
**additional_info** | **object** | Additional information | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
