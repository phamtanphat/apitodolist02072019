<?php
    require("connect.php");

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $insertAccount = "INSERT INTO user VALUES (null , '$username' , '$password')";

    $data = mysqli_query($con,$insertAccount);

    class Response{
        function __construct($success,$message){
            $this->success=$success;
            $this->message=$message;
        }
    }
    if($data){
        echo json_encode(new Response(true , "Thành công"));
    }else{
        echo json_encode(new Response(true , "Thất bại"));
    }
?>