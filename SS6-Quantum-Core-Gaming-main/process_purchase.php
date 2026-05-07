<?php
// Start the session so we can redirect
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// 1. Connect to the database
require_once 'db_connect.php';

// 2. Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 3. Get the *safe* data from the form
    // We get the gamer_tag and the hidden fields
    $gamer_tag = $conn->real_escape_string($_POST['gamer_tag']);
    $product_name = $conn->real_escape_string($_POST['product_name']);
    $amount = $conn->real_escape_string($_POST['amount']);

    // 4. Server-side validation
    if (empty($gamer_tag) || empty($product_name) || !is_numeric($amount)) {
        die("Error: Invalid data. <a href='index.php'>Go back</a>");
    }
    
    // NOTE: This is where a real payment gateway (like Stripe or PayPal)
    // would be called. We are skipping that and assuming the payment is successful.

    // 5. Prepare the SQL statement to insert into 'orders'
    $stmt = $conn->prepare("INSERT INTO orders (gamer_tag, product_name, amount_paid) VALUES (?, ?, ?)");
    $stmt->bind_param("ssd", $gamer_tag, $product_name, $amount);

    // 6. Execute the statement
    if ($stmt->execute()) {
        // Success! We can redirect to the profile page or a "thank you" page.
        // Let's redirect to the profile page.
        header("Location: profile.php");
        exit();
    } else {
        // Failure
        echo "Error: Could not process your order. " . $stmt->error;
    }

    // 7. Close connections
    $stmt->close();
    $conn->close();

} else {
    // If someone just types 'process_purchase.php' in their browser
    echo "Please submit a purchase form.";
}
?>