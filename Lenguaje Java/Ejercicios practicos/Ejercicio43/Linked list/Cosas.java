public class Cosas{
	private String color;
	private int numeros;
	public Cosas(){
		this.color="";
		this.numeros=0;
	}
	public Cosas(String color, int numero){
		this.color=color;
		this.numeros=numero;
	}
	public String SetColor(){
		return this.color;
	}
	public void GetColor(String color){
		this.color=color;
	}
	public int SetNumeros(){
		return this.numeros;
	}
	public void GetNumero(int numeros){
		this.numeros=numeros;
	}
}