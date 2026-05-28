<?php
session_start();
include '../config/database.php';

$id = $_GET['id'];

$sql = "SELECT * FROM devices WHERE id=$id";
$result = $conn->query($sql);
$device = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $type = $_POST['type'];
    $serial = $_POST['serial'];
    $status = $_POST['status'];
    $description = $_POST['description'];

    $sql = "UPDATE devices SET
            name='$name',
            type='$type',
            serial_number='$serial',
            status='$status',
            description='$description'
            WHERE id=$id";

    if ($conn->query($sql)) {
        header("Location: devices.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Device</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<div class="container">

<h1>Edit Device</h1>

<form method="POST">

    <input type="text" name="name" value="<?php echo $device['name']; ?>">

    <input type="text" name="type" value="<?php echo $device['type']; ?>">

    <input type="text" name="serial" value="<?php echo $device['serial_number']; ?>">

    <select name="status">
        <option value="available">Available</option>
        <option value="loaned">Loaned</option>
        <option value="maintenance">Maintenance</option>
    </select>

    <textarea name="description"><?php echo $device['description']; ?></textarea>

    <button type="submit">Update</button>

</form>

</div>

</body>
</html>