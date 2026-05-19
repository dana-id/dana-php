# # MerchantInformation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**phoneNumber** | **string** | Phone number | [optional]
**merchantId** | **string** | Merchant identifier | [optional]
**merchantType** | **string** | Merchant type | [optional]
**merchantSubType** | **string** | Merchant sub type | [optional]
**mccCodes** | **string[]** | Merchant category codes (MCC) | [optional]
**logoUrl** | **string** | Logo URL | [optional]
**logoUrlMap** | **array<string,string>** | Logo map. Keys may be &#x60;LOGO&#x60;, &#x60;PC_LOGO&#x60;, &#x60;MOBILE_LOGO&#x60;. Values are base64-encoded PNG image data. | [optional]
**shortNameCode** | **string** | Merchant short name code | [optional]
**officialName** | **string** | Merchant official name | [optional]
**englishName** | **string** | Merchant English name | [optional]
**localName** | **string** | Merchant local (Indonesian) name | [optional]
**certificate** | [**\Dana\MerchantManagement\v1\Model\MerchantCertificateInfo**](MerchantCertificateInfo.md) |  | [optional]
**registeredAddress** | [**\Dana\MerchantManagement\v1\Model\MerchantContactAddress**](MerchantContactAddress.md) |  | [optional]
**businessAddress** | [**\Dana\MerchantManagement\v1\Model\MerchantContactAddress**](MerchantContactAddress.md) |  | [optional]
**officeTelephone** | **string** | Merchant official telephone number | [optional]
**faxTelephone** | **string** | Merchant official fax telephone number | [optional]
**corporateOfficialName** | [**\Dana\MerchantManagement\v1\Model\UserName**](UserName.md) |  | [optional]
**corporateCertificate** | [**\Dana\MerchantManagement\v1\Model\MerchantCorporateCertificate**](MerchantCorporateCertificate.md) |  | [optional]
**contactOfficialName** | [**\Dana\MerchantManagement\v1\Model\UserName**](UserName.md) |  | [optional]
**contactMobileNo** | [**\Dana\MerchantManagement\v1\Model\MerchantContactMobileNo**](MerchantContactMobileNo.md) |  | [optional]
**contactTelephone** | **string** | Contact telephone number | [optional]
**contactEmail** | [**\Dana\MerchantManagement\v1\Model\MerchantContactEmail**](MerchantContactEmail.md) |  | [optional]
**createdTime** | **string** | Merchant creation time, YYYY-MM-DDTHH:mm:ss+07:00 (GMT+7) | [optional]
**modifiedTime** | **string** | Merchant last modified time, YYYY-MM-DDTHH:mm:ss+07:00 (GMT+7) | [optional]
**merchantStatus** | **string** | Merchant status | [optional]
**registerSource** | **string** | Registered source platform | [optional]
**sizeType** | **string** | Size type | [optional]
**platformMid** | **string** | Merchant platform identifier | [optional]
**taxNo** | **string** | Tax number (NPWP), 15 digits | [optional]
**accounts** | [**\Dana\MerchantManagement\v1\Model\MerchantAccountInfo[]**](MerchantAccountInfo.md) | Merchant account list (present when &#x60;isQueryAccount&#x60; is true in request) | [optional]
**brandName** | **string** | Brand name on legal name or tax name | [optional]
**taxAddress** | [**\Dana\MerchantManagement\v1\Model\MerchantContactAddress**](MerchantContactAddress.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
