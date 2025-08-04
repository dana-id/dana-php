# # FinishNotifyRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**original_partner_reference_no** | **string** | Original transaction identifier on DANA system |
**original_reference_no** | **string** | Original transaction identifier on partner system |
**original_external_id** | **string** | Original external identifier on header message | [optional]
**merchant_id** | **string** | Unique identifier per each merchant |
**sub_merchant_id** | **string** | Information of sub merchant identifier | [optional]
**amount** | [**\Dana\Webhook\v1\Model\Money**](Money.md) | Amount. Contains two sub-fields:&lt;br&gt; 1. Value: Transaction amount, including the cents&lt;br&gt; 2. Currency: Currency code based on ISO&lt;br&gt; |
**latest_transaction_status** | **string** | Transaction status code:&lt;br&gt; - 00 &#x3D; Success, the order has been paid&lt;br&gt; - 05 &#x3D; Cancelled, the order has been closed because it is expired&lt;br&gt; |
**transaction_status_desc** | **string** | Description of transaction status | [optional]
**created_time** | **string** | Transaction created time, in format YYYY-MM-DDTHH:mm:ss+07:00. Time must be in GMT+7 (Jakarta time) |
**finished_time** | **string** | Transaction finished time, in format YYYY-MM-DDTHH:mm:ss+07:00. Time must be in GMT+7 (Jakarta time) |
**external_store_id** | **string** | Store identifier to indicate to which store this payment belongs to | [optional]
**additional_info** | [**\Dana\Webhook\v1\Model\FinishNotifyRequestAdditionalInfo**](FinishNotifyRequestAdditionalInfo.md) | Additional information | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
