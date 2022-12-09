using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace WindowsFormsApp1
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            // Слава удали коменты перед показом!!!!!!!!!!!!!!
            // создание переменной с тектом из текстбокса
            string myString = textBox1.Text.Trim();
            // проверяем текст на полиндром
            bool result = myString.SequenceEqual(myString.Reverse());
            // выводим результат
            if (result)
                label1.Text = "Полиндром";
            else
                label1.Text = "Не полиндром";
        }
    }
}
