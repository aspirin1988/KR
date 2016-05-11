<?php include_once "gallery.php"?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Ақ жол | <?php wp_title() ?></title>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Rochester' rel='stylesheet' type='text/css'>
	<!-- Bootstrap -->
	<link href="<?php bloginfo('template_directory') ?>/public/css/uikit.min.css" rel="stylesheet">
	<link href="<?php bloginfo('template_directory') ?>/public/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php bloginfo('template_directory') ?>/public/css/styles.css" rel="stylesheet">
	<link href="<?php bloginfo('template_directory') ?>/public/css/slidenav.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/bower_components/uikit/css/uikit.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/bower_components/uikit/css/components/slider.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/bower_components/uikit/css/components/slideshow.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/bower_components/uikit/css/components/dotnav.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/bower_components/uikit/css/components/slidenav.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/bower_components/uikit/css/components/datepicker.min.css">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<header>
	<!-- НАВИГАЦИЯ -->
	<div class="nav container">
		<nav class="navbar navbar-default">
			<a href="#" class="logo"><img class="img-responsive" src="<?=get_field('header_logo',4)?>"></a>
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav text-center navbar-right">
					<?php $menu=wp_get_nav_menu_items('main'); $title=get_post();  foreach ($menu as $key=>$val) { if (!$val->menu_item_parent){ $class='';  $title=get_post(); if($title->ID==$val->object_id){$class='active';} ?>
						<li class="<?php echo $class;?>"><a href="<?=$val->url?>"><?=$val->title?></a></li>
					<?php }}?>
				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>
	</div>
	<!-- конец НАВИГАЦИЯ -->
</header>