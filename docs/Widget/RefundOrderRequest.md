# # RefundOrderRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchantId** | **string** | Merchant identifier that is unique per each merchant |
**subMerchantId** | **string** | Information of sub merchant identifier | [optional]
**originalReferenceNo** | **string** | Original transaction identifier on DANA system | [optional]
**originalPartnerReferenceNo** | **string** | Original transaction identifier on partner system |
**originalExternalId** | **string** | Original external identifier on header message | [optional]
**originalCaptureNo** | **string** | DANA&#39;s capture identifier. Use to refund the corresponding capture order | [optional]
**partnerRefundNo** | **string** | Reference number from merchant for the refund |
**refundAmount** | [**\Dana\Widget\v1\Model\Money**](Money.md) | Refund amount. Contains two sub-fields - 1. Value (Transaction amount, including the cents) and 2. Currency (Currency code based on ISO) |
**externalStoreId** | **string** | Store identifier to indicate to which store this payment belongs to | [optional]
**reason** | **string** | Refund reason | [optional]
**additionalInfo** | [**\Dana\Widget\v1\Model\RefundOrderRequestAdditionalInfo**](RefundOrderRequestAdditionalInfo.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
