<?php

/**
 *
 * Файл настроек
 *
 */

//> Константы для обращения к контроллерам
defined('PathPrefix') or DEFINE('PathPrefix', '..' . DS . 'controllers' . DS);
defined('PathPostfix') or DEFINE('PathPostfix', 'Controller.php');
//<

//> используемый шаблон
$template = 'default';

// пути к файлам шаблонов (*.tpl)
DEFINED('TemplatePrefix') or DEFINE('TemplatePrefix', '../views/' . $template . '/');
DEFINED('TemplatePostfix') or DEFINE('TemplatePostfix', '.tpl');

// пути к файлам шаблонов в веб пространстве
DEFINED('TemplateWebPath') or DEFINE('TemplateWebPath', '/templates/' . $template . '/');
//<

//> Инициализация шаблонизатора Smarty
// put full path to Smarty.class.php
require_once '..' . DS . 'library' . DS . 'Smarty' . DS . 'libs' . DS . 'Smarty.class.php';
$smarty = new Smarty();

$smarty->setTemplateDir(TemplatePrefix);
$smarty->setCompileDir('..' . DS . 'tmp' . DS . 'smarty' . DS . 'templates_c');
$smarty->setCacheDir('..' . DS . 'tmp' . DS . 'smarty' . DS . 'cache');
$smarty->setConfigDir('..' . DS . 'library' . DS . 'Smarty' . DS . 'configs');

$smarty->assign('templateWebPath', TemplateWebPath);
//<