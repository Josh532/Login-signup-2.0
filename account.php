<?php
session_start();

// 1. Block access if user is not logged in
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php"); // redirect to login page
    exit();
}

// 2. Fetch logged-in user info from the database
$mysqli = require __DIR__ . "/data-base.php";

// Use prepared statement (safe + matches correct table `users`)
$sql = "SELECT * FROM users WHERE id = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("i", $_SESSION["user_id"]);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="combine-style.css?v=2">
    <style>
        body {
            background-image: url("backgroundimg.jpg");
            background-size: cover;
            overflow-y: hidden;
        }
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Home</h1>
        
        <?php if (isset($user)): ?>
            <p>Username: <?= htmlspecialchars($user["name"]) ?></p>
            <div class="links">
                <p><a href="home.php">Go home</a></p>
                <p><a href="logout.php">Log out</a></p>
            </div>
        <?php else: ?>
            <div class="links">
                <p><a href="login.php">Log in</a> or <a href="signup.php">Sign up</a></p>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
