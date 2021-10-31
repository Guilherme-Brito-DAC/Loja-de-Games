using loja_de_games.Classes;
using System;
using System.Windows.Forms;

namespace loja_de_games
{
    public partial class Login_de_Funcionario : Form
    {
        public Login_de_Funcionario()
        {
            InitializeComponent();
        }

        private void btn_login_Click(object sender, EventArgs e)
        {
            if (string.IsNullOrEmpty(txt_nome.Text) || string.IsNullOrEmpty(txt_senha.Text))
            {
                MessageBox.Show("Complete todos os campos!");
            }
            else
            {
                Funcionario.nome = txt_nome.Text;
                Funcionario.senha = txt_senha.Text;

                if (Funcionario.Login())
                {
                    Jogos jogos = new Jogos();
                    jogos.Show();
                    Hide();
                }
                else
                {
                    MessageBox.Show("Email ou senha inválidos!");
                }
            }
        }

        private void btn_cliente_Click(object sender, EventArgs e)
        {
            Login_de_Cliente Login_de_Cliente = new Login_de_Cliente();
            Login_de_Cliente.Show();
            Hide();
        }

        private void btn_cadastro_Click(object sender, EventArgs e)
        {
            Cadastro_de_funcionario Cadastro_de_funcionario = new Cadastro_de_funcionario();
            Cadastro_de_funcionario.Show();
            Hide();
        }
    }
}
