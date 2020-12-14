<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once "/home/jaronz/config/config.php";
require_once ROOT."/includes/db_connect.php";
require_once ROOT."/includes/session_start.php";
require_once ROOT."/includes/autoload.php";

if(!LOCAL && !isHttps()){
    header("location: https://".$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI]);
}

require_once ROOT."/includes/vendor/autoload.php";
$loader = new \Twig\Loader\FilesystemLoader(ROOT."/templates");
$twig = new \Twig\Environment($loader, [
    //'cache' => '/path/to/compilation_cache',
]);
