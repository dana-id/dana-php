# # CreateOrderResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**responseCode** | **string** | Response code. Refer to https://dashboard.dana.id/api-docs/read/243#paymentgatewayprod-paymentRedirect-ResponseCodeandMessage |
**responseMessage** | **string** | Response message. Refer to https://dashboard.dana.id/api-docs/read/243#paymentgatewayprod-paymentRedirect-ResponseCodeandMessage |
**referenceNo** | **string** | Transaction identifier on DANA system. Present if successfully processed | [optional]
**partnerReferenceNo** | **string** | Transaction identifier on partner system |
**webRedirectUrl** | **string** | Checkout URLs. Present if successfully processed and payment method is not OVO/Virtual Account/QRIS | [optional]
**additionalInfo** | [**\Dana\PaymentGateway\v1\Model\CreateOrderResponseAdditionalInfo**](CreateOrderResponseAdditionalInfo.md) | Additional information | [optional]
**externalOrderId** | **string** | External order identifier | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
