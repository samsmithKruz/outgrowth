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
    public static function loadPart($templateName, $selector)
    {
        // Determine the language and construct the path
        $lang = isset($_COOKIE['lang']) ? $_COOKIE['lang'] : 'en';
        $templatePath = __DIR__ . '/../contents/' . $lang . '/' . $templateName . '.php';

        // Check if template file exists
        if (!file_exists($templatePath)) {
            // Fallback to the default language if the template doesn't exist
            $templatePath = __DIR__ . '/../contents/en/' . $templateName . '.php';
            if (!file_exists($templatePath)) {
                echo 'Template not found'; // Return error as string
                return false;
            }
        }

        // Get the contents of the template file
        $fileContents = file_get_contents($templatePath);

        // Create a new DOMDocument instance
        $dom = new DOMDocument();

        // Suppress warnings (for malformed HTML)
        libxml_use_internal_errors(true);

        // Load the HTML content into DOMDocument
        if (!$dom->loadHTML($fileContents)) {
            echo 'Error loading HTML content'; // Return error as string
            return false;
        }

        // Use XPath to query for elements
        $xpath = new DOMXPath($dom);

        // Determine the type of selector (ID, Class, Tag, or Tag.Class)
        if (preg_match('/^#([a-zA-Z0-9_-]+)$/', $selector, $matches)) {
            // ID selector
            $id = $matches[1];
            $elements = $xpath->query('//*[@id="' . $id . '"]');
        } elseif (preg_match('/^\.[a-zA-Z0-9_-]+$/', $selector, $matches)) {
            // Class selector
            $class = substr($matches[0], 1); // Remove the leading '.'
            $elements = $xpath->query('//*[contains(@class, "' . $class . '")]');
        } elseif (preg_match('/^[a-zA-Z0-9-]+$/', $selector, $matches)) {
            // Tag selector (now supports numbers and hyphens)
            $tag = $matches[0];
            $elements = $xpath->query('//' . $tag);
        } elseif (preg_match('/^([a-zA-Z0-9-]+)\.([a-zA-Z0-9_-]+)$/', $selector, $matches)) {
            // Tag and Class selector (e.g., h1.menu)
            $tag = $matches[1];
            $class = $matches[2];
            $elements = $xpath->query('//' . $tag . '[contains(@class, "' . $class . '")]');
        } else {
            echo 'Invalid selector'; // Return error as string
            return false;
        }

        // Check if we found any matching elements
        if ($elements->length > 0) {
            // Get the content of the first matching element
            $element = $elements->item(0);

            // Get only the inner content (without the tag itself)
            $innerContent = '';

            foreach ($element->childNodes as $child) {
                $innerContent .= $dom->saveHTML($child); // Save the child nodes' HTML
            }

            // Now handle PHP execution within the inner content
            ob_start();

            // Temporarily include the content as PHP
            eval('?>' . $innerContent);  // Execute the PHP code inside the content

            // Get the output from the executed PHP code
            $output = ob_get_clean();

            // Return the processed content (with PHP executed)
            echo $output;
            return true;
        }

        echo 'No matching section found'; // Return error as string
        return false;
    }


    public static function getOfficeContent($template)
    {
        // Retrieve the directory code for the current office
        $directoryCode = Offices::getOfficeDirectory();

        // Construct the path to the office content
        $templatePath = __DIR__ . '/../contents/offices/' . $directoryCode . '/' . $template . '.php';

        if (file_exists($templatePath)) {
            ob_start();
            include $templatePath;
            return ob_get_clean();
        } else {
            return '<p>Error: Office content not found for the selected location.</p>';
        }
    }
}
