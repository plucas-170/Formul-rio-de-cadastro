<?php
$resultado = "";
//Processamento dos dados do formulário
if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $usuario = trim($_POST["usuario"] ?? '');
    $email = trim($_POST["email"] ?? '');
    $senha = trim($_POST["senha"] ?? '');

    //Caso o usuário não digite em todos os campos de preenchimento, a página exigirá que ele preencha todos.
    if ($usuario === "" || $email === "" || $senha === ""){
        echo "Preencha todos os campos para se cadastrar!";
    } else {
        //Caso o usuário preencha tudo, o resultado será exibido na página. Essa div foi criada com o intuito de mostrar o resultado de maneira mais visual e atrativa.
        $resultado = "
            <div class='resultado sucesso'>
            <h3>Usuário cadastrado com sucesso!</h3>
            <p>Usuário: " . htmlspecialchars($usuario) . "</p>
            <p>E-mail: " . htmlspecialchars($email) . "</p>
            </div>
        ";    
    }
}
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
    <!-- A div tem como função criar a caixa de login onde os campos de preenchimento do formulário e o título estarão organizados -->
    <div class="container">
    <h1>Cadastre-se</h1>
    <form action="index.php" method="POST">
        <label for="Usuário" style="color:white">Usuário</label>
        <input type="text" placeholder="digite o usuário" id="usuario" name="usuario" required>

        <label for="E-mail" style="color:white">E-mail</label>
        <input type="email" placeholder="digite o e-mail" id="email" name="email" required>

        <label for="Senha" style="color:white">Senha</label>
        <input type="password" placeholder="digite a senha" id="senha" name="senha" required>

        <button type="submit">Cadastrar</button>
    </form>
    <!-- Exibe o resultado do preenchimento -->
    <?php echo $resultado; ?>
    </div>
</body>
<footer>
    <!-- O rodapé foi criado para mostrar a autoria do site -->
    <p>Este site foi criado por P.Lucas</p>
</footer>
</html>