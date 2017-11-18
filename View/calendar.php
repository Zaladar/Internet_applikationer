<!DOCTYPE html>
<html lang="en">
    <head>
      <title>Calendar</title>
      <link rel="stylesheet" href="/css/stylesheet.css">
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script>
        var logchk = '<?php echo $_SESSION['is_login']; ?>';
      </script>
      <script src="/Script/isloggedin.js"></script>
      <script src="/Script/loginclose.js"></script>
   </head>
   <body>
     <header>
       <h1> Tasty Recipies</h1>
     </header>
     <nav>
        <ul>
          <li><a href="/index.php">Home</a></li>
          <li><a href="/View/Recipies/recipies.php">Recipies</a></li>
          <li><a class="active" href="#">Calendar</a></li>
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
      <div style="width: 100%">
      <div class="month">
         <ul>
             <li>November</li>
             <li>2017</li>
         </ul>
      </div>
      <div class="marg">
        <div class="week">
          <ul class="days">
            <li>1</li>
            <li>2</li>
            <li>3</li>
            <li>4</li>
            <li>5</li>
            <li>6</li>
            <li class="active">7</li>
          </ul>
        </div>
        <br class="clr"/>
        <div class="week">
          <ul class="days">
            <li>8</li>
            <li>9</li>
            <li>10</li>
            <li>11</li>
            <li>12</li>
            <li>13 <br/>
              <a href="/View/Recipies/meatballs.php">
                <img src="/Images/meatballs.jpg" alt="Meatballs">
              </a>
            </li>
            <li>14</li>
          </ul>
        </div>
        <br class="clr"/>
        <div class="week">
          <ul class="days">
            <li>15</li>
            <li>16</li>
            <li>17</li>
            <li>18</li>
            <li>19</li>
            <li>20</li>
            <li>21</li>
          </ul>
        </div>
        <br class="clr"/>
        <div class="week">
          <ul class="days">
            <li>22</li>
            <li>23 <br/>
              <a href="/View/Recipies/pancakes.php">
                <img src="/Images/pancakes.jpg" alt="Pancakes" >
              </a>
            </li>
            <li>24</li>
            <li>25</li>
            <li>26</li>
            <li>27</li>
            <li>28</li>
          </ul>
        </div>
        <br class="clr"/>
        <div class="week">
          <ul class="days">
            <li>29</li>
            <li>30</li>
            <li>31</li>
          </ul>
        </div>
        <br class="clr"/>
      </div>
    </div>
    <script src="/Script/isloggedin.js"></script>
  </body>
</html>
