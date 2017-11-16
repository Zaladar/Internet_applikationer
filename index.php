<!DOCTYPE html>
<html lang="en">
    <?php
    session_start();
    ?>
    <head>
      <title>Tasty recipies</title>
      <link rel="stylesheet" href="/css/stylesheet.css">
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script>
        var logchk = '<?php echo $_SESSION['is_login']; ?>';
      </script>
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
          <li id="loginbtn"><a href="#" onclick="document.getElementById('login').style.display='block'">Login</a></li>
          <li id="logoutbtn"><a href="/Model/logout.php">Logout</a></li>
          <!--<li style="float:right"><a href="#about">About</a></li>-->
        </ul>
      </nav>
      <br class="clr"/>
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
        <div class="marg">
          <h2>Welcome to tasty recipies</h2>
          <p>
              Try out the meatballs and taters precious!
              These recipies are the cheapest you will find no other recipies can
              compare we promies on the precious!
          </p>
          <p>
             This page started with a pancake and has since then developed in
             to two full meals the taters with meatballs and the pancakes with
             jammers! This precious is the finest of meals nothing better unless
             its raw fish wriggling and fresh!
          </p>
          <p>
            Use the nav-bar uptop to visit the calendar or the recipies pages
            for further pleasure.
          </p>
        </div>
      </div>
      <script src="/Script/loginclose.js"></script>
      <script src="/Script/isloggedin.js"></script>
   </body>
</html>
