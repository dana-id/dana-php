<?php
/**
 * API Client fixtures for testing
 *
 * PHP version 7.4
 *
 * @category Test
 * @package  Dana\Tests\Fixtures
 * @author   DANA Indonesia
 * @link     https://dashboard.dana.id/
 */

namespace Dana\Tests\Fixtures;

use Dana\Configuration;
use Dana\Env;
use Dana\PaymentGateway\v1\Api\PaymentGatewayApi;
use Dana\Disbursement\v1\Api\DisbursementApi;
use Dana\MerchantManagement\v1\Api\MerchantManagementApi;
use Dana\Widget\v1\Api\WidgetApi;

/**
 * ApiClientFixtures Class
 * 
 * Provides test fixtures for API clients
 */
class ApiClientFixtures
{
    /**
     * Get a PaymentGatewayApi instance for testing
     * 
     * Uses environment variables for configuration
     * 
     * @return PaymentGatewayApi
     */
    public static function getPaymentGatewayApiInstance(): PaymentGatewayApi
    {
        // Get configuration from environment or use defaults
        $origin = getenv('ORIGIN') ?: 'test-origin';
        $partnerId = getenv('X_PARTNER_ID') ?: 'test-partner-id';
        $privateKey = getenv('PRIVATE_KEY') ?: 'test-private-key';
        $privateKeyPath = getenv('PRIVATE_KEY_PATH') ?: null;
        $env = Env::SANDBOX;

        // Create configuration
        $config = new Configuration();
        
        $config->setApiKey('ORIGIN', $origin);
        $config->setApiKey('X_PARTNER_ID', $partnerId);
        $config->setApiKey('PRIVATE_KEY', $privateKey);
        $config->setApiKey('PRIVATE_KEY_PATH', $privateKeyPath);

        $config->setApiKey('DANA_ENV', $env);
        $config->setApiKey('ENV', $env);
        
        return new PaymentGatewayApi(null, $config);
    }

    /**
     * Get a PaymentGatewayApi instance for testing
     * 
     * Uses environment variables for configuration
     * 
     * @return PaymentGatewayApi
     */
    public static function getWidgetApiInstance(): WidgetApi
    {
        // Get configuration from environment or use defaults
        $origin = getenv('ORIGIN') ?: 'test-origin';
        $partnerId = getenv('X_PARTNER_ID') ?: 'test-partner-id';
        $privateKey = getenv('PRIVATE_KEY') ?: 'test-private-key';
        $privateKeyPath = getenv('PRIVATE_KEY_PATH') ?: null;
        $env = Env::SANDBOX;

        // Create configuration
        $config = new Configuration();
        
        $config->setApiKey('ORIGIN', $origin);
        $config->setApiKey('X_PARTNER_ID', $partnerId);
        $config->setApiKey('PRIVATE_KEY', $privateKey);
        $config->setApiKey('PRIVATE_KEY_PATH', $privateKeyPath);

        $config->setApiKey('DANA_ENV', $env);
        $config->setApiKey('ENV', $env);
        
        return new WidgetApi(null, $config);
    }

    /**
     * Get a DisbursementApi instance for testing
     * 
     * Uses environment variables for configuration
     * 
     * @return DisbursementApi
     */
    public static function getDisbursementApiInstance(): DisbursementApi
    {
        // Get configuration from environment or use defaults
        $origin = getenv('ORIGIN') ?: 'test-origin';
        $partnerId = getenv('DISBURSEMENT_X_PARTNER_ID') ?: 'test-partner-id';
        $privateKey = getenv('DISBURSEMENT_PRIVATE_KEY') ?: 'test-private-key';
        $privateKeyPath = getenv('DISBURSEMENT_PRIVATE_KEY_PATH') ?: null;
        $env = Env::SANDBOX;

        // Create configuration
        $config = new Configuration();
        
        $config->setApiKey('ORIGIN', $origin);
        $config->setApiKey('X_PARTNER_ID', $partnerId);
        $config->setApiKey('PRIVATE_KEY', $privateKey);
        $config->setApiKey('PRIVATE_KEY_PATH', $privateKeyPath);

        $config->setApiKey('DANA_ENV', $env);
        $config->setApiKey('ENV', $env);
        
        return new DisbursementApi(null, $config);
    }

    public static function getMerchantManagementApiInstance(): MerchantManagementApi
    {
        // Get configuration from environment or use defaults
        $origin = getenv('ORIGIN') ?: 'test-origin';
        $partnerId = getenv('X_PARTNER_ID') ?: 'test-partner-id';
        $privateKey = getenv('PRIVATE_KEY') ?: 'test-private-key';
        $privateKeyPath = getenv('PRIVATE_KEY_PATH') ?: null;
        $env = Env::SANDBOX;
        $clientSecret = getenv('CLIENT_SECRET') ?: 'test-client-secret';

        // Create configuration
        $config = new Configuration();
        
        $config->setApiKey('ORIGIN', $origin);
        $config->setApiKey('X_PARTNER_ID', $partnerId);
        $config->setApiKey('PRIVATE_KEY', $privateKey);
        $config->setApiKey('PRIVATE_KEY_PATH', $privateKeyPath);
        $config->setApiKey('CLIENT_SECRET', $clientSecret);

        $config->setApiKey('DANA_ENV', $env);
        $config->setApiKey('ENV', $env);
        
        return new MerchantManagementApi(null, $config);
    }
}
