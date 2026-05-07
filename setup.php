<?php
// --- Configuration ---
$db_server = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'quantum_gaming'; // This is the database it will create

echo "<h1>Database Setup Script</h1>";

// --- Step 1: Connect to MySQL Server (not the database yet) ---
$conn = new mysqli($db_server, $db_username, $db_password);
if ($conn->connect_error) {
    die("<p style='color:red;'>Connection to MySQL server failed: " . $conn->connect_error . "</p>");
}

// --- Step 2: Create the Database ---
$sql_create_db = "CREATE DATABASE IF NOT EXISTS `$db_name`";
if ($conn->query($sql_create_db) === TRUE) {
    echo "<p style='color:green;'>Database '$db_name' created successfully or already exists.</p>";
} else {
    die("<p style='color:red;'>Error creating database: " . $conn->error . "</p>");
}
$conn->close();

// --- Step 3: Connect to the new Database ---
$conn = new mysqli($db_server, $db_username, $db_password, $db_name);
if ($conn->connect_error) {
    die("<p style='color:red;'>Connection to database '$db_name' failed: " . $conn->connect_error . "</p>");
}

// --- Step 4: Define all SQL commands for tables and data ---
$sql_commands = "
-- Create users table (with 191 char limit for email key)
CREATE TABLE IF NOT EXISTS `users` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `username` VARCHAR(100) NOT NULL UNIQUE,
    `email` VARCHAR(191) NOT NULL UNIQUE,
    `password_hash` VARCHAR(255) NOT NULL,
    `join_date` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Create registrations table
CREATE TABLE IF NOT EXISTS `registrations` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `full_name` VARCHAR(255) NOT NULL,
  `gamer_tag` VARCHAR(100) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `registration_date` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Create orders table
CREATE TABLE IF NOT EXISTS `orders` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `gamer_tag` VARCHAR(100) NOT NULL,
  `product_name` VARCHAR(255) NOT NULL,
  `amount_paid` DECIMAL(10, 2) NOT NULL,
  `order_date` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Create products table
CREATE TABLE IF NOT EXISTS `products` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `title` VARCHAR(255) NOT NULL,
  `image_url` VARCHAR(255) NOT NULL,
  `page_url` VARCHAR(255) NOT NULL,
  `description` VARCHAR(255)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Insert dummy product data ONLY IF the products table is empty
INSERT INTO `products` (`title`, `image_url`, `page_url`, `description`) 
SELECT * FROM (SELECT
    'Quantum PlayFest' AS title, 'playfest3.png' AS image_url, 'game1.php' AS page_url, 'Join the fest!' AS description UNION ALL
    'Echoes of Eternity', 'echoes.jpeg', 'game2.php', 'A medieval world shattered.' UNION ALL
    'Voices of the Wild', 'voices_of_wild.webp', 'game3.php', 'Survival horror.' UNION ALL
    'Quantum Station', '59992_quantum station is a gaming console manufactured b_xl-1024-v1-0.png', 'quantum_station.php', 'The future of control.' UNION ALL
    'Ashes of Eden', 'ashes_of_eden.jpeg', 'under_dev.php', 'Coming soon.' UNION ALL
    'Lords of Labyrinth', 'lords_if_labrynth.jpg', 'under_dev.php', 'Coming soon.' UNION ALL
    'Arena of Titans', 'arena_titans.jpg', 'under_dev.php', 'Coming soon.' UNION ALL
    'Fractured Truth', 'fractured_truth1.webp', 'game4.php', 'Truth is a lie.'
) AS tmp
WHERE NOT EXISTS (SELECT 1 FROM `products`);
";

// --- Step 5: Execute all commands ---
if ($conn->multi_query($sql_commands)) {
    // Loop through and clear results to prevent errors
    do {
        if ($result = $conn->store_result()) {
            $result->free();
        }
    } while ($conn->next_result());
    
    echo "<p style='color:green;'>All tables created successfully (or already existed).</p>";
    echo "<p style='color:green;'>Dummy product data inserted (or already existed).</p>";
    echo "<h2>Database setup is complete!</h2>";
    echo "<p style='color:red; font-weight:bold;'>You should delete this 'setup.php' file now for security.</p>";
} else {
    echo "<p style='color:red;'>Error setting up database: " . $conn->error . "</p>";
}

$conn->close();
?>