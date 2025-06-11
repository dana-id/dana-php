# # ApplyTokenRefreshTokenRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**additional_info** | **array<string,mixed>** | Additional information | [optional]
**grant_type** | **string** | Apply token request type. The value is REFRESH_TOKEN |
**auth_code** | **string** | Authorization code. Please refer to https://dashboard.dana.id/api-docs/read/125. Required if grantType is AUTHORIZATION_CODE | [optional]
**refresh_token** | **string** | This token is used for refresh session if existing token has been expired |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
