<?php
   include("Init/config.php");
   session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form
      echo("DIS BORKED 1");
      $myusername = mysqli_real_escape_string($conn,$_POST['username']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']);

      $sql = "SELECT username FROM users WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];

      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count == 1) {
          echo("DIR BORKED 2");
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         $conn->close();
         $_SESSION['lol'] = 'yes';
         header("location: index.php");
      }else {
          echo("DIR DIDNT BORKED 2");
         $error = "Your Login Name or Password is invalid";
         $conn->close();
         header("location: index.php");
      }
   }
?>
