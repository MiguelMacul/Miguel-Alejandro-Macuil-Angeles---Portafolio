package Ejercicio13;

import java.util.Scanner;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Miguel Alejandro Macuil Angeles
 * Problema: Realiza una aplicación que nos pida un número de ventas a introducir, después nos pedirá tantas ventas por teclado como número de ventas se hayan indicado. Al final mostrara la suma de todas las ventas. Piensa que es lo que se repite y lo que no.
 * Duracion: 11:00.00
 */
public class Ejercicio13 {
    private int cantidad;
    private double total;
    public Ejercicio13(){
        this.cantidad=0;
        this.cantidad=0;
        this.ejecutar();   
    }
    public void setCantidad(int valor){
        this.cantidad=valor;
    }
    public int getCantidad(){
        return this.cantidad;
    }
     public void setTotal(double valor){
        this.total=valor;
    }
    public double getTotal(){
        return this.total;
    }
    public void calcularTotal(double dato){
        this.setTotal(this.getTotal()+dato);
    }
    public void ejecutar(){
        Scanner Teclado=new Scanner(System.in);
        System.out.println("Ingrese La cantidad de articulos para vender");
        this.setCantidad(Teclado.nextInt());
        for(int i=0;i<this.getCantidad();i++){
            System.out.println("Ingrese valor de producto");
            this.calcularTotal(Teclado.nextDouble());
        }
        System.out.println("El total de la venta es: "+this.getTotal());
    }
}
