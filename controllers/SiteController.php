<?php


/**
 * Контроллер GenreController
 * Главная страница сайта
 */
class SiteController
{
    /**
     * Action для вывода главной страницы
     */
        public function actionIndex(){

        // Список жанров для левого меню
        $genres = array();
        $genres = Genre::getGenresList();

         //Список последних 10 записей
        $latestVideos = array();
        $latestVideos = Video::getLatestVideos();

        //Подключение вида
        require_once (ROOT ."/views/site/index.php");
        return true;
    }
}



