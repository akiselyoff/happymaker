<!DOCTYPE html>
<html  lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet"/>
    <link rel="icon" href="img/favicon.png" sizes="any">
    <script src="js/jquery-1.7.2.min.js" defer></script>
    <script src="js/js.js" defer></script>
    <meta name="description" content="Печать на шарах">
    <meta name="keywords" content="печать на шарах, логотип на шарах">
    <title>Шары "Bubble"</title>

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
        <li><a rel="nofollow">Печать на шарах</a></li>
    </ul>
</div>
<h1>Печать на шарах</h1>
<article class="catalog">
    <div class="catalog-item print">
        <img src="img/product/print/print.jpg" alt="печать на шарах">
        <p class="title">Печать на шарах</p>
        <p class="val">От 10" (25см) с гелием</p>
        <p class="price">Цена: <span> от 85 грн/шт</span></p>
    </div>
    <div class="catalog-item print">
        <img src="img/product/print/print2.jpg" alt="печать на шарах">
        <p class="title">Печать на шарах</p>
        <p class="val">От 10" (25см) с воздухом на палочке</p>
        <p class="price">Цена: <span> от 15 грн/шт</span></p>
    </div>

</article>

<?php include "includes/footer.html" ?>
</body>
</html>