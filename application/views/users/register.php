


<?php echo form_open('users/register', 'class="modal-content animate"'); ?>
	<div class="container">
		<h1 class="text-center"><?= $title; ?></h1>
	  <label></label>
		<input type="text" name="username" placeholder="Enter Username">
		<label></label>
		<input type="password" name="password" placeholder="Enter Password">
		<button type="submit">Register</button>
	</div>
<?php echo form_close(); ?>
