<?php
	$eyebrow = get_sub_field('eyebrow');
	$title = get_sub_field('title');
	$subtitle = get_sub_field('subtitle');
	$form = get_sub_field('form');
	$form_title = $form['title'];
	$form_star_label = $form['star_label'];
	$form_subtitle = $form['subtitle'];

	$image_id = get_sub_field('background');
	$image_src = wp_get_attachment_image_src($image_id, 'full-width-image-2x', true);
	$image_srcset = wp_get_attachment_image_srcset($image_id, 'full-width-image');
?>

<section id="hero" class="hero landing-hero bg-blue-dk">
	<img
		src="<?php echo $image_src[0]; ?>"
	/>

	<div class="container">

		<div class="grid lg:grid-cols-2 gap-10">
			<div class="mb-24 lg:mb-0 lg:pr-72 lg:pt-72">

				<?php if($eyebrow): ?>
					<p class="mb-8 text-h3 text-white">
						<?php echo $eyebrow; ?>
					</p>
				<?php endif; ?>

				<h1 class="max-w-lg mb-24 pr-5 text-h1 text-white">
					<?php echo $title; ?>
				</h1>

				<?php if($subtitle): ?>
					<p class="max-w-lg lg:pr-16 mt-2 text-lg tracking-tight text-white">
						<?php echo $subtitle; ?>
					</p>
				<?php endif; ?>

			</div>

			<div class="xl:pr-72">
				<div class="bg-blue-pale p-20 md:p-40 rounded-2xl shadow-image">
					<h2 class="text-blue-dk text-h3 text-center mb-12 md:mb-24">
						<?php echo $form_title; ?>
					</h2>
					<div class="md:flex justify-center items-center text-blue-dk text-center mb-12">
						<ul class="flex justify-center mr-8">
							<li>
								<svg class="icon-star icon-24">
									<use xlink:href="#icon-star" />
								</svg>
							</li>
							<li>
								<svg class="icon-star icon-24">
									<use xlink:href="#icon-star" />
								</svg>
							</li>
							<li>
								<svg class="icon-star icon-24">
									<use xlink:href="#icon-star" />
								</svg>
							</li>
							<li>
								<svg class="icon-star icon-24">
									<use xlink:href="#icon-star" />
								</svg>
							</li>
							<li>
								<svg class="icon-star icon-24">
									<use xlink:href="#icon-star" />
								</svg>
							</li>
						</ul>
						<p class="text-lg font-bold"><?php echo $form_star_label; ?></p>
					</div>
					<p class="text-grey-dk text-center mb-24">
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

