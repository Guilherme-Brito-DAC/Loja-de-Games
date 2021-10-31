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
    public partial class Cadastro_de_funcionario : Form
    {
        public Cadastro_de_funcionario()
        {
            InitializeComponent();
        }

        private void btn_cadastrar_Click(object sender, EventArgs e)
        {
            if (string.IsNullOrEmpty(txt_nome.Text) || string.IsNullOrEmpty(txt_endereco.Text) || string.IsNullOrEmpty(txt_senha.Text))
            {
                MessageBox.Show("Complete todos os campos!");
            }
            else
            {
                Funcionario.nome = txt_nome.Text;
                Funcionario.endereco = txt_endereco.Text;
                Funcionario.senha = txt_senha.Text;

                Funcionario.Criar();

                MessageBox.Show("Funcionario criado com sucesso!");

                Jogos jogos = new Jogos();
                jogos.Show();
                Hide();
            }
        }

        private void btn_login_Click(object sender, EventArgs e)
        {
            Login_de_Funcionario Login_de_Funcionario = new Login_de_Funcionario();
            Login_de_Funcionario.Show();
            Hide();
        }
    }
}
