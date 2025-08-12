# dana-php

The official DANA PHP SDK provides a simple and convenient way to call DANA's REST API in applications written in PHP.

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/dana-id/dana-php.git"
    }
  ],
  "require": {
    "danaid/dana-php": "^1.0"
  }
}
```

Then run `composer install`

## Getting Started

Please follow the [installation procedure](#installation--usage) and then set these environment variables (in .env-template):

- DANA_ENV
- MERCHANT_ID
- X_PARTNER_ID
- PRIVATE_KEY
- PRIVATE_KEY_PATH
- ORIGIN
- DANA_PUBLIC_KEY
- DANA_PUBLIC_KEY_PATH
- CLIENT_SECRET

Note:
- PRIVATE_KEY_PATH and DANA_PUBLIC_KEY_PATH are paths to the private key and public key files, respectively. You can set either PRIVATE_KEY or PRIVATE_KEY_PATH. If you set both, PRIVATE_KEY will be ignored. The same goes for DANA_PUBLIC_KEY and DANA_PUBLIC_KEY_PATH.

Then you can choose these following APIs based on the business solution you want to integrate:

## API Endpoints

API | Docs 
------------ | -------------
*PaymentGatewayApi* | [**PaymentGatewayApi Docs**](docs/PaymentGatewayAPI.md)
*WidgetApi* | [**WidgetApi Docs**](docs/WidgetAPI.md)
*DisbursementApi* | [**DisbursementApi Docs**](docs/DisbursementAPI.md)
*MerchantManagementApi* | [**MerchantManagementApi Docs**](docs/MerchantManagementAPI.md)
