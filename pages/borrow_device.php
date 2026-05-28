<?php
session_start();
include '../config/database.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: ../login.php");
    exit();
}

$device_id = $_GET['id'];
$user_id = $_SESSION['user_id'];

// insert loan
$conn->query("INSERT INTO loans (user_id, device_id) VALUES ($user_id, $device_id)");

// update device status
$conn->query("UPDATE devices SET status='loaned' WHERE id=$device_id");

header("Location: loans.php");
exit();
?>