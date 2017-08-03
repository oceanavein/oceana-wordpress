<?php /* Template Name: Treatments */ ?>

<?php get_header(); ?>

<section class="hero page-hero treatments-hero bg__pale-blue">
	<div class="container">

		<div class="flex-row">
			<div class="col-span-8">
				<h1 class="page-title title__h1"><?php the_title(); ?></h1>
				<div class="section-content">
					<?php the_field('hero_content'); ?>
				</div>
			</div>

			<div class="col-span-4">
				<?php get_template_part('partials/appointment-form'); ?>
			</div>
		</div>

		<div class="anchor-link">
			<a href="#treatments">
				<span class="anchor-link__label">View Treatments</span>
				<svg class="icon-arrow-down">
					<use xlink:href="#icon-arrow-down"></use>
				</svg>
			</a>
		</div>

	</div>
</section>

<section class="treatments-image">
  <img src="" alt="Oceana Treatments" />
</section>

<section class="treatments-list">
  <div class="container">

		<?php if( have_rows('treatments') ): ?>
			<div class="flex-grid treatments-grid">
		    <?php while ( have_rows('treatments') ) : the_row(); ?>
					<div class="col-span-6">
		        <h2 class="title__h3"><?php the_sub_field('title'); ?></h2>
		        <div class="body-content">
		          <?php the_sub_field('description'); ?>
		          <p><a href="" class="cta-link">Learn More</a></p>
		        </div>
		      </div>
		    <?php endwhile; ?>
			</div>
		<?php endif; ?>

  </div>
</section>

<section class="payment-options bg__pale-blue">
  <div class="container">

    <header class="section-header">
      <h3 class="title__h2">Payment Plan Options</h3>
      <p>We understand that individual financial situations may make it prohibitive to receive treatment for their venous disease. We accept flexible payment plans through third party vendors such as Care Credit and Prosper Healthcare Lending.</p>
    </header>

    <div class="flex-grid payment-grid">
      <div class="col-span-6 payment-grid--care-credit">
        <div class="payment-grid__logo">
          <img src="/dist/images/logo-carecredit.svg" alt="" />
        </div>
        <div class="body-content">
          <p>Care Credit gives you flexibility and convenience to manage out of pocket expenses. It may be used for dental care, cosmetic treatment, and vein procedures. Oceana Vein Specialists is offering 12 months with no interest if paid in full by the term date. Once you apply online or over the phone, you will receive an answer almost immediately. You may begin treatment even before you get your medical credit card. You’ll just need to have the number given to you by Care Credit on hand.</p>
          <p>To apply for Care Credit, please click here and follow the directions when prompted or call 1-800-365-8295.</p>
        </div>
      </div>

      <div class="col-span-6">
        <div class="payment-grid__logo payment-grid--prosper">
          <img src="/dist/images/logo-prosper.png" alt="" />
        </div>
        <div class="body-content">
          <p>Prosper Healthcare Lending is a medical loan company that helps patients afford medical services. Prosper offers loans with an APR range from 7%-20% depending on your credit score. It has an easy step-by-step process and you are able to choose terms up to 84 months. Once you are approved for the loan, the funds are provided to you in your own bank account to use for health expenses.</p>
          <p>To apply online, click here or call 1.800.625.7412 ext. 2</p>
        </div>
      </div>
    </div>

  </div>
</section>

<?php get_template_part('partials/cta-section'); ?>

<?php get_footer(); ?>
