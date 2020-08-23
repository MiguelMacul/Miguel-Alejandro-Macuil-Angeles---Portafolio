<?php
    require_once "../Confic/conexion.php";
     
    class ClaseCalificaciones extends conexion
    {
        // El constructor hereda a conexion por lo tanto conecta el objeto a la bd
        public function __construct() 
        {
            parent::__construct();
            echo "Se construyo el objeto. ";    
        }
        public function insertar($matricula,$id_criterio,$num_actividad,$calificacion,$observacion)
        {
            $consulta="Insert into calificaciones values(default,'$matricula', $id_criterio, $num_actividad, $calificacion, '$observacion')";
            echo $consulta;
            $result=$this->db->query($consulta);
            if($result)
            {
                echo "La calificacion fue registrada con éxito. ";
                return 1;
            }
            else
                return 0;
        }
         
        public function get_calificaciones()
        {
            echo "Estoy consultando. ";
            $result = $this->db->query("SELECT * FROM calificaciones");
            $calificaciones = $result->fetch_all(MYSQLI_ASSOC);
            return $calificaciones;
        }

	public function consultas_especificas($donde,$que)
		{
			echo "Estoy consultando. ";
			$consulta="SELECT * FROM calificaciones where $donde='$que'";
			echo $consulta;
			$result = $this->db->query($consulta);
			$calificaciones = $result->fetch_all(MYSQLI_ASSOC);
			return $calificaciones;
		} 	

        public function eliminar($id)
        {
            $con = "delete from calificaciones WHERE id_calificacion = '$id'";
            echo $con.". ";
            $result = $this->db->query($con);
            if ($result)
            {
                echo "La calificacion fue eliminada con éxito. ";
                return 1;
            }
            else
                return 0;
        }
	
	
       public function BuscarActualizar($id)
		{
			$consulta="SELECT * FROM calificaciones WHERE id_calificacion ='$id'";
			echo $consulta;
			$result = $this->db->query($consulta);
			$calificaciones = $result->fetch_all(MYSQLI_ASSOC);
			return $calificaciones;
		}
		public function Actualizar($id_calificacion,$matricula,$id_criterio,$num_actividad,$calificacion,$observacion)
		{
			$consulta="UPDATE  calificaciones SET id_calificacion = '$id_calificacion',  matricula = '$matricula', id_criterio = '$id_criterio', num_actividad = '$num_actividad', calificacion = '$calificacion', observacion = '$observacion' WHERE  id_calificacion = '$id_calificacion'";
		    echo $consulta;
			$result = $this->db->query($consulta);
			if ($result)
			{
				echo "la actualizacion fue todo un exito  ";
				return 1;
			}
			else
				return 0;
		}
        public function Filtro($actividad){
            $consulta="SELECT * FROM calificaciones WHERE Num_Actividad ='$actividad'";
            echo $consulta;
            $result = $this->db->query($consulta);
            $calificaciones = $result->fetch_all(MYSQLI_ASSOC);
            return $calificaciones;
        }
	}
?>