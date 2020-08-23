/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Ejercicio22;

import java.util.Scanner;

/**
 *
 * @author Miguel Alejandro Macuil Angeles
 * Duracion: 5:50.40
 * Problema: Del siguiente String “La lluvia en Sevilla es una maravilla” cuenta cuantas vocales hay en total (recorre el String con charAt).
 * 
 */
public class Ejercicio22 {
    private String palabra;
    public Ejercicio22(){
        this.palabra="";
        this.ejecutar();
    }
    public void setPalabra(String Entrada){
        this.palabra=Entrada;
    }
    public String getPalabra(){
        return this.palabra;
    }
    public int contarVocales(){
        int vocales=0;
        for(int i=0;i<this.getPalabra().length();i++){
            switch(this.getPalabra().charAt(i)){
                case 'a':
                    vocales++;
                break;
                case 'A':
                    vocales++;
                break;
                case 'e':
                    vocales++;
                break;
                case 'E':
                    vocales++;
                break;
                case 'i':
                    vocales++;
                break;
                case 'I':
                    vocales++;
                break;
                case 'o':
                    vocales++;
                break;
                case 'O':
                    vocales++;
                break;
                case 'u':
                    vocales++;
                break;
                case 'U':
                    vocales++;
                break;
            }
        }       
        return vocales;
    }
    public void ejecutar(){
        Scanner teclado=new Scanner(System.in);
        System.out.println("Ingresa una frase");
        this.setPalabra(teclado.nextLine());
        System.out.println("La cantidad de vocales en la frase son:"+this.contarVocales());
        
    }
}
