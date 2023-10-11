<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet"/>
    <link rel="icon" href="img/favicon.png" sizes="any">
    <script src="js/jquery-1.7.2.min.js" defer></script>
    <script src="js/js.js" defer></script>
    <script src="js/filter.js" defer></script>
    <meta name="description" content="Каталог воздушных шаров &mdash; HappyMaker">
    <meta name="keywords" content="каталог воздушных шаров, наборы из шаров, гелиевые шары, фольгированные шары,
     светящиеся шары, шары со светодиодами, шары с конфетти, печать на шарах, композиции из шаров, оформление шарами,
     фотозоны из шаров, большие шары, пучки шаров">
    <title>Каталог воздушных шаров</title>

</head>
<body>

<?php include "includes/header.html" ?>
<nav>
    <ul>
        <li><a href="index.php"><img src="img/nav/home.png"  alt=""><span>Главная</span></a></li>
        <li class="active"><a><img src="img/nav/balloonsColor.png"  alt=""><span>Каталог</span></a>
        <li><a href="services.php"><img src="img/nav/services.png"  alt=""><span>Услуги</span></a></li>
        <li><a href="info.php"><img src="img/nav/info.png"  alt=""><span>Инфо</span></a></li>
    </ul>
</nav>
<div class="breadcrumbs">
    <ul>
        <li><a href="index.php">Главная</a></li>
        <li>&#9658;</li>
        <li><a>Каталог шаров</a></li>
    </ul>
</div>
<h1>Каталог воздушных шаров</h1>
<!--
<fieldset class="filter">
    <legend>Фильтр товара</legend>
    <fieldset>
        <legend>Размер</legend>
        <label title="(...-28см)"><input type="checkbox" id="small">... - 11"</label>
        <label title="(28см - 40см)"><input type="checkbox" id="middle">12" - 16"</label>
        <label title="(40см - ...)"><input type="checkbox" id="big">17" - ...</label>
    </fieldset>
    <fieldset>
        <legend>Материал</legend>
        <label><input type="checkbox" id="latex">Латексные шары</label>
        <label><input type="checkbox" id="foil">Фольгированные шары</label>
        <label><input type="checkbox" id="bubble">BUBBLE</label>
    </fieldset>
    <fieldset>
        <legend>Форма</legend>
        <label><input type="checkbox" id="circle">Круглые</label>
        <label title="Звёзды, Сердца, Цифры, Животные, Герои, Техника..."><input type="checkbox" id="figure">Фигурные</label>

    </fieldset>
    <fieldset>
        <legend>Опции</legend>
        <label><input type="checkbox" id="konfetti">Шары с конфетти</label>
        <label title="Тассел"><input type="checkbox" id="tail">Шары с хвостами</label>
        <label><input type="checkbox" id="shine">Светящиеся</label>
        <label><input type="checkbox" id="picture">С рисунком</label>
    </fieldset>
    <fieldset>
        <legend>Композиции</legend>
        <label title="Набор шаров"><input type="checkbox" id="set">Набор шаров</label>
        <label title="Арки и гирлянды"><input type="checkbox" id="garland">Арки и гирлянды</label>
        <label title="Стойки из шаров"><input type="checkbox" id="column">Стойки из шаров</label>
        <label title="Букеты из шаров"><input type="checkbox" id="bouquet">Букеты</label>
        <label title="Фотозоны с банером и без"><input type="checkbox" id="photoZone">Фотозоны</label>
    </fieldset>

    <fieldset class="filterButtons">
        <legend>Применить фильтры</legend>
        <label title="Применяет, выбранные фильтры"><input type="button" value="Применить фильтр" id="filterOn"></label>
        <label title="Очищает фильтры"><input type="button" value="Очистить фильтр" id="filterClear"></label>
    </fieldset>
</fieldset>
-->
<article class="catalog">
        <a class="catalog-group latex" href="latex.php">
            <img src="img/product/latex/big2.jpg" alt="Шары из латекса">
            <h2 class="title">Латексные шары</h2>
        </a>
        <a class="catalog-group foil" href="foil.php">
            <img src="img/product/foil/stars.jpg" alt="Фольгированные шары">
            <h2 class="title">Фольгированные шары</h2>
        </a>
        <a class="catalog-group set" href="set.php">
            <img src="img/product/set/setSilverNumbs.jpg" alt="Готовые композиции летающих шаров">
            <h2 class="title">Наборы шаров</h2>
        </a>
        <a class="catalog-group bubble" href="bubble.php">
            <img src="img/product/bubble/bubble01.jpg" alt="Шары Bubble">
            <h2 class="title">Шары "Bubble"</h2>
        </a>
        <a class="catalog-group garland_and_arch" href="garland.php">
            <img src="img/product/garland/fasadeMulticolor.jpg" alt="Арки и гирлянды">
            <h2 class="title">Арки, гирлянды из шаров</h2>
        </a>
        <a class="catalog-group bouquet" href="bouquet.php">
            <img src="img/product/bouquet/buketPenis.jpg" alt="Букеты из шаров">
            <h2 class="title">Букеты из шаров</h2>
        </a>
        <a class="catalog-group photozone" href="photozone.php">
            <img src="img/product/photozone/set.jpg" alt="Фотозоны">
            <h2 class="title">Фотозоны</h2>
        </a>
    </article>
<?php include "includes/footer.html" ?>

</body>
</html>