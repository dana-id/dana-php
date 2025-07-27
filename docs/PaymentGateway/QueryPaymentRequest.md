# # QueryPaymentRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**originalPartnerReferenceNo** | **string** | Original transaction identifier on partner system | [optional]
**originalReferenceNo** | **string** | Original transaction identifier on DANA system | [optional]
**originalExternalId** | **string** | Original external identifier on header message | [optional]
**serviceCode** | **string** | Transaction type indicator is based on the service code of the original transaction request:&lt;br&gt; - IPG Cashier Pay - SNAP: 54&lt;br&gt; - QRIS CPM (Acquirer) - SNAP: 60&lt;br&gt; - QRIS MPM (Acquirer) - SNAP: 47&lt;br&gt; - Payment Gateway: 54&lt;br&gt; | [default to '54']
**transactionDate** | **string** | Transaction date in format YYYY-MM-DDTHH:mm:ss+07:00 (GMT+7, Jakarta time) | [optional]
**amount** | [**\Dana\Widget\v1\Model\Money**](Money.md) |  | [optional]
**merchantId** | **string** | Merchant identifier that is unique per each merchant |
**subMerchantId** | **string** | Information of sub merchant identifier | [optional]
**externalStoreId** | **string** | Store identifier to indicate to which store this payment belongs to | [optional]
**additionalInfo** | **object** | Additional information | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
