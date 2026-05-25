<?php

namespace Dana\Tests\Fixtures;

use Dana\ApiException;

class DisbursementCustomerRetry
{
    public const CUSTOMER_NUMBERS = [
        '62811742234',
        '62817345544',
        '62817345545',
    ];

    public static function isForbiddenResponseCode(?string $code): bool
    {
        return $code !== null && (str_starts_with($code, '403') || str_starts_with($code, '404'));
    }

    public static function isForbiddenException(\Exception $e): bool
    {
        if (in_array((int) $e->getCode(), [403, 404], true)) {
            return true;
        }
        if ($e instanceof ApiException) {
            $body = $e->getResponseBody();
            if (is_string($body) && preg_match('/"responseCode"\s*:\s*"((?:403|404)[^"]*)"/', $body, $matches)) {
                return self::isForbiddenResponseCode($matches[1]);
            }
            if (is_object($body) && isset($body->responseCode)) {
                return self::isForbiddenResponseCode((string) $body->responseCode);
            }
        }
        $message = $e->getMessage();
        if (preg_match('/"responseCode"\s*:\s*"((?:403|404)[^"]*)"/', $message, $matches)) {
            return self::isForbiddenResponseCode($matches[1]);
        }
        return str_contains($message, '403') || str_contains($message, '404');
    }

    /**
     * @template T
     * @param callable(string): T $operation
     * @param callable(T): ?string|null $getResponseCode
     * @return array{0: T, 1: string}
     */
    public static function withCustomerNumberRetry(callable $operation, ?callable $getResponseCode = null): array
    {
        $lastException = null;
        foreach (self::CUSTOMER_NUMBERS as $customerNumber) {
            try {
                $result = $operation($customerNumber);
                $code = $getResponseCode ? $getResponseCode($result) : null;
                if ($code === null && is_object($result) && method_exists($result, 'getResponseCode')) {
                    $code = $result->getResponseCode();
                }
                if (self::isForbiddenResponseCode($code)) {
                    $lastException = new \RuntimeException("responseCode={$code}");
                    continue;
                }
                return [$result, $customerNumber];
            } catch (\Exception $e) {
                if (self::isForbiddenException($e)) {
                    $lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        if ($lastException !== null) {
            throw $lastException;
        }
        throw new \RuntimeException('All customer numbers returned 403/404: ' . implode(', ', self::CUSTOMER_NUMBERS));
    }
}
