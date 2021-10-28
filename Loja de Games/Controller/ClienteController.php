<?php
class ClienteController
{
    public function Login()
    {
        session_start();
        $obj = new Cliente();
        $obj->email = $_POST["email"];
        $obj->senha = $_POST["senha"];

        if($obj->Login())
        {
            $_SESSION["usuario"] = $obj->ListarUmCliente();
            array_push($_SESSION["usuario"], "cliente");

            $_SESSION["mensagem"] = "Sucesso! Logado com êxito!";

            header("Location: ./index.php?acao=listarJogos");
        }
        else
        {
            $_SESSION["mensagem"] = "Usuário ou senha inválidos!";

            header("Location: ./view/login_de_cliente.php");
        }
    }

    public function Cadastrar()
    {
        session_start();
        try 
        {
            $obj = new Cliente();
            $obj->nome = $_POST["nome"];
            $obj->endereco = $_POST["endereco"];
            $obj->email = $_POST["email"];
            $obj->senha = $_POST["senha"];
    
            $obj->Criar();
            $_SESSION["mensagem"] = "Sucesso! Usuário cadastrado com êxito!";
            header("Location: ./index.php?acao=listarJogos");
	    } 
        catch(Exception $e) 
        {
            $_SESSION["mensagem"] = "Aconteceu algum erro";
            header("Location: ./index.php?acao=listarJogos");
		}
    }

    public function Logoff()
    {
        session_start();
        session_destroy();
        header("Location: ./view/login_de_cliente.php");
    }
}