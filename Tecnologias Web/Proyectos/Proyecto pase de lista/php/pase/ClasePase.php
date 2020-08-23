<?php
require_once "conexion.php";
class ClasePase extends Conexion{
		// El constructor hereda a conexion por lo tanto conecta el objeto a la bd
		public function __construct() 
		{
			parent::__construct();
			echo "Se construyo el objeto. ";	
		}
		public function general(){
			echo "Estoy consultando. ";
            $result = $this->db->query("SELECT * FROM alumnos");
            $usuarios = $result->fetch_all(MYSQLI_ASSOC);
            return $usuarios;
		}
		public function otro(){
			echo "Estoy consultando. ";
            $result = $this->db->query("SELECT COUNT(*) FROM alumnos");
            return $result;
		}
		public function ingresar($estado){
			
			$var=date("Y/m/d");
				$ingresa="INSERT INTO asistencia VALUES(default, $estado, '$var', 'SI BINO Xd')";		
			$result=$this->db->query($ingresa);
			if($result)
			{
				echo "El criterio fue registrado con éxito. ";
				return 1;
			}
			else
				return 0;
		}
		 public function grupos(){
            $con = $this->db->query("SELECT DISTINCT grupo from alumnos ");
            $usuarios = $con->fetch_all(MYSQLI_ASSOC);
            return $usuarios;
        }
        public function get_usuarios($que)
		{
			echo "Estoy consultando. ";
			$result = $this->db->query("SELECT * FROM alumnos where grupo=$que");
			$usuarios = $result->fetch_all(MYSQLI_ASSOC);
			return $usuarios;
		}

	}
?>