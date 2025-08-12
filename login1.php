<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="path/to/flaticon.css">
    <title> Login</title>
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #000;
    background-image: url(images/backgroundimg.jpeg);
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}
.container {
    background: rgba(0, 0, 0, 0.85);
    padding: 2rem;
    border-radius: 15px;
    box-shadow: 0 0 25px rgba(255, 215, 0, 0.3);
    width: 350px;
    position: relative;
    overflow: hidden;
    border: 1px solid #FFD700;
}
.container h2 {
    text-align: center;
    margin-bottom: 1rem;
    color: #FFD700;
    letter-spacing: 1px;
    font-size: 24px;
}
form {
    display: flex;
    flex-direction: column;
}
input[type="text"],
input[type="email"],
input[type="password"] {
    padding: 12px;
    margin: 10px 0;
    border: 1px solid #FFD700;
    border-radius: 6px;
    background-color: rgba(255, 255, 255, 0.05);
    color: #FFD700;
    font-size: 14px;
}
input::placeholder {
    color: #f9e79f;
}
button,
input[type="submit"] {
    padding: 12px;
    background-color: #FFD700;
    color: black;
    font-weight: bold;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    margin-top: 10px;
    transition: all 0.3s ease-in-out;
}
button:hover,
input[type="submit"]:hover {
    background-color: #e6c200;
}
.register {
    text-align: center;
    padding: 0;
    color: white;
    border: none;
    border-radius: 8px;
}
.toggle {
    text-align: center;
    margin-top: 15px;
    font-size: 0.9rem;
    color: #f0f0f0;
}
.toggle a {
    color: #FFD700;
    text-decoration: none;
    font-weight: bold;
}
.toggle a:hover {
    text-decoration: underline;
}
.shoe-icon {
    position: absolute;
    top: -30px;
    left: calc(50% - 25px);
    width: 50px;
    height: 50px;
}
.shoe-header {
    text-align: center;
    margin-bottom: 1rem;
}
.shoe-header img {
    width: 60px;
    margin-bottom: 10px;
}
</style>
</head>
<body>
    <div class="container" id="loginBox">
        <div class="shoe-header">
            <h2>Login</h2>
        </div>
        <form   name="form" action="entry.php" onsubmit="return isvalid()" method="post"  >
            <input type="email" placeholder="Email" name="email" >
            <input type="password" placeholder="Password" name="pass" >
             <input type="submit"  name="login" style="margin: auto;" value="Login"> 
        </form>
        <div class="toggle">
            Don't have an account? <a href="#" onclick="toggleForm(true)">Register</a>
        </div>
    </div>
    <div class="container" id="registerBox" style="display: none;">
        <div class="shoe-header">
            <img src="images/shoes.png" class="logo" alt="Shoe Icon">
            <h2>Create Account</h2>
        </div>
        <form method="post" action="register.php">
            <input type="text"  name="fullname" placeholder="Full Name" >
            <input type="email" name="email" placeholder="Email" >
            <input type="password" name="password" placeholder="Password" >
            <div class="register">
            <button type="submit"  name="register" style="margin: auto;">Register</button>
            </div>
        </form>
        <div class="toggle">
            Already have an account? <a href="#" onclick="toggleForm(false)">Login</a>
        </div>
    </div>

    <script>
        function toggleForm(isRegistering) {
            document.getElementById('loginBox').style.display = isRegistering ? 'none' : 'block';
            document.getElementById('registerBox').style.display = isRegistering ? 'block' : 'none';
        }
    </script>
    <script>
        function isvalid()
        {
            var user=document.form.user.value;
            var pass=document.form.pass.value;
            if(user.length=="" && pass.length==""){
                alert("Username and password field is empty!!!");
                return false
            }
            else{
                if(user.length==""){
                    alert("username is empty!!!");
                    return false
                }
                 if(pass.length==""){
                    alert("password is empty!!!");
                    return false
                }
            }
        }
    </script>
</body>
</html>
