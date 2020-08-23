class Refrigerado extends Productos{
   private String CodigoDeSupervicion;
   private String PaisDeOrigen;
   private String FechaDeEnvasado;
   private String Temperatura;

   public Refrigerado(){
    
     
   }
    public void GetCodigoDeSupervicion(String pase){
      this.CodigoDeSupervicion=pase;
   }
    public void GetPaisDeOrigen(String pase){
      this.PaisDeOrigen=pase;
   }
    public void GetFechaDeEnvasado(String pase){
      this.FechaDeEnvasado=pase;
   }
   public void GetTemperatura(String pase){
      this.Temperatura=pase;
   }


}