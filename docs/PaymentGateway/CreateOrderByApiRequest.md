# # CreateOrderByApiRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pay_option_details** | [**\Dana\PaymentGateway\v1\Model\PayOptionDetail[]**](PayOptionDetail.md) |  |
**additional_info** | [**\Dana\PaymentGateway\v1\Model\CreateOrderByApiAdditionalInfo**](CreateOrderByApiAdditionalInfo.md) |  | [optional]
**partner_reference_no** | **string** | Transaction identifier on partner system |
**merchant_id** | **string** | Merchant identifier that is unique per each merchant |
**sub_merchant_id** | **string** | Information of sub merchant identifier | [optional]
**amount** | [**\Dana\PaymentGateway\v1\Model\Money**](Money.md) | Amount. Contains two sub-fields:&lt;br&gt; 1. Value: Transaction amount, including the cents&lt;br&gt; 2. Currency: Currency code based on ISO&lt;br&gt; |
**external_store_id** | **string** | Store identifier to indicate to which store this payment belongs to | [optional]
**valid_up_to** | **string** | The time when the payment will be automatically expired, in format YYYY-MM-DDTHH:mm:ss+07:00. Time must be in GMT+7 (Jakarta time) | [optional]
**disabled_pay_methods** | **string** | Payment method(s) that cannot be used for this | [optional]
**url_params** | [**\Dana\PaymentGateway\v1\Model\UrlParam[]**](UrlParam.md) | Notify URL that DANA must send the payment notification to |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
