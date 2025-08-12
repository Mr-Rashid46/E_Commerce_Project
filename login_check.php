 
<?php
include("connection.php");
if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($mysqli, $_POST['user']);
    $password = $_POST['pass'];

    $sql = "SELECT * FROM logindata WHERE username='$username'";
    $result = mysqli_query($mysqli, $sql);

    if ($result && mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        // Assuming password is hashed in database:
        if (password_verify($password, $row['password'])) {
            session_start();
            $_SESSION['username'] = $username;
            header("Location: welcome.php");
            exit();
        } else {
            echo '<script>
                alert("Login failed. Invalid username or password!");
                window.location.href = "login.php";
            </script>';
        }
    } else {
        echo '<script>
            alert("Login failed. Invalid username or password!");
            window.location.href = "login.php";
        </script>';
    }
}
?> 
