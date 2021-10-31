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
    public partial class Jogos : Form
    {
        public Jogos()
        {
            InitializeComponent();
        }

        private void btn_criar_Click(object sender, EventArgs e)
        {
            if (string.IsNullOrEmpty(txt_nome.Text) || string.IsNullOrEmpty(txt_imagem.Text))
            {
                MessageBox.Show("Complete todos os campos!");
            }
            else
            {
                Jogo jogo = new Jogo();
                jogo.estoque = (int)txt_estoque.Value;
                jogo.nome = txt_nome.Text;
                jogo.imagem = txt_imagem.Text;
                jogo.midia = (string)txt_midia.SelectedItem;
                jogo.genero = (string)txt_genero.SelectedItem;

                jogo.Criar();
                Limpar();
            }

            AtualizarTabela();
        }

        private void btn_editar_Click(object sender, EventArgs e)
        {
            if (string.IsNullOrEmpty(txt_nome.Text) || string.IsNullOrEmpty(txt_imagem.Text))
            {
                MessageBox.Show("Complete todos os campos!");
            }
            else
            {
                Jogo jogo = new Jogo();
                jogo.id = int.Parse(txt_codigo.Text);
                jogo.estoque = (int)txt_estoque.Value;
                jogo.nome = txt_nome.Text;
                jogo.imagem = txt_imagem.Text;
                jogo.midia = (string)txt_midia.SelectedItem;
                jogo.genero = (string)txt_genero.SelectedItem;

                jogo.Criar();
                Limpar();
            }

            Limpar();
            AtualizarTabela();
        }

        private void btn_deletar_Click(object sender, EventArgs e)
        {
            if (txt_codigo.Text != "")
            {
                Jogo jogo = new Jogo();
                jogo.id = int.Parse(txt_codigo.Text);
                jogo.Deletar();
                Limpar();
                AtualizarTabela();
            }
        }

        private void Jogos_Load(object sender, EventArgs e)
        {
            Limpar();
            AtualizarTabela();
        }

        public void AtualizarTabela()
        {
            Jogo jogo = new Jogo();
            dtg.DataSource = jogo.ListarJogos();
        }

        public void Limpar()
        {
            txt_estoque.Value = 0;
            txt_nome.Text = "";
            txt_codigo.Text = "";
            txt_imagem.Text = "";
        }

        private void dtg_CellClick(object sender, DataGridViewCellEventArgs e)
        {
            txt_codigo.Text = dtg.SelectedRows[0].Cells[0].Value.ToString();
            txt_nome.Text = dtg.SelectedRows[0].Cells[1].Value.ToString();
            txt_midia.SelectedItem = dtg.SelectedRows[0].Cells[2].Value.ToString();
            txt_genero.SelectedItem = dtg.SelectedRows[0].Cells[3].Value.ToString();
            txt_classificacao.Value = (int)dtg.SelectedRows[0].Cells[4].Value;
            txt_estoque.Value = (int)dtg.SelectedRows[0].Cells[5].Value;
            txt_imagem.Text = dtg.SelectedRows[0].Cells[6].Value.ToString();
        }

        private void btn_logoff_Click(object sender, EventArgs e)
        {
            Funcionario.Logoff();
            Login_de_Funcionario login_de_Funcionario = new Login_de_Funcionario();
            login_de_Funcionario.Show();
            Hide();
        }
    }
}
