/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Ejercicio39;

import java.util.Calendar;
import java.util.GregorianCalendar;

/**
 *
 * @author Miguel
 */
public class Ejercicio39 {
    private int minutos;
    private int segudos;
    public Ejercicio39(){
        this.minutos=0;
        this.segudos=0;
        this.ejecutar();
    }
    public void setMinutos(int valor){
        this.minutos=valor;
    }
    public void setSegundos(int valor){
        this.segudos=valor;
    }
    public int getMinutos(){
        return this.minutos;
    }
    public int getSegundos(){
        return this.segudos;
    }
    public void mostrarHora(){
        System.out.println("------------------------------");
        System.out.println("|Minutos\t|segundos|");
        System.out.println("|"+this.getMinutos()+"\t\t|\t"+this.getSegundos()+"|");
        System.out.println("|                             |");
        System.out.println("------------------------------");
        System.out.println("\n");
    }
    public void ejecutar(){
        
        do{
            Calendar calendario = new GregorianCalendar();
            this.setMinutos(calendario.get(Calendar.MINUTE));
            this.setSegundos(calendario.get(Calendar.SECOND));
            this.mostrarHora();
        }while(true);
    }
    
}
