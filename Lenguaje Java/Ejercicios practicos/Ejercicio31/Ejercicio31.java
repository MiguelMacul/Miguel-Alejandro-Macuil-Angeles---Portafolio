/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Ejercicio31;

import java.util.Scanner;

/**
 *
 * @author Miguel
 */
public class Ejercicio31 {
    private String frase;
    public Ejercicio31(){
        this.frase="";
        this.ejecutar();
    }
    public void setFrase(String entrada){
        this.frase=entrada;
    }
    public String getFrase(){
        return this.frase;
    }
    public void ejecutar(){
        Scanner teclado=new Scanner(System.in);
        System.out.println("Ingresa una frease");
        this.setFrase(teclado.nextLine());
        System.out.println("La frase:"+this.getFrase()+" Tiene una logitud de:"+this.getFrase().length());
    }
}
