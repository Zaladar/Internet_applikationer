<!DOCTYPE html>
<html lang="en">
    <head>
      <title>Recipes</title>
      <link rel="stylesheet" href="/css/stylesheet.css">
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
     <header>
       <h1>Tasty Recipies</h1>
     </header>
     <nav>
        <ul>
          <li><a href="/index.html">Home</a></li>
          <li><a class="active" href="#">Recipies</a></li>
          <li><a href="/View/calendar.html">Calendar</a></li>
          <!--<li style="float:right"><a href="#about">About</a></li>-->
        </ul>
      </nav>
      <br class="clr" />
      <div id="login" class="modal">
        <form class="modal-content animate" action="/Model/Login.php" method="post">
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
        <div class="marg">
          <div>
            <h2>These are the current recipies!</h2>
            <ul>
              <li><a href="meatballs.html">Meatballs!</a> </li>
              <li><a href="pancakes.html">Pancakes!</a> </li>
            </ul>
          </div>
        </div>
      </div>
   </body>
</html>
