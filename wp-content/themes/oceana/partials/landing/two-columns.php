<?php
	$bg_color = get_sub_field('background_color');
	$title = get_sub_field('title');
	$content = get_sub_field('content');
	$list = get_sub_field('list');
  $list_columns = $list['columns'];
  $list_items = $list['items'];

	$media = get_sub_field('media');
  $media_side = $media['side'];
  $media_width = $media['width'];
  $media_type = $media['type'];

  if($media_type == 'image') {
    $image_id = $media['image'];
    $image_src = wp_get_attachment_image_src($image_id, $media_width, true);
    $image_srcset = wp_get_attachment_image_srcset($image_id, $media_width);
  }

  if($media_width == 'five-columns') {
    if($media_side == 'left') {
      $colClasses = 'pr-72';
    } else {
      $colClasses = 'pl-72';
    }
  } elseif ($media_width == 'four-columns') {
    $colClasses = 'pl-72 pr-72';
  } else {
    if($media_side == 'left') {
      $colClasses = 'pr-40';
    } else {
      $colClasses = 'pl-40';
    }
  }
?>

<section id="<?php echo strtolower($title); ?>" class="two-column<?php if($bg_color == "blue-pale"): ?> bg-blue-pale<?php endif; ?>">
	<div class="container">

    <div class="grid--2 gap-10">

      <div>
        <h2 class="mb-16 text-h1 text-blue-dk">
          <?php echo $title; ?>
        </h2>

        <?php if($content): ?>
          <p class="mb-32">
            <?php echo $content; ?>
          </p>
        <?php endif; ?>

        <?php if( $list_items ): ?>
          <ul class="landing-list mb-32<?php if($list_columns == "two"): ?> columns-2<?php endif; ?>">
            <?php foreach( $list_items as $list_item ): ?>
              <?php $item = $list_item['item']; ?>
              <li class="flex mb-16 text-lg font-bold">
                <div class="shrink-0 bg-blue-md blue-checkmark">
                  <svg class="icon-checkmark">
                    <use xlink:href="#icon-checkmark" />
                  </svg>
                </div>
                <div class="pt-4">
                  <?php echo $item; ?>
                </div>
              </li>
            <?php endforeach; ?>
          </ul>
        <?php endif; ?>

        <?php get_template_part( 'partials/landing/cta-buttons' ); ?>

      </div>

      <div class="<?php echo $colClasses; ?><?php if($media_side == 'left'):?> order-first<?php endif; ?>">
          <?php if($media_type == 'image') { ?>
            <div class="overflow-hidden rounded-2xl bg-white shadow-image">
              <img
                src="<?php echo $image_src[0]; ?>"
                srcset="<?php echo esc_attr( $image_srcset ); ?>"
                loading="lazy"
              />
            </div>
          <?php } else { ?>
            <div class="landing-video shadow-image">
              <script src="https://www.youtube.com/iframe_api"></script>
              <?php echo $media['video']; ?>
            </div>
          <?php } ?>
      </div>

    </div>

	</div>
</section>
