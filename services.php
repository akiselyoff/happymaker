<!DOCTYPE html>
<html  lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet"/>
    <link rel="icon" href="img/favicon.png" sizes="any">
    <script src="js/jquery-1.7.2.min.js" defer></script>
    <script src="js/js.js" defer></script>
    <meta name="description" content="Услуги">
    <meta name="keywords" content="наши услуги">

    <title>Наши услуги</title>
</head>
<body>
<?php include "includes/header.html" ?>
<nav>
    <ul>
        <li><a href="index.php"><img src="img/nav/home.png"  alt=""><span>Главная</span></a></li>
        <li><a href="products.php"><img src="img/nav/balloonsColor.png"  alt=""><span>Каталог</span></a></li>
        <li class="active"><a><img src="img/nav/services.png"  alt=""><span>Услуги</span></a></li>
        <li><a href="info.php"><img src="img/nav/info.png"  alt=""><span>Инфо</span></a></li>
    </ul>
</nav>
<div class="breadcrumbs">
    <ul>
        <li><a href="index.php" rel="nofollow">Главная</a></li>
        <li>&#9658;</li>
        <li><a>Услуги</a></li>
    </ul>
</div>
<h1>Наши услуги</h1>
<article class="catalog">
    <div class="catalog-item">
        <img src="img/product/services/dropping3.JPG" alt="">
        <p class="title">Сброс шаров</p>
        <p class="val">от 500шт шаров надутых воздухом в мешке-сетке</p>
        <p class="price">Цена: <span>от 2000 грн</span></p>
    </div>
    <div class="catalog-item">
        <img src="img/product/services/zapolnit.jpg" alt="">
        <p class="title">Заполнение помещений шарами</p>
        <p class="val">Шары надутые воздухом</p>
        <p class="price">Цена: <span>от 4грн/шт</span></p>
    </div>
    <div class="catalog-item">
        <img src="img/product/print/print2.jpg" alt="">
        <p class="title">Печать на шарах</p>
        <p class="val">10" (25см) шары с воздухом на палочке</p>
        <p class="price">Цена: <span>от 15грн/шт</span></p>
    </div>
    <div class="catalog-item">
        <img src="img/product/print/print.jpg" alt="">
        <p class="title">Печать на шарах</p>
        <p class="val">12" (30см) шары с гелием</p>
        <p class="price">Цена: <span>от 90грн/шт</span></p>
    </div>
    <div class="catalog-item">
        <img src="img/product/print/print3.JPG" alt="">
        <p class="title">Печать на шарах</p>
        <p class="val">12" (30см) шары с воздухом на палочке</p>
        <p class="price">Цена: <span>от 15грн/шт</span></p>
    </div>
    <div class="catalog-item">
        <img src="img/product/print/printBig.JPG" alt="">
        <p class="title">Печать на больших шарах</p>
        <p class="val">27" (69см) шары с гелием</p>
        <p class="price">Цена: <span>от 1200грн/шт</span></p>
    </div>

</article>
<?php include "includes/footer.html" ?>

</body>
</html>