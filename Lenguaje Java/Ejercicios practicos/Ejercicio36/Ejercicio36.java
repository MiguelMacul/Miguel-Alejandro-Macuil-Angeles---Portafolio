/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Ejercicio36;

import java.util.Scanner;

/**
 *
 * @author Miguel
 */
public class Ejercicio36 {
     public Ejercicio36(){
       this.ejecutar();
   }
  
   public void ejecutar(){
       Scanner teclado=new Scanner(System.in);
       System.out.println("Ingrese dia de la semana");
       System.out.println(Semana.valueOf(teclado.next()));
   }
}
