

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--    <meta http-equiv="X-UA-Compatible" content="IE=edge">-->
    <!--    <!-- Включает масштабирование на мобильных устройствах -->
    <!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->


    <link href="/template/css/main.css" rel="stylesheet">
    <link href="/template/css/bootstrap.min.css" rel="stylesheet">

    <?php $genre_id = $id -1 ?>

    <title><?php echo $genres[$genre_id]['title_ru'] . ' - страница ' . $page ?></title>
</head>
<body>



<?php require_once '/views/parts/header.php' ?>


<div class="container w">
    <div class="row centered ">
        <br><br>
        <div class="col-sm-3" >
            <?php require_once '/views/parts/left_menu.php' ?>
        </div>

        <div class="col-sm-9">
            <?php foreach($oneGenreList as $movie): ?>
                <?php require "/views/parts/index_movie_list.php" ?>
            <?php endforeach; ?>
        </div>

        <?php echo $pagination->get(); ?>


    </div>


    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>



</body>
</html>





