/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Ejercicio17;

import java.util.Scanner;

/**
 *
 * @author Miguel Alejandro Macuil Angeles
 * Problema: Crea una aplicación que nos pida un día de la semana y que nos diga si es un dia laboral o no. Usa un switch para ello.
 * Duracion: 10:02.06
 */
public class Ejercicio17 {
    private String dia;
    
    public Ejercicio17(){
        this.dia=null;
        this.ejecutar();
    }
    public void setDia(String entrada){
        this.dia=entrada;
    }
    public String getDia(){
        return this.dia;
    }
    public void ejecutar(){
        Scanner Teclado=new Scanner(System.in);
        System.out.println("Ingrese un dia de la semana");
        this.setDia(Teclado.nextLine());
       System.out.println("El dia es:"+this.evaluarDiaSemana());
    }
    private String evaluarDiaSemana(){
        String Salida=null;
        switch(this.getDia()){
            case "Lunes":
                Salida= "Es laborable";
            break;
            case "Martes":
                 Salida=  "Es laborable";
            break;
            case "Miercoles":
                 Salida= "Es laborable";
            break;
            case "Jueves":
                 Salida= "Es laborable";
            break;
            case "Viernes":
                 Salida= "Es laborable";
            break;
            case "Sabado":
                 Salida=  "No es laborable";
            break;
            case "Domingo":
                 Salida=  "No es laborable";
            break;
            default:
                Salida= "Dia ingresado invalido";
                break;
        }
        return Salida;
    }
    
}
