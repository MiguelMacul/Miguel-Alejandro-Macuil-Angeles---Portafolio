/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Ejercicio30;

import java.util.Scanner;

/**
 *
 * @author Miguel
 */
public class Ejercicio30 {
    private String frase;
    public Ejercicio30(){
        this.frase="";
        this.ejecutar();
    }
    public void setFrase(String entrada){
        this.frase=entrada;
    }
    public String getFrase(){
        return this.frase;
    }
    public String convertirFrase(int seleccion){
        if(seleccion==1)
            return this.getFrase().toUpperCase();
        else
               if(seleccion==2)
                    return this.getFrase().toLowerCase();
               else
                return "Error opcion invalida";
    }
    public void ejecutar(){
        Scanner teclado=new Scanner(System.in);
        System.out.println("Ingresa una frase");
        this.setFrase(teclado.nextLine());
        System.out.println("Deseas convertirlo en \n1.Mayusculas\n2.Minusculas\n ingresa la opcion deseada");
        System.out.println("La frase convertida es: "+this.convertirFrase(teclado.nextInt()));
        
    }
}
