/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Ejercicio29;

import javax.swing.JOptionPane;

/**
 *
 * @author Miguel
 */
public class Ejercicio29 {
    private String frase;
    public Ejercicio29(){
       this.frase="";
       this.ejecutar();
    }
    public void setFrase(String entrada){
        this.frase=entrada;
    }
    public String getFrase(){
        return this.frase;
    }
    public void espacioFrace(){
        String temp="";
        boolean bandera=true;
        do{
            temp=JOptionPane.showInputDialog("Ingresa frase");
            if(!(temp.equals("")))
                this.setFrase(this.getFrase()+temp+"\n");
            else{
                bandera=false;
            }
        }while(bandera);
    }
    public void ejecutar(){
        this.espacioFrace();
        JOptionPane.showMessageDialog(null, "La frase ingresada: \n"+this.getFrase());
    }
}
