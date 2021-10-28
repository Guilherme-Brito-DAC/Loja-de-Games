<?php
class JogoController{

    public function Criar()
    {

        session_start();
        try 
        {
            $obj = new Jogo();

            $obj->nome = $_POST["nome"];
            $obj->midia = $_POST["midia"];
            $obj->genero = $_POST["genero"];
            $obj->classificacao = $_POST["classificacao"];
            $obj->estoque = $_POST["estoque"];
            $obj->imagem = $_POST["imagem"];
    
            $obj -> Criar();

            $_SESSION["mensagem"] = "Sucesso! Usuário cadastrado com êxito!";
            $this->Listar();
	    } 
        catch(Exception $e) 
        {
            $_SESSION["mensagem"] = "Aconteceu algum erro";
            $this->Listar();
		}
    }

    public function Pesquisar()
    {
        session_start();
        $obj = new Jogo();
        $Jogos = $obj->Pesquisar($_POST["pesquisar"]);

        $_SESSION["Jogos"] = $Jogos;

        header('Location: ./view/main.php');
    }

    public function Listar()
    {
        session_start();
        $obj = new Jogo();
        $Jogos = $obj->Listar();

        $_SESSION["Jogos"] = $Jogos;

        header('Location: ./view/main.php');
    }

    public function Editar()
    {
        $obj = new Jogo();
        $obj->id = $_POST["id"];

        $obj->nome = $_POST["nome"];
        $obj->midia = $_POST["midia"];
        $obj->genero = $_POST["genero"];
        $obj->classificacao = $_POST["classificacao"];
        $obj->estoque = $_POST["estoque"];

        $obj -> Editar();
        $this->Listar();
    }
        
    public function Deletar()
    {
        $obj = new Jogo();
        $obj->id = $_POST["id"];

        $obj->Deletar();
        $this->Listar();
    }
}