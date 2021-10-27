<?php
class JogoController{

    public function Criar()
    {
        $obj = new Jogo();

        $obj->nome = $_POST["nome"];
        $obj->midia = $_POST["midia"];
        $obj->genero = $_POST["genero"];
        $obj->classificacao = $_POST["classificacao"];
        $obj->estoque = $_POST["estoque"];

        $obj -> create();
        $this->read();
    }

    public function Listar()
    {
        session_start();
        $obj = new Jogo();
        $Jogos = $obj->read();

        $_SESSION["Jogos"] = $Jogos;

        header('Location: ');
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

        $obj -> update();
        $this->read();
    }
        
    public function Deletar()
    {
        $obj = new Jogo();
        $obj->id = $_POST["id"];

        $obj->delete();
        $this->read();
    }
}