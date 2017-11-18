<!DOCTYPE html>
<html lang="en">
    <head>
      <title>Meatballs</title>
      <link rel="stylesheet" href="/css/stylesheet.css">
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script> var logchk = '<?php echo $_SESSION['is_login']; ?>';</script>
      <script src="/Script/loginclose.js"></script>
      <script src="/Script/isloggedin.js"></script>
      <script> var uname='<?php echo($_SESSION['login_user'])?>'</script>

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
      <div class="row">
        <h2>Meatballs!</h2>
        <div class="column">
          <img style="max-width:100%" src="/Images/meatballs.jpg" alt="Meatballs">
        </div>
        <div class="column">
          <h3>Ingredients</h3>
          <ul>
            <li>meatballs 500 g</li>
            <li>SQUISHED TATERS! 1KG</li>
            <li>BROWNSAUCE 1L</li>
            <li>lingon berries 500 g</li>
            <li>tiny swedish fleg</li>
          </ul>
          <h3>Directives</h3>
          <ol>
            <li>BOIL DEM TATERS</li>
            <li>MASH 'EM, STICK 'EM IN A STEW</li>
            <li>FRY DEM BALLERS</li>
            <li>put on plate <i>gently...</i></li>
            <li>POUR THAT SAUCE <i>on  taters precious</i></li>
            <li>POUR DEM LINGENBERRIES ALL OVER</li>
            <li>PUT FLEG ON TATERS PRECIOUS</li>
          </ol>
        </div>
        <div class="column">
          <h3>Comments</h3>
          <?php include '../../Model/comment.php'; ?>
          <div class="comments">
            <form class="comm" action="/Model/commentinput.php" method="post">
              <div class="ucomment">
                <label></label>
                <input type="text" placeholder="Enter comment" name="comment" style="height 60 px" required>
                <input type="hidden" name="recipie" value="meatballs">
                <button id="smallbtn" type="submit">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <br class="clr"/>
  </body>
</html>
