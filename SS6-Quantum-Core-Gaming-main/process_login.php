<?php
// 1. Start the session
// This MUST be here for this script to set session variables
session_start();

// 2. Connect to your database
require_once 'db_connect.php';

// 3. Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    // 4. Get the submitted data (and sanitize it)
    $username = $conn->real_escape_string($_POST['username']);
    $password = $_POST['password']; // Get the plain text password

    // 5. Find the user in the database
    // We use a prepared statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? LIMIT 1");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    // 6. Check if the user was found
    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();

        // 7. VERIFY THE HASHED PASSWORD
        if (password_verify($password, $user['password_hash'])) {
            
            // 8. Store user info in the session "memory"
            // This line needs session_start() to work!
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            
            // 9. Redirect to the profile page
            header("Location: profile.php");
            exit(); 
        }
    }

    // 10. If login failed
    header("Location: login.php?error=1");
    exit();
}
?>
    

    