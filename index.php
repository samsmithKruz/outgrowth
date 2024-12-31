<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once __DIR__ . "/lib/bootstrap.php";

$header_include = '  <link rel="stylesheet" href="./css/styles.css" />';
require_once __DIR__ . "/includes/head.php";
?>

<div id="index_hero">
  <?php require_once __DIR__ . "/includes/header.php"; ?>
  <?php TemplateLoader::load('index/hero');?>
</div>
<?php TemplateLoader::load('index/index');?>

<?php TemplateLoader::load('footer');?>