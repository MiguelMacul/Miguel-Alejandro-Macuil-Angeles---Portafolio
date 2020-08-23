<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//creacion de la clase docente que hereda de la clase  CI_Controller
class docentes extends CI_Controller {
	// atributo de tipo privado asignandole el valor de el modelo mwdocente que se utlizara en esta clase 
	private $model='mwdocente';
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
	//constructor
	public function __construct()
    {
        parent::__construct();
        //Corremos modelo de base de datos
		//importar modelo a controlador
        $this->load->model($this->model);
    }
	//funcion indice de la clase 
	public function index()
	{
		 //llamado a la vista Menu-Docente
		$this->load->view('Docente/Menu-Docente');
	}
	//funcion evalua creada con un parametro
	//
    public function evalua($docente)
	{
		//se asigna al arreglo data el numero de docente enviado a la funcion
		$data['docente']= $docente;
		//asignar al arreglo data el input selection 
		$data['valor']= $this->input->post('selecion');
		//asignar al arreglo data la informacion resultante del retorno de la funcion ver_calificaciones
		$data['calificar']=$this->{$this->model}->ver_calificaciones( $this->input->post('selecion'));
		//llamado a la vista Evaluar
		$this->load->view('Docente/Evaluar',$data);
	}
	//funcion creada para llamar a la vista menu docente recibiendo como parametro el numero de alumno
	public function menus($dat)
	{
		//se asigna al arreglo data el numero de docente enviado a la funcion
		$data['docente']=$dat;
		$this->load->view('Docente/Menu-Docente',$data);
		
	}
	//funcion creada para mostrar los grupos que posee el docente logueado recibiendo como parametros su numero de usuario
     public function grupo($docente)
	{
		 //se asigna al arreglo data el numero de docente enviado a la funcion
		$data['docente']=$docente;
		//asignar al arreglo data la informacion resultante del retorno de la funcion listado_materias
		$data['materias']=$this->{$this->model}->listado_materias($docente);
		 //llamado a la vista Captura-calificaciones enviando los datos de las consulta
		$this->load->view('Docente/Captura-calificaciones',$data);
	}
	//funcion modificar_calificaciones creada para modificar y actualizar las calificaciones del grupo que el docente este evaluando
	public function modificar_calificaciones($v,$docente)
	{
		//se asigna al arreglo data el numero de docente enviado a la funcion
		$data['valor']= $v;
		$data['docente']=$docente;
		//llenado de arrreglos creados para almacenar totas las calificaciones de los parciales de los estudiantes que se encuentran en el grupo y materia en cuestion llamados desde la tabla por post
		$array1= $this->input->post('califica');
		$array2= $this->input->post('parcial1');
		$array3= $this->input->post('parcial2');
		$array4= $this->input->post('parcial3');
		$array5= $this->input->post('parcial4');
		//for creado para recorrer el arrelo recibido de las calificaciones actulizadas po el docente del formulario
		for($i=0;$i<sizeof($array2);$i++){
			//llamado de funcion creada para actualizar los datos de calificaciones de los estudiantes 
			//este bloque iterara hasta que todos los gistros allan sido actualizados
			$this->{$this->model}->actualizar_calificacion($array1[$i],$array2[$i],$array3[$i],$array4[$i],$array5[$i]);
		}
		//almacenar en el arreglo data la informacion resultante del llamado de la funcion ver_calificaciones del modelo
	$data['calificar']=$this->{$this->model}->ver_calificaciones( $v);
		//llamado a la vista Evaluar
		$this->load->view('Docente/Evaluar',$data);
 	}
}
?>