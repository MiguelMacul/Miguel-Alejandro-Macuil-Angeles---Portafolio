/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Ejercicio10;

/**
 *
 * @author Miguel Alejandro Macuil Angeles
 * Problema:Muestra los números del 1 al 100 (ambos incluidos). Usa un bucle while.
 * Duracion: 4:58.72
 */
public class Ejercicio10 {
    
    public Ejercicio10(){
        this.ejecutar();
    }
    public void mostrarNumero(){
        int i=1;
        while(i<=100){
            System.out.println(i);
            i++;
        }
    }
    public void ejecutar(){
        System.out.println("Los primeros 100 numero son los siguientes:");
        this.mostrarNumero();
    }
}
