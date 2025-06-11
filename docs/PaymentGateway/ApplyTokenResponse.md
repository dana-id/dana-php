# # ApplyTokenResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**response_code** | **string** | Response code. Refer to https://dashboard.dana.id/api-docs/read/110#HTML-ApplyToken-ResponseCodeandMessage |
**response_message** | **string** | Response message. Refer to https://dashboard.dana.id/api-docs/read/110#HTML-ApplyToken-ResponseCodeandMessage |
**token_type** | **string** | Token type. Present if successfully processed | [optional]
**access_token** | **string** | This token is called Customer Token that will be used as a parameter on header in other API “Authorization-Customer”. Present if successfully processed |
**access_token_expiry_time** | **string** | Expiry time for access token was given to user, in format YYYY-MM-DDTHH:mm:ss+07:00. Time must be in GMT+7 (Jakarta time). Present if successfully processed | [optional]
**refresh_token** | **string** | This token is used for refresh session if existing token has been expired. Present if successfully processed | [optional]
**refresh_token_expiry_time** | **string** | Expiry time for refresh token was given to user, in format YYYY-MM-DDTHH:mm:ss+07:00. Time must be in GMT+7 (Jakarta time). Present if successfully processed | [optional]
**additional_info** | [**\Dana\IPG\v1\Model\ApplyTokenResponseAdditionalInfo**](ApplyTokenResponseAdditionalInfo.md) | Additional information | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
