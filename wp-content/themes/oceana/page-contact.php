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
					<div class="sidebar-map sidebar-block">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13355.833641093324!2d-117.3286762!3d33.1889618!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfcc8d4614d4b3db3!2sOceana+Vein+Specialists!5e0!3m2!1sen!2sse!4v1504525936451" width="384" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<div class="sidebar-contact sidebar-block">
						<h4 class="sidebar-contact__title title__h4">Oceana Vein Clinic</h4>
						<p class="sidebar-contact__address"><?php the_field('office_address', 'option'); ?><br />
							<?php the_field('office_city', 'option'); ?>, <?php the_field('office_state', 'option'); ?> <?php the_field('office_zip', 'option'); ?></p>
						<p class="sidebar-contact__directions"><a href="">Directions</a></p>
						<p class="sidebar-contact__phone"><?php the_field('phone_number', 'option'); ?><br />
						<?php the_field('email_address', 'option'); ?></p>
					</div>

				</aside>

			</div>

		</div>
	</div>

<?php endwhile; endif; ?>

<?php $page = get_page_by_path('treatments'); ?>
<section class="payment-options bg__pale-blue">
  <div class="container">

		<div class="flex-grid payment-grid">
			<div class="col-span-6">
				<h3 class="section-title title__h2"><?php the_field('payment_section_title', $page->ID); ?></h3>
				<div class="body-content">
					<p><?php the_field('payment_section_content', $page->ID); ?></p>
				</div>
			</div>

			<?php if( have_rows('payment_options', $page->ID) ): ?>
		    <?php while ( have_rows('payment_options', $page->ID) ) : the_row(); ?>
					<div class="col-span-6">
						<div class="payment-grid__logo">
							<img src="<?php the_sub_field('logo', $page->ID); ?>" alt="" />
		        </div>
		        <div class="body-content">
		          <?php the_sub_field('description', $page->ID); ?>
		        </div>
		      </div>
		    <?php endwhile; ?>
			<?php endif; ?>
		</div>

  </div>
</section>

<?php get_footer(); ?>
