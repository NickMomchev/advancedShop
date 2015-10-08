<?php

/**
 * Модель для работы с категориями товаров. Таблица `categories`
 */

function getAllMainCatsWithChildren(){
    $sql = 'SELECT *'
        . 'FROM `categories`'
        . 'WHERE `parent_id` = 0';
    
    $rs = mysql_query($sql);
    
    while ($row = mysql_fetch_assoc($rs)) {
        $row ? $rows[] = $row : null;
    }
    return $rows;
}