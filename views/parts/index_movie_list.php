<?php
if($movie['genre1'] != 0)   $genre1 = $movie['genre1'] -1;
if($movie['genre2'] != 0)   $genre2 = $movie['genre2'] -1;
if($movie['genre3'] != 0)   $genre3 = $movie['genre3'] -1;
?>
<div class="main_video_box">
    <div class="logo_img">
        <img src="/template/images/posters/<?php echo $movie['data_id']; ?>.jpg" alt="">
    </div>

    <div class="title">
        <div class=" index_t_name">
            <p><?php echo($movie['name_ru']);  ?></p>
        </div>
        <div class="inform">
            <h5>Жанр:
                <?php
                if(isset($genre1)) echo " " . $genres[$genre1]['title_ru'];
                if(isset($genre2)) echo ", " . $genres[$genre2]['title_ru'];
                if(isset($genre3)) echo ", " . $genres[$genre3]['title_ru'];
                ?>
            </h5>
            <h5>Страна: <?php echo($movie['strana']);  ?></h5>
            <h5>Год выпуска: <?php echo($movie['fyear']);  ?></h5>
            <h5>Режиссер: <?php echo($movie['director']);  ?></h5>
            <h5>В ролях: <?php echo($movie['in_role']);  ?></h5>
            <h5>Описание: <?php echo($movie['shot_text']);  ?></h5>

           <div class="button-link">
               <a href="<?php if ($movie['cat'] == 2 || $movie['cat'] == 1) echo '/film/';
            if ($movie['cat'] == 3) echo '/serial/';
            echo($movie['data_id']);?>" class="button7">смотреть
                </a>
           </div>
        </div>


    </div>

</div>


