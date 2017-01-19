<?php 
if(isset($_POST['phone'])) {
    $text = "Имя: ".$_POST['name']."\r\n Телефон: ".$_POST['phone'];
    mail(file_get_contents("admin/params/email.txt"), "Заказ помады KYLIE BIRTHDAY", $text);
    header("Location: mail.php");
}
else echo "Не то";
?>