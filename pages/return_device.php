<?php
session_start();
include '../config/database.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: ../login.php");
    exit();
}

$loan_id = $_GET['id'];

// get device id
$res = $conn->query("SELECT device_id FROM loans WHERE id=$loan_id");
$loan = $res->fetch_assoc();

$device_id = $loan['device_id'];

// mark returned
$conn->query("UPDATE loans SET returned=1, return_date=NOW() WHERE id=$loan_id");

// update device status
$conn->query("UPDATE devices SET status='available' WHERE id=$device_id");

header("Location: loans.php");
exit();
?>