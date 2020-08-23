/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Ejercicio37;

/**
 *
 * @author Miguel
 */
public enum meses {
    Enero(1,31),Febrero(2,28),Marzo(3,31),Abril(4,30),Mayo(5,31),Junio(6,30),Julio(7,31),Agosto(8,31),Septiembre(9,30),Octubre(10,31),Noviembre(11,30),Dicimbre(12,31);
     meses(int numero, int dias){
        this.numero=numero;
        this.dias=dias;
    }
    public int getNumero(){
        return this.numero;
    }
    public int getDias(){
        return this.dias;
    }
    public String toString(){
        return "El " +this.name()+ " mes "+this.getNumero()+" que tiene "+this.getDias()+" dias";
    }
     private int numero;
     private int dias;
}
