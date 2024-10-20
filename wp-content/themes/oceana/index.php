<?php get_header(); ?>

<div class="hero bg-blue-pale">
	<div class="container">
		<h1 class="text-h1 text-blue-dk">
			The Oceana Blog
		</h1>
	</div>
</div>

<div class="page-wrapper">
	<div class="container">

		<?php if ( have_posts() ): ?>
			<div class="grid grid--3 gap-8">
				<?php while ( have_posts() ): the_post(); ?>

					<div class="post-card ">
						<div class="post-thumb overflow-hidden mb-24 rounded">
							<?php if ( has_post_thumbnail() ) { ?>
								<?php
									$image_id = get_post_thumbnail_id( get_the_ID() );
									$image_src = wp_get_attachment_image_src( $image_id, 'post-thumb' );
									$image_srcset = wp_get_attachment_image_srcset( $image_id, 'post-thumb' );
								?>
								<a href="<?php the_permalink(); ?>">
									<img
										src="<?php echo $image_src[0]; ?>"
										srcset="<?php echo $image_srcset; ?>"
										sizes="386px"
										alt="<?php echo esc_html( get_the_title() ); ?> Thumbnail"
										class="w-full"
									>
								</a>
							<?php } else { ?>
									No featured image
							<?php } ?>
						</div>

						<?php
							$categories = get_the_category();

							if ( ! empty( $categories ) ) {
								foreach ( $categories as $category ) {
									if( $category->name != "Uncategorized" ) {
										echo '<p class="post-cat mb-8">' . esc_html( $category->name ) . '</p>';
									}
								}
							} else {
								echo 'No categories found.';
							}
						?>

						<h2 class="text-h4">
							<a href="<?php the_permalink(); ?>">
								<?php the_title(); ?>
							</a>
						</h2>
					</div>

				<?php endwhile; ?>
			</div>

			<?php post_navigation(); ?>

		<?php endif; ?>

	</div>
</div>
<?php get_footer(); ?>
