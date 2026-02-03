# # RefundOrderResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**responseCode** | **string** | Refer to response code list |
**responseMessage** | **string** | Refer to response code list |
**originalReferenceNo** | **string** | Original transaction identifier on DANA system | [optional]
**originalPartnerReferenceNo** | **string** | Original transaction identifier on partner system |
**originalExternalId** | **string** | Original external identifier on header message | [optional]
**originalCaptureNo** | **string** | DANA&#39;s capture identifier. Use to refund the corresponding capture order | [optional]
**refundNo** | **string** | Refund number identifier on DANA system | [optional]
**partnerRefundNo** | **string** | Reference number from merchant for the refund |
**refundAmount** | [**\Dana\Widget\v1\Model\Money**](Money.md) | Refund amount. Contains two sub-fields - 1. Value (Amount, including the cents) and 2. Currency (Currency code based on ISO) |
**refundTime** | **string** | Refund time, in format YYYY-MM-DDTHH:mm:ss+07:00. Time must be in GMT+7 (Jakarta time) | [optional]
**additionalInfo** | **object** | Additional information | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
