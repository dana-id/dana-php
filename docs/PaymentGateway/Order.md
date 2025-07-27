# # Order

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**buyer** | [**\Dana\Widget\v1\Model\Buyer**](Buyer.md) |  | [optional]
**seller** | [**\Dana\Widget\v1\Model\Seller**](Seller.md) |  | [optional]
**orderTitle** | **string** | Additional information of order title |
**merchantTransType** | **string** | Additional information of merchant transaction type | [optional]
**orderMemo** | **string** | Additional information of order memo | [optional]
**createdTime** | **string** | Additional information of created time, in format YYYY-MM-DDTHH:mm:ss+07:00. Time must be in GMT+7 (Jakarta time) | [optional]
**goods** | [**\Dana\Widget\v1\Model\Goods[]**](Goods.md) |  | [optional]
**shippingInfo** | [**\Dana\Widget\v1\Model\ShippingInfo[]**](ShippingInfo.md) | Additional information of shipping | [optional]
**internationalOrderInfo** | [**\Dana\Widget\v1\Model\InternationalOrderInfo**](InternationalOrderInfo.md) | Additional information of international order. Only use for Mini Program service | [optional]
**extendInfo** | **string** | Additional information of extend | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
