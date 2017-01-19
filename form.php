<?php
if($_POST)
{

    $to = "d7415@yandex.ru"; //куда отправлять письмо
    $from = 'um.la'; // от кого
    $subject = "Бонус к покупке товара"; //тема
    $message = 'Товар: '.$_POST['title'].'; Скидка: '.$_POST['skidka'].'; Цена: '.$_POST['price'].';';
    $headers = "Content-type: text/html; charset=UTF-8 \r\n";
    $headers .= "From: <$from>\r\n";
    $result = mail($to, $subject, $message, $headers);

    if ($result){
        echo "Cообщение успешно отправленно. Пожалуйста, оставайтесь на связи";
    }
}
?>