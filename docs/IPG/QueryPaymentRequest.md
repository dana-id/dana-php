# # QueryPaymentRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**original_partner_reference_no** | **string** | Original transaction identifier on partner system | [optional]
**original_reference_no** | **string** | Original transaction identifier on DANA system | [optional]
**original_external_id** | **string** | Original external identifier on header message | [optional]
**service_code** | **string** | Transaction type indicator is based on the service code of the original transaction request:&lt;br&gt; - IPG Cashier Pay - SNAP: 54&lt;br&gt; - QRIS CPM (Acquirer) - SNAP: 60&lt;br&gt; - QRIS MPM (Acquirer) - SNAP: 47&lt;br&gt; - Payment Gateway: 54&lt;br&gt; | [default to '54']
**transaction_date** | **string** | Transaction date in format YYYY-MM-DDTHH:mm:ss+07:00 (GMT+7, Jakarta time) | [optional]
**amount** | [**\Dana\IPG\v1\Model\Money**](Money.md) |  | [optional]
**merchant_id** | **string** | Merchant identifier that is unique per each merchant |
**sub_merchant_id** | **string** | Information of sub merchant identifier | [optional]
**external_store_id** | **string** | Store identifier to indicate to which store this payment belongs to | [optional]
**additional_info** | **object** | Additional information | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
