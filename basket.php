<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet"/>
    <link rel="icon" href="img/favicon.png" sizes="any">
    <script src="js/jquery-1.7.2.min.js" defer></script>
    <script src="js/js.js" defer></script>
    <meta name="description" content="Подарочные корзины с фруктами">
    <meta name="keywords" content="Подарочные корзины с фруктами">
    <title>Подарочные корзины</title>

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
        <li><a>Подарочные корзины</a></li>
    </ul>
</div>
<h1>Подарочные корзины</h1>
<article class="catalog">
    <div class="catalog-item">
        <img src="img/portfolio/busket1.jpg" alt="">
        <p class="title">Корзина</p>
    </div>
    <div class="catalog-item">
        <img src="img/portfolio/busket2.jpg" alt="">
        <p class="title">Корзина с шариком</p>
    </div>

</article>
<?php include "includes/footer.html" ?>
</body>
</html>