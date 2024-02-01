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

	<header class="landig-header">
		<div class="container flex justify-between items-center">
			<div class="logo">
				<a href="<?php echo pll_home_url(); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo.svg" alt="Oceana Vein Clinic" />
				</a>
			</div>

			<nav class="landing-nav">
				<ul class="flex">
					<li>
						<a href="#symptoms">Symptoms</a>
					</li>
					<li class="pl-40 pr-40">
						<a href="#treatments">Treatments</a>
					</li>
					<li>
						<a href="#reviews">Testimonials</a>
					</li>
				</ul>
			</nav>

			<div>
				<a href="tel:<?php the_field('phone_number', 'option'); ?>" class="btn btn-outline items-center">
					<svg class="icon-phone icon-24 mr-8">
						<use xlink:href="#icon-phone" />
					</svg>
					<div class="pt-4">
						<?php the_field('phone_number', 'option'); ?>
					</div>
				</a>
			</div>
		</div>
	</header>

	<main class="main" role="main">
