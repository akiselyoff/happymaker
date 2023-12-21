<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet"/>
    <link rel="icon" href="img/favicon.png" sizes="any">
    <script src="js/jquery-1.7.2.min.js" defer></script>
    <script src="js/js.js" defer></script>
    <meta name="description" content="Подарункові корзини з наповненням">
    <meta name="keywords" content="Подарункові корзини з наповненням, корзини, подарункові корзини, подарочные корзины">
    <title>Подарункові корзини</title>

</head>
<body>
<?php include "includes/header.html" ?>
<nav>
    <ul>
        <li><a href="index.php"><img src="img/nav/home.png"  alt=""><span>Головна</span></a></li>
        <li class="active"><a href="products.php"><img src="img/nav/balloonsColor.png"  alt=""><span>Каталог</span></a></li>
        <li><a href="portfolio.php"><img src="img/nav/portfolio.png"  alt=""><span>Наші роботи</span></a></li>
        <li><a href="info.php"><img src="img/nav/info.png"  alt=""><span>Інфо</span></a></li>
    </ul>
</nav>
<div class="breadcrumbs">
    <ul>
        <li><a href="index.php" rel="nofollow">Головна</a></li>
        <li>&#9658;</li>
        <li><a href="products.php" rel="nofollow">Каталог корзин</a></li>
        <li>&#9658;</li>
        <li><a>Подарункові корзини</a></li>
    </ul>
</div>
<h1>Подарункові корзини</h1>
<article class="catalog">
    <div class="catalog-item">
        <img src="img/portfolio/busket1.jpg" alt="">
        <p class="title">Корзина з наповненням №1</p>
    </div>
    <div class="catalog-item">
        <img src="img/portfolio/busket2.jpg" alt="">
        <p class="title">Корзина з кулькою і наповненням №2</p>
    </div>

</article>
<?php include "includes/footer.html" ?>
</body>
</html>