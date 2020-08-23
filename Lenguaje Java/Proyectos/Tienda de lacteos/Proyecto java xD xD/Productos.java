import java.util.*;
import java.io.File;
import java.io.FileNotFoundException;
import java.lang.IllegalStateException;
import java.util.NoSuchElementException;
import java.util.Scanner;
class Productos{
   private String Nombre;
   private String FechaDeCaducidad;
   private String NumeroDeLote;
   public int avance;
   private Scanner entrada;
   public String Arreglo[]=new String[100];
   public Productos(){
      this.avance=0;
   }
   public void CargarProducto(){
      this.abrirArchivo("ProductosCongelados.txt");
      this.leerRegistros(1);
      this.cerrarArchivo();
      this.abrirArchivo("ProductosFresco.txt");
      this.leerRegistros(2);
      this.cerrarArchivo();   
      this.abrirArchivo("ProductosRedrigerados.txt");
      this.leerRegistros(3);
      this.cerrarArchivo();  
   }
   public void Imprimir(){
      for(int i=0;i<this.avance;i++){
         System.out.print(Arreglo[i]);
      }
   }
   public void AgregarProductos(){
   
     int opc=0;
     Scanner Tecleado=new Scanner(System.in);
      System.out.println("Seleccione el tipo de producto a ingresar\n1.-Productos frescos\n2.-Producto refrigerados\n3.-Productos congelados");
      opc=Tecleado.nextInt();
      switch(opc){
         case 1:
            String cadena="";
            Fresco q=new Fresco();
            System.out.println("Fecha de caducidad");
            this.FechaDeCaducidad=Tecleado.next();
            System.out.println("Numero de lote");
            this.NumeroDeLote=Tecleado.next();
            System.out.println("Fecha de envasado");
            q.GetEnvase(Tecleado.next());
            System.out.println("Pais de origen");
            q.GetPaisDeOrigen(Tecleado.next());
            cadena=this.FechaDeCaducidad+"   "+this.NumeroDeLote+"  "+q.SetEnvase()+"   "+q.SetPaisDeOrigen()+"\n";
            
           this.Arreglo[this.avance]=cadena;
           this.avance+=1;
            break;
         case 2:
            Refrigerado c=new Refrigerado();
            System.out.println("Fecha de caducidad");
            this.FechaDeCaducidad=Tecleado.next();
            System.out.println("Numero de lote");
            this.NumeroDeLote=Tecleado.next();
            System.out.println("código de la empresa de supervisión alimentaria");
            c.GetCodigoDeSupervicion(Tecleado.next());
            System.out.println(" fecha de envasado");
            c.GetCodigoDeSupervicion(Tecleado.next());
             System.out.println("emperatura de mantenimiento recomendada");
            c.GetCodigoDeSupervicion(Tecleado.next());
             System.out.println(" el país de origen");
            c.GetTemperatura(Tecleado.next());
            break;
         case 3:
              Refrigerado x=new Refrigerado();
               System.out.println("Fecha de caducidad");
               this.FechaDeCaducidad=Tecleado.next();
               System.out.println("Numero de lote");
               this.NumeroDeLote=Tecleado.next();
               System.out.println(" : fecha de envasado");
               x.GetFechaDeEnvasado(Tecleado.next());
               System.out.println(" el país de origen");
               x.GetPaisDeOrigen(Tecleado.next());
               System.out.println("Temperatura");
               x.GetTemperatura(Tecleado.next());
         break;
      
      }
   }
   
   public void abrirArchivo(String Archivo)
   {
   
      try {
         entrada = new Scanner( new File( Archivo ) );
      } // fin de try
      catch ( FileNotFoundException fileNotFoundException )
      {
         System.err.println( "Error al abrir el archivo." );
         System.exit( 1 );
      } // fin de catch
   }
   public void leerRegistros(int opc)
   {
      String pasar="";
      try // lee registros del archivo, usando el objeto Scanner
      {
         while ( entrada.hasNext() )
         {
            switch(opc){
               case 1:
                  pasar+="\n";
                  pasar+=entrada.next();
                  pasar+="   ";
                  pasar+=entrada.next();
                  pasar+="   ";
                  pasar+=entrada.next();
                  pasar+="   ";
                  pasar+=entrada.next();
                  pasar+="   ";
                  pasar+=entrada.next();
                  pasar+="   ";
                  pasar+=entrada.next();
                  this.Arreglo[this.avance]=pasar;
               
                  this.avance+=1;
                  pasar="";
               
                  break;
               case 2:
                  pasar+="\n";
                  pasar+=entrada.next();
                  pasar+="   ";
                  pasar+=entrada.next();
                  pasar+="   ";
                  pasar+=entrada.next();
                  pasar+="   ";
                  pasar+=entrada.next();
                  this.Arreglo[this.avance]=pasar;
                  this.avance+=1;
                  pasar="";
               
                  break;
               case 3:
                  pasar+="\n";
                  pasar+=entrada.next();
                  pasar+="   ";
                  pasar+=entrada.next();
                  pasar+="   ";
                  pasar+=entrada.next();
                  pasar+="   ";
                  pasar+=entrada.next();
                  pasar+="   ";
                  pasar+=entrada.next();
                  pasar+="   ";
                  pasar+=entrada.next();
                  this.Arreglo[this.avance]=pasar;
               
                  this.avance+=1;
                  pasar="";
               
                  break;
            }
            // muestra el contenido del registro
         } // fin de while
      } // fin de try
      catch ( NoSuchElementException elementException )
      {
         System.err.println( "El archivo no esta bien formado." );
         entrada.close();
         System.exit( 1 );
      } // fin de catch
      catch ( IllegalStateException stateException )
      {
         System.err.println( "Error al leer del archivo." );
         System.exit( 1 );
      } // fin de catch
   } // fin del método leerRegistros

 // cierra el archivo y termina la aplicación
   public void cerrarArchivo()
   {
      if ( entrada != null )
         entrada.close(); // cierra el archivo
   } // fin del método cerrarArchivo
}