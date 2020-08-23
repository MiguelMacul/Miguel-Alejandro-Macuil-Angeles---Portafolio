<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//creacion de la clase mwlogin, creado asi el modelo para el login , heredando a la clase CI_Model
class mwlogin extends CI_Model {
	//funcion creada para validar el acceso de login recibiendo dos parametros, el usuario y la contrasenia 
	//devolviendo como resultado la informacion del usuario
	public function validar($usuario,$contras)
	{
		$query = 'SELECT alumnos.nomatricula as matricula, usuarios.usuario as usuarios, usuarios.usuario as contra from usuarios, alumnos WHERE alumnos.idusuario=usuarios.idusuario and usuarios.usuario="'.$usuario .'" and usuarios.contra="'.$contras.'"';
        $resultados = $this->db->query($query);
      return $resultados->result();
	}
	
}  

?>