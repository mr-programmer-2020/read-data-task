<?php

// 1. Mounting system files
define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Router.php');

// 2. Call Router
$router = new Router();
$router->run();

