<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--    <!-- Включает масштабирование на мобильных устройствах -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/template/css/main.css" rel="stylesheet">
    <link href="/template/css/bootstrap.min.css" rel="stylesheet">
    <title>Главная</title>
</head>
<body>

<?php require_once '/views/parts/header.php' ?>

<div class="container w">
    <div class="row centered ">
        <div class="col-sm-3 col-xs-12">
            <?php require_once '/views/parts/left_menu.php' ?>
        </div>

        <div class="col-sm-9">
            <?php foreach ($latestVideos as $movie): ?>
                <?php if(!file_exists(ROOT. '/template/images/posters/'. $movie['data_id'].'.jpg')) {
                    var_dump(ROOT. '/template/images/posters/'. $movie['data_id'].'.jpg');
                    continue;
                }
                ?>
                <?php require "/views/parts/index_movie_list.php" ?>
            <?php endforeach; ?>
        </div>
    </div>


    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="/template/js/bootstrap.min.js"></script>
</body>
</html>