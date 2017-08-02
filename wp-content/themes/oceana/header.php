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

	<header class="header">
		<div class="container">

			<a href="/">Oceana</a>

			<nav class="main-nav">
				<a href="" class="hamburger">
					<span class="hamburger--bar"></span>
				</a>
				<?php wp_nav_menu(); ?>
			</nav>

		</div>
	</header>

	<main class="main" role="main">
