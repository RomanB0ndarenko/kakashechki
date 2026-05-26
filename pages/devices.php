<?php
session_start();

include '../config/database.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: ../login.php");
    exit();
}

$sql = "SELECT * FROM devices";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>

    <title>Devices</title>

    <link rel="stylesheet" href="../assets/css/style.css">

</head>
<body>

<?php include '../navbar.php'; ?>

<div class="container">

    <h1>Devices</h1>

    <a href="add_device.php">
        <button>Add Device</button>
    </a>

    <br><br>

    <table>

        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Serial Number</th>
            <th>Status</th>
        </tr>

        <?php while($device = $result->fetch_assoc()) { ?>

        <tr>

            <td><?php echo $device['name']; ?></td>

            <td><?php echo $device['type']; ?></td>

            <td><?php echo $device['serial_number']; ?></td>

            <td><?php echo $device['status']; ?></td>

        </tr>

        <?php } ?>

    </table>

</div>

</body>
</html>