<h2><?= $title ?></h2>
<div id="register" class="modal">
<?php echo validation_errors(); ?>

<?php echo form_open('users/register', 'class="modal-content animate"'); ?>
	<div class="container">
        <label></label>
				<input type="text"  name="username" placeholder="Enter Username">
				<label></label>
				<input type="password" name="password" placeholder="Enter Password">
			<button type="submit">Register</button>
	</div>
<?php echo form_close(); ?>
</div>
