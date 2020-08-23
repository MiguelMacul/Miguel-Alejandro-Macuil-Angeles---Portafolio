/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Controlador;

import Modelo.ClaseModeloSistema;
import java.util.ArrayList;

/**
 *
 * @author Miguel
 */
public class ClaseControladorSistema  {
    public ClaseModeloSistema modelo;
    public  ClaseControladorSistema(){
        modelo=new ClaseModeloSistema();
 
    }
    public ArrayList<String[]> estrar(){
       
        ArrayList<String[]> Datos =new  ArrayList<String[]>() ;
         
       String[] tokens = null;
        ArrayList<String> ver=modelo.Inventario();
       for(int i=0;i<ver.size();i++){
           String var=ver.get(i);
            Datos.add(var.split("[,]"));
       }
      
       return Datos;
    }
    public void agregarInventario(String datos){
        
        this.modelo.AgregarInventario(datos);
    }
    public void modificacionInventario(ArrayList<String> lista){
        modelo.actualizar_archivo(lista);
    }
}
