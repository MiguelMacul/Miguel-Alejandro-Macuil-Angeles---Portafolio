/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Ejercicio4;

import javax.swing.JOptionPane;

/**
 *
 * @author Miguel Alejandro Macuil Angeles
 * Tiempo: 9 minutos
 * Problema: Modifica la aplicación anterior, para que nos pida el nombre que queremos introducir (recuerda usar JOptionPane).
 */
public class Ejercicio4 {
    private String Nombre;
    public Ejercicio4(){
        
    }
    public String getNombre(){
        return this.Nombre;
    }
    public void setNombre(String Entrada){
        this.Nombre=Entrada;
    }
    public void Mensaje(){
        JOptionPane.showMessageDialog(null,"Bienvenido "+this.getNombre());
    }
    
}
