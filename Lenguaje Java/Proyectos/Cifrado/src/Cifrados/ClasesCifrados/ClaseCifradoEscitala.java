/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Cifrados.ClasesCifrados;

import Cifrados.ClaseCifrado;
import static java.lang.String.valueOf;

/**
 *
 * @author Administrador
 */
public class ClaseCifradoEscitala extends ClaseCifrado{
    public ClaseCifradoEscitala(String Mensaje, String direccion){
        super();
        this.GetMensajeCifrado(Mensaje);
        this.GetClaveCifrado(direccion);
        
    }
    @Override
    public void Cifrar(){
       char matriz[][]=new char[100][100];
       int r=0;
       String SalidaString="";
       for(int i=0;i<Integer.parseInt(this.SetClaveCifrado());i++){
        for(int j=0;j<this.SetMensajeCifrado().length()/Integer.parseInt(this.SetClaveCifrado());j++){
            matriz[i][j]=this.SetMensajeCifrado().charAt(r);
            r++;
        }   
       }
        for(int i=0;i<this.SetMensajeCifrado().length()/Integer.parseInt(this.SetClaveCifrado());i++){
        for(int j=0;j<Integer.parseInt(this.SetClaveCifrado());j++){
            SalidaString+=valueOf(matriz[j][i]);
        }   
       }
        this.GetMensajeCifrado(SalidaString);
    }
    @Override
    public void Descifrar(){
         char matriz[][]=new char[100][100];
       int r=0;
       String SalidaString="";
       int supe=this.SetMensajeCifrado().length()/Integer.parseInt(this.SetClaveCifrado());
        System.out.println(supe);
        System.out.println(Integer.parseInt(this.SetClaveCifrado()));
       for(int i=0;i<supe;i++){
        for(int j=0;j<Integer.parseInt(this.SetClaveCifrado());j++){
             matriz[i][j]=this.SetMensajeCifrado().charAt(r);
            r++;
        }   
       }
        for(int i=0;i<Integer.parseInt(this.SetClaveCifrado());i++){
        for(int j=0;j<supe;j++){
           
            SalidaString+=valueOf(matriz[j][i]);
        }   
        
       }
        this.GetMensajeCifrado(SalidaString);
    }
}
