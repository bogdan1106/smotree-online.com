<?php

/**
 * Класс Product - модель для работы с категориями
 */
class Category
{
    // Количество отображаемых материалов по умолчанию
    const SHOW_BY_DEFAULT = 10;

    /**
     * Возвращает массив всех материалов по заданой категории
     * @param type $count <p> количество отображаемых материалов </p>
     * @param type $categoryId <p>id категории</p>
     * @param type $page [optional] <p>Номер страницы</p>
     * @return type <p>Массив с материалами</p>
     */
    public static function  getMoviesListByCategory($categoryId, $page, $count = self::SHOW_BY_DEFAULT)
    {
        //Номер страницы
        $page = intval($page);

        // Смещение (для запроса)
        $offset = $page * $count - $count;

        //Список категорий
        $categoryList = array();

        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT data.id AS data_id, data.*
         FROM data WHERE cat = :category_id
         LIMIT :offset, :count';

        // Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':category_id', $categoryId, PDO::PARAM_INT);
        $result->bindParam(':count', $count, PDO::PARAM_INT);
        $result->bindParam(':offset', $offset, PDO::PARAM_INT);

        // Выполнение коменды
        $result->execute();

        // Получение и возврат результатов
        return $result->fetchAll();
    }

    /**
     * Возвращает количество всех материалов по заданой категории
     * @param type $categoryId <p>id категории</p>
     * @return type <p>количество записей </p>
     */
    public static function getTotalItemInCategory($categoryId) {

        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT count(id) AS count FROM data WHERE cat = :category_id';

        // Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':category_id', $categoryId, PDO::PARAM_INT);

        // Выполнение коменды
        $result->execute();

        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Получение и возврат результатов
        $row = $result->fetch();
        return $row['count'];

    }
}