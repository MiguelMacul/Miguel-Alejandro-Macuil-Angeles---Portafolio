import java.util.*;
public class Main{
	public static void main(String[]args) throws Exception{
		
       int opc1, opc2, num;
       String color="";
       LL_Enteros obj1= new LL_Enteros();
       Scanner leer = new Scanner(System.in); 
       do{
       		System.out.println("1. Guardar \n2.Eliminar \n3.Recorrer\n 4.- Salir "); 
			opc1= leer.nextInt();
			switch(opc1){
				case 1:
					System.out.print("Numero a guarda:");
					num=leer.nextInt();
					System.out.print("Numero a color:");
					color=leer.next();
					obj1.guardar(color,num);
				break;
				case 2:
		   			obj1.eliminar();
		   		break;
				case 3:
		    		obj1.recorrer();
		    	break;
		    	case 4:

		    	break;  
		    } 
		}while(opc1!=4);
	}
}