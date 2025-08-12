<?php
session_start();

$cart = $_SESSION['cart'] ?? [];
$total = 0;

foreach ($cart as $item) {
    $total += (float)$item['price'];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Clear cart after order
    $_SESSION['cart'] = [];

    // You can store order details in a database here if needed

    // Redirect to success page or display message
    echo "<script>alert('Order placed successfully!'); window.location='aryan.php';</script>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Checkout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f6f9;
            padding-top: 50px;
        }
        .checkout-container {
            max-width: 900px;
            margin: auto;
        }
        .card-item {
            background: #fff;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 15px;
            box-shadow: 0 0 8px rgba(0,0,0,0.05);
        }
        .checkout-image {
            width: 100px;
            border-radius: 6px;
            object-fit: cover;
        }
    </style>
</head>
<body>
<div class="container checkout-container">
    <h2 class="mb-4">🧾 Checkout</h2>

    <?php if (empty($cart)): ?>
        <div class="alert alert-warning">Your cart is empty.</div>
        <a href="index1.php" class="btn btn-primary">Back to Shop</a>
    <?php else: ?>
        <?php foreach ($cart as $item): ?>
            <div class="card-item d-flex align-items-center">
                <img src="<?= htmlspecialchars($item['image']) ?>" class="checkout-image me-3">
                <div>
                    <h5><?= htmlspecialchars($item['name']) ?></h5>
                    <p class="mb-0 text-muted">₹<?= htmlspecialchars($item['price']) ?></p>
                </div>
            </div>
        <?php endforeach; ?>

        <div class="mt-3">
            <h5>Total: ₹<?= number_format($total, 2) ?></h5>
        </div>

        <form method="POST" class="mt-4">
            <button type="submit" class="btn btn-success btn-lg w-100">Place Order</button>
        </form>
    <?php endif; ?>
</div>
</body>
</html>
