




<div id="main-sidebar">
    <div class="logo">
        <h2>Жанры</h2>
    </div> <!-- /.logo -->
    <div class="navigation">
        <ul class="main-menu">
            <?php foreach ($genres as $genreItem): ?>
                <li class="home"><a href="/genre/<?php echo $genreItem['id']; ?>/page-1"><?php echo $genreItem['title_ru']; ?></a></li>
            <?php endforeach; ?>
<!--            <li class="home"><a href="#templatemo">Боевик</a></li>-->
<!--            <li class="home"><a href="#about">Комедия</a></li>-->
<!--            <li class="home"><a href="#services">Детектив</a></li>-->
<!--            <li class="home"><a href="#portfolio">Мелодрама</a></li>-->
<!--            <li class="home"><a href="#contact">Фентези</a></li>-->
<!--            <li><a href="https://www.google.com" class="external">Google</a></li>-->
        </ul>
    </div> <!-- /.navigation -->
</div> <!-- /#main-sidebar -->
