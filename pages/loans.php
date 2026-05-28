<?php
session_start();
include '../config/database.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: ../login.php");
    exit();
}

$sql = "SELECT loans.*, users.username, devices.name AS device_name
        FROM loans
        JOIN users ON loans.user_id = users.id
        JOIN devices ON loans.device_id = devices.id
        ORDER BY loans.id DESC";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Loans</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<?php include '../navbar.php'; ?>

<div class="container">

<h1>Active Loans</h1>

<table>

<tr>
    <th>User</th>
    <th>Device</th>
    <th>Loan Date</th>
    <th>Status</th>
    <th>Action</th>
</tr>

<?php while($loan = $result->fetch_assoc()) { ?>

<tr>

    <td><?php echo $loan['username']; ?></td>
    <td><?php echo $loan['device_name']; ?></td>
    <td><?php echo $loan['loan_date']; ?></td>

    <td>
        <?php echo $loan['returned'] ? "Returned" : "Borrowed"; ?>
    </td>

    <td>

        <?php if(!$loan['returned']) { ?>

            <a href="return_device.php?id=<?php echo $loan['id']; ?>">
                <button>Return</button>
            </a>

        <?php } else { ?>
            -
        <?php } ?>

    </td>

</tr>

<?php } ?>

</table>

</div>

</body>
</html>