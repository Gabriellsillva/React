<?php
    require_once "conection.php";
    $usuario = $_POST['usern'];
    $senha = $_POST['pw'];

    if($_SERVER['REQUEST_METHOD']=="POST"){
        
        
        $sql = "Select id from usuarios where nome = '$usuario' and senha = '$senha'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)==1){
            
            session_start();
            $_SESSION['Logado']=TRUE;
            $row = mysqli_fetch_assoc($result);
            
            $_SESSION['UsuarioL'] = $row["id"];
            echo "Entrou no sistema";

            exit();
        }else{
            echo "usuario ou senha errado";
            header("Location: ../index.html?code=1");
        }
    }


?>