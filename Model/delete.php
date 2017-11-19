<?php
include 'init/config.php';
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $myid = mysqli_real_escape_string($conn,$_SESSION['id']);
  $sql = "DELETE FROM comments WHERE ID='$myid";
  $conn->query($sql);
  $conn->close();
}
 ?>
