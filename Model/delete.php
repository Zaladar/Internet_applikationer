<?php
include 'init/config.php';
session_start();
echo("success!");
if($_SERVER["REQUEST_METHOD"] == "POST") {
  echo "AGAIN!";
  $myid = mysqli_real_escape_string($conn,$_SESSION['id']);
  $sql = "DELETE FROM comments WHERE ID='$myid";
  echo($myid);
  $conn->query($sql);
  $conn->close();
  //header("location: ../View/Recipies/".$_POST['recipie'].".php");
}
 ?>
