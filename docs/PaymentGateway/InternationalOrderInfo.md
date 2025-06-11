# # InternationalOrderInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**origin_order_amount** | [**\Dana\IPG\v1\Model\Money**](Money.md) | Origin order amount in the original currency. Contains value (amount including cents) and currency (code based on ISO) | [optional]
**exchange_rate** | [**\Dana\IPG\v1\Model\InternationalOrderInfoExchangeRate**](InternationalOrderInfoExchangeRate.md) |  | [optional]
**total_amount** | [**\Dana\IPG\v1\Model\Money**](Money.md) | Total amount after conversion. Contains value (amount including cents) and currency (code based on ISO) | [optional]
**payment_promo_info** | [**\Dana\IPG\v1\Model\PaymentPromoInfo**](PaymentPromoInfo.md) | Define the detail of payment promo information, contains promotion that handled and set by merchant | [optional]
**refund_promo_info** | [**\Dana\IPG\v1\Model\RefundPromoInfo**](RefundPromoInfo.md) | Define the detail of refund promo information | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
