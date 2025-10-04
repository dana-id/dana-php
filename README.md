# dana-php

The official DANA PHP SDK provides a simple and convenient way to call DANA's REST API in applications written in PHP (based on https://dashboard.dana.id/api-docs-v2/)

## ⚠️ Run This First - Save Days of Debugging

Before writing any integration code, **run our automated test suite**. It takes **under 2 minutes** and shows you how the full flow works — **with your own credentials**.

Here is the link: https://github.com/dana-id/uat-script.

### Why This Matters

- 🧪 Validates your setup instantly
- 👀 **See exactly how each scenario flows**
- 🧾 Gives us logs to help you faster
- 🚫 Skipping this = guaranteed delays 


### What It Does

✅ Runs full scenario checks for DANA Sandbox

✅ Installs and executes automatically

✅ Shows real-time results in your terminal

✅ Runs in a safe, simulation-only environment

> Don't fly blind. Run the test first. See the flow. Build with confidence.

  
  .  

  .


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

## Environment Variables

Before using the SDK, please make sure to set the following environment variables (In .env):

| Name                   | Description                                                                                   | Example Value                                                                   |
| ---------------------- | ---------------------------------------------------------------------------------------       | ------------------------------------------------------------------------------- |
| `ENV` or `DANA_ENV`    | Defines which environment the SDK will use. Possible values: `SANDBOX` or `PRODUCTION`.       | `SANDBOX`                                                                       |
| `X_PARTNER_ID`         | Unique identifier for partner, provided by DANA, also known as `clientId`.                    | 1970010100000000000000                                                          |
| `PRIVATE_KEY`          | Your private key string.                                                                      | `-----BEGIN PRIVATE KEY-----MIIBVgIBADANBg...LsvTqw==-----END PRIVATE KEY-----` |
| `PRIVATE_KEY_PATH`     | Path to your private key file. If both are set, `PRIVATE_KEY_PATH` is used.                   | /path/to/your_private_key.pem                                                   |
| `DANA_PUBLIC_KEY`      | DANA public key string for parsing webhook.                                                   | `-----BEGIN PUBLIC KEY-----MIIBIjANBgkq...Do/QIDAQAB-----END PUBLIC KEY-----`   |
| `DANA_PUBLIC_KEY_PATH` | Path to DANA public key file for parsing webhook. If both set, `DANA_PUBLIC_KEY_PATH is used. | /path/to/dana_public_key.pem                                                    |
| `ORIGIN`               | Origin domain.                                                                                | https://yourdomain.com                                                          |
| `CLIENT_SECRET`        | Assigned client secret during registration. Must be set for DisbursementApi                   | your_client_secret                                                              |

You can see these variables in .env.example, fill it, and change the file name to .env (remove the .example extension)

Then you can choose these following APIs based on the business solution you want to integrate:

## API Endpoints

API | Docs 
------------ | -------------
*PaymentGatewayApi* | [**PaymentGatewayApi Docs**](docs/PaymentGatewayAPI.md)
*WidgetApi* | [**WidgetApi Docs**](docs/WidgetAPI.md)
*DisbursementApi* | [**DisbursementApi Docs**](docs/DisbursementAPI.md)
*MerchantManagementApi* | [**MerchantManagementApi Docs**](docs/MerchantManagementAPI.md)
