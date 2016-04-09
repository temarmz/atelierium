<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

		<title>Трикотаж. Конструирование и технология пошива</title>

		<!-- CSS -->
		<link href="../css/reset.css" rel="stylesheet">
		<link href="../css/style.css" rel="stylesheet">

    	<!-- Фавиконка -->
		<link rel="apple-touch-icon" sizes="57x57" href="../img/favicon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="../img/favicon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="../img/favicon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="../img/favicon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="../img/favicon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="../../img/favicon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="../img/favicon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="../img/favicon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="../img/favicon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="../img/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="../img/favicon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="../img/favicon/favicon-16x16.png">
		<link rel="manifest" href="img/favicon/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="../img/favicon//ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
	</head>

	<body>
		<!-- Шапка -->
		<header>
			<div class="wrap">
				<div class="thirty-padding">
					<div class="header_logo">
						<a href="../index.html"><img class="logo" src="../img/logo_two@2x.png" width="243px" height="76px"></a>
					</div>

					<div class="header_contacts">
						<ul>
							<li><p class="header_small_above">Услуги ателье или запись на курсы:</p></li>
							<li><p class="phone">+7 (903) 692-79-71</p></li>
							<li>atelierium@yandex.ru</li>
						</ul>
					</div>

					<div class="header_adress">
						<ul>
							<li><p class="adress">Ярославль, Некрасова 41, офис 304</p></li>
							<li><p class="header_small_under">БЦ «Североход», офисное здание №2,</p></li>
							<li><p class="header_small_under">вход со стороны улицы Некрасова, 3-й этаж</p></li>
						</ul>
					</div>
				</div>
			</div>
		</header>

		<div class="no-fotorama">
			<hr>
		</div>

		<!-- Контент -->
		<div class="content">
			<div class="wrap">
				<div class="thirty-padding">
					<div class="two-columns">

						<!-- Правая колонка -->

						<div class="sidebar">
							<div class="right-column-header">Запись закрыта</div>

							<form method="post" autocomplete="off">

								<p><input type="hidden" id="courseName" name="courseName" value="Трикотаж. Конструирование и технология пошива" disabled="disabled"></p>

								<p><input class="write-input" id="name" type="text" name="name" placeholder="Имя" disabled="disabled"/></p>

								<p><input class="write-input" id="email" type="email" name="email" placeholder="Электропочта" disabled="disabled"/></p>

								<p><input class="write-input" id="phone" type="text" name="phone" placeholder="Номер мобильного" disabled="disabled"/></p>
								

								<select class="write-dropdown" id="time" name="time" disabled="disabled">
									
									<option id="one_option">
										По воскресеньям с 11:00 до 18:00
									</option>
									
								</select>

								<p><input class="btn-send-disabled" type="submit" value="Записаться" onclick="sendWriteData('Трикотаж. Конструирование и технология пошива'); return false;" disabled="disabled"/></p>
							</form>
						</div>

						<!-- Левая колонка -->

						<div class="left-column">

							<div class="header">Мастер-курс «Трикотаж. Конструирование и&nbsp;технология пошива»</div>
							
							<p class="text-under-header">
								<span class="badge-disabled">ЗАПИСЬ ЗАКРЫТА</span>
								Для начинающих
							</p>

							<p>
								Курс проходит в режиме «мастер-класса». На занятиях учащиеся изучают виды трикотажа, особенности обработки трикотажа, конструирование футболки и брюк. По итогу мастер-курса у вас будет два сшитых изделия.
							</p>

							<table class="table-course">
								<!-- Заголовок таблицы -->
								<tr class="table-header">
									<th class="course-col-time">ВРЕМЯ ПРОВЕДЕНИЯ</th>
									<th class="course-col-data">ПРОДОЛЖИТЕЛЬНОСТЬ</th>
									<th class="course-col-cost">СТОИМОСТЬ</th>
								</tr>

								<!-- Первая строка -->
								<tr>
									<td><p>с 11:00 до 18:00</p><p>воскресенье</p><p>(2 занятия, 14 часов)</p> </td>
									<td>с 14 февраля по 21 февраля</td>
									<td><b>4000 руб.</b> (единовременно)</td>
								</tr>

							</table>

							<!-- Карта -->

							<p>
								Занятия по этому курсу проходят по адресу: улица Майорова, 8А, 1 этаж
							</p><br>

							<div id="map">
								<script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=zr-VuhEAn43rfLt3QUoNxF1zc-37c48L&width=550&height=430&lang=ru_RU&sourceType=constructor">
								</script>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>

		<!-- Подвал -->
		<div class="footer">
			<div class="wrap">
				<div class="thirty-padding">
					<ul class="footer-about">
						<li><p class="footer-header"><span class="name">ATELIERIUM</span> — пространство, где создают одежду и учат ее создавать</p></li>
						<li><p class="footer-adress">Мы находимся в Ярославле на улице Некрасова, дом 41, офис 304</p></li>
						<li><span class="footer-phone">+7 (903) 692-79-71</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;atelierium@yandex.ru</li>
					</ul>

					<ul class="footer-developer">
						<li><a class="grey" href="http://armeev.com" target="_blank">armeev.com</a></li>
						<li>2016 год</li>
					</ul>
				</div>
			</div>
		</div>
		
		<!-- Обработка формы -->
		<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
		<script src="../js/val_write_submit.js"></script>
		
		<!-- ЯКарты -->
		<script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    	<script src="mapbasics.js" type="text/javascript"></script>

		<!-- Yandex.Metrika counter -->
			<script type="text/javascript">
			    (function (d, w, c) {
			        (w[c] = w[c] || []).push(function() {
			            try {
			                w.yaCounter35265770 = new Ya.Metrika({
			                    id:35265770,
			                    clickmap:true,
			                    trackLinks:true,
			                    accurateTrackBounce:true
			                });
			            } catch(e) { }
			        });

			        var n = d.getElementsByTagName("script")[0],
			            s = d.createElement("script"),
			            f = function () { n.parentNode.insertBefore(s, n); };
			        s.type = "text/javascript";
			        s.async = true;
			        s.src = "https://mc.yandex.ru/metrika/watch.js";

			        if (w.opera == "[object Opera]") {
			            d.addEventListener("DOMContentLoaded", f, false);
			        } else { f(); }
			    })(document, window, "yandex_metrika_callbacks");
			</script>
			<noscript><div><img src="https://mc.yandex.ru/watch/35265770" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
		<!-- /Yandex.Metrika counter -->
	</body>
</html>