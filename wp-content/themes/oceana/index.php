<?php get_header(); ?>

<?php
	$title = get_field('blog_title', 'option');

	$avatar_id = get_field('blog_avatar', 'option');
	$avatar_src = wp_get_attachment_image_src( $avatar_id, 'avatar' );
	$avatar_srcset = wp_get_attachment_image_srcset( $avatar_id, 'avatar' );
?>

<div class="hero-blog relative overflow-hidden bg-blue-pale">
	<div class="container relative z-10">
		<h1 class="text-h1 text-blue-dk">
			<?php echo $title; ?>
		</h1>

		<?php
			$categories = get_categories();

			if ( ! empty( $categories ) ) {
					echo '<ul class="flex gap-5 mt-16">';
					foreach ( $categories as $category ) {
						if( $category->name != "Uncategorized" ) {
							echo '<li class="post-cat">';
							echo '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '">' . esc_html( $category->name ) . '</a>';
							echo '</li>';
						}
					}
					echo '</ul>';
			} else {
					echo 'No categories found.';
			}
		?>
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
