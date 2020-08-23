/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Modelo;

import Controlador.Url;
import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.Closeable;
import java.io.File;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;
import java.io.PrintWriter;
import java.util.ArrayList;
import java.util.Scanner;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.swing.JOptionPane;


/**
 *
 * @author Miguel
 */
public class ClaseModeloSistema {
    ArrayList<String> nombreArrayList;
    public ClaseModeloSistema() {
        nombreArrayList= new ArrayList<String>();
    }
    public  ArrayList<String> Inventario(){
        
        FileReader f = null;
         BufferedReader b = null;
        try {
            f = new FileReader(this.Ruta("\\Modelo\\Inventario.txt"));
        
       
        b = new BufferedReader(f);
        String cadena;
 
            while((cadena = b.readLine())!=null) {
                nombreArrayList.add(cadena);
            }
             f.close();
            b.close();
        } catch (IOException ex) {
            
            Logger.getLogger(ClaseModeloSistema.class.getName()).log(Level.SEVERE, null, ex);
        }
       
        
        return nombreArrayList;
    }
    public String Ruta(String fileName){
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
    public void AgregarInventario(String producto){
        String valor="\n"+producto;
          Url url=new Url();
   //url.ruta("\\Modelo\\Inventario.txt")
        this.agregarTextoAlfinal(url.ruta("\\Modelo\\Inventario.txt"),valor);
    }
    
    public void agregarTextoAlfinal(String nombreArch, String producto){
        String frase=producto;  
        System.out.print(frase);
        boolean bandera=true;
        try {
              FileWriter es= new FileWriter(nombreArch, true);
            for(int i=0;i<producto.length();i++){
                es.write(producto.charAt(i));
               
                
            }
            es.close();
             JOptionPane.showMessageDialog(null, "Informacion agregada correctamente");
            
        } catch (IOException ex) {
             JOptionPane.showMessageDialog(null, "Error al ingresar el archivo");
        } 
    }
    
    public void actualizar_archivo(ArrayList<String> lista){
        try {
            Url url=new Url();
   //url.ruta("\\Modelo\\Inventario.txt")
            String ruta =url.ruta("\\Modelo\\Inventario.txt");
            File file = new File(ruta);
            // Si el archivo no existe es creado
            if (!file.exists()) {
                file.createNewFile();
            }
            FileWriter fw = new FileWriter(file);
            BufferedWriter bw = new BufferedWriter(fw);
            for(int i=0;i<lista.size();i++){      
                
                bw.write(lista.get(i));
            }
            bw.close();
            JOptionPane.showMessageDialog(null, "Actualizacion completada");
        } catch (Exception e) {
            JOptionPane.showMessageDialog(null, "Error verifique los datos ingresados");
            e.printStackTrace();
        }
    }
    
}