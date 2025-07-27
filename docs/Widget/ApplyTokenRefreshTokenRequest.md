# # ApplyTokenRefreshTokenRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**additionalInfo** | **array<string,mixed>** | Additional information | [optional]
**grantType** | **string** | Apply token request type. The value is REFRESH_TOKEN |
**authCode** | **string** | Authorization code. Please refer to https://dashboard.dana.id/api-docs/read/125. Required if grantType is AUTHORIZATION_CODE | [optional]
**refreshToken** | **string** | This token is used for refresh session if existing token has been expired |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
