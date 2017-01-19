<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
    <title>Спасибо!</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	
<style>
@font-face {
    font-family: 'reg';
    src: url('fonts/AvenirNextCyr-Regular.otf');
    font-weight: normal;
    font-style: normal;
}
.reg {
    font-family: 'reg';
}
@font-face {
    font-family: 'bold';
    src: url('fonts/AvenirNextCyr-Bold.otf');
    font-weight: normal;
    font-style: normal;
}
.bold {
    font-family: 'bold';
}
@font-face {
    font-family: 'medium';
    src: url('fonts/AvenirNextCyr-Medium.otf');
    font-weight: normal;
    font-style: normal;
}
.medium {
    font-family: 'medium';
}
body {
    color: #313E47;
    font-family: Arial;
    font-size: 15px;
    line-height: 1;
    text-align: center;
    background: url(body.jpg) repeat;
    padding-top: 20px;
}
h2 {
    color: #313E47;
 font-size: 23px;
    font-weight: 700;
    line-height: 44px;
    text-align: center;
    text-transform: uppercase;
	    font-family: 'bold';
}
.tovar_block { 
position: relative;
    width: 100%;
    height: auto;
    overflow: hidden;
	clear: both;
	margin-top: 55px;
	    background: #fff;
    padding: 25px 0;
}
.block_img { 
    float: left;
    padding-left: 112px;
    width: 225px;
}
.block_img img { 
    width: 225px;
}
.block_text { 
    float: left;
    width: 626px;
    margin-left: 60px;
    text-align: justify;
		font-family: 'reg';
}
.block_text form { 
    position: relative;
}
.block_text form input { 
    cursor: pointer;
    outline: none;
    display: block;
    font-size: 19px;
    text-decoration: none;
      width: 342px;
    height: 70px;
    margin: 0 auto;
    line-height: 70px;
    text-align: center;
    border-radius: 5px;
    background: #ff7e00;
    border: 0;
    color: #fff;
    text-transform: uppercase;
    border-bottom: 3px solid #bd5d00;
    /* float: left; */
    margin-left: 0;
}
.skidka { 
    position: absolute;
    right: -45px;
    top: 23px;
    font-size: 25px;
    color: red;
    font-weight: bold;
}
.title { 
font-weight: bold;
    font-size: 27px;
    color: #000;
    margin-top: 30px;
	    text-align: left;
		    font-family: 'bold';
}
.block_opis { 
    margin-top: 25px;
    line-height: 25px;
		font-family: 'reg';
}
.manager { 
clear: both;
    margin-top: 39px;
    font-size: 16px;
    font-weight: bold;
}
.copy { 
 margin-top: 25px;
    font-weight: bold;
    color: #000;
    font-size: 25px;
    background: #2c3743;
    color: #fff;
    padding: 15px 0;
}
.block_text form input.disable { 
    background: #ccc;
    border-bottom: 3px solid #ccc;
}
.old_price { 
    text-decoration: line-through;
    color: red;
}
.new_price { 
    font-size: 18px;
}

.ser_but { 
    cursor: pointer;
    outline: none;
    display: block;
    font-size: 19px;
    text-decoration: none;
    width: 342px;
    height: 70px;
    margin: 0 auto;
    line-height: 70px;
    text-align: center;
    border-radius: 5px;
    background: #ccc;
    border: 0;
    color: #fff;
    text-transform: uppercase;
    border-bottom: 3px solid #ccc;
    /* float: left; */
    margin-left: 0;
    float: right;
	    margin-top: 40px;
    margin-bottom: 0;
}

.pink { 
	 font-family: 'bold';
		     color: #f1398b;
}
@media screen and (max-width: 960px)  {
	.block_text {
    float: none;
    width: 500px;
    margin-left: 0;
    text-align: center;
    margin: 0 auto;
}

	.block_img {
    float: none;
    padding-left: 0;
    width: 225px;
    margin: 0 auto;
}

}

@media screen and (max-width: 480px)  {
	
	.block_img {
    float: none;
    padding-left: 0;
    width: 225px;
    margin: 0 auto;
}
.block_text {
    float: none;
      width: 290px !important;
      margin-left: auto;
    text-align: center;
    margin-right: auto;
    text-align: center;
	font-family: 'reg';

}
.skidka {
    position: relative; 
    right: 0;
    top: 0;
    font-size: 25px;
    color: red;
    font-weight: bold;
    display: block;
    margin-top: 22px;
}
.block_text form input { 
    margin-left: auto;
    margin-right: auto;
	       width: 290px !important;
		       font-size: 16px;
}
.block_opis { 
	    font-family: 'reg';
    text-align: justify;
	margin-top: 10px;
}
	.title { 
	    font-weight: bold;
    font-size: 24px;
    color: #000;
    margin-top: 30px;
    font-family: 'bold';
    text-align: left;
    color: #333;
	}
	.pink { 
	    font-size: 24px;
		 font-family: 'bold';
		     color: #f1398b;
	}
	h2 { 
	font-size: 30px;
    text-align: center;
    font-weight: bold;
	font-family: 'bold';
	}
	.copy { 
		    background: #2c3743;
    color: #fff;
    padding: 15px 0;
    line-height: 44px;
	}
	
	
	
}
</style>
</head>
<body>
    <h2>Поздравляем с удачным выбором! Ваш заказ принят!</h2>
    <h2><span class="pink">Мы радуем своих покупателей! Дарим супер-скидку на второй товар в чеке и БЕСПЛАТНУЮ доставку всего заказа.</span></h2>
	<div class="block_new_content">
	
	
	<div class="tovar_block">
	<div class="block_img">
	<img src="img/images (1).jpg"/>
		<img src="img/kylie-jenner-kyshadow-the-bronze-palette-2016-1.jpg"/>
	</div>
	<div class="block_text">
	<form method="post">
	<input type="submit" value="Добавить тени в заказ" class="tovar_one" onclick="yaCounter41414044.reachGoal('teni'); return true;"><span class="skidka">Хит продаж -70%</span>
	<input type="hidden" value="Палетка теней для век Kylie Kyshadow The Bronze Palette" name="title">
		<input type="hidden" value="Хит продаж -70%" name="skidka">
				<input type="hidden" value="1190 руб" name="price">
	<div class="title">
	Палетка теней для век <br />
Kylie Kyshadow The Bronze Palette<br /> 
Притяжение с первого взгляда

	</div>
	<div class="block_opis">
	В наборе 9 оттенков с гладкой бархатистой текстурой. Можно использовать для любого образа. Распределяются по векам ровным и тонким слоем. Легко смывать. Не содержит талька и парабенов. <br />
<span class="old_price">3985 руб.</span> <span class="new_price">1190 руб.</span> + <b>бесплатная доставка</b> до почтового отделения или пункта самовывоза при 100% предоплате товара. Высылаем номер отслеживания.<br />
При наложенном платеже отправление бесплатно, на месте оплачивается только сумма заказа + услуги почты за перевод 210 руб.

	</div>
	</form>
	</div>
	</div>
	
	
	
		<div class="tovar_block">
	<div class="block_img">
	<img src="img/202609322_w640_h640_cid2235977_pid121357536-fd5d9e79.jpg"/>
		<img src="img/c309cb29fee0fae0e186ce3d13cb5548.jpg"/>
	</div>
	<div class="block_text">
	<form method="post">
	<input style="width: 342px;     margin-bottom: 24px;" type="submit" value="Добавить органайзер в заказ" class="tovar_one" onclick="yaCounter41414044.reachGoal('org'); return true;"><span class="skidka">-20%</span>
		<input type="hidden" value="Roll-n-go" name="title">
		<input type="hidden" value="-20%" name="skidka">
		<input type="hidden" value="1190 руб" name="price">
	Нужен органайзер для аккуратного хранения косметики?
	<div class="title">
	Roll-n-go<br /> 
Легко брать в дорогу, комфортно использовать дома


	</div>
	<div class="block_opis">


<span class="old_price">638 руб.</span> <span class="new_price">510 руб.</span> + <b>бесплатная доставка</b> заказа до почтового отделения или пункта самовывоза при 100% предоплате товара. Высылаем номер отслеживания.<br />
При наложенном платеже отправление бесплатно, на месте оплачивается только сумма заказа + услуги почты за перевод 210 руб.<br />

Качественные материалы: нейлон, силикон, вмещает около 25 предметов. <br />
Размер — в разложенном виде 53х25х6см, в сложенном виде - 25х13х13см.

	</div>
	</form>
		<button class="ser_but">Нет, Спасибо</button>
	</div>
	
	</div>

	
	
	
	
	
	</div>
	
	<div class="manager">В ближайшее время с Вами свяжется менеджер для уточнения удобного для Вас способа<br /> оплаты и доставки. Спасибо! </div>
    <div class="copy">Команда IQMagazine.ru <br />+7 (952) 343-40-80</div>
	
	<script>
	jQuery('form').on('submit', function (e) {
    var form = jQuery(this);
       jQuery.ajax({
        data: form.serialize(),
        url: '/form.php',
        type: 'POST',
        success : function(){
			  alert('Товар добавлен к заказу! В ближайшее время с Вами свяжется менеджер магазина. Спасибо!');
form.find('input.tovar_one').addClass('disable');
form.find('input.tovar_one').val('Добавлено!');
        },
        error : function(){
            alert('Сообщение не отправлено!');
        }

    });

    e.preventDefault(e);
    return false;
});
	</script>
	<script>
	jQuery(document).ready(function() { 
	$('.ser_but').click(function() { 
	alert ('Спасибо! Всего доброго!');
	
	});
	
	});
	</script>
	
	<?php include("admin/params/scripts.txt"); ?>
	
</body>
</html>