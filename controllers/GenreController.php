<?php


/**
 * Контроллер GenreController
 * Страница с выводом всех материалов по одному жанру
 */

class GenreController {
    /**
     * Action для страницы вывода материалов по жанру
     */
    public function actionView($id, $page = 1) {

        // Список жанров для левого меню
        $genres = array();
        $genres = Genre::getGenresList();

        //Список всех материалов полученых по заданому жанру
        $oneGenreList = Genre::getMoviesListByGenre($id, $page);

        //Проверка на наличие картинки к фильму или сериалу
        $oneGenreList = array_filter($oneGenreList, function($item) {
            return file_exists(ROOT. '/template/images/posters/'. $item['data_id'].'.jpg');
        });

        // Общее количетсво материалов (необходимо для постраничной навигации)
         $total = Genre::getTotalItemInGenre($id);

        // Создаем объект Pagination - постраничная навигация
         $pagination = new Pagination ($total, $page, Serial::SHOW_BY_DEFAULT, 'page-');

        // Подключаем вид
         require_once 'views/genre/view.php';
         return true;

    }



}