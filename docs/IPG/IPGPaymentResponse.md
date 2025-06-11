# # IPGPaymentResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**response_code** | **string** | Refer to response code list:&lt;br&gt; * 2005400 - Successful&lt;br&gt; * 4005400 - Bad Request - Retry request with proper parameter&lt;br&gt; * 4005401 - Invalid Field Format - Retry request with proper parameter&lt;br&gt; * 4005402 - Invalid Mandatory Field - Retry request with proper parameter&lt;br&gt; * 4015400 - Unauthorized. [reason] - Retry request with proper parameter&lt;br&gt; * 4035402 - Exceeds Transaction Amount Limit - Try to adjust the order amount&lt;br&gt; * 4035405 - Do Not Honor - Retry request with proper parameter or can contact DANA to check the user/account status&lt;br&gt; * 4035415 - Transaction Not Permitted - Retry request periodically or consult to DANA&lt;br&gt; * 4045408 - Invalid Merchant - Retry request with proper parameter&lt;br&gt; * 4045418 - Inconsistent Request - Retry with proper parameter&lt;br&gt; * 4295400 - Too Many Requests - Retry request periodically by sending same request payload&lt;br&gt; * 5005400 - General Error - Retry request periodically&lt;br&gt; * 5005401 - Internal Server Error - Retry request periodically by sending same request payload&lt;br&gt; |
**response_message** | **string** | Human readable response message |
**reference_no** | **string** | Transaction identifier on DANA system, returned when transaction is successfully processed | [optional]
**partner_reference_no** | **string** | Transaction identifier on partner system which assigned to each transaction |
**web_redirect_url** | **string** | DANA checkout URL, returned when transaction is successfully processed | [optional]
**additional_info** | **array<string,mixed>** | Additional information | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
