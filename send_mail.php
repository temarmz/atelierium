
<!-- PHP SEND EMAIL -->

<?php

	// if(isset($_POST['button'])) {

		$toEmail = "tum.arm@gmail.com, atelierium@yandex.ru";

		$subject = "=?utf-8?B?" . base64_encode("Письмо из обратной связи")."?=";

		//$mailHeaders = "From: ".$_POST["userName"]." <". $_POST["userEmail"] .">\r\n";
		$mailHeaders = "From: ATELIERIUM.ru <atelierium@yandex.ru>\r\n";
		$mailHeaders .= 'MIME-Version: 1.0' . "\r\n";
		$mailHeaders .= 'Content-Type: text/html; charset=UTF-8' . "\r\n";

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
				}
				.footer {
	    			color: #777;
	    			font-size: 12px;
	    		}
	    		hr {
				    border: none;
				    background-color: #000;
				    color: #000; /* Цвет линии для IE6-7 */
				    height: 1px;
				}
			</style>

			<body>
				<img src="http://atelierium.ru/img/logo-mail.png" width="80px" alt="Логотип">
				<h1>Вам пришло письмо из формы обратной связи Atelierium.ru!</h1>

				<br />

				<p class="caps">ЧТО НАПИСАЛИ</p>
				<hr>

				<p>'.$_POST["content"].'</p>

				<br />

				<p class="caps">КТО ЭТО БЫЛ</p>
				<hr>

				<p>'.htmlspecialchars($_POST['userName']).'</p>
				<p>'.$_POST["userEmail"].'</p>
				
				<br />

				<p class="footer">Не забудьте ответить в течение дня!</p>
			</body>
			</html>
			';	

	if(mail($toEmail, $subject, $message_content, $mailHeaders)) {
		print "<br><p class='Письмо отправлено.</p><br>";
		} else {
			print "<p class='Error'>Проблемы при отправке письма.</p>";
		}

?>


