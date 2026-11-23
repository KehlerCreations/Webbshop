<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// require "connect_database.php";

$conn = mysqli_connect("127.0.0.1", "elliot", "skola1234*", "game_store");

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $query = "SELECT id FROM users WHERE email='$email' AND password = '$password'";
    $result = $conn->query($query);

    if($result->num_rows === 1) {
        $_SESSION["logged_in"] = true;
    }
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
    <?php include $_SERVER['DOCUMENT_ROOT']."/header.php"; ?>

    <form method="POST">
        <input type="email" placeholder="email" name="email">
        <input type="password" placeholder="password" name="password">
        
        <button type="submit">Log in</button>
    </form>
</body>
</html>