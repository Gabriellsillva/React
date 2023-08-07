<?php 
    require_once "conection.php";

    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recupera os dados do formulário
        $nome = $_POST["nome"];
        $senh = $_POST["senha"];
        $email = $_POST["email"];
        $gener = $_POST["genero"];

        //echo $nome . $senh . $email . $gener;

        //Consulta SQL para inserir dados do usuário
        $sql = "INSERT INTO usuarios (nome, senha, email, genero) VALUES ('$nome', '$senh', '$email','$gener')";

        if ($conn->query($sql) === TRUE) {
            echo "Dados inseridos com sucesso!";
            header("Location:../index.html?code=3");
        }else {
            if ($conn->errno == 1062) {
                echo "Erro: Dados já existentes na tabela.";
                header("Location:../Pages/cadastrar.html?code=1");
            } else {
                echo "Erro ao inserir dados: " . $conn->error;
                header("Location:../Pages/cadastrar.html?code=2");
            }
        }
    }else {
            echo "Método inválido. Use o método POST para enviar dados.";
    }
    // Fecha a conexão com o banco de dados
    $conn->close();
    

?>