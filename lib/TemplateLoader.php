<?php

class TemplateLoader
{
    public static function load($templateName)
    {
        // Get the current language
        $lang = isset($_COOKIE['lang']) ? $_COOKIE['lang'] : 'en';

        $templatePath = __DIR__ . '/../contents/' . $lang . '/' . $templateName . '.php';

        // Check if the template exists
        if (file_exists($templatePath)) {
            require_once $templatePath;
        } else {
            // Check if the default language template exists
            $defaultTemplatePath = __DIR__ . '/../contents/en/' . $templateName . '.php';
            if (file_exists($defaultTemplatePath)) {
                require_once $defaultTemplatePath;
            } else {
                // Return HTML error message if the template is not found
                echo '<h1>Error: Template Not Found</h1><p>The requested template does not exist.</p>';
            }
        }
    }
}
