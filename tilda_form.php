<?php
header("Access-Control-Allow-Origin: *");
$order_numb = date('s').rand(10, 99)."-".date('h').rand(10, 99)."-".date('m').rand(10, 99);

$order_text = "";	
			
$name = $_POST['name'];
$phone = $_POST['phone'];
$mail = $_POST['mail'];
$sale = $_POST['sale'];
$wedding_day = $_POST['wedding_day'];
$days_to_wedding = $_POST['days_to_wedding'];


$from = "Site_fire";
$mail = "murchik.mur@gmail.com";
$subject = "Fire-lead";
$order_text = "Имя : ".$name."\n"
			 ."Телефон : ".$phone."\n"
			 ."E-mail : ".$mail."\n"
			 ."Дата свадьбы : ".$wedding_day."\n"
			 ."Дней до свадьбы: ".$days_to_wedding."\n"
			 ."Скидка: ".$sale."\n";

mail($mail, $subject, $order_text, $from);



echo $order_numb;
?>