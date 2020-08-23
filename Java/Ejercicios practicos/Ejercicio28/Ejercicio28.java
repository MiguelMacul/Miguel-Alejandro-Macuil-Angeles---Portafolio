/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Ejercicio28;

import java.util.Scanner;

/**
 *
 * @author Miguel
 */
public class Ejercicio28 {
    private String frase;
    public Ejercicio28(){
        this.frase="";
        this.ejecutar();
    }
    public void setFrase(String entrada){
        this.frase=entrada;
    }
    public String getFrase(){
        return this.frase;
    }
    public String eliminarEspacios(){
        String temp="";
        for(int i=0;i<this.getFrase().length();i++){
            if(!(this.getFrase().charAt(i)==' ')){
                temp+=this.getFrase().charAt(i);
            }
        }
        return temp;
    }
    public void ejecutar(){
        Scanner teclado=new Scanner(System.in);
        System.out.println("Ingresa una frase");
        this.setFrase(teclado.nextLine());
        System.out.println("La frase sin espacios es:"+this.eliminarEspacios());
    }
}
