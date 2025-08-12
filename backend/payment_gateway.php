<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// After user clicks "Pay Now", redirect to buy_now.php with POST method
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "<form id='redirectForm' method='POST' action='buy_now.php'>";
    foreach ($_POST as $key => $value) {
        echo "<input type='hidden' name='$key' value='" . htmlspecialchars($value) . "'>";
    }
    echo "<input type='hidden' name='payment_method' value='Online Payment'>";
    echo "</form>";
    echo "<script>document.getElementById('redirectForm').submit();</script>";
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Online Payment Gateway</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
<div class="container text-center">
    <h2>Fake Payment Gateway</h2>
    <p>You are about to pay <strong>₹<?= $_GET['price'] ?? '' ?></strong> for <strong><?= $_GET['name'] ?? '' ?></strong></p>

    <form method="POST">
        <input type="hidden" name="name" value="<?= $_GET['name'] ?? '' ?>">
        <input type="hidden" name="price" value="<?= $_GET['price'] ?? '' ?>">
        <input type="hidden" name="image" value="<?= $_GET['image'] ?? '' ?>">
        <input type="hidden" name="address" value="<?= $_GET['address'] ?? '' ?>">
        <button type="submit" class="btn btn-success">Pay Now</button>
    </form>
</div>
</body>
</html>
