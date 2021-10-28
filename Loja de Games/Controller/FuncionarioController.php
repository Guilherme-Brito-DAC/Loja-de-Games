<?php
class FuncionarioController
{
    public function Login()
    {
        session_start();
        $obj = new Funcionario();
        $obj->nome = $_POST["nome"];
        $obj->senha = $_POST["senha"];

        if($obj->Login())
        {
            $_SESSION["usuario"] = $obj->ListarUmFuncionario();
            array_push($_SESSION["usuario"], "funcionario");

            $_SESSION["mensagem"] = "Sucesso! Logado com êxito!";

            header("Location: ./index.php?acao=listarJogos");
        }
        else
        {
            $_SESSION["mensagem"] = "Nome ou senha incorretos!";
            header("Location: ./view/login_de_funcionario.php");
        }
    }

    public function Cadastrar()
    {
        session_start();
        try 
        {
            $obj = new Funcionario();
            $obj->nome = $_POST["nome"];
            $obj->endereco = $_POST["endereco"];
            $obj->senha = $_POST["senha"];
    
            $obj->Criar();
            $_SESSION["mensagem"] = "Sucesso! Funcionário cadastrado com êxito!";
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
        header("Location: ./view/login_de_funcionario.php");
    }
    
}