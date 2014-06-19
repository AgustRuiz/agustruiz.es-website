<doctype html>
	<html lang="es">
	<head>
		<meta charset="UTF-8"/>
		<title>Agustín Ruiz | Ingeniero Informático</title>
		<meta name="viewport" content="width=device-width" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>"/>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/reset.css"/>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/responsive.css"/>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

		<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.11.1.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/js/jquery.slides.min.js"></script>
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
			<div id="logo">
				<p>[A]<span style="letter-spacing:0.2em;">GUST</span>[R]<span style="letter-spacing:0.2em;">UIZ</span><span style="text-transform:none; font-size:0.75em; letter-spacing:0.1em;">.es</span></p>
				<span class="subtitle">Ingeniero Informático<span class="subsubtitle"> (...y algunas cositas más)</span></span>
			</div>
			<nav>
				<?php wp_nav_menu( array(
					'containter' => 'false',
					'items_wrap' => '<ul id="menu-top">%3$s</ul>',
					'theme_location' => 'menu'
				)); ?>
			</nav>
		</header>