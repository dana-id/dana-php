# # Oauth2UrlData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**externalId** | **string** | Identifier from merchant |
**merchantId** | **string** | Merchant identifier that is unique per each merchant |
**subMerchantId** | **string** | Information of sub merchant identifier | [optional]
**seamlessData** | [**\Dana\Widget\v1\Model\Oauth2UrlDataSeamlessData**](Oauth2UrlDataSeamlessData.md) |  | [optional]
**scopes** | **string[]** | The scopes of the authorization | [optional]
**redirectUrl** | **string** | When user authorization is success, the user will be redirected to this URL |
**state** | **string** | Random string for CSRF protection purposes | [optional]
**lang** | **string** | Service language code. ISO 639-1 | [optional] [default to 'id']
**allowRegistration** | **string** | If value equals true, provider may enable registration process during binding. Default true | [optional] [default to 'true']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
