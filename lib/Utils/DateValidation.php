<?php
/**
 * DateValidation
 * PHP version 7.4
 *
 * @category Class
 * @package  Dana\Utils
 * @author   DANA Indonesia
 * @link     https://dashboard.dana.id/
 */

namespace Dana\Utils;

use Exception;

/**
 * DateValidation Class
 *
 * Utility class for validating date fields, specifically validUpTo dates.
 */
class DateValidation
{
    /**
     * Validate that a date string is not more than 30 minutes in the future (sandbox only)
     *
     * This function checks the DANA_ENV or ENV environment variable and only validates in sandbox environment
     *
     * @param string $dateStr The date string to validate in RFC3339 format (e.g., "2024-01-01T12:00:00+07:00")
     * @return void
     * @throws Exception if the date is invalid or exceeds 30 minutes in the future
     */
    public static function validateValidUpToDate($dateStr)
    {
        // Only validate in sandbox environment
        $env = getenv('DANA_ENV') ?: getenv('ENV') ?: '';
        if ($env === '' || strtolower($env) === 'sandbox') {
            // Parse the input date
            try {
                $inputDate = new \DateTime($dateStr);
            } catch (\Exception $e) {
                throw new Exception('invalid date format for validUpTo. Expected format: YYYY-MM-DDTHH:mm:ss+07:00');
            }

            // Create Jakarta timezone object (GMT+7)
            try {
                $jakartaTz = new \DateTimeZone('Asia/Jakarta');
            } catch (\Exception $e) {
                // Fallback to fixed offset if timezone not available
                $jakartaTz = new \DateTimeZone('+07:00');
            }

            // Current date in Jakarta timezone
            $currentDate = new \DateTime('now', $jakartaTz);

            // Maximum allowed date (current date + 30 minutes)
            $maxDate = clone $currentDate;
            $maxDate->modify('+30 minutes');

            // Check if the input date exceeds the maximum allowed date
            if ($inputDate > $maxDate) {
                throw new Exception('validUpTo date cannot be more than 30 minutes in the future');
            }
        }
    }
}
