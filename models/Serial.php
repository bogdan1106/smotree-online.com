<?php


/**
 * Class Serial
 */
class Serial
{
    // Количество отображаемых материалов по умолчанию
    const   SHOW_BY_DEFAULT = 10;

    /**
     * Возвращает сериал по заданому id
     * @param $serialId
     * @return mixed
     */
    public static function getSerialById($serialId)
    {
        // Соединение с БД
        $db = Db::getConnection();

        $sql = 'SELECT data.* , genres.title_ru FROM data JOIN genres ON data.genre1 = genres.id
         WHERE data.id  = :serial_id';

        // Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':serial_id', $serialId, PDO::PARAM_INT);

        // Выполнение коменды
        $result->execute();

        // Получение и возврат результатов
        return $result->fetch();
    }


    /**
     * Выборка всех эпизодов из заданого сериала
     * @param $serialId
     * @return array
     */
    public static function getAllEpisodesInSerial($serialId)
    {
        $db = Db::getConnection();

        $sql ='SELECT  id, n_seria, n_season FROM series WHERE sid = :serial_id';

        $result = $db->prepare($sql);
        $result->bindParam(':serial_id', $serialId, PDO::PARAM_INT);

        $result->execute();

        return $result->fetchAll();

    }



}