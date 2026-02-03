# # ConsultPayRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchantId** | **string** | Merchant identifier that is unique per each merchant |
**amount** | [**\Dana\PaymentGateway\v1\Model\Money**](Money.md) | Amount. Contains two sub-fields:&lt;br&gt; 1. Value: Transaction amount, including the cents&lt;br&gt; 2. Currency: Currency code based on ISO&lt;br&gt; |
**additionalInfo** | [**\Dana\PaymentGateway\v1\Model\ConsultPayRequestAdditionalInfo**](ConsultPayRequestAdditionalInfo.md) | Additional information |
**externalStoreId** | **string** | Store identifier to indicate to which store this payment belongs to. Need to be provided to show QRIS payment method. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
