<?php

require_once "Conexao/Conexao.php";
require_once "Model/Cliente.php";
require_once "Model/Funcionario.php";
require_once "Model/Jogo.php";
require_once "Model/Venda.php";

require_once "Controller/ClienteController.php";
require_once "Controller/FuncionarioController.php";
require_once "Controller/JogoController.php";
require_once "Controller/VendaController.php";

$cliente = new ClienteController();
$funcionario = new FuncionarioController();
$jogo = new JogoController();
$venda = new VendaController();

if (isset($_GET['acao'])) {
    switch ($_GET['acao']) 
    {
        case 'criarJogo':
            $jogo->Criar();
            break;

        case 'listarJogos':
            $jogo->Listar();
            break;

        case 'pesquisar':
            $jogo->Pesquisar();
            break;
        
        case 'editarJogo':
            $jogo->EditarView();
            break;

        case 'editarUmJogo':
            $jogo->Editar();
            break;

        case 'deletarJogo':
            $jogo->Deletar();
            break;

        case 'loginFuncionario':
            $funcionario->Login();
            break;

        case 'cadastroFuncionario':
            $funcionario->Cadastrar();
            break;

        case 'loginCliente':
            $cliente->Login();
            break;

        case 'logoffCliente':
            $cliente->Logoff();
            break;

        case 'cadastroCliente':
            $cliente->Cadastrar();
            break;
    }
} 
else 
{
    header('Location: ./view/login_de_cliente.php');
}