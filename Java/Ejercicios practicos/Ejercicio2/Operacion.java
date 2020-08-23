/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Ejercicio2;

import Ejercicio1.Ejercicio1;
import java.util.Scanner;

/**
 *
 * @author Miguel Alejandro Macuil Angeles
 * Declara 2 variables numéricas (con el valor que desees), he indica cual es mayor de los dos. Si son iguales indicarlo también. Ves cambiando los valores para comprobar que funciona.
 * Duracion 7 minutos
 */
public class Operacion {
    public Ejercicio1 Datos;
    public Operacion(){
            Datos=new Ejercicio1();
    }
    public void Evaluar(){
        if(this.Datos.getValor1()>this.Datos.getValor2()){
            System.out.println(this.Datos.getValor1()+" es mayor que "+this.Datos.getValor2());
        }else{
            System.out.println(this.Datos.getValor2()+" es mayor que "+this.Datos.getValor1());
        }
    }
      public void EntradaDatos(){
            Scanner Tecleado=new Scanner(System.in);
            System.out.println("Ingresa primer valor");
            Datos.setValor1(Tecleado.nextDouble());
            System.out.println("Ingresa Segundo valor");
            Datos.setValor2(Tecleado.nextDouble());
        }
}
