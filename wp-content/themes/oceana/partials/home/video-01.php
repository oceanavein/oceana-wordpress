<?php
	$video_title = get_field('video_1_title');
?>

<section class="home-video bg-blue">
	<div class="container">

		<h2 class="text-h2 text-center mb-32">
			<?php echo $video_title; ?>
		</h2>

		<div class="video-wrapper">
			<?php
				// Load value.
				$iframe = get_field('video_1_video');

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
		</div>

	</div>
</section>