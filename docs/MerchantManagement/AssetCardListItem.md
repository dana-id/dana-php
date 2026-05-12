# # AssetCardListItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contactBizType** | **string** | Contact business type (&#x60;ContactBizTypeEnum&#x60;) |
**cardIndexNo** | **string** | Card index number |
**cardNoLength** | **string** | Card number length based on card index number |
**maskedCardNo** | **string** | Card number (masked) |
**assetType** | **string** | Asset / card type (&#x60;AssetCardTypeEnum&#x60;) |
**holderName** | **array<string,mixed>** | Holder name (JSON object per DANA spec) |
**instLogoUrl** | **string** | Institution logo URL | [optional]
**instId** | **string** | Institution identifier |
**instOfficialName** | **string** | Institution official name based on &#x60;instId&#x60; |
**expiryYear** | **string** | Expiry year (e.g. debit, credit, virtual account) |
**expiryMonth** | **string** | Expiry month |
**verified** | **string** | Whether the user&#39;s card is verified |
**bindingId** | **string** | Asset card bind identifier | [optional]
**defaultAsset** | **string** | Whether this asset is the user&#39;s default payment | [optional]
**enableStatus** | **string** | Whether the card status is enabled; &#x60;\&quot;true\&quot;&#x60; when &#x60;enableOnly&#x60; in request was true | [optional]
**directDebit** | **string** | Whether payment uses direct debit | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
