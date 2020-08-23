/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Ejercicio38;

import java.util.ArrayList;
import java.util.Scanner;

/**
 *
 * @author Miguel
 */
public class Ejercicio38 {
    public ArrayList ver;
    public Ejercicio38(){
        ver=new ArrayList();
        this.ejecutar();
    }
    public void agregar(int dato){
        this.ver.add(dato);
    }
    public int numeroMayor(){
        int mayor=1;
        for(int i=0;i<this.ver.size();i++){
            if((int)this.ver.get(i)>mayor)
                mayor=(int) this.ver.get(i);      
        }
        return mayor;
    }
    public int numeroMenor(){
        int menor=this.numeroMayor();
        for(int i=0;i<this.ver.size();i++){
            if((int)this.ver.get(i)<menor)
                menor=(int) this.ver.get(i);      
        }
        return menor;
    }
    public int numeroSumar(){
        int sumar=0;
        for(int i=0;i<this.ver.size();i++){
            sumar+=(int)this.ver.get(i);
        }
        return sumar;
    }
    public int numeroSumarPositivos(){
        int sumar=0;
        for(int i=0;i<this.ver.size();i++){
            if((int)this.ver.get(i)>0)
            sumar+=(int)this.ver.get(i);
        }
        return sumar;
    }
    public int numeroSumarNegativos(){
        int sumar=0;
        for(int i=0;i<this.ver.size();i++){
            if((int)this.ver.get(i)<0)
            sumar+=(int)this.ver.get(i);
        }
        return sumar;
    }
    public int numeroSumarMedia(){
       
        
        return this.numeroSumar()/this.ver.size();
    }
    public void ejecutar(){
        int temp=0;
        Scanner teclado=new Scanner(System.in);
        do{
        System.out.println("Ingresa numero");
        temp=teclado.nextInt();
        if(temp!=-1)
            this.agregar(temp);
        }while(temp!=-1);
        System.out.println("– mayor numero introducido:" +this.numeroMayor()+
"\n– menor numero introducido:" +this.numeroMenor()+
"\n– suma de todos los numeros:" +this.numeroSumar()+
"\n– suma de los numeros positivos\n:" +this.numeroSumarPositivos()+
"\n– suma de los numeros negativos\n:" +this.numeroSumarNegativos()+
"\n– media de la suma (la primera que pido):"+this.numeroSumarMedia());
    }
  
}
