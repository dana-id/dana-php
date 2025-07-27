# # AccountUnbindingResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**responseCode** | **string** | Response code. Refer to https://dashboard.dana.id/api-docs/read/108#HTML-AccountUnbinding-ResponseCodeandMessage |
**responseMessage** | **string** | Response message. Refer to https://dashboard.dana.id/api-docs/read/108#HTML-AccountUnbinding-ResponseCodeandMessage |
**referenceNo** | **string** | Transaction identifier on DANA system | [optional]
**partnerReferenceNo** | **string** | Unique transaction identifier on partner system which assigned to each transaction | [optional]
**merchantId** | **string** | Merchant identifier that is unique per each merchant | [optional]
**subMerchantId** | **string** | Information of sub merchant identifier | [optional]
**linkId** | **string** | Information of link identifier | [optional]
**unlinkResult** | **string** | Result of unlinking process | [optional]
**additionalInfo** | **object** | Additional information | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
