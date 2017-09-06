<?php


class Video
{

    //количиество киноматериалов, которое выводится на главной странице
    const SHOW_BY_DEFAULT = 10;


    // метод выводит последние добавленые киноматериалы на главную страницу
    public static function getLatestVideos(){

        // Соединение с БД
        $db = Db::getConnection();

        // массив последних записей
        $latestVideos = array();

        $result = $db->query("SELECT data.id AS data_id, data.name_ru,
         data.cat, data.shot_text, data.genre1,  data.genre2,  data.genre3,
         data.strana, data.fyear, data.in_role, data.director, data.shot_text
          FROM data ORDER BY data_id DESC LIMIT 10");

        $i = 0;
        while ($row = $result->fetch()) {

            $latestVideos[$i]['data_id'] = $row['data_id'];
            $latestVideos[$i]['name_ru'] = $row['name_ru'];
            $latestVideos[$i]['cat'] = $row['cat'];
            $latestVideos[$i]['shot_text'] = $row['shot_text'];
            $latestVideos[$i]['genre1'] = $row['genre1'];
            $latestVideos[$i]['genre2'] = $row['genre2'];
            $latestVideos[$i]['genre3'] = $row['genre3'];
            $latestVideos[$i]['strana'] = $row['strana'];
            $latestVideos[$i]['fyear'] = $row['fyear'];
            $latestVideos[$i]['in_role'] = $row['in_role'];
            $latestVideos[$i]['director'] = $row['director'];
            $latestVideos[$i]['shot_text'] = $row['shot_text'];
            $i++;
        }
        return $latestVideos;

    }



    /**
     * Возвращает все серии сериала по заданому id
     * @param  $videoId
     * @return array
     */
    public static function getAllFromSeriaId($videoId) {

        $db = Db::getConnection();
        $result = $db->query("SELECT data.id AS data_id, data.*, series.* FROM data JOIN series ON data.id = series.sid WHERE series.id = $videoId");
        $result->setFetchMode(PDO::FETCH_ASSOC);

        return $result->fetch();
    }
}

