/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Ejercicio14;

import java.util.Scanner;

/**
 *
 * @author Miguel Alejandro Macuil Angeles
 * Problema: Realiza una aplicación que nos calcule una ecuación de segundo grado. Debes pedir las variables a, b y c por teclado y comprobar antes que el discriminante (operación en la raíz cuadrada). Para la raíz cuadrada usa el método sqlrt de Math. Te recomiendo que uses mensajes de traza.
 * Duracion: 17:18.60
 */
public class Ejercicio14 {
    private int a;
    private int b;
    private int c;
    public Ejercicio14(){
        this.a=0;
        this.b=0;
        this.c=0;
        this.ejecutar();
    }
    public void setA(int valor){
        this.a=valor;
    }
     public void setB(int valor){
        this.b=valor;
    }
      public void setC(int valor){
        this.c=valor;
    }
     public int getA(){
         return this.a;
     }
      public int getB(){
         return this.b;
     }
       public int getC(){
         return this.c;
     }
    public void ejecutar(){
        Scanner Teclado=new Scanner(System.in);
        System.out.println("Ingrese el valor de a");
        this.setA(Teclado.nextInt());
        System.out.println("Ingrese el valor de b");
        this.setB(Teclado.nextInt());
        System.out.println("Ingrese el valor de c");
        this.setC(Teclado.nextInt());
        if(this.discriminar()){
            this.calcularEcuacion();
        }else{
            System.out.println("El discriminante es negativo");
        }
    }
    public boolean discriminar(){
        if((this.getB()*this.getB())-(4*this.getA()*this.getC())>0)
            return true;
        else
            return false;
    }
    public void calcularEcuacion(){
       System.out.println("x1:"+((((-1)*this.getB())+ Math.sqrt((this.getB()*this.getB())-(4*this.getA()*this.getC())))/(2*this.getA())));
       System.out.println("x2:"+((((-1)*this.getB())- Math.sqrt((this.getB()*this.getB())-(4*this.getA()*this.getC())))/(2*this.getA())));
    }
        
}
