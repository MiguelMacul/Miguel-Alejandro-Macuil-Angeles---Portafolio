/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Ejercicio11;

/**
 *
 * @author Miguel Alejandro Macuil Angeles
 * Problema:Haz el mismo ejercicio anterior con un bucle for.
 * Duracion: 4:19.22
 */
public class Ejercicio11{
    
    public  Ejercicio11(){
        this.ejecutar();
    }
    public void calcularNumero(){
        for(int i=1;i<=100;i++){
            System.out.println("\t\t"+i);
        }
    }
    public void ejecutar(){
        System.out.println("Los primeros 100 numero calculados con el ciclo for");
        this.calcularNumero();
    }
    
}
