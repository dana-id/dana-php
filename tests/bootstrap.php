<?php
/**
 * Test bootstrap file
 *
 * PHP version 7.4
 *
 * @category Test
 * @package  Dana
 * @author   DANA Indonesia
 * @link     https://dashboard.dana.id/
 */

// Include composer autoload
require_once __DIR__ . '/../vendor/autoload.php';

// Load environment variables from .env file if available
if (file_exists(__DIR__ . '/../../.env')) {
    $dotenv = \Dotenv\Dotenv::createImmutable(__DIR__ . '/../..');
    $dotenv->load();
}
