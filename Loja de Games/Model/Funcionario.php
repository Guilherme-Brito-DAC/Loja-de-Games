<?php
class Funcionario 
{
    public $id;
    public $nome;
    public $endereco;
    public $idade;
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
        $sql = $this->con->prepare("INSERT INTO funcionario (id, nome, endereco, idade, vendas, senha) VALUES (null,?,?,?,?,?)");
        $sql->execute([$this->nome,$this->endereco,$this->idade,$this->vendas,$this->senha]);
    }

    public function Login()
    {
        $sql = $this->con->prepare("SELECT * FROM funcionario WHERE nome = ? AND senha = ?");
        $sql->execute();
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
        $sql = $this->con->prepare("UPDATE funcionario SET nome = ?, endereco = ?, idade = ?, vendas = ?, senha = ?  WHERE id=?");
		$sql->execute([$this->nome,$this->endereco,$this->idade,$this->vendas,$this->senha,$this->id]);
	}

	public function Deletar()
    {
		$sql = $this->con->prepare("DELETE FROM funcionario WHERE id=?");
		$sql->execute([$this->id]);
	}
}
?>