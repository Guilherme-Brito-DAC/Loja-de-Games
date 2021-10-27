<?php

require_once "Controller/ClienteController.php";
require_once "Controller/FuncionarioController.php";
require_once "Controller/JogoController.php";
require_once "Controller/VendaController.php";

if (isset($_GET['acao'])) {

    switch ($_GET['acao']) 
    {
        case 'login':
            
            break;

        case 'cadastro':
        
            break;

        default:
            
            break;
    }
} 
else 
{
    
}