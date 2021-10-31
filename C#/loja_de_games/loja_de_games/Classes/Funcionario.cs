namespace loja_de_games.Classes
{
    public static class Funcionario
    {
        public static int id { get; set; }
        public static string nome { get; set; }
        public static int vendas { get; set; }
        public static string endereco { get; set; }
        public static string senha { get; set; }
        public static Conexao con = new Conexao();

        public static void Criar()
        {
            con.ExecutarComando($"INSERT INTO `funcionario`(`id`, `nome`, `vendas`, `endereco`, `senha`) VALUES (null,{nome},0,{endereco},{senha}) ");
        }

        public static void Editar()
        {
            con.ExecutarComando($"UPDATE `funcionario` SET `nome`= '{nome}',`vendas`= '{vendas}',`endereco`= '{endereco}',`senha`= '{senha}' WHERE id = '{id}'");
        }

        public static void Deletar()
        {
            con.ExecutarComando($"DELETE FROM `funcionario` WHERE id = '{id}'");
        }

        public static bool Login()
        {
            var resultado = con.ExecutarConsulta($"SELECT * FROM `funcionario` WHERE `nome`='{nome}' AND `senha`='{senha}'");

            if (resultado.Rows.Count > 0)
            {
                id = (int)resultado.Rows[0]["id"];
                nome = (string)resultado.Rows[0]["nome"];
                vendas = (int)resultado.Rows[0]["vendas"];
                endereco = (string)resultado.Rows[0]["endereco"];
                senha = (string)resultado.Rows[0]["senha"];

                return true;
            }
            else
            {
                Logoff();
                return false;
            }
        }

        public static void Logoff()
        {
            id = 0;
            nome = "";
            vendas = 0;
            endereco = "";
            senha = "";
        }
    }
}
