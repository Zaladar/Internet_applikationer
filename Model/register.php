<?php
   include 'init/config.php';
   session_start();
   echo("what dis");
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form
        echo("now dis?");
        $myusername = mysqli_real_escape_string($conn,$_POST['username']);
        $mypassword = mysqli_real_escape_string($conn,$_POST['password']);
        //echo ("$_POST['username']");
        $sql = "SELECT username FROM user WHERE username = '$myusername'";
        $result = $conn->query($sql);
        //$row = $result->fetch_assoc();
        //$active = $row['active'];
        $count = $result->num_rows;
        echo ($count);
        if($count == 0) {

          $sql = "INSERT INTO user (username, password) VALUES ('$myusername', '$mypassword')";
          $_SESSION['result'] = 'Account created';
          $conn->close();
          //header("location: ../index.php");
        }
        else {
           $_SESSION['result'] = "Your userame is already in use";
           $conn->close();
           //header("location: ../index.php");
        }
   }
?>
