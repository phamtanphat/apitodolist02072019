<?php
    require("connect.php");
    require("response.php");
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $insertAccount = "INSERT INTO user VALUES (null , '$username' , '$password')";

    $data = mysqli_query($con,$insertAccount);

    if($data){
        echo json_encode(new Response(true , "Thành công"));
    }else{
        echo json_encode(new Response(false , "Thất bại"));
    }
?>