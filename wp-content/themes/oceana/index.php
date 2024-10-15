<?php get_header(); ?>

<div class="page-wrapper">
	<div class="container">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<h1 class="">
				<a href="<?php the_permalink(); ?>">
					<?php the_title(); ?>
				</a>
			</h1>

		<?php endwhile; endif; ?>

	</div>
</div>
<?php get_footer(); ?>
