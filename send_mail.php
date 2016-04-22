
<!-- PHP SEND EMAIL -->

<?php
$toEmail = "tum.arm@gmail.com, atelierium@yandex.ru";

$mailHeaders = "From: ".$_POST["userName"]." <". $_POST["userEmail"] .">\r\n";
$mailHeaders .= 'MIME-Version: 1.0' . "\r\n";
$mailHeaders .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$message_content = '
		<html>
		<head>
		  <title>Запись на курс</title>
		</head>
		<style type="text/css">
			h1 {
			    font-size: 18px; 
			    font-family: Arial, sans-serif; 
			    color: #222;
			}
			.caps {
				letter-spacing: 2px;
				font-size: 12px; 
				font-weight: bold;
				font-family: Arial;
				padding: 7px 0;
				border-bottom: 1px solid black;
			}
			.footer {
    			color: #777777;
    			font-size: 12px;
    		}
		</style>

		<body>
			<img src="http://atelierium.ru/img/logo-mail.png" width="80px" alt="Логотип">
			<h1>Вам пришло письмо из формы обратной связи Atelierium.ru!</h1>

			<br />

			<p class="caps">ЧТО НАПИСАЛИ</p>
			<p>'.$_POST["content"].'</p>

			<br />

			<p class="caps">КТО ЭТО БЫЛ</p>
			<p>'.htmlspecialchars($_POST['userName']).'</p>
			<p>'.$_POST['userEmail'].'</p>
			
			<br />

			<p class="footer">Не забудьте ответить в течение дня!</p>
		</body>
		</html>
		';


if(mail($toEmail, 'Atelierium.ru', $message_content, $mailHeaders)) {
	print "<br><p class='Сообщение отправлено.</p><br>";
} else {
	print "<p class='Error'>Проблемы при отправке.</p>";
}
?>


