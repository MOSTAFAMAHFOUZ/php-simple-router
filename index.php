<?php
define("MAIN_PATH", dirname(__FILE__) . DIRECTORY_SEPARATOR);
require_once("vendor/autoload.php");

use Mostafamahfouz\PhpRouterPackage\Router;


Router::handle("GET", "/", "home");
Router::get("contact", "contact");
Router::get("about", function () {
    require_once(MAIN_PATH . "src/views/about.php");
});
