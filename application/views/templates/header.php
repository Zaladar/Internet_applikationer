<html>
  <head>
      <title>Tasty Recipes</title>
      <link rel = "stylesheet" type = "text/css" href = "/css/stylesheet.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <header>
      <h1> Tasty Recipies</h1>
    </header>
    <nav>
      <ul>
        <li class="active"><a  href="<?php echo base_url();?>">Home</a></li>
        <li><a href="<?php echo base_url();?>recipes">Recipes</a></li>
        <li><a href="<?php echo base_url();?>calendar">Calendar</a></li>
        <?php if(!$this->session->userdata('logged_in')) : ?>
          <li id="regbtn"><a href="<?php echo base_url(); ?>users/register">Register</a></li>
          <li id="loginbtn"><a href="<?php echo base_url(); ?>users/login">Login</a></li>
        <?php endif; ?>
        <?php if($this->session->userdata('logged_in')) : ?>
          <li id="logoutbtn"><a href="<?php echo base_url(); ?>users/logout">Logout</a></li>
        <?php endif; ?>
      </ul>
    </nav>
    <br class="clr"/>
