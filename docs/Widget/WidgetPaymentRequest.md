# # WidgetPaymentRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**partnerReferenceNo** | **string** | Unique transaction identifier on partner system which assigned to each transaction |
**merchantId** | **string** | Merchant identifier that is unique per each merchant |
**subMerchantId** | **string** |  | [optional]
**amount** | [**\Dana\Widget\v1\Model\Money**](Money.md) |  |
**externalStoreId** | **string** | Store identifier to indicate to which store this payment belongs to | [optional]
**validUpTo** | **string** | The time when the payment will be automatically expired, in format YYYY-MM-DDTHH:mm:ss+07:00. Time must be in GMT+7 (Jakarta time) |
**pointOfInitiation** | **string** | Used for getting more info regarding source of request of the user | [optional]
**disabledPayMethods** | **string** | Payment method(s) that cannot be used for this payment | [optional]
**payOptionDetails** | [**\Dana\Widget\v1\Model\PayOptionDetail[]**](PayOptionDetail.md) | Payment option that will be used for this payment | [optional]
**additionalInfo** | [**\Dana\Widget\v1\Model\WidgetPaymentRequestAdditionalInfo**](WidgetPaymentRequestAdditionalInfo.md) |  |
**urlParams** | [**\Dana\Widget\v1\Model\UrlParam[]**](UrlParam.md) | Notify URL that DANA must send the payment notification to | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
