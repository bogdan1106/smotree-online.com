<?php

/**
 * Класс Genre - модель для работы с жанрами
 */
class Genre
{
    // Количество отображаемых материалов по умолчанию
    const SHOW_BY_DEFAULT = 10;

    /**
     * Возвращает массив всех жанров из таблицы
     * @return type <p>Массив с жанрами</p>
     */
    public static function getGenresList()
    {
        // Соединение с БД
        $db = Db::getConnection();

        // массив жанров
        $categoryList = array();

        //  запрос к БД
        $result = $db->query("SELECT id, title_ru FROM genres");
        $i = 0;
        while ($row = $result->fetch()) {
            $categoryList[$i]['title_ru'] = $row['title_ru'];
            $categoryList[$i]['id'] = $row['id'];

            $i++;
        }
         return $categoryList;
    }

    /**
     * Возвращает массив всех материалов по заданому жанру
     * @return type <p>Массив с жанрами</p>
     */
    public static function  getMoviesListByGenre($genreId, $page, $count = self::SHOW_BY_DEFAULT)
    {
        //Номер страницы
        $page = intval($page);

        // Смещение (для запроса)
        $offset = $page * $count - $count;

        // Соединение с БД
        $db = Db::getConnection();

        $sql = 'SELECT data.id AS data_id, data.*,
         genres. *
         FROM data JOIN genres
         ON data.genre1 = genres.id OR data.genre2 = genres.id OR data.genre3 = genres.id
         WHERE genres.id = :genre_id LIMIT :offset, :count';

        $result = $db->prepare($sql);

        $result->bindParam(':genre_id', $genreId, PDO::PARAM_INT);
        $result->bindParam(':offset', $offset, PDO::PARAM_INT);
        $result->bindParam(':count', $count, PDO::PARAM_INT);

        $result->execute();
        return $result->fetchAll();

}
    /**
     * Возвращает количество всех материалов по заданому жанру
     * @param type $genreId <p>id жанра</p>
     * @return type <p>количество записей </p>
     */
    public static function getTotalItemInGenre($genreId) {



        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT count(id) AS count FROM data WHERE genre1 = :genre_id OR genre2 = :genre_id OR genre3 = :genre_id';

        // Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':genre_id', $genreId, PDO::PARAM_INT);

        // Выполнение коменды
        $result->execute();

        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Получение и возврат результатов
        $row = $result->fetch();
        return $row['count'];

    }

}