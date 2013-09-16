<!DOCTYPE HTML>
<!--
	Halcyonic 3.0 by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<title><?php wp_title();?></title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/config.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/skel.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/skel-panels.min.js"></script>
		<noscript>
			<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/skel-noscript.css" />
			<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
			<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style-desktop.css" />
		</noscript>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<!--[if lte IE 9]><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script><![endif]-->
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

		<!-- Header -->
			<div id="header-wrapper">
				<header id="header" class="container">
					<div class="row">
						<div class="12u">
						
							<!-- Logo -->
								<h1><a href="<?php echo home_url();?>" id="logo"><?php bloginfo('name'); ?></a></h1>
							
							<!-- Nav -->
								<?php //wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
								<nav id="nav">
									<a href="index.html">Homepage</a>
									<a href="threecolumn.html">Three Column</a>
									<a href="twocolumn1.html">Two Column #1</a>
									<a href="twocolumn2.html">Two Column #2</a>
									<a href="onecolumn.html">One Column</a>
								</nav>

						</div>
					</div>
				</header>
				<?php echo get_post_meta('bannerhtml');?>
				<div id="banner">
					<div class="container">
						<div class="row">
							<div class="6u">
							
								<!-- Banner Copy -->
									<p>We do something really useful, important, and unique. Learn all about it here ...</p>
									<a href="#" class="button-big">Go on, click me!</a>

							</div>
							<div class="6u">
								
								<!-- Banner Image -->
									<a href="#" class="bordered-feature-image"><img src="images/banner.jpg" alt="" /></a>
							
							</div>
						</div>
					</div>
				</div>
			</div>
