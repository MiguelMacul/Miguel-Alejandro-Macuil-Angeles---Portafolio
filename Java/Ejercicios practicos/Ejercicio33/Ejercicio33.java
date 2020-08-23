/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Ejercicio33;

import java.util.Scanner;

/**
 *
 * @author Miguel
 */
public class Ejercicio33 {
    private String frase;
    public Ejercicio33(){
        this.frase="";
        this.ejecutar();
    }
    public void setFrase(String entrada){
        this.frase=entrada;
    }
    public String getFrase(){
        return this.frase;
    }
    public void extraerPosiciones(){
        String temp="";
        int j=0;
        for(int i=0;i<this.getFrase().length();i++){
            j++;
            if(!(j==4 || j==5))
            temp+=this.getFrase().charAt(i);
        }
        this.setFrase(temp);
    }
    public void ejecutar(){
        Scanner teclado=new Scanner(System.in);
        System.out.println("Ingresa una frase");
        this.setFrase(teclado.nextLine());
        this.extraerPosiciones();
        System.out.println("La frase resultante es:"+this.getFrase());
    }
}
