<?php
class Jogo 
{
    private $id;

    
    private $con;

    public function __construct()
    {
        $conexao = new Conexao();
        $this->con = $conexao->retornarConexao();
    }

    public function create()
    {
        $sql = $this->con->prepare("");
        $sql->execute([]);
    }

	public function read()
    {
        $sql = $this->con->prepare("SELECT * FROM jogos");
        $sql->execute();
        $row = $sql->fetchAll();

        return $row;		
	}

	public function update()
    {
        $sql = $this->con->prepare("");
		$sql->execute([]);
	}

	public function delete()
    {
		$sql = $this->con->prepare("DELETE FROM jogos WHERE id=?");
		$sql->execute([$this->id]);
	}
}
?>