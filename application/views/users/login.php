<h2><?= $title?></h2>
<div id="login" class="modal">
  <?php echo form_open('users/login', array('class="modal-content animate"') ); ?>
    <div class="container">
        <label></label>
        <input type="text" placeholder="Enter Username" name="username" required autofocus>
        <label></label>
        <input type="password" placeholder="Enter Password" name="password" required autofocus>
      <button type="submit">Login</button>
    </div>
  <?php echo form_close(); ?>
</div>
