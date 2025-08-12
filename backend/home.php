<?php session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light text-center">
    <div class="container mt-5">
        <h1>Welcome, <?php echo $_SESSION['username']; ?>! 🎉</h1>
        <a href="logout.php" class="btn btn-danger mt-3">Logout</a>
    </div>
</body>
</html>
