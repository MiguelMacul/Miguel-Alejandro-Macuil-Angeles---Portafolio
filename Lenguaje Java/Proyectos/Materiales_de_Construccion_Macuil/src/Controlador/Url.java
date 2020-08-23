/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Controlador;

import java.io.File;
import java.io.FileInputStream;
import java.net.URL;

/**
 *
 * @author Miguel
 */
public class Url {
    public String  ruta(String fileName){
       ClassLoader classLoader = ClassLoader.getSystemClassLoader();
       File file = new File(classLoader.getResource(fileName).getFile());
       String ruta=""+file,dato="";
       for(int i=0;i<ruta.length();i++){
          if(ruta.charAt(i)=='%'){
              dato+=" ";
              i+=2;
          }else{
            if(ruta.charAt(i)=='\\'){
                dato+="\\";
                if(ruta.charAt(i+1)=='b'){
                    dato+="src"+fileName;
                    break;
                }
            }else{

                dato+=ruta.charAt(i);
            }
         
          }
       }
   
        return dato;
    }
}
