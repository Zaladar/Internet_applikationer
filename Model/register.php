<?php
   include 'init/config.php';
   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form
        $myusername = mysqli_real_escape_string($conn,$_POST['username']);
        $mypassword = mysqli_real_escape_string($conn,$_POST['password']);
        //echo ("$_POST['username']");
        $sql = "SELECT username FROM user WHERE username = '$myusername'";
        $result = $conn->query($sql);
        //$row = $result->fetch_assoc();
        //$active = $row['active'];
        $count = $result->num_rows;
        if($count == 0) {

          $sql = "INSERT INTO user (username, password) VALUES ('$myusername', '$mypassword')";
          if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
          }
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
