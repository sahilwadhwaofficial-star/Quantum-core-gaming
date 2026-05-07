<?php
// --- Define page variables ---
$page_title = "Register Account";
$page_stylesheet = "login_style.css"; // This is the new CSS file we'll create
require_once 'header.php';
?>

<div class="container login-container">
    <h1 class="saira-stencil-one-regular" style="color: whitesmoke; text-align: center;">Create Account</h1>
    <br>
    
    <form action="process_new_user.php" method="post">
        <div class="mb-3">
            <label for="username" class="form-label">Gamer Tag (Username)</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary bruno-ace-sc-regular">Register</button>
    </form>
    
    <p class="login-helper-text">
        Already have an account? <a href="login.php">Login here</a>
    </p>
</div>

<?php
require_once 'footer.php';
?>