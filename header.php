<doctype html>
	<html lang="es">
	<head>
		<meta charset="UTF-8"/>
		<title>Agustín Ruiz | Ingeniero Informático</title>
		<meta name="viewport" content="width=device-width" />
		<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/favicon.png" type="image/png" >
		<link rel="icon" href="<?php bloginfo('template_url'); ?>/img/favicon.ico" type="image/icon" >

		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>"/>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/reset.css"/>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/responsive.css"/>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/animations.css"/>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

		<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.11.1.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/js/jquery.slides.min.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/js/responsive-menu.js"></script>
		<script>
			$(function(){
				$("#slideshow").slidesjs({
					// width: 940,
					height: 200,
					navigation: false
				});
			});
		</script>
		<?php wp_head(); ?>
	</head>
	<body>
		<header>
			<nav id="nav-collapsed" class="collapsed">
				<div id="responsive-menu">
					<?php wp_nav_menu( array( 'containter' => 'false', 'items_wrap' => '<ul id="menu-top">%3$s</ul>', 'theme_location' => 'menu', 'menu_class'=> 'menu' ));?>
				</div>
				<span id="show-collapsed-nav" class="collapsed" onclick="showResponsiveMenu();">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</span>
			</nav>
			<div class="center top-header">
				<center>
					<a href="<?php bloginfo('url'); ?>" id="a-logo">
						<img src="<?php bloginfo('template_url'); ?>/img/yo2.png" id="img-logo" alt="Logo"/>
					</a>
				</center>
				<a id="header-title" onclick="location.href='<?php bloginfo('url'); ?>'" class="no-decoration">
					<span >[A]<span style="letter-spacing:0.2em;">GUST</span>[R]<span style="letter-spacing:0.2em;">UIZ</span><span style="text-transform:none; font-size:0.75em; letter-spacing:0.1em;">.es</span></span>
					<br/>
					<span class="subtitle">Ingeniero Informático<span class="subsubtitle"> (...y más)</span></span>
				</a>
				<div id="social">
				</div>
			</div>
			<nav class="expanded">
				<?php wp_nav_menu( array( 'containter' => 'false', 'items_wrap' => '<ul id="menu-top">%3$s</ul>', 'theme_location' => 'menu' ));?>
			</nav>
		</header>