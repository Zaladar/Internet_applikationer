<?php
  $servername = "localhost";
  $username = "root";
  $password = "niclas91";
  $database = "users"
  $conn = new mysqli($servername, $username, $password, $database);
  *if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
?>
