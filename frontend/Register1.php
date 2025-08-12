<!-- <?php include 'db.php'; ?> -->
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $email    = trim($_POST['email']);
    $password = trim($_POST['password']);
    $phone    = trim($_POST['phone']);
    $address  = trim($_POST['address']);

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, email, password, phone, address) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("sssss", $username, $email, $hashed_password, $phone, $address);

        if ($stmt->execute()) {
            echo "<script>alert('Registered successfully!'); window.location='index.php';</script>";
        } else {
            echo "<script>alert('Email already exists or an error occurred.');</script>";
        }

        $stmt->close();
    } else {
        echo "<script>alert('Database error: Unable to prepare statement.');</script>";
    }

    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        margin: 0;
        padding: 0;
        background: url('images/frontimage.png') no-repeat center center/cover;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: #f0f0f0;
    }

    .blur-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        backdrop-filter: blur(10px);
        background-color: rgba(0, 0, 0, 0.6);
        z-index: 0;
    }

    .register-box {
        position: relative;
        z-index: 1;
        background-color: rgba(15, 15, 15, 0.9);
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 0 25px rgba(255, 215, 0, 0.3);
        backdrop-filter: blur(15px);
        width: 100%;
        max-width: 450px;
        border: 1px solid #ffd700;
    }

    .register-box input {
        background-color: #222;
        color: #ffd700;
        border: 1px solid #ffd700;
    }

    .register-box input::placeholder {
        color: #999;
    }

    .register-box h2 {
        color: #ffd700;
        font-weight: bold;
    }

    .register-box label {
        color: #f0f0f0;
    }

    .register-box a {
        color: #ffd700;
        text-decoration: underline;
    }

    .btn-primary {
        background-color: #ffd700;
        border: none;
        color: #000;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #e6c200;
    }
</style>
</head>
<body>
    <div class="blur-overlay"></div>

    <div class="register-box">
        <h2 class="text-center mb-4">Register</h2>
        <form method="POST">
    <div class="mb-3">
        <label>Username</label>
        <input type="text" name="username" required class="form-control">
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" required class="form-control">
    </div>
    <div class="mb-3">
        <label>Password</label>
        <input type="password" name="password" required class="form-control">
    </div>
    <div class="mb-3">
        <label>Phone</label>
        <input type="text" name="phone" required class="form-control" pattern="[0-9]{10}" placeholder="10-digit number">
    </div>
    <div class="mb-3">
        <label>Address</label>
        <input type="text" name="address" required class="form-control" placeholder="Full address">
    </div>
    <button type="submit" class="btn btn-primary w-100">Register</button>
    <p class="text-center mt-3">Already have an account? <a href="index.php">Login</a></p>
</form>

    </div>
</body>
</html>
