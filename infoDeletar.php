<?php 
    global $pdo;
    require_once ("conexao.php");
    require_once ("Usuarios.php");

    $usuario = new Usuarios($pdo);

    $id = $_GET['id'];
    $deletar = $usuario->excluir($id);
    
    if ($deletar) {
        header('Location: index.php');
        exit();
    } else {
        echo "Erro ao excluir o usuário.";
    }


   