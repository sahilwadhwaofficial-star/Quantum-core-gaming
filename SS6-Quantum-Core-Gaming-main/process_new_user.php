<?php
// 1. Connect to your database
require_once 'db_connect.php';

// 2. Check if the form was submitted using POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 3. Get the data from the form
    // $conn->real_escape_string sanitizes the input for the database
    $username = $conn->real_escape_string($_POST['username']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password']; // Get the plain text password

    // 4. Validate the data (server-side)
    if (empty($username) || empty($email) || empty($password)) {
        die("Error: All fields are required. <a href='register.php'>Go back</a>");
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Error: Invalid email format. <a href='register.php'>Go back</a>");
    }

    // 5. HASH THE PASSWORD
    // This is the most important security step. We NEVER store plain passwords.
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    // 6. Prepare the SQL statement to insert the new user
    $stmt = $conn->prepare("INSERT INTO users (username, email, password_hash) VALUES (?, ?, ?)");
    // 'sss' means the 3 variables are all "strings"
    $stmt->bind_param("sss", $username, $email, $password_hash);

    // 7. Execute the statement and check for errors
    if ($stmt->execute()) {
        // Success! Redirect the user to the login page with a success message.
        header("Location: login.php?success=1");
        exit();
    } else {
        // Check if it's a "duplicate entry" error (error code 1062)
        if ($conn->errno == 1062) {
            die("Error: That username or email is already taken. <a href='register.php'>Go back</a>");
        } else {
            // Other error
            die("Error: " . $stmt->error);
        }
    }

    // 8. Close connections
    $stmt->close();
    $conn->close();
} else {
    // If someone just types 'process_new_user.php' in their browser
    echo "Please submit the registration form.";
}
?>