# # DanaAccountInquiryResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**responseCode** | **string** | Refer to response code list |
**responseMessage** | **string** | Refer to response code list |
**referenceNo** | **string** | Transaction identifier on DANA system | [optional]
**partnerReferenceNo** | **string** | Unique transaction identifier on partner system which assigned to each transaction&lt;br&gt; Notes:&lt;br&gt; If the partner receives a timeout or an unexpected response from DANA and partner expects to perform retry request to DANA, please use the partnerReferenceNo that is the same as the one used in the transaction request process before | [optional]
**sessionId** | **string** | Session identifier | [optional]
**customerNumber** | **string** | Customer account number, in format 628xxx | [optional]
**customerName** | **string** | Customer account name |
**customerMonthlyInLimit** | **string** | Limitation of transfer to DANA balance for customer per month | [optional]
**minAmount** | [**\Dana\Disbursement\v1\Model\Money**](Money.md) | Minimal amount. Contains two sub-fields:&lt;br&gt; 1. Value: Amount, including the cents&lt;br&gt; 2. Currency: Currency code based on ISO |
**maxAmount** | [**\Dana\Disbursement\v1\Model\Money**](Money.md) | Maximal amount. Contains two sub-fields:&lt;br&gt; 1. Value: Amount, including the cents&lt;br&gt; 2. Currency: Currency code based on ISO |
**amount** | [**\Dana\Disbursement\v1\Model\Money**](Money.md) | Amount. Contains two sub-fields:&lt;br&gt; 1. Value: Transaction amount, including the cents&lt;br&gt; 2. Currency: Currency code based on ISO |
**feeAmount** | [**\Dana\Disbursement\v1\Model\Money**](Money.md) | Fee amount. Contains two sub-fields:&lt;br&gt; 1. Value: Amount, including the cents&lt;br&gt; 2. Currency: Currency code based on ISO |
**feeType** | **string** | Type of fee for each transfer to DANA transaction. Such as admin fee | [optional]
**additionalInfo** | **object** | Additional information | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
