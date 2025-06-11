# # CreateOrderResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**response_code** | **string** | Response code. Refer to https://dashboard.dana.id/api-docs/read/243#paymentgatewayprod-paymentRedirect-ResponseCodeandMessage |
**response_message** | **string** | Response message. Refer to https://dashboard.dana.id/api-docs/read/243#paymentgatewayprod-paymentRedirect-ResponseCodeandMessage |
**reference_no** | **string** | Transaction identifier on DANA system. Present if successfully processed | [optional]
**partner_reference_no** | **string** | Transaction identifier on partner system |
**web_redirect_url** | **string** | Checkout URLs. Present if successfully processed and payment method is not OVO/Virtual Account/QRIS | [optional]
**additional_info** | [**\Dana\PaymentGateway\v1\Model\CreateOrderResponseAdditionalInfo**](CreateOrderResponseAdditionalInfo.md) | Additional information | [optional]
**external_order_id** | **string** | External order identifier | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
