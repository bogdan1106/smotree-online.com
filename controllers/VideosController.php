<?php



/**
 * Контроллер VideosController
 * Страница одной серии из сериала
 */
class VideosController
{
    /**
     * Action для страницы "Серия"
     */
    public function actionView($videoId) {

        // Список жанров для левого меню
        $genres = array();
        $genres = Genre::getGenresList();

        ////Список всех данных полученых по заданой серии
        $mainVideo = Video::getAllFromSeriaId($videoId);

        // Подключение вида
        require_once (ROOT ."/views/video/view.php");
        return true;

    }
}