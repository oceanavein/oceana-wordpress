<?php
	$image_id = get_field('blog_article_footer_image', 'option');
	$image_src = wp_get_attachment_image_src( $image_id, 'eight-columns' );
	$image_srcset = wp_get_attachment_image_srcset( $image_id, 'eight-columns' );

	$content = get_field('blog_article_footer_content', 'option');
?>

<section class="article-footer bg-blue-pale">
	<div class="container">

		<div class="lg:grid grid-cols-3 gap-10 items-center">
			<div class="lg:col-span-2">
				<div class="shadow-image rounded overflow-hidden">
					<img
						src="<?php echo $image_src[0]; ?>"
						srcset="<?php echo $image_srcset; ?>"
						sizes="100vw, (min-width: 1024px) 840px"
						alt="Dr. Isadore in his Office"
						class="w-full"
					>
				</div>
			</div>
			<div class="body-content">
				<?php echo $content; ?>
			</div>
		</div>

	</div>
</section>
