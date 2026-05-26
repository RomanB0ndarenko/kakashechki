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
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laitteet - Inventaario</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>

<?php include '../navbar.php'; ?>

<div class="container">
    <div class="card">
        <h1>📱 Laitteet</h1>
        <a href="add_device.php" class="btn btn-primary">➕ Lisää uusi laite</a>
    </div>

    <div class="card">
        <table>
            <tr>
                <th>Nimi</th>
                <th>Tyyppi</th>
                <th>Sarjanumero</th>
                <th>Tila</th>
            </tr>
            <?php while($device = $result->fetch_assoc()) { ?>
            <tr>
                <td><?= htmlspecialchars($device['name']) ?></td>
                <td><?= htmlspecialchars($device['type']) ?></td>
                <td><?= htmlspecialchars($device['serial_number']) ?></td>
                <td><?= htmlspecialchars($device['status'] ?? 'Vapaana') ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</div>

</body>
</html>