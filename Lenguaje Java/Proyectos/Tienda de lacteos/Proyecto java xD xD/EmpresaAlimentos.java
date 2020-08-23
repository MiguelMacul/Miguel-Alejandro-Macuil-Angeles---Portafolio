import java.util.*;
import java.io.*;
import java.io.InputStreamReader;
public class EmpresaAlimentos{
   public static void main(String[]args){
      int opc=0;
      Scanner Tecleado=new Scanner(System.in);
      Productos objecto=new Productos();
      do{
         ejecutarCMD("cls");
         System.out.println("Menu xD\n1.-Cargar productos de los archivos\n2.-Ingresar productos disponibles\n3.-Mostrar productos disponibles\n4.-Buscar productos\n5.-Salir");
         opc=Tecleado.nextInt();
         switch(opc){
            case 1:
                  objecto.CargarProducto();
                  ejecutarCMD("pause");
               break;
            case 2:
               objecto.AgregarProductos();
               ejecutarCMD("pause");
               break;
            case 3:
               objecto.Imprimir();
               System.out.println("\n");
               ejecutarCMD("pause");
               break;
            case 4:
               break;
            case 5:
               ejecutarCMD("cls");
               System.out.println("Gracias por aver utilizado el sistema");
               ejecutarCMD("pause");

               break;
            default:
               ejecutarCMD("cls");
               System.out.println("Opcion equivocada");
               ejecutarCMD("pause");
               break;
         }
      }while(opc!=5);
      
      
   }
   public static void ejecutarCMD(String Comando){
      try {
         new ProcessBuilder("cmd", "/c", Comando).inheritIO().start().waitFor();
      } catch (Exception e) {
            /*No hacer nada*/
      }      }
}