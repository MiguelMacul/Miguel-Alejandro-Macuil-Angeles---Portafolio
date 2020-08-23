<?php
	require_once "conexion.php";
class ClaseQr extends Conexion{
		// El constructor hereda a conexion por lo tanto conecta el objeto a la bd
		public function __construct() 
		{
			parent::__construct();
			echo "Se construyo el objeto. ";	
		}
		public function ingresar($estado){
			
			$var=date("Y/m/d");
			$observacio="nada";
				$ingresa="Insert into asistencia values(default,'$estado','$var','$observacio')";	
			$result=$this->db->query($ingresa);
			if($result)
			{
				echo "El criterio fue registrado con éxito. ";
				return 1;
			}
			else{
				echo $ingresa;
				echo "El registro fue nulo";
			}
				
			
		}
		public function buscar($matricula){
			$consulta = "SELECT * FROM alumnos where matricula=$matricula";
          	$result = $this->db->query($consulta);
            $usuarios = $result->fetch_all(MYSQLI_ASSOC);
            return $usuarios;
		}


	}

?>