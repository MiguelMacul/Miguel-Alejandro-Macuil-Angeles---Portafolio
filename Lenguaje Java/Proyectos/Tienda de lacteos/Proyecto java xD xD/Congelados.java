import java.io.File;
import java.io.FileNotFoundException;
import java.lang.IllegalStateException;
import java.util.NoSuchElementException;
import java.util.Scanner;
class Congelados extends Productos{
   private String PaisDeOrigen;
   private String FechaDeEnvasado;
   private int Temperatura; 
   private Scanner entrada;
   public Congelados(){
      
   }
   public void GetPaisDeOrigen(String pase){
      this.PaisDeOrigen=pase;
   }
   public void GetFechaDeEnvasado(String pase){
      this.PaisDeOrigen=pase;
   }

   public void GetTemperatura(String pase){
      this.Temperatura=pase;
   }
}
   
