<?php
	require_once "../Confic/conexion.php";
	
	class claseAsistencia extends Conexion
	{
		// El constructor hereda a conexion por lo tanto conecta el objeto a la bd
		public function __construct() 
		{
			parent::__construct();
			echo "Se construyo el objeto. ";	
		}
		public function insertar($matricula,$fecha,$observacio)
	    {
			$consulta="Insert into asistencia values(default,'$matricula','$fecha','$observacio')";
			echo $consulta;
			$result=$this->db->query($consulta);
			if($result)
			{
				echo "registro con éxito. ";
				return 1;
			}
			else
				return 0;
		}
		
	 public function get_asistencia()
        {
            echo "Estoy consultando. ";
            $result = $this->db->query("SELECT * FROM asistencia");
            $asistencia = $result->fetch_all(MYSQLI_ASSOC);
            return $asistencia;
        }

	public function consultas_especificas($donde,$que)
		{
			echo "Estoy consultando. ";
			$consulta="SELECT * FROM asistencia where $donde='$que'";
			echo $consulta;
			$result = $this->db->query($consulta);
			$asistencia = $result->fetch_all(MYSQLI_ASSOC);
			return $asistencia;
		} 	

        public function eliminar($id)
        {
            $con = "delete from asistencia WHERE id_asistencia = '$id'";
            echo $con.". ";
            $result = $this->db->query($con);
            if ($result)
            {
                echo "se elimino con éxito. ";
                return 1;
            }
            else
                return 0;
        }
	
	
       public function BuscarActualizar($id)
		{
			$consulta="SELECT * FROM asistencia WHERE id_asistencia ='$id'";
			echo $consulta;
			$result = $this->db->query($consulta);
			$asistencia = $result->fetch_all(MYSQLI_ASSOC);
			return $asistencia;
		}
		public function Actualizar($id_asistencia,$matricula,$fecha,$observacion)
		{
			$consulta="UPDATE  asistencia SET id_asistencia = '$id_asistencia',  matricula = '$matricula', fecha = '$fecha', observacion = '$observacion' WHERE  id_asistencia = '$id_asistencia'";
		    echo $consulta;
			$result = $this->db->query($consulta);
			if ($result)
			{
				echo "se actualizo correctamente. ";
				return 1;
			}
			else
				return 0;
		}
		public function Filtrar($fecha){
			echo "Estoy consultando. ";
			$consulta="SELECT * FROM asistencia where fecha='$fecha'";
			echo $consulta;
			$result = $this->db->query($consulta);
			$asistencia = $result->fetch_all(MYSQLI_ASSOC);
			return $asistencia;
		}
	}
?>