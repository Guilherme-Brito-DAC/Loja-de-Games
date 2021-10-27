<?php
class Conexao 
{
    private $server = "localhost";
    private $db = "loja_games";
    private $user = "root";
    private $pws = "";
    private $con;

    public function __construct() 
    {
    	try 
        {
        	$this->con = new PDO("mysql:host=$this->server;dbname=$this->db",$this->user,$this->pws);    
        	$this->con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	    } 
        catch(PDOException $e) 
        {
			echo "Falha na conexao " . $e->getMessage();
		}
    }

    public function retornarConexao() 
    {
        return $this->con;
    }
}
?>