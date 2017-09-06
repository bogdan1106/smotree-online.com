




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


                <div class="signup-form">

                    <h2>Регистрация</h2>

                    <?php
                    debug($errors);
                    echo '<br><br>';
                    if(isset($errors) && is_array($errors)) {

                        foreach ($errors as $error) {
                            echo $error .'<br>';
                        }
                    }
                    ?>
                    <form action="#" method="post">
                        <input type="text" name="name" placeholder="Имя" value="<?= $name ?>" /> <br>
                        <input type="email" name="email" placeholder="E-mail" value="<?= $email ?> "/>  <br>
                        <input type="password" name="password" placeholder="Пароль"  value="<?= $password ?> "/>  <br>
                        <input type="submit" name="submit" value="Отправить" class="btn btn-default">Регистрация </input>



                    </form>

                </div>




        </div>
    </div>

</div>


<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="template/js/bootstrap.min.js"></script>
</body>
</html>




