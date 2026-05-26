<?php
session_start();

include 'config/database.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        $user = $result->fetch_assoc();

        // Temporary simple password check
        if ($password == "admin") {

            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];

            header("Location: index.php");
            exit();
        }
    }

    echo "Wrong username or password";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h1>Login</h1>

<form method="POST">

    <input 
        type="text" 
        name="username" 
        placeholder="Username" 
        required
    >

    <br><br>

    <input 
        type="password" 
        name="password" 
        placeholder="Password" 
        required
    >

    <br><br>

    <button type="submit">Login</button>

</form>

</body>
</html>