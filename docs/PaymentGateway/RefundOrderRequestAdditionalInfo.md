# # RefundOrderRequestAdditionalInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payoutAccountNo** | **string** | Additional information of payout account number. This param need to be filled if want to refund to specific payout account not that specified by DANA | [optional]
**refundAppliedTime** | **string** | Additional information of refund applied time, in format YYYY-MM-DDTHH:mm:ss+07:00. Time must be in GMT+7 (Jakarta time) | [optional]
**actorType** | **string** | Additional information of actor type, refer to ActorTypeEnum | [optional]
**returnChargeToPayer** | **string** | Additional information of return charge to payer | [optional]
**destination** | **string** | Additional information of destination | [optional]
**envInfo** | **object** | Additional information of environment |
**auditInfo** | **object** | Additional information of audit | [optional]
**actorContext** | **object** | Additional information of actor context | [optional]
**refundOptionBill** | **object[]** | Additional information of refund option bill | [optional]
**extendInfo** | **string** | Additional information of extend | [optional]
**asyncRefund** | **string** | Additional information of async refund to determine the process of refund whether sync or async. The values is true/false | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
