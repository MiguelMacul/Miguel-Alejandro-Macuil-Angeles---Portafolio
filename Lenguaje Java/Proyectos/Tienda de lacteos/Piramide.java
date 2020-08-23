public class Piramide{
	private double Volumen;
	private double Base;
	private double Altura;
	public Piramide(){
		this.Volumen=0.0;
		this.Base=0.0;
		this.Altura=0.0;
	}
	public void SetBase(double b){
		this.Base=b*b;
	}
	public void SetVolumen(double v){
		this.Volumen=v;
	}
	public void SetAltura(double a){
		this.Altura=a;
	}
	public double GetBase(){
		return this.Base;
	}
	public double GetVolumen(){

		return this.Volumen;
	}
	public double GetAltura(){
		return this.Altura;
	}
	public void Calcular(){
		double resultado=0;
		resultado=((this.GetBase()*this.GetAltura())/3);
		this.SetVolumen(resultado);
	}
	public void Mostrar(){
		System.out.println("El volumen es: "+this.GetVolumen());
	}
}