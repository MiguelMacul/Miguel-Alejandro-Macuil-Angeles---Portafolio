/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Ejercicio12;

/**
 *
 * @author Miguel Alejandro Macuil Angeles
 * Problema: Muestra los números del 1 al 100 (ambos incluidos) divisibles entre 2 y 3. Utiliza el bucle que desees. 
 * Duracion: 7:30.14
 */
public class Ejercicio12 {
    public Ejercicio12(){
        this.ejecutar();
    }
    public boolean evaluar(int numero){
        if(numero%2==0 || numero%3==0){
            return true;
        }else{
            return false;
        }
    }
    public void calcularNumero(){
        for(int i=1;i<=100;i++){
            if(this.evaluar(i))
            System.out.println("\t"+i);
        }
    }
    public void ejecutar(){
        System.out.println("Los numeros divisibles entre 2 y 3 del 1 al 100 son");
        this.calcularNumero();
    }
}
