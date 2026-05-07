<?php
/*
 * This file connects your website to your MySQL database.
 */

// Database credentials
define('DB_SERVER', 'localhost');   // This is almost always 'localhost' for WAMP
define('DB_USERNAME', 'root');      // The default username for WAMP
define('DB_PASSWORD', '');          // The default password for WAMP is empty
define('DB_NAME', 'quantum_gaming'); // The database name we chose

// Create a connection
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>