/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Ejercicio24;

import java.util.Scanner;

/**
 *
 * @author Miguel Alejandro Macuil Angeles
 * Problema: Recorre el String del ejercicio 22 y transforma cada carácter a su código ASCII. Muestralos en linea recta, separados por un espacio entre cada carácter.
 * Duracion:6:10.55
 */
public class Ejercicio24 {
    private String frase;
    public Ejercicio24(){
        this.frase="";
        this.ejecutar();
    }
    public void setFrase(String entrada){
        this.frase=entrada;
    }
    public String getFrase(){
       return this.frase;
    }
    public String transformarASCII(){
        String temp="";
        for(int i=0;i<this.getFrase().length();i++)
            temp+=""+(int)this.getFrase().charAt(i)+" ";
        return temp;
    }
    public void ejecutar(){
        Scanner teclado=new Scanner(System.in);
        System.out.println("Ingresa una frase");
        this.setFrase(teclado.nextLine());
        System.out.println("La frace convertida en ascii es: "+this.transformarASCII());
    }
}
