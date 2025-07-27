# # ApplyTokenResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**responseCode** | **string** | Response code. Refer to https://dashboard.dana.id/api-docs/read/110#HTML-ApplyToken-ResponseCodeandMessage |
**responseMessage** | **string** | Response message. Refer to https://dashboard.dana.id/api-docs/read/110#HTML-ApplyToken-ResponseCodeandMessage |
**tokenType** | **string** | Token type. Present if successfully processed | [optional]
**accessToken** | **string** | This token is called Customer Token that will be used as a parameter on header in other API “Authorization-Customer”. Present if successfully processed |
**accessTokenExpiryTime** | **string** | Expiry time for access token was given to user, in format YYYY-MM-DDTHH:mm:ss+07:00. Time must be in GMT+7 (Jakarta time). Present if successfully processed | [optional]
**refreshToken** | **string** | This token is used for refresh session if existing token has been expired. Present if successfully processed | [optional]
**refreshTokenExpiryTime** | **string** | Expiry time for refresh token was given to user, in format YYYY-MM-DDTHH:mm:ss+07:00. Time must be in GMT+7 (Jakarta time). Present if successfully processed | [optional]
**additionalInfo** | [**\Dana\Widget\v1\Model\ApplyTokenResponseAdditionalInfo**](ApplyTokenResponseAdditionalInfo.md) | Additional information | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
