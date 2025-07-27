# # CreateDivisionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**apiVersion** | **string** | API Version. As per the respective API reference. Must be &gt; 2 |
**merchantId** | **string** | Merchant identifier |
**parentDivisionId** | **string** | Parent division identifier. Required when parentRoleType is DIVISION or EXTERNAL_DIVISION. Length depends on parentRoleType - DIVISION (21 max), EXTERNAL_DIVISION (64 max) | [optional]
**parentRoleType** | **string** | Type of parent role |
**divisionName** | **string** | Division name |
**divisionAddress** | [**\Dana\MerchantManagement\v1\Model\AddressInfo**](AddressInfo.md) |  |
**divisionDescription** | **string** | Division description | [optional]
**divisionType** | **string** | Division type |
**externalDivisionId** | **string** | External division identifier |
**logoUrlMap** | **array<string,string>** | Logo URL map with base64 encoded images. Keys can be LOGO, PC_LOGO, MOBILE_LOGO | [optional]
**extInfo** | [**\Dana\MerchantManagement\v1\Model\CreateDivisionRequestExtInfo**](CreateDivisionRequestExtInfo.md) |  |
**mccCodes** | **string[]** | Merchant category codes |
**businessDocs** | [**\Dana\MerchantManagement\v1\Model\BusinessDocs[]**](BusinessDocs.md) | Business documents. \&quot;individu\&quot; entity can only use KTP and SIM. Other entities can use SIUP and NIB |
**businessEntity** | **string** | Business entity type |
**ownerName** | [**\Dana\MerchantManagement\v1\Model\UserName**](UserName.md) |  |
**ownerPhoneNumber** | [**\Dana\MerchantManagement\v1\Model\MobileNoInfo**](MobileNoInfo.md) |  |
**ownerIdType** | **string** | Owner identifier type |
**ownerIdNo** | **string** | Owner identifier number. Length depends on ownerIdType - KTP (16), SIM (12-14), Passport (8), NIB (&gt;&#x3D;13), SIUP (free text) |
**ownerAddress** | [**\Dana\MerchantManagement\v1\Model\AddressInfo**](AddressInfo.md) |  |
**directorPics** | [**\Dana\MerchantManagement\v1\Model\PicInfo[]**](PicInfo.md) | Director as a PIC of sub merchant |
**nonDirectorPics** | [**\Dana\MerchantManagement\v1\Model\PicInfo[]**](PicInfo.md) | Non director which become a PIC of sub merchant |
**sizeType** | **string** | Size type |
**pgDivisionFlag** | **string** | Flag if division is type PG | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
