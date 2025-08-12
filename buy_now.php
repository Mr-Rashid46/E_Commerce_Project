
<?php
session_start();
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "auth_demo";
$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (!isset($_SESSION['username'])) {
    echo "<script>alert('Please login first!'); window.location='index.php';</script>";
    exit();
}
$orderPlaced = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['address']) && isset($_POST['payment_method'])) {
    $username      = $_SESSION['username'];
    $product_name  = $_POST['name'];
    $price         = $_POST['price'];
    $image         = $_POST['image'];
    $address       = $_POST['address'];
    $payment_method = $_POST['payment_method'];

    $stmt = $conn->prepare("INSERT INTO orders (username, product_name, price, image, address, payment_method) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssdsss", $username, $product_name, $price, $image, $address, $payment_method);
    if ($stmt->execute()) {
        $orderPlaced = true;
        echo "<script>alert('order placed successfully');window.location.href='aryan.php';</script>";
    } else {
        echo "<script>alert('Error placing order.');</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Buy Now</title>
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
  }
  .container {
    background-color: #1a1a1a;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 0 20px rgba(255, 215, 0, 0.2);
    max-width: 600px;
  }
  .form-label {
    color: #ffd700;
    font-weight: 600;
  }
  .form-control,
  .form-select,
  textarea {
    background-color: #121212;
    color: #fff;
    border: 1px solid #ffd700;
    border-radius: 6px;
    transition: border 0.3s ease;
  }
  .form-control:focus,
  .form-select:focus,
  textarea:focus {
    border-color: #ffcc00;
    box-shadow: 0 0 5px rgba(255, 215, 0, 0.4);
    background-color: #181818;
  }
  .btn-success {
    background-color: #28a745;
    border: none;
    width: 100%;
    font-weight: 600;
    border-radius: 30px;
    transition: background-color 0.3s ease;
  }
  .btn-success:hover {
    background-color: #1e7e34;
  }
  /* Optional: smooth fade-in */
  form {
animation: fadeIn 0.8s ease-in-out;
}
  @keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
  }
</style>
</head>
<body class="p-4">
<div class="container">
<h2 class="mb-4">Buy Now</h2>
<form method="POST">
            <input type="hidden" name="name" value="<?= $_POST['name'] ?? '' ?>">
            <input type="hidden" name="price" value="<?= $_POST['price'] ?? '' ?>">
            <input type="hidden" name="image" value="<?= $_POST['image'] ?? '' ?>">

            <div class="mb-3">
                <label class="form-label">Product: </label>
                <input type="text" class="form-control" value="<?= $_POST['name'] ?? '' ?>" readonly>
            </div>
            <div class="mb-3">
                <label class="form-label">Price: </label>
                <input type="text" class="form-control" value="₹<?= $_POST['price'] ?? '' ?>" readonly>
            </div>
            <div class="mb-3">
                <label class="form-label">Shipping Address</label>
                <textarea name="address" class="form-control" required></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Payment Method</label>
                <select name="payment_method" class="form-select" id="payment_method" required>
                    <option value="Cash on Delivery">Cash on Delivery</option>
                    <option value="Credit Card">Credit Card</option>
                    <option value="Online Payment">Online Payment</option>
                </select>

            </div>
            <button type="submit" class="btn btn-success">Confirm Order</button>
        </form>
    </div>
    <script>
    document.querySelector("form").addEventListener("submit", function(e) {
        const paymentMethod = document.querySelector("#payment_method").value;
        if (paymentMethod === "Online Payment") {
            e.preventDefault();
            const form = e.target;
            const formData = new FormData(form);
            const params = new URLSearchParams(formData).toString();
            window.location.href = "payment_gateway.php?" + params;
        }
    });
    </script>

</body>
</html>
