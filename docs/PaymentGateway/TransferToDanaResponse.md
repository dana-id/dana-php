# # TransferToDanaResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**responseCode** | **string** | Refer to response code list |
**responseMessage** | **string** | Refer to response code list |
**referenceNo** | **string** | Transaction identifier on DANA system | [optional]
**partnerReferenceNo** | **string** | Unique transaction identifier on partner system which assigned to each transaction&lt;br&gt; Notes:&lt;br&gt; If the partner receives a timeout or an unexpected response from DANA and partner expects to perform retry request to DANA, please use the partnerReferenceNo that is the same as the one used in the transaction request process before |
**sessionId** | **string** | Session identifier | [optional]
**customerNumber** | **string** | Customer account number, in format 628xxx | [optional]
**amount** | [**\Dana\Disbursement\v1\Model\Money**](Money.md) | Amount. Contains two sub-fields:&lt;br&gt; 1. Value: Transaction amount, including the cents&lt;br&gt; 2. Currency: Currency code based on ISO |
**additionalInfo** | **object** | Additional information | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
