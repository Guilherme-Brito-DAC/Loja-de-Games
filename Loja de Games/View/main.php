<?php
    session_start();

    if($_SESSION["usuario"] == null)
    {
        header("Location: ../index.php");
    }

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
    <link rel="shortcut icon" href="./imgs/icon.ico" type="image/x-icon">  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/css/alertify.min.css" integrity="sha512-IXuoq1aFd2wXs4NqGskwX2Vb+I8UJ+tGJEu/Dc0zwLNKeQ7CW3Sr6v0yU3z5OQWe3eScVIkER4J9L7byrgR/fA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="menu">
        <span style="display:flex;align-items:center;font-weight:500;gap:5px">
            <img class="icone" src="./imgs/icon.png"/>
            <label>Next Jogos</label>
        </span>
        <a href="../index.php?acao=logoffCliente" style="margin-right:2rem">Sair</a>
    </div>
    <div class="pesquisa">
        <h1>Jogos</h1>
        <div>
            <?php
                if($_SESSION["usuario"][5] == "funcionario")
                {
                    echo '
                    <a class="novo" href="cadastro_de_jogos.php">
                    Criar Novo
                    </a> ';
                }
            ?>
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

for ($i = 0; $i < count($_SESSION["Jogos"]); $i++) 
{
        echo '<div class="jogo">';
        echo '<img class="banner" src='.$_SESSION["Jogos"][$i]["imagem"].' />';
        echo '<h1>'.$_SESSION["Jogos"][$i]["nome"].'</h1>';
        echo '<br>';
        echo '<div class="descricao">';
        echo '<p class="classificao">'.$_SESSION["Jogos"][$i]["classificacao"].'</p>';
        echo '<p>'.$_SESSION["Jogos"][$i]["genero"].'</p>';
        
        if($_SESSION["usuario"][5] == "funcionario")
        {
            echo '<div class="icones">';
            
            echo "<form class='deletar' action='../index.php?acao=editarJogo' method='post'>
                    <input style='display:none' name='id' value='".$_SESSION['Jogos'][$i]['id']."'/>
                    <button type='submit' class='iconeGame'><img src='https://img.icons8.com/ios-glyphs/30/dba10d/edit--v1.png'/><button>
                </form>";

            echo "<form class='deletar' id='".$_SESSION['Jogos'][$i]['id']."' action='../index.php?acao=deletarJogo' method='post'>
                    <input style='display:none' name='id' value='".$_SESSION['Jogos'][$i]['id']."'/>
                    <button type='button' onclick='Deletar(".$_SESSION['Jogos'][$i]['id'].")' class='iconeGame'><img src='https://img.icons8.com/flat-round/30/000000/delete-sign.png'/><button>
                </form>";

            echo '</div>';
        }

        echo '</div>';
        echo '</div>';
        }

        ?>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/alertify.js" integrity="sha512-eOUPKZXJTfgptSYQqVilRmxUNYm0XVHwcRHD4mdtCLWf/fC9XWe98IT8H1xzBkLL4Mo9GL0xWMSJtgS5te9rQA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
        function Deletar(id)
        {
            alertify.confirm("Tem certeza que deseja deletar esse jogo?",
            function(){
                document.getElementById(id).submit()
            },
            function(){
            })
        }
    </script>
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
</body>
</html>