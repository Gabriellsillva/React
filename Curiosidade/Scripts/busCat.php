<?php 
    require_once "conection.php";

    $sql = "select * from categorias";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)==1){
        echo "é 1 : ";
        echo var_dump($result);
    }else{
        //echo "deu bom";
        $row = mysqli_fetch_all($result);
        
        header('Content-Type: application/json');
        echo json_encode($row);
    }


?>