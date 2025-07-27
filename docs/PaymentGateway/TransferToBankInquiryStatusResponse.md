# # TransferToBankInquiryStatusResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**responseCode** | **string** | Refer to response code list |
**responseMessage** | **string** | Refer to response code list |
**originalPartnerReferenceNo** | **string** | Original transaction identifier on partner system | [optional]
**originalReferenceNo** | **string** | Original transaction identifier on DANA system | [optional]
**originalExternalId** | **string** | Original external identifier on header message | [optional]
**serviceCode** | **string** | Transaction type indicator is based on the service code of the original transaction request, value always 00 | [default to '00']
**amount** | [**\Dana\Disbursement\v1\Model\Money**](Money.md) | Amount. Contains two sub-fields:&lt;br&gt; 1. Value: Transaction amount, including the cents&lt;br&gt; 2. Currency: Currency code based on ISO | [optional]
**latestTransactionStatus** | **string** | Status of latest transaction:&lt;br&gt; 00 - Success&lt;br&gt; 01 - Initiated&lt;br&gt; 02 - Paying&lt;br&gt; 03 - Pending&lt;br&gt; 04 - Refunded&lt;br&gt; 05 - Canceled&lt;br&gt; 06 - Failed&lt;br&gt; 07 - Not found |
**transactionStatusDesc** | **string** | Description of transaction status | [optional]
**additionalInfo** | **object** | Additional information | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
