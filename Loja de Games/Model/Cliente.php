<?php
class Cliente 
{
    public $id;
    public $nome;
    public $endereco;
    public $idade;
    public $email;
    public $senha;

    public $con;

    public function __construct()
    {
        $conexao = new Conexao();
        $this->con = $conexao->retornarConexao();
    }

    public function Criar()
    {
        $sql = $this->con->prepare("INSERT INTO cliente (id, nome, endereco, idade, email, senha) VALUES (null,?,?,?,?,?)");
        $sql->execute([$this->nome,$this->endereco,$this->idade,$this->email,$this->senha]);
    }

    public function Login()
    {
        $sql = $this->con->prepare("SELECT * FROM cliente WHERE email = ? AND senha = ?");
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
        $sql = $this->con->prepare("UPDATE cliente SET nome = ?, endereco = ?, idade = ?, email = ?, senha = ?  WHERE id=?");
		$sql->execute([$this->nome,$this->endereco,$this->idade,$this->email,$this->senha,$this->id]);
	}

	public function Deletar()
    {
		$sql = $this->con->prepare("DELETE FROM cliente WHERE id=?");
		$sql->execute([$this->id]);
	}
}
?>