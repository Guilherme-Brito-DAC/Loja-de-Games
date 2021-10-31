using loja_de_games.Classes;
using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Text;
using System.Windows.Forms;

namespace loja_de_games
{
    public partial class Main : Form
    {
        public Main()
        {
            InitializeComponent();
        }

        private void btn_logoff_Click(object sender, EventArgs e)
        {
            Cliente.Logoff();
            Login_de_Cliente login_De_Cliente = new Login_de_Cliente();
            login_De_Cliente.Show();
            Hide();
        }

        private void Main_Load(object sender, EventArgs e)
        {
            Jogo jogo = new Jogo();
            var dados = jogo.ListarJogos();
            dados.Columns.Remove("id");
            dados.Columns.Remove("estoque");
            dados.Columns.Remove("imagem");

            dtg.DataSource = dados;
        }

        private void dtg_CellContentClick(object sender, DataGridViewCellEventArgs e)
        {

        }
    }
}
