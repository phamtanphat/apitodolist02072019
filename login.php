<?php
    require("connect.php");
    require("responseLogin.php");
    $username = $_POST['username'];
    $password = $_POST['password'];

    $login = "SELECT Id FROM user WHERE Username='$username' AND Password='$password'";

    $query = mysqli_query($con , $login);

    $row = mysqli_num_rows($query);

    if($row > 0){
        $data = mysqli_fetch_assoc($query);
        $id = $data["Id"];
        echo json_encode(new ResponseLogin(true , $id));
    }else{
        echo json_encode(new ResponseLogin(true , 0));
    }
    
    
?>
