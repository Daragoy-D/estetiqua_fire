<?php
$order_numb = date('s').rand(10, 99)."-".date('h').rand(10, 99)."-".date('m').rand(10, 99);

$order_text = "";	
			
$name = $_POST['name'];
$phone = $_POST['phone'];
$text = $_POST['text'];
$program = $_POST['program'];


$from = "Site_fire";
$mail = "murchik.mur@gmail.com";
$subject = "Fire-lead";
$order_text = "Имя : ".$name."\n"
			 ."Телефон : ".$phone."\n"
			 ."Когда звонить : ".$text."\n"
			 ."Кликнул по: ".$program."\n";

mail($mail, $subject, $order_text, $from);



echo $order_numb;
?>

