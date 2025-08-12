<?php
session_start();

// Ensure user is logged in
if (!isset($_SESSION['username'])) {
    echo "<script>alert('Please login first!'); window.location='login.php';</script>";
    exit();
}

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "auth_demo";

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

$username = $_SESSION['username'];
$name     = $_POST['name'] ?? '';
$price    = $_POST['price'] ?? 0;
$image    = $_POST['image'] ?? '';

// Optional: Check if item already in cart
$check = $conn->prepare("SELECT * FROM cart_items WHERE username = ? AND product_name = ?");
$check->bind_param("ss", $username, $name);
$check->execute();
$result = $check->get_result();

if ($result->num_rows > 0) {
    echo "<script>alert('Item already in cart!'); window.location='index.php';</script>";
    exit();
}

$stmt = $conn->prepare("INSERT INTO cart_items (username, product_name, price, image) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssds", $username, $name, $price, $image);

if ($stmt->execute()) {
    echo "<script>alert('Product added to cart successfully!'); window.location='cart.php';</script>";
} else {
    echo "<script>alert('Failed to add product.'); window.location='index.php';</script>";
}
