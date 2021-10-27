<?php
class Jogo 
{
    public $id;
    public $nome;
    public $midia;
    public $genero;
    public $classificacao;
    public $estoque;

    public $con;

    public function __construct()
    {
        $conexao = new Conexao();
        $this->con = $conexao->retornarConexao();
    }

    public function Criar()
    {
        $sql = $this->con->prepare("INSERT INTO jogo (id, nome, midia, genero, classificacao, estoque) VALUES (null,?,?,?,?,?)");
        $sql->execute([$this->nome,$this->midia,$this->genero,$this->classificacao,$this->estoque]);
    }

    public function Buscar($campo,$pesquisa)
    {
        $sql = $this->con->prepare("SELECT * FROM jogo WHERE ? LIKE ?");
        $sql->execute([$campo,$pesquisa]);
        $row = $sql->fetchAll();

        return $row;		
	}

	public function Listar()
    {
        $sql = $this->con->prepare("SELECT * FROM jogo");
        $sql->execute();
        $row = $sql->fetchAll();

        return $row;		
	}

	public function Editar()
    {
        $sql = $this->con->prepare("UPDATE jogo SET nome = ?, midia = ?, genero = ?, classificacao = ?, estoque = ?  WHERE id=?");
		$sql->execute([$this->nome,$this->midia,$this->genero,$this->classificacao,$this->estoque,$this->id]);
	}

	public function Deletar()
    {
		$sql = $this->con->prepare("DELETE FROM jogo WHERE id=?");
		$sql->execute([$this->id]);
	}
}
?>