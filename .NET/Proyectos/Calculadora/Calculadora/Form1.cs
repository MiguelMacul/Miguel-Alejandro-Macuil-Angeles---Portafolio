using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Calculadora
{
    public partial class Form1 : Form
    {
        private int operacion;
        private float temporal;
        public Form1()
        {
            this.operacion = 0;
            this.temporal = 0;

            InitializeComponent();
        }

        private void Form1_Load(object sender, EventArgs e)
        {

        }

        private void textBox1_TextChanged(object sender, EventArgs e)
        {

        }

        private void button1_Click(object sender, EventArgs e)
        {
            this.textBox1.Text += '1';
        }

        private void button8_Click(object sender, EventArgs e)
        {
            this.textBox1.Text += '8';
        }

        private void button10_Click(object sender, EventArgs e)
        {
            this.textBox1.Text += '0';
        }

        private void button13_Click(object sender, EventArgs e)
        {
            this.textBox1.Text = this.textBox1.Text.Remove(this.textBox1.Text.Length - 1);
        }

        private void button16_Click(object sender, EventArgs e)
        {

            this.operacion = 4;
            this.temporal = float.Parse(this.textBox1.Text) ;
            this.textBox1.Text = null;
        }

        private void button2_Click(object sender, EventArgs e)
        {
            this.textBox1.Text += '2';
        }

        private void button3_Click(object sender, EventArgs e)
        {
            this.textBox1.Text += '3';
        }

        private void button4_Click(object sender, EventArgs e)
        {
            this.textBox1.Text += '4';
        }

        private void button5_Click(object sender, EventArgs e)
        {
            this.textBox1.Text += '5';
        }

        private void button6_Click(object sender, EventArgs e)
        {
            this.textBox1.Text += '6';
        }

        private void button7_Click(object sender, EventArgs e)
        {
            this.textBox1.Text += '7';
        }

        private void button9_Click(object sender, EventArgs e)
        {
            this.textBox1.Text += '9';
        }

        private void button11_Click(object sender, EventArgs e)
        {
           
            if (this.operacion==1)
            {
                this.temporal = this.temporal + float.Parse(this.textBox1.Text);
                this.textBox1.Text = "" + this.temporal;
                this.temporal = 0;
            }
            if (this.operacion == 2)
            {
                this.temporal = this.temporal - float.Parse(this.textBox1.Text)  ;
                this.textBox1.Text = "" + this.temporal;
                this.temporal = 0;
            }
            if (this.operacion == 3)
            {
                this.temporal = this.temporal * float.Parse(this.textBox1.Text);
                this.textBox1.Text = "" + this.temporal;
                this.temporal = 0;
            }
            if (this.operacion == 4)
            {
                this.temporal = this.temporal / float.Parse(this.textBox1.Text);
                this.textBox1.Text = "" + this.temporal;
                this.temporal = 0;
            }
            if (this.operacion == 5)
            {
                double temp = Math.Pow (this.temporal , int.Parse(this.textBox1.Text));
                this.textBox1.Text = "" +temp;
                this.temporal = 0;
            }
            this.operacion = 0;
        }

        private void button12_Click(object sender, EventArgs e)
        {
            this.operacion = 1;
            this.temporal =float.Parse(this.textBox1.Text);
            this.textBox1.Text = null;
        }

        private void button14_Click(object sender, EventArgs e)
        {
            this.operacion = 2;
            this.temporal = float.Parse(this.textBox1.Text);
            this.textBox1.Text = null;
        }

        private void button15_Click(object sender, EventArgs e)
        {
            this.operacion = 3;
            this.temporal = float.Parse(this.textBox1.Text);
            this.textBox1.Text = null;
        }

        private void button17_Click(object sender, EventArgs e)
        {
            this.operacion = 5;
            this.temporal = float.Parse(this.textBox1.Text);
            this.textBox1.Text = null;
        }
    }
}
