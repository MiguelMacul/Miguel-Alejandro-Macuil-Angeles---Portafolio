/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Ejercicio8;

import java.util.Scanner;

/**
 *
 * @author Miguel Alejandro Macuil Angeles
 * Problema: Modifica el ejercicio anterior, para que en lugar de pedir un número, pida un carácter (char) y muestre su código en la tabla ASCII.
 * Duracion: 9:30.50
 */
public class Ejercicio8 {
    //atributos
     private char Caracter;
    public Ejercicio8(){
        this.Caracter=0;
        this.ejecutar();
    }
    public void setCaracter(String entrada){
        this.Caracter=entrada.charAt(0);
    }
    public char getCaracter(){
        return this.Caracter;
    }
    public void ejecutar(){
        Scanner Teclado=new Scanner(System.in);
        System.out.println("Ingresa un caracter");
       this.setCaracter(Teclado.next());
        System.out.println("El caracter es:("+this.getCaracter()+" )El numero en ascii es :"+this.ascii());
    }
    public int ascii(){
        return  this.getCaracter();
    }
}
