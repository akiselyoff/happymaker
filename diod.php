<!DOCTYPE html>
<html  lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet"/>
    <link rel="icon" href="img/favicon.png" sizes="any">
    <script src="js/jquery-1.7.2.min.js" defer></script>
    <script src="js/js.js" defer></script>
    <meta name="description" content="Каталог светящихся шаров">
    <meta name="keywords" content="каталог светящихся шаров, каталог шаров со светодиодами, неоновые шары">
    <title>Латексные шары</title>

</head>
<body>
<?php include "includes/header.html" ?>
<nav>
    <ul>
        <li><a href="index.php"><img src="img/nav/home.png"  alt=""><span>Главная</span></a></li>
        <li class="active"><a href="products.php"><img src="img/nav/balloonsColor.png"  alt=""><span>Каталог</span></a></li>
        <li><a href="portfolio.php"><img src="img/nav/portfolio.png"  alt=""><span>Наши работы</span></a></li>
        <li><a href="info.php"><img src="img/nav/info.png"  alt=""><span>Инфо</span></a></li>
    </ul>
</nav>
<div class="breadcrumbs">
    <ul>
        <li><a href="index.php" rel="nofollow">Главная</a></li>
        <li>&#9658;</li>
        <li><a href="products.php" rel="nofollow">Каталог шаров</a></li>
        <li>&#9658;</li>
        <li><a>Светящиеся шары</a></li>
    </ul>
</div>
<h1>Светящиеся шары</h1>
<article class="catalog">
    <div class="catalog-item latex middle circle">
        <img src="img/product/diod/svet2.jpg" alt="Светящиеся шары">
        <p class="title">Шары со светодиодами</p>
        <p class="val">12" (30см) с гелием</p>
        <p class="price">Цена: <span>37 грн/шт</span></p>
    </div>
    <div class="catalog-item latex small circle">
        <img src="img/product/diod/svet1.jpg" alt="Светящиеся шары">
        <p class="title">Шары со светодиодами</p>
        <p class="val">10" (25см) с воздухом</p>
        <p class="price">Цена: <span>15 грн/шт</span></p>
    </div>
    <div class="catalog-item latex small circle">
        <img src="img/product/diod/neon.jpg" alt="Неоновые шары">
        <p class="title">Неоновые шары</p>
        <p class="val">10" (25см) с гелием</p>
        <p class="price">Цена: <span>24 грн/шт</span></p>
    </div>
    <div class="catalog-item latex middle circle">
        <img src="img/product/diod/neon2.jpg" alt="Неоновые шары">
        <p class="title">Неоновые шары</p>
        <p class="val">12" (30см) с гелием</p>
        <p class="price">Цена: <span>32 грн/шт</span></p>
    </div>
</article>
<?php include "includes/footer.html" ?>
</body>
</html>