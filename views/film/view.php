


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="/template/css/main.css" rel="stylesheet">
    <link href="/template/css/bootstrap.min.css" rel="stylesheet">



    <title>
        <?php echo 'Фильм - ' . $mainFilm['name_ru'] . ' смотреть онлайн'; ?>
    </title>
</head>
<body>



<?php require_once '/views/parts/header.php' ?>


<div class="container w">
    <div class="row centered ">
        <br><br>
        <div class=" col-sm-3" >
            <?php require_once '/views/parts/left_menu.php' ?>
        </div>




        <div class=" col-sm-9">
            <div class=" serial_name">
                <p><?php echo $mainFilm['name_ru']; ?></p>
            </div>
            <div class="serial_poster">
                <img src="/template/images/posters/<?php echo $mainFilm['data_id']; ?>.jpg">
            </div>

            <table class="tftable" border="0">

                <tr><td>Жанр: </td><td>
                        <?php
                        if(isset($genre1)) echo " " . $genres[$genre1]['title_ru'];
                        if(isset($genre2)) echo ", " . $genres[$genre2]['title_ru'];
                         if(isset($genre3)) echo ", " . $genres[$genre3]['title_ru'];
                        ?>
                            </td></tr>
                <tr><td>Год выпуска: </td><td><?php echo $mainFilm['fyear']; ?></td></tr>
                <tr><td>Страна </td><td><?php echo $mainFilm['strana']; ?></td></tr>
                <tr><td>Длительность: </td><td><?php echo $mainFilm['time']; ?></td></tr>
                <tr><td>Режиссер: </td><td><?php echo $mainFilm['director']; ?></td></tr>
                <tr><td>В ролях: </td><td><?php echo $mainFilm['in_role']; ?></td></tr>
                <tr><td>Описание </td><td><?php echo $mainFilm['all_text']; ?></td></tr>
            </table>

            <div class="video-box">

                <div class="video">
                    <?php echo $mainFilm['code_vk'] ?>
                </div>
            </div>

        </div>

    </div>



    <br><br><br>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>



</body>
</html>