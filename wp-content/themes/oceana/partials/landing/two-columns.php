<?php
	$bg_color = get_sub_field('background_color');
	$eyebrow = get_sub_field('eyebrow');
	$title = get_sub_field('title');
	$subtitle = get_sub_field('subtitle');
?>

<section class="content-grid<?php if($bg_color == "tea"): ?> bg-tea<?php endif; ?>">
	<div class="container max-10-col py-20">

  <div>
    <?php if($eyebrow): ?>
      <p class="mb-2 text-eyebrow text-center">
        <?php echo $eyebrow; ?>
      </p>
    <?php endif; ?>

    <h2 class="max-6-col text-h2 text-center">
      <?php echo $title; ?>
    </h2>

    <?php if($subtitle): ?>
      <p class="mt-2 text-xl tracking-tight text-center">
        <?php echo $subtitle; ?>
      </p>
    <?php endif; ?>

    <ul class="flex">
			<li class="mr-32">
				<a href="#" class="btn">
					<?php the_field('phone_number', 'option'); ?>
				</a>
			</li>
			<li>
				<a href="#" class="btn btn-outline">
          Free Screening
				</a>
			</li>
		</ul>

  </div>

    <?php if( have_rows('blocks') ): ?>
      <div class="grid pt-12 <?php echo $grid_class; ?>">
        <?php while ( have_rows('blocks') ) : the_row();
          $title = get_sub_field('title');
          $content = get_sub_field('content');
          $cta = get_sub_field('cta');
          $cta_link = $cta['link'];
          $cta_label = $cta['label'];
        ?>

          <div class="<?php echo $grid_class; ?>">
            <h3 class="text-h4 mb-2 text-green-dk"><?php echo $title; ?></h3>
            <p><?php echo $content; ?></p>
            <?php if($cta_link): ?>
              <p class="mt-4">
                <a href="<?php echo $cta_link; ?>" class="cta-link">
                  <?php echo $cta_label; ?>
                </a>
              </p>
            <?php endif; ?>
          </div>

        <?php endwhile; ?>
      </div>
    <?php endif; ?>

	</div>
</section>
