
<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="/template/css/main.css" rel="stylesheet">
    <link href="/template/css/bootstrap.min.css" rel="stylesheet">



    <title>
        <?php echo 'Сериал - ' . $serialItem['name_ru'] . ' - смотреть онлайн'; ?>
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
                <p><?php echo $serialItem['name_ru']; ?></p>
            </div>
            <div class="serial_poster">
                <img src="/template/images/posters/<?php echo $serialItem['id']; ?>.jpg">
            </div>


            <table class="tftable" border="0">

                <tr><td>Жанр: </td><td>
                        <?php
                        echo $genres[$genre1]['title_ru'];
                        if(isset($genre2)) echo ", " . $genres[$genre2]['title_ru'];
                        if(isset($genre3)) echo ", " . $genres[$genre3]['title_ru'];
                        ?>
                    </td></tr>
                <tr><td>Год выпуска: </td><td><?php echo $serialItem['fyear']; ?></td></tr>
                <tr><td>Страна </td><td><?php echo $serialItem['strana']; ?></td></tr>
                <tr><td>Время
                       <?php if($serialItem['genre1'] == 22) echo ' выпуска'; else echo ' серии:' ?>
                    </td>
                    <td><?php echo $serialItem['time']; ?></td></tr>
                <tr><td>Режиссер: </td><td><?php echo $serialItem['director']; ?></td></tr>
                <tr><td>В ролях: </td><td><?php echo $serialItem['in_role']; ?></td></tr>
                <tr><td>Описание </td><td><?php echo $serialItem['all_text']; ?></td></tr>
            </table>



            <br>
            <div class="series-list">
            <br><br>
            <?php
            if ($allSeries[0]['n_season'] == 0 ) {
                foreach ($allSeries as $seria) : ?>
                     <a href="/videos/<?= $seria['id']?>">
                     Серия <?= $seria['n_seria']; ?>  </a>
                    <br>

             <?php endforeach ;
                   }

             else {
                  foreach ($allSeries as $seria) : ?>
                      <a href="/videos/<?= $seria['id']?>">
                       Сезон <?= $seria['n_season']; ?> Серия <?= $seria['n_seria']; ?></a>
                      <br>
                      <?php endforeach ;
                   }
            ?>
            </div>
        </div>
    </div>


    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>



</body>
</html>