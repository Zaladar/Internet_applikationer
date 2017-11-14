<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'niclas91');
define('DB_DATABASE', 'site');

$conn = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE)

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
