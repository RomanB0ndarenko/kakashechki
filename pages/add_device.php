<?php
session_start();
include '../config/database.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: ../login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $type = $_POST['type'];
    $serial = $_POST['serial'];
    $description = $_POST['description'];

    $sql = "INSERT INTO devices (name, type, serial_number, description)
            VALUES ('$name', '$type', '$serial', '$description')";

    if ($conn->query($sql)) {
        header("Location: devices.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Device</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<div class="container">

<h1>Add Device</h1>

<form method="POST">

    <input type="text" name="name" placeholder="Name" required>

    <input type="text" name="type" placeholder="Type">

    <input type="text" name="serial" placeholder="Serial">

    <textarea name="description" placeholder="Description"></textarea>

    <button type="submit">Add</button>

</form>

</div>

</body>
</html>