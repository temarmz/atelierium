
<!-- PHP SEND EMAIL -->

<?php
$toEmail = "tum.arm@gmail.com, atelierium@yandex.ru";

$mailHeaders = "From: ".$_POST["userName"]." <". $_POST["userEmail"] .">\r\n";

$message_content = "Вам пришло письмо из формы обратной связи сайта atelierium.ru\r\n
От: ".$_POST["userName"]."    Почта: ".$_POST["userEmail"]."\r\n

".$_POST["content"]."";


if(mail($toEmail, 'Atelierium.ru', $message_content, $mailHeaders)) {
	print "<br><p class='Сообщение отправлено.</p><br>";
} else {
	print "<p class='Error'>Проблемы при отправке.</p>";
}
?>