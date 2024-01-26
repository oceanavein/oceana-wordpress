<?php
	$video_title = get_field('video_2_title');
	$video_embed = get_field('video_2_video');
?>

<section class="home-video bg-blue">
	<div class="container">

		<h2 class="text-h2 text-center mb-32"><?php echo $video_title; ?></h2>

		<div class="video-wrapper">
			<?php echo $video_embed; ?>
		</div>

	</div>
</section>