<?php
session_start();

include 'config/database.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// statistics
$deviceCount = $conn->query("SELECT COUNT(*) AS total FROM devices")
                    ->fetch_assoc()['total'];

$loanCount = $conn->query("SELECT COUNT(*) AS total FROM loans WHERE returned = 0")
                  ->fetch_assoc()['total'];

$availableCount = $conn->query("SELECT COUNT(*) AS total FROM devices WHERE status='available'")
                       ->fetch_assoc()['total'];

$maintenanceCount = $conn->query("SELECT COUNT(*) AS total FROM devices WHERE status='maintenance'")
                         ->fetch_assoc()['total'];
?>

<!DOCTYPE html>
<html>
<head>

    <title>Inventory Dashboard</title>

    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>

<?php include 'navbar.php'; ?>

<div class="container">

    <h1>Dashboard</h1>

    <br>

    <p>
        Welcome back,
        <strong><?php echo $_SESSION['username']; ?></strong>
    </p>

    <br><br>

    <!-- STATS -->

    <div style="
        display:flex;
        gap:20px;
        flex-wrap:wrap;
        margin-bottom:40px;
    ">

        <!-- TOTAL DEVICES -->

        <div style="
            background:#0ea5e9;
            color:white;
            padding:25px;
            border-radius:16px;
            width:220px;
            box-shadow:0 4px 10px rgba(0,0,0,0.1);
        ">

            <h2><?php echo $deviceCount; ?></h2>

            <br>

            <p>Total Devices</p>

        </div>

        <!-- ACTIVE LOANS -->

        <div style="
            background:#22c55e;
            color:white;
            padding:25px;
            border-radius:16px;
            width:220px;
            box-shadow:0 4px 10px rgba(0,0,0,0.1);
        ">

            <h2><?php echo $loanCount; ?></h2>

            <br>

            <p>Active Loans</p>

        </div>

        <!-- AVAILABLE -->

        <div style="
            background:#f59e0b;
            color:white;
            padding:25px;
            border-radius:16px;
            width:220px;
            box-shadow:0 4px 10px rgba(0,0,0,0.1);
        ">

            <h2><?php echo $availableCount; ?></h2>

            <br>

            <p>Available Devices</p>

        </div>

        <!-- MAINTENANCE -->

        <div style="
            background:#ef4444;
            color:white;
            padding:25px;
            border-radius:16px;
            width:220px;
            box-shadow:0 4px 10px rgba(0,0,0,0.1);
        ">

            <h2><?php echo $maintenanceCount; ?></h2>

            <br>

            <p>Maintenance</p>

        </div>

    </div>

    <!-- QUICK ACCESS -->

    <h2>Quick Access</h2>

    <br>

    <div style="
        display:flex;
        gap:20px;
        flex-wrap:wrap;
    ">

        <a href="/inventory/pages/devices.php" style="
            text-decoration:none;
            color:white;
        ">

            <div style="
                background:#2563eb;
                padding:25px;
                border-radius:16px;
                width:260px;
                box-shadow:0 4px 10px rgba(0,0,0,0.1);
            ">

                <h2>Devices</h2>

                <br>

                <p>Manage inventory devices</p>

            </div>

        </a>

        <a href="/inventory/pages/loans.php" style="
            text-decoration:none;
            color:white;
        ">

            <div style="
                background:#16a34a;
                padding:25px;
                border-radius:16px;
                width:260px;
                box-shadow:0 4px 10px rgba(0,0,0,0.1);
            ">

                <h2>Loans</h2>

                <br>

                <p>Track borrowed devices</p>

            </div>

        </a>

        <a href="/inventory/pages/add_device.php" style="
            text-decoration:none;
            color:white;
        ">

            <div style="
                background:#9333ea;
                padding:25px;
                border-radius:16px;
                width:260px;
                box-shadow:0 4px 10px rgba(0,0,0,0.1);
            ">

                <h2>Add Device</h2>

                <br>

                <p>Create a new device entry</p>

            </div>

        </a>

    </div>

</div>

</body>
</html>