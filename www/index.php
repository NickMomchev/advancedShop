<?php

DEFINED('DS') or DEFINE('DS', DIRECTORY_SEPARATOR);                             // Константа разделителя директорий

include_once '..' . DS . 'config' . DS . 'config.php';                          // Инициализация настроек
include_once '..' . DS . 'library' . DS . 'mainFunctions.php';                  // Основные функции

// получаем имена вызываемых контроллера и экшина
$controller = filter_input(INPUT_GET, 'controller');
$action = filter_input(INPUT_GET, 'action');

// определяем вызываемый контроллер
$controllerName = $controller ? ucfirst($controller) : 'Index';

// определяем вызываемую функцию
$actionName = $action ? $action : 'index';

loadPage($smarty, $controllerName, $actionName);