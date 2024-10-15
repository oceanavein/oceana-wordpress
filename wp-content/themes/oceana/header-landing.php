<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta content="width=device-width, initial-scale=1.0, user-scalable=1, minimum-scale=1.0" name="viewport">
	<?php get_template_part( 'partials/head/favicon' ); ?>
	<?php wp_head(); ?>
	<?php get_template_part( 'partials/head/analytics' ); ?>
</head>
<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) --> <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P2X3TZHX" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> <!-- End Google Tag Manager (noscript) -->
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
