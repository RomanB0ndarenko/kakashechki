<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
include '../config/database.php';
include 'navbar.php';
?>

<div class="container">
    <div class="card">
        <h1>👋 Tervetuloa, <?= htmlspecialchars($_SESSION['username']) ?>!</h1>
        <p style="font-size: 1.2rem; color: #94a3b8;">Rooli: <strong><?= $_SESSION['role'] ?></strong></p>
    </div>

    <div class="card">
        <h2>🚀 Pikalinkit</h2><br>
        <a href="devices.php" class="btn btn-primary">📋 Katso laitteet</a>
        <a href="loans.php" class="btn btn-success" style="margin-left: 15px;">🔄 Omat lainat</a>
    </div>
</div>