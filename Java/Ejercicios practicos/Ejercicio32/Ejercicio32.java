/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Ejercicio32;

import java.util.Scanner;

/**
 *
 * @author Miguel
 */
public class Ejercicio32 {
    private String primerafrase;
    private String segundafrase;
    public Ejercicio32(){
        this.primerafrase="";
        this.segundafrase="";
        this.ejecutar();
    }
    public void setPrimeraFrase(String entrada){
        this.primerafrase=entrada;
    }
    public String getPrimeraFrase(){
        return this.primerafrase;
    }
     public void setSegundaFrase(String entrada){
        this.segundafrase=entrada;
    }
    public String getSegundaFrase(){
        return this.segundafrase;
    }
    public boolean evaluarFrases(){
        if(this.getPrimeraFrase().equals(this.getSegundaFrase()))
            return true;
        else 
            return false;
    }
    public void ejecutar(){
        Scanner teclado=new Scanner(System.in);
        System.out.println("Ingresa la primera frase");
        this.setPrimeraFrase(teclado.nextLine());
        System.out.println("Ingresa la segunda frase");
        this.setSegundaFrase(teclado.nextLine());
        System.out.println("La frases ingresada son iguales:"+this.evaluarFrases());
    }
}
