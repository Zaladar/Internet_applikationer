<!DOCTYPE html>
<html lang="en">
    <?php
    session_start();
    ?>
    <head>
      <title>Recipes</title>
      <link rel="stylesheet" href="/css/stylesheet.css">
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script>
        var logchk = '<?php echo $_SESSION['is_login']; ?>';
      </script>
      <script src="/Script/loginclose.js"></script>
   </head>
   <body>
     <header>
       <h1>Tasty Recipies</h1>
     </header>
     <nav>
        <ul>
          <li><a href="/index.php">Home</a></li>
          <li><a class="active" href="#">Recipies</a></li>
          <li><a href="/View/calendar.php">Calendar</a></li>
          <li id="regbtn"><a href="#" onclick="document.getElementById('register').style.display='block'">Register</a></li>
          <li id="loginbtn"><a href="#" onclick="document.getElementById('login').style.display='block'">Login</a></li>
          <li id="logoutbtn"><a href="/Model/logout.php">Logout</a></li>
          <!--<li style="float:right"><a href="#about">About</a></li>-->
        </ul>
      </nav>
      <br class="clr"/>
      <div id="register" class="modal">
        <form class="modal-content animate" action="/Model/register.php" method="post">
          <div class="container">
            <label></label>
            <input type="text" placeholder="Enter Username" name="username" required>
            <label></label>
            <input type="password" placeholder="Enter Password" name="password" required>
            <button type="submit">Register</button>
          </div>
        </form>
      </div>
      <div id="login" class="modal">
        <form class="modal-content animate" action="/Model/login.php" method="post">
          <div class="container">
            <label></label>
            <input type="text" placeholder="Enter Username" name="username" required>
            <label></label>
            <input type="password" placeholder="Enter Password" name="password" required>
            <button type="submit">Login</button>
          </div>
        </form>
      </div>
      <div>
      </div>
      <div>
        <div class="marg">
          <div>
            <h2>These are the current recipies!</h2>
            <ul>
              <li><a href="meatballs.php">Meatballs!</a> </li>
              <li><a href="pancakes.php">Pancakes!</a> </li>
            </ul>
          </div>
        </div>
      </div>
      <script src="/Script/loginclose.js"></script>
      <script src="/Script/isloggedin.js"></script>
   </body>
</html>
