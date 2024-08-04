<?php

if (! function_exists('formatDate')) {
    /**
     * Format a date according to the application's requirements.
     *
     * @param \DateTimeInterface $date
     * @return string
     */
    function formatDate(\DateTimeInterface $date)
    {
        return $date->format('Y-m-d');
    }
}

if (! function_exists('truncateText')) {
    /**
     * Truncate a string to a specified length.
     *
     * @param string $text
     * @param int $length
     * @return string
     */
    function truncateText($text, $length = 100)
    {
        if (strlen($text) > $length) {
            $text = substr($text, 0, $length) . '...';
        }
        return $text;
    }
}

if (! function_exists('generateRandomString')) {
    /**
     * Generate a random string of specified length.
     *
     * @param int $length
     * @return string
     */
    function generateRandomString($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';

        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $randomString;
    }
}

if (! function_exists('formatCurrency')) {
    /**
     * Format a number as currency with a specified currency code.
     *
     * @param float $amount
     * @param string $currencyCode
     * @return string
     */
    function formatCurrency($amount, $currencyCode = 'USD')
    {
        return number_format($amount, 2) . ' ' . $currencyCode;
    }
}

// Add more helper functions as needed

