<?php get_header(); ?>

	<h1><?php single_tag_title(); ?></h1>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<h2><a href="<?php echo get_permalink($post->ID) ?>"><?php the_title() ?></a></h2>

	<?php endwhile; ?>

	<?php else : ?>

		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

	<?php endif; ?>

<?php get_footer(); ?>
