<?php

  include 'css/reset.css';
  include 'css/login.css';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method="POST" action="../?acao=login">
        <input type="text" placeholder="Login" required/>
        <input type="password" placeholder="Senha" required/>
        <button type="submit">Login</button>
    </form>
    <a href="./Cadastro.php">Cadastro</a>
</body>
</html>