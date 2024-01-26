<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta content="width=device-width, initial-scale=1.0, user-scalable=1, minimum-scale=1.0" name="viewport">
	<?php wp_head(); ?>
	<!-- Meta Pixel Code -->
	<script>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window,document,'script',
	'https://connect.facebook.net/en_US/fbevents.js');
	fbq('init', '896419075303815');
	fbq('track', 'PageView');
	</script>
	<noscript>
	<img height="1" width="1"
	src="https://www.facebook.com/tr?id=896419075303815&ev=PageView
	&noscript=1"/>
	</noscript>
	<!-- End Meta Pixel Code -->
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
		<p class="top-banner__label">
			<a href="<?php echo pll_home_url(); ?>contact-us/">Schedule an Appointment</a>
		</p>
		<p class="top-banner__phone"><?php the_field('phone_number', 'option'); ?></p>
	</div>

	<header class="header">
		<div class="container">
			<div class="logo">
				<a href="<?php echo pll_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo.svg" alt="Oceana Vein Clinic" /></a>
			</div>
			<!-- <nav class="language-nav">
				<ul>
					<?php // pll_the_languages();?>
				</ul>
			</nav> -->
			<nav class="main-nav">
				<button class="mobile-btn btn btn-outline">
					<span class="mobile-btn__label">Menu</span>
					<span class="mobile-btn__label js-is-hidden">Close</span>
				</button>
				<?php wp_nav_menu( array('theme_location' => 'primary', 'container' => '') ); ?>
			</nav>
		</div>
	</header>

	<main class="main" role="main">
