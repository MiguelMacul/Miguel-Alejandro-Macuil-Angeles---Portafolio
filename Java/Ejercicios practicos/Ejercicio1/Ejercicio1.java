/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Ejercicio1;

import java.util.Scanner;

/**
 *
 * @author Miguel Alejandro Macuil Angeles
 * problema:Declara dos variables numéricas (con el valor que desees), muestra por consola la suma, resta, multiplicación, división y módulo (resto de la división).
 * 
 */
public class Ejercicio1 {
    private double valor1;
    private double valor2;
    public Ejercicio1(){
        this.valor1=0;
        this.valor2=0;
    }
    //metodos destinados a recibir los valores de los atributos
    public double getValor1(){
        return this.valor1;
    }
    public double getValor2(){
        return this.valor2;
    }
    //metodods destinados a asignar valor a los atributos de las clase
    public void setValor1(double entrada){
        this.valor1=entrada;
    }
    public void setValor2(double entrada){
        this.valor2=entrada;
        
    }
}
