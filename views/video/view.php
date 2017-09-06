


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="/template/css/main.css" rel="stylesheet">
    <link href="/template/css/bootstrap.min.css" rel="stylesheet">



    <title>
        <?php
        echo $mainVideo['name_ru'];
        if ($mainVideo['n_season']!=0) echo '. Сезон '.$mainVideo['n_season'];
        echo ' Серия '.$mainVideo['n_seria'];
        ?>
    </title>
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
            <div class=" serial_name">
                <p><?php
                    echo $mainVideo['name_ru'];
                    if ($mainVideo['n_season']!=0) echo '. Сезон '.$mainVideo['n_season'];
                    echo ' Серия '.$mainVideo['n_seria'];
                    ?>
                </p>
            </div>
            <div class=" video-box centered">
                <div class="video">
                    <?php echo $mainVideo['code_vk'] ?>
                </div>
            </div>
            <br><br>
            <div class="series-list"><a href="/serial/<?= $mainVideo['data_id']?>">Перейти к сериалу</a></div>
            <br><br>
        </div>
    </div>





    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>



</body>
</html>