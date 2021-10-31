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
    public partial class Cadastro_de_Cliente : Form
    {
        public Cadastro_de_Cliente()
        {
            InitializeComponent();
        }

        private void btn_cadastrar_Click(object sender, EventArgs e)
        {
            if (string.IsNullOrEmpty(txt_nome.Text) || string.IsNullOrEmpty(txt_email.Text) || string.IsNullOrEmpty(txt_endereco.Text) || string.IsNullOrEmpty(txt_senha.Text))
            {
                MessageBox.Show("Complete todos os campos!");
            }
            else
            {
                Cliente.nome = txt_nome.Text;
                Cliente.email = txt_nome.Text;
                Cliente.endereco = txt_endereco.Text;
                Cliente.senha = txt_senha.Text;

                Cliente.Criar();

                MessageBox.Show("Cliente criado com sucesso!");

                Main main = new Main();
                main.Show();
                Hide();
            }
        }

        private void btn_login_Click(object sender, EventArgs e)
        {
            Login_de_Cliente Login_de_Cliente = new Login_de_Cliente();
            Login_de_Cliente.Show();
            Hide();
        }
    }
}
