<?php
session_start();
// remove all session variables
session_unset();

// destroy the session
session_destroy();
//return to index
header("location: ../index.php");
?>