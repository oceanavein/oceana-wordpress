<?php /* Template Name: Contact Us */ ?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="page-wrapper">
		<div class="container">

			<div class="flex-row">

				<section class="page-content col-span-8">
					<h1 class="page-title title__h1"><?php the_title(); ?></h1>
					<div class="body-content">
						<?php the_content(); ?>
					</div>
				</section>

				<aside class="page-sidebar col-span-4">

				</aside>

			</div>

		</div>
	</div>

<?php endwhile; endif; ?>

<?php $page = get_page_by_path('treatments'); ?>
<section class="payment-options bg__pale-blue">
  <div class="container">

    <header class="section-header">
      <h3 class="title__h2"><?php the_field('payment_section_title', $page->ID); ?></h3>
      <p><?php the_field('payment_section_content', $page->ID); ?></p>
    </header>

		<?php if( have_rows('payment_options', $page->ID) ): ?>
			<div class="flex-grid payment-grid">
		    <?php while ( have_rows('payment_options', $page->ID) ) : the_row(); ?>
					<div class="col-span-6">
						<div class="payment-grid__logo">
							img
		        </div>
		        <div class="body-content">
		          <?php the_sub_field('description', $page->ID); ?>
		        </div>
		      </div>
		    <?php endwhile; ?>
			</div>
		<?php endif; ?>

  </div>
</section>

<?php get_footer(); ?>
