<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        <?php include "./css/reset.css" ?>
        <?php include "./css/login.css" ?>
    </style>
    <title>Login de cliente</title>
</head>
<body>
    <main>
        <form method="POST" action="../index.php?acao=cadastroCliente">
            <input type="text" name="nome" placeholder="Nome" required/>
            <br/>
            <input type="email" name="email" placeholder="Email" required/>
            <br/>
            <input type="text" name="endereco" placeholder="Endereco" required/>
            <br/>
            <input type="password" name="senha" placeholder="Senha" required/>
            <br/>
            <button type="submit">Login</button>
            <br/>
            <span>Não tem uma conta ainda?<a href="./Cadastro.php">Cadastro</a></span>
        </form>
    </main>
    <a href="./login_de_funcionario.php" id="funcionario">Sou funcionario</a>
</body>
</html>