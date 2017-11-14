<?php
   include 'init/config.php';
   session_start();
   echo("its working sortof");

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form
        //$myusername = mysqli_real_escape_string($conn,$_POST['username']);
        //$mypassword = mysqli_real_escape_string($conn,$_POST['password']);
        echo ("$_POST['username']");
        //$sql = "SELECT username FROM user WHERE username = '$myusername' and password = '$mypassword'";
        //$result = $conn->query($sql);
        //$row = $result->fetch_assoc();
        //$active = $row['active'];
        //echo("$result");
        //$count = mysqli_num_rows($result);
        echo("DIS BORKED 1");

        // If result matched $myusername and $mypassword, table row must be 1 row

        if($count == 1) {
          echo("DIS BORKED 2");
           session_register("myusername");
           $_SESSION['login_user'] = $myusername;
           $conn->close();
           header("location: index.php");
        }

        else {
          echo("DIS didnt BORKED 2");
           $error = "Your Login Name or Password is invalid";
           $conn->close();
           header("location: index.php");
        }
   }

?>
