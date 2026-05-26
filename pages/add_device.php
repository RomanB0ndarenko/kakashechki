<?php
session_start();
include '../config/database.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: ../login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $type = $conn->real_escape_string($_POST['type']);
    $serial = $conn->real_escape_string($_POST['serial']);
    $description = $conn->real_escape_string($_POST['description']);

    $sql = "INSERT INTO devices (name, type, serial_number, description, status) 
            VALUES ('$name', '$type', '$serial', '$description', 'Vapaana')";

    if ($conn->query($sql)) {
        header("Location: devices.php");
        exit();
    } else {
        echo "Virhe: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lisää laite - Inventaario</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>

<?php include '../navbar.php'; ?>

<div class="container">
    <div class="card">
        <h1>➕ Lisää uusi laite</h1>
        
        <form method="POST">
            <input type="text" name="name" placeholder="Laitteen nimi" required><br><br>
            <input type="text" name="type" placeholder="Tyyppi (esim. Tietokone, Projektori)" required><br><br>
            <input type="text" name="serial" placeholder="Sarjanumero" required><br><br>
            <textarea name="description" placeholder="Lisätiedot / kuvaus" rows="4"></textarea><br><br>
            
            <button type="submit" class="btn btn-primary">Lisää laite</button>
        </form>
    </div>
</div>

</body>
</html>