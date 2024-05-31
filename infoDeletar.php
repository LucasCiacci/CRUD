<?php 
    global $pdo;
    require_once ("conexao.php");
    require_once ("Usuarios.php");

    $usuario = new Usuarios($pdo);

    $id = $_GET["id"];
    $deletar = $usuario->excluir($id);
    
    echo "Usuário excluido com sucesso!";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluido</title>
</head>
<body>
    <p>
        <button onclick="javascript:window.location.href='index.php'">Voltar para lista</button>
    </p>    
</body>
</html>

