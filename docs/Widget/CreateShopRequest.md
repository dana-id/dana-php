# # CreateShopRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchantId** | **string** | Merchant id |
**parentDivisionId** | **string** | Parent division ID. Required when shopParentType is DIVISION or EXTERNAL_DIVISION | [optional]
**shopParentType** | **string** | Parent type for the shop |
**mainName** | **string** | Shop name |
**shopAddress** | [**\Dana\MerchantManagement\v1\Model\AddressInfo**](AddressInfo.md) |  | [optional]
**shopDesc** | **string** | Shop description | [optional]
**externalShopId** | **string** | External shop identifier |
**logoUrlMap** | **array<string,string>** | Logo images encoded in base64. Keys can be LOGO, PC_LOGO, MOBILE_LOGO. Images must be PNG format. | [optional]
**mccCodes** | **string[]** | MCC codes | [optional]
**sizeType** | **string** | Size type of the shop |
**ln** | **string** | Longitude | [optional]
**lat** | **string** | Latitude | [optional]
**taxNo** | **string** | Tax number (NPWP). Must be 15 digits | [optional]
**brandName** | **string** | Legal name/tax name | [optional]
**taxAddress** | [**\Dana\MerchantManagement\v1\Model\AddressInfo**](AddressInfo.md) |  | [optional]
**loyalty** | **string** | Flag for loyalty category | [optional]
**apiVersion** | **string** | API version flag. Use &gt; 2 for new attributes | [optional]
**businessEntity** | **string** | Business entity type. Required if apiVersion &gt; 2 | [optional]
**businessDocs** | [**\Dana\MerchantManagement\v1\Model\BusinessDocs[]**](BusinessDocs.md) | Business documents. Required if apiVersion &gt; 2 | [optional]
**ownerName** | [**\Dana\MerchantManagement\v1\Model\UserName**](UserName.md) |  | [optional]
**ownerIdType** | **string** | Owner ID type. Required if apiVersion &gt; 2 | [optional]
**ownerIdNo** | **string** | Owner ID number. Required if apiVersion &gt; 2 | [optional]
**ownerAddress** | [**\Dana\MerchantManagement\v1\Model\AddressInfo**](AddressInfo.md) |  | [optional]
**ownerPhoneNumber** | [**\Dana\MerchantManagement\v1\Model\MobileNoInfo**](MobileNoInfo.md) |  | [optional]
**shopOwning** | **string** | Shop ownership type. Required if apiVersion &gt; 2 | [optional]
**deviceNumber** | **string** | Device number. Required if apiVersion &gt; 2 | [optional]
**posNumber** | **string** | POS number. Required if apiVersion &gt; 2 | [optional]
**directorPics** | [**\Dana\MerchantManagement\v1\Model\PicInfo[]**](PicInfo.md) | Director PICs. Required if apiVersion &gt; 2 | [optional]
**nonDirectorPics** | [**\Dana\MerchantManagement\v1\Model\PicInfo[]**](PicInfo.md) | Non-director PICs. Required if apiVersion &gt; 2 | [optional]
**shopBizType** | **string** | Shop business type | [optional]
**extInfo** | **array<string,mixed>** | Extended information | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
