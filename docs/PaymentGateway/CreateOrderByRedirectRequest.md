# # CreateOrderByRedirectRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**additionalInfo** | [**\Dana\PaymentGateway\v1\Model\CreateOrderByRedirectAdditionalInfo**](CreateOrderByRedirectAdditionalInfo.md) |  | [optional]
**partnerReferenceNo** | **string** | Transaction identifier on partner system |
**merchantId** | **string** | Merchant identifier that is unique per each merchant |
**subMerchantId** | **string** | Information of sub merchant identifier | [optional]
**amount** | [**\Dana\PaymentGateway\v1\Model\Money**](Money.md) | Amount. Contains two sub-fields:&lt;br&gt; 1. Value: Transaction amount, including the cents&lt;br&gt; 2. Currency: Currency code based on ISO&lt;br&gt; |
**externalStoreId** | **string** | Store identifier to indicate to which store this payment belongs to | [optional]
**validUpTo** | **string** | The time when the payment will be automatically expired, in format YYYY-MM-DDTHH:mm:ss+07:00. Time must be in GMT+7 (Jakarta time) and cannot be more than one week in the future. |
**disabledPayMethods** | **string** | Payment method(s) that cannot be used for this | [optional]
**urlParams** | [**\Dana\PaymentGateway\v1\Model\UrlParam[]**](UrlParam.md) | Notify URL that DANA must send the payment notification to |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
