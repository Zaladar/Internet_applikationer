<?php
   include 'init/config.php';
   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form
        $myusername = mysqli_real_escape_string($conn,$_POST['username']);
        $myrecipie = mysqli_real_escape_string($conn,$_POST['reipie']);
        $mycomment = mysqli_real_escape_string($conn,$_POST['comment']);
        $sql = "INSERT INTO comments (username, recipie, comment) VALUES ('$myusername', '$myrecipie', '$mycomment')";
        $_SESSION['result'] = 'Account created';
        $conn->close();
   }
?>
