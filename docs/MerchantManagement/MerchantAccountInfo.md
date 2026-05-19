# # MerchantAccountInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accountNo** | **string** | Merchant account number | [optional]
**status** | **string** | Merchant account status | [optional]
**debitFreezeStatus** | **string** | Debit freeze status (merchant cannot accept money from DANA when frozen/closed) | [optional]
**creditFreezeStatus** | **string** | Credit freeze status (merchant cannot disburse when frozen/closed) | [optional]
**totalAmount** | **string** | Total amount as JSON string with &#x60;amount&#x60; and &#x60;currency&#x60; fields | [optional]
**availableAmount** | **string** | Available amount as JSON string with &#x60;amount&#x60; and &#x60;currency&#x60; fields | [optional]
**currency** | **string** | Currency code (ISO) | [optional]
**accountType** | **string** | Account type | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
