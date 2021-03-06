<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta content="width=device-width, initial-scale=1.0, user-scalable=1, minimum-scale=1.0" name="viewport">
	<?php wp_head(); ?>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
	  ga('create', 'UA-106879600-1', 'auto');
	  ga('send', 'pageview');
	</script>
</head>
<body <?php body_class(); ?>>
	<?php get_template_part( 'partials/svg' ); ?>

	<div class="top-banner">
		<p class="top-banner__label">Schedule an Appointment</p>
		<p class="top-banner__phone"><?php the_field('phone_number', 'option'); ?></p>
	</div>

	<header class="header">
		<div class="container">
			<div class="logo">
				<a href="<?php echo pll_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo.svg" alt="Oceana Vein Clinic" /></a>
			</div>
			<!-- <nav class="language-nav">
				<ul>
					<?php pll_the_languages();?>
				</ul>
			</nav> -->
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
