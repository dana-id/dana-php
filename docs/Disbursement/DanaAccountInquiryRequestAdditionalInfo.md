# # DanaAccountInquiryRequestAdditionalInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**fundType** | **string** | Additional information of top up fund type, i.e.&lt;br&gt; AGENT_TOPUP_FOR_ |
**externalDivisionId** | **string** | Additional information of external division identifier. This parameter only used for Top Up Disbursement subMerchant (fundType : AGENT_TOPUP_FOR_USER_SETTLE)&lt;br&gt; Notes:&lt;br&gt; The required of this parameter is Optional, but if \&quot;additionalInfo.chargeTarget\&quot; has value DIVISION then the required of this parameter will be changed to Mandatory | [optional]
**chargeTarget** | **string** | Additional information of charge target. This parameter only used for Top Up Disbursement subMerchant. The value are:&lt;br&gt; • null&lt;br&gt; • DIVISION&lt;br&gt; • MERCHANT&lt;br&gt; if the value is DIVISION, externalDivisionId will be Mandatory | [optional]
**accessToken** | **string** | 1. Contains customer token, which has been obtained from binding process, refer to Account Binding &amp; Unbinding documentation&lt;br&gt; 2. If request is coming from user interaction, this field is mandatory. If not, just filled customerNumber | [optional]
**customerId** | **string** | Public user identifier of DANA user&lt;br&gt; Notes:&lt;br&gt; If used, requires customerNumber to be filled with default phone number format \&quot;620000000000\&quot; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
