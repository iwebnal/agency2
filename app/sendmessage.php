<?php
$sendto   = "admin@admin.ru";
$from = "admin@admin.ru";
$uname = $_POST['uname'];
$tel = $_POST['tel'];
$text = $_POST['text'];
$email =  $_POST['email'];
$phrase = htmlspecialchars($_GET['phrase']);
$referer = htmlspecialchars($_GET['referer']);
// Формирование заголовка письма
$subject  = "webprez";
$headers  = "From: " . $from . "\r\n";
$headers .= "Reply-To: ". $from . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";
// Формирование тела письма
$msg  = "<html><body>";
$msg .= "<h2>Новое сообщение</h2>\r\n";

$msg .= "<p><strong>Телефон:</strong> ".$tel."</p>\r\n";
$msg .= "<p><strong>Имя:</strong> ".$uname."</p>\r\n";
$msg .= "<p><strong>Email:</strong> ".$email."</p>\r\n";
$msg .= "<p><strong>Сообщение:</strong> ".$text."</p>\r\n";



$msg .= "</body></html>";


// отправка сообщения
if(!@mail($sendto, $subject, $msg, $headers)) {
	//echo "true";
} else {
	//echo "false";
}

?>