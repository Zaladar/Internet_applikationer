<?php
include 'init/config.php';
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
  echo "AGAIN!";
  $myid = mysqli_real_escape_string($conn,$_POST['id']);
  $sql = "DELETE FROM comments WHERE ID='$myid'";
  $result =$conn->query($sql);
  $conn->close();
  header("location: ../View/Recipies/".$_POST['recipie'].".php");
}
 ?>
