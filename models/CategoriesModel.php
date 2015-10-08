<?php

/**
 * Модель для работы с категориями товаров. Таблица `categories`
 */

/**
 * Получить дочерние категории для категории $catId
 *
 * @param integer $catid ID категории
 * @return array массив дочерних категорий
 */
function getChildrenForCat($catid){
    $sql = 'SELECT *'
        . 'FROM `categories`'
        . 'WHERE `parent_id` = ' . $catid;

    $rs = mysql_query($sql);

    return createSmartyRsArray($rs);
}

/**
 * Получить главные категории с привязкой дочерних
 *
 * @return array массив категорий
 */
function getAllMainCatsWithChildren(){
    $sql = 'SELECT *'
        . 'FROM `categories`'
        . 'WHERE `parent_id` = 0';

    $rs = mysql_query($sql);

    while ($row = mysql_fetch_assoc($rs)) {

        $rsChildren = getChildrenForCat($row ? $row['id'] : null);

        $rsChildren ? $row['children'] = $rsChildren : null;

        $row ? $rows[] = $row : null;
    }
    return $rows;
}