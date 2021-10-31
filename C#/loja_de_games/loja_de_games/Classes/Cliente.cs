namespace loja_de_games.Classes
{
    public static class Cliente
    {
        public static int id { get; set; }
        public static string nome { get; set; }
        public static string email { get; set; }
        public static string endereco { get; set; }
        public static string senha { get; set; }
        public static Conexao con = new Conexao();

        public static void Criar()
        {
            con.ExecutarComando($"INSERT INTO `cliente`(`id`, `nome`, `email`, `endereco`, `senha`) VALUES (null,'{nome}','{email}','{endereco}','{senha}') ");
        }

        public static void Editar()
        {
            con.ExecutarComando($"UPDATE `cliente` SET `nome`= '{nome}',`email`= '{email}',`endereco`= '{endereco}',`senha`= '{senha}' WHERE id = '{id}'");
        }

        public static void Deletar()
        {
            con.ExecutarComando($"DELETE FROM `cliente` WHERE id = {id}");
        }

        public static bool Login()
        {
            var resultado = con.ExecutarConsulta($"SELECT * FROM cliente WHERE email = '{email}' AND senha = '{senha}'");

            if (resultado.Rows.Count > 0)
            {
                id = (int)resultado.Rows[0]["id"];
                nome = (string)resultado.Rows[0]["nome"];
                email = (string)resultado.Rows[0]["email"];
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
            email = "";
            endereco = "";
            senha = "";
        }
    }
}
