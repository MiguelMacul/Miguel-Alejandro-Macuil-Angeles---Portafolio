/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Ejercicio21;

import java.util.Scanner;

/**
 *
 * @author Miguel Alejandro Macuil Angeles
 * Problema:Muestra los números primos entre 1 y 100.
 * Duracion: 5:25.50
 */
public class Ejercicio21 {
    private int numero;
    public Ejercicio21(){
        this.numero=0;
        this.ejecutar();
    }
    public void setNumero(int entrada){
        this.numero=entrada;
    }
    public int getNumero(){
        return this.numero;
    }
    public boolean evaluarPrimo(){
        boolean bandera=false;
        int contar=0,contar2=0;
        for(int i=1;i<=this.getNumero();i++){   
            if(this.getNumero()/i==1 && this.getNumero()%i==0){
                contar++;
           }
            if(this.getNumero()%i==0){
                contar2++;
            }
        }
        if(contar>1 || this.getNumero()==1 || contar2>2){
            return false;
        }else{
            return true;
        }
    
    }
    public void ejecutar(){
        System.out.println("Los numeros primos entra 1 y 100 son:");
       for(int i=1;i<=100;i++){
           this.setNumero(i);
           if(this.evaluarPrimo())
           System.out.println(""+i);
       }
    }
}
