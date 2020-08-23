/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Ejercicio16;

import java.util.Scanner;

/**
 *
 * @author Miguel Alejandro Macuil Angeles
 * Problema: Escribe una aplicación con un String que contenga una contraseña cualquiera. Después se te pedirá que introduzcas la contraseña, con 3 intentos. Cuando aciertes ya no pedirá mas la contraseña y mostrara un mensaje diciendo “Enhorabuena”. Piensa bien en la condición de salida (3 intentos y si acierta sale, aunque le queden intentos).
 * Duracion: 13:46.05
 */
public class Ejercicio16 {
    private int intentos;
    private String password;
    public Ejercicio16(){
        this.intentos=3;
        this.password="hola";
        this.ejecutar();
    }
    public void setPassword(String valor){
        this.password=valor;
    }
    public String getPassword(){
        return this.password;
    }
    public void setIntentos(int valor){
        this.intentos=valor;
    }
    public int getIntentos(){
        return this.intentos;
    }
    public boolean evaluarPassword(String valor){
        if(valor.equals(this.getPassword())){
            return true;
        }else{
            return false;
        }
    }
    public void ejecutar(){
        Scanner Taclado=new Scanner(System.in);
        do{
            System.out.println("Ingrese la contrasenia");
            if(this.evaluarPassword(Taclado.nextLine())){
                System.out.println("Bienvenido");
                break;
            }else{
                this.setIntentos(this.getIntentos()-1);
                if(this.getIntentos()==0){
                    break;
                }
            }
        }while(true);
    }
}
