<?php
class JogoController{

    public function Criar()
    {
        $obj = new Jogo();

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
        $obj->setId($_POST["id"]);


        $obj -> update();
        $this->read();
    }
        
    public function Deletar()
    {
        $obj = new Jogo();
        $obj->setId($_POST["id"]);
        $obj->delete();
        $this->read();
    }
}