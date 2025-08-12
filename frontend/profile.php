<?php
session_start();
include 'connection.php';
if (!isset($_SESSION['username'])) {
header('Location: index.php');
exit();
}
$username = $_SESSION['username'];
// Fetch user data including phone & address
$stmt = $conn->prepare("SELECT id, username, email, phone, address FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
$user_id = $user['id'];
// Handle update
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newUsername = trim($_POST['username']);
    $newEmail    = trim($_POST['email']);
    $newPhone    = trim($_POST['phone']);
    $newAddress  = trim($_POST['address']);

    $update = $conn->prepare("UPDATE users SET username = ?, email = ?, phone = ?, address = ? WHERE id = ?");
    $update->bind_param("ssssi", $newUsername, $newEmail, $newPhone, $newAddress, $user_id);

    if ($update->execute()) {
        $success = "Profile updated successfully.";
        $_SESSION['username'] = $newUsername;
        $user['username'] = $newUsername;
        $user['email'] = $newEmail;
        $user['phone'] = $newPhone;
        $user['address'] = $newAddress;
    } else {
        $error = "Failed to update profile.";
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <title>Profile Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;800&display=swap');

body {
    background-color: #0f0f0f;
    font-family: 'Montserrat', sans-serif;
    color: #f5f5f5;
    margin: 0;
    padding: 0;
}

.container {
    background-color: #1a1a1a;
    border: 1px solid #bfa046;
    border-radius: 20px;
    padding: 40px 30px;
    max-width: 850px;
    margin: 60px auto;
    box-shadow: 0 10px 30px rgba(255, 215, 0, 0.1);
    animation: fadeIn 0.6s ease-in-out;
}

h2 {
    text-align: center;
    font-weight: 800;
    font-size: 2.6rem;
    color: #bfa046;
    letter-spacing: 1px;
    margin-bottom: 30px;
    position: relative;
}

h2::after {
    content: '';
    display: block;
    width: 70px;
    height: 3px;
    background: #bfa046;
    margin: 12px auto 0;
    border-radius: 5px;
    box-shadow: 0 0 8px #bfa04688;
}

label.form-label {
    font-weight: 600;
    color: #f1f1f1;
}

input.form-control {
    background-color: #111;
    color: #f5f5f5;
    border: 1px solid #444;
    border-radius: 12px;
    padding: 10px 15px;
    transition: 0.3s;
}

input.form-control:focus {
    border-color: #bfa046;
    box-shadow: 0 0 8px rgba(191, 160, 70, 0.5);
    background-color: #1f1f1f;
    outline: none;
}

.btn-primary {
    background: linear-gradient(to right, #bfa046, #a2822e);
    border: none;
    border-radius: 50px;
    padding: 12px;
    font-size: 16px;
    font-weight: bold;
    color: #000;
    transition: all 0.3s ease;
}

.btn-primary:hover {
    background: linear-gradient(to right, #a2822e, #bfa046);
    transform: scale(1.03);
    color: #000;
}

.alert {
    border-radius: 10px;
    font-weight: 500;
    text-align: center;
    padding: 15px;
    font-size: 15px;
    background-color: #2a2a2a;
    border-left: 5px solid #bfa046;
    color: #f5f5f5;
}

@media (max-width: 768px) {
    .container {
        padding: 25px 20px;
        margin: 30px 15px;
    }

    h2 {
        font-size: 2rem;
    }

    .btn-primary {
        font-size: 15px;
    }
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center mb-4">My Profile</h2>

    <?php if (isset($success)): ?>
        <div class="alert alert-success"><?= $success ?></div>
    <?php elseif (isset($error)): ?>
        <div class="alert alert-danger"><?= $error ?></div>
    <?php endif; ?>

    <form method="POST" class="row g-3">
        <div class="col-md-6">
            <label class="form-label">Username</label>
            <input type="text" name="username" class="form-control" value="<?= htmlspecialchars($user['username']) ?>" required>
        </div>
        <div class="col-md-6">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="<?= htmlspecialchars($user['email']) ?>" required>
        </div>
        <div class="col-md-6">
            <label class="form-label">Phone</label>
            <input type="text" name="phone" class="form-control" value="<?= htmlspecialchars($user['phone'] ?? '') ?>" placeholder="Enter phone number">
        </div>
        <div class="col-md-6">
            <label class="form-label">Address</label>
            <input type="text" name="address" class="form-control" value="<?= htmlspecialchars($user['address'] ?? '') ?>" placeholder="Enter address">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary w-100">Update Profile</button>
        </div>
    </form>
</div>
</body>
</html>
