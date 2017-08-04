<div class="appt-form">
	<h3 class="title__h4"><?php the_field('appointment_form_block_title', 'option'); ?></h3>
	<p><?php the_field('appointment_form_block_content', 'option'); ?></p>
	<?php Ninja_Forms()->display( 2 ); ?>

	<!-- <form>
		<div class="form-item">
			<label for="">Name</label>
			<input type="text" placeholder="Name" />
		</div>
		<div class="form-two-col">
			<div class="form-item">
				<label for="">Email</label>
				<input type="email" placeholder="Email" />
			</div>
			<div class="form-item">
				<label for="">Phone</label>
				<input type="text" placeholder="Phone" />
			</div>
		</div>
		<div class="form-item">
			<label for="">Best Time to Call</label>
			<input type="text" placeholder="Best Time to Call" />
		</div>
		<div class="form-item">
			<input type="submit" value="Send Request" class="btn btn--dk-blue btn__appt-form" />
		</div>
	</form> -->
</div>
