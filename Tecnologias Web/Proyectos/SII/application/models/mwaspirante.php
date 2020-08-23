<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//creacion de la clase mwalumnos, creado asi el modelo para los aspirantes, heredando a la clase CI_Model
class mwaspirante extends CI_Model {
	//declaracion de funcion agregar_aspirante que recibe como parametros un arreglo
	//funcion creada para insertar datos en la tabla aspirante
	public function agregar_aspirante($data)
	{
		return $this->db->insert('aspirante',$data);
	}
	//declaracion de funcion aceptados_aspirante 
	//funcion creada para devolver los datos que se encuentran en la tabla aspirante
	public function aceptados_aspirante()
	{
		return $this->db->get('aspirante')->result();
	}
	//declaracion de funcion listado_alumnos 
	//funcion creada para devolver los datos que se encuentran en la tabla alumnos
	public function listado_alumnos()
	{
		return $this->db->get('alumnos')->result();
	}
}

?>