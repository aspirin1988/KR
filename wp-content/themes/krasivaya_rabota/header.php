<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Красивая Работа | Главная</title>
	<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

<!-- начало HEADER -->
<header class="container">
	<img class="header__logo" src="<?=get_field('logo',4)?>" alt="Лого">
	<p class="header__header-summary">Центр <br>эстетической медицины</p>
	<div class="nav-and-phonenumbers">
		<!--(начало) навменю -->
		<div class="navbar navbar-default" role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<div class="navbar-collapse collapse">
				<!-- Left nav -->
				<ul class="nav navbar-nav">
					<li class="current"><a href="index.html">Главная</a></li>
					<li><a href="about.html">Красивая работа</a></li>
					<li><a href="services.html">Услуги</span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Коррекция дефектов кожи <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="#">Удаление родинок</a></li>
									<li><a href="#">Удаление попиллом</a></li>
									<li><a href="#">Удаление бородавок </a></li>
									<li><a href="#">Удаление сосудистых<br>звездочек</a></li>
								</ul>
							</li>
							<li><a href="#">Лазерная шлифовка <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="#">Шлифовка лица</a></li>
									<li><a href="#">Растяжки</a></li>
								</ul>
							</li>
							<li><a href="#">Фото-Лазерная эпиляция <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="#">Фотоэпиляция</a></li>
									<li><a href="#">Лазерная эпиляция	</a></li>
								</ul>
							</li>
							<li><a href="#">RF Лифтинг</a></li>
							<li><a href="#">Антивозрастная косметология <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="#">Биоревитализация</a></li>
									<li><a href="#">Мезотерапия</a></li>
									<li><a href="#">Фотоомоложение</a></li>
									<li><a href="#">Подтяжка нитями</a></li>
								</ul>
							</li>
							<li><a href="#">Плазмалифтинг <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="#">Лечение алопеции</a></li>
									<li><a href="#">Омоложение собственной<br>плазмы</a></li>
								</ul>
							</li>
							<li><a href="#">Вакуумный лифтинг лица и тела</a></li>
							<li><a href="#">Диспорт</a></li>
							<li><a href="#">Лечение цилюлита</a></li>
							<li><a href="#">Удаление татуировок и татуажа</a></li>
						</ul>
					</li>
					<li><a href="contacts.html">Контакты</a></li>
				</ul>
			</div><!--/.nav-collapse -->

		</div>
		<!--(конец) навменю -->

		<div class="tel-numbers">
			<a href="#" class="tel-numbers__cell-number">+7 707 105 54 11</a>
			<a href="#" class="tel-numbers__fixed-number">+7 727 329 72 00</a>
		</div>
	</div>
</header>
<!-- конец HEADER -->