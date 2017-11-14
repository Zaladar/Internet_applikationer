<?php
   include "Init/config.php";
   session_start();
   if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: "
  }
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form
        /*$myusername = mysqli_real_escape_string($conn,$_POST['username']);
        $mypassword = mysqli_real_escape_string($conn,$_POST['password']);*/

        $sql = "SELECT username FROM user WHERE username = '$_POST['username']' and password = '$_POST['password']'";
        $result = $conn->query($sql);
        $result ->num_rows;
        $row = $result->fetch_assoc();
        $active = $row['active'];

        $count = mysqli_num_rows($result);
        echo("DIS BORKED 1");

        // If result matched $myusername and $mypassword, table row must be 1 row

        if($count == 1) {
          echo("DIS BORKED 2");
           session_register("myusername");
           $_SESSION['login_user'] = $myusername;
           $conn->close();
           $_SESSION['lol'] = 'yes';
           header("location: index.php");
        }

        else {
          echo("DIS didnt BORKED 2");

           $error = "Your Login Name or Password is invalid";
           $conn->close();
           header("location: index.php");
        }*/
   }

?>
