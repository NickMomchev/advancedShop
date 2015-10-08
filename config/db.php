<?php

/**
 * Инициализация подключения к БД
 */

$dblocation = '127.0.0.1';
$dbname = 'advancedShop';
$dbuser = 'root';
$dbpassword = '';

$db = mysql_connect($dblocation, $dbuser, $dbpassword);

if(!$db){
    dd('Ошибка доступа к Базе данных!');
}

// Устанавливает кодировку по умолчанию для текущего соединения
mysql_set_charset(DB_CHARSET);

if(!mysql_select_db($dbname, $db)){
    dd('Ошибка доступа к базе данных:' . $dbname);
}