<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<article class="post">
		<div class="hero relative overflow-hidden bg-blue-pale">
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
					<?php the_title(); ?>
				</h1>
			</div>

			<div class="hero-waves">
				<?php get_template_part( 'partials/svg/bg-waves' ); ?>
			</div>
		</div>


		<div class="container">
			<div class="grid grid-cols-3 gap-10">

				<div class="col-span-2 xl:pr-64 body-content">
					<?php the_content(); ?>
				</div>

				<div>
					<?php get_template_part('partials/appointment-form'); ?>
				</div>

			</div>
		</div>
	</article>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
