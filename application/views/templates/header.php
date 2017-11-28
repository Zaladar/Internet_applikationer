<!DOCTYPE html>
<html lang="en">
    <?php
    session_start();
    ?>
    <head>
      <title>Tasty recipies</title>
      <!--<link rel="stylesheet" href="/css/stylesheet.css">
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script> var logchk = '<?php echo $_SESSION['is_login']; ?>';</script>
    </head>
    <body>
      <header>
        <h1> Tasty Recipies</h1>
      </header>
      <nav>
        <ul>
          <li><a class="active" href="#">Home</a></li>
          <li><a href="/View/Recipies/recipies.php">Recipies</a></li>
          <li><a href="/View/calendar.php">Calendar</a></li>
          <li id="regbtn"><a href="#" onclick="document.getElementById('register').style.display='block'">Register</a></li>
          <li id="loginbtn"><a href="#" onclick="document.getElementById('login').style.display='block'">Login</a></li>
          <li id="logoutbtn"><a href="/Model/logout.php">Logout</a></li>-->
          <!--<li style="float:right"><a href="#about">About</a></li>-->
        <!--</ul>
      </nav>
      <br class="clr"/>
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
-->
<body>
