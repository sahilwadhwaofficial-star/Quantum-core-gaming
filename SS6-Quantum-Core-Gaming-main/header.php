<?php
// START A SESSION ON EVERY PAGE
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
// Set a default title if one isn't provided
$page_title = $page_title ?? "Quantum Core Gaming";
?>
<html>
<head>
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Saira+Stencil+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Stencil+Text:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bruno+Ace+SC&family=Bungee+Spice&family=Orbitron:wght@400..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Trade+Winds&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="main.css">
    
    <?php if (isset($page_stylesheet)): ?>
        <link rel="stylesheet" href="<?php echo htmlspecialchars($page_stylesheet); ?>">
    <?php endif; ?>
</head>
<body>
    <nav>
        <div class="content">
            <div class="parts"><img src="WhatsApp_Image_2024-10-15_at_7.25.02_PM-removebg-preview.png" height="100px"></div>
            <div class="parts">
                <h1 style="color: aliceblue;" class="saira-stencil-one-regular">QUANTUM CORE GAMING</h1>
            </div>
            <div class="parts">
                <ul>
                    <?php
                    // DYNAMIC LINKS START HERE
                    // Check if the 'username' variable exists in the session memory
                    if (isset($_SESSION['username'])): 
                    ?>
                        <a href="profile.php" style="text-decoration: none;"><li class="elements">Profile</li></a>
                        <a href="logout.php" style="text-decoration: none;"><li class="elements">Logout</li></a>
                    
                    <?php else: ?>

                        <a href="login.php" style="text-decoration: none;"><li class="elements">Login</li></a>
                        <a href="register.php" style="text-decoration: none;"><li class="elements">Register</li></a>
                    
                    <?php endif; // End of the dynamic block ?>
                    
                </ul>
            </div>
        </div>
    </nav>