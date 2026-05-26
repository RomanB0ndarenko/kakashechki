<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>

    <title>Inventory System</title>

    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>

<?php include 'navbar.php'; ?>

<div class="container">

    <h1>Welcome <?php echo $_SESSION['username']; ?></h1>

    <p>Inventory and Loan System</p>

</div>

</body>
</html>