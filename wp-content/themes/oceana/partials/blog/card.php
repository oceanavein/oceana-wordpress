<div class="post-card mb-16 md:mb-48">
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
			echo '<ul class="flex gap-5 mb-8">';
			foreach ( $categories as $category ) {
				if( $category->name != "Uncategorized" ) {
					echo '<li class="post-cat">' . esc_html( $category->name ) . '</li>';
				}
			}
			echo '</ul>';
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
