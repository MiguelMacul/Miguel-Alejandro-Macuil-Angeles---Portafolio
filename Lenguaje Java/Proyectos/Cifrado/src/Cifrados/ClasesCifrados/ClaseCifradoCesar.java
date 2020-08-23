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
public class ClaseCifradoCesar extends ClaseCifrado{
    public ClaseCifradoCesar(String Mensaje, String direccion){
        super();
        this.GetMensajeCifrado(Mensaje);
        this.GetClaveCifrado(direccion);
    }
    @Override
    public void Cifrar(){
      
    }
    @Override
    public void Descifrar(){
        
    }
}
