<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width">
	<?php get_template_part( 'partials/head/preload' ); ?>
	<?php get_template_part( 'partials/head/favicon' ); ?>
	<?php wp_head(); ?>
	<?php get_template_part( 'partials/head/analytics' ); ?>
</head>
<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P2X3TZHX" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<?php get_template_part( 'partials/svg' ); ?>

	<div class="top-banner">
		<p class="top-banner__label">
			<a href="<?php echo get_bloginfo( 'url' ); ?>/contact-us/">Schedule an Appointment</a>
		</p>
		<p class="top-banner__phone">
			<?php the_field('phone_number', 'option'); ?>
		</p>
	</div>

	<header class="header">
		<div class="container">

			<div class="flex flex-wrap justify-between">
				<div class="logo">
					<a href="<?php echo get_bloginfo( 'url' ); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo.svg" alt="Oceana Vein Clinic" />
					</a>
				</div>

				<nav class="main-nav">
					<button class="mobile-btn btn btn-outline">
						<span class="mobile-btn__label">Menu</span>
						<span class="mobile-btn__label js-is-hidden">Close</span>
					</button>
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'primary'
							)
						);
					?>
				</nav>
			</div>

		</div>
	</header>

	<main class="main" role="main">
