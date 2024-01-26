<?php
	$eyebrow = get_sub_field('eyebrow');
	$title = get_sub_field('title');
	$subtitle = get_sub_field('subtitle');
	$form = get_sub_field('form');
	$form_title = $form['title'];
	$form_star_label = $form['star_label'];
	$form_subtitle = $form['subtitle'];

	// $image_id = get_sub_field('image');
	// $image_src = wp_get_attachment_image_src($image_id, 'half-width', true);
	// $image_srcset = wp_get_attachment_image_srcset($image_id, 'half-width');
?>

<section class="hero home-hero bg-blue">
	<div class="container">

		<div class="grid--2">
			<div class="col-span-1 pt-16">

				<?php if($eyebrow): ?>
					<p class="mb-2 text-eyebrow">
						<?php echo $eyebrow; ?>
					</p>
				<?php endif; ?>

				<h1 class="max-w-lg pr-5 text-h1 text-green-dk">
					<?php echo $title; ?>
				</h1>

				<?php if($subtitle): ?>
					<p class="max-w-lg pr-5 mt-2 text-xl tracking-tight">
						<?php echo $subtitle; ?>
					</p>
				<?php endif; ?>

			</div>

			<div class="col-span-1">
				<div class="bg-white p-20 rounded-2xl">
					<h2 class="text-blue-dk text-h3 text-center">
						<?php echo $form_title; ?>
					</h2>
					<p class="text-blue-dk text-center">
						<?php echo $form_star_label; ?>
					</p>
					<p class="text-grey-dk text-center">
						<?php echo $form_subtitle; ?>
					</p>
					<div class="landing-form">
						<?php Ninja_Forms()->display( 2 ); ?>
					</div>
				</div>
			</div>
		</div>

	</div>
</section>

