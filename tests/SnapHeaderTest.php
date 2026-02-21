<?php
/**
 * SnapHeader Utils Tests
 *
 * PHP version 7.4
 *
 * @category Test
 * @package  Dana\Tests
 * @author   DANA Indonesia
 * @link     https://dashboard.dana.id/
 */

namespace Dana\Tests;

use Dana\Configuration;
use Dana\Utils\SnapHeader;
use PHPUnit\Framework\TestCase;

class SnapHeaderTest extends TestCase
{
    /** Minimal valid 512-bit RSA PEM for tests that need a real key (e.g. generateHeaders). */
    private const VALID_TEST_PRIVATE_KEY = "-----BEGIN PRIVATE KEY-----\n"
        . "MIIBVAIBADANBgkqhkiG9w0BAQEFAASCAT4wggE6AgEAAkEA1l/prH9SjNVSRH1W\n"
        . "kPhIhdu76TiUFD7O4FSq+RTr6XgIcBESyaXQUOO+68ZFinCbNzQ6/6MKPAn3C13z\n"
        . "JUfAwQIDAQABAkAl95C0K0ycgr9yP9yQClkV1Afg01Nujn0nP/eT67+odnWZTsb3\n"
        . "OvtXwGjIdyT1cm76xF8bh3fZjpFILL3yCxZRAiEA/IHmO7C5meVZ5wXlzlKrjGzl\n"
        . "JSccEL3NCRlMbfTv+AUCIQDZVv1VWADHIhOXWAQ1ZAbcySHaGWb8SyuCUdVk1oJu\n"
        . "jQIhAI/YGCYs2K543ywiSfWtVpiaeDcf/nbzCNiEFuwUupdZAiBRokL1U2C3ay1A\n"
        . "o2axRyjstP9qFDCCgxmMkYA9p/TF4QIgb8RAqS7FDRrVXvBYXz0V/kCjv+9txP/4\n"
        . "NoTxiitW66g=\n"
        . "-----END PRIVATE KEY-----";

    public function testConvertToPEMAlreadyPEMWithLF(): void
    {
        $pem = "-----BEGIN PRIVATE KEY-----\nMIIE\n-----END PRIVATE KEY-----";
        $converted = SnapHeader::convertToPEM($pem, 'PRIVATE');

        $this->assertStringContainsString("-----BEGIN PRIVATE KEY-----", $converted);
        $this->assertStringContainsString("-----END PRIVATE KEY-----", $converted);
        $this->assertStringContainsString("MIIE", $converted);
        $this->assertStringNotContainsString("\r", $converted);
    }

    public function testConvertToPEMNormalizesWindowsCRLF(): void
    {
        $pem = "-----BEGIN PRIVATE KEY-----\r\nMIIE\r\n-----END PRIVATE KEY-----";
        $converted = SnapHeader::convertToPEM($pem, 'PRIVATE');

        $this->assertStringContainsString("-----BEGIN PRIVATE KEY-----", $converted);
        $this->assertStringContainsString("-----END PRIVATE KEY-----", $converted);
        $this->assertStringContainsString("MIIE", $converted);
        $this->assertStringNotContainsString("\r", $converted, "CRLF should be normalized to LF");
    }

    public function testConvertToPEMHandlesEscapedNewlines(): void
    {
        $pem = "-----BEGIN PRIVATE KEY-----\\nMIIE\\n-----END PRIVATE KEY-----";
        $converted = SnapHeader::convertToPEM($pem, 'PRIVATE');

        $this->assertStringContainsString("-----BEGIN PRIVATE KEY-----", $converted);
        $this->assertStringContainsString("-----END PRIVATE KEY-----", $converted);
        $this->assertStringContainsString("MIIE", $converted);
        $this->assertStringContainsString("\n", $converted);
        $this->assertStringNotContainsString("\\n", $converted);
    }

    public function testConvertToPEMRawBase64WithCRLF(): void
    {
        $raw = "MIIEuwIBADA\r\nNBgkqhkiG9w";
        $converted = SnapHeader::convertToPEM($raw, 'PRIVATE');

        // Raw base64 may be wrapped as PKCS#8 or PKCS#1 (RSA) depending on openssl_pkey_get_private
        $hasPrivateKeyHeader = strpos($converted, "-----BEGIN PRIVATE KEY-----") !== false
            || strpos($converted, "-----BEGIN RSA PRIVATE KEY-----") !== false;
        $hasPrivateKeyFooter = strpos($converted, "-----END PRIVATE KEY-----") !== false
            || strpos($converted, "-----END RSA PRIVATE KEY-----") !== false;
        $this->assertTrue($hasPrivateKeyHeader, 'Converted PEM should have PRIVATE KEY or RSA PRIVATE KEY header');
        $this->assertTrue($hasPrivateKeyFooter, 'Converted PEM should have matching footer');
        $this->assertStringContainsString("MIIEuwIBADANBgkqhkiG9w", $converted);
        $this->assertStringNotContainsString("\r", $converted);
    }

    public function testGenerateHeadersEnablesDebugInSandboxByDefault(): void
    {
        // Ensure X_DEBUG is not set so sandbox defaults apply
        putenv('X_DEBUG');

        $config = new Configuration();
        $config->setApiKey('ENV', 'sandbox');
        $config->setApiKey('X_PARTNER_ID', 'test-partner');
        $config->setApiKey('ORIGIN', 'test-origin');
        $config->setApiKey('PRIVATE_KEY', self::VALID_TEST_PRIVATE_KEY);

        $headers = SnapHeader::generateHeaders('POST', '/v1/test', '{}', '', $config, true);
        $this->assertArrayHasKey('X-Debug-Mode', $headers);
        $this->assertEquals(1, $headers['X-Debug-Mode']);
    }

    public function testGenerateHeadersDisablesDebugWhenXDebugFalse(): void
    {
        putenv('X_DEBUG=false');

        $config = new Configuration();
        $config->setApiKey('ENV', 'sandbox');
        $config->setApiKey('X_PARTNER_ID', 'test-partner');
        $config->setApiKey('ORIGIN', 'test-origin');
        $config->setApiKey('PRIVATE_KEY', self::VALID_TEST_PRIVATE_KEY);

        $headers = SnapHeader::generateHeaders('POST', '/v1/test', '{}', '', $config, true);
        $this->assertArrayNotHasKey('X-Debug-Mode', $headers);
    }

    public function testGenerateHeadersNeverEnablesDebugInProduction(): void
    {
        // Even if X_DEBUG is unset, production must not enable debug header
        putenv('X_DEBUG');

        $config = new Configuration();
        $config->setApiKey('ENV', 'production');
        $config->setApiKey('X_PARTNER_ID', 'test-partner');
        $config->setApiKey('ORIGIN', 'test-origin');
        $config->setApiKey('PRIVATE_KEY', self::VALID_TEST_PRIVATE_KEY);

        $headers = SnapHeader::generateHeaders('POST', '/v1/test', '{}', '', $config, true);
        $this->assertArrayNotHasKey('X-Debug-Mode', $headers);
    }
}

