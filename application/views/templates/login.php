<div id="register" class="modal">
  <?php
  //create form open tag
  $attributes = array('class'=>"modal-content animate");
  echo form_open('controllers/User/new_user_registration', $attributes);
  //<form method="post" accept-charset="utf-8" action="http://example.com/index.php/email/send">
  ?>

  //create label
  <div class="container">
  <?php
  echo form_label('');

  //create name input field
  $data_uname = array(
  'name' => 'username',
  'placeholder' => 'Enter Username',
  'required' => 'required'
  );
  echo form_input($data_uname);
  /*echo "<br>";
  echo "<br>";*/
  echo form_label('');

  //create password input field
  $data_pwd = array(
  'name' => 'password',
  'placeholder' => 'Enter Password',
  'required' => 'required'
  );
  echo form_password($data_pwd);
  ?>
  </div>
  <button>Login
  <?php echo form_submit('submit', ''); ?>
  </button>

  <?php
  //Form close.
  echo form_close(); ?>
</div>
<div id="login" class="modal">
  <?php
  //create form open tag
  $attributes = array('class'=>"modal-content animate");
  echo form_open('controllers/User/user_login_process', $attributes);
  //<form method="post" accept-charset="utf-8" action="http://example.com/index.php/email/send">
  ?>

  //create label
  <div class="container">
  <?php
  echo form_label('');

  //create name input field
  $data_uname = array(
  'name' => 'username',
  'placeholder' => 'Enter Username',
  'required' => 'required'
  );
  echo form_input($data_uname);
  /*echo "<br>";
  echo "<br>";*/
  echo form_label('');

  //create password input field
  $data_pwd = array(
  'name' => 'password',
  'placeholder' => 'Enter Password',
  'required' => 'required'
  );
  echo form_password($data_pwd);
  ?>
  </div>
  <button>Login
  <?php echo form_submit('submit', ''); ?>
  </button>

  <?php
  //Form close.
  echo form_close(); ?>
  </div>
</div>
