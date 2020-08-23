/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Ejercicio37;

import java.util.Scanner;

/**
 *
 * @author Miguel
 */
public class Ejercicio37 {
    public Ejercicio37(){
        this.ejecutar();
    }
    public void obtenerMeses(int cantidad){
        meses array[]=meses.values();
        for(int i=0;i<12;i++){
           if(array[i].getDias()==cantidad)
                System.out.println(""+array[i]);
            
        }
    }
    public void ejecutar(){
        Scanner teclado=new Scanner(System.in);
        System.out.println("Ingrese la cantidad de dias del mes");
        this.obtenerMeses(teclado.nextInt());
    }
}
