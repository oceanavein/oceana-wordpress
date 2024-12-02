<?php get_header(); ?>

<?php
	$dr_link = get_field('blog_reviewed_by_link', 'option');
	$avatar_id = get_field('blog_avatar', 'option');
	$avatar_src = wp_get_attachment_image_src( $avatar_id, 'avatar' );
	$avatar_srcset = wp_get_attachment_image_srcset( $avatar_id, 'avatar' );
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<article class="post">
		<div class="hero-blog relative overflow-hidden bg-blue-pale">
			<div class="container relative z-10">

				<p class="mb-24">
					<a href="<?php echo get_bloginfo( 'url' ); ?>/blog/" class="flex items-center text-grey-dk">
						<svg class="w-6 h-6 mr-8">
							<use xlink:href="#icon-arrow-left" />
						</svg>
						Blog
					</a>
				</p>

				<h1 class="max-9-col text-h1 mb-6 text-blue-dk">
					<?php the_title(); ?>
				</h1>

				<div class="flex items-center gap-5 pt-40">
					<div class="overflow-hidden rounded-full">
						<img
							width="64"
							height="64"
							src="<?php echo $avatar_src[0]; ?>"
							srcset="<?php echo $avatar_srcset; ?>"
							sizes="64px"
							alt="Dr. Adam Isadore Avatar"
						>
					</div>

					<div>
						<p class="text-coal">
							Medically Reviewed by <a href="<?php echo $dr_link; ?>" class="text-coal underline">Dr. Adam Isadore, MD</a>.
						</p>
						<p class="text-sm">
							Vascular and Interventional Radiologist, Oceana Vein Specialists.
						</p>
					</div>
				</div>
			</div>

			<div class="hero-waves">
				<?php get_template_part( 'partials/svg/bg-waves' ); ?>
			</div>
		</div>

		<div class="container">
			<div class="grid lg:grid-cols-3 gap-10">

				<div class="lg:col-span-2 xl:pr-64 post-content">
					<?php the_content(); ?>
				</div>

				<div>
					<?php get_template_part('partials/appointment-form'); ?>
				</div>

			</div>
		</div>
	</article>

<?php endwhile; endif; ?>

<?php get_template_part( 'partials/blog/article-footer' ); ?>

<?php get_footer(); ?>
