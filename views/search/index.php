


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--    <meta http-equiv="X-UA-Compatible" content="IE=edge">-->
    <!--    <!-- Включает масштабирование на мобильных устройствах -->
    <!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->


    <link href="/template/css/style.css" rel="stylesheet">
    <link href="/template/css/bootstrap.min.css" rel="stylesheet">



    <title>main</title>
</head>
<body>



<?php require_once '/views/parts/header.php' ?>


<div class="jumbotron">
    <div class="container">
        <div class="row">

            <?php require_once '/views/parts/left_menu.php' ?>

            <div class="mycol col col-lg-9 col-md-9">






                <?php foreach($resultSearch as $movie): ?>


                    <div class="mycol col col-lg-12  main_video_box">
                        <div class="myrow col  col-lg-3 col-md-3 col-sm-3 col-xs-3 logo_img">
                            <img src="/template/images/posters/<?php echo $movie['data_id']; ?>.jpg" alt="" width="185" height="255">
                        </div>
                        <div class="col col-lg3 title">
                            <div class="rov alert-warning">
                                <?php echo($movie['name_ru']) ;  ?>
                            </div>

                            <!--                            <?php //if($movie['cat'] == 2) echo '<br> Film <br>' ?>
                            <a href="<?php
                            if ($movie['cat'] == 2 || $movie['cat'] == 1) echo '/film/';
                            if ($movie['cat'] == 3) echo '/serial/';
                            echo($movie['data_id']);?>" class="btn btn-success btn-lg">смотреть</a>
                        </div>


                    </div>




                <?php endforeach; ?>


                <?php

                if($_POST['search']) echo $_POST['search'];
                else echo 'Нет заданого запроса поиска ';

                ?>


                <p class="main_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <p><a href="#" class="btn btn-success btn-lg">Узнать больше »</a></p>
            </div>
        </div>
    </div>

</div>


<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="template/js/bootstrap.min.js"></script>
</body>
</html>







