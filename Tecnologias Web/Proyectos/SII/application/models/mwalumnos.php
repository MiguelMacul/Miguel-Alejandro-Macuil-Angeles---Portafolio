<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//creacion de la clase mwalumnos, creado asi el modelo para los estudiante, heredando a la clase CI_Model
class mwalumnos extends CI_Model {
	// declaracion de funcion mostrar_calificaciones que recibe como parametro $matricula variable utilidad para identificar al estudiante en la consulta
	//esta funcion devuelve como resultado una matriz que tendra los datos del estudiante
	public function mostrar_calificaciones($matricula)
	{
		//consulta creada para buscar al estudiante y buscar sus calificaciones de los parciales
		$query = 'SELECT materia.nombrem as Materia,docente.Nombrecompleto as Docente, grupos.nombre as grupos, calificacion.parcial1 as parcial1,calificacion.parcial2 as parcial2,calificacion.parcial3 as parcial3,calificacion.parcial4 as parcial4, (calificacion.parcial1+calificacion.parcial2+calificacion.parcial3+calificacion.parcial4)/4 as Final,calificacion.modificacion as Modificacion FROM calificacion,materia,docente,grupos,alumnos WHERE calificacion.idmateria=materia.idmateria AND materia.iddocente=docente.iddocente and grupos.idgrupo=alumnos.idgrupo and calificacion.idalumno=alumnos.nomatricula and alumnos.nomatricula='.$matricula;
        $resultados = $this->db->query($query);
		//retorno de los resultados de la consulta
		return $resultados->result();
	}
	
}

?>