<?php

 /**
 * Контроллер FilmController
 * Страница просмотра фильма
 */
class FilmController
{
    /**
     * Action для страницы "Фильм"
     */
    public function actionView($filmId) {

        // Список жанров для левого меню
        $genres = array();
        $genres = Genre::getGenresList();

        //Список всех данных полученых по заданому фильму
        $mainFilm = Film::getFilmById($filmId);


        //Проверка на наличие жанра в фильме, и присвоение нужного id жанра
        // для дальнейшего вывода через массив с фильмом
        if($mainFilm['genre1'] != 0)   $genre1 = $mainFilm['genre1'] -1;
        if($mainFilm['genre2'] != 0)   $genre2 = $mainFilm['genre2'] -1;
        if($mainFilm['genre3'] != 0)   $genre3 = $mainFilm['genre3'] -1;

        // Подключение вида
        require_once 'views/film/view.php';
        return true;

    }
}