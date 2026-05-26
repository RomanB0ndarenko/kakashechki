<?php session_start(); ?>
<nav class="navbar">
    <div class="nav-container">
        <div class="logo">📦 Inventaario</div>
        <div class="nav-links">
            <a href="index.php">🏠 Etusivu</a>
            <a href="devices.php">📱 Laitteet</a>
            <a href="loans.php">🔄 Omat lainat</a>
            
            <?php if(isset($_SESSION['role']) && $_SESSION['role'] === 'admin'): ?>
                <a href="add_device.php">➕ Lisää laite</a>
            <?php endif; ?>
            
            <a href="logout.php" style="color: #f87171;">Kirjaudu ulos (<?= htmlspecialchars($_SESSION['username'] ?? '') ?>)</a>
        </div>
    </div>
</nav>