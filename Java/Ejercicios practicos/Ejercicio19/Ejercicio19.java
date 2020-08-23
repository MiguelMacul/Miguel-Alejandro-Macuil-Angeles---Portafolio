/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Ejercicio19;

import java.util.Scanner;

/**
 *
 * @author Miguel Alejandro Macuil Angeles
 * Problema: Pide por teclado un número entero positivo (debemos controlarlo) y muestra  el número de cifras que tiene. Por ejemplo: si introducimos 1250, nos muestre que tiene 4 cifras. Tendremos que controlar si tiene una o mas cifras, al mostrar el mensaje.
 * Duracion: 8:02.99
 */
public class Ejercicio19 {
    private String numero;
    public Ejercicio19(){
        this.numero=null;
        this.ejecutar();
    }
    public void setNumero(String valor){ 
        this.numero=valor;
    }
    public String getNumero(){
        return this.numero;
    }
    public boolean evalurNumero(){
        if( Integer.parseInt(this.getNumero())>0){
            return true;
        }else{
            return false;
        }
    }
    public void ejecutar(){
        Scanner entrada=new Scanner(System.in);
        System.out.println("ingrese un numero");
        this.setNumero(entrada.next());
        if(this.evalurNumero()){
            System.out.println("El numero ingresado "+this.getNumero()+" tiene una logitud de "+this.getNumero().length());
        }else{
            System.out.println("El numero ingresado no es valido");
        }
    }
}
