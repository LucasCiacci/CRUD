<?php 
    global $pdo;
    require_once("conexao.php");
    require_once ("Usuarios.php");
     
    $usuario = new Usuarios($pdo);

    // Verifica se a requisição é POST
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        // Sanitiza e obtém os dados do formulário
        $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        $senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_SPECIAL_CHARS);
      
        // Insere o novo usuário
        $cadastro = $usuario->inserir ($nome, $email, $senha);
    
        echo "Usuário cadastrado com sucesso!";
    }else{
        echo "Algo errado ao cadastrar";
    }

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sucesso ou erro</title>
</head>
<body>
    <p>
    <button onclick="javascript:window.location.href='index.php'">Voltar para lista</button>
    </p>
</body>
</html>

   