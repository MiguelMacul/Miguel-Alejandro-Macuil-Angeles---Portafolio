/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Ejercicio3;

/**
 * @author Miguel Alejandro Macuil Angeles
 * Problema: Declara un String que contenga tu nombre, después muestra un mensaje de bienvenida por consola. Por ejemplo: si introduzco “Fernando”, me aparezca “Bienvenido Fernando”.
 * Resuelto:13 minutos
 */
public class Ejercicio3 {
    private String nombre;
    public Ejercicio3(){
        this.nombre="";
    }
    public String getNombre(){
        return this.nombre;
    }
    public void setNombre(String Entrada){
        this.nombre=Entrada;
    }
    public void Mensaje(){
        System.out.println("Bienvenido "+this.getNombre());
    }
}
