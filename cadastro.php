<?php 
    global $pdo;
    require_once("conexao.php");
    require_once ("Usuarios.php");
?>
   
   
<?php 
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        $senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_SPECIAL_CHARS);
    }
    
    $usuario = new Usuarios($pdo);
    $cadastro = $usuario->inserir ($nome, $email, $senha);
   
?>
    
    


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Cadastrar Usuário</h1>
        <form action="cadastro.php" method="post">
            <label for="nome">Nome Completo</label>
            <input type="text" name="nome" id="idnome" required>

            <label for="email">Email</label>
            <input type="email" name="email" id="idemail" required>

            <label for="senha">Senha</label>
            <input type="password" name="senha" id="idsenha">

            <input type="submit" value="Cadastrar">
        </form>
        <button onclick="javascript:window.location.href='index.php'">Voltar</button>
    </main>
</body>
</html>