/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Ejercicio15;

import java.util.Scanner;

/**
 *
 * @author Miguel Alejandro Macuil Angeles
 * Diracion: 8:54.80
 * Problema: Lee un número por teclado y comprueba que este numero es mayor o igual que cero, si no lo es lo volverá a pedir (do while), después muestra ese número por consola.
 */
public class Ejercicio15 {
    private double numero;
    public Ejercicio15(){
        this.numero=0;
        this.ejecutar();
    }
    public void setNumero(double valor){
        this.numero=valor;
    }
    public double getNumero(){
        return this.numero;
    }
    public boolean evaluar(){
        if(this.getNumero()>=0){
            return true;
        }
        else{
            return false;
        }
    }
    public void ejecutar(){
        Scanner Teclado=new Scanner(System.in);
        boolean bandera=true;
        do{
            System.out.println("Ingrese un numero:");
            this.setNumero(Teclado.nextDouble());
            if(this.evaluar()){
                 System.out.println("El numero es:"+this.getNumero());
                 bandera=false;
            }else{
                 System.out.println("Numero ingresado menor a 0, vuelva a ingresar otro numero mayor a 0");
            }
        }while(bandera);
    }
}
