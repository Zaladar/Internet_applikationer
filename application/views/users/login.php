<?php echo form_open('users/login', 'class="modal-content animate"' ); ?>
<div class="row">
  <div class="col-md-4 col-md-offset-4">
    <h1 class="text-center"><?php echo $title; ?></h1>
    <div class="form-group">
      <input type="text" name="username" class="form-control" placeholder="Enter Username" required autofocus>
    </div>
    <div class="form-group">
      <input type="password" name="password" class="form-control" placeholder="Enter Password" required autofocus>
    </div>
    <button type="submit" class="btn btn-primary btn-block">Login</button>
  </div>
</div>

<div class="modal">
  <form class="modal-content animate" action="/Model/login.php" method="post">
    <div class="container">
        <label></label>
        <input type="text" placeholder="Enter Username" name="username" required autofocus>
        <label></label>
        <input type="password" placeholder="Enter Password" name="password" required autofocus>
      <button type="submit">Login</button>
    </div>
  </form>
</div>
<?php echo form_close(); ?>
