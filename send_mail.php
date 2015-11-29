
<!-- PHP SEND EMAIL -->

<?php
$toEmail = "tum.arm@gmail.com";

$mailHeaders = "From: ".$_POST["userName"]." <". $_POST["userEmail"] .">\r\n";

$message_content = "Вам пришло письмо из формы обратной связи сайта atelierium.ru\r\n
От: ".$_POST["userName"]."    Почта: ".$_POST["userEmail"]."\r\n

".$_POST["content"]."";


if(mail($toEmail, 'Contact Form Message', $message_content, $mailHeaders)) {
	print "<p class='Сообщение отправлено.</p>";
} else {
	print "<p class='Error'>Problem in Sending Mail.</p>";
}
?>