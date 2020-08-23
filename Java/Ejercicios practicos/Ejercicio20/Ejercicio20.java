/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Ejercicio20;

import java.util.Scanner;

/**
 *
 * @author Miguel Alejandro Macuil Angeles
 * Problema: Pide un número por teclado e indica si es un número primo o no. Un número primo es aquel solo puede dividirse entre 1 y si mismo. Por ejemplo: 25 no es primo, ya que 25 es divisible entre 5, sin embargo, 17 si es primo.
Un buen truco para calcular la raíz cuadrada del numero e ir comprobando que si es divisible desde ese numero hasta 1.
NOTA: Si se introduce un numero menor o igual que 1, directamente es no primo.
 * Duracion: 20;0.50
 */
public class Ejercicio20 {
    private int numero;
    public Ejercicio20(){
        this.numero=0;
        this.ejecutar();
    }
    public void setNumero(int entrada){
        this.numero=entrada;
    }
    public int getNumero(){
        return this.numero;
    }
    public boolean evaluarPrimo(){
        boolean bandera=false;
        int contar=0,contar2=0;
        for(int i=1;i<=this.getNumero();i++){
            if(this.getNumero()/i==1 && this.getNumero()%i==0){
                contar++;
           }
            if(this.getNumero()%i==0){
                contar2++;
            }
        }
        if(contar>1 || this.getNumero()==1 || contar2>2){
            return false;
        }else{
            return true;
        }
    
    }
    public void ejecutar(){
        Scanner teclado=new Scanner(System.in);
        System.out.println("Ingresa un numero");
        this.setNumero(teclado.nextInt());
        if(this.evaluarPrimo()){
            System.out.println("El numero es primo");
        }else{
            System.out.println("El numero no es primo");
        }
    }
    
}
