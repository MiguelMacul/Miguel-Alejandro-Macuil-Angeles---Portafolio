/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */ 
package Ejercicio5;

import java.util.Scanner;

/**
 *
 * @author Miguel Alejandro Macuil Angeles
 * Resuelto: 13:02
 * problema:  Haz una aplicación que calcule el área de un círculo(pi*R2). El radio se pedirá por teclado (recuerda pasar de String a double con Double.parseDouble). Usa la constante PI y el método pow de Math.1
 */
public class Ejercicio5 {
    //Definir atributos de la clase de tio double
    private double radio;
    private double area;
    public Ejercicio5(){
        this.radio=0;
        this.area=0;
        this.ejecutar();
    }
    //Metodo creado para ejercutar el funcionamiento de la clase
    public void ejecutar(){
        Scanner tecleado=new Scanner(System.in);
       System.out.println("Ingresa radio");
       this.setRadio(Double.parseDouble(tecleado.nextLine()));
       this.calcArea();
       System.out.println("El valor de el area es :"+this.getArea());
    }
    //set y get para asignar y retornar valores de los atributos
    public double getRadio(){
        return this.radio;
    }
    public void setRadio(double valor){
        this.radio=valor;
    }
    public double getArea(){
        return this.area;
    }
    public void setArea(double valor){
        this.area=valor;
    }
    //Metodo para calcucular el area de un circulo
    public void calcArea(){
        // se utiliza el metodo get radio para retornar el valor almacenado en la variable radio multiuplicandolo por la funcion pi de math y se llama al metodo creado para asignar un valor al atributo radio 
        this.setArea(this.getRadio()*Math.PI);
    }
    
}
