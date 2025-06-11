# # IPGPaymentRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**partner_reference_no** | **string** | Unique transaction identifier on partner system which assigned to each transaction |
**merchant_id** | **string** | Merchant identifier that is unique per each merchant |
**sub_merchant_id** | **string** |  | [optional]
**amount** | [**\Dana\IPG\v1\Model\Money**](Money.md) |  |
**external_store_id** | **string** | Store identifier to indicate to which store this payment belongs to | [optional]
**valid_up_to** | **string** | The time when the payment will be automatically expired, in format YYYY-MM-DDTHH:mm:ss+07:00. Time must be in GMT+7 (Jakarta time) | [optional]
**point_of_initiation** | **string** | Used for getting more info regarding source of request of the user | [optional]
**disabled_pay_methods** | **string** | Payment method(s) that cannot be used for this payment | [optional]
**pay_option_details** | [**\Dana\IPG\v1\Model\PayOptionDetail[]**](PayOptionDetail.md) | Payment option that will be used for this payment | [optional]
**additional_info** | [**\Dana\IPG\v1\Model\IPGPaymentRequestAdditionalInfo**](IPGPaymentRequestAdditionalInfo.md) |  |
**url_params** | [**\Dana\IPG\v1\Model\UrlParam[]**](UrlParam.md) | Notify URL that DANA must send the payment notification to | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
