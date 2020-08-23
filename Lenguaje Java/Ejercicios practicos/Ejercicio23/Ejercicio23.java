/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Ejercicio23;

import java.util.Scanner;

/**
 *
 * @author Miguel Alejandro Macuil Angeles
 *  Problema; Reemplaza todas las a del String anterior por una e.
 * duracion: 7:50.40
 */
public class Ejercicio23 {
    public String palabras;
    public Ejercicio23(){
        this.palabras="";
        this.ejecutar();
    }
    public void setPalabra(String entrada){
        this.palabras=entrada;
    }
    public String getPalabra(){
        return this.palabras;
    }
    public String remplazarVocal(){
        String tem="";
        for(int i=0;i<this.getPalabra().length();i++){
            if(this.getPalabra().charAt(i)=='a')
                tem+="e";
            else
             if(this.getPalabra().charAt(i)=='A')
                tem+="E";
            else
                tem+=this.getPalabra().charAt(i);              
        }
        return tem;
    }
    public void ejecutar(){
        Scanner teclado=new Scanner(System.in);
        System.out.println("Ingrese frase");
        this.setPalabra(teclado.nextLine());
        System.out.println("La frase final es:"+this.remplazarVocal());
    }
}
