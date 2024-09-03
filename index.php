<?php
use Controllers\HomeController;

define('DS', DIRECTORY_SEPARATOR);
define('DIR_APP', __DIR__);

include './autoload.php';

$home = new HomeController();
$home->teste();
