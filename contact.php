<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once __DIR__ . "/lib/bootstrap.php";

$header_include = '<link rel="stylesheet" href="./css/contact.css" />';
require_once __DIR__ . "/includes/head.php";

require_once __DIR__ . "/includes/header.php";
TemplateLoader::load('contact');

TemplateLoader::load('footer');