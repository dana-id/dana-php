# # UpdateShopRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shopId** | **string** | Shop identifier. Length depends on shopIdType - INNER_ID (21 max), EXTERNAL_ID (64 max) |
**merchantId** | **string** | Merchant identifier |
**shopIdType** | **string** | Shop identifier type |
**mainName** | **string** | Shop name | [optional]
**shopAddress** | [**\Dana\MerchantManagement\v1\Model\AddressInfo**](AddressInfo.md) |  |
**shopDesc** | **string** | Shop description | [optional]
**newExternalShopId** | **string** | New external shop identifier | [optional]
**mccCodes** | **string[]** | Merchant category code | [optional]
**logoUrlMap** | **array<string,string>** | Logo URL map with base64 encoded images. Keys can be LOGO, PC_LOGO, MOBILE_LOGO | [optional]
**extInfo** | **array<string,mixed>** | Extend information | [optional]
**sizeType** | **string** | Size type | [optional]
**ln** | **string** | Longitude of shop&#39;s location | [optional]
**lat** | **string** | Latitude of shop&#39;s location | [optional]
**loyalty** | **string** | Flag for loyalty category | [optional]
**ownerAddress** | [**\Dana\MerchantManagement\v1\Model\AddressInfo**](AddressInfo.md) |  | [optional]
**ownerName** | [**\Dana\MerchantManagement\v1\Model\UserName**](UserName.md) |  | [optional]
**ownerPhoneNumber** | [**\Dana\MerchantManagement\v1\Model\MobileNoInfo**](MobileNoInfo.md) |  | [optional]
**ownerIdType** | **string** | Owner identifier type | [optional]
**ownerIdNo** | **string** | Owner identifier number. Length depends on ownerIdType - KTP (16), SIM (12-14), Passport (8), NIB (&gt;&#x3D;13), SIUP (free text) | [optional]
**deviceNumber** | **string** | Device number | [optional]
**posNumber** | **string** | POS number | [optional]
**apiVersion** | **string** | API version flag. Use &gt; 2 for new attributes | [optional]
**businessEntity** | **string** | Business entity type | [optional]
**shopOwning** | **string** | Shop owning information | [optional]
**shopBizType** | **string** | Shop business type | [optional]
**businessDocs** | [**\Dana\MerchantManagement\v1\Model\BusinessDocs[]**](BusinessDocs.md) | Business documents. \&quot;individu\&quot; entity can only use KTP and SIM. Other entities can use SIUP and NIB | [optional]
**businessEndDate** | **string** | Business end date, in format YYYY-MM-dd | [optional]
**taxNo** | **string** | Tax number (NPWP). Must be 15 digits | [optional]
**taxAddress** | [**\Dana\MerchantManagement\v1\Model\AddressInfo**](AddressInfo.md) |  | [optional]
**brandName** | **string** | Brand name on legal name or tax name | [optional]
**directorPics** | [**\Dana\MerchantManagement\v1\Model\PicInfo[]**](PicInfo.md) | Director as a PIC of shop | [optional]
**nonDirectorPics** | [**\Dana\MerchantManagement\v1\Model\PicInfo[]**](PicInfo.md) | Non director which become an PIC of shop | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
