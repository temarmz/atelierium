<?php

	/*---------   SEND ADMINS MAIL   ---------*/
	

	$adminEmail = "tum.arm@gmail.com, atelierium@yandex.ru";

	$mailAdminHeaders = "From: ATELIERIUM.ru <atelierium@yandex.ru>\r\n";
	$mailAdminHeaders .= 'MIME-Version: 1.0' . "\r\n";
	$mailAdminHeaders .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	$messageAdminContent = 
		'
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
    		#course {
				font-size: 16px; 
    		}
    		.footer {
    			color: #777777;
    			font-size: 12px;
    		}
		</style>

		<body>
			<img src="http://atelierium.ru/img/logo-mail.png" width="80px" alt="Логотип">
			<h1>На сайте Atelierium.ru кто-то записался на курс!</h1>

			<br />

			<p class="caps">НА КАКОЙ КУРС ЗАПИСАЛИСЬ</p>
			<p id="course">'.$_POST['courseName'].'</p>
			<p>'.$_POST['time'].'</p>

			<br />

			<p class="caps">КТО ЭТО БЫЛ</p>
			<p>'.htmlspecialchars($_POST['name']).'</p>
			<p>'.$_POST['email'].'</p>
			<p>'.$_POST['phone'].'</p>

			<br />

			<p class="footer">Не забудьте перезвонить в течение дня!</p>
		</body>
		</html>
		';

	if (mail($adminEmail, 'Запись на курс', $messageAdminContent, $mailAdminHeaders)) {
		print "<br /><p class='Сообщение отправлено.</p><br>";
	} else {
		print "<p class='Error'>Проблемы при отправке</p>";
	}


	/*---------   SEND CLIENTS MAIL   ---------*/
	

	$clientEmail = $_POST['email'];

	$mailClientHeaders = "From: ATELIERIUM.ru <atelierium@yandex.ru>\r\n";
	$mailClientHeaders .= 'MIME-Version: 1.0' . "\r\n";
	$mailClientHeaders .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	$messageClientContent =
		'
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
    		#course {
				font-size: 16px; 
    		}
    		.footer {
    			color: #777777;
    			font-size: 12px;
    		}
		</style>

		<body>
			<img src="http://atelierium.ru/img/logo-mail.png" width="80px" alt="Логотип">
			<h1>Вы записались на курс на сайте Atelierium.ru!</h1>

			<br />

			<p id="course">'.$_POST['courseName'].'</p>
			<p>'.$_POST['time'].'</p>

			<br />

			<p style="color: #777777; font-size: 12px">В течение дня вам перезвонят для уточнения деталей.</p>

			<br />

			<p class="footer">ATELIERIUM</p>
			<p class="footer">+7 (903) 692-79-71 • atelierium@yandex.ru</p>

		</body>
		</html>
		';

	if (mail($clientEmail, 'Запись на курс', $messageClientContent, $mailClientHeaders)) {
		print "<br /><p class='Сообщение отправлено.</p><br>";
	} else {
		print "<p class='Error'>Проблемы при отправке</p>";
	}

?>
