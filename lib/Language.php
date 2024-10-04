<?php

class Language {
    private static $defaultLanguage = 'en'; // Default language
    private static $supportedLanguages = []; // Dynamically loaded supported languages

    // Initialize language settings
    public static function init() {
        self::loadSupportedLanguages();

        if (isset($_GET['lang'])) {
            $lang = $_GET['lang'];
            if (self::isSupported($lang)) {
                self::setLanguageCookie($lang);
            } else {
                self::setLanguageCookie(self::$defaultLanguage);
            }
        }

        if (!isset($_COOKIE['lang'])) {
            $detectedLang = self::detectLanguageFromIP();
            if (self::isSupported($detectedLang)) {
                self::setLanguageCookie($detectedLang);
            } else {
                self::setLanguageCookie(self::$defaultLanguage);
            }
        }

        if (!self::isSupported($_COOKIE['lang'])) {
            self::setLanguageCookie(self::$defaultLanguage);
        }
    }

    // Check if the language is supported by the /contents folder
    private static function isSupported($lang) {
        return in_array($lang, self::$supportedLanguages);
    }

    // Set language in a cookie
    private static function setLanguageCookie($lang) {
        setcookie('lang', $lang, time() + (86400 * 30), '/');
        $_COOKIE['lang'] = $lang; // Update the current session
    }

    // Detect language from IP using the ip-api
    private static function detectLanguageFromIP() {
        $ip = $_SERVER['REMOTE_ADDR'];

        // Call ip-api to get the location based on IP
        $countryCode = self::getCountryFromIP($ip);

        // Country-to-language mapping (extend as needed)
        $countryToLanguageMap = [
            'FR' => 'fr', // French for France
            'US' => 'en', // English for the US
            'DE' => 'de', // German for Germany
            'ES' => 'es', // Spanish for Spain
            // Add more mappings here...
        ];

        return isset($countryToLanguageMap[$countryCode]) ? $countryToLanguageMap[$countryCode] : self::$defaultLanguage;
    }

    // Use ip-api to get the country code based on the user's IP
    private static function getCountryFromIP($ip) {
        // ip-api URL
        $url = "http://ip-api.com/json/{$ip}";

        // Use file_get_contents or cURL to fetch the API result
        $response = @file_get_contents($url);
        if ($response === false) {
            return null; // Return null if the API request fails
        }

        $data = json_decode($response, true);

        return $data['countryCode'] ?? null; // Return country code or null
    }

    // Dynamically load supported languages from /contents
    public static function loadSupportedLanguages() {
        $contentsDir = __DIR__ . '/../contents';
        if (is_dir($contentsDir)) {
            $languages = array_diff(scandir($contentsDir), ['..', '.']);
            self::$supportedLanguages = array_values($languages); // Store supported languages
        }
    }

    // Get current language
    public static function getLanguage() {
        return $_COOKIE['lang'] ?? self::$defaultLanguage;
    }
}
