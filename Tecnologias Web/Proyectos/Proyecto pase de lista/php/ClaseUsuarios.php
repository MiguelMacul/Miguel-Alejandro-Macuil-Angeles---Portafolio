<?php
	require_once "Confic/conexion.php";
	
	class claseUsuarios extends Conexion
	{
		// El constructor hereda a conexion por lo tanto conecta el objeto a la bd
		public function __construct() 
		{
			parent::__construct();
			echo "Se construyo el objeto. ";	
		}
		public function insertar($usuario,$pass)
	    {
			$consulta="Insert into usuarios values('$usuario','$pass', default)";
			echo $consulta;
			$result=$this->db->query($consulta);
			if($result)
			{
				echo "El usuario fue registrado con éxito. ";
				return 1;
			}
			else
				return 0;
		}
		
		public function get_usuarios()
		{
			echo "Estoy consultando. ";
			$result = $this->db->query("SELECT * FROM Usuarios");
			$usuarios = $result->fetch_all(MYSQLI_ASSOC);
			return $usuarios;
		}
	    
	    	public function consultas_especificas($donde,$que)
		{
			echo "Estoy consultando. ";
			$consulta="SELECT * FROM usuarios where $donde='$que'";
			echo $consulta;
			$result = $this->db->query($consulta);
			$usuarios = $result->fetch_all(MYSQLI_ASSOC);
			return $usuarios;
		} 	
		public function eliminar($id)
		{
			$con = "delete from Usuarios WHERE usuario = '$id'";
			echo $con.". ";
			$result = $this->db->query($con);
			if ($result)
			{
				echo "El usuario fue eliminado con éxito. ";
				return 1;
			}
			else
				return 0;
		}
		
		public function BuscarActualizar($id)
		{
			$consulta="SELECT * FROM Usuarios WHERE usuario='$id'";
			echo $consulta;
			$result = $this->db->query($consulta);
			$usuarios = $result->fetch_all(MYSQLI_ASSOC);
			return $usuarios;
		}
		public function Actualizar($id,$usuario,$pass,$edo)
		{
			$consulta="UPDATE  usuarios SET  usuario='$usuario', pass =  '$pass', estado='$edo' WHERE  usuario =  '$id'";
		    echo $consulta;
			$result = $this->db->query($consulta);
			if ($result)
			{
				echo "El usuario fue eliminado con éxito. ";
				return 1;
			}
			else
				return 0;
		}
	}
?>