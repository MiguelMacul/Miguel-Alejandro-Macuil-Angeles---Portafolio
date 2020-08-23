<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//creacion de la clase aspirante que Hereda de clase CI_Controller
class aspirante extends CI_Controller {
	// atributo de tipo privado asignandole el valor de el modelo mwaspirante que se utlizara en esta clase 
	private $model='mwaspirante';
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
	
	// constructor de la clase
	public function __construct()
    {
        parent::__construct();

        //Corremos modelo de base de datos
        $this->load->model($this->model);
    }
	
	public function index()
	{
		//llamado a la vista menu aspirante
		$this->load->view('aspirante/Menu-Aspirante');
		
	}
    public function aceptados()
	{
		//asignacion de los datos de aceptados_aspirante a, el arreglo data['aceptados']
		$data['aceptados']=$this->{$this->model}->aceptados_aspirante();
		//asignacion de los datos de aceptados_aspirante a, el arreglo data['alumnos']
		$data['alumnos']=$this->{$this->model}->listado_alumnos();
		//llamado a la vistaAceptados enviando como parametro la informacion asignada al arreglo data de aceptados_aspirante y listado_alumnos
		$this->load->view('aspirante/Aceptados',$data);
	}
     public function pre()
	{
		//cracion de arreglo data que contendra la informacion obtenida del  formulario por el metodo post identificando cada input por su nombre
		$data=array(
			'nombre' => $this->input->post('nombre'),
			'apellidoP' => $this->input->post('apellidoP'),
			'apellidoM' => $this->input->post('apellidoM'),
			'carrera' => $this->input->post('carrera'),
			'adeudadas' => $this->input->post('adeudadas'),
			'cantidadmaterias' => $this->input->post('cantidadmaterias'),
			'actaN' => $this->input->post('actaN'),
			'curp' => $this->input->post('curp'),
			'comprobanteD' => $this->input->post('comprobanteD'),
			'comprobanteE' => $this->input->post('comprobanteE'),
			'fotoA' => $this->input->post('fotoA'),
			'Admision' => $this->input->post('Admision'),
			'formatoI' => $this->input->post('formatoI'),
			'enfermedad' => $this->input->post('enfermedad'),
			'tipoE' => $this->input->post('tipoE'),
			'tratamientoE' => $this->input->post('tratamientoE'),
			'alergia' => $this->input->post('alergia'),
			'tipoAlergia' => $this->input->post('tipoAlergia'),
			'ansiedad' => $this->input->post('ansiedad'),
			'estres' => $this->input->post('estres'),
			'rechazoFami' => $this->input->post('rechazoFami'),
			'cambios' => $this->input->post('cambios'),
		);
		//mediante una condicinal ser verifica que  con el uso del metodo post se alla enviando los datos y hasta ese momento ejecutara el codigo en su interior
		if($this->input->post() ){
			//llamado de la funcion agregar_aspirante enviando como parametros la informacion extraida del formulario almacenada en un arreglo llamado data
			$this->{$this->model}->agregar_aspirante($data);
			
		}
		 //llamado a la vista pre-registro
	$this->load->view('aspirante/pre-registro');	


	}
	//creacion de la funcion inscribir 
     public function inscribir()
	{
		  //llamado a la vista inscribir
		$this->load->view('aspirante/inscribir');
	}
}
