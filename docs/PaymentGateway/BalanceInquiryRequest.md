# # BalanceInquiryRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**partnerReferenceNo** | **string** | Unique transaction identifier on partner system which assigned to each transaction&lt;br&gt; Notes:&lt;br&gt; If the partner receives a timeout or an unexpected response from DANA and partner expects to perform retry request to DANA, please use the partnerReferenceNo that is the same as the one used in the transaction request process before | [optional]
**balanceTypes** | **string[]** | Information of balance types to specify which balance type expected to be returned. Will return all available balance type if this parameter empty | [optional]
**additionalInfo** | [**\Dana\Widget\v1\Model\BalanceInquiryRequestAdditionalInfo**](BalanceInquiryRequestAdditionalInfo.md) | Additional information |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
