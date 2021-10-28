<?php
    session_start();

    if($_SESSION["usuario"] == null)
    {
        header("Location: ../index.php");
    }

    if($_SESSION["usuario"][5] != "funcionario")
    {
        header("Location: main.php");
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
        <?php include "./css/login.css" ?>
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
        <div class="voltar">
            <a href="main.php">Voltar</a>
        </div>
        <form action="../index.php?acao=criarJogo" class="jogosForm" method="post">
            <div>
                <h1 class="titulo">Cadastro de jogo</h1>
                <input type="text" name="nome" placeholder="Nome" required/>
                <br/>
                <label class="lbl">Mídia</label>
                <select name="midia" class="input">
                    <option value="PC">PC</option>
                    <option value="Mobile">Mobile</option>
                    <option value="Playstation">Playstation</option>
                    <option value="Xbox">Xbox</option>
                    <option value="Nintendo">Nintendo</option>
                </select>
                <br/>
                <label class="lbl">Gênero</label>
                <select name="genero" class="input">
                    <option value="Ação">Ação</option>
                    <option value="Aventura">Aventura</option>
                    <option value="Estratégia">Estratégia</option>
                    <option value="RPG">RPG</option>
                    <option value="Esporte">Esporte</option>
                    <option value="Corrida">Corrida</option>
                    <option value="Jogo on-line">Jogo on-line</option>
                    <option value="Simulação">Simulação</option>
                </select>
                <br/>
                <label class="lbl">Classificação</label>
                <input type="number" placeholder="Classificação" min="10" max="18" value="10" name="classificacao" required/>
                <br/>
                <input type="number" placeholder="Estoque" min="0" name="estoque" required/>
                <br/>
                <button type="submit">Criar</button>
            </div>
            <div>
                <input type="text" id="imagem" placeholder="Cole a url da imagem aqui...." name="imagem" required/>
                <br />
                <label>Preview</label>
                <br />
                <img src="" id="preview"/>
            </div>
        </form>
    </body>
    <script>
        var txt_imagem = document.getElementById("imagem")
        var preview = document.getElementById("preview")

        txt_imagem.onblur = function()
        {
            preview.src = txt_imagem.value
            console.log(preview)
        }

    </script>
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