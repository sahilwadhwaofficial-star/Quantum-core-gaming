<?php
// This script MUST start the session to be able to destroy it
session_start();

// Unset all of the session variables.
$_SESSION = array();

// Destroy the session completely.
session_destroy();

// Redirect the user back to the homepage.
header("Location: index.php");
exit();
?>