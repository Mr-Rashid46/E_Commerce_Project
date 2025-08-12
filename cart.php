<?php
session_start();

if (!isset($_SESSION['username'])) {
    echo "<script>alert('Please login first!'); window.location='index.php';</script>";
    exit();
}

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "auth_demo";
$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("DB connection failed: " . $conn->connect_error);
}
$username = $_SESSION['username'];
$result = $conn->query("SELECT * FROM cart_items WHERE username = '$username'");
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Cart</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<style>
  body {
    background-color: #0e0e0e;
    color: #f0f0f0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }

  h2 {
    color: #ffd700;
    font-weight: bold;
    text-align: center;
    margin-bottom: 30px;
  }

  .container {
    background-color: #1a1a1a;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 0 20px rgba(255, 215, 0, 0.2);
  }

  .card {
    background-color: #121212;
    border: 1px solid #ffd700;
    border-radius: 12px;
    transition: transform 0.3s ease;
  }

  .card:hover {
    transform: scale(1.02);
    box-shadow: 0 0 15px rgba(255, 215, 0, 0.3);
  }

  .card-title {
    color: #ffd700;
    font-weight: bold;
  }

  .card-text {
        color: #ffd700;

}

  .card img {
    border-radius: 12px 12px 0 0;
    object-fit: cover;
    border-bottom: 1px solid #ffd700;
  }

  .btn-success {
    background-color: #28a745;
    border: none;
    font-weight: bold;
    border-radius: 25px;
    transition: background-color 0.3s ease;
  }

  .btn-success:hover {
    background-color: #1e7e34;
  }

  .alert-warning {
    background-color: #3b2e00;
    color: #ffd700;
    border: 1px solid #ffd700;
    text-align: center;
  }
</style>
</head>
<body class="p-4">
<div class="container">
<h2 class="mb-4">Your Shopping Cart</h2>
<?php if ($result->num_rows == 0): ?>
<div class="alert alert-warning">Your cart is empty.</div>
<?php else: ?>
<div class="row">
<?php while ($row = $result->fetch_assoc()): ?>
<div class="col-md-4 mb-4">
<div class="card">
<img src="<?= $row['image'] ?>" class="card-img-top" alt="Product" height="200">
<div class="card-body">
    <h5 class="card-title"><?= $row['product_name'] ?></h5>
   <class="card-text">Price: ₹<?= $row['price'] ?></p>
                            <form action="checkout.php" method="POST">
                                <input type="hidden" name="name" value="<?= $row['product_name'] ?>">
                                <input type="hidden" name="price" value="<?= $row['price'] ?>">
                                <input type="hidden" name="image" value="<?= $row['image'] ?>">
                                <button class="btn btn-success w-100 mt-2" type="submit">Proceed to Checkout</button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
</div>
</body>
</html>
