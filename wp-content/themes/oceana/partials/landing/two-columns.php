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
      $colClasses = 'lg:pr-72';
    } else {
      $colClasses = 'lg:pl-72';
    }
  } elseif ($media_width == 'four-columns') {
    $colClasses = 'lg:pl-72 lg:pr-72';
  } else {
    if($media_side == 'left') {
      $colClasses = 'lg:pr-40';
    } else {
      $colClasses = 'lg:pl-40';
    }
  }
?>

<section id="<?php echo strtolower($title); ?>" class="two-column<?php if($bg_color == "blue-pale"): ?> bg-blue-pale<?php endif; ?>">
	<div class="container">

    <div class="lg:grid--2 gap-10">

      <div class="mb-48 lg:mb-0">
        <h2 class="mb-16 text-h1 text-blue-dk">
          <?php echo $title; ?>
        </h2>

        <?php if($content): ?>
          <p class="mb-32">
            <?php echo $content; ?>
          </p>
        <?php endif; ?>

        <?php if( $list_items ): ?>
          <ul class="landing-list mb-32<?php if($list_columns == "two"): ?> md:columns-2<?php endif; ?>">
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
            <div class="landing-video overflow-hidden rounded-2xl shadow-image">
            <?php
              // Load value.
              $iframe = $media['video'];

              // Use preg_match to find iframe src.
              preg_match('/src="(.+?)"/', $iframe, $matches);
              $src = $matches[1];

              // Add extra parameters to src and replace HTML.
              $params = array(
                'controls'  => 0,
                'hd'        => 1,
                'autohide'  => 1,
                'rel'       => 0,
                'modestbranding' => 1
              );
              $new_src = add_query_arg($params, $src);
              $iframe = str_replace($src, $new_src, $iframe);

              // Add extra attributes to iframe HTML.
              $attributes = 'frameborder="0" loading="lazy"';
              $iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);

              // Display customized HTML.
              echo $iframe;
            ?>

              <!-- <script src="https://www.youtube.com/iframe_api"></script> -->
              <?php //echo $media['video']; ?>
            </div>
          <?php } ?>
      </div>

    </div>

	</div>
</section>
