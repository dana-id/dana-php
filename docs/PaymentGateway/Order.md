# # Order

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**buyer** | [**\Dana\IPG\v1\Model\Buyer**](Buyer.md) |  | [optional]
**seller** | [**\Dana\IPG\v1\Model\Seller**](Seller.md) |  | [optional]
**order_title** | **string** | Additional information of order title |
**merchant_trans_type** | **string** | Additional information of merchant transaction type | [optional]
**order_memo** | **string** | Additional information of order memo | [optional]
**created_time** | **string** | Additional information of created time, in format YYYY-MM-DDTHH:mm:ss+07:00. Time must be in GMT+7 (Jakarta time) | [optional]
**goods** | [**\Dana\IPG\v1\Model\Goods[]**](Goods.md) |  | [optional]
**shipping_info** | [**\Dana\IPG\v1\Model\ShippingInfo[]**](ShippingInfo.md) | Additional information of shipping | [optional]
**international_order_info** | [**\Dana\IPG\v1\Model\InternationalOrderInfo**](InternationalOrderInfo.md) | Additional information of international order. Only use for Mini Program service | [optional]
**extend_info** | **string** | Additional information of extend | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
