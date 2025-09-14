<?php
header("Content-Type: application/json");

// Validate name
if (empty($_POST["name"])) {
    echo json_encode(["field" => "name", "message" => "Name is required"]);
    exit;
}

if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    echo json_encode(["field" => "email", "message" => "Valid email is required"]);
    exit;
}

if (strlen($_POST["password"]) < 8) {
    echo json_encode(["field" => "password", "message" => "Password must be at least 8 characters"]);
    exit;
}

if (!preg_match("/[a-z]/i", $_POST["password"])) {
    echo json_encode(["field" => "password", "message" => "Password must contain at least one letter"]);
    exit;
}

if (!preg_match("/[0-9]/", $_POST["password"])) {
    echo json_encode(["field" => "password", "message" => "Password must contain at least one number"]);
    exit;
}

if ($_POST["password"] !== $_POST["password_confirmation"]) {
    echo json_encode(["field" => "password_confirmation", "message" => "Passwords must match"]);
    exit;
}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/data-base.php";

$sql = "INSERT INTO users (name, email, password_hash) VALUES (?, ?, ?)";
$stmt = $mysqli->stmt_init();

if (!$stmt->prepare($sql)) {
    echo json_encode(["field" => "email", "message" => "Database error"]);
    exit;
}

$stmt->bind_param("sss", $_POST["name"], $_POST["email"], $password_hash);

if ($stmt->execute()) {
    echo json_encode(["success" => true]);
    exit;
} else {
    if ($mysqli->errno === 1062) {
        echo json_encode(["field" => "email", "message" => "Email already taken"]);
    } else {
        echo json_encode(["field" => "email", "message" => $mysqli->error]);
    }
    exit;
}
