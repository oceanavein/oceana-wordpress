<?php
	$title = get_sub_field('title');
?>

<section class="section one-column">
	<div class="container">

    <h2 class="max-8-col mx-auto text-h1 text-blue-dk text-center mb-24">
      <?php echo $title; ?>
    </h2>

    <div class="flex justify-center">
      <?php get_template_part( 'partials/landing/cta-buttons' ); ?>
    </div>

	</div>
</section>
