<div id="register" class="modal">
  <h2><?= $title ?></h2>
  <div class="container">
  <?php echo validation_errors(); ?>

  <?php echo form_open('users/register', 'class="modal-content animate"'); ?>


          <label></label>
  				<input type="text"  name="username" placeholder="Enter Username">
  				<label></label>
  				<input type="password" name="password" placeholder="Enter Password">
  			<button type="submit">Register</button>

  <?php echo form_close(); ?>
  </div>
</div>
