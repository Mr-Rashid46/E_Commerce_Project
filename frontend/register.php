<?php
  $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Register";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql=" INSERT INTO `rdata` ( `full name`, `email`, `password`, `dt`) VALUES ( '$fullname', '$email', '$password', current_timestamp())";
    $result = mysqli_query($conn,$sql);
  //  command for delete
//  $v ="DELETE FROM `rdata` WHERE `sno` = '1' ";
//  $w = mysqli_query($conn,$v);
    
?>



































<!--  -->