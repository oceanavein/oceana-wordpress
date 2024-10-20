<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<article class="post">
		<div class="container">

			<p class="mb-24">
				<a href="<?php echo get_bloginfo( 'url' ); ?>/blog/" class="flex items-center">
					<svg class="w-6 h-6 mr-8">
						<use xlink:href="#icon-arrow-left" />
					</svg>
					Blog
				</a>
			</p>

			<h1 class="text-h1 mb-6">
				<?php the_title(); ?>
			</h1>

			<div class="body-content">
				<?php the_content(); ?>
			</div>

		</div>
	</article>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
