/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Ejercicio7;

import java.util.Scanner;

/**
 *
 * @author Miguel Alejandro Macuil Angeles 
 * Duracion: 9:41.40
 * Problema:Lee un número por teclado y muestra por consola, el carácter al que pertenece en la tabla ASCII. Por ejemplo: si introduzco un 97, me muestre una a.
 */
public class Ejercicio7 {
    private int Numero;
    public Ejercicio7(){
        this.Numero=0;
        this.ejecutar();
    }
    public void setNumero(int entrada){
        this.Numero=entrada;
    }
    public int getNumero(){
        return this.Numero;
    }
    public void ejecutar(){
        Scanner Teclado=new Scanner(System.in);
        System.out.println("Ingresa un numero");
        this.setNumero(Teclado.nextInt());
        System.out.println("El caracter es:"+this.ascii());
    }
    public char ascii(){
        return (char) this.getNumero();
    }
}
