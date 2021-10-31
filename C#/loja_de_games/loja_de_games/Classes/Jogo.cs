using System.Data;

namespace loja_de_games.Classes
{
    public class Jogo
    {
        public int id { get; set; }
        public string nome { get; set; }
        public string midia { get; set; }
        public string genero { get; set; }
        public int classificacao { get; set; }
        public int estoque { get; set; }
        public string imagem { get; set; }
        public Conexao con { get; set; }

        public Jogo()
        {
            con = new Conexao();
        }

        public void Criar()
        {
            con.ExecutarComando($"INSERT INTO `jogo`(`id`, `nome`, `midia`, `genero`, `classificacao`, `estoque`, `imagem`) VALUES (null,{nome},{midia},{genero},{classificacao},{estoque},{imagem})");
        }

        public void Editar()
        {
            con.ExecutarComando($"UPDATE `jogo` SET `nome`= {nome},`midia`= {midia},`genero`= {genero},`classificacao`= {classificacao},`estoque`= {estoque},`imagem`= {imagem} WHERE id = {id}");
        }

        public void Deletar()
        {
            con.ExecutarComando($"DELETE FROM `jogo` WHERE id = {id}");
        }

        public DataTable ListarJogos()
        {
            return con.ExecutarConsulta($"SELECT * FROM `jogo`");
        }

        public DataTable Pesquisar(string pesquisa)
        {
            if (string.IsNullOrEmpty(pesquisa))
            {
                return ListarJogos();
            }
                    
            return con.ExecutarConsulta($"SELECT * FROM `jogo` WHERE `nome` = {pesquisa}");
        }
    }
}
