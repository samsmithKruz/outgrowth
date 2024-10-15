# Nucida - Outgrowth

Nucida - Outgrowth is a multilingual PHP project that dynamically loads content based on the user’s selected language. This project uses a `TemplateLoader` class to manage template loading and `Language` class to detect and handle language preferences.

## View UI Pages

You can view the UI pages by clicking the links below (these refer to files in the `ui` directory):

- [Home](./ui/home.html)
- [About](./ui/about.html)
- [Contact](./ui/contact.html)



## Project Structure

```bash
├── assets              # Static assets (images, fonts, etc.)
├── contents            # Language-specific content
│   ├── en              # English content
│   │   └── index.php   # English home page content
│   ├── de              # German content
│   │   └── index.php   # German home page content
│   └── ...             # Other languages
├── css                 # CSS files for styling
├── error               # Custom error pages
├── js                  # JavaScript files
├── lib                 # Core libraries
│   ├── bootstrap.php   # Bootstrap file for autoloading
│   ├── Language.php    # Language detection class
│   └── TemplateLoader.php # Template loading engine
├── logs                # Logs for debugging
├── ui                  # Frontend UI templates
├── .env                # Environment variables
├── .gitignore          # Git ignore file
├── .htaccess           # URL rewriting for clean URLs
├── about.php           # About page
├── contact.php         # Contact page
└── home.php            # Home page
```
## Pages

- **Home (`home.php`)**: The main landing page. Content is loaded dynamically based on the user’s selected language via `TemplateLoader::load('index')`.
- **About (`about.php`)**: Provides information about the company or site.
- **Contact (`contact.php`)**: Displays a contact form or contact information.


## Core Components

- **Language Detection (`lib/Language.php`)**: Detects the language set by the user and loads the corresponding content.
- **Template Loader (`lib/TemplateLoader.php`)**: Handles loading of templates based on language. Loads content from the `contents/` directory depending on the user's selected language.


## Sample Usage: TemplateLoader

The `TemplateLoader` class is used to load specific sections of a page dynamically based on the user's selected language. Below is an example demonstrating how to use the `TemplateLoader` in conjunction with the `bootstrap.php` file for autoloading.

### Example:

```php
<?php 
// Autoload required classes
require_once __DIR__ . "/lib/bootstrap.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nucida - Contact</title>
    <!-- Add your CSS files here -->
</head>
<body>
    <!-- Other sections of your page -->

    <section id="contact-form">
        <?= TemplateLoader::load('contact-form-section'); ?>
    </section>

    <!-- Other sections of your page -->

    <!-- Add your JS files here -->
</body>
</html>
```

### Explanation

- **Autoloading**: The `bootstrap.php` file is included to facilitate autoloading of classes, ensuring that all necessary classes are automatically loaded without the need for explicit includes in each file.
- **Template Loading**: The method `TemplateLoader::load('contact-form-section')` is invoked within the HTML structure. This allows the dynamic inclusion of the contact form section based on the user's selected language, streamlining the process of managing different content types. This design enhances maintainability, as changes to specific sections can be made independently without impacting the entire page layout.



## Environment Setup

- **Environment Variables**: Stored in the `.env` file, which contains project-specific configurations such as database credentials, API keys, and other settings.
- **URL Rewriting**: The `.htaccess` file is used for clean URL routing, ensuring that URLs like `/home` route to `home.php` without showing the file extension.

