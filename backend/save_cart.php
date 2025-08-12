<?php
// save_cart.php
session_start();

if (!isset($_SESSION['username'])) {
    echo "<script>alert('Please login'); window.location='login.php';</script>";
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
$cart = $_SESSION['cart'] ?? [];

// Clear previous cart for this user to avoid duplicates
$conn->query("DELETE FROM cart_items WHERE username = '$username'");

foreach ($cart as $item) {
    $stmt = $conn->prepare("INSERT INTO cart_items (username, product_name, price, image) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssds", $username, $item['name'], $item['price'], $item['image']);
    $stmt->execute();
}

echo "<script>alert('Cart saved successfully!'); window.location='cart.php';</script>";

?>
