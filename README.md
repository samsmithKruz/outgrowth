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


## Environment Setup

- **Environment Variables**: Stored in the `.env` file, which contains project-specific configurations such as database credentials, API keys, and other settings.
- **URL Rewriting**: The `.htaccess` file is used for clean URL routing, ensuring that URLs like `/home` route to `home.php` without showing the file extension.

