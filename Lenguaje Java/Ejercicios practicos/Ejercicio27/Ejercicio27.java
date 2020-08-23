/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Ejercicio27;

import java.util.Scanner;

/**
 *
 * @author Miguel Alejandro Macuil Angeles
 * Problema:Crear una aplicación que nos permite insertar números hasta que insertemos un -1. Calcular el numero de números introducidos.
 * Duracion: 8:34.50
 */
public class Ejercicio27 {
    private int cantidad;
    private int numero;
    public Ejercicio27(){
        this.cantidad=0;
        this.numero=0;
        this.ejecutar();
    }
    public void setCantidad(int entrada){
        this.cantidad=entrada;
    }
    public int getCantidad(){
        return this.cantidad;
    }
     public void setNumero(int entrada){
        this.numero=entrada;
    }
    public int getNumero(){
        return this.numero;
    }
    public void contar(){
        do{
        Scanner teclado=new Scanner(System.in);
        System.out.println("Ingresa un numero");
        this.setNumero(teclado.nextInt());
        if(!(this.getNumero()==-1))
              this.setCantidad(1+this.getCantidad());
        }while(this.getNumero()!=-1);
    }
    public void ejecutar(){
        this.contar();
        System.out.println("La cantidad de numero ingresados son:"+this.getCantidad());
    }
}
