<?php
   include 'init/config.php';
   session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form
        /*$myusername = mysqli_real_escape_string($conn,$_POST['username']);
        $mypassword = mysqli_real_escape_string($conn,$_POST['password']);*/
        /*$sql = "SELECT username FROM user WHERE username = '$_POST['username']' and password = '$_POST['password']'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $active = $row['active'];
        echo("$result");
        $count = mysqli_num_rows($result);
        echo("DIS BORKED 1");*/

        // If result matched $myusername and $mypassword, table row must be 1 row

        if($count == 1) {
           session_register("myusername");
           $_SESSION['login_user'] = $myusername;
           header("location: index.php");
        }

        else {
          $error = "Your Login Name or Password is invalid";
           header("location: index.php");
        }*/
   }

?>
