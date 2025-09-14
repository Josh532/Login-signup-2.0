  <?php
session_start();

// Optional: redirect logged-in users to home.php
if (isset($_SESSION['user_id'])) {
    header("Location: put link to home.php page here");
    exit();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
<link rel="stylesheet" href="combine-style.css?v=2">


</body>
</html>
Hello, login or signup here
    <a href="login.php">Login</a>
    <a href="signup.php">Register</a>
</body>
</html>