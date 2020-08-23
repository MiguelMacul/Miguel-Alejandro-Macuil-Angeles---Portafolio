package Ejercicio2;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Miguel Alejandro Macuil Angeles
 * problema: Declara 2 variables numéricas (con el valor que desees), he indica cual es mayor de los dos. Si son iguales indicarlo también. Ves cambiando los valores para comprobar que funciona.
 * Duracion 7 minutos
 */
public class Ejercicio2 {
    private double valor1;
    private double valor2;
    public Ejercicio2(){
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
