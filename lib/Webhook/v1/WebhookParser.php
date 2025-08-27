<?php

namespace Dana\Webhook\v1;

use Exception;
use OpenSSLAsymmetricKey;
use RuntimeException;
use Dana\Utils\SnapHeader;
use Dana\Webhook\v1\FinishNotifyRequest;
use Dana\Webhook\v1\FinishNotifyRequestAdditionalInfo;
use Dana\Webhook\v1\Money;
use Dana\Webhook\v1\FinishNotifyPaymentInfo;
use Dana\Webhook\v1\ShopInfo;
use Dana\Webhook\v1\PayOptionInfo;

class WebhookParser
{
    private $publicKey;

    /**
     * Create a new WebhookParser instance
     *
     * @param string|null $publicKey The public key content as a string
     * @param string|null $publicKeyPath Path to a file containing the public key
     * @throws RuntimeException If OpenSSL extension is not available or key is invalid
     */
    public static function create(?string $publicKey = null, ?string $publicKeyPath = null): self
    {
        if (!extension_loaded('openssl')) {
            throw new RuntimeException('OpenSSL extension is required for webhook verification');
        }

        if ($publicKeyPath !== null && $publicKeyPath !== '') {
            if (!file_exists($publicKeyPath)) {
                throw new RuntimeException("Public key file not found: {$publicKeyPath}");
            }
            $keyContent = file_get_contents($publicKeyPath);
            if ($keyContent === false) {
                throw new RuntimeException("Failed to read public key from file: {$publicKeyPath}");
            }
        } elseif ($publicKey !== null && $publicKey !== '') {
            $keyContent = $publicKey;
        } else {
            throw new RuntimeException("Either publicKey or publicKeyPath must be provided");
        }

        $keyContent = trim($keyContent);
        if ($keyContent === '') {
            throw new RuntimeException("Key content is empty after processing input");
        }

        try {
            $pemContent = SnapHeader::convertToPEM($keyContent, 'PUBLIC');
            $publicKey = openssl_pkey_get_public($pemContent);
            if ($publicKey === false) {
                throw new RuntimeException('Failed to parse public key: ' . openssl_error_string());
            }
            
            $keyDetails = openssl_pkey_get_details($publicKey);
            if ($keyDetails === false || $keyDetails['type'] !== OPENSSL_KEYTYPE_RSA) {
                throw new RuntimeException('Public key is not an RSA key');
            }

            $parser = new self();
            $parser->publicKey = $publicKey;
            return $parser;
        } catch (Exception $e) {
            if (isset($publicKey) && is_resource($publicKey)) {
                openssl_free_key($publicKey);
            }
            throw $e;
        }
    }

    private function __construct()
    {
        // Private constructor to force use of create() method
    }

    public function __destruct()
    {
        if (!isset($this->publicKey)) {
            return;
        }
    
        // For PHP 7.x with resource, do manual clean up
        if (PHP_MAJOR_VERSION < 8 && is_resource($this->publicKey) && function_exists('openssl_free_key')) {
            openssl_free_key($this->publicKey);
        }
    }



    /**
     * Minify a JSON string by removing unnecessary whitespace
     */
    private static function minifyJson(string $json): string
    {
        $data = json_decode($json, false, 512, JSON_THROW_ON_ERROR);
        return json_encode($data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    }

    /**
     * Calculate SHA-256 hash of a string and return as lowercase hex
     */
    private static function sha256LowerHex(string $data): string
    {
        return hash('sha256', $data);
    }

    /**
     * Construct the string to be verified
     */
    private function constructStringToVerify(
        string $httpMethod,
        string $relativePathURL,
        string $body,
        string $timestamp
    ): string {
        $minifiedBody = self::minifyJson($body);
        $bodyHash = self::sha256LowerHex($minifiedBody);
        
        // Ensure path starts with a slash
        $path = '/' . ltrim($relativePathURL, '/');
        
        return "{$httpMethod}:{$path}:{$bodyHash}:{$timestamp}";
    }

    /**
     * Parse and verify a webhook request
     *
     * @param string $httpMethod The HTTP method (e.g., 'POST')
     * @param string $relativePathURL The relative URL path (e.g., '/v1/webhook')
     * @param array<string, string> $headers Array of request headers (case-insensitive keys)
     * @param string $body Raw request body
     * @return FinishNotifyRequest
     * @throws Exception If verification fails or invalid data
     */
    public function parseWebhook(
        string $httpMethod,
        string $relativePathURL,
        array $headers,
        string $body
    ): FinishNotifyRequest {
        // Normalize header keys to uppercase
        $headers = array_change_key_case($headers, CASE_UPPER);

        if (empty($headers['X-SIGNATURE']) || empty($headers['X-TIMESTAMP'])) {
            throw new Exception('Missing X-SIGNATURE or X-TIMESTAMP header');
        }

        $xSignature = $headers['X-SIGNATURE'];
        $xTimestamp = $headers['X-TIMESTAMP'];

        $stringToVerify = $this->constructStringToVerify(
            strtoupper($httpMethod),
            $relativePathURL,
            $body,
            $xTimestamp
        );

        $signature = base64_decode($xSignature, true);
        if ($signature === false) {
            throw new Exception('Failed to base64 decode X-SIGNATURE');
        }

        // Verify the signature - using the same algorithm as in SnapHeader::generateSignature
        $result = openssl_verify(
            $stringToVerify,
            $signature,
            $this->publicKey,
            OPENSSL_ALGO_SHA256
        );

        if ($result === -1) {
            throw new Exception('Error during signature verification: ' . openssl_error_string());
        }

        if ($result !== 1) {
            throw new Exception(sprintf(
                'Signature verification failed. StringToVerify: %s',
                $stringToVerify
            ));
        }

        $data = json_decode($body, false, 512, JSON_THROW_ON_ERROR);
        
        $request = new FinishNotifyRequest();
        
        if (isset($data->originalPartnerReferenceNo)) {
            $request->setOriginalPartnerReferenceNo($data->originalPartnerReferenceNo);
        }
        if (isset($data->originalReferenceNo)) {
            $request->setOriginalReferenceNo($data->originalReferenceNo);
        }
        if (isset($data->originalExternalId)) {
            $request->setOriginalExternalId($data->originalExternalId);
        }
        if (isset($data->merchantId)) {
            $request->setMerchantId($data->merchantId);
        }
        if (isset($data->subMerchantId)) {
            $request->setSubMerchantId($data->subMerchantId);
        }
        if (isset($data->latestTransactionStatus)) {
            $request->setLatestTransactionStatus($data->latestTransactionStatus);
        }
        if (isset($data->transactionStatusDesc)) {
            $request->setTransactionStatusDesc($data->transactionStatusDesc);
        }
        if (isset($data->createdTime)) {
            $request->setCreatedTime($data->createdTime);
        }
        if (isset($data->finishedTime)) {
            $request->setFinishedTime($data->finishedTime);
        }
        if (isset($data->externalStoreId)) {
            $request->setExternalStoreId($data->externalStoreId);
        }
        
        // Handle the Money object properly
        if (isset($data->amount)) {
            $money = new Money();
            if (isset($data->amount->value)) {
                $money->setValue($data->amount->value);
            }
            if (isset($data->amount->currency)) {
                $money->setCurrency($data->amount->currency);
            }
            $request->setAmount($money);
        }
        
        if (isset($data->additionalInfo)) {
            // Create additionalInfo object with proper nested objects
            $additionalInfoArray = (array)$data->additionalInfo;
            
            // Handle nested payment info if it exists
            if (isset($data->additionalInfo->paymentInfo)) {
                $paymentInfoArray = (array)$data->additionalInfo->paymentInfo;
                
                // Handle payOptionInfos array if it exists
                if (isset($data->additionalInfo->paymentInfo->payOptionInfos) && is_array($data->additionalInfo->paymentInfo->payOptionInfos)) {
                    $payOptionInfosArray = [];
                    foreach ($data->additionalInfo->paymentInfo->payOptionInfos as $option) {
                        $optionArray = (array)$option;
                        
                        // Handle payAmount in each option
                        if (isset($option->payAmount)) {
                            $money = new Money();
                            if (isset($option->payAmount->value)) {
                                $money->setValue($option->payAmount->value);
                            }
                            if (isset($option->payAmount->currency)) {
                                $money->setCurrency($option->payAmount->currency);
                            }
                            $optionArray['payAmount'] = $money;
                        }
                        
                        $payOptionInfoObj = new PayOptionInfo($optionArray);
                        $payOptionInfosArray[] = $payOptionInfoObj;
                    }
                    $paymentInfoArray['payOptionInfos'] = $payOptionInfosArray;
                }
                
                $paymentInfo = new FinishNotifyPaymentInfo($paymentInfoArray);
                $additionalInfoArray['paymentInfo'] = $paymentInfo;
            }
            
            // Handle nested shop info if it exists
            if (isset($data->additionalInfo->shopInfo)) {
                $shopInfo = new ShopInfo((array)$data->additionalInfo->shopInfo);
                $additionalInfoArray['shopInfo'] = $shopInfo;
            }
            
            $additionalInfo = new FinishNotifyRequestAdditionalInfo($additionalInfoArray);
            $request->setAdditionalInfo($additionalInfo);
        } else {
            $request->setAdditionalInfo(new FinishNotifyRequestAdditionalInfo([]));
        }
        
        return $request;
    }
}
