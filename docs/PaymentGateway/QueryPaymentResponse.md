# # QueryPaymentResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**response_code** | **string** | Refer to response code list:&lt;br&gt; * 2005500 - Successful&lt;br&gt; * 4005500 - Bad Request - Retry request with proper parameter&lt;br&gt; * 4005501 - Invalid Field Format - Retry request with proper parameter&lt;br&gt; * 4005502 - Invalid Mandatory Field - Retry request with proper parameter&lt;br&gt; * 4015500 - Unauthorized. [reason] - Retry request with proper parameter&lt;br&gt; * 4015501 - Invalid Token (B2B) - Retry request with proper parameter&lt;br&gt; * 4045501 - Transaction Not Found - Try to create a new order&lt;br&gt; * 4295500 - Too Many Requests - Retry request periodically&lt;br&gt; * 5005500 - General Error - Retry request periodically&lt;br&gt; * 5005501 - Internal Server Error - Retry request periodically&lt;br&gt; |
**response_message** | **string** | Refer to response code list |
**original_partner_reference_no** | **string** | Original transaction identifier on partner system | [optional]
**original_reference_no** | **string** | Original transaction identifier on DANA system | [optional]
**original_external_id** | **string** | Original external identifier on header message | [optional]
**service_code** | **string** | Transaction type indicator:&lt;br&gt; - IPG Cashier Pay - SNAP: 54&lt;br&gt; - QRIS CPM (Acquirer) - SNAP: 60&lt;br&gt; - QRIS MPM (Acquirer) - SNAP: 47&lt;br&gt; - Payment Gateway: 54&lt;br&gt; | [default to '54']
**latest_transaction_status** | **string** | Status code:&lt;br&gt; - 00 &#x3D; Success. Order has been successfully in final state and paid&lt;br&gt; - 01 &#x3D; Initiated. Waiting for payment. Mark Payment as Pending&lt;br&gt; - 02 &#x3D; Paying. The order is in process, not in final state, payment is success. Mark Payment as Success&lt;br&gt; - 05 &#x3D; Cancelled. Order has been cancelled. Mark Payment as Failed&lt;br&gt; - 07 &#x3D; Not found. Order is not found. Mark Payment as Failed&lt;br&gt; |
**transaction_status_desc** | **string** | Description of transaction status | [optional]
**original_response_code** | **string** | Original response code | [optional]
**original_response_message** | **string** | Original response message | [optional]
**session_id** | **string** | Session identifier | [optional]
**request_id** | **string** | Transaction request identifier | [optional]
**trans_amount** | [**\Dana\IPG\v1\Model\Money**](Money.md) |  | [optional]
**amount** | [**\Dana\IPG\v1\Model\Money**](Money.md) |  | [optional]
**fee_amount** | [**\Dana\IPG\v1\Model\Money**](Money.md) |  | [optional]
**paid_time** | **string** | Payment timestamp in format YYYY-MM-DDTHH:mm:ss+07:00 (Jakarta time) | [optional]
**title** | **string** | Brief description of transaction | [optional]
**additional_info** | [**\Dana\IPG\v1\Model\QueryPaymentResponseAdditionalInfo**](QueryPaymentResponseAdditionalInfo.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
