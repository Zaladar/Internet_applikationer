<!DOCTYPE html>
<html lang="en">
    <head>
      <title>Pancakes</title>
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
        <li><a href="/View/Recipies/recipies.php">Recipies</a></li>
        <li><a href="/View/calendar.php">Calendar</a></li>
        <li id="loginbtn"><a href="#" onclick="document.getElementById('login').style.display='block'">Login</a></li>
        <li id="logoutbtn"><a href="/Model/logout.php">Logout</a></li>
        <!--<li style="float:right"><a href="#about">About</a></li>-->
      </ul>
    </nav>
    <br class="clr"/>
    <div id="login" class="modal">
      <form class="modal-content animate" action="../../Model/Login.php" method="post">
        <div class="container">
          <label></label>
          <input type="text" placeholder="Enter Username" name="uname" required>
          <label></label>      <script src="/Script/loginclose.js"></script>

          <input type="password" placeholder="Enter Password" name="psw" required>
          <button type="submit">Login</button>
        </div>
      </form>
    </div>
    <div>
      <div class="row">
        <h2>Pancakes!</h2>
        <div class="column">
          <img style="max-width:100%" src="/Images/pancakes.jpg" alt="Pancakes">
        </div>
        <div class="column">
          <h3>Ingredients</h3>
          <ul>
            <li>Premade pancakes 1 kg</li>
            <li>Raspberry jam 5 dl</li>
            <li>Whipped cream 1 can</li>
            <li>raspberrys 500 g</li>
            <li>gargantuan nanner 1</li>
          </ul>
          <h3>Directives</h3>
          <ol>
            <li>PUT THEM PANCAKERS ON A PLATE</li>
            <li>MICROWAVE DEM CAKERS</li>
            <li>POUR THAT JEM <i> on cakers.. gently precious</i></li>
            <li>SPLOOSH THAT CREAM</li>
            <li>SLICE DAT BERNERNER PRECIOUS</li>
            <li>PUT DEM NANNERS ON DEM CAKERS</li>
          </ol>
        </div>
        <div class="column">
          <div class="comments">
            <h3>Comments</h3>
            <div class="ucomment">
                <small><?php  ?></small></small><small>date: 2017-11-07</small><br/>
                <p>I wants it precious!</p>
            </div>
          </div>
          <div class="comments">
            <div class="ucomment">
                <small>Name: Deagol</small>
                <small style="text-align:right">date: 2017-11-09</small><br/>
                <p>It's mine I found it!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br class="clr"/>
    <script src="/Script/isloggedin.js"></script>
  </body>
</html>
