# # InternationalOrderInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**originOrderAmount** | [**\Dana\Widget\v1\Model\Money**](Money.md) | Origin order amount in the original currency. Contains value (amount including cents) and currency (code based on ISO) | [optional]
**exchangeRate** | [**\Dana\Widget\v1\Model\InternationalOrderInfoExchangeRate**](InternationalOrderInfoExchangeRate.md) |  | [optional]
**totalAmount** | [**\Dana\Widget\v1\Model\Money**](Money.md) | Total amount after conversion. Contains value (amount including cents) and currency (code based on ISO) | [optional]
**paymentPromoInfo** | [**\Dana\Widget\v1\Model\PaymentPromoInfo**](PaymentPromoInfo.md) | Define the detail of payment promo information, contains promotion that handled and set by merchant | [optional]
**refundPromoInfo** | [**\Dana\Widget\v1\Model\RefundPromoInfo**](RefundPromoInfo.md) | Define the detail of refund promo information | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
