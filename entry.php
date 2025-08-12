<?php
include("connection.php");
    // Create connection
    // Check connection
    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password =  $_POST['pass'];
        $query = "SELECT * FROM `rdata` WHERE `email` = '$email' && `password` = '$password' ";
        $data  = mysqli_query($mysqli ,$query);
        $total= mysqli_num_rows($data);
        if($total ==1){
            header('location:main.html');
        }else{
             header('location:main.html');
            // echo "login failed! No such user";
        }
    }
?> 