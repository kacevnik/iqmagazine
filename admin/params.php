<?php
header("Content-type: text/html, charset=UTF-8");
    if(!isset($_COOKIE['login']) && !isset($_COOKIE['pass'])){
        header("Location: login.php");
        exit();
    }
    if(isset($_POST['save'])) {
        if(isset($_POST['timer'])){ //редактируем таймер
            $filename = "params/timer.txt";
            $file = $_POST['timer'];
            file_put_contents($filename, $file);
        }
        if(isset($_POST['newcen'])){ //редактируем новую цену
            $filename = "params/newcen.txt";
            $file = $_POST['newcen'];
            file_put_contents($filename, $file);
        }
        if(isset($_POST['lastcen'])){ //редактируем старую цену
            $filename = "params/lastcen.txt";
            $file = $_POST['lastcen'];
            file_put_contents($filename, $file);
        }
        if(isset($_POST['phone'])){
            $filename = "params/phone.txt";
            $file = $_POST['phone'];
            file_put_contents($filename, $file);
        }
        if(isset($_POST['days'])){ //редактируем время работы
            $filename = "params/days.txt";
            $file = $_POST['days'];
            file_put_contents($filename, $file);
        }
        if(isset($_POST['tovar'])){ //редактируем id товара
            $filename = "params/idpay.txt";
            $file = $_POST['tovar'];
            file_put_contents($filename, $file);
        }
        if(isset($_POST['shop'])){ //редактируем id магазина
            $filename = "params/shop.txt";
            $file = $_POST['shop'];
            file_put_contents($filename, $file);
        }
        if(isset($_POST['email'])) {//Редактируем мыло
            $filename = "params/email.txt";
            $file = $_POST['email'];
            file_put_contents($filename, $file);
        }
        if(isset($_POST['mails'])) {//Редактируем мыло
            $filename = "params/mails.txt";
            $file = $_POST['mails'];
            file_put_contents($filename, $file);
        }
    }
$gets = file_get_contents("params/mails.txt");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Админка</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <nav>
        <ul class="main">
            <li><a href="index.php">Добавить скрипты на сайт</a></li>
            <li><a href="params.php" class="active">Параметры сайта</a></li>
            <li><a href="../" target="_blank">Посмотреть сайт</a></li>
            <li><a href="login.php?exit=1">Выход</a></li>
        </ul>
    </nav>
    <form class="main" method="post">
        <h1>Изменить параметры сайта</h1>
        <p>На этой странице вы можете отредактировать таймер, цены, телефон и время работы, а также подключение e-autopay</p>
        <label>Данные в подвале: <small>указывается ИП или ОГРН и подобное</small></label>
        <input type="text" name="timer" placeholder="Данные" value="<?php include("params/timer.txt"); ?>">
        <label>Новая цена:</label>
        <input type="text" name="newcen" placeholder="1990" pattern="[0-9]*" value="<?php include("params/newcen.txt"); ?>">
        <label>Старая цена:</label>
        <input type="text" name="lastcen" placeholder="3000" pattern="[0-9]*" value="<?php include("params/lastcen.txt"); ?>">
        <label>Телефон для связи:</label>
        <input type="text" name="phone" placeholder="+7 (495) 051-12-53" value="<?php include("params/phone.txt"); ?>">
        <label>Время работы: <small>можно установить тег переноса &#60;br&#62;</small></label>
        <input type="text" name="days" placeholder="Ежедневно <br> с 9:00 до 21:00 МСК" value="<?php include("params/days.txt"); ?>">
        <label for="m1" style="font-size: 20px;"><input type="radio" name="mails" value="1" <?php if($gets == 1) echo "checked"; ?> id="m1"> Использовать e-mail для заявок</label>
        <label for="m2" style="font-size: 20px;"><input type="radio" name="mails" value="2" <?php if($gets == 2) echo "checked"; ?> id="m2"> Использовать e-autopay для заявок</label>
        <div class="autopay m2">
            <div class="left">
                <label>ID товара e-autopay:</label>
                <input type="text" name="tovar" placeholder="12551" value="<?php include("params/idpay.txt"); ?>">
            </div>
            <div class="right">
                <label>ID магазина e-autopay:</label>
                <input type="text" name="shop" placeholder="shop123" value="<?php include("params/shop.txt"); ?>">
            </div>
            <div class="clear"></div>
        </div>
        <div class="m1">
            <label>E-mail для заявок:</label>
            <input type="text" name="email" placeholder="youremail@site.ru" value="<?php include("params/email.txt"); ?>">
        </div>
        <button name="save">Сохранить</button>
    </form>
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script>
    <?php
    if($gets == 2) echo '$(".m1").hide();';
    if($gets == 1) echo '$(".m2").hide();';
    ?>
    $("[for=m1]").bind("click", function(){
        $(".m2").hide();
        $(".m1").show();
    });
    $("[for=m2]").bind("click", function(){
        $(".m1").hide();
        $(".m2").show();
    });
</script>
</body>
</html>