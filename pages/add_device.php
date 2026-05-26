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

    $sql = "INSERT INTO devices
            (name, type, serial_number, description)
            VALUES
            ('$name', '$type', '$serial', '$description')";

    if ($conn->query($sql)) {

        header("Location: devices.php");
        exit();
    }

    else {
        echo "Error: " . $conn->error;
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

        <input
            type="text"
            name="name"
            placeholder="Device Name"
            required
        >

        <input
            type="text"
            name="type"
            placeholder="Device Type"
        >

        <input
            type="text"
            name="serial"
            placeholder="Serial Number"
        >

        <textarea
            name="description"
            placeholder="Description"
        ></textarea>

        <button type="submit">
            Add Device
        </button>

    </form>

</div>

</body>
</html>