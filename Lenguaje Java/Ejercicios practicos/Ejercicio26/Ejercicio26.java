/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Ejercicio26;

import javax.swing.JOptionPane;

/**
 *
 * @author Miguel
 */
public class Ejercicio26 {
    private int cantidad;
    public Ejercicio26(){
        this.cantidad=0;
        this.ejecutar();
    }
    public void setCantidad(int entrada){
        this.cantidad=entrada;
    }
    public int getCantidad(){
        return this.cantidad;
    }
    public void generarNumeros(){
        int suma=0;
        
        if(this.getCantidad()>1)
        for(int i=0;i<this.getCantidad();i++){
            suma+=i;
            if(i==this.getCantidad()-1)
                JOptionPane.showMessageDialog(null,"El resultado de la suma es:"+suma);
        }else
            JOptionPane.showMessageDialog(null,"El numero no es mayor que 1");
    }
    public void ejecutar(){
        this.setCantidad(Integer.parseInt(JOptionPane.showInputDialog("Ingresa el numero")));
        this.generarNumeros();
    }
}
