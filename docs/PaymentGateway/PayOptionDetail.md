# # PayOptionDetail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pay_method** | **string** | Payment Method, e.g. CREDIT_CARD |
**pay_option** | **string** | Payment option which shows the provider of this payment e.g. CREDIT_CARD_VISA |
**trans_amount** | [**\Dana\IPG\v1\Model\Money**](Money.md) | Trans amount. Contains value and currency | [optional]
**fee_amount** | [**\Dana\IPG\v1\Model\Money**](Money.md) | Fee amount. Contains value and currency | [optional]
**card_token** | **string** | Card token used for this payment | [optional]
**merchant_token** | **string** | Merchant token used for this payment | [optional]
**additional_info** | [**\Dana\IPG\v1\Model\PayOptionDetailAdditionalInfo**](PayOptionDetailAdditionalInfo.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
