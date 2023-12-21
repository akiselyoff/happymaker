<!DOCTYPE html>
<html  lang="ua">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet"/>
    <link rel="icon" href="img/favicon.png" sizes="any">
    <script src="js/jquery-1.7.2.min.js" defer></script>
    <script src="js/js.js" defer></script>
    <meta name="description" content="Друк на кулях">
    <meta name="keywords" content="печать на шарах, логотип на шарах, друк на кулях">
    <title>Друк на кулях</title>

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
        <li><a href="products.php" rel="nofollow">Каталог куль</a></li>
        <li>&#9658;</li>
        <li><a rel="nofollow">Друк на кулях</a></li>
    </ul>
</div>
<h1>Друк на кулях</h1>
<article class="catalog">
    <div class="catalog-item print">
        <img src="img/product/print/print.jpg" alt="друк на кулях">
        <p class="title">Друк на кулях</p>
        <p class="val">Від 10" (25см) з гелієм</p>
        <p class="price">Ціна: <span> від 85 грн/шт</span></p>
    </div>
    <div class="catalog-item print">
        <img src="img/product/print/print2.jpg" alt="друк на кулях">
        <p class="title">Друк на кулях</p>
        <p class="val">Від 10" (25см) з повітрям на палочці</p>
        <p class="price">Ціна: <span> від 15 грн/шт</span></p>
    </div>

</article>

<?php include "includes/footer.html" ?>
</body>
</html>