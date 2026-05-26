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
        <h1>👋 Добро пожаловать, <?= htmlspecialchars($_SESSION['username']) ?>!</h1>
        <p style="font-size: 1.2rem; color: #94a3b8;">Роль: <strong><?= $_SESSION['role'] ?></strong></p>
    </div>

    <div class="card">
        <h2>🚀 Быстрые действия</h2><br>
        <a href="devices.php" class="btn btn-primary">📋 Посмотреть оборудование</a>
        <a href="loans.php" class="btn btn-success" style="margin-left: 15px;">🔄 Мои займы</a>
    </div>
</div>