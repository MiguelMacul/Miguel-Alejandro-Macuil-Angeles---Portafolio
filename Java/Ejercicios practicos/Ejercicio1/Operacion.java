/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Ejercicio1;

import java.util.Scanner;

/**
 *
 * @author Miguel Alejandro Macuil Angeles
 *  Resulto en 40 minutos
 */
public class Operacion {
     public Ejercicio1 Datos;
        private double suma;
        private double resta;
        private double multiplicacion;
        private double division;
        private double modulo;
        public Operacion(){
            Datos=new Ejercicio1();
        }
        public void EntradaDatos(){
            Scanner Tecleado=new Scanner(System.in);
            System.out.println("Ingresa primer valor");
            Datos.setValor1(Tecleado.nextDouble());
            System.out.println("Ingresa Segundo valor");
            Datos.setValor2(Tecleado.nextDouble());
        }
        public void CalcularSuma(){
            this.suma=this.Datos.getValor1()+this.Datos.getValor2();
        }
        public void CalcularResta(){
            this.resta=this.Datos.getValor1()-this.Datos.getValor2();
            
        }
        public void CalcularMultiplicacion(){
            this.multiplicacion=this.Datos.getValor1()*this.Datos.getValor2();
        }
        public void CalcularDivision(){
            this.division=this.Datos.getValor1()/this.Datos.getValor2();
        }
        public void CalcularModulo(){
            this.modulo=this.Datos.getValor1()%this.Datos.getValor2();
        }
        public void ImprimirResultados(){
            this.CalcularSuma();
            this.CalcularResta();
            this.CalcularMultiplicacion();
            this.CalcularDivision();
            this.CalcularModulo();
            System.out.println("El resultado de la suma es:"+this.suma);
            System.out.println("El resultado de la resta es:"+this.resta);
            System.out.println("El resultado de la multiplicacion es:"+this.multiplicacion);
            System.out.println("El resultado de la division es:"+this.division);
            System.out.println("El resultado de la modulo es:"+this.modulo);
        }
        
}
