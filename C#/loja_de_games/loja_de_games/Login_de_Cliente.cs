using loja_de_games.Classes;
using System;
using System.Windows.Forms;

namespace loja_de_games
{
    public partial class Login_de_Cliente : Form
    {
        public Login_de_Cliente()
        {
            InitializeComponent();
        }

        private void btn_login_Click(object sender, EventArgs e)
        {
            if (string.IsNullOrEmpty(txt_email.Text) || string.IsNullOrEmpty(txt_senha.Text))
            {
                MessageBox.Show("Complete todos os campos!");
            }
            else
            {
                Cliente.email = txt_email.Text;
                Cliente.senha = txt_senha.Text;

                if (Cliente.Login())
                {
                    Main main = new Main();
                    main.Show();
                    Hide();
                }
                else
                {
                    MessageBox.Show("Email ou senha inválidos!");
                }
            }
        }

        private void btn_funcionario_Click(object sender, EventArgs e)
        {
            Login_de_Funcionario Login_de_Funcionario = new Login_de_Funcionario();
            Login_de_Funcionario.Show();
            Hide();
        }

        private void btn_cadastro_Click(object sender, EventArgs e)
        {
            Cadastro_de_Cliente cadastro_De_Cliente = new Cadastro_de_Cliente();
            cadastro_De_Cliente.Show();
            Hide();
        }
    }
}
