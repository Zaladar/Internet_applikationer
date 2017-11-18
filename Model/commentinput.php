<?php
   include 'init/config.php';
   session_start();
   echo("hello world")
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form
        $myusername = mysqli_real_escape_string($conn,$_POST['username']);
        $myrecipie = mysqli_real_escape_string($conn,$_POST['recipie']);
        $mycomment = mysqli_real_escape_string($conn,$_POST['comment']);
        $sql = "INSERT INTO comments (username, recipie, comment) VALUES ('$myusername', '$myrecipie', '$mycomment')";
        $result = $conn->query($sql);
        $conn->close();
        echo($result)
        echo($_SESSION['login_user']);
        //header("location: ../index.php");
   }
?>
