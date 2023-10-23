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
    <meta name="description" content="Каталог фольгированных шаров">
    <meta name="keywords" content="каталог фольгированных шаров">
    <title>Фольгированные шары</title>

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
        <li><a href="index.php" rel="nofollow">Главная</a></li>
        <li>&#9658;</li>
        <li><a href="products.php" rel="nofollow">Каталог шаров</a></li>
        <li>&#9658;</li>
        <li><a>Фольгированные шары</a></li>
    </ul>
</div>
<h1>Фольгированные шары</h1>

<fieldset class="filter">
    <legend>Фильтр товара</legend> 

    <fieldset>
        <legend>Форма</legend>
        <label><input class="checkList" type="checkbox" id="circle">Круглые</label>
        <label><input class="checkList" type="checkbox" id="sphere">Сферы</label>
        <label><input class="checkList" type="checkbox" id="heart">Сердца</label>
        <label><input class="checkList" type="checkbox" id="star">Звёзды</label>
        <label><input class="checkList" type="checkbox" id="numbsLetters">Цифры, буквы, слова</label>
        <label><input class="checkList" type="checkbox" id="alcohol">Бокалы, Бутылки, Алкоголь</label>
        <label><input class="checkList" type="checkbox" id="animal">Животные</label>
        <label><input class="checkList" type="checkbox" id="dino">Динозавры</label>
        <label><input class="checkList" type="checkbox" id="newborn">Рождение ребёнка</label>
        <label><input class="checkList" type="checkbox" id="birthday">День рождения</label>
        <label><input class="checkList" type="checkbox" id="cartoonHeroes">Персонажи мультфильмов </label>
        <label><input class="checkList" type="checkbox" id="vehicle">Техника, машины, самолёты, корабли</label>
        <label><input class="checkList" type="checkbox" id="other">Другое</label>

    </fieldset>
<!--
    <fieldset>
        <legend>Размер</legend>
        
        <label title="(36см)"><input type="checkbox" id="14inch">14" (36см)</label>
        <label title="(41см)"><input type="checkbox" id="16inch">16" (41см)</label>
        <label title="(43см)"><input type="checkbox" id="14inch">17" (43см)</label>
        <label title="(46см)"><input type="checkbox" id="18inch">18" (46см)</label>
        <label title="(48см)"><input type="checkbox" id="19inch">19" (48см)</label>
        <label title="(81см)"><input type="checkbox" id="32inch">32" (81см)</label>
        <label title="(101см)"><input type="checkbox" id="40inch">40" (101см)</label>
    </fieldset>
-->
    <fieldset class="filterButtons">
        <legend>Применить фильтры</legend>
        <label title="Применяет, выбранные фильтры"><input type="button" value="Применить фильтр" id="filterOn"></label>
        <label title="Очищает, выбранные фильтры"><input type="button" value="Очистить фильтр" id="filterClear"></label>
    </fieldset>
</fieldset>
<article class="catalog">
   <div class="catalog-item foil big figure" data-filter="heart">
        <img src="img/product/foil/hearts.jpg" alt="Фольгированные шары">
        <p class="title">Сердца</p>
        <p class="val">18" (46см) с гелием</p>
        <p class="price">Цена: <span>130 грн/шт</span></p>
    </div>

    <div class="catalog-item foil big figure" data-filter="star">
        <img src="img/product/foil/stars.jpg" alt="Фольгированные шары">
        <p class="title">Звёзды</p>
        <p class="val">18" (46см) с гелием</p>
        <p class="price">Цена: <span>130 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle" data-filter="circle">
        <img src="img/product/foil/krug.png" alt="Фольгированные шары">
        <p class="title">Круги</p>
        <p class="val">18" (46см) с гелием</p>
        <p class="price">Цена: <span>130 грн/шт</span></p>
    </div>
    <div class="catalog-item foil middle figure" data-filter="sphere">
        <img src="img/product/foil/sphare3D.jpg" alt="Фольгированные шары">
        <p class="title">Сфера</p>
        <p class="val">16" (41см) с гелием</p>
        <p class="price">Цена: <span>480 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure picture" data-filter="star birthday">
        <img src="img/product/foil/starHB.jpg" alt="Фольгированные шары">
        <p class="title">Звёзда С днем рождения</p>
        <p class="val">18" (46см) с гелием</p>
        <p class="price">Цена: <span>150 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="star">
        <img src="img/product/foil/starsSatin.jpg" alt="Фольгированные шары">
        <p class="title">Звёзды сатин</p>
        <p class="val">18" (46см) с гелием</p>
        <p class="price">Цена: <span>130 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="star">
        <img src="img/product/foil/starBig.jpg" alt="Фольгированные шары">
        <p class="title">Звёзда гигант</p>
        <p class="val">32" (81см) с гелием</p>
        <p class="price">Цена: <span>600 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="other">
        <img src="img/product/foil/moons.jpg" alt="Фольгированные шары">
        <p class="title">Луна</p>
        <p class="val">17" (43см) с гелием</p>
        <p class="price">Цена: <span>130грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="star">
        <img src="img/product/foil/starRainbow.jpg" alt="Фольгированные шары">
        <p class="title">Звёзды с блеском</p>
        <p class="val">19" (48см) с гелием</p>
        <p class="price">Цена: <span>180 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure picture" data-filter="heart">
        <img src="img/product/foil/heartUkr.jpg" alt="Фольгированные шары">
        <p class="title">Сердца с символикой</p>
        <p class="val">18" (46см) с гелием</p>
        <p class="price">Цена: <span>150 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="numbsLetters">
        <img src="img/product/foil/NumbsFoil.jpg" alt="Фольгированные шары">
        <p class="title">Цифры</p>
        <p class="val">40" (1 м) с гелием</p>
        <p class="price">Цена: <span>400 грн/шт</span></p>
    </div>
    <div class="catalog-item foil middle figure" data-filter="numbsLetters">
        <img src="img/product/foil/LettersFoil.jpg" alt="Фольгированные шары">
        <p class="title">Буквы</p>
        <p class="val">14" (36см) с воздухом</p>
        <p class="price">Цена: <span>50 грн/шт</span></p>
    </div>
    <div class="catalog-item foil middle figure" data-filter="numbsLetters">
        <img src="img/product/foil/LettersFoil40.jpg" alt="Фольгированные шары">
        <p class="title">Буквы</p>
        <p class="val">40" (1 м) с воздухом</p>
        <p class="price">Цена: <span>160 грн/шт</span></p>
    </div>
    <div class="catalog-item foil middle figure" data-filter="numbsLetters birthday">
        <img src="img/product/foil/lettersHBsilver.jpg" alt="Фольгированные шары">
        <p class="title">Буквы Happy Birthday</p>
        <p class="val">Happy-76х25см, Birth-66х22см, Day-45х22см с воздухом</p>
        <p class="price">Цена: <span>300 грн/шт</span></p>
    </div>
    <div class="catalog-item foil middle figure" data-filter="numbsLetters birthday">
        <img src="img/product/foil/lettersHBgold.jpg" alt="Фольгированные шары">
        <p class="title">Буквы Happy B-day</p>
        <p class="val">76х48см с воздухом</p>
        <p class="price">Цена: <span>300 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure picture" data-filter="numbsLetters animal">
        <img src="img/product/foil/NumbsFoilZoo.jpg" alt="Фольгированные шары">
        <p class="title">Цифры-звери</p>
        <p class="val">40" (1 м) с гелием</p>
        <p class="price">Цена: <span>450 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure picture" data-filter="newborn">
        <img src="img/product/foil/footBoyGirl.jpg" alt="Фольгированные шары">
        <p class="title">Стопа</p>
        <p class="val">65х93см с гелием</p>
        <p class="price">Цена: <span>340 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure picture" data-filter="newborn">
        <img src="img/product/foil/littleBoyGirl.jpg" alt="Фольгированные шары">
        <p class="title">Младенец</p>
        <p class="val">47х70см с гелием</p>
        <p class="price">Цена: <span>340 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure picture" data-filter="newborn">
        <img src="img/product/foil/kolaskaBoy.jpg" alt="Фольгированные шары">
        <p class="title">Коляска для мальчика</p>
        <p class="val">73х95см с гелием</p>
        <p class="price">Цена: <span>340 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure picture" data-filter="newborn">
        <img src="img/product/foil/kolaskaGirl.jpg" alt="Фольгированные шары">
        <p class="title">Коляска для девочки</p>
        <p class="val">73х95см с гелием</p>
        <p class="price">Цена: <span>340 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure picture" data-filter="newborn">
        <img src="img/product/foil/babyBoyHead.jpg" alt="Фольгированные шары">
        <p class="title">Младенец мальчик голова</p>
        <p class="val">40х45 см с гелием</p>
        <p class="price">Цена: <span>340 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure picture" data-filter="newborn">
        <img src="img/product/foil/babyGirlHead.jpg" alt="Фольгированные шары">
        <p class="title">Младенец девочка голова</p>
        <p class="val">40х45 см с гелием</p>
        <p class="price">Цена: <span>340 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure picture" data-filter="newborn">
        <img src="img/product/foil/lelekaBoy.jpg" alt="Фольгированные шары">
        <p class="title">Аист для мальчика</p>
        <p class="val">82х82см с гелием</p>
        <p class="price">Цена: <span>340 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure picture" data-filter="newborn">
        <img src="img/product/foil/lelekaGirl.jpg" alt="Фольгированные шары">
        <p class="title">Аист для девочки</p>
        <p class="val">82х82см с гелием</p>
        <p class="price">Цена: <span>340грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure picture" data-filter="newborn">
        <img src="img/product/foil/babyGirlBody.jpg" alt="Фольгированные шары">
        <p class="title">Боди девочка</p>
        <p class="val">55х60см с гелием</p>
        <p class="price">Цена: <span>340 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure picture" data-filter="newborn">
        <img src="img/product/foil/babyBoyBody.jpg" alt="Фольгированные шары">
        <p class="title">Боди мальчик</p>
        <p class="val">55х60см с гелием</p>
        <p class="price">Цена: <span>340 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure picture" data-filter="newborn heart">
        <img src="img/product/foil/babyGirlHeart.jpg" alt="Фольгированные шары">
        <p class="title">Сердце девочка</p>
        <p class="val">18" (46см) с гелием</p>
        <p class="price">Цена: <span>160 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure picture" data-filter="newborn heart">
        <img src="img/product/foil/babyBoyHeart.jpg" alt="Фольгированные шары">
        <p class="title">Сердце мальчик</p>
        <p class="val">18" (46см) с гелием</p>
        <p class="price">Цена: <span>160 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure picture" data-filter="newborn">
        <img src="img/product/foil/bottleBoy.jpg" alt="Фольгированные шары">
        <p class="title">Бутылочка мальчику</p>
        <p class="val">43х80см с гелием</p>
        <p class="price">Цена: <span>340 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure picture" data-filter="newborn">
        <img src="img/product/foil/bottleGirl.jpg" alt="Фольгированные шары">
        <p class="title">Бутылочка девочке</p>
        <p class="val">43х80см с гелием</p>
        <p class="price">Цена: <span>340 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure picture" data-filter="newborn">
        <img src="img/product/foil/babySoska.jpg" alt="Фольгированные шары">
        <p class="title">Соска</p>
        <p class="val">С гелием</p>
        <p class="price">Цена: <span>340 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure picture" data-filter="alcohol">
        <img src="img/product/foil/champFM.jpg" alt="Фольгированные шары">
        <p class="title">Бутылка Шампанского</p>
        <p class="val">83х43см с гелием</p>
        <p class="price">Цена: <span>340 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure picture" data-filter="alcohol">
        <img src="img/product/foil/champ.jpg" alt="Фольгированные шары">
        <p class="title">Бутылка Шампанского</p>
        <p class="val">35х91см с гелием</p>
        <p class="price">Цена: <span>440 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure picture" data-filter="alcohol">
        <img src="img/product/foil/champBig.jpg" alt="Фольгированные шары">
        <p class="title">Бутылка Шампанского Большая</p>
        <p class="val">99см с гелием</p>
        <p class="price">Цена: <span>600 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure picture" data-filter="alcohol">
        <img src="img/product/foil/bokal.jpg" alt="Фольгированные шары">
        <p class="title">Бокал шампанского</p>
        <p class="val">33х89 см с гелием</p>
        <p class="price">Цена: <span>340 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure picture" data-filter="alcohol">
        <img src="img/product/foil/whisky.jpg" alt="Фольгированные шары">
        <p class="title">Бутылка Виски</p>
        <p class="val">78х34см с гелием</p>
        <p class="price">Цена: <span>340 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure picture" data-filter="other">
        <img src="img/product/foil/cardKing.jpg" alt="Фольгированные шары">
        <p class="title">Карта Король</p>
        <p class="val">30х43 см с гелием</p>
        <p class="price">Цена: <span>340 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure picture" data-filter="other">
        <img src="img/product/foil/crownGold.jpg" alt="Фольгированные шары">
        <p class="title">Золотая Корона</p>
        <p class="val">89х74 см с гелием</p>
        <p class="price">Цена: <span>340 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure picture" data-filter="other">
        <img src="img/product/foil/ringGold.jpg" alt="Фольгированные шары">
        <p class="title">Кольцо с Алмазом золото</p>
        <p class="val">84х57 см с гелием</p>
        <p class="price">Цена: <span>380 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure picture" data-filter="other">
        <img src="img/product/foil/ringSilver.jpg" alt="Фольгированные шары">
        <p class="title">Кольцо с Алмазом серебро</p>
        <p class="val">79х54 см с гелием</p>
        <p class="price">Цена: <span>380 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure picture" data-filter="other">
        <img src="img/product/foil/lipsRed.jpg" alt="Фольгированные шары">
        <p class="title">Губы Красные</p>
        <p class="val">43х33 см с гелием</p>
        <p class="price">Цена: <span>300 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure picture" data-filter="other">
        <img src="img/product/foil/lipsRedLosk.jpg" alt="Фольгированные шары">
        <p class="title">Губы Красные с блеском</p>
        <p class="val">53х98 см с гелием</p>
        <p class="price">Цена: <span>380 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure picture" data-filter="other">
        <img src="img/product/foil/championCupGold.jpg" alt="Фольгированные шары">
        <p class="title">Кубок Чемпиона Золотой</p>
        <p class="val">63х71 см с гелием</p>
        <p class="price">Цена: <span>380 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure picture" data-filter="alcohol">
        <img src="img/product/foil/beer.jpg" alt="Фольгированные шары">
        <p class="title">Кружка с пивом</p>
        <p class="val">74х50см с гелием</p>
        <p class="price">Цена: <span>380 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure picture" data-filter="alcohol">
        <img src="img/product/foil/beerBig.jpg" alt="Фольгированные шары">
        <p class="title">Кружка с пивом большая</p>
        <p class="val">89см с гелием</p>
        <p class="price">Цена: <span>600 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="circle newborn">
        <img src="img/product/foil/babyBoy.jpg" alt="Фольгированные шары">
        <p class="title">Новорожденным мальчикам</p>
        <p class="val">18" (46см) с гелием</p>
        <p class="price">Цена: <span>150 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="circle newborn">
        <img src="img/product/foil/babyGirl.jpg" alt="Фольгированные шары">
        <p class="title">Новорожденным девочкам</p>
        <p class="val">18" (46см) с гелием</p>
        <p class="price">Цена: <span>150 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="circle other">
        <img src="img/product/foil/football.jpg" alt="Фольгированные шары">
        <p class="title">Футбольный мяч</p>
        <p class="val">18" (46см) с гелием</p>
        <p class="price">Цена: <span>150 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="cartoonHeroes circle">
        <img src="img/product/foil/edinorogCircle.jpg" alt="Фольгированные шары">
        <p class="title">Единорог</p>
        <p class="val">18" (46см) с гелием</p>
        <p class="price">Цена: <span>150 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/edinorog.jpg" alt="Фольгированные шары">
        <p class="title">Голова единорога</p>
        <p class="val">101х79см с гелием</p>
        <p class="price">Цена: <span>340 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/edinorogGold.jpg" alt="Фольгированные шары">
        <p class="title">Голова золотого единорога</p>
        <p class="val">74х60 см с гелием</p>
        <p class="price">Цена: <span>350 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/edinorogMagic.jpg" alt="Фольгированные шары">
        <p class="title">Голова волшебного единорога</p>
        <p class="val">83х73 см с гелием</p>
        <p class="price">Цена: <span>380 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/edinorogFull.jpg" alt="Фольгированные шары">
        <p class="title">Едирнорог блестящий</p>
        <p class="val">105х85 см с гелием</p>
        <p class="price">Цена: <span>370 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes birthday">
        <img src="img/product/foil/pegasHB.jpg" alt="Фольгированные шары">
        <p class="title">Пегас с днем рождения</p>
        <p class="val">76х85 см с гелием</p>
        <p class="price">Цена: <span>450 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/edinorogFull2.jpg" alt="Фольгированные шары">
        <p class="title">Едирнорог</p>
        <p class="val">105х101 см с гелием</p>
        <p class="price">Цена: <span>350 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/poniLittlePinkyPai.jpg" alt="Фольгированные шары">
        <p class="title">Пони Пинки Пай</p>
        <p class="val">92х104 см с гелием</p>
        <p class="price">Цена: <span>350 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/dragon.jpg" alt="Фольгированные шары">
        <p class="title">Голова дракона</p>
        <p class="val">91х63 см с гелием</p>
        <p class="price">Цена: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="animal">
        <img src="img/product/foil/flamingo.jpg" alt="Фольгированные шары">
        <p class="title">Фламинго</p>
        <p class="val">130х75см с гелием</p>
        <p class="price">Цена: <span>280 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="animal">
        <img src="img/product/foil/baterflyPink.jpg" alt="Фольгированные шары">
        <p class="title">Бабочка малиновая</p>
        <p class="val">59х89 см с гелием</p>
        <p class="price">Цена: <span>150 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="animal">
        <img src="img/product/foil/baterflyBlue.jpg" alt="Фольгированные шары">
        <p class="title">Бабочка синяя</p>
        <p class="val">56x97 см с гелием</p>
        <p class="price">Цена: <span>150 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="animal">
        <img src="img/product/foil/baterflyOrange.jpg" alt="Фольгированные шары">
        <p class="title">Бабочка оранжевая</p>
        <p class="val">60х72 см с гелием</p>
        <p class="price">Цена: <span>300 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/starWarsDartWaider.jpg" alt="Фольгированные шары">
        <p class="title">Дарт Вейдер голова</p>
        <p class="val">55x55 см с гелием</p>
        <p class="price">Цена: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/minnieMouse.jpg" alt="Фольгированные шары">
        <p class="title">Минни маус</p>
        <p class="val">93х70см с гелием</p>
        <p class="price">Цена: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes other">
        <img src="img/product/foil/frameMinnieMouse.jpg" alt="Фольгированные шары">
        <p class="title">Фото Рамка Минни маус</p>
        <p class="val">66х68 см с гелием (или воздухом)</p>
        <p class="price">Цена: <span>450 (200) грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/mikkiMouse.jpg" alt="Фольгированные шары">
        <p class="title">Микки маус</p>
        <p class="val">93х70см с гелием</p>
        <p class="price">Цена: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/minionDave.jpg" alt="Фольгированные шары">
        <p class="title">Миньон Дэйв</p>
        <p class="val">76х57см с гелием</p>
        <p class="price">Цена: <span>370 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/minionStew.jpg" alt="Фольгированные шары">
        <p class="title">Миньон Стюарт</p>
        <p class="val">76х57см с гелием</p>
        <p class="price">Цена: <span>370 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="cartoonHeroes circle">
        <img src="img/product/foil/minions.jpg" alt="Фольгированные шары">
        <p class="title">Миньоны</p>
        <p class="val">18" (46см) с гелием</p>
        <p class="price">Цена: <span>160 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="cartoonHeroes circle">
        <img src="img/product/foil/minionsBlue.jpg" alt="Фольгированные шары">
        <p class="title">Миньоны</p>
        <p class="val">18" (46см) с гелием</p>
        <p class="price">Цена: <span>160 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/ladyBag.jpg" alt="Фольгированные шары">
        <p class="title">Леди Баг</p>
        <p class="val">85х76 см с гелием</p>
        <p class="price">Цена: <span>300 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/superCat.jpg" alt="Фольгированные шары">
        <p class="title">Супер Кот</p>
        <p class="val">89х56 см с гелием</p>
        <p class="price">Цена: <span>300 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/batman.jpg" alt="Фольгированные шары">
        <p class="title">Бэтмен</p>
        <p class="val">71х69 см с гелием</p>
        <p class="price">Цена: <span>300 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/batmanLogo.jpg" alt="Фольгированные шары">
        <p class="title">Эмблема Бэтмена</p>
        <p class="val">68х48 см с гелием</p>
        <p class="price">Цена: <span>390 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/superman.jpg" alt="Фольгированные шары">
        <p class="title">Супермен</p>
        <p class="val">58х86 см с гелием</p>
        <p class="price">Цена: <span>300 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/supermanLogo.jpg" alt="Фольгированные шары">
        <p class="title">Эмблема Супермена</p>
        <p class="val">66х50 см с гелием</p>
        <p class="price">Цена: <span>300 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/spiderManHead.jpg" alt="Фольгированные шары">
        <p class="title">Человек Паук голова</p>
        <p class="val">30х43 см с гелием</p>
        <p class="price">Цена: <span>280 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/spiderMan.jpg" alt="Фольгированные шары">
        <p class="title">Человек Паук</p>
        <p class="val">30х43 см с гелием</p>
        <p class="price">Цена: <span>370 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/jett.jpg" alt="Фольгированные шары">
        <p class="title">Супер Крылья Джетт</p>
        <p class="val">94х89 см с гелием</p>
        <p class="price">Цена: <span>300 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/transformersPrime.jpg" alt="Фольгированные шары">
        <p class="title">Трансформеры Оптимус Прайм</p>
        <p class="val">81х88 см с гелием</p>
        <p class="price">Цена: <span>350 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/transformersPrimeFM.jpg" alt="Фольгированные шары">
        <p class="title">Трансформеры Оптимус Прайм FM</p>
        <p class="val">74х50 см с гелием</p>
        <p class="price">Цена: <span>350 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/transformersBumbleBee.jpg" alt="Фольгированные шары">
        <p class="title">Трансформеры Бамблби</p>
        <p class="val">68х93 см с гелием</p>
        <p class="price">Цена: <span>350 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/transformersBumbleBeeFM.jpg" alt="Фольгированные шары">
        <p class="title">Трансформеры Бамблби FM</p>
        <p class="val">74х50 см с гелием</p>
        <p class="price">Цена: <span>350 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/carsRed.jpg" alt="Фольгированные шары">
        <p class="title">Тачки Молния Маккуин</p>
        <p class="val">76х43 см с гелием</p>
        <p class="price">Цена: <span>350 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="cartoonHeroes circle">
        <img src="img/product/foil/carsCircleBlue.jpg" alt="Фольгированные шары">
        <p class="title">Тачки</p>
        <p class="val">18" (46см) с гелием</p>
        <p class="price">Цена: <span>150 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/fixikiO.jpg" alt="Фольгированные шары">
        <p class="title">Фиксики Нолик</p>
        <p class="val">55х58 см с гелием</p>
        <p class="price">Цена: <span>300 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/fixikiSim.jpg" alt="Фольгированные шары">
        <p class="title">Фиксики Симка</p>
        <p class="val">50х65 см с гелием</p>
        <p class="price">Цена: <span>300 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="cartoonHeroes circle">
        <img src="img/product/foil/fixikiCircleGreen.jpg" alt="Фольгированные шары">
        <p class="title">Фиксики</p>
        <p class="val">18" (46см) с гелием</p>
        <p class="price">Цена: <span>130 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="cartoonHeroes heart">
        <img src="img/product/foil/helloKittyHeart.jpg" alt="Фольгированные шары">
        <p class="title">Hello Kitty Сердце</p>
        <p class="val">18" (46см) с гелием</p>
        <p class="price">Цена: <span>150 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/angryBirdsPig.jpg" alt="Фольгированные шары">
        <p class="title">Angry Birds Король Свиней</p>
        <p class="val">70х75 см с гелием</p>
        <p class="price">Цена: <span>300 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/angryBirdsRed.jpg" alt="Фольгированные шары">
        <p class="title">Angry Birds Красная Птица</p>
        <p class="val">С гелием</p>
        <p class="price">Цена: <span>300 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="cartoonHeroes">
        <img src="img/product/foil/angryBirdsTeam.jpg" alt="Фольгированные шары">
        <p class="title">Angry Birds Команда</p>
        <p class="val">26" (66см) с гелием</p>
        <p class="price">Цена: <span>260 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/smesharikiKrosh.jpg" alt="Фольгированные шары">
        <p class="title">Смешарики Крош</p>
        <p class="val">72х105 см с гелием</p>
        <p class="price">Цена: <span>300 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/smesharikiNusha.jpg" alt="Фольгированные шары">
        <p class="title">Смешарики Нюша</p>
        <p class="val">74х82 см с гелием</p>
        <p class="price">Цена: <span>300 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="cartoonHeroes circle">
        <img src="img/product/foil/smeshariki.jpg" alt="Фольгированные шары">
        <p class="title">Смешарики</p>
        <p class="val">18" (46см) с гелием</p>
        <p class="price">Цена: <span>165 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/frankensteinGreen.jpg" alt="Фольгированные шары">
        <p class="title">Франкенштейн голова</p>
        <p class="val">43х63 см с гелием</p>
        <p class="price">Цена: <span>300 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="dino">
        <img src="img/product/foil/dinoRaptor.jpg" alt="Фольгированные шары">
        <p class="title">Динозавр Раптор</p>
        <p class="val">97 см с гелием</p>
        <p class="price">Цена: <span>500 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="dino">
        <img src="img/product/foil/dinoTriceratops.jpg" alt="Фольгированные шары">
        <p class="title">Динозавр Трицератопс</p>
        <p class="val">106х60 см с гелием</p>
        <p class="price">Цена: <span>300 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="dino">
        <img src="img/product/foil/dino_apatozaur.jpg" alt="Фольгированные шары">
        <p class="title">Динозавр Апатозавр</p>
        <p class="val">106х60 см с гелием</p>
        <p class="price">Цена: <span>300 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="dino">
        <img src="img/product/foil/dinoTRexQualatex.jpg" alt="Фольгированные шары">
        <p class="title">Динозавр Тиранозавр Qualatex</p>
        <p class="val">107 см с гелием</p>
        <p class="price">Цена: <span>450 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="dino">
        <img src="img/product/foil/dinoTRexOrange.jpg" alt="Фольгированные шары">
        <p class="title">Динозавр Тиранозавр оранжевый</p>
        <p class="val">89х91 см с гелием</p>
        <p class="price">Цена: <span>450 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="dino">
        <img src="img/product/foil/dinoTRexFlexmetal.jpg" alt="Фольгированные шары">
        <p class="title">Динозавр Тиранозавр FM</p>
        <p class="val">84х82 см с гелием</p>
        <p class="price">Цена: <span>300 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="dino">
        <img src="img/product/foil/dinoSkeletTRex.jpg" alt="Фольгированные шары">
        <p class="title">Динозавр Скелет Тиранозавра</p>
        <p class="val">89х57 см с гелием</p>
        <p class="price">Цена: <span>400 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="circle dino">
        <img src="img/product/foil/dinoRaptorCircle.jpg" alt="Фольгированные шары">
        <p class="title">Динозавр Раптор</p>
        <p class="val">18" (46см) с гелием</p>
        <p class="price">Цена: <span>150 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/sheepSean.jpg" alt="Фольгированные шары">
        <p class="title">Барашек Шон</p>
        <p class="val">63х60 см с гелием</p>
        <p class="price">Цена: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/mashaVelo.jpg" alt="Фольгированные шары">
        <p class="title">Маша на велосипеде</p>
        <p class="val">100х60 см с гелием</p>
        <p class="price">Цена: <span>350 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/mashaAndBear.jpg" alt="Фольгированные шары">
        <p class="title">Маша и Медведь</p>
        <p class="val">80х93 см с гелием</p>
        <p class="price">Цена: <span>350 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/masha.jpg" alt="Фольгированные шары">
        <p class="title">Маша</p>
        <p class="val">67х105 см с гелием</p>
        <p class="price">Цена: <span>350 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="cartoonHeroes circle">
        <img src="img/product/foil/mashaCircle.jpg" alt="Фольгированные шары">
        <p class="title">Маша</p>
        <p class="val">18" (46см) с гелием</p>
        <p class="price">Цена: <span>150 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="cartoonHeroes circle">
        <img src="img/product/foil/peppaCircle.jpg" alt="Фольгированные шары">
        <p class="title">Свинка Пеппа</p>
        <p class="val">18" (46см) с гелием</p>
        <p class="price">Цена: <span>170 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/peppaCake.jpg" alt="Фольгированные шары">
        <p class="title">Свинка Пеппа с тортом</p>
        <p class="val">76х83 см с гелием</p>
        <p class="price">Цена: <span>350 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/ninzjaGreen.jpg" alt="Фольгированные шары">
        <p class="title">Ниндзя зелёный</p>
        <p class="val">75х83 см с гелием</p>
        <p class="price">Цена: <span>300 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/feja.jpg" alt="Фольгированные шары">
        <p class="title">Фея бабочка</p>
        <p class="val">70х97 см с гелием</p>
        <p class="price">Цена: <span>280 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/rusalka.jpg" alt="Фольгированные шары">
        <p class="title">Русалка</p>
        <p class="val">82х74 см с гелием</p>
        <p class="price">Цена: <span>300 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/princessPink.jpg" alt="Фольгированные шары">
        <p class="title">Принцесса</p>
        <p class="val">99х69 см с гелием</p>
        <p class="price">Цена: <span>300 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/ninjaTurtlesRaf.jpg" alt="Фольгированные шары">
        <p class="title">Ниндзя черепашки Рафаэль</p>
        <p class="val">73х86 см с гелием</p>
        <p class="price">Цена: <span>380 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/alett.jpg" alt="Фольгированные шары">
        <p class="title">Герои в масках Алетт</p>
        <p class="val">83х78 см с гелием</p>
        <p class="price">Цена: <span>350 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/catboy.jpg" alt="Фольгированные шары">
        <p class="title">Герои в масках Кэтбой</p>
        <p class="val">83х78 см с гелием</p>
        <p class="price">Цена: <span>350 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/geko.jpg" alt="Фольгированные шары">
        <p class="title">Герои в масках Гекко</p>
        <p class="val">83х78 см с гелием</p>
        <p class="price">Цена: <span>350 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="cartoonHeroes circle">
        <img src="img/product/foil/pjMasks.jpg" alt="Фольгированные шары">
        <p class="title">Герои в масках</p>
        <p class="val">18" (46см) с гелием</p>
        <p class="price">Цена: <span>150 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/pawPatrolCheys.jpg" alt="Фольгированные шары">
        <p class="title">Щенячий патруль Гонщик Чейз</p>
        <p class="val">58х78см с гелием</p>
        <p class="price">Цена: <span>350 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/pawPatrolSky.jpeg" alt="Фольгированные шары">
        <p class="title">Щенячий патруль Скай</p>
        <p class="val">84 см с гелием</p>
        <p class="price">Цена: <span>280 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/pawPatrolStrongy.jpeg" alt="Фольгированные шары">
        <p class="title">Щенячий патруль Крепыш</p>
        <p class="val">87 см с гелием</p>
        <p class="price">Цена: <span>280 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/pawPatrol_ChaseEmb.jpg" alt="Фольгированные шары">
        <p class="title">Щенячий патруль Эмблема Чейз</p>
        <p class="val">63х68 см с гелием</p>
        <p class="price">Цена: <span>470 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/pawPatrol_MarshallEmb.jpg" alt="Фольгированные шары">
        <p class="title">Щенячий патруль Эмблема Маршал</p>
        <p class="val">63х68 см с гелием</p>
        <p class="price">Цена: <span>470 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/furbiViolet.jpeg" alt="Фольгированные шары">
        <p class="title">Фарби фиолетовый</p>
        <p class="val">55х59 см с гелием</p>
        <p class="price">Цена: <span>280 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/monsterIncSally.jpg" alt="Фольгированные шары">
        <p class="title">Салли из Корпорация Монстров</p>
        <p class="val">С гелием</p>
        <p class="price">Цена: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="animal">
        <img src="img/product/foil/panda.jpg" alt="Фольгированные шары">
        <p class="title">Панда</p>
        <p class="val">56х83 см с гелием</p>
        <p class="price">Цена: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="animal">
        <img src="img/product/foil/pandaHead.jpg" alt="Фольгированные шары">
        <p class="title">Голова панды</p>
        <p class="val">57х66 см с гелием</p>
        <p class="price">Цена: <span>300 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="animal">
        <img src="img/product/foil/tiger.jpeg" alt="Фольгированные шары">
        <p class="title">Тигр</p>
        <p class="val">76х90 см с гелием</p>
        <p class="price">Цена: <span>280 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="animal">
        <img src="img/product/foil/leopard.jpg" alt="Фольгированные шары">
        <p class="title">Леопард</p>
        <p class="val">76х90 см с гелием</p>
        <p class="price">Цена: <span>280 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="animal">
        <img src="img/product/foil/dogDalmatin.jpg" alt="Фольгированные шары">
        <p class="title">Собака Далматин</p>
        <p class="val">82х90 см с гелием</p>
        <p class="price">Цена: <span>290 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="animal">
        <img src="img/product/foil/hourseBrown.jpg" alt="Фольгированные шары">
        <p class="title">Конь коричневый</p>
        <p class="val">75х107 см с гелием</p>
        <p class="price">Цена: <span>280 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="animal">
        <img src="img/product/foil/zebra.jpg" alt="Фольгированные шары">
        <p class="title">Зебра</p>
        <p class="val">75х107 см с гелием</p>
        <p class="price">Цена: <span>280 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="animal">
        <img src="img/product/foil/hourseCircus.jpg" alt="Фольгированные шары">
        <p class="title">Лошадь цирковая</p>
        <p class="val">90х98 см с гелием</p>
        <p class="price">Цена: <span>280 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="animal">
        <img src="img/product/foil/birdAra.jpg" alt="Фольгированные шары">
        <p class="title">Папугай</p>
        <p class="val">43х89 см с гелием</p>
        <p class="price">Цена: <span>230 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="animal">
        <img src="img/product/foil/owl.jpg" alt="Фольгированные шары">
        <p class="title">Сова</p>
        <p class="val">78х98 см с гелием</p>
        <p class="price">Цена: <span>230 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="animal">
        <img src="img/product/foil/tucanHappy.jpg" alt="Фольгированные шары">
        <p class="title">Тукан</p>
        <p class="val">75х58 см с гелием</p>
        <p class="price">Цена: <span>230 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="animal">
        <img src="img/product/foil/swan.jpg" alt="Фольгированные шары">
        <p class="title">Лебедь</p>
        <p class="val">72х88 см с гелием</p>
        <p class="price">Цена: <span>230 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="animal">
        <img src="img/product/foil/lion.jpg" alt="Фольгированные шары">
        <p class="title">Лев</p>
        <p class="val">80х83 см с гелием</p>
        <p class="price">Цена: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="animal">
        <img src="img/product/foil/giraf.jpg" alt="Фольгированные шары">
        <p class="title">Жираф</p>
        <p class="val">120х66 см с гелием</p>
        <p class="price">Цена: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="animal">
        <img src="img/product/foil/pinguin.jpg" alt="Фольгированные шары">
        <p class="title">Пингвин</p>
        <p class="val">80x71 см с гелием</p>
        <p class="price">Цена: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="animal">
        <img src="img/product/foil/shark.jpeg" alt="Фольгированные шары">
        <p class="title">Акула синяя</p>
        <p class="val">75х105 см с гелием</p>
        <p class="price">Цена: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="animal">
        <img src="img/product/foil/dolphin.jpeg" alt="Фольгированные шары">
        <p class="title">Дельфин синий</p>
        <p class="val">56х95 см с гелием</p>
        <p class="price">Цена: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="other">
        <img src="img/product/foil/shipPirateBlack.jpg" alt="Фольгированные шары">
        <p class="title">Пиратский Корабль</p>
        <p class="val">78х105 см с гелием</p>
        <p class="price">Цена: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="other">
        <img src="img/product/foil/seaAncor.jpg" alt="Фольгированные шары">
        <p class="title">Морской Якорь</p>
        <p class="val">53х76 см с гелием</p>
        <p class="price">Цена: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil circle picture" data-filter="circle other">
        <img src="img/product/foil/seaSkiper.jpg" alt="Фольгированные шары">
        <p class="title">Морской Штурвал</p>
        <p class="val">18" (46см) с гелием</p>
        <p class="price">Цена: <span>150 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="vehicle">
        <img src="img/product/foil/bikeOrange.jpg" alt="Фольгированные шары">
        <p class="title">Мотоцикл оранжевый</p>
        <p class="val">57х115 см с гелием</p>
        <p class="price">Цена: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="vehicle">
        <img src="img/product/foil/bikeBlue.jpg" alt="Фольгированные шары">
        <p class="title">Мотоцикл синий</p>
        <p class="val">57х115 см с гелием</p>
        <p class="price">Цена: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="vehicle">
        <img src="img/product/foil/bikeSport.jpg" alt="Фольгированные шары">
        <p class="title">Мотоцикл спортивный</p>
        <p class="val">70х84 см с гелием</p>
        <p class="price">Цена: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="vehicle">
        <img src="img/product/foil/train.jpg" alt="Фольгированные шары">
        <p class="title">Паровоз</p>
        <p class="val">70х80 см с гелием</p>
        <p class="price">Цена: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="vehicle">
        <img src="img/product/foil/carPolice.jpg" alt="Фольгированные шары">
        <p class="title">Полицейская Машина</p>
        <p class="val">43х80 см с гелием</p>
        <p class="price">Цена: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="vehicle">
        <img src="img/product/foil/hotCarsRed.jpg" alt="Фольгированные шары">
        <p class="title">Гоночная машина</p>
        <p class="val">43х79 см с гелием</p>
        <p class="price">Цена: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="vehicle">
        <img src="img/product/foil/hammerPolice.jpg" alt="Фольгированные шары">
        <p class="title">Полицейский Внедорожник</p>
        <p class="val">85х46 см с гелием</p>
        <p class="price">Цена: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="vehicle">
        <img src="img/product/foil/carFire.jpg" alt="Фольгированные шары">
        <p class="title">Пожарная Машина</p>
        <p class="val">48х79 см с гелием</p>
        <p class="price">Цена: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="vehicle">
        <img src="img/product/foil/carFireFM.jpg" alt="Фольгированные шары">
        <p class="title">Пожарная Машина</p>
        <p class="val">79х80 см с гелием</p>
        <p class="price">Цена: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="vehicle">
        <img src="img/product/foil/monsterCarBlue.jpg" alt="Фольгированные шары">
        <p class="title">Внедорожник Монстеркар Синий</p>
        <p class="val">68х96 см с гелием</p>
        <p class="price">Цена: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="vehicle">
        <img src="img/product/foil/monsterCarGreen.jpg" alt="Фольгированные шары">
        <p class="title">Внедорожник Монстеркар Зелёный</p>
        <p class="val">68х96 см с гелием</p>
        <p class="price">Цена: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="vehicle">
        <img src="img/product/foil/monsterCarRed.jpg" alt="Фольгированные шары">
        <p class="title">Внедорожник Монстеркар Красный</p>
        <p class="val">68х96 см с гелием</p>
        <p class="price">Цена: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="vehicle">
        <img src="img/product/foil/helicopterCamuf.jpeg" alt="Фольгированные шары">
        <p class="title">Вертолёт камуфляжный</p>
        <p class="val">57х96 см с гелием</p>
        <p class="price">Цена: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="vehicle">
        <img src="img/product/foil/helicopterPolice.jpg" alt="Фольгированные шары">
        <p class="title">Вертолёт полицейский</p>
        <p class="val">57х96 см с гелием</p>
        <p class="price">Цена: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="vehicle">
        <img src="img/product/foil/aircraftDestroyer.jpg" alt="Фольгированные шары">
        <p class="title">Самолёт Истребитель</p>
        <p class="val">99х96 см с гелием</p>
        <p class="price">Цена: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="vehicle">
        <img src="img/product/foil/airplaneBlue.jpg" alt="Фольгированные шары">
        <p class="title">Самолёт</p>
        <p class="val">52х100 см с гелием</p>
        <p class="price">Цена: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/airplaneMultOrange.jpg" alt="Фольгированные шары">
        <p class="title">Летачки Самолетик</p>
        <p class="val">53х110 см с гелием</p>
        <p class="price">Цена: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="vehicle">
        <img src="img/product/foil/rocket.jpg" alt="Фольгированные шары">
        <p class="title">Ракета</p>
        <p class="val">53х73 см с гелием</p>
        <p class="price">Цена: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="other">
        <img src="img/product/foil/cosmonaut.jpg" alt="Фольгированные шары">
        <p class="title">Космонавт</p>
        <p class="val">94 см с гелием</p>
        <p class="price">Цена: <span>390 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="other">
        <img src="img/product/foil/cosmonaut2.jpg" alt="Фольгированные шары">
        <p class="title">Космонавт</p>
        <p class="val">100x80 см с гелием</p>
        <p class="price">Цена: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="vehicle">
        <img src="img/product/foil/tankGreenCamuf.jpg" alt="Фольгированные шары">
        <p class="title">Танк зелёный</p>
        <p class="val">65х80 см с гелием</p>
        <p class="price">Цена: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="other">
        <img src="img/product/foil/ananas.jpg" alt="Фольгированные шары">
        <p class="title">Ананас</p>
        <p class="val">43х78см с гелием</p>
        <p class="price">Цена: <span>300 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="birthday">
        <img src="img/product/foil/keksHB.jpg" alt="Фольгированные шары">
        <p class="title">Кекс с вишенкой с днём рождения</p>
        <p class="val">51х74 см с гелием</p>
        <p class="price">Цена: <span>430 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="birthday">
        <img src="img/product/foil/hb_keks.jpg" alt="Фольгированные шары">
        <p class="title">Кекс со свечей с днём рождения</p>
        <p class="val">59х50 см с гелием</p>
        <p class="price">Цена: <span>150 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="birthday">
        <img src="img/product/foil/boxHB.jpg" alt="Фольгированные шары">
        <p class="title">Подарок с днём рождения</p>
        <p class="val">69 см с гелием</p>
        <p class="price">Цена: <span>450 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="other">
        <img src="img/product/foil/ponchik.jpg" alt="Фольгированные шары">
        <p class="title">Пончик</p>
        <p class="val">18" (46см) с гелием</p>
        <p class="price">Цена: <span>230 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="other">
        <img src="img/product/foil/ponchikUkus.jpg" alt="Фольгированные шары">
        <p class="title">Пончик надкусанный</p>
        <p class="val">66х69 см с гелием</p>
        <p class="price">Цена: <span>470 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="birthday">
        <img src="img/product/foil/cakeHB.jpg" alt="Фольгированные шары">
        <p class="title">Торт с днём рождения</p>
        <p class="val">71х81 см с гелием</p>
        <p class="price">Цена: <span>460 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="birthday">
        <img src="img/product/foil/shipHB.jpg" alt="Фольгированные шары">
        <p class="title">Парусник с днём рождения</p>
        <p class="val">73х59 см с гелием</p>
        <p class="price">Цена: <span>450 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure picture" data-filter="star birthday">
        <img src="img/product/foil/starHB_big.jpg" alt="Фольгированные шары">
        <p class="title">Звёзда С днем рождения большая</p>
        <p class="val">81х81 см с гелием</p>
        <p class="price">Цена: <span>550 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="other">
        <img src="img/product/foil/shitSmile.jpg" alt="Фольгированные шары">
        <p class="title">Какашка</p>
        <p class="val">63х60 см гелием</p>
        <p class="price">Цена: <span>360 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="other">
        <img src="img/product/foil/shitColor.jpg" alt="Фольгированные шары">
        <p class="title">Какашка Радужная</p>
        <p class="val">63х60 см гелием</p>
        <p class="price">Цена: <span>350 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="other">
        <img src="img/product/foil/popcorn.jpg" alt="Фольгированные шары">
        <p class="title">Попкорн</p>
        <p class="val">70х48 см с гелием</p>
        <p class="price">Цена: <span>420 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="circle newborn">
        <img src="img/product/foil/girlORboy.jpg" alt="Фольгированные шары">
        <p class="title">Girl or Boy?</p>
        <p class="val">18" (46см) с гелием</p>
        <p class="price">Цена: <span>150 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="circle newborn">
        <img src="img/product/foil/heORshe.jpg" alt="Фольгированные шары">
        <p class="title">He OR She?</p>
        <p class="val">18" (46см) с гелием</p>
        <p class="price">Цена: <span>150 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="">
        <img src="img/product/foil/sun.jpeg" alt="Фольгированные шары">
        <p class="title">Солнце</p>
        <p class="val">С гелием</p>
        <p class="price">Цена: <span>390 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="circle other">
        <img src="img/product/foil/future_MRS.jpg" alt="Фольгированные шары">
        <p class="title">Девичник</p>
        <p class="val">18" (46см) с гелием</p>
        <p class="price">Цена: <span>150 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="heart other">
        <img src="img/product/foil/MR_MRS.jpg" alt="Фольгированные шары">
        <p class="title">Свадьба</p>
        <p class="val">18" (46см) с гелием</p>
        <p class="price">Цена: <span>160 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="circle">
        <img src="img/product/foil/konfeta.jpg" alt="Фольгированные шары">
        <p class="title">Конфета</p>
        <p class="val">18" (46см) с гелием</p>
        <p class="price">Цена: <span>130 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="circle other">
        <img src="img/product/foil/Halloween_1.jpg" alt="Фольгированные шары">
        <p class="title">Halloween</p>
        <p class="val">18" (46см) с гелием</p>
        <p class="price">Цена: <span>140 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="circle birthday">
        <img src="img/product/foil/hb_1.jpg" alt="Фольгированные шары">
        <p class="title">С днем рождения</p>
        <p class="val">18" (46см) с гелием</p>
        <p class="price">Цена: <span>150 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="circle birthday">
        <img src="img/product/foil/hb_pirates.jpg" alt="Фольгированные шары">
        <p class="title">Пираты С днем рождения</p>
        <p class="val">18" (46см) с гелием</p>
        <p class="price">Цена: <span>150 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="circle birthday">
        <img src="img/product/foil/hb_9.jpg" alt="Фольгированные шары">
        <p class="title">С днем рождения</p>
        <p class="val">18" (46см) с гелием</p>
        <p class="price">Цена: <span>150 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="circle birthday">
        <img src="img/product/foil/hb_Bro.jpg" alt="Фольгированные шары">
        <p class="title">С ДР БРО</p>
        <p class="val">18" (46см) с гелием</p>
        <p class="price">Цена: <span>150 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="circle birthday">
        <img src="img/product/foil/hb_draw.jpg" alt="Фольгированные шары">
        <p class="title">С днем рождения ЗАПОЛНИ САМ</p>
        <p class="val">18" (46см) с гелием</p>
        <p class="price">Цена: <span>150 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="circle birthday">
        <img src="img/product/foil/hb_2.jpg" alt="Фольгированные шары">
        <p class="title">С днем рождения</p>
        <p class="val">18" (46см) с гелием</p>
        <p class="price">Цена: <span>150 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="heart birthday">
        <img src="img/product/foil/heartHB.jpg" alt="Фольгированные шары">
        <p class="title">С днем рождения</p>
        <p class="val">18" (46см) с гелием</p>
        <p class="price">Цена: <span>150 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="circle birthday">
        <img src="img/product/foil/hb_3.jpg" alt="Фольгированные шары">
        <p class="title">С днем рождения</p>
        <p class="val">18" (46см) с гелием</p>
        <p class="price">Цена: <span>150 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="circle birthday">
        <img src="img/product/foil/hb_4.jpg" alt="Фольгированные шары">
        <p class="title">С днем рождения</p>
        <p class="val">18" (46см) с гелием</p>
        <p class="price">Цена: <span>150 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="birthday">
        <img src="img/product/foil/hb_princess.jpg" alt="Фольгированные шары">
        <p class="title">С днем рождения принцесса</p>
        <p class="val">18" (46см) с гелием</p>
        <p class="price">Цена: <span>150 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="circle birthday">
        <img src="img/product/foil/hb_5.jpg" alt="Фольгированные шары">
        <p class="title">С днем рождения</p>
        <p class="val">18" (46см) с гелием</p>
        <p class="price">Цена: <span>150 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="birthday">
        <img src="img/product/foil/hb_romb.jpg" alt="Фольгированные шары">
        <p class="title">Ромб С днем рождения</p>
        <p class="val">18" (46см) с гелием</p>
        <p class="price">Цена: <span>170 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="circle birthday">
        <img src="img/product/foil/hb.jpg" alt="Фольгированные шары">
        <p class="title">С днем рождения</p>
        <p class="val">18" (46см) с гелием</p>
        <p class="price">Цена: <span>150 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="circle birthday">
        <img src="img/product/foil/hb_6.jpg" alt="Фольгированные шары">
        <p class="title">С днем рождения</p>
        <p class="val">18" (46см) с гелием</p>
        <p class="price">Цена: <span>150 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="birthday">
        <img src="img/product/foil/hb_wb.jpg" alt="Фольгированные шары">
        <p class="title">Квадрат С днем рождения</p>
        <p class="val">18" (46см) с гелием</p>
        <p class="price">Цена: <span>160 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="circle">
        <img src="img/product/foil/redGoroh.jpg" alt="Фольгированные шары">
        <p class="title">Круги в горошек</p>
        <p class="val">18" (46см) с гелием</p>
        <p class="price">Цена: <span>140 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="circle other">
        <img src="img/product/foil/smileFoil.jpg" alt="Фольгированные шары">
        <p class="title">Смайл</p>
        <p class="val">18" (46см) с гелием</p>
        <p class="price">Цена: <span>140 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="other">
        <img src="img/product/foil/like.jpg" alt="Фольгированные шары">
        <p class="title">Like</p>
        <p class="val">66х72 см с гелием</p>
        <p class="price">Цена: <span>480 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="other">
        <img src="img/product/foil/mustache.jpg" alt="Фольгированные шары">
        <p class="title">Усы</p>
        <p class="val">66х72 см с гелием</p>
        <p class="price">Цена: <span>280 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="other">
        <img src="img/product/foil/almaz3D.jpg" alt="Фольгированные шары">
        <p class="title">Алмаз</p>
        <p class="val">18" (46см) с гелием</p>
        <p class="price">Цена: <span>420 грн/шт</span></p>
    </div>
</article>
<?php include "includes/footer.html" ?>
</body>
</html>