<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet"/>
    <link rel="icon" href="img/favicon.png" sizes="any">
    <script src="js/jquery-1.7.2.min.js" defer></script>
    <script src="js/js.js" defer></script>
    <script src="js/filter.js" defer></script>
    <meta name="description" content="Каталог фольгованих кульок">
    <meta name="keywords" content="каталог фольгированных шаров, каталог фольгованих кульокб фольговані кулі">
    <title>Фольговані кульки</title>

</head>
<body>
<?php include "includes/header.html" ?>
<nav>
    <ul>
        <li><a href="index.php"><img src="img/nav/home.png"  alt=""><span>Головна</span></a></li>
        <li class="active"><a href="products.php"><img src="img/nav/balloonsColor.png"  alt=""><span>Каталог</span></a></li>
        <li><a href="services.php"><img src="img/nav/services.png"  alt=""><span>Послуги</span></a></li>
        <li><a href="info.php"><img src="img/nav/info.png"  alt=""><span>Інфо</span></a></li>
    </ul>
</nav>
<div class="breadcrumbs">
    <ul>
        <li><a href="index.php" rel="nofollow">Головна</a></li>
        <li>&#9658;</li>
        <li><a href="products.php" rel="nofollow">Каталог кульок</a></li>
        <li>&#9658;</li>
        <li><a>Фольговані кульки</a></li>
    </ul>
</div>
<h1>Фольговані кульки</h1>

<fieldset class="filter">
    <legend>Фільтр товару</legend> 

    <fieldset>
        <legend>Форма</legend>
        <label><input class="checkList" type="checkbox" id="circle">Круглі</label>
        <label><input class="checkList" type="checkbox" id="sphere">Сфери</label>
        <label><input class="checkList" type="checkbox" id="heart">Серця</label>
        <label><input class="checkList" type="checkbox" id="star">Зірки</label>
        <label><input class="checkList" type="checkbox" id="numbsLetters">Цифри, літери, слова</label>
        <label><input class="checkList" type="checkbox" id="alcohol">Бокали, Пляшки, Алкоголь</label>
        <label><input class="checkList" type="checkbox" id="animal">Звірі</label>
        <label><input class="checkList" type="checkbox" id="dino">Динозаври</label>
        <label><input class="checkList" type="checkbox" id="newborn">Народження дитини</label>
        <label><input class="checkList" type="checkbox" id="birthday">День народження</label>
        <label><input class="checkList" type="checkbox" id="cartoonHeroes">Персонажі мультфільмів </label>
        <label><input class="checkList" type="checkbox" id="vehicle">Техніка, машини, літаки, кораблі</label>
        <label><input class="checkList" type="checkbox" id="other">Інше</label>

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
        <legend>Застосувати фільтри</legend>
        <label title="Застосовує обрані фільтри"><input type="button" value="Застосувати фільтри" id="filterOn"></label>
        <label title="Відмінити всі фільтры"><input type="button" value="Очистити фільтр" id="filterClear"></label>
    </fieldset>
</fieldset>
<article class="catalog">
   <div class="catalog-item foil big figure" data-filter="heart">
        <img src="img/product/foil/hearts.jpg" alt="Фольговані кулі">
        <p class="title">Серця</p>
        <p class="val">18" (46см) з гелієм</p>
        <p class="price">Ціна: <span>130 грн/шт</span></p>
    </div>

    <div class="catalog-item foil big figure" data-filter="star">
        <img src="img/product/foil/stars.jpg" alt="Фольговані кулі">
        <p class="title">Зірки</p>
        <p class="val">18" (46см) з гелієм</p>
        <p class="price">Ціна: <span>130 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle" data-filter="circle">
        <img src="img/product/foil/krug.png" alt="Фольговані кулі">
        <p class="title">Коло</p>
        <p class="val">18" (46см) з гелієм</p>
        <p class="price">Ціна: <span>130 грн/шт</span></p>
    </div>
    <div class="catalog-item foil middle figure" data-filter="sphere">
        <img src="img/product/foil/sphare3D.jpg" alt="Фольговані кулі">
        <p class="title">Сфера</p>
        <p class="val">16" (41см) з гелієм</p>
        <p class="price">Ціна: <span>480 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure picture" data-filter="star birthday">
        <img src="img/product/foil/starHB.jpg" alt="Фольговані кулі">
        <p class="title">Зірка з днем народження</p>
        <p class="val">18" (46см) з гелієм</p>
        <p class="price">Ціна: <span>150 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="star">
        <img src="img/product/foil/starsSatin.jpg" alt="Фольговані кулі">
        <p class="title">Зірки сатин</p>
        <p class="val">18" (46см) з гелієм</p>
        <p class="price">Ціна: <span>130 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="star">
        <img src="img/product/foil/starBig.jpg" alt="Фольговані кулі">
        <p class="title">Зірка гігант</p>
        <p class="val">32" (81см) з гелієм</p>
        <p class="price">Ціна: <span>600 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="other">
        <img src="img/product/foil/moons.jpg" alt="Фольговані кулі">
        <p class="title">Місяць</p>
        <p class="val">17" (43см) з гелієм</p>
        <p class="price">Ціна: <span>130грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="star">
        <img src="img/product/foil/starRainbow.jpg" alt="Фольговані кулі">
        <p class="title">Зірки з блиском</p>
        <p class="val">19" (48см) з гелієм</p>
        <p class="price">Ціна: <span>180 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure picture" data-filter="heart">
        <img src="img/product/foil/heartUkr.jpg" alt="Фольговані кулі">
        <p class="title">Серця з символікою</p>
        <p class="val">18" (46см) з гелієм</p>
        <p class="price">Ціна: <span>150 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="numbsLetters">
        <img src="img/product/foil/NumbsFoil.jpg" alt="Фольговані кулі">
        <p class="title">Цифри</p>
        <p class="val">40" (1 м) з гелієм</p>
        <p class="price">Ціна: <span>400 грн/шт</span></p>
    </div>
    <div class="catalog-item foil middle figure" data-filter="numbsLetters">
        <img src="img/product/foil/LettersFoil.jpg" alt="Фольговані кулі">
        <p class="title">Літери</p>
        <p class="val">14" (36см) з повітрям</p>
        <p class="price">Ціна: <span>50 грн/шт</span></p>
    </div>
    <div class="catalog-item foil middle figure" data-filter="numbsLetters">
        <img src="img/product/foil/LettersFoil40.jpg" alt="Фольговані кулі">
        <p class="title">Літери</p>
        <p class="val">40" (1 м) з повітрям</p>
        <p class="price">Ціна: <span>160 грн/шт</span></p>
    </div>
    <div class="catalog-item foil middle figure" data-filter="numbsLetters birthday">
        <img src="img/product/foil/lettersHBsilver.jpg" alt="Фольговані кулі">
        <p class="title">Літери Happy Birthday</p>
        <p class="val">Happy-76х25см, Birth-66х22см, Day-45х22см з повітрям</p>
        <p class="price">Ціна: <span>300 грн/шт</span></p>
    </div>
    <div class="catalog-item foil middle figure" data-filter="numbsLetters birthday">
        <img src="img/product/foil/lettersHBgold.jpg" alt="Фольговані кулі">
        <p class="title">Літери Happy B-day</p>
        <p class="val">76х48см з повітрям</p>
        <p class="price">Ціна: <span>300 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure picture" data-filter="numbsLetters animal">
        <img src="img/product/foil/NumbsFoilZoo.jpg" alt="Фольговані кулі">
        <p class="title">Цифри-звірі</p>
        <p class="val">40" (1 м) з гелієм</p>
        <p class="price">Ціна: <span>450 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure picture" data-filter="newborn">
        <img src="img/product/foil/footBoyGirl.jpg" alt="Фольговані кулі">
        <p class="title">Стопа</p>
        <p class="val">65х93см з гелієм</p>
        <p class="price">Ціна: <span>340 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure picture" data-filter="newborn">
        <img src="img/product/foil/littleBoyGirl.jpg" alt="Фольговані кулі">
        <p class="title">Немовля</p>
        <p class="val">47х70см з гелієм</p>
        <p class="price">Ціна: <span>340 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure picture" data-filter="newborn">
        <img src="img/product/foil/kolaskaBoy.jpg" alt="Фольговані кулі">
        <p class="title">Коляска для хлопчика</p>
        <p class="val">73х95см з гелієм</p>
        <p class="price">Ціна: <span>340 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure picture" data-filter="newborn">
        <img src="img/product/foil/kolaskaGirl.jpg" alt="Фольговані кулі">
        <p class="title">Коляска для дівчинки</p>
        <p class="val">73х95см з гелієм</p>
        <p class="price">Ціна: <span>340 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure picture" data-filter="newborn">
        <img src="img/product/foil/babyBoyHead.jpg" alt="Фольговані кулі">
        <p class="title">Немовля хлопчик голова</p>
        <p class="val">40х45 см з гелієм</p>
        <p class="price">Ціна: <span>340 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure picture" data-filter="newborn">
        <img src="img/product/foil/babyGirlHead.jpg" alt="Фольговані кулі">
        <p class="title">Немовля дівчинка голова</p>
        <p class="val">40х45 см з гелієм</p>
        <p class="price">Ціна: <span>340 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure picture" data-filter="newborn">
        <img src="img/product/foil/lelekaBoy.jpg" alt="Фольговані кулі">
        <p class="title">Лелека для хлопчика</p>
        <p class="val">82х82см з гелієм</p>
        <p class="price">Ціна: <span>340 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure picture" data-filter="newborn">
        <img src="img/product/foil/lelekaGirl.jpg" alt="Фольговані кулі">
        <p class="title">лелека для дівчинки</p>
        <p class="val">82х82см з гелієм</p>
        <p class="price">Ціна: <span>340грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure picture" data-filter="newborn">
        <img src="img/product/foil/babyGirlBody.jpg" alt="Фольговані кулі">
        <p class="title">Бодік дівчинка</p>
        <p class="val">55х60см з гелієм</p>
        <p class="price">Ціна: <span>340 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure picture" data-filter="newborn">
        <img src="img/product/foil/babyBoyBody.jpg" alt="Фольговані кулі">
        <p class="title">Бодік хлопчик</p>
        <p class="val">55х60см з гелієм</p>
        <p class="price">Ціна: <span>340 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure picture" data-filter="newborn heart">
        <img src="img/product/foil/babyGirlHeart.jpg" alt="Фольговані кулі">
        <p class="title">Серце дівчинка</p>
        <p class="val">18" (46см) з гелієм</p>
        <p class="price">Ціна: <span>160 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure picture" data-filter="newborn heart">
        <img src="img/product/foil/babyBoyHeart.jpg" alt="Фольговані кулі">
        <p class="title">Серце хлопчик</p>
        <p class="val">18" (46см) з гелієм</p>
        <p class="price">Ціна: <span>160 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure picture" data-filter="newborn">
        <img src="img/product/foil/bottleBoy.jpg" alt="Фольговані кулі">
        <p class="title">Поїлочка пляшка хлопчику</p>
        <p class="val">43х80см з гелієм</p>
        <p class="price">Ціна: <span>340 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure picture" data-filter="newborn">
        <img src="img/product/foil/bottleGirl.jpg" alt="Фольговані кулі">
        <p class="title">Поїлочка пляшка дівчинці</p>
        <p class="val">43х80см з гелієм</p>
        <p class="price">Ціна: <span>340 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure picture" data-filter="newborn">
        <img src="img/product/foil/babySoska.jpg" alt="Фольговані кулі">
        <p class="title">Соска</p>
        <p class="val">з гелієм</p>
        <p class="price">Ціна: <span>340 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure picture" data-filter="alcohol">
        <img src="img/product/foil/champFM.jpg" alt="Фольговані кулі">
        <p class="title">Пляшка Шампанського</p>
        <p class="val">83х43см з гелієм</p>
        <p class="price">Ціна: <span>340 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure picture" data-filter="alcohol">
        <img src="img/product/foil/champ.jpg" alt="Фольговані кулі">
        <p class="title">Пляшка Шампанського</p>
        <p class="val">35х91см з гелієм</p>
        <p class="price">Ціна: <span>440 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure picture" data-filter="alcohol">
        <img src="img/product/foil/champBig.jpg" alt="Фольговані кулі">
        <p class="title">Пляшка Шампанського Велика</p>
        <p class="val">99см з гелієм</p>
        <p class="price">Ціна: <span>600 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure picture" data-filter="alcohol">
        <img src="img/product/foil/bokal.jpg" alt="Фольговані кулі">
        <p class="title">Бокал шампанського</p>
        <p class="val">33х89 см з гелієм</p>
        <p class="price">Ціна: <span>340 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure picture" data-filter="alcohol">
        <img src="img/product/foil/whisky.jpg" alt="Фольговані кулі">
        <p class="title">Пляшка Віскі</p>
        <p class="val">78х34см з гелієм</p>
        <p class="price">Ціна: <span>340 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure picture" data-filter="other">
        <img src="img/product/foil/cardKing.jpg" alt="Фольговані кулі">
        <p class="title">Карта Король</p>
        <p class="val">30х43 см з гелієм</p>
        <p class="price">Ціна: <span>340 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure picture" data-filter="other">
        <img src="img/product/foil/crownGold.jpg" alt="Фольговані кулі">
        <p class="title">Золота Корона</p>
        <p class="val">89х74 см з гелієм</p>
        <p class="price">Ціна: <span>340 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure picture" data-filter="other">
        <img src="img/product/foil/ringGold.jpg" alt="Фольговані кулі">
        <p class="title">Обручка з діамантом золото</p>
        <p class="val">84х57 см з гелієм</p>
        <p class="price">Ціна: <span>380 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure picture" data-filter="other">
        <img src="img/product/foil/ringSilver.jpg" alt="Фольговані кулі">
        <p class="title">Обручка з діамантом срібло</p>
        <p class="val">79х54 см з гелієм</p>
        <p class="price">Ціна: <span>380 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure picture" data-filter="other">
        <img src="img/product/foil/lipsRed.jpg" alt="Фольговані кулі">
        <p class="title">Губи червоні</p>
        <p class="val">43х33 см з гелієм</p>
        <p class="price">Ціна: <span>300 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure picture" data-filter="other">
        <img src="img/product/foil/lipsRedLosk.jpg" alt="Фольговані кулі">
        <p class="title">Губи червоні з блиском</p>
        <p class="val">53х98 см з гелієм</p>
        <p class="price">Ціна: <span>380 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure picture" data-filter="other">
        <img src="img/product/foil/championCupGold.jpg" alt="Фольговані кулі">
        <p class="title">Кубок Чемпіона Золотий</p>
        <p class="val">63х71 см з гелієм</p>
        <p class="price">Ціна: <span>380 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure picture" data-filter="alcohol">
        <img src="img/product/foil/beer.jpg" alt="Фольговані кулі">
        <p class="title">Келих пива</p>
        <p class="val">74х50см з гелієм</p>
        <p class="price">Ціна: <span>380 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure picture" data-filter="alcohol">
        <img src="img/product/foil/beerBig.jpg" alt="Фольговані кулі">
        <p class="title">Келих пива великий</p>
        <p class="val">89см з гелієм</p>
        <p class="price">Ціна: <span>600 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="circle newborn">
        <img src="img/product/foil/babyBoy.jpg" alt="Фольговані кулі">
        <p class="title">Новонародженим хлопчикам</p>
        <p class="val">18" (46см) з гелієм</p>
        <p class="price">Ціна: <span>150 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="circle newborn">
        <img src="img/product/foil/babyGirl.jpg" alt="Фольговані кулі">
        <p class="title">Новонародженим дівчаткам</p>
        <p class="val">18" (46см) з гелієм</p>
        <p class="price">Ціна: <span>150 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="circle other">
        <img src="img/product/foil/football.jpg" alt="Фольговані кулі">
        <p class="title">Футбольний м'яч</p>
        <p class="val">18" (46см) з гелієм</p>
        <p class="price">Ціна: <span>150 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="cartoonHeroes circle">
        <img src="img/product/foil/edinorogCircle.jpg" alt="Фольговані кулі">
        <p class="title">Єдиноріг</p>
        <p class="val">18" (46см) з гелієм</p>
        <p class="price">Ціна: <span>150 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/edinorog.jpg" alt="Фольговані кулі">
        <p class="title">Голова єдинорога</p>
        <p class="val">101х79см з гелієм</p>
        <p class="price">Ціна: <span>340 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/edinorogGold.jpg" alt="Фольговані кулі">
        <p class="title">Голова золотого єдинорога</p>
        <p class="val">74х60 см з гелієм</p>
        <p class="price">Ціна: <span>350 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/edinorogMagic.jpg" alt="Фольговані кулі">
        <p class="title">Голова казкового єдинорога</p>
        <p class="val">83х73 см з гелієм</p>
        <p class="price">Ціна: <span>380 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/edinorogFull.jpg" alt="Фольговані кулі">
        <p class="title">Єдирноріг блискучий</p>
        <p class="val">105х85 см з гелієм</p>
        <p class="price">Ціна: <span>370 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes birthday">
        <img src="img/product/foil/pegasHB.jpg" alt="Фольговані кулі">
        <p class="title">Пегас з днем народження</p>
        <p class="val">76х85 см з гелієм</p>
        <p class="price">Ціна: <span>450 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/edinorogFull2.jpg" alt="Фольговані кулі">
        <p class="title">Єдиноріг</p>
        <p class="val">105х101 см з гелієм</p>
        <p class="price">Ціна: <span>350 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/poniLittlePinkyPai.jpg" alt="Фольговані кулі">
        <p class="title">Поні Пінкі Пай</p>
        <p class="val">92х104 см з гелієм</p>
        <p class="price">Ціна: <span>350 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/dragon.jpg" alt="Фольговані кулі">
        <p class="title">Голова дракона</p>
        <p class="val">91х63 см з гелієм</p>
        <p class="price">Ціна: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="animal">
        <img src="img/product/foil/flamingo.jpg" alt="Фольговані кулі">
        <p class="title">Фламінго</p>
        <p class="val">130х75см з гелієм</p>
        <p class="price">Ціна: <span>280 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="animal">
        <img src="img/product/foil/baterflyPink.jpg" alt="Фольговані кулі">
        <p class="title">Метелик малиновий</p>
        <p class="val">59х89 см з гелієм</p>
        <p class="price">Ціна: <span>150 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="animal">
        <img src="img/product/foil/baterflyBlue.jpg" alt="Фольговані кулі">
        <p class="title">Метелик синій</p>
        <p class="val">56x97 см з гелієм</p>
        <p class="price">Ціна: <span>150 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="animal">
        <img src="img/product/foil/baterflyOrange.jpg" alt="Фольговані кулі">
        <p class="title">Метелик помаранчевий</p>
        <p class="val">60х72 см з гелієм</p>
        <p class="price">Ціна: <span>300 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/starWarsDartWaider.jpg" alt="Фольговані кулі">
        <p class="title">Дарт Вейдер голова</p>
        <p class="val">55x55 см з гелієм</p>
        <p class="price">Ціна: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/minnieMouse.jpg" alt="Фольговані кулі">
        <p class="title">Мінні маус</p>
        <p class="val">93х70см з гелієм</p>
        <p class="price">Ціна: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes other">
        <img src="img/product/foil/frameMinnieMouse.jpg" alt="Фольговані кулі">
        <p class="title">Фото Рамка Мінні маус</p>
        <p class="val">66х68 см з гелієм (чи повітрям)</p>
        <p class="price">Ціна: <span>450 (200) грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/mikkiMouse.jpg" alt="Фольговані кулі">
        <p class="title">Міккі маус</p>
        <p class="val">93х70см з гелієм</p>
        <p class="price">Ціна: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/minionDave.jpg" alt="Фольговані кулі">
        <p class="title">Міньон Дейв</p>
        <p class="val">76х57см з гелієм</p>
        <p class="price">Ціна: <span>370 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/minionStew.jpg" alt="Фольговані кулі">
        <p class="title">Міньон Стюарт</p>
        <p class="val">76х57см з гелієм</p>
        <p class="price">Ціна: <span>370 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="cartoonHeroes circle">
        <img src="img/product/foil/minions.jpg" alt="Фольговані кулі">
        <p class="title">Міньони</p>
        <p class="val">18" (46см) з гелієм</p>
        <p class="price">Ціна: <span>160 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="cartoonHeroes circle">
        <img src="img/product/foil/minionsBlue.jpg" alt="Фольговані кулі">
        <p class="title">Міньони</p>
        <p class="val">18" (46см) з гелієм</p>
        <p class="price">Ціна: <span>160 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/ladyBag.jpg" alt="Фольговані кулі">
        <p class="title">Леді Баг</p>
        <p class="val">85х76 см з гелієм</p>
        <p class="price">Ціна: <span>300 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/superCat.jpg" alt="Фольговані кулі">
        <p class="title">Супер Кіт</p>
        <p class="val">89х56 см з гелієм</p>
        <p class="price">Ціна: <span>300 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/batman.jpg" alt="Фольговані кулі">
        <p class="title">Бетмен</p>
        <p class="val">71х69 см з гелієм</p>
        <p class="price">Ціна: <span>300 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/batmanLogo.jpg" alt="Фольговані кулі">
        <p class="title">Емблема Бетмена</p>
        <p class="val">68х48 см з гелієм</p>
        <p class="price">Ціна: <span>390 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/superman.jpg" alt="Фольговані кулі">
        <p class="title">Супермен</p>
        <p class="val">58х86 см з гелієм</p>
        <p class="price">Ціна: <span>300 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/supermanLogo.jpg" alt="Фольговані кулі">
        <p class="title">Емблема Супермена</p>
        <p class="val">66х50 см з гелієм</p>
        <p class="price">Ціна: <span>300 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/spiderManHead.jpg" alt="Фольговані кулі">
        <p class="title">Людина Павук голова</p>
        <p class="val">30х43 см з гелієм</p>
        <p class="price">Ціна: <span>280 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/spiderMan.jpg" alt="Фольговані кулі">
        <p class="title">Людина Павук</p>
        <p class="val">30х43 см з гелієм</p>
        <p class="price">Ціна: <span>370 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/jett.jpg" alt="Фольговані кулі">
        <p class="title">Супер Крила Джетт</p>
        <p class="val">94х89 см з гелієм</p>
        <p class="price">Ціна: <span>300 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/transformersPrime.jpg" alt="Фольговані кулі">
        <p class="title">Трансформери Оптімус Прайм</p>
        <p class="val">81х88 см з гелієм</p>
        <p class="price">Ціна: <span>350 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/transformersPrimeFM.jpg" alt="Фольговані кулі">
        <p class="title">Трансформери Оптімус Прайм FM</p>
        <p class="val">74х50 см з гелієм</p>
        <p class="price">Ціна: <span>350 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/transformersBumbleBee.jpg" alt="Фольговані кулі">
        <p class="title">Трансформери Бамблбі</p>
        <p class="val">68х93 см з гелієм</p>
        <p class="price">Ціна: <span>350 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/transformersBumbleBeeFM.jpg" alt="Фольговані кулі">
        <p class="title">Трансформери Бамблбі FM</p>
        <p class="val">74х50 см з гелієм</p>
        <p class="price">Ціна: <span>350 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/carsRed.jpg" alt="Фольговані кулі">
        <p class="title">Тачки Блискавка Маквін</p>
        <p class="val">76х43 см з гелієм</p>
        <p class="price">Ціна: <span>350 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="cartoonHeroes circle">
        <img src="img/product/foil/carsCircleBlue.jpg" alt="Фольговані кулі">
        <p class="title">Тачки</p>
        <p class="val">18" (46см) з гелієм</p>
        <p class="price">Ціна: <span>150 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/fixikiO.jpg" alt="Фольговані кулі">
        <p class="title">Фіксики Нолик</p>
        <p class="val">55х58 см з гелієм</p>
        <p class="price">Ціна: <span>300 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/fixikiSim.jpg" alt="Фольговані кулі">
        <p class="title">Фіксики Сімка</p>
        <p class="val">50х65 см з гелієм</p>
        <p class="price">Ціна: <span>300 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="cartoonHeroes circle">
        <img src="img/product/foil/fixikiCircleGreen.jpg" alt="Фольговані кулі">
        <p class="title">Фіксики</p>
        <p class="val">18" (46см) з гелієм</p>
        <p class="price">Ціна: <span>130 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="cartoonHeroes heart">
        <img src="img/product/foil/helloKittyHeart.jpg" alt="Фольговані кулі">
        <p class="title">Hello Kitty Серце</p>
        <p class="val">18" (46см) з гелієм</p>
        <p class="price">Ціна: <span>150 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/angryBirdsPig.jpg" alt="Фольговані кулі">
        <p class="title">Angry Birds Король Свиней</p>
        <p class="val">70х75 см з гелієм</p>
        <p class="price">Ціна: <span>300 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/angryBirdsRed.jpg" alt="Фольговані кулі">
        <p class="title">Angry Birds Червоний Птах</p>
        <p class="val">з гелієм</p>
        <p class="price">Ціна: <span>300 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="cartoonHeroes">
        <img src="img/product/foil/angryBirdsTeam.jpg" alt="Фольговані кулі">
        <p class="title">Angry Birds Команда</p>
        <p class="val">26" (66см) з гелієм</p>
        <p class="price">Ціна: <span>260 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/smesharikiKrosh.jpg" alt="Фольговані кулі">
        <p class="title">Смешарики Крош</p>
        <p class="val">72х105 см з гелієм</p>
        <p class="price">Ціна: <span>300 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/smesharikiNusha.jpg" alt="Фольговані кулі">
        <p class="title">Смешарики Нюша</p>
        <p class="val">74х82 см з гелієм</p>
        <p class="price">Ціна: <span>300 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="cartoonHeroes circle">
        <img src="img/product/foil/smeshariki.jpg" alt="Фольговані кулі">
        <p class="title">Смешарики</p>
        <p class="val">18" (46см) з гелієм</p>
        <p class="price">Ціна: <span>165 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/frankensteinGreen.jpg" alt="Фольговані кулі">
        <p class="title">Франкенштейн голова</p>
        <p class="val">43х63 см з гелієм</p>
        <p class="price">Ціна: <span>300 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="dino">
        <img src="img/product/foil/dinoRaptor.jpg" alt="Фольговані кулі">
        <p class="title">Динозавр Раптор</p>
        <p class="val">97 см з гелієм</p>
        <p class="price">Ціна: <span>500 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="dino">
        <img src="img/product/foil/dinoTriceratops.jpg" alt="Фольговані кулі">
        <p class="title">Динозавр Трицератопс</p>
        <p class="val">106х60 см з гелієм</p>
        <p class="price">Ціна: <span>300 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="dino">
        <img src="img/product/foil/dino_apatozaur.jpg" alt="Фольговані кулі">
        <p class="title">Динозавр Апатозавр</p>
        <p class="val">106х60 см з гелієм</p>
        <p class="price">Ціна: <span>300 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="dino">
        <img src="img/product/foil/dinoTRexQualatex.jpg" alt="Фольговані кулі">
        <p class="title">Динозавр Тиранозавр Qualatex</p>
        <p class="val">107 см з гелієм</p>
        <p class="price">Ціна: <span>450 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="dino">
        <img src="img/product/foil/dinoTRexOrange.jpg" alt="Фольговані кулі">
        <p class="title">Динозавр Тиранозавр помаранчевий</p>
        <p class="val">89х91 см з гелієм</p>
        <p class="price">Ціна: <span>450 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="dino">
        <img src="img/product/foil/dinoTRexFlexmetal.jpg" alt="Фольговані кулі">
        <p class="title">Динозавр Тиранозавр FM</p>
        <p class="val">84х82 см з гелієм</p>
        <p class="price">Ціна: <span>300 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="dino">
        <img src="img/product/foil/dinoSkeletTRex.jpg" alt="Фольговані кулі">
        <p class="title">Динозавр Скелет Тиранозавра</p>
        <p class="val">89х57 см з гелієм</p>
        <p class="price">Ціна: <span>400 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="circle dino">
        <img src="img/product/foil/dinoRaptorCircle.jpg" alt="Фольговані кулі">
        <p class="title">Динозавр Раптор</p>
        <p class="val">18" (46см) з гелієм</p>
        <p class="price">Ціна: <span>150 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/sheepSean.jpg" alt="Фольговані кулі">
        <p class="title">Баранчик Шон</p>
        <p class="val">63х60 см з гелієм</p>
        <p class="price">Ціна: <span>330 грн/шт</span></p>
    </div>
    <!-- <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/mashaVelo.jpg" alt="Фольговані кулі">
        <p class="title">Маша на велосипеде</p>
        <p class="val">100х60 см з гелієм</p>
        <p class="price">Ціна: <span>350 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/mashaAndBear.jpg" alt="Фольговані кулі">
        <p class="title">Маша и Медведь</p>
        <p class="val">80х93 см з гелієм</p>
        <p class="price">Ціна: <span>350 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/masha.jpg" alt="Фольговані кулі">
        <p class="title">Маша</p>
        <p class="val">67х105 см з гелієм</p>
        <p class="price">Ціна: <span>350 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="cartoonHeroes circle">
        <img src="img/product/foil/mashaCircle.jpg" alt="Фольговані кулі">
        <p class="title">Маша</p>
        <p class="val">18" (46см) з гелієм</p>
        <p class="price">Ціна: <span>150 грн/шт</span></p>
    </div> -->
    <div class="catalog-item foil big circle picture" data-filter="cartoonHeroes circle">
        <img src="img/product/foil/peppaCircle.jpg" alt="Фольговані кулі">
        <p class="title">Свинка Пеппа</p>
        <p class="val">18" (46см) з гелієм</p>
        <p class="price">Ціна: <span>170 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/peppaCake.jpg" alt="Фольговані кулі">
        <p class="title">Свинка Пеппа з тортом</p>
        <p class="val">76х83 см з гелієм</p>
        <p class="price">Ціна: <span>350 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/ninzjaGreen.jpg" alt="Фольговані кулі">
        <p class="title">Ніндзя зелений</p>
        <p class="val">75х83 см з гелієм</p>
        <p class="price">Ціна: <span>300 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/feja.jpg" alt="Фольговані кулі">
        <p class="title">Фея метелик</p>
        <p class="val">70х97 см з гелієм</p>
        <p class="price">Ціна: <span>280 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/rusalka.jpg" alt="Фольговані кулі">
        <p class="title">Русалка</p>
        <p class="val">82х74 см з гелієм</p>
        <p class="price">Ціна: <span>300 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/princessPink.jpg" alt="Фольговані кулі">
        <p class="title">Принцеса</p>
        <p class="val">99х69 см з гелієм</p>
        <p class="price">Ціна: <span>300 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/ninjaTurtlesRaf.jpg" alt="Фольговані кулі">
        <p class="title">Ніндзя черепашки Рафаель</p>
        <p class="val">73х86 см з гелієм</p>
        <p class="price">Ціна: <span>380 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/alett.jpg" alt="Фольговані кулі">
        <p class="title">Герої в масках Алетт</p>
        <p class="val">83х78 см з гелієм</p>
        <p class="price">Ціна: <span>350 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/catboy.jpg" alt="Фольговані кулі">
        <p class="title">Герої в масках Кетбой</p>
        <p class="val">83х78 см з гелієм</p>
        <p class="price">Ціна: <span>350 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/geko.jpg" alt="Фольговані кулі">
        <p class="title">Герої в масках Гекко</p>
        <p class="val">83х78 см з гелієм</p>
        <p class="price">Ціна: <span>350 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="cartoonHeroes circle">
        <img src="img/product/foil/pjMasks.jpg" alt="Фольговані кулі">
        <p class="title">Герої в масках</p>
        <p class="val">18" (46см) з гелієм</p>
        <p class="price">Ціна: <span>150 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/pawPatrolCheys.jpg" alt="Фольговані кулі">
        <p class="title">Щенячий патруль Гонщик Чейз</p>
        <p class="val">58х78см з гелієм</p>
        <p class="price">Ціна: <span>350 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/pawPatrolSky.jpeg" alt="Фольговані кулі">
        <p class="title">Щенячий патруль Скай</p>
        <p class="val">84 см з гелієм</p>
        <p class="price">Ціна: <span>280 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/pawPatrolStrongy.jpeg" alt="Фольговані кулі">
        <p class="title">Щенячий патруль Крепиш</p>
        <p class="val">87 см з гелієм</p>
        <p class="price">Ціна: <span>280 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/pawPatrol_ChaseEmb.jpg" alt="Фольговані кулі">
        <p class="title">Щенячий патруль Емблема Чейз</p>
        <p class="val">63х68 см з гелієм</p>
        <p class="price">Ціна: <span>470 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/pawPatrol_MarshallEmb.jpg" alt="Фольговані кулі">
        <p class="title">Щенячий патруль Емблема Маршал</p>
        <p class="val">63х68 см з гелієм</p>
        <p class="price">Ціна: <span>470 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/furbiViolet.jpeg" alt="Фольговані кулі">
        <p class="title">Фарбі фіолетовий</p>
        <p class="val">55х59 см з гелієм</p>
        <p class="price">Ціна: <span>280 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/monsterIncSally.jpg" alt="Фольговані кулі">
        <p class="title">Саллі Корпорацяя Монстрів</p>
        <p class="val">з гелієм</p>
        <p class="price">Ціна: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="animal">
        <img src="img/product/foil/panda.jpg" alt="Фольговані кулі">
        <p class="title">Панда</p>
        <p class="val">56х83 см з гелієм</p>
        <p class="price">Ціна: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="animal">
        <img src="img/product/foil/pandaHead.jpg" alt="Фольговані кулі">
        <p class="title">Голова панди</p>
        <p class="val">57х66 см з гелієм</p>
        <p class="price">Ціна: <span>300 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="animal">
        <img src="img/product/foil/tiger.jpeg" alt="Фольговані кулі">
        <p class="title">Тигр</p>
        <p class="val">76х90 см з гелієм</p>
        <p class="price">Ціна: <span>280 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="animal">
        <img src="img/product/foil/leopard.jpg" alt="Фольговані кулі">
        <p class="title">Леопард</p>
        <p class="val">76х90 см з гелієм</p>
        <p class="price">Ціна: <span>280 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="animal">
        <img src="img/product/foil/dogDalmatin.jpg" alt="Фольговані кулі">
        <p class="title">Собака Далматин</p>
        <p class="val">82х90 см з гелієм</p>
        <p class="price">Ціна: <span>290 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="animal">
        <img src="img/product/foil/hourseBrown.jpg" alt="Фольговані кулі">
        <p class="title">Кінь коричневий</p>
        <p class="val">75х107 см з гелієм</p>
        <p class="price">Ціна: <span>280 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="animal">
        <img src="img/product/foil/zebra.jpg" alt="Фольговані кулі">
        <p class="title">Зебра</p>
        <p class="val">75х107 см з гелієм</p>
        <p class="price">Ціна: <span>280 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="animal">
        <img src="img/product/foil/hourseCircus.jpg" alt="Фольговані кулі">
        <p class="title">Кінь цирковий</p>
        <p class="val">90х98 см з гелієм</p>
        <p class="price">Ціна: <span>280 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="animal">
        <img src="img/product/foil/birdAra.jpg" alt="Фольговані кулі">
        <p class="title">Папуга</p>
        <p class="val">43х89 см з гелієм</p>
        <p class="price">Ціна: <span>230 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="animal">
        <img src="img/product/foil/owl.jpg" alt="Фольговані кулі">
        <p class="title">Сова</p>
        <p class="val">78х98 см з гелієм</p>
        <p class="price">Ціна: <span>230 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="animal">
        <img src="img/product/foil/tucanHappy.jpg" alt="Фольговані кулі">
        <p class="title">Тукан</p>
        <p class="val">75х58 см з гелієм</p>
        <p class="price">Ціна: <span>230 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="animal">
        <img src="img/product/foil/swan.jpg" alt="Фольговані кулі">
        <p class="title">Либідь</p>
        <p class="val">72х88 см з гелієм</p>
        <p class="price">Ціна: <span>230 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="animal">
        <img src="img/product/foil/lion.jpg" alt="Фольговані кулі">
        <p class="title">Лев</p>
        <p class="val">80х83 см з гелієм</p>
        <p class="price">Ціна: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="animal">
        <img src="img/product/foil/giraf.jpg" alt="Фольговані кулі">
        <p class="title">Жираф</p>
        <p class="val">120х66 см з гелієм</p>
        <p class="price">Ціна: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="animal">
        <img src="img/product/foil/pinguin.jpg" alt="Фольговані кулі">
        <p class="title">Пінгвін</p>
        <p class="val">80x71 см з гелієм</p>
        <p class="price">Ціна: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="animal">
        <img src="img/product/foil/shark.jpeg" alt="Фольговані кулі">
        <p class="title">Акула синя</p>
        <p class="val">75х105 см з гелієм</p>
        <p class="price">Ціна: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="animal">
        <img src="img/product/foil/dolphin.jpeg" alt="Фольговані кулі">
        <p class="title">Дельфін синій</p>
        <p class="val">56х95 см з гелієм</p>
        <p class="price">Ціна: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="other">
        <img src="img/product/foil/shipPirateBlack.jpg" alt="Фольговані кулі">
        <p class="title">Піратський Корабель</p>
        <p class="val">78х105 см з гелієм</p>
        <p class="price">Ціна: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="other">
        <img src="img/product/foil/seaAncor.jpg" alt="Фольговані кулі">
        <p class="title">Морський Якір</p>
        <p class="val">53х76 см з гелієм</p>
        <p class="price">Ціна: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil circle picture" data-filter="circle other">
        <img src="img/product/foil/seaSkiper.jpg" alt="Фольговані кулі">
        <p class="title">Морський Штурвал</p>
        <p class="val">18" (46см) з гелієм</p>
        <p class="price">Ціна: <span>150 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="vehicle">
        <img src="img/product/foil/bikeOrange.jpg" alt="Фольговані кулі">
        <p class="title">Мотоцикл помаранчевий</p>
        <p class="val">57х115 см з гелієм</p>
        <p class="price">Ціна: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="vehicle">
        <img src="img/product/foil/bikeBlue.jpg" alt="Фольговані кулі">
        <p class="title">Мотоцикл синий</p>
        <p class="val">57х115 см з гелієм</p>
        <p class="price">Ціна: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="vehicle">
        <img src="img/product/foil/bikeSport.jpg" alt="Фольговані кулі">
        <p class="title">Мотоцикл спортивний</p>
        <p class="val">70х84 см з гелієм</p>
        <p class="price">Ціна: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="vehicle">
        <img src="img/product/foil/train.jpg" alt="Фольговані кулі">
        <p class="title">Паровоз</p>
        <p class="val">70х80 см з гелієм</p>
        <p class="price">Ціна: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="vehicle">
        <img src="img/product/foil/carPolice.jpg" alt="Фольговані кулі">
        <p class="title">Поліцейська Машина</p>
        <p class="val">43х80 см з гелієм</p>
        <p class="price">Ціна: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="vehicle">
        <img src="img/product/foil/hotCarsRed.jpg" alt="Фольговані кулі">
        <p class="title">Гоночна машина</p>
        <p class="val">43х79 см з гелієм</p>
        <p class="price">Ціна: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="vehicle">
        <img src="img/product/foil/hammerPolice.jpg" alt="Фольговані кулі">
        <p class="title">Поліцейський Позашляховик</p>
        <p class="val">85х46 см з гелієм</p>
        <p class="price">Ціна: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="vehicle">
        <img src="img/product/foil/carFire.jpg" alt="Фольговані кулі">
        <p class="title">Пожежена машина</p>
        <p class="val">48х79 см з гелієм</p>
        <p class="price">Ціна: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="vehicle">
        <img src="img/product/foil/carFireFM.jpg" alt="Фольговані кулі">
        <p class="title">Пожежена машина</p>
        <p class="val">79х80 см з гелієм</p>
        <p class="price">Ціна: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="vehicle">
        <img src="img/product/foil/monsterCarBlue.jpg" alt="Фольговані кулі">
        <p class="title">Позашляховик Монстеркар Синій</p>
        <p class="val">68х96 см з гелієм</p>
        <p class="price">Ціна: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="vehicle">
        <img src="img/product/foil/monsterCarGreen.jpg" alt="Фольговані кулі">
        <p class="title">Позашляховик Монстеркар Зелений</p>
        <p class="val">68х96 см з гелієм</p>
        <p class="price">Ціна: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="vehicle">
        <img src="img/product/foil/monsterCarRed.jpg" alt="Фольговані кулі">
        <p class="title">Позашляховик Монстеркар Червоний</p>
        <p class="val">68х96 см з гелієм</p>
        <p class="price">Ціна: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="vehicle">
        <img src="img/product/foil/helicopterCamuf.jpeg" alt="Фольговані кулі">
        <p class="title">Гелікоптер камуфляжний</p>
        <p class="val">57х96 см з гелієм</p>
        <p class="price">Ціна: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="vehicle">
        <img src="img/product/foil/helicopterPolice.jpg" alt="Фольговані кулі">
        <p class="title">Гелікоптер поліцейський</p>
        <p class="val">57х96 см з гелієм</p>
        <p class="price">Ціна: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="vehicle">
        <img src="img/product/foil/aircraftDestroyer.jpg" alt="Фольговані кулі">
        <p class="title">Літак Винищувач</p>
        <p class="val">99х96 см з гелієм</p>
        <p class="price">Ціна: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="vehicle">
        <img src="img/product/foil/airplaneBlue.jpg" alt="Фольговані кулі">
        <p class="title">Літак</p>
        <p class="val">52х100 см з гелієм</p>
        <p class="price">Ціна: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="cartoonHeroes">
        <img src="img/product/foil/airplaneMultOrange.jpg" alt="Фольговані кулі">
        <p class="title">Літачки</p>
        <p class="val">53х110 см з гелієм</p>
        <p class="price">Ціна: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="vehicle">
        <img src="img/product/foil/rocket.jpg" alt="Фольговані кулі">
        <p class="title">Ракета</p>
        <p class="val">53х73 см з гелієм</p>
        <p class="price">Ціна: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="other">
        <img src="img/product/foil/cosmonaut.jpg" alt="Фольговані кулі">
        <p class="title">Космонавт</p>
        <p class="val">94 см з гелієм</p>
        <p class="price">Ціна: <span>390 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="other">
        <img src="img/product/foil/cosmonaut2.jpg" alt="Фольговані кулі">
        <p class="title">Космонавт</p>
        <p class="val">100x80 см з гелієм</p>
        <p class="price">Ціна: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="vehicle">
        <img src="img/product/foil/tankGreenCamuf.jpg" alt="Фольговані кулі">
        <p class="title">Танк зелений</p>
        <p class="val">65х80 см з гелієм</p>
        <p class="price">Ціна: <span>330 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="other">
        <img src="img/product/foil/ananas.jpg" alt="Фольговані кулі">
        <p class="title">Ананас</p>
        <p class="val">43х78см з гелієм</p>
        <p class="price">Ціна: <span>300 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="birthday">
        <img src="img/product/foil/keksHB.jpg" alt="Фольговані кулі">
        <p class="title">Кекс з днем народження</p>
        <p class="val">51х74 см з гелієм</p>
        <p class="price">Ціна: <span>430 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="birthday">
        <img src="img/product/foil/hb_keks.jpg" alt="Фольговані кулі">
        <p class="title">Кекс зі свічкою з днем народження</p>
        <p class="val">59х50 см з гелієм</p>
        <p class="price">Ціна: <span>150 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="birthday">
        <img src="img/product/foil/boxHB.jpg" alt="Фольговані кулі">
        <p class="title">Подарунок коробка з днем народження</p>
        <p class="val">69 см з гелієм</p>
        <p class="price">Ціна: <span>450 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="other">
        <img src="img/product/foil/ponchik.jpg" alt="Фольговані кулі">
        <p class="title">Пончик</p>
        <p class="val">18" (46см) з гелієм</p>
        <p class="price">Ціна: <span>230 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="other">
        <img src="img/product/foil/ponchikUkus.jpg" alt="Фольговані кулі">
        <p class="title">Пончик відгризаний</p>
        <p class="val">66х69 см з гелієм</p>
        <p class="price">Ціна: <span>470 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="birthday">
        <img src="img/product/foil/cakeHB.jpg" alt="Фольговані кулі">
        <p class="title">Торт з днем народження</p>
        <p class="val">71х81 см з гелієм</p>
        <p class="price">Ціна: <span>460 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="birthday">
        <img src="img/product/foil/shipHB.jpg" alt="Фольговані кулі">
        <p class="title">Парусник з днем народження</p>
        <p class="val">73х59 см з гелієм</p>
        <p class="price">Ціна: <span>450 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure picture" data-filter="star birthday">
        <img src="img/product/foil/starHB_big.jpg" alt="Фольговані кулі">
        <p class="title">Зірка з днем народження велика</p>
        <p class="val">81х81 см з гелієм</p>
        <p class="price">Ціна: <span>550 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="other">
        <img src="img/product/foil/shitSmile.jpg" alt="Фольговані кулі">
        <p class="title">Веселе лайно</p>
        <p class="val">63х60 см з гелієм</p>
        <p class="price">Ціна: <span>360 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="other">
        <img src="img/product/foil/shitColor.jpg" alt="Фольговані кулі">
        <p class="title">Лайно Різнокольорове</p>
        <p class="val">63х60 см з гелієм</p>
        <p class="price">Ціна: <span>350 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="other">
        <img src="img/product/foil/popcorn.jpg" alt="Фольговані кулі">
        <p class="title">Попкорн</p>
        <p class="val">70х48 см з гелієм</p>
        <p class="price">Ціна: <span>420 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="circle newborn">
        <img src="img/product/foil/girlORboy.jpg" alt="Фольговані кулі">
        <p class="title">Girl or Boy?</p>
        <p class="val">18" (46см) з гелієм</p>
        <p class="price">Ціна: <span>150 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="circle newborn">
        <img src="img/product/foil/heORshe.jpg" alt="Фольговані кулі">
        <p class="title">He OR She?</p>
        <p class="val">18" (46см) з гелієм</p>
        <p class="price">Ціна: <span>150 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="">
        <img src="img/product/foil/sun.jpeg" alt="Фольговані кулі">
        <p class="title">Сонце</p>
        <p class="val">з гелієм</p>
        <p class="price">Ціна: <span>390 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="circle other">
        <img src="img/product/foil/future_MRS.jpg" alt="Фольговані кулі">
        <p class="title">Дівич-вечір</p>
        <p class="val">18" (46см) з гелієм</p>
        <p class="price">Ціна: <span>150 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="heart other">
        <img src="img/product/foil/MR_MRS.jpg" alt="Фольговані кулі">
        <p class="title">Весілля</p>
        <p class="val">18" (46см) з гелієм</p>
        <p class="price">Ціна: <span>160 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="circle">
        <img src="img/product/foil/konfeta.jpg" alt="Фольговані кулі">
        <p class="title">Цукерка</p>
        <p class="val">18" (46см) з гелієм</p>
        <p class="price">Ціна: <span>130 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="circle other">
        <img src="img/product/foil/Halloween_1.jpg" alt="Фольговані кулі">
        <p class="title">Halloween</p>
        <p class="val">18" (46см) з гелієм</p>
        <p class="price">Ціна: <span>140 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="circle birthday">
        <img src="img/product/foil/hb_1.jpg" alt="Фольговані кулі">
        <p class="title">З днем народження</p>
        <p class="val">18" (46см) з гелієм</p>
        <p class="price">Ціна: <span>150 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="circle birthday">
        <img src="img/product/foil/hb_pirates.jpg" alt="Фольговані кулі">
        <p class="title">Пірати з днем народження</p>
        <p class="val">18" (46см) з гелієм</p>
        <p class="price">Ціна: <span>150 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="circle birthday">
        <img src="img/product/foil/hb_9.jpg" alt="Фольговані кулі">
        <p class="title">З днем народження</p>
        <p class="val">18" (46см) з гелієм</p>
        <p class="price">Ціна: <span>150 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="circle birthday">
        <img src="img/product/foil/hb_Bro.jpg" alt="Фольговані кулі">
        <p class="title">З ДР БРО</p>
        <p class="val">18" (46см) з гелієм</p>
        <p class="price">Ціна: <span>150 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="circle birthday">
        <img src="img/product/foil/hb_draw.jpg" alt="Фольговані кулі">
        <p class="title">З днем народження ЗАПОВНИ САМ</p>
        <p class="val">18" (46см) з гелієм</p>
        <p class="price">Ціна: <span>150 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="circle birthday">
        <img src="img/product/foil/hb_2.jpg" alt="Фольговані кулі">
        <p class="title">З днем народження</p>
        <p class="val">18" (46см) з гелієм</p>
        <p class="price">Ціна: <span>150 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="heart birthday">
        <img src="img/product/foil/heartHB.jpg" alt="Фольговані кулі">
        <p class="title">З днем народження</p>
        <p class="val">18" (46см) з гелієм</p>
        <p class="price">Ціна: <span>150 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="circle birthday">
        <img src="img/product/foil/hb_3.jpg" alt="Фольговані кулі">
        <p class="title">З днем народження</p>
        <p class="val">18" (46см) з гелієм</p>
        <p class="price">Ціна: <span>150 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="circle birthday">
        <img src="img/product/foil/hb_4.jpg" alt="Фольговані кулі">
        <p class="title">З днем народження</p>
        <p class="val">18" (46см) з гелієм</p>
        <p class="price">Ціна: <span>150 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="birthday">
        <img src="img/product/foil/hb_princess.jpg" alt="Фольговані кулі">
        <p class="title">З днем народження принцеса</p>
        <p class="val">18" (46см) з гелієм</p>
        <p class="price">Ціна: <span>150 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="circle birthday">
        <img src="img/product/foil/hb_5.jpg" alt="Фольговані кулі">
        <p class="title">З днем народження</p>
        <p class="val">18" (46см) з гелієм</p>
        <p class="price">Ціна: <span>150 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="birthday">
        <img src="img/product/foil/hb_romb.jpg" alt="Фольговані кулі">
        <p class="title">Ромб З днем народження</p>
        <p class="val">18" (46см) з гелієм</p>
        <p class="price">Ціна: <span>170 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="circle birthday">
        <img src="img/product/foil/hb.jpg" alt="Фольговані кулі">
        <p class="title">З днем народження</p>
        <p class="val">18" (46см) з гелієм</p>
        <p class="price">Ціна: <span>150 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="circle birthday">
        <img src="img/product/foil/hb_6.jpg" alt="Фольговані кулі">
        <p class="title">З днем народження</p>
        <p class="val">18" (46см) з гелієм</p>
        <p class="price">Ціна: <span>150 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="birthday">
        <img src="img/product/foil/hb_wb.jpg" alt="Фольговані кулі">
        <p class="title">Квадрат З днем народження</p>
        <p class="val">18" (46см) з гелієм</p>
        <p class="price">Ціна: <span>160 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="circle">
        <img src="img/product/foil/redGoroh.jpg" alt="Фольговані кулі">
        <p class="title">Коло в горох</p>
        <p class="val">18" (46см) з гелієм</p>
        <p class="price">Ціна: <span>140 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big circle picture" data-filter="circle other">
        <img src="img/product/foil/smileFoil.jpg" alt="Фольговані кулі">
        <p class="title">Смайл</p>
        <p class="val">18" (46см) з гелієм</p>
        <p class="price">Ціна: <span>140 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="other">
        <img src="img/product/foil/like.jpg" alt="Фольговані кулі">
        <p class="title">Like</p>
        <p class="val">66х72 см з гелієм</p>
        <p class="price">Ціна: <span>480 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="other">
        <img src="img/product/foil/mustache.jpg" alt="Фольговані кулі">
        <p class="title">Вуса</p>
        <p class="val">66х72 см з гелієм</p>
        <p class="price">Ціна: <span>280 грн/шт</span></p>
    </div>
    <div class="catalog-item foil big figure" data-filter="other">
        <img src="img/product/foil/almaz3D.jpg" alt="Фольговані кулі">
        <p class="title">Діамант</p>
        <p class="val">18" (46см) з гелієм</p>
        <p class="price">Ціна: <span>420 грн/шт</span></p>
    </div>
</article>
<?php include "includes/footer.html" ?>
</body>
</html>