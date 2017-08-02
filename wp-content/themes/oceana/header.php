<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta content="width=device-width, initial-scale=1.0, user-scalable=1, minimum-scale=1.0" name="viewport">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php get_template_part( 'partials/svg' ); ?>

	<div class="top-banner">
		<p class="top-banner__label">Schedule an Appointment</p>
		<p class="top-banner__phone">555-234-2342</p>
	</div>

	<header class="header">
		<div class="container">
			<div class="logo">
				<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo.svg" alt="Oceana Vein Clinic" /></a>
			</div>
			<nav class="language-nav">
				<a href="" class="current">En<span class="mobile-is-hidden">glish</span></a> / <a href="">Es<span class="mobile-is-hidden">pa&ntilde;ol</span></a>
			</nav>
			<nav class="main-nav">
				<button class="mobile-btn btn btn--outline">
					<span class="mobile-btn__label">Menu</span>
					<span class="mobile-btn__label js-is-hidden">Close</span>
				</button>
				<?php wp_nav_menu( array('theme_location' => 'primary', 'container' => '') ); ?>
			</nav>
		</div>
	</header>

	<main class="main" role="main">
