<?php
include 'init/config.php';
session_start();
echo("success!");
/*if($_SERVER["REQUEST_METHOD"] == "POST") {
   // username and password sent from form
     $myusername = mysqli_real_escape_string($conn,$_SESSION['login_user']);
     $myrecipie = mysqli_real_escape_string($conn,$_POST['recipie']);
     $mycomment = mysqli_real_escape_string($conn,$_POST['comment']);
     $sql = "INSERT INTO comments (username, recipie, comment) VALUES ('$myusername', '$myrecipie', '$mycomment')";
     $result = $conn->query($sql);
     $conn->close();
     header("location: ../View/Recipies/".$_POST['recipie'].".php");*/
if($_SERVER["REQUEST_METHOD"] == "POST") {
  echo "AGAIN!";
  $myid = mysqli_real_escape_string($conn,$_POST['id']);
  $sql = "DELETE FROM comments WHERE ID='$myid'";
  echo($myid);
  $result =$conn->query($sql);
  $conn->close();
  header("location: ../View/Recipies/".$_POST['recipie'].".php");
}
 ?>
