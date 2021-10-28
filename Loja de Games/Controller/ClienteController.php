<?php
class ClienteController{
    
    public function Login()
    {
        $obj = new Cliente();
        $obj->email = $_POST["email"];
        $obj->senha = $_POST["senha"];

        if($obj->Login())
        {
            session_start();
            $_SESSION["usuario"] = $obj->ListarUmCliente();

            header("Location: ./index.php?acao=listarJogos");
        }
        else
        {
            header("Location: ./view/login_de_cliente.php");
        }
    }

    public function Cadastrar()
    {
        $obj = new Cliente();
        $obj->nome = $_POST["nome"];
        $obj->endereco = $_POST["endereco"];
        $obj->email = $_POST["email"];
        $obj->senha = $_POST["senha"];

        $obj->Criar();
        header("Location: ./index.php?acao=listarJogos");
    }

    public function Logoff()
    {
        session_start();
        session_destroy();
        header("Location: ./view/login_de_cliente.php");
    }
}