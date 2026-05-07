<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}

require_once 'db_connect.php';

$current_username = $_SESSION['username'];

// Query 1: Get event registrations
$stmt_regs = $conn->prepare("SELECT * FROM registrations WHERE gamer_tag = ?");
$stmt_regs->bind_param("s", $current_username);
$stmt_regs->execute();
$registrations_result = $stmt_regs->get_result();

// --- NEW CODE BLOCK 1: GET PURCHASE HISTORY ---
// Query 2: Get order history
$stmt_orders = $conn->prepare("SELECT * FROM orders WHERE gamer_tag = ? ORDER BY order_date DESC");
$stmt_orders->bind_param("s", $current_username);
$stmt_orders->execute();
$orders_result = $stmt_orders->get_result();
// --- END NEW CODE BLOCK 1 ---


$page_title = "My Profile";
$page_stylesheet = "login_style.css";
require_once 'header2.php';
?>

<div class="container login-container" style="color: whitesmoke;">

    <h1 class="saira-stencil-one-regular">Welcome, <?php echo htmlspecialchars($current_username); ?>!</h1>
    
    <hr style="color: #ccc;">
    
    <p class="bruno-ace-sc-regular" style="font-size: 1.1rem;">This is your personal profile page.</p>
    <p>Your User ID is: <?php echo $_SESSION['user_id']; ?></p>
    <br>

    <h3 class="saira-stencil-one-regular">My Event Registrations</h3>
    <?php if ($registrations_result->num_rows > 0): ?>
        <p>You have registered for the following events:</p>
        <ul class="list-group">
            <?php while($row = $registrations_result->fetch_assoc()): ?>
                <li class="list-group-item" style="background-color: #333; color: white; border: 1px solid #555; margin-bottom: 10px; border-radius: 8px;">
                    <strong>Event:</strong> Quantum PlayFest <br>
                    <strong>Registered Name:</strong> <?php echo htmlspecialchars($row['full_name']); ?> <br>
                    <strong>Registered Email:</strong> <?php echo htmlspecialchars($row['email']); ?> <br>
                    <strong>Date:</strong> <?php echo date("F j, Y", strtotime($row['registration_date'])); ?>
                </li>
            <?php endwhile; ?>
        </ul>
    <?php else: ?>
        <p>You have not registered for any events yet.</p>
    <?php endif; ?>
    
    <br>

    <h3 class="saira-stencil-one-regular">My Purchase History</h3>
    <?php if ($orders_result->num_rows > 0): ?>
        <p>Your recent orders:</p>
        <ul class="list-group">
            <?php 
            // Loop through each order found in the database
            while($row = $orders_result->fetch_assoc()): 
            ?>
                <li class="list-group-item" style="background-color: #333; color: white; border: 1px solid #555; margin-bottom: 10px; border-radius: 8px;">
                    <strong>Product:</strong> <?php echo htmlspecialchars($row['product_name']); ?> <br>
                    <strong>Amount Paid:</strong> RS. <?php echo htmlspecialchars($row['amount_paid']); ?> <br>
                    <strong>Order Date:</strong> <?php echo date("F j, Y, g:i a", strtotime($row['order_date'])); ?>
                </li>
            <?php endwhile; ?>
        </ul>
    <?php else: ?>
        <p>You have not made any purchases yet.</p>
    <?php endif; ?>
    <br>
    
    <a href="logout.php" class="btn btn-danger bruno-ace-sc-regular">Logout</a>
</div>

<?php
// Close all database statements and the connection
$stmt_regs->close();
$stmt_orders->close(); // Close the new statement
$conn->close();

require_once 'footer.php';
?>