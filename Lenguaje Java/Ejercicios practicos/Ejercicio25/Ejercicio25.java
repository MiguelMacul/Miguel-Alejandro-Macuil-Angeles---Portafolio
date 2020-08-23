/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Ejercicio25;

import javax.swing.JOptionPane;

/**
 *
 * @author Miguel Alejandro Macuil Angeles
 * 
 */
public class Ejercicio25 {
    private int operadouno;
    private int operadodos;
    private String operador;
    public Ejercicio25(){
        this.operadouno=0;
        this.operadodos=0;
        this.ejecutar();
    }
    public void setOperadoUno(int entrada){
        this.operadouno=entrada;
    }
    public void setOperadoDos(int entrada){
        this.operadodos=entrada;
    }
    public int getOperadoUno(){
        return this.operadouno;
    }
     public int getOperadoDos(){
        return this.operadodos;
    }
     public void setOperador(String entrada){
        this.operador=entrada;
    }
    public String getOperador(){
        return this.operador;
    }
    public void calcular(){
        
        switch(this.operador.charAt(0)){
            case '+':
                JOptionPane.showMessageDialog(null,"Resultado del operado:"+(this.getOperadoUno()+this.getOperadoDos()));
            break;
            case '-':
                JOptionPane.showMessageDialog(null,"Resultado del operado:"+(this.getOperadoUno()-this.getOperadoDos()));
            break;
            case '*':
                JOptionPane.showMessageDialog(null,"Resultado del operado:"+(this.getOperadoUno()*this.getOperadoDos()));
            break;
            case '/':
                JOptionPane.showMessageDialog(null,"Resultado del operado:"+(this.getOperadoUno()/this.getOperadoDos()));
            break;
            case '^':
                JOptionPane.showMessageDialog(null,"Resultado del operado:"+(this.getOperadoUno()^this.getOperadoDos()));
            break;
            case '%':
                JOptionPane.showMessageDialog(null,"Resultado del operado:"+(this.getOperadoUno()%this.getOperadoDos()));
            break;
            default:
                JOptionPane.showMessageDialog(null,"Error operador invalido");
            break;
        }
    }
    public void ejecutar(){
        this.setOperadoUno(Integer.parseInt(JOptionPane.showInputDialog("Ingresa el primer operado")));
        this.setOperadoDos(Integer.parseInt(JOptionPane.showInputDialog("Ingresa el segundo operado")));
        this.setOperador(JOptionPane.showInputDialog("Ingresa el operador\n +: suma los dos operandos.\n" +
"-: resta los operandos.\n" +
"*: multiplica los operandos.\n" +
"/: divide los operandos, este debe dar un resultado con decimales (double)\n" +
"^:  1º operando como base y 2º como exponente.\n" +
"%:  módulo, resto de la división entre operando1 y operando2."));
        this.calcular();
    }
}
