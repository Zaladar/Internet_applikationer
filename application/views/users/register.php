
<?php echo validation_errors(); ?>

<?php echo form_open('users/register'); ?>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<h1 class="text-center"><?= $title; ?></h1>
        <label></label>
				<input type="text" class="form-control" name="username" placeholder="Enter Username">
				<label></label>
				<input type="password" class="form-control" name="password" placeholder="Enter Password">
			<button type="submit" class="btn btn-primary btn-block">Submit</button>
		</div>
	</div>
<?php echo form_close(); ?>
