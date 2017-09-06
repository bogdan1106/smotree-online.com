<?php



/**
 * Контроллер SerialController
 */
class SerialController
{
    /**
     * Action для вывода страницы Сериал
     */
   public function actionView($serialId) {

       // Список жанров для левого меню
       $genres = array();
       $genres = Genre::getGenresList();

        //Список всех данных полученых по заданому сериалу
        $serialItem = Serial::getSerialById($serialId);

       //Проверка на наличие жанра в сериале, и присвоение нужного id жанра
       // для дальнейшего вывода через массив с сериалом
       if($serialItem['genre1'] != 0)   $genre1 = $serialItem['genre1'] -1;
       if($serialItem['genre2'] != 0)   $genre2 = $serialItem['genre2'] -1;
       if($serialItem['genre3'] != 0)   $genre3 = $serialItem['genre3'] -1;

       // Массив со всеми сериями из заданого сериала
       $allSeries = Serial::getAllEpisodesInSerial($serialId);

       //Подключение вида
         require_once (ROOT ."/views/serial/view.php");
         return true;

       }







}