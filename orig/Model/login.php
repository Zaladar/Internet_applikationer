<?php
   include 'init/config.php';
   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form
        $myusername = mysqli_real_escape_string($conn,$_POST['username']);
        $mypassword = mysqli_real_escape_string($conn,$_POST['password']);
        //echo ("$_POST['username']");
        $sql = "SELECT username FROM user WHERE username = '$myusername' and password = '$mypassword'";
        $result = $conn->query($sql);
        //$row = $result->fetch_assoc();
        //$active = $row['active'];
        $count = $result->num_rows;

        if($count == 1) {
           //session_register("myusername");
           $_SESSION['login_user'] = $myusername;
           $_SESSION['is_login'] = true;
           $_SESSION['result'] = "Login sucessfull";
           $conn->close();
           header("location: ../index.php");
        }

        else {
           $_SESSION['result'] = "Login unsucessfull";
           $conn->close();
           header("location: ../index.php");
        }
   }

?>