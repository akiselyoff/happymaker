<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet"/>
    <link rel="icon" href="img/png/balloonsColor3.png" sizes="any">
    <meta name="description" content="Форма заказа">

    <title>Форма заказа</title>
</head>
<body>
<h1>Форма заказа</h1>
<?php
//проверяем, существуют ли переменные в массиве POST
if(!isset($_POST['fio']) and !isset($_POST['tel']) and !isset($_POST['clientComment'])){
?> <form action="send.php" method="post">
   <fieldset>
       <legend>Заполните форму</legend>
       <label for="fio">Имя *</label>
       <input type="text" name="fio" id="fio" placeholder="Ваше имя" required>
       <br>
       <label for="tel">Тел *</label>
       <input type="text" name="tel" id="tel" placeholder="Номер телефона (Viber)" required>
       <br>
       <label for="date">Дата *</label>
       <input type="date" name="date" id="date" placeholder="Дата исполнения заказа" required>
       <br>
       <label for="time">Время</label>
       <input type="time" name="time" id="time" placeholder="Время доставки заказа">
       <br>
       <label for="clientComment">Комментарий к заказу: *</label>
       <br>
       <textarea name="clientComment" id="clientComment" placeholder="Напишите, какие шары вы хотите заказать, кол-во и т.д." required></textarea>
       <br>
       <input type="submit" value="Отправить">
   </fieldset>
   <p>* Звездочкой отмечены поля обязательные для заполнения</p>
   </form> <?php
} else {
//показываем форму
$fio = $_POST['fio'];
$tel = $_POST['tel'];
$date = $_POST['date'];
$time = $_POST['time'];
$clientComment = $_POST['clientComment'];
if (mail("a.kiselyoff@gmail.com", "Заявка с сайта", "Имя-".$fio. "\n Телефон-".$tel. "\nДата:" .$date. "\n Время:" .$time. "\n Комментарий клиента к заказу: ".$clientComment ,"From: zakaz@happymaker.com.ua \r\n")){
echo "Сообщение успешно отправлено"; 
} else { 
echo "При отправке сообщения возникли ошибки";
}
}
?>
</body>
</html>


