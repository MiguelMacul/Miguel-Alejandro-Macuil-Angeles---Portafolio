/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Ejercicio35;

/**
 *
 * @author Miguel
 */
public enum Semana {
  
  Lunes("Laborable","Lunes"),
  Martes("Laborable","Martes"),
  Miercoles("Laborable","Miercoles"),
  Jueves("Laborable","Jueves"),
  Viernes("Laborable","Viernes"),
  Sabado("No laborable","Sabado"),
  Domingo("No laborable","Domingo");
  private  String estado;
  private  String dia;  

    Semana(String estado, String dia) {
        this.estado = estado;
       this.dia=dia;
    }
    public String getEstado() {
        return estado;
    }
    public String getDia() {
        return this.dia;
    }
}
