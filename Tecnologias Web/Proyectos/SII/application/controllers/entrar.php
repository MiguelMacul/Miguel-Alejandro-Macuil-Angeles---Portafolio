<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class entrar extends CI_Controller {
	// atributo de tipo privado asignandole el valor de el modelo mwlogin que se utlizara en esta clase 
	private $model='mwlogin';
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
     public function acceso()
	{
		
		if($this->input->post()){
			if(strcmp($this->input->post('usuario'),"1431113313")==0 && strcmp($this->input->post('contra'),"bdhyuasgbdiuy")==0){
				$data['alumno']="1431113313";
				$this->load->view('Alumnos/Menu-Alumnos',$data);
			}else
			if(strcmp($this->input->post('usuario'),"1431113314")==0 && strcmp($this->input->post('contra'),"asdasdfgasf")==0){
				$data['alumno']="1431113314";
				$this->load->view('Alumnos/Menu-Alumnos',$data);
			}else{
					if(strcmp($this->input->post('usuario'),"esperanza14")==0 && strcmp($this->input->post('contra'),"hellopex")==0){
						$data['docente']="1";
						$this->load->view('Docente/Menu-Docente',$data);
					}else{
						$this->load->view('login/login-en');
					}
			}
		
		}else{
				$this->load->view('login/login-en');
		}
			
	
		
				}	
}
    
?>