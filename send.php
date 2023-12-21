<html>
<head lang="ua">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet"/>
    <link rel="icon" href="img/png/balloonsColor3.png" sizes="any">
    <meta name="description" content="Форма замовлення">
    <title>Форма замовлення</title>
</head>
<body>
<h1>Форма замовлення</h1>
<?php
//проверяем, существуют ли переменные в массиве POST
if(!isset($_POST['fio']) and !isset($_POST['tel']) and !isset($_POST['clientComment'])){
?> <form action="send.php" method="post">
   <fieldset>
       <legend>Заповніть форму</legend>
       <label for="fio">Ім'я *</label>
       <input type="text" name="fio" id="fio" placeholder="Ваше ім'я" required>
       <br>
       <label for="tel">Тел *</label>
       <input type="text" name="tel" id="tel" placeholder="Номер телефону (Viber)" required>
       <br>
       <label for="date">Дата *</label>
       <input type="date" name="date" id="date" placeholder="Дата виконання замовлення" required>
       <br>
       <label for="time">Час</label>
       <input type="time" name="time" id="time" placeholder="Час на який треба виконати замовлення">
       <br>
       <label for="clientComment">Додаткова інфо до замовлення: *</label>
       <br>
       <textarea name="clientComment" id="clientComment" placeholder="Напишіть, які кулі ви хочете замовити, к-сть та ін." required></textarea>
       <br>
       <input type="submit" value="Надіслати">
   </fieldset>
   <p>* Зірочкою відмічені поля обов'язкові для заповнення</p>
   </form> <?php
} else {
//показываем форму
$fio = $_POST['fio'];
$tel = $_POST['tel'];
$date = $_POST['date'];
$time = $_POST['time'];
$clientComment = $_POST['clientComment'];
if (mail("a.kiselyoff@gmail.com", "Замовлення з сайту", "Ім'я-".$fio. "\n Телефон-".$tel. "\nДата:" .$date. "\n Час:" .$time. "\n Коментар до замовлення від клієнта: ".$clientComment ,"From: order@happymaker.com.ua \r\n")){
echo "Замовлення надіслане успішно, чекайте поки менеджер з вами зв'яжеться"; 
} else { 
echo "При відправленні замовлення сталася помилка";
}
}
?>
</body>
</html>


