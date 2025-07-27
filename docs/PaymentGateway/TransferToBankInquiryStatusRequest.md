# # TransferToBankInquiryStatusRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**originalPartnerReferenceNo** | **string** | Original transaction identifier on partner system&lt;br&gt; Notes:&lt;br&gt; Required to be filled using the partnerReferenceNo that is the same as the one used in Transfer to Bank | [optional]
**originalReferenceNo** | **string** | Original transaction identifier on DANA system | [optional]
**originalExternalId** | **string** | Original external identifier on header message | [optional]
**serviceCode** | **string** | Transaction type indicator is based on the service code of the original transaction request, value always 00 | [default to '00']
**additionalInfo** | **object** | Additional information | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
