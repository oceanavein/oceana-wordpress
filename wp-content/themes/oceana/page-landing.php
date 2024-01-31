<?php /* Template Name: Landing */ ?>

<?php get_header('landing'); ?>

<?php // Check value exists.
if( have_rows('sections') ):
	while ( have_rows('sections') ) : the_row();

		if( get_row_layout() == 'hero' ):
			get_template_part( 'partials/landing/hero' );

		elseif( get_row_layout() == 'two_columns' ):
			get_template_part( 'partials/landing/two-columns' );

		elseif( get_row_layout() == 'one_column' ):
			get_template_part( 'partials/landing/one-column' );

		elseif( get_row_layout() == 'before_after' ):
			get_template_part( 'partials/landing/before-after' );

		elseif( get_row_layout() == 'reviews' ):
			get_template_part( 'partials/reviews' );

		endif;

	endwhile;
else :
		// Do something...
endif;
?>

<?php get_template_part('partials/home/map'); ?>

<?php get_footer('landing'); ?>
