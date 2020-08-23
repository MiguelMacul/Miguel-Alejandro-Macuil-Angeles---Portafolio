import java.util.*;
import javax.swing.JOptionPane;
class matrices{
   public int matriz1[][]=new int[100][100];
   public int matriz2[][]=new int[100][100];
   public int filas,columnas;
   public static void main(String []args){
      matrices objeto=new matrices();
      String respuesta = JOptionPane.showInputDialog("Menu de matriz\n1.- suma de matrices\n2.-multiplicacion de matrices\n"); 
      int j=Integer.parseInt(respuesta);
      String f = JOptionPane.showInputDialog("Ingrese la cantidad de filas de las matrices"); 
      String c = JOptionPane.showInputDialog("Ingrese la cantidad de columnas de las matrices"); 
      objeto.filas=Integer.parseInt(f);
      objeto.columnas=Integer.parseInt(c);
   
      switch(j){
         case 1:
            objeto.llenar();
            break;
         case 2:
            
            break;
      }
   }
   void llenar(){
      matrices traer=new matrices();
      System.out.print(this.filas);
      for(int i=0;i<this.filas;i++){
         for(int j=0;j<this.columnas;j++){
            traer.matriz1[i][j]=Integer.parseInt(JOptionPane.showInputDialog("Ingresa el valor de la cordenada("+i+","+j+")")); 
         }
      }
      for(int i=0;i<traer.filas;i++){
         for(int j=0;j<traer.columnas;j++){
            traer.matriz2[i][j]=Integer.parseInt(JOptionPane.showInputDialog("Ingresa el valor de la cordenada("+i+","+j+")")); 
         }
      }
   }
}