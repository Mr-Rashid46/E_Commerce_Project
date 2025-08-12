<!-- <?php include 'db.php'; session_start(); ?> -->
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

$login_error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email    = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE email=?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $res = $stmt->get_result();

    if ($res->num_rows > 0) {
        $user = $res->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            // Store more details in session
            $_SESSION['username'] = $user['username'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['phone'] = $user['phone'] ?? '';
            $_SESSION['address'] = $user['address'] ?? '';
            
            header("Location: aryan.php");
            exit();
        } else {
            $login_error = "Invalid password.";
        }
    } else {
        $login_error = "No account found with that email.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
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
        }

        .blur-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            backdrop-filter: blur(8px);
            background-color: rgba(255, 255, 255, 0.05);
            z-index: 0;
        }

        .login-box {
            position: absolute;
            z-index: 1;
            background-color: rgba(255, 255, 255, 0.2);
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
            backdrop-filter: blur(12px);
            width: 100%;
            max-width: 400px;
        }

        .login-box input {
            background-color: rgba(255, 255, 255, 0.8);
        }

        .login-box h2 {
            color: #333;
        }

        .login-box a {
            color: #007bff;
        }
    </style>
</head>
<body>
    <div class="blur-overlay"></div>

    <div class="login-box">
        <h2 class="text-center mb-4">Login</h2>
        <form method="POST">
            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" required class="form-control">
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" required class="form-control">
            </div>
            <button type="submit" class="btn btn-success w-100">Login</button>
            <p class="text-center mt-3">Don't have an account? <a href="Register1.php">Register</a></p>
        </form>
    </div>
</body>
</html>
