using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace CursoDeProgramacion
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            string textoPeso = txtPeso.Text;

            double Peso = double.Parse(textoPeso);

            string textoAltura = txtAltura.Text;

            double Altura = double.Parse(textoAltura);

            

            double imc = Peso/(Altura*Altura);

            
            MessageBox.Show("El IMC es " + imc);
            
            
        }
    }
}
