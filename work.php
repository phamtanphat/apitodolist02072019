<?php
    require("connect.php");
    require("response.php");

    $iduser = $_POST['iduser'];
    class Work {
        function __construct($id,$workname,$time){
            $this->id=$id;
            $this->workname=$workname;
            $this->time=$time;
        }
    }

    $query = "SELECT * FROM work WHERE Iduser = '$iduser'";

    $data = mysqli_query($con , $query);

    $arrayWork = [];

    while($row = mysqli_fetch_assoc($data)){
        array_push($arrayWork,new Work($row['Id'],
                                        $row['Workname'],
                                        $row['Time'],));
    }

    if(sizeof($arrayWork) > 0 ){
        echo json_encode(new Response(true , $arrayWork)); 
    }else{
        echo json_encode(new Response(false , "Không có công việc")); 
    }
    

?>