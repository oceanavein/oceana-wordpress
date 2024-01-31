<?php
	$title = get_sub_field('title');
	$images = get_sub_field('images');

  // var_dump($images);
?>

<section class="section before-after bg-blue">
	<div class="container">

    <h2 class="max-8-col mx-auto text-h1 text-center mb-72">
      <?php echo $title; ?>
    </h2>

    <?php if( $images ): ?>
      <div class="grid--3 mb-72">
        <?php foreach( $images as $image ): ?>
          <?php
            $image_id = $image['image'];
            $image_src = wp_get_attachment_image_src($image_id, 'landing-before-after', true);
            $image_srcset = wp_get_attachment_image_srcset($image_id, 'landing-before-after');
          ?>
          <div class="overflow-hidden rounded-2xl">
            <img
              src="<?php echo $image_src[0]; ?>"
              srcset="<?php echo esc_attr( $image_srcset ); ?>"
              loading="lazy"
            />
          </div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>

    <div class="flex justify-center">
      <?php get_template_part( 'partials/landing/cta-buttons' ); ?>
    </div>

	</div>
</section>
