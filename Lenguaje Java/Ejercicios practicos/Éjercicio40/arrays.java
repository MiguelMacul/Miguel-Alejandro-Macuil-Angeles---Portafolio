import java.util.*;
public class arrays{
   public static void main(String[] args){
      Scanner scanner=new Scanner(System.in);
      arrays objet=new arrays();
      int array[],t=0, array2[];
      int opcion=0;
      System.out.println("Ingresa el tamaño del arreglo");
      t=scanner.nextInt();
      array=new int[t];
      array2=new int[t];
      do{
         System.out.println("ingresa la opcion que deseas aplicar\n 1.-llenar arreglo\n2.-Mostrar arreglo\n3.-Modificar datos posicion\n4.-invertir arreglo\n5.-Ordenar arreglo\n6.-Salir");
         opcion=scanner.nextInt();
         switch(opcion){
            case 1:
               for(int i=0;i<t;i++){
                  System.out.println("Ingresa el daro "+i);
                  array[i]=scanner.nextInt();
               }
               break;
            case 2:
               objet.mostrar(array,t);
               break;
            case 3:
               int inicio=0,destino=0,aux=0;
               System.out.print("posicion:");
               for(int i=1;i<=t;i++){
                  System.out.print(" "+i);
               }
               System.out.print("\n");
               System.out.print("contenido:");
               for(int i=0;i<t;i++){
                  System.out.print(" "+array[i]);
               }
               System.out.print("\n");
               System.out.print("\nIngresa la posicion que deseas momver:\n");
               inicio=scanner.nextInt();
               System.out.print("\nIngresa la posicion destino:\n");
               destino=scanner.nextInt();
               destino=destino-1;
               inicio=inicio-1;
               aux=array[destino];
               array[destino]=array[inicio];
               array[inicio]=aux;
               break;
            case 4:
               int s=t-1;
               for(int i=0;i<t;i++){
                  array2[i]=array[s];
                  s--;
               }
               for(int i=0;i<t;i++){
                  array[i]=array2[i];
               }
               break;
            case 5:
            aux=0;
               for(int i=0;i<t;i++){
                  for(int j=i;j<t;j++){
                     if(array[i]>array[j]){
                         aux=array[i+1];
                         array[i+1]=array[i];
                         array[i]=aux;
                     }
                  } 
               }
               break;
            case 6:
               break;
            default:
            
               break;
         
         
         }
      }while(opcion!=6);
   }
   void mostrar(int []arrat,int ta){
      System.out.println("La matriz es la siguiente");
      for(int j=0;j<ta;j++){
         System.out.print(" "+arrat[j]);
      }
      System.out.println("\n");
   }
}