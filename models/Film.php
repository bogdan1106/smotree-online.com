<?php

/**
 * Класс Product - модель для работы с Фильмами
 */
class Film
{
    /**
     * Возвращает массив данных о фильме по заданому id
     * @param type $filmId <p>id фильма</p>
     * @return type <p>Массив с данными</p>
     */
    public static function getFilmById($filmId)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT data.id AS data_id, data. * ,series.code_vk FROM data JOIN series
         ON series.sid = data.id   WHERE data.id= :film_id';

        $result = $db->prepare($sql);
        $result->bindParam(':film_id', $filmId, PDO::PARAM_INT);
        $result->execute();
        return $result->fetch();
    }


}