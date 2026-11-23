<?php

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

// require "connect_database.php";

$conn = mysqli_connect("127.0.0.1", "elliot", "skola1234*", "game_store");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $is_admin = $_POST["is_admin"];

    $query = "INSERT INTO users (email, username, password, admin) VALUES ('$email', '$username', '$password', '$is_admin')";
    $conn->query($query);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <?php include("/Public/header.php"); ?>

    <form method="POST">
        <input type="email" placeholder="email" name="email">
        <input type="text" placeholder="username" name="username">
        <input type="password" placeholder="password" name="password">
        <div>
            <span>Admin account</span>
            <input type="checkbox" name="is_admin">
        </div>
        
        <button type="submit">Register</button>
    </form>
</body>
</html>