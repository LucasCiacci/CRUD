<?php 
    global $pdo;

    require_once("conexao.php");
    require_once("Usuarios.php");

    $usuario = new Usuarios($pdo);
    $lista = $usuario->listarTodos();

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Listar Usuarios</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <main>
        <p>
            <a href="cadastro.php">Cadastrar Novo Usuário</a><br>
        </p>
        <caption>Listagem de Usuarios</caption>
        <table border="1">
            <tr>
                <th><strong>id</strong></th>
                <th>nome</th>
                <th>email</th>
                <th>senha</th>
            </tr>
            <tbody>
                <?php foreach ($lista as $pessoa):?>
                <tr>
                    <td><strong><?= $pessoa['id'] ?></strong></td>
                    <td><?= $pessoa['nome'] ?></td>
                    <td><?= $pessoa['email'] ?></td>
                    <td><?= $pessoa['senha'] ?></td>
                    <td><a href=""></a></td>
                    <td><a href=""></a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>
    </body>
    </html>

        
            
