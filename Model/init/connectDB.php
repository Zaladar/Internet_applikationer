<?php
$servername = "localhost";
$username = "root";
$password = "niclas91";
$database = "users"

// Create connection
$conn = new mysqli($servername, $username, $password);

//select a database to work with
$selected = mysql_select_db($database,$conn)
  or die("Could not select examples");
//sql query
$result = mysql_query("SELECT id, model,year FROM cars");
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
?>
