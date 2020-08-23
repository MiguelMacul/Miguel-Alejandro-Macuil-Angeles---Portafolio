/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Ejercicio35;
import Ejercicio35.Semana;

import java.util.Scanner;
/**
 *
 * @author Miguel
 */
public class Ejercicio35 {
    
   public Ejercicio35(){
       this.ejecutar();
   }
   public String evaluarSemana(String dia){
   String Salida=null;
       switch(Semana.valueOf(dia)){
           case Lunes:
                  Salida= "El dia de la semana "+Semana.Lunes+" es:"+Semana.Lunes.getEstado();
           break;
            case Martes:
                  Salida= "El dia de la semana "+Semana.Martes+" es: "+Semana.Martes.getEstado();
           break;
           case Miercoles:
                  Salida= "El dia de la semana "+Semana.Miercoles+" es: "+Semana.Miercoles.getEstado();
           break;
           case Jueves:
                  Salida= "El dia de la semana "+Semana.Jueves+" es: "+Semana.Jueves.getEstado();
           break;
           case Viernes:
                  Salida= "El dia de la semana "+Semana.Viernes+" es: "+Semana.Viernes.getEstado();
           break;
           case Sabado:
                  Salida= "El dia de la semana "+Semana.Sabado+" es: "+Semana.Sabado.getEstado();
           break;
           case Domingo:
                  Salida= "El dia de la semana "+Semana.Domingo+" es: "+Semana.Domingo.getEstado();
           break;
            default:
                  Salida= "El dia ingresado no es valida ";
           break;
       }
       return Salida;
    
   }
   public void ejecutar(){
       Scanner teclado=new Scanner(System.in);
       System.out.println("Ingrese dia de la semana");
       System.out.println(this.evaluarSemana(teclado.next()));
   }
}
