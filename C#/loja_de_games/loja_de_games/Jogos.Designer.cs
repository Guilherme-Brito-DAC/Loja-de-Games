
namespace loja_de_games
{
    partial class Jogos
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.dtg = new System.Windows.Forms.DataGridView();
            this.btn_criar = new System.Windows.Forms.Button();
            this.btn_editar = new System.Windows.Forms.Button();
            this.btn_deletar = new System.Windows.Forms.Button();
            this.txt_nome = new System.Windows.Forms.TextBox();
            this.txt_imagem = new System.Windows.Forms.TextBox();
            this.txt_midia = new System.Windows.Forms.ComboBox();
            this.txt_genero = new System.Windows.Forms.ComboBox();
            this.txt_classificacao = new System.Windows.Forms.NumericUpDown();
            this.txt_estoque = new System.Windows.Forms.NumericUpDown();
            this.label1 = new System.Windows.Forms.Label();
            this.label2 = new System.Windows.Forms.Label();
            this.Imagem = new System.Windows.Forms.Label();
            this.label4 = new System.Windows.Forms.Label();
            this.label5 = new System.Windows.Forms.Label();
            this.label6 = new System.Windows.Forms.Label();
            this.label7 = new System.Windows.Forms.Label();
            this.txt_codigo = new System.Windows.Forms.TextBox();
            this.btn_logoff = new System.Windows.Forms.Button();
            ((System.ComponentModel.ISupportInitialize)(this.dtg)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.txt_classificacao)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.txt_estoque)).BeginInit();
            this.SuspendLayout();
            // 
            // dtg
            // 
            this.dtg.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            this.dtg.Location = new System.Drawing.Point(12, 206);
            this.dtg.Name = "dtg";
            this.dtg.RowTemplate.Height = 25;
            this.dtg.SelectionMode = System.Windows.Forms.DataGridViewSelectionMode.FullRowSelect;
            this.dtg.Size = new System.Drawing.Size(776, 313);
            this.dtg.TabIndex = 0;
            this.dtg.CellClick += new System.Windows.Forms.DataGridViewCellEventHandler(this.dtg_CellClick);
            // 
            // btn_criar
            // 
            this.btn_criar.ForeColor = System.Drawing.Color.FromArgb(((int)(((byte)(18)))), ((int)(((byte)(18)))), ((int)(((byte)(18)))));
            this.btn_criar.Location = new System.Drawing.Point(12, 150);
            this.btn_criar.Name = "btn_criar";
            this.btn_criar.Size = new System.Drawing.Size(112, 48);
            this.btn_criar.TabIndex = 1;
            this.btn_criar.Text = "Criar";
            this.btn_criar.UseVisualStyleBackColor = true;
            this.btn_criar.Click += new System.EventHandler(this.btn_criar_Click);
            // 
            // btn_editar
            // 
            this.btn_editar.ForeColor = System.Drawing.Color.FromArgb(((int)(((byte)(18)))), ((int)(((byte)(18)))), ((int)(((byte)(18)))));
            this.btn_editar.Location = new System.Drawing.Point(140, 150);
            this.btn_editar.Name = "btn_editar";
            this.btn_editar.Size = new System.Drawing.Size(112, 48);
            this.btn_editar.TabIndex = 2;
            this.btn_editar.Text = "Editar";
            this.btn_editar.UseVisualStyleBackColor = true;
            this.btn_editar.Click += new System.EventHandler(this.btn_editar_Click);
            // 
            // btn_deletar
            // 
            this.btn_deletar.ForeColor = System.Drawing.Color.FromArgb(((int)(((byte)(18)))), ((int)(((byte)(18)))), ((int)(((byte)(18)))));
            this.btn_deletar.Location = new System.Drawing.Point(269, 150);
            this.btn_deletar.Name = "btn_deletar";
            this.btn_deletar.Size = new System.Drawing.Size(112, 48);
            this.btn_deletar.TabIndex = 3;
            this.btn_deletar.Text = "Deletar";
            this.btn_deletar.UseVisualStyleBackColor = true;
            this.btn_deletar.Click += new System.EventHandler(this.btn_deletar_Click);
            // 
            // txt_nome
            // 
            this.txt_nome.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(32)))), ((int)(((byte)(32)))), ((int)(((byte)(32)))));
            this.txt_nome.BorderStyle = System.Windows.Forms.BorderStyle.None;
            this.txt_nome.ForeColor = System.Drawing.Color.White;
            this.txt_nome.Location = new System.Drawing.Point(193, 53);
            this.txt_nome.Name = "txt_nome";
            this.txt_nome.Size = new System.Drawing.Size(121, 15);
            this.txt_nome.TabIndex = 4;
            // 
            // txt_imagem
            // 
            this.txt_imagem.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(32)))), ((int)(((byte)(32)))), ((int)(((byte)(32)))));
            this.txt_imagem.BorderStyle = System.Windows.Forms.BorderStyle.None;
            this.txt_imagem.ForeColor = System.Drawing.Color.White;
            this.txt_imagem.Location = new System.Drawing.Point(423, 53);
            this.txt_imagem.Name = "txt_imagem";
            this.txt_imagem.Size = new System.Drawing.Size(121, 15);
            this.txt_imagem.TabIndex = 6;
            // 
            // txt_midia
            // 
            this.txt_midia.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(32)))), ((int)(((byte)(32)))), ((int)(((byte)(32)))));
            this.txt_midia.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.txt_midia.ForeColor = System.Drawing.Color.White;
            this.txt_midia.FormattingEnabled = true;
            this.txt_midia.Items.AddRange(new object[] {
            "PC",
            "Mobile",
            "Xbox",
            "Playstation",
            "Nintendo"});
            this.txt_midia.Location = new System.Drawing.Point(423, 101);
            this.txt_midia.Name = "txt_midia";
            this.txt_midia.Size = new System.Drawing.Size(121, 25);
            this.txt_midia.TabIndex = 7;
            // 
            // txt_genero
            // 
            this.txt_genero.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(32)))), ((int)(((byte)(32)))), ((int)(((byte)(32)))));
            this.txt_genero.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.txt_genero.ForeColor = System.Drawing.Color.White;
            this.txt_genero.FormattingEnabled = true;
            this.txt_genero.Items.AddRange(new object[] {
            "Acao",
            "Aventura",
            "Estrategia",
            "RPG",
            "Esporte",
            "Corrida",
            "Jogo on-line",
            "Simulacao"});
            this.txt_genero.Location = new System.Drawing.Point(640, 50);
            this.txt_genero.Name = "txt_genero";
            this.txt_genero.Size = new System.Drawing.Size(139, 25);
            this.txt_genero.TabIndex = 8;
            // 
            // txt_classificacao
            // 
            this.txt_classificacao.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(32)))), ((int)(((byte)(32)))), ((int)(((byte)(32)))));
            this.txt_classificacao.BorderStyle = System.Windows.Forms.BorderStyle.None;
            this.txt_classificacao.ForeColor = System.Drawing.Color.White;
            this.txt_classificacao.Location = new System.Drawing.Point(659, 109);
            this.txt_classificacao.Name = "txt_classificacao";
            this.txt_classificacao.Size = new System.Drawing.Size(120, 18);
            this.txt_classificacao.TabIndex = 9;
            // 
            // txt_estoque
            // 
            this.txt_estoque.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(32)))), ((int)(((byte)(32)))), ((int)(((byte)(32)))));
            this.txt_estoque.BorderStyle = System.Windows.Forms.BorderStyle.None;
            this.txt_estoque.ForeColor = System.Drawing.Color.White;
            this.txt_estoque.Location = new System.Drawing.Point(194, 99);
            this.txt_estoque.Name = "txt_estoque";
            this.txt_estoque.Size = new System.Drawing.Size(120, 18);
            this.txt_estoque.TabIndex = 10;
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.ForeColor = System.Drawing.Color.White;
            this.label1.Location = new System.Drawing.Point(131, 53);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(44, 17);
            this.label1.TabIndex = 11;
            this.label1.Text = "Nome";
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.ForeColor = System.Drawing.Color.White;
            this.label2.Location = new System.Drawing.Point(131, 101);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(55, 17);
            this.label2.TabIndex = 12;
            this.label2.Text = "Estoque";
            // 
            // Imagem
            // 
            this.Imagem.AutoSize = true;
            this.Imagem.ForeColor = System.Drawing.Color.White;
            this.Imagem.Location = new System.Drawing.Point(340, 57);
            this.Imagem.Name = "Imagem";
            this.Imagem.Size = new System.Drawing.Size(57, 17);
            this.Imagem.TabIndex = 13;
            this.Imagem.Text = "Imagem";
            // 
            // label4
            // 
            this.label4.AutoSize = true;
            this.label4.ForeColor = System.Drawing.Color.White;
            this.label4.Location = new System.Drawing.Point(340, 102);
            this.label4.Name = "label4";
            this.label4.Size = new System.Drawing.Size(41, 17);
            this.label4.TabIndex = 14;
            this.label4.Text = "Mídia";
            // 
            // label5
            // 
            this.label5.AutoSize = true;
            this.label5.ForeColor = System.Drawing.Color.White;
            this.label5.Location = new System.Drawing.Point(565, 109);
            this.label5.Name = "label5";
            this.label5.Size = new System.Drawing.Size(88, 17);
            this.label5.TabIndex = 15;
            this.label5.Text = "Classificacao";
            // 
            // label6
            // 
            this.label6.AutoSize = true;
            this.label6.ForeColor = System.Drawing.Color.White;
            this.label6.Location = new System.Drawing.Point(565, 53);
            this.label6.Name = "label6";
            this.label6.Size = new System.Drawing.Size(53, 17);
            this.label6.TabIndex = 16;
            this.label6.Text = "Gênero";
            // 
            // label7
            // 
            this.label7.AutoSize = true;
            this.label7.ForeColor = System.Drawing.Color.White;
            this.label7.Location = new System.Drawing.Point(55, 53);
            this.label7.Name = "label7";
            this.label7.Size = new System.Drawing.Size(52, 17);
            this.label7.TabIndex = 18;
            this.label7.Text = "Código";
            // 
            // txt_codigo
            // 
            this.txt_codigo.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(32)))), ((int)(((byte)(32)))), ((int)(((byte)(32)))));
            this.txt_codigo.BorderStyle = System.Windows.Forms.BorderStyle.None;
            this.txt_codigo.ForeColor = System.Drawing.Color.White;
            this.txt_codigo.Location = new System.Drawing.Point(55, 86);
            this.txt_codigo.Name = "txt_codigo";
            this.txt_codigo.ReadOnly = true;
            this.txt_codigo.Size = new System.Drawing.Size(52, 15);
            this.txt_codigo.TabIndex = 17;
            // 
            // btn_logoff
            // 
            this.btn_logoff.FlatAppearance.BorderSize = 0;
            this.btn_logoff.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.btn_logoff.Location = new System.Drawing.Point(713, 12);
            this.btn_logoff.Name = "btn_logoff";
            this.btn_logoff.Size = new System.Drawing.Size(75, 26);
            this.btn_logoff.TabIndex = 19;
            this.btn_logoff.Text = "Sair";
            this.btn_logoff.UseVisualStyleBackColor = true;
            this.btn_logoff.Click += new System.EventHandler(this.btn_logoff_Click);
            // 
            // Jogos
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(7F, 17F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(18)))), ((int)(((byte)(18)))), ((int)(((byte)(18)))));
            this.ClientSize = new System.Drawing.Size(800, 533);
            this.Controls.Add(this.btn_logoff);
            this.Controls.Add(this.label7);
            this.Controls.Add(this.txt_codigo);
            this.Controls.Add(this.label6);
            this.Controls.Add(this.label5);
            this.Controls.Add(this.label4);
            this.Controls.Add(this.Imagem);
            this.Controls.Add(this.label2);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.txt_estoque);
            this.Controls.Add(this.txt_classificacao);
            this.Controls.Add(this.txt_genero);
            this.Controls.Add(this.txt_midia);
            this.Controls.Add(this.txt_imagem);
            this.Controls.Add(this.txt_nome);
            this.Controls.Add(this.btn_deletar);
            this.Controls.Add(this.btn_editar);
            this.Controls.Add(this.btn_criar);
            this.Controls.Add(this.dtg);
            this.Font = new System.Drawing.Font("Century Gothic", 9F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point);
            this.ForeColor = System.Drawing.Color.FromArgb(((int)(((byte)(18)))), ((int)(((byte)(18)))), ((int)(((byte)(18)))));
            this.Name = "Jogos";
            this.Text = "Jogos";
            this.Load += new System.EventHandler(this.Jogos_Load);
            ((System.ComponentModel.ISupportInitialize)(this.dtg)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.txt_classificacao)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.txt_estoque)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.DataGridView dtg;
        private System.Windows.Forms.Button btn_criar;
        private System.Windows.Forms.Button btn_editar;
        private System.Windows.Forms.Button btn_deletar;
        private System.Windows.Forms.TextBox txt_nome;
        private System.Windows.Forms.TextBox txt_imagem;
        private System.Windows.Forms.ComboBox txt_midia;
        private System.Windows.Forms.ComboBox txt_genero;
        private System.Windows.Forms.NumericUpDown txt_classificacao;
        private System.Windows.Forms.NumericUpDown txt_estoque;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.Label Imagem;
        private System.Windows.Forms.Label label4;
        private System.Windows.Forms.Label label5;
        private System.Windows.Forms.Label label6;
        private System.Windows.Forms.Label label7;
        private System.Windows.Forms.TextBox txt_codigo;
        private System.Windows.Forms.Button btn_logoff;
    }
}