/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Ejercicio18;

import java.util.Scanner;

/**
 *
 * @author Miguel Alejandro Macuil
 * Problema:  Pide por teclado dos número y genera 10 números aleatorios entre esos números. Usa el método Math.random para generar un número entero aleatorio (recuerda el casting de double a int).
 * Duracion: 10:33.60
 */
public class Ejercicio18 {
    private int primerNumero;
    private int segundoNumero;
    public Ejercicio18(){
        this.primerNumero=0;
        this.segundoNumero=0;
        this.ejecutar();
    }
    //
    public void setSegundoNumero(int valor){
        this.segundoNumero=valor;
    }
     public void setPrimerNumero(int valor){
        this.primerNumero=valor;
    }
     public int getPrimerNumero(){
         return this.primerNumero;
     }
      public int getSegundoNumero(){
         return this.segundoNumero;
     }
     public void generarRamdom(){
          for(int i=0;i<10;i++)
          System.out.println(Math.random()*(this.getPrimerNumero()-this.getSegundoNumero())+this.getSegundoNumero());
     }
    public void ejecutar(){
        Scanner teclado=new Scanner(System.in);
         System.out.println("Ingresa el primer limite");
         this.setPrimerNumero(teclado.nextInt());
         System.out.println("Ingresa el segundo limite");
         this.setSegundoNumero(teclado.nextInt());
         System.out.println("Los numero aleatorios:");
         this.generarRamdom();
    }
    
}
