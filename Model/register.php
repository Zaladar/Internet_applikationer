<?php
   include 'init/config.php';
   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form
        $myusername = mysqli_real_escape_string($conn,$_POST['username']);
        $mypassword = mysqli_real_escape_string($conn,$_POST['password']);s
        //echo ("$_POST['username']");
        $sql = "SELECT username FROM user WHERE username = '$myusername'";
        $len = "SELECT * FROM user";
        $result = $conn->query($sql);
        $IDq = $conn->query($len);
        //$row = $result->fetch_assoc();
        //$active = $row['active'];
        $ID = $IDq->num_rows;
        $ID++;
        $count = $result->num_rows;

        if($count == 0) {
          $sql = "INSERT INTO user (ID, username, password)
                  VALUES ('$ID', '$myusername', '$mypassword')";
          $_SESSION['result'] = "Account created";
          $conn->close();
          header("location: ../index.php");
        }
        else {
           $_SESSION['result'] = "Your userame is already in use";
           $conn->close();
           header("location: ../index.php");
        }
   }

?>
