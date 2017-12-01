<?php echo form_open('users/login', 'class="modal-content animate"' ); ?>
  <div class="container">
    <h1 class="text-center"><?= $title; ?></h1>
    <label></label>
    <input type="text" name="username" placeholder="Enter Username" required autofocus>
    <label></label>
    <input type="password" name="password" placeholder="Enter Password" required autofocus>
    <button type="submit">Login</button>
  </div>

<?php echo form_close(); ?>
