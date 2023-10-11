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
    <meta name="description" content="Каталог латексных шаров">
    <meta name="keywords" content="гелиевые шары, латексные шары, шары с рисунками, шары с конфетти, шары с хвостом, шар-сюрприз, светящиеся шары, шары со светодиодами, цифры, буквы, шары сердца">
    <title>Латексные шары</title>

</head>
<body>
<?php include "includes/header.html" ?>
<nav>
    <ul>
        <li><a href="index.php"><img src="img/nav/home.png"  alt=""><span>Главная</span></a></li>
        <li class="active"><a href="products.php"><img src="img/nav/balloonsColor.png"  alt=""><span>Каталог</span></a></li>
        <li><a href="services.php"><img src="img/nav/services.png"  alt=""><span>Услуги</span></a></li>
        <li><a href="info.php"><img src="img/nav/info.png"  alt=""><span>Инфо</span></a></li>
    </ul>
</nav>
<div class="breadcrumbs">
    <ul>
        <li><a href="index.php">Главная</a></li>
        <li>&#9658;</li>
        <li><a href="products.php">Каталог шаров</a></li>
        <li>&#9658;</li>
        <li><a>Латексные шары</a></li>
    </ul>
</div>
<h1>Латексные шары</h1>

<fieldset class="filter">
    <legend>Фильтр товара</legend>
    <fieldset>
        <legend>Размер</legend>
        <label title="(25см)"><input type="checkbox" id="10inch">10" (25см)</label>
        <label title="(28см)"><input type="checkbox" id="11inch">11" (28см)</label>
        <label title="(30см)"><input type="checkbox" id="12inch">12" (30см)</label>
        <label title="(33см)"><input type="checkbox" id="13inch">13" (33см)</label>
        <label title="(36см)"><input type="checkbox" id="14inch">14" (36см)</label>
        <label title="(41см)"><input type="checkbox" id="16inch">16" (41см)</label>
        <label title="(46см)"><input type="checkbox" id="18inch">18" (46см)</label>
        <label title="(48см)"><input type="checkbox" id="19inch">19" (48см)</label>
        <label title="(69см)"><input type="checkbox" id="27inch">27" (69см)</label>
        <label title="(79см)"><input type="checkbox" id="31inch">31" (79см)</label>
    </fieldset>

    <fieldset>
        <legend>Форма</legend>
        <label><input class="checkList" type="checkbox" id="circle">Круглые</label>
        <label><input class="checkList" type="checkbox" id="heart">Сердца</label>
    </fieldset>

    <fieldset>
        <legend>Опции</legend>
        <label><input class="checkList" type="checkbox" id="picture">С рисунком</label>
        <label><input class="checkList" type="checkbox" id="konfetti">С конфетти</label>
        <label><input class="checkList" type="checkbox" id="tail">С хвостом</label>
        <label><input class="checkList" type="checkbox" id="diod">Светящиеся (с диодом)</label>
    </fieldset>

    <fieldset class="filterButtons">
        <legend>Применить фильтры</legend>
        <label title="Применяет, выбранные фильтры"><input type="button" value="Применить фильтр" id="filterOn"></label>
        <label title="Очищает, выбранные фильтры"><input type="button" value="Очистить фильтр" id="filterClear"></label>
    </fieldset>
</fieldset>

<article class="catalog">
     <div class="catalog-item" data-filter="10inch circle">
        <img src="img/product/latex/pastel10.jpg" alt="Шары 10 дюймов">
        <p class="title">Шары пастель</p>
        <p class="val">10" (25см) с гелием</p>
        <p class="price">Цена: <span>24</span> грн/шт</p>
    </div>
    <div class="catalog-item" data-filter="10inch circle">
        <img src="img/product/latex/baloonsMet10.jpg" alt="Шары 10 дюймов">
        <p class="title">Шары металлик</p>
        <p class="val">10" (25см) с гелием</p>
        <p class="price">Цена: <span>25 грн/шт</span></p>
    </div>
    <div class="catalog-item latex small circle" data-filter="10inch circle">
        <img src="img/product/latex/baloonsCrystal.jpg" alt="Шары 10 дюймов">
        <p class="title">Шары кристалл</p>
        <p class="val">10" (25см) с гелием</p>
        <p class="price">Цена: <span>24 грн/шт</span></p>
    </div>
    <div class="catalog-item" data-filter="10inch circle">
        <img src="img/product/diod/neon.jpg" alt="Неоновые шары">
        <p class="title">Неоновые шары</p>
        <p class="val">10" (25см) с гелием</p>
        <p class="price">Цена: <span>24 грн/шт</span></p>
    </div>
    <div class="catalog-item" data-filter="10inch heart">
        <img src="img/product/latex/heartsLatex.jpg" alt="Шары в форме сердец">
        <p class="title">Сердца латексные</p>
        <p class="val">10" (25см)</p>
        <p class="price">Цена: <span>25 грн/шт</span></p>
    </div>
    <div class="catalog-item" data-filter="10inch circle picture">
        <img src="img/product/latex/smiles.jpg" alt="Улыбки/Смайлы">
        <p class="title">Шары-улыбки</p>
        <p class="val">10" (25см) с гелием</p>
        <p class="price">Цена: <span>26 грн/шт</span></p>
    </div>
    <div class="catalog-item" data-filter="11inch circle picture">
        <img src="img/product/latex/smilesClassic.jpg" alt="Улыбки/Смайлы">
        <p class="title">Шары-улыбки</p>
        <p class="val">11" (28см) с гелием</p>
        <p class="price">Цена: <span>28 грн/шт</span></p>
    </div>
    <div class="catalog-item" data-filter="11inch circle">
        <img src="img/product/latex/agatAss.jpg" alt="Шары 11 дюймов">
        <p class="title">Шары Супер Агат</p>
        <p class="val">11" (28см) с гелием</p>
        <p class="price">Цена: <span>45 грн/шт</span></p>
    </div>
    <div class="catalog-item" data-filter="12inch circle">
        <img src="img/product/latex/chromeMulticolor.jpg" alt="Шары 12 дюймов">
        <p class="title">Шары Хром</p>
        <p class="val">12" (30см) с гелием</p>
        <p class="price">Цена: <span>40 грн/шт</span></p>
    </div>
    
    <div class="catalog-item" data-filter="12inch circle">
        <img src="img/product/latex/pastel12.jpg" alt="Шары 12 дюймов">
        <p class="title">Шары пастель</p>
        <p class="val">12" (30см) с гелием</p>
        <p class="price">Цена: <span>28 грн/шт</span></p>
    </div>
    <div class="catalog-item" data-filter="12inch circle">
        <img src="img/product/latex/macaron.jpg" alt="Шары 12 дюймов">
        <p class="title">Шары макарун</p>
        <p class="val">12" (30см) с гелием</p>
        <p class="price">Цена: <span>29 грн/шт</span></p>
    </div>
    <div class="catalog-item" data-filter="12inch circle">
        <img src="img/product/latex/baloonsMet12.jpg" alt="Шары 12 дюймов">
        <p class="title">Шары металлик</p>
        <p class="val">12" (30см) с гелием</p>
        <p class="price">Цена: <span>29 грн/шт</span></p>
    </div>
    <div class="catalog-item" data-filter="12inch circle picture">
        <img src="img/product/latex/emosionAssort12.jpg" alt="Эмоции">
        <p class="title">Шары-эмоции</p>
        <p class="val">12" (30см) с гелием</p>
        <p class="price">Цена: <span>30 грн/шт</span></p>
    </div>
    <div class="catalog-item" data-filter="12inch circle">
        <img src="img/product/latex/longRibbon.jpg" alt="Шары с длинной лентой">
        <p class="title">Шары с длинными лентами</p>
        <p class="val">12" (30см) с гелием</p>
        <p class="price">Цена: <span>29 грн/шт</span></p>
    </div>
    
    <div class="catalog-item" data-filter="12inch circle">
        <img src="img/product/diod/neon2.jpg" alt="Неоновые шары">
        <p class="title">Неоновые шары</p>
        <p class="val">12" (30см) с гелием</p>
        <p class="price">Цена: <span>28 грн/шт</span></p>
    </div>
    <div class="catalog-item" data-filter="12inch diod circle">
        <img src="img/product/diod/svet2.jpg" alt="Светящиеся шары">
        <p class="title">Шары со светодиодами</p>
        <p class="val">12" (30см) с гелием</p>
        <p class="price">Цена: <span>40 грн/шт</span></p>
    </div>
    <div class="catalog-item" data-filter="10inch diod circle">
        <img src="img/product/diod/svet1.jpg" alt="Светящиеся шары">
        <p class="title">Шары со светодиодами</p>
        <p class="val">10" (25см) с воздухом</p>
        <p class="price">Цена: <span>15 грн/шт</span></p>
    </div>
    <div class="catalog-item" data-filter="12inch circle picture">
        <img src="img/product/latex/starsAssorti1.jpg" alt="Шары с рисунком">
        <p class="title">Шары со звездами</p>
        <p class="val">Шелкография 12" (30см) с гелием</p>
        <p class="price">Цена: <span>32 грн/шт</span></p>
    </div>
    <div class="catalog-item" data-filter="12inch circle picture">
        <img src="img/product/latex/redHeart.jpg" alt="Шары с рисунком">
        <p class="title">Шары с сердцами</p>
        <p class="val">Шелкография 12" (30см) с гелием</p>
        <p class="price">Цена: <span>32 грн/шт</span></p>
    </div>
    <div class="catalog-item" data-filter="12inch circle picture">
        <img src="img/product/latex/whiteHeart.jpg" alt="Шары с рисунком">
        <p class="title">Шары с сердцами</p>
        <p class="val">Шелкография 12" (30см) с гелием</p>
        <p class="price">Цена: <span>32 грн/шт</span></p>
    </div>
    <div class="catalog-item" data-filter="12inch circle picture">
        <img src="img/product/latex/dots1.jpg" alt="Шары с рисунком">
        <p class="title">Шары в горошек</p>
        <p class="val">Шелкография 12" (30см) с гелием</p>
        <p class="price">Цена: <span>32 грн/шт</span></p>
    </div>
    <div class="catalog-item" data-filter="12inch circle picture">
        <img src="img/product/latex/pirates.jpg" alt="Шары с рисунком">
        <p class="title">Шары с пиратами</p>
        <p class="val">Шелкография 12" (30см) с гелием</p>
        <p class="price">Цена: <span>32 грн/шт</span></p>
    </div>
    <div class="catalog-item" data-filter="12inch circle picture">
        <img src="img/product/latex/skullBW.jpg" alt="Шары с рисунком">
        <p class="title">Шары с черепом</p>
        <p class="val">Шелкография 12" (30см) с гелием</p>
        <p class="price">Цена: <span>32 грн/шт</span></p>
    </div>
    <div class="catalog-item" data-filter="12inch circle picture">
        <img src="img/product/latex/ananasBW.jpg" alt="Шары с рисунком">
        <p class="title">Шары с ананасом</p>
        <p class="val">Шелкография 12" (30см) с гелием</p>
        <p class="price">Цена: <span>35 грн/шт</span></p>
    </div>
    <div class="catalog-item" data-filter="12inch circle picture">
        <img src="img/product/latex/almazBW.jpg" alt="Шары с рисунком">
        <p class="title">Шары с алмазом</p>
        <p class="val">Шелкография 12" (30см) с гелием</p>
        <p class="price">Цена: <span>35 грн/шт</span></p>
    </div>
    <div class="catalog-item" data-filter="12inch circle picture">
        <img src="img/product/latex/insult.jpg" alt="Шары с рисунком">
        <p class="title">Шары оскорбительные</p>
        <p class="val">Шелкография 12" (30см) с гелием</p>
        <p class="price">Цена: <span>35 грн/шт</span></p>
    </div>
    <div class="catalog-item" data-filter="12inch circle picture">
        <img src="img/product/latex/shit.jpg" alt="Шары с рисунком">
        <p class="title">Шары с какашкой</p>
        <p class="val">Шелкография 12" (30см) с гелием</p>
        <p class="price">Цена: <span>35 грн/шт</span></p>
    </div>
    <div class="catalog-item" data-filter="12inch circle picture">
        <img src="img/product/latex/helloweenPumpBlack.jpg" alt="Шары с рисунком">
        <p class="title">Шары на Хеллоуин Черная Тыква</p>
        <p class="val">Шелкография 12" (30см) с гелием</p>
        <p class="price">Цена: <span>35 грн/шт</span></p>
    </div>
    <div class="catalog-item" data-filter="12inch circle picture">
        <img src="img/product/latex/helloweenBlackScaryFaces.jpg" alt="Шары с рисунком">
        <p class="title">Шары на Хеллоуин Зловещие Рожицы</p>
        <p class="val">Шелкография 12" (30см) с гелием</p>
        <p class="price">Цена: <span>35 грн/шт</span></p>
    </div>
    <div class="catalog-item" data-filter="14inch circle picture">
        <img src="img/product/latex/smiles14.jpg" alt="Улыбки/Смайлы">
        <p class="title">Шары-улыбки</p>
        <p class="val">14" (36см) с гелием</p>
        <p class="price">Цена: <span>45 грн/шт</span></p>
    </div>
    <div class="catalog-item" data-filter="14inch circle picture">
        <img src="img/product/latex/dots14.jpg" alt="Шары  в горошек">
        <p class="title">Шары  в горошек</p>
        <p class="val">Шелкография 14" (36см)</p>
        <p class="price">Цена: <span>45 грн/шт</span></p>
    </div>
    <div class="catalog-item" data-filter="14inch circle picture">
        <img src="img/product/latex/dotsBW.jpg" alt="Шары  в горошек ч/б">
        <p class="title">Шары  в горошек ч/б</p>
        <p class="val">Шелкография 14" (36см)</p>
        <p class="price">Цена: <span>45 грн/шт</span></p>
    </div>
    <div class="catalog-item" data-filter="14inch circle picture">
        <img src="img/product/latex/starsBlackGold.jpg" alt="Шары черные с золотыми звездами">
        <p class="title">Шары  со звездами</p>
        <p class="val">Шелкография 14" (36см)</p>
        <p class="price">Цена: <span>45 грн/шт</span></p>
    </div>
    <div class="catalog-item" data-filter="14inch circle picture">
        <img src="img/product/latex/circlesBlackWhiteGold.jpg" alt="Шары черные с золотыми кругами">
        <p class="title">Шары  с кругами</p>
        <p class="val">Шелкография 14" (36см)</p>
        <p class="price">Цена: <span>45 грн/шт</span></p>
    </div>
    <div class="catalog-item" data-filter="14inch circle picture">
        <img src="img/product/latex/konfettiPicBlackGold.jpg" alt="Шары черные с золотыми кругами">
        <p class="title">Шары  с нарисованным конфетти</p>
        <p class="val">Шелкография 14" (36см)</p>
        <p class="price">Цена: <span>45 грн/шт</span></p>
    </div>
    <div class="catalog-item" data-filter="14inch circle picture">
        <img src="img/product/latex/heartsBW.jpg" alt="Шары черные и белые с золотыми сердцами">
        <p class="title">Шары  с сердечками</p>
        <p class="val">Шелкография 14" (36см)</p>
        <p class="price">Цена: <span>45 грн/шт</span></p>
    </div>
    <div class="catalog-item" data-filter="16inch heart">
        <img src="img/product/latex/heart1.jpg" alt="Шары в форме сердец">
        <p class="title">Сердце</p>
        <p class="val">16" (41см)</p>
        <p class="price">Цена: <span>65 грн/шт</span></p>
    </div>
    <div class="catalog-item" data-filter="18inch circle">
        <img src="img/product/latex/punch.jpg" alt="Punch Ball">
        <p class="title">Punch-Ball</p>
        <p class="val">18" (46см) с воздухом</p>
        <p class="price">Цена: <span>10 грн/шт</span></p>
    </div>
    <div class="catalog-item" data-filter="19inch circle">
        <img src="img/product/latex/big.jpg" alt="Большие шары">
        <p class="title">Большие шары</p>
        <p class="val">19" (48см) с гелием</p>
        <p class="price">Цена: <span>120 грн/шт</span></p>
    </div>
    <div class="catalog-item" data-filter="27inch circle">
        <img id="pic" src="img/product/latex/big2.jpg" alt="Большие шары">
        <p class="title">Большие шары</p>
        <p class="val">24" (61см) с гелием</p>
        <p class="price">Цена: <span>350 грн/шт</span></p>
    </div>
    <div class="catalog-item" data-filter="27inch circle">
        <img id="pic" src="img/product/latex/big4.jpg" alt="Большие шары">
        <p class="title">Большие шары</p>
        <p class="val">27" (69см) с гелием</p>
        <p class="price">Цена: <span>500 грн/шт</span></p>
    </div>
    <div class="catalog-item" data-filter="27inch circle tail">
        <img src="img/product/latex/bigAndTale4.jpg" alt="Большие шары с кисточками">
        <p class="title">Большие шары c хвостом</p>
        <p class="val">27" (69см) с гелием</p>
        <p class="price">Цена: <span>700 грн</span></p>
    </div>
    <div class="catalog-item" data-filter="10inch 12inch circle">
        <img src="img/product/latex/zapolnit.jpg" alt="Заполнение помещений шарами">
        <p class="title">Заполнение помещений шарами</p>
        <p class="val">Шары разного размера</p>
        <p class="price">Цена: <span>от 3 грн/шт</span></p>
    </div>
    
     <div class="catalog-item" data-filter="27inch circle">
        <img src="img/product/latex/bigAndTale5.jpg" alt="Большие шары">
        <p class="title">Большие шары</p>
        <p class="val">27" (69см) с гелием</p>
        <p class="price">Цена: <span>500 грн/шт</span></p>
    </div>
    
    <div class="catalog-item" data-filter="12inch konfetti circle">
        <img src="img/product/konfetti/konfeti_3.jpg" alt="Шары с конфетти">
        <p class="title">Шары с конфетти</p>
        <p class="val">12" (30см) с гелием</p>
        <p class="price">Цена: <span>40 грн</span></p>
    </div>
    <div class="catalog-item" data-filter="14inch konfetti circle">
        <img src="img/product/konfetti/konfetti2.png" alt="Шары с конфетти">
        <p class="title">Шары с конфетти</p>
        <p class="val">14" (36см) с гелием</p>
        <p class="price">Цена: <span>50 грн</span></p>
    </div>
    <div class="catalog-item" data-filter="18inch konfetti circle">
        <img src="img/product/konfetti/konfeti.jpg" alt="Шары с конфетти">
        <p class="title">Шары с конфетти</p>
        <p class="val">18" (46см) с гелием</p>
        <p class="price">Цена: <span>130 грн</span></p>
    </div>
    <div class="catalog-item" data-filter="18inch konfetti tail circle">
        <img src="img/product/konfetti/konfetiTale.jpg" alt="Шары с конфетти и кисточкой">
        <p class="title">Шары с конфетти и хвостом</p>
        <p class="val">18" (46см) с гелием</p>
        <p class="price">Цена: <span>160 грн</span></p>
    </div>
    <div class="catalog-item" data-filter="27inch konfetti tail circle">
        <img src="img/product/konfetti/GigaKonfetiTale.jpg" alt="Большие шары с кисточками и конфетти">
        <p class="title">Большие шары c конфетти и хвостом</p>
        <p class="val">27" (69см) с гелием</p>
        <p class="price">Цена: <span>750 грн</span></p>
    </div>

    <div class="catalog-item" data-filter="31inch konfetti tail circle">
        <img src="img/product/konfetti/bigKonfetiTale.jpg" alt="Шар гигант с кисточками и конфетти">
        <p class="title">Шар гигант c конфетти и хвостом</p>
        <p class="val">31" (79см) с гелием</p>
        <p class="price">Цена: <span>850 грн</span></p>
    </div>
    
    
</article>
<?php include "includes/footer.html" ?>
</body>
</html>
