<?php
session_start();
include 'connection.php';
if (!isset($_SESSION['username'])) {
    echo "<script>alert('Please login first!'); window.location='login.php';</script>";
    exit();
}
$username = $_SESSION['username'];
// Handle delete request
if (isset($_GET['delete']) && is_numeric($_GET['delete'])) {
    $deleteId = $_GET['delete'];
    $check = $conn->prepare("SELECT id FROM orders WHERE id = ? AND username = ?");
    $check->bind_param("is", $deleteId, $username);
    $check->execute();
    $res = $check->get_result();
    if ($res->num_rows > 0) {
        $del = $conn->prepare("DELETE FROM orders WHERE id = ?");
        $del->bind_param("i", $deleteId);
        if ($del->execute()) {
            echo "<script>alert('Order deleted successfully.'); window.location='my_orders.php';</script>";
            exit();
        } else {
            echo "<div class='alert alert-danger'>Failed to delete order.</div>";
        }
    } else {
        echo "<div class='alert alert-danger'>Invalid deletion request.</div>";
    }
}
$sql = "SELECT * FROM orders WHERE username = ? ORDER BY order_date DESC";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Orders</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>body {
    background-color: #0e0e0e;
    color: #f0f0f0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }
  h2 {
    color: #ffd700;
    font-weight: bold;
  }
  .table {
    background-color: #1a1a1a;
    color: #fff;
    border: 1px solid #333;
  }
  .table thead {
    background-color: #000;
    color: #ffd700;
  }
  .table tbody tr:hover {
    background-color: #292929;
  }
  .table-bordered th,
  .table-bordered td {
    border: 1px solid #444;
    vertical-align: middle;
  }
  .btn-danger {
    background-color: #ff4d4d;
    border: none;
    font-weight: bold;
    transition: background-color 0.3s ease;
  }
  .btn-danger:hover {
    background-color: #cc0000;
  }
  .alert-info {
    background-color: #1e1e1e;
    color: #ffd700;
    border: 1px solid #ffd700;
  }
  .alert-danger {
    background-color: #330000;
    color: #ff4d4d;
    border: 1px solid #ff4d4d;
  }
  img {
    border-radius: 8px;
    border: 2px solid #ffd700;
    object-fit: cover;
  }
  .container {
    background-color: #121212;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 0 15px rgba(255, 215, 0, 0.2);
  }
  a {
    color: #ffd700;
    text-decoration: none;
  }
  a:hover {
    color: #ffffff;
  }</style>
</head>
<body>
  <div class="container mt-5">
    <h2 class="mb-4 text-center">My Orders</h2>
    <?php if ($result->num_rows > 0): ?>
      <div class="table-responsive">
        <table class="table table-bordered table-striped">
          <thead class="table-dark">
            <tr>
              <th>Product</th>
              <th>Price (₹)</th>
              <th>Image</th>
              <th>Address</th>
              <th>Payment Method</th>
              <th>Order Date</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
            <?php while($row = $result->fetch_assoc()): ?>
              <tr>
                <td><?= htmlspecialchars($row['product_name']) ?></td>
                <td><?= number_format($row['price'], 2) ?></td>
                <td><img src="<?= htmlspecialchars($row['image']) ?>" alt="Product" style="width: 80px; height: 60px;"></td>
                <td><?= htmlspecialchars($row['address'] ?? 'N/A') ?></td>
                <td><?= htmlspecialchars($row['payment_method'] ?? 'N/A') ?></td>
                <td><?= date('d M Y, h:i A', strtotime($row['order_date'])) ?></td>
                <td>
                  <a href="my_orders.php?delete=<?= $row['id'] ?>" class="btn btn-sm btn-danger"
                     onclick="return confirm('Are you sure you want to delete this order?');">Delete</a>
                </td>
              </tr>
            <?php endwhile; ?>
          </tbody>
        </table>
      </div>
    <?php else: ?>
      <div class="alert alert-info text-center">No orders found.</div>
    <?php endif; ?>
  </div>
</body>
</html>
