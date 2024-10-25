<?php get_header(); ?>

<div class="hero-blog relative overflow-hidden bg-blue-pale">
	<div class="container relative z-10">

		<p class="mb-24">
			<a href="<?php echo get_bloginfo( 'url' ); ?>/blog/" class="flex items-center">
				<svg class="w-6 h-6 mr-8">
					<use xlink:href="#icon-arrow-left" />
				</svg>
				Blog
			</a>
		</p>

		<h1 class="text-h1 mb-6">
			<?php echo single_cat_title( '', false ) ; ?>
		</h1>
	</div>

	<div class="hero-waves">
		<?php get_template_part( 'partials/svg/bg-waves' ); ?>
	</div>
</div>


<div class="page-wrapper">
	<div class="container">

		<?php if ( have_posts() ): ?>
			<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
				<?php while ( have_posts() ): the_post(); ?>

					<?php get_template_part('partials/blog/card'); ?>

				<?php endwhile; ?>
			</div>

			<?php post_navigation(); ?>

		<?php endif; ?>

	</div>
</div>

<?php get_footer(); ?>
