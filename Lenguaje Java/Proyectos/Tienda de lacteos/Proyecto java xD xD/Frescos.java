import java.util.*;
class Fresco extends Productos{
   private String FechaDeEnvasado;
   private String PaisDeOrigen;
   public Fresco(){
      CargarProductos();
   }
    public void CargarProductos(){
   
   }
   public void GetEnvase(String Envasado){
      this.FechaDeEnvasado=Envasado;
   }
   public String SetEnvase(){
      return this.FechaDeEnvasado;
   }
      public void GetPaisDeOrigen(){
      this.PaisDeOrigen=Envasado;
   }
   public String SetPaisDeOrigen(){
      return this.PaisDeOrigen;
   }
   


}