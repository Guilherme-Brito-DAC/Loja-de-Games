<?php
class Funcionario 
{
    public $id;
    public $nome;
    public $endereco;
    public $vendas;
    public $senha;

    public $con;

    public function __construct()
    {
        $conexao = new Conexao();
        $this->con = $conexao->retornarConexao();
    }

    public function Criar()
    {
        $sql = $this->con->prepare("INSERT INTO funcionario (id, nome, endereco, vendas, senha) VALUES (null,?,?,0,?)");
        $sql->execute([$this->nome,$this->endereco,$this->senha]);
    }

    public function ListarUmFuncionario()
    {
        $sql = $this->con->prepare("SELECT * FROM funcionario WHERE nome = ? AND senha = ?");
        $sql->execute([$this->nome,$this->senha]);
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

    public function Login()
    {
        $sql = $this->con->prepare("SELECT * FROM funcionario WHERE nome = ? AND senha = ?");
        $sql->execute([$this->nome,$this->senha]);
        $count = $sql->fetchColumn();

        if($count > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    
	public function Editar()
    {
        $sql = $this->con->prepare("UPDATE funcionario SET nome = ?, endereco = ?, vendas = ?, senha = ?  WHERE id=?");
		$sql->execute([$this->nome,$this->endereco,$this->vendas,$this->senha,$this->id]);
	}

	public function Deletar()
    {
		$sql = $this->con->prepare("DELETE FROM funcionario WHERE id=?");
		$sql->execute([$this->id]);
	}
}
?>