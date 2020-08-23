package Ejercicio6;


import java.util.Scanner;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Miguel Alejandro Macuil Angeles 
 * Duracion: 10:01.99
 * Problema:6) Lee un número por teclado e indica si es divisible entre 2 (resto = 0). Si no lo es, también debemos indicarlo.

 */
public class Ejercicio6 {
    //Declaracion de atributos 
    private double Numero;
    //Metodo contructor que iniciliza el atributo y llama al metodo que ejecuta el funcionamiento de la clase
    public Ejercicio6(){
        this.Numero=0;
        this.Ejercutar();
    }
    //Metodos get y set para asignar y recibir el valor respectivo de los atributos definidos
    public double getNumero(){
        return this.Numero;
    }
    public void setNumero(double valor){
        this.Numero=valor;
    }
    //Metodo diseniado para evaluar el valor ingresado y determinar si es divisible entre dos o no, retornara la respuesta en forma de cadena 
    public String evaluarNumero(){
        if(this.getNumero()%2==0){
            return "Es divisible";
        }else{
             return "No es divisible";
        }
    }
    //Metodo creado para ejecutar el funcionamiento de la clase 
    public void Ejercutar(){
        Scanner Tecla=new Scanner(System.in);
        System.out.println("Ingrese un numero");
        this.setNumero(Tecla.nextDouble());
        System.out.println("El numero es :"+this.evaluarNumero());
    }
}
