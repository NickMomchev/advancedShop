<?php

defined('DS') or DEFINE('DS', DIRECTORY_SEPARATOR);

include_once '..' . DS . 'config' . DS . 'config.php';
include_once '..' . DS . 'library' . DS . 'mainFunctions.php';

$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';

$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';

loadPage($controllerName, $actionName);