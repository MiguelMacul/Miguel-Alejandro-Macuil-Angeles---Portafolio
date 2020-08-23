/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Cifrados;

import Cifrados.Alfabeto.ClaseAlfabeto;

/**
 *
 * @author Administrador
 */
public class ClaseCifrado extends ClaseAlfabeto{
    private String MensajeCifrado;
    private String ClaveCifrado;
    public ClaseCifrado(){
       this.MensajeCifrado="";
       this.ClaveCifrado="";
    }
    public String SetMensajeCifrado(){
        return this.MensajeCifrado;
    }
    public String SetClaveCifrado(){
        return this.ClaveCifrado;
    }
    public void GetMensajeCifrado(String Mensaje){
        this.MensajeCifrado=Mensaje;
    }
    public void GetClaveCifrado(String Clave){
        this.ClaveCifrado=Clave;
    }
      public void Cifrar(){
          ValorAlfabeto(ClaveCifrado)
    }
    public void Descifrar(){
        
    }
}
