<?php
session_start();
include '../config/database.php';

$id = $_GET['id'];

$conn->query("DELETE FROM devices WHERE id=$id");

header("Location: devices.php");
exit();
?>