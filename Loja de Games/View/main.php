<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        <?php include "./css/reset.css" ?>
        <?php include "./css/main.css" ?>
    </style>
    <title>Menu</title>
</head>
<body>
    <div class="menu">
        <img src="https://img.icons8.com/pastel-glyph/40/ffffff/controller--v1.png"/>
        <a href="../index.php?acao=logoffCliente">Sair</a>
    </div>
    <div class="pesquisa">
        <h1>Jogos</h1>
        <div>
            <form action="../index.php?acao=listarJogos" method="post">
                <button class="hidden"><img src="https://img.icons8.com/ios-glyphs/20/ffffff/refresh--v1.png"/></button>
            </form>
            <form class="pesquisarForm" action="../index.php?acao=pesquisar" method="post">
                <img src="https://img.icons8.com/ios-filled/17/ffffff/search.png"/>
                <input type="text" name="pesquisar" placeholder="Pesquisar..." />
            </form>
        </div>
    </div>
   <div class="listaJogos">

        <?php

        if(count($_SESSION["Jogos"]) == 0)
        {
            echo '<p>Ops! Parece que não tem nenhum jogo aqui</p>';
        }

        for ($i = 0; $i < count($_SESSION["Jogos"]); $i++) {
            echo '<div class="jogo">';
            echo '<img src='.$_SESSION["Jogos"][$i]["imagem"].' />';
            echo '<h1>'.$_SESSION["Jogos"][$i]["nome"].'</h1>';
            echo '<br>';
            echo '<div class="descricao">';
            echo '<p class="classificao">'.$_SESSION["Jogos"][$i]["classificacao"].'</p>';
            echo '<p>'.$_SESSION["Jogos"][$i]["genero"].'</p>';
            echo '</div>';
            echo '</div>';
        }

        ?>

    </div>
</body>
</html>