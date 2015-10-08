<?php

/**
 * Контроллер главной страницы
 *
 */

// Подключаем модели
include_once '..' . DS . 'models' . DS . 'CategoriesModel.php';

function testAction(){
    echo 'IndexController.php > testAction';
}

/**
 * Формирование главной страницы
 *
 * @param object $smarty шаблонизатор
 */
function indexAction($smarty){

    $rsCategories = getAllMainCatsWithChildren();

    $smarty->assign('pageTitle', 'Главная страница сайта');
    $smarty->assign('rsCategories', $rsCategories);

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');
}