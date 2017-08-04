<div class="appt-form">
	<h3 class="title__h4"><?php the_field('appointment_form_block_title', 'option'); ?></h3>
	<p><?php the_field('appointment_form_block_content', 'option'); ?></p>
	<?php Ninja_Forms()->display( 3 ); ?>
</div>
