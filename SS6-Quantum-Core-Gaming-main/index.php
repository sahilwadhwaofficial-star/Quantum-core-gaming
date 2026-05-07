<?php
// --- Define page variables ---
$page_title = "Login";
$page_stylesheet = "login_style.css"; // Use the new stylesheet for the form

// --- Load header ---
require_once 'header.php';
?>

<div class="container login-container">
    <h1 class="saira-stencil-one-regular" style="color: whitesmoke; text-align: center;">Login</h1>
    <br>

    <?php
    // This PHP block checks the URL for error or success messages
    if (isset($_GET['error'])) {
        echo '<div class="alert alert-danger">Invalid username or password.</div>';
    }
    if (isset($_GET['success'])) {
        echo '<div class="alert alert-success">Registration successful! Please login.</div>';
    }
    ?>

    <form action="process_login.php" method="post">
        <div class="mb-3">
            <label for="username" class="form-label">Gamer Tag (Username)</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary bruno-ace-sc-regular">Login</button>
    </form>
    
    <p class="login-helper-text">
        Don't have an account? <a href="register.php">Register here</a>
    </p>
</div>

