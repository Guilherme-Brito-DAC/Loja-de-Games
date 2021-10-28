<?php
class Jogo 
{
    public $id;
    public $nome;
    public $midia;
    public $genero;
    public $classificacao;
    public $estoque;
    public $imagem;

    public $con;

    public function __construct()
    {
        $conexao = new Conexao();
        $this->con = $conexao->retornarConexao();
    }

    public function Criar()
    {
        $sql = $this->con->prepare("INSERT INTO jogo (id, nome, midia, genero, classificacao, estoque, imagem) VALUES (null,?,?,?,?,?,?)");
        $sql->execute([$this->nome,$this->midia,$this->genero,$this->classificacao,$this->estoque, $this->imagem]);
    }

    public function Pesquisar($pesquisa)
    {
        if($pesquisa == "")
        {
            $sql = $this->con->prepare("SELECT * FROM jogo");
            $sql->execute();
            $row = $sql->fetchAll();
        }
        else
        {
            $sql = $this->con->prepare("SELECT * FROM jogo WHERE nome LIKE ? ");
            $sql->execute(['%'.$pesquisa.'%']);
            $row = $sql->fetchAll();
        }

        return $row;		
	}

	public function Listar()
    {
        $sql = $this->con->prepare("SELECT * FROM jogo");
        $sql->execute();
        $row = $sql->fetchAll();

        return $row;		
	}

    public function ListarUmJogo()
    {
        $sql = $this->con->prepare("SELECT * FROM jogo WHERE id = ?");
        $sql->execute([$this->id]);
        $row = $sql->fetchAll();

        if(sizeof($row) > 0)
        {
            return $row[0];
        }
        else
        {
            return $row;
        }		
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