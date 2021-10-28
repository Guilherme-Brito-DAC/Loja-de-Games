<?php
    session_start();
?>
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
    <link rel="shortcut icon" href="./imgs/icon.ico" type="image/x-icon">  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/css/alertify.min.css" integrity="sha512-IXuoq1aFd2wXs4NqGskwX2Vb+I8UJ+tGJEu/Dc0zwLNKeQ7CW3Sr6v0yU3z5OQWe3eScVIkER4J9L7byrgR/fA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <main>
        <form method="POST" action="../index.php?acao=loginCliente">
            <h1 class="titulo">Login de cliente</h1>
            <input type="email" name="email" placeholder="Email" required/>
            <br/>
            <input type="password" name="senha" placeholder="Senha" required/>
            <br/>
            <button type="submit">Login</button>
            <br/>
            <span><p style="opacity:0.6">Não tem uma conta ainda?</p><a href="./cadastro_de_Cliente.php">Cadastro</a></span>
        </form>
    </main>
    <a href="./login_de_funcionario.php" id="funcionario">Sou funcionario</a>
</body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/alertify.js" integrity="sha512-eOUPKZXJTfgptSYQqVilRmxUNYm0XVHwcRHD4mdtCLWf/fC9XWe98IT8H1xzBkLL4Mo9GL0xWMSJtgS5te9rQA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
        function alerta(mensagem)
        {
            if(mensagem.includes("Sucesso"))
            {
                alertify.success(mensagem)
            }
            else
            {
                alertify.error(mensagem)
            }
        }
    </script>
    <?php
        if(isset($_SESSION['mensagem']))
        {
            $mensagem = $_SESSION['mensagem'];

            echo "<script type='text/JavaScript'> 
            alerta('$mensagem');
            </script>";

            unset($_SESSION['mensagem']);
        }
        ?>
</html>