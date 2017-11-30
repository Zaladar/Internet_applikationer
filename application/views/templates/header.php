<html>
  <head>
      <title>hello world</title>
      <link rel = "stylesheet" type = "text/css" href = "/css/stylesheet.css">
  </head>
  <body>
    <header>
      <h1> Tasty Recipies</h1>
    </header>
    <nav>
      <ul>
        <li><a class="active" href="<?php echo base_url();?>">Home</a></li>
        <li><a href="<?php echo base_url();?>index.php/recipes">Recipes</a></li>
        <li><a href="<?php echo base_url();?>index.php/calendar">Calendar</a></li>
        <?php if(!$this->session->userdata('logged_in')) : ?>
          <li><a href="<?php echo base_url(); ?>index.php/users/login">Login</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/users/register">Register</a></li>
        <?php endif; ?>
        <?php if($this->session->userdata('logged_in')) : ?>
          <li><a href="<?php echo base_url(); ?>index.php/users/logout">Logout</a></li>
        <?php endif; ?>
      </ul>
    </nav>
