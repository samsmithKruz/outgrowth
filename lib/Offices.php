<?php

class Offices
{
    private static $defaultOffice = 'london'; // Default office location
    private static $officeMap = [
        'london' => 'LN',
        'newyork' => 'NY',
        'sanfrancisco' => 'SF',
        // Add more mappings here
    ];

    // Initialize the office setting, similar to Language init
    public static function init()
    {
        if (isset($_GET['loc'])) {
            $loc = $_GET['loc'];
            if (self::isSupported($loc)) {
                self::setOfficeCookie($loc);
            } else {
                self::setOfficeCookie(self::$defaultOffice);
            }
        }

        if (!isset($_COOKIE['office'])) {
            self::setOfficeCookie(self::$defaultOffice);
        }

        if (!self::isSupported($_COOKIE['office'])) {
            self::setOfficeCookie(self::$defaultOffice);
        }
    }

    // Check if the office is supported
    private static function isSupported($office)
    {
        return array_key_exists($office, self::$officeMap);
    }

    // Set the office cookie
    private static function setOfficeCookie($office)
    {
        setcookie('office', $office, time() + (86400 * 30), '/');
        $_COOKIE['office'] = $office;
    }

    // Get the current office
    public static function getOffice()
    {
        return $_COOKIE['office'] ?? self::$defaultOffice;
    }

    // Get the directory code for the current office
    public static function getOfficeDirectory()
    {
        $office = self::getOffice();
        return self::$officeMap[$office] ?? self::$officeMap[self::$defaultOffice];
    }
}
