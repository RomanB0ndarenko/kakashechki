<?php session_start(); ?>
<nav class="navbar">
    <div class="nav-container">
        <div class="logo">📦 Inventaario</div>
        <div class="nav-links">
            <a href="index.php">🏠 Главная</a>
            <a href="devices.php">📱 Оборудование</a>
            <a href="loans.php">🔄 Мои займы</a>
            
            <?php if(isset($_SESSION['role']) && $_SESSION['role'] === 'admin'): ?>
                <a href="add_device.php">➕ Добавить</a>
            <?php endif; ?>
            
            <a href="logout.php" style="color: #f87171;">Выход (<?= htmlspecialchars($_SESSION['username'] ?? '') ?>)</a>
        </div>
    </div>
</nav>