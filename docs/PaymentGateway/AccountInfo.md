# # AccountInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**balanceType** | **string** | Account information of balance type to specify which balance type expected to be returned. Will return all available balance type if this parameter empty | [optional]
**amount** | [**\Dana\Widget\v1\Model\Money**](Money.md) | Account information of amount which include the net active amount. Contains two sub-fields:&lt;br&gt; 1. Value: Amount, including the cents&lt;br&gt; 2. Currency: Currency code based on ISO | [optional]
**floatAmount** | [**\Dana\Widget\v1\Model\Money**](Money.md) | Account information of float amount which include the inactive amount due to cut off period. Contains two sub-fields:&lt;br&gt; 1. Value: Amount, including the cents&lt;br&gt; 2. Currency: Currency code based on ISO | [optional]
**holdAmount** | [**\Dana\Widget\v1\Model\Money**](Money.md) | Account information of hold amount which include the unusable amount due to certain type of transaction. Contains two sub-fields:&lt;br&gt; 1. Value: Amount, including the cents&lt;br&gt; 2. Currency: Currency code based on ISO | [optional]
**availableBalance** | [**\Dana\Widget\v1\Model\Money**](Money.md) | Account information of available balance which include the active amount that can be used for transaction. Contains two sub-fields:&lt;br&gt; 1. Value: Amount, including the cents&lt;br&gt; 2. Currency: Currency code based on ISO | [optional]
**ledgerBalance** | [**\Dana\Widget\v1\Model\Money**](Money.md) | Account information of ledger balance which include the starting balance for this day. Contains two sub-fields:&lt;br&gt; 1. Value: Amount, including the cents&lt;br&gt; 2. Currency: Currency code based on ISO | [optional]
**currentMultilateralLimit** | [**\Dana\Widget\v1\Model\Money**](Money.md) | Account information of current multilateral limit. Contains two sub-fields:&lt;br&gt; 1. Value: Amount, including the cents&lt;br&gt; 2. Currency: Currency code based on ISO | [optional]
**registrationStatusCode** | **string** | Account information of customer registration status | [optional]
**status** | **string** | Account information of status. The values include:&lt;br&gt; 1 &#x3D; Active Account&lt;br&gt; 2 &#x3D; Closed Account&lt;br&gt; 4 &#x3D; New Account&lt;br&gt; 6 &#x3D; Restricted Account&lt;br&gt; 7 &#x3D; Frozen Account | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
