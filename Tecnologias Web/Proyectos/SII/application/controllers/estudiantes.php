<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//creacion de la clase estudiantes que hereda de la clase  CI_Controller
class estudiantes extends CI_Controller {
	// atributo de tipo privado asignandole el valor de el modelo mwalumnos que se utlizara en esta clase 
	private $model='mwalumnos';
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function __construct()
    {
        parent::__construct();

        //Corremos modelo de base de datos
        $this->load->model($this->model);
    }
	//funcion raiz de la calise estudiantes 
	public function index()
	{
		//lamado de la vista Menu-Alumnos
		$this->load->view('Alumnos/Menu-Alumnos');
	}
    public function tabla($matricula)
	{
		//asignar al arreglo data $matricula
		$data['alumno']=$matricula;
			//asignar al arreglo data el sultado de la consulta
		$data['califica']=$this->{$this->model}->mostrar_calificaciones($matricula);
		//lamado de la vista Acta-calificacion enviando $data 
		$this->load->view('Alumnos/Acta-calificacion',$data);
	}
	public function menu($valor)
	{
		//asignar al arreglo data $valor
		$data['alumno']=$valor;
		//lamado de la vista Menu-Alumnos enviando $data 
		$this->load->view('Alumnos/Menu-Alumnos',$data);
	}
    
}
