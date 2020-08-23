/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Ejercicio34;

import java.util.Scanner;

/**
 *
 * @author Miguel
 */
public class Ejercicio34 {
    private String frase;
    public String palabras[];
    public Ejercicio34(){
        this.frase="";
        this.ejecutar();
    }
    public void setFrase(String entrada){
        this.frase=entrada;
        palabras=new String[this.contarWords()];
    }
    public String getFrase(){
        return this.frase;
    }
    public int contarWords(){
        int contar=0;
        for(int i=0;i<this.getFrase().length();i++)
            if(this.getFrase().charAt(i)==' ')
                contar++;
        return contar+1;
    }
    
    public void extraerWords(){
         int contar=0;
         for(int k=0;k<this.contarWords();k++){
             this.palabras[k]="";
             
         }
        for(int i=0;i<this.getFrase().length();i++)
            if(this.getFrase().charAt(i)==' ')
               contar++;
            else
                this.palabras[contar]+=""+this.getFrase().charAt(i);
    }
    public void mostrarPalabras(){
        System.out.println("Mostrar palabras:");
        for(int i=0;i<this.palabras.length;i++){
            System.out.println(""+this.palabras[i]);
        }
    }
    public void ejecutar(){
         Scanner teclado=new Scanner(System.in);
         System.out.println("Ingresa frase");
         this.setFrase(teclado.nextLine());
         this.extraerWords();
         
         this.mostrarPalabras();
    
    }
    
}
