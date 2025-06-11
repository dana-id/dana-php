# # RefundOrderRequestAdditionalInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payout_account_no** | **string** | Additional information of payout account number. This param need to be filled if want to refund to specific payout account not that specified by DANA | [optional]
**refund_applied_time** | **string** | Additional information of refund applied time, in format YYYY-MM-DDTHH:mm:ss+07:00. Time must be in GMT+7 (Jakarta time) | [optional]
**actor_type** | **string** | Additional information of actor type, refer to ActorTypeEnum | [optional]
**return_charge_to_payer** | **string** | Additional information of return charge to payer | [optional]
**destination** | **string** | Additional information of destination | [optional]
**env_info** | **object** | Additional information of environment |
**audit_info** | **object** | Additional information of audit | [optional]
**actor_context** | **object** | Additional information of actor context | [optional]
**refund_option_bill** | **object[]** | Additional information of refund option bill | [optional]
**extend_info** | **string** | Additional information of extend | [optional]
**async_refund** | **string** | Additional information of async refund to determine the process of refund whether sync or async. The values is true/false | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
