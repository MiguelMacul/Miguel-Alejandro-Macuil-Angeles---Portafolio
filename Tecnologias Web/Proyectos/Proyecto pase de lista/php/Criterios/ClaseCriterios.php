<?php
	require_once "../Confic/conexion.php";
	
	class claseCriterios extends Conexion
	{
		// El constructor hereda a conexion por lo tanto conecta el objeto a la bd
		public function __construct() 
		{
			parent::__construct();
			echo "Se construyo el objeto. ";	
		}
		public function insertar($id_unidad, $nom_Criterio, $porcentaje)
	    {
			$consulta="Insert into criterios values(default,$id_unidad, '$nom_Criterio', '$porcentaje' )";
			echo $consulta;
			$result=$this->db->query($consulta);
			if($result)
			{
				return 1;
			}
			else
				return 0;
		}
		
		public function get_criterios()
		{
			echo "Estoy consultando. ";
			$result = $this->db->query("SELECT * FROM criterios");
			$criterios = $result->fetch_all(MYSQLI_ASSOC);
			return $criterios;
		}
		public function Buscar(){
			echo "Metodo1";
			$result = $this->db->query("SELECT * FROM materia");
			$criterios = $result->fetch_all(MYSQLI_ASSOC);
			return $criterios;
		}
		public function Buscar2($algo){
			echo " Metodo2";
			echo $consulta="SELECT * FROM unidad WHERE id_materia='$algo'";
			$result = $this->db->query("SELECT * FROM unidad WHERE id_materia='$algo'");
			$criterios = $result->fetch_all(MYSQLI_ASSOC);
			return $criterios;
		}
	    
	    	public function consultas_especificas($id_criterio,$nom_Criterio)
		{
			echo "Estoy consultando. ";
			$consulta="SELECT * FROM criterios where $id_criterio='$nom_Criterio'";
			echo $consulta;
			$result = $this->db->query($consulta);
			$criterios = $result->fetch_all(MYSQLI_ASSOC);
			return $criterios;
		} 	
		public function eliminar($id)
		{
			$con = "DELETE from criterios WHERE id_criterio = '$id'";
			echo $con.". ";
			$result = $this->db->query($con);
			if ($result)
			{
				echo "El criterio se a eliminado correctamente. ";
				return 1;
			}
			else
				return 0;
		}
		
		public function BuscarActualizar($id)
		{
			$consulta="SELECT * FROM criterios WHERE id_criterio ='$id'";
			echo $consulta;
			$result = $this->db->query($consulta);
			$criterios = $result->fetch_all(MYSQLI_ASSOC);
			return $criterios;
		}
		public function Actualizar($id_criterio,$id_unidad,$nom_Criterio,$porcentaje)
		{
			$consulta="UPDATE  criterios SET id_criterio = '$id_criterio',  id_unidad = '$id_unidad', nom_Criterio = '$nom_Criterio', porcentaje = '$porcentaje' WHERE  id_criterio = '$id_criterio'";
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
		public function Filtrado($pase){
			$consulta="SELECT * FROM criterios where id_criterio='$pase'";
			echo $consulta;
			$result = $this->db->query($consulta);
			$criterios = $result->fetch_all(MYSQLI_ASSOC);
			return $criterios;
		}
	}
?>