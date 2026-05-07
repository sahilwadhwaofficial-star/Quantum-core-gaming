<?php
// Start the session so we can redirect to the profile page
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// 1. Connect to the database
require_once 'db_connect.php';

// 2. Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 3. Get the data from the form (using the 'name' attributes we just added)
    $full_name = $conn->real_escape_string($_POST['full_name']);
    $gamer_tag = $conn->real_escape_string($_POST['gamer_tag']);
    $email = $conn->real_escape_string($_POST['email']);

    // 4. Server-side validation (extra security)
    if (empty($full_name) || empty($gamer_tag) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Error: All fields are required and email must be valid. <a href='game1.php'>Go back</a>");
    }

    // 5. Prepare the SQL statement to insert into 'registrations'
    $stmt = $conn->prepare("INSERT INTO registrations (full_name, gamer_tag, email) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $full_name, $gamer_tag, $email);

    // 6. Execute the statement
    if ($stmt->execute()) {
        // Success! Redirect the user to their profile page.
        header("Location: profile.php");
        exit();
    } else {
        // Failure
        echo "Error: Could not process registration. " . $stmt->error;
    }

    // 7. Close connections
    $stmt->close();
    $conn->close();

} else {
    // If someone just types 'process_registration.php' in their browser
    echo "Please submit the registration form.";
}
?>