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
        <li><a href="/View/Recipies/recipies.php">Recipies</a></li>
        <li><a href="/View/calendar.php">Calendar</a></li>
        <li id="regbtn"><a href="#" onclick="document.getElementById('register').style.display='block'">Register</a></li>
        <li id="loginbtn"><a href="#" onclick="document.getElementById('login').style.display='block'">Login</a></li>
        <li id="logoutbtn"><a href="/Model/logout.php">Logout</a></li>
        <!--<li style="float:right"><a href="#about">About</a></li>-->
      </ul>
    </nav>
