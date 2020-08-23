<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//creacion de la clase mwdocente, creado asi el modelo para los docentes, heredando a la clase CI_Model
class mwdocente extends CI_Model {
	//declaracion de funcion listado_materias recibiendo un parametro
	//funcion creada para devolver los datos que se encuentran en la tabla materia
	public function listado_materias($a)
	{
		$this->db->where('iddocente', $a);
		return $this->db->get('materia')->result();
	}
	
	//declaracion de funcion ver_calificaciones recibiendo un parametro
	//que tiene como objetivo realizar multiples consultas a la base de datos, para mostrar las calificaciones  de los alumnos
	public function ver_calificaciones($materia)
	{
		$query = 'SELECT calificacion.idcalificacion as idcalificacion,alumnos.nomatricula as matricula  ,CONCAT(aspirante.nombre," ", aspirante.apellidoP," ",aspirante.apellidoM) as nombre, calificacion.parcial1 AS parcial1, calificacion.parcial2 AS parcial2, calificacion.parcial3 AS parcial3, calificacion.parcial4 AS parcial4, (calificacion.parcial1+calificacion.parcial2+calificacion.parcial3+calificacion.parcial4)/4 as total from  aspirante, alumnos,calificacion WHERE aspirante.Id_aspirante=alumnos.idaspirante and calificacion.idalumno=alumnos.nomatricula and calificacion.idmateria='.$materia;
        $resultados = $this->db->query($query);
		return $resultados->result();
	}
		//declaracion de funcion actualizar_calificacion recibiendo cinco parametros siendo el primero el id del estudiante y el resto las calificaciones de los paraciales del estudinte
	//funcion creada para actualizar las calificaciones de los estudiantes simultaneamente segun se modifiquen 
	public function actualizar_calificacion($idcali,$p1,$p2,$p3,$p4)
	{
		
	 $query = 'UPDATE calificacion SET parcial1= '.$p1.',  parcial2='.$p2.' ,  parcial3 ='.$p3.',  parcial4='.$p4.' WHERE idcalificacion='.$idcali;
		return $resultados = $this->db->query($query);
	}
	
}
?>