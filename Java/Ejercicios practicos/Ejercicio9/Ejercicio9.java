/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Ejercicio9;

import java.util.Scanner;

/**
 *
 * @author Miguel Alejandro Macuil Angeles
 * Problema:Lee un número por teclado que pida el precio de un producto (puede tener decimales) y calcule el precio final con IVA. El IVA sera una constante que sera del 21%.
 * Duracion: 9:57.72

 */
public class Ejercicio9 {
    private double precio;
    private double precioFinal;
    static final double iva=0.21;
    public Ejercicio9(){
        this.precio=0.0;
        this.precioFinal=0.0;
        this.ejercutar();
    }
    //Metodos set y get de los atributos privados
    
    public void setPrecio(double valor){
        this.precio=valor;
    }
    public double getPrecio(){
        return this.precio;
    }
    
     public void setPrecioFinal(double valor){
        this.precioFinal=valor;
    }
    public double getPrecioFinal(){
        return this.precioFinal;
    }
    //
    public void calcularPrecioFinal(){
        this.setPrecioFinal((this.getPrecio()*iva)+this.precio);
    }
    public void ejercutar(){
        Scanner Teclado=new Scanner(System.in);
        System.out.println("Ingrese el precio del articulo");
        this.setPrecio(Teclado.nextDouble());
        this.calcularPrecioFinal();
        System.out.println("El precion final con iva incluido del 21% es:"+this.getPrecioFinal());
    }
}
