# # UpdateDivisionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchantId** | **string** | Merchant identifier |
**divisionId** | **string** | Division identifier. Required when divisionIdType is INNER_ID | [optional]
**divisionName** | **string** | Division name |
**divisionAddress** | [**\Dana\MerchantManagement\v1\Model\AddressInfo**](AddressInfo.md) |  |
**divisionDescription** | **string** | Division description | [optional]
**divisionType** | **string** | Division type |
**divisionIdType** | **string** | Division identifier type |
**externalDivisionId** | **string** | External division identifier. Required when divisionIdType is EXTERNAL_ID | [optional]
**newExternalDivisionId** | **string** | New external division identifier |
**logoUrlMap** | **array<string,string>** | Logo URL map with base64 encoded images. Keys can be LOGO, PC_LOGO, MOBILE_LOGO | [optional]
**mccCodes** | **string[]** | Merchant category codes |
**extInfo** | **array<string,mixed>** | Extended information |
**apiVersion** | **string** | API version flag. Use &gt; 2 for new attributes | [optional]
**businessDocs** | [**\Dana\MerchantManagement\v1\Model\BusinessDocs[]**](BusinessDocs.md) | Business documents. Required when apiVersion &gt; 2. \&quot;individu\&quot; entity can only use KTP and SIM. Other entities can use SIUP and NIB | [optional]
**businessEntity** | **string** | Business entity type. Required when apiVersion &gt; 2 | [optional]
**businessEndDate** | **string** | Business end date, in format YYYY-MM-DD. Required when apiVersion &gt; 2 | [optional]
**ownerName** | [**\Dana\MerchantManagement\v1\Model\UserName**](UserName.md) |  | [optional]
**ownerPhoneNumber** | [**\Dana\MerchantManagement\v1\Model\MobileNoInfo**](MobileNoInfo.md) |  | [optional]
**ownerIdType** | **string** | Owner identifier type. Required when apiVersion &gt; 2 | [optional]
**ownerIdNo** | **string** | Owner identifier number. Required when apiVersion &gt; 2. Length depends on ownerIdType - KTP (16), SIM (12-14), Passport (8), NIB (&gt;&#x3D;13), SIUP (free text) | [optional]
**ownerAddress** | [**\Dana\MerchantManagement\v1\Model\AddressInfo**](AddressInfo.md) |  | [optional]
**directorPics** | [**\Dana\MerchantManagement\v1\Model\PicInfo[]**](PicInfo.md) | Director as a PIC of sub merchant. Required when apiVersion &gt; 2 | [optional]
**nonDirectorPics** | [**\Dana\MerchantManagement\v1\Model\PicInfo[]**](PicInfo.md) | Non director which become a PIC of sub merchant. Required when apiVersion &gt; 2 | [optional]
**sizeType** | **string** | Size type. Required when apiVersion &gt; 2 | [optional]
**pgDivisionFlag** | **string** | Flag if division is type PG | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
