<?php
    require("connect.php");

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $insertAccount = "INSERT INTO user VALUES (null , $username , $password)";

    $data = mysqli_query($con , $insertAccount);

    if($data){
        echo "Thanh cong";
    }else{
        echo "That bai";
    }
?>