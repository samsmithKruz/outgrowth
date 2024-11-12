<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Start the session
session_start();

// Load environment variables from .env file
if (file_exists(__DIR__ . '/../.env')) {
    $env = parse_ini_file(__DIR__ . '/../.env');
    foreach ($env as $key => $value) {
        $_ENV[$key] = $value;
    }
}

// Define the log directory from the environment variable
define('LOG_DIR', $_ENV['LOG_DIR'] ?? '/logs');
define('LOG_FILE', __DIR__ . "/.." . LOG_DIR . '/error.log');

// Create the logs directory if it doesn't exist
if (!is_dir(__DIR__ . "/.." . LOG_DIR)) {
    mkdir(__DIR__ . "/.." . LOG_DIR, 0755, true);
}

/**
 * Custom error handler that logs errors to a log file.
 *
 * @param int $errno The level of the error.
 * @param string $errstr The error message.
 * @param string $errfile The filename where the error was raised.
 * @param int $errline The line number where the error was raised.
 * @return void
 */
function errorHandler($errno, $errstr, $errfile, $errline)
{
    $errorMessage = "Error [$errno]: $errstr in $errfile on line $errline";
    logError($errorMessage);
}

// Custom exception handler to log uncaught exceptions
function exceptionHandler($exception)
{
    $errorMessage = "Uncaught Exception: " . $exception->getMessage();
    logError($errorMessage);
}

/**
 * Logs error messages to the log file.
 *
 * @param string $message The message to log.
 * @return void
 */
function logError($message)
{
    $formattedMessage = date('Y-m-d H:i:s') . ' - ' . $message . PHP_EOL;

    // Write the message to the log file
    file_put_contents(LOG_FILE, $formattedMessage, FILE_APPEND | LOCK_EX);
}

// Set the custom error and exception handlers
set_error_handler('errorHandler');
set_exception_handler('exceptionHandler');



// Register autoloading for classes in /lib directory
spl_autoload_register(function ($class) {
    $file = __DIR__ . '/' . $class . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
});

// Load the default language or the one set by the user
require_once __DIR__ . '/Language.php';
Language::init();
Offices::init();
