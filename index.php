<?php
/*

    // Format: dd-mm-yyyy

   /* $string = '21-11-2015';

    $pattern = '/([0-9]{2}) - ([0-9]{2}) - ([0-9]{4})/';

    $replacement = "Год $3, месяц $2, день $1";

    echo preg_replace($pattern, $string, $replacement);

   */




/**
 * @param $arr  Функция распечатки ошибок,
 */
function debug($arr){
    echo '<pre>' . print_r($arr, true) . '</pre>';
}

// Front Controller

// 1. Общие настройки (вкл. ошибки)


ini_set('display_errors', 1);
error_reporting(E_ALL);

// 2. Подключение файлов системы

define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Autoload.php');

$router = new Router();
$router->run();

// 3.Установка соед с Б.Д




?>





